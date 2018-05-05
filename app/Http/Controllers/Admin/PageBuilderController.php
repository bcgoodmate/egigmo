<?php

namespace App\Http\Controllers\Admin;

use App\Page;
use App\PageTemplate;
use Illuminate\Http\Request;
use App\Http\Controllers\HelperController;
use Purifier;
Use File;
use View;
use Validator;
use DirectoryIterator;
use App\Helpers\SiteDirectory;

class PageBuilderController extends HelperController
{
    private $treeDir = array();

    public function __construct()
    {

    }

    public function index()
    {
        $pages = Page::getActivePage()->get();
        return view("admin.pagebuilder.pages.index", compact('pages'));
    }

    /**
     * @return array|View
     */
    public function treeview(){


        $directories = glob('site/*');

        array_unshift($directories, 'site/');

        //return $directories;

        //$dir_files = [];

        //$this->treeIterator($directories);


        $dir_files = $this->treeDir;

        return view("admin.pagebuilder.pages.tree",compact('dir_files'));
    }

    public function treeIterator($directories){

        foreach($directories as $directory){

            if(is_dir($directory)){
                $subdirectories = glob($directory);
                $this->treeIterator($subdirectories);
            }

            /*$dir = 'site/'.$directory;

            $dirs = array_map(function ($item){
                $n = explode("/", $item);
                return $n[count($n)-1];
            }, glob($dir."/*.html"));*/

            $this->treeDir[$directory] = $directory;
        }
        return;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $directories = $this->recursiveDirectoryPath($this->recursiveDirectoryOnlyIterator('site'));
        $templates = PageTemplate::getActiveTemplate();
        $page = null;
        return view("admin.pagebuilder.pages.create", compact('page', 'directories', 'templates'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $page = new Page();

        $validator = Validator::make($request->all(), $page->rules());

        if ($validator->fails()) {
            $request->flash();
            return redirect()
                ->route('admin.pagebuilder.create')
                ->withInput()
                ->withErrors($validator);
        }

        $name = $request->name;
        $page_title = $request->page_title;
        $is_start_page = $request->start_page;
        $page_body = $request->page_body;
        $page_desc = $request->page_desc;
        $folder = $request->folder;
        $template = $request->template;
        return $is_start_page;
        $page_url = $folder . '/' . str_slug($name, '-');
        $page_name = str_slug($name, '-') . '.html';
        $relative_file_path = $folder . '/' . $page_name;
        $file_path = public_path() . '/site/' . $folder . '/' . $page_name;

        if (Page::where([['content_path', '=', $relative_file_path]])->first()) {
            return redirect()
                ->route('admin.pagebuilder.create')
                ->withInput()
                ->withErrors(array(
                    'name' => 'The name has already been taken on the folder.',
                    'folder' => 'The name already exist on this folder.'
                ));
        }

        if ($is_start_page) {
            $is_start_page = true;
            Page::where('is_start_page', true)->update(['is_start_page' => false]);
        }

        $page->name = $name;
        $page->slug = str_slug($name, '-');
        $page->content_path = $relative_file_path;
        $page->content_html = $page_body;
        $page->page_title = $page_title;
        $page->is_start_page = $is_start_page;
        $page->page_url = $page_url;
        $page->page_description = $page_desc;
        $page->page_template_id = $template == 'default' ? null : $template;
        $page->default_template = $template == 'default' ? true : false;
        $page->save();

        File::put($file_path,
            View::make('admin.pagebuilder.builder-generator.create-page',
                compact('page_title', 'page_body', 'page_desc', 'name')));

        return redirect()->route('admin.pagebuilder.index')->with('status', $name . ' Template created!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::where('id', $id)->firstOrFail();
        $directories = $this->recursiveDirectoryPath($this->recursiveDirectoryOnlyIterator('site'));
        $templates = PageTemplate::getActiveTemplate();
        $page['folder'] = str_replace_last('/' . $page->slug . '.html', '', $page->content_path);
        return view("admin.pagebuilder.pages.edit", compact('page', 'directories', 'templates'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $page = Page::where('id', $id)->firstOrFail();

        $validator = Validator::make($request->all(), array(
            'name' => 'required'
        ));

        if ($validator->fails()) {
            return redirect()
                ->route('admin.pagebuilder.create')
                ->withInput()
                ->withErrors($validator);
        }

        $name = $request->name;
        $folder = $request->folder;
        $page_name = str_slug($name, '-') . '.html';
        $relative_file_path = $folder . '/' . $page_name;

        if (Page::where([['content_path', '=', $relative_file_path], ['id', '!=', $id]])->first()) {

            return redirect()
                ->route('admin.pagebuilder.create')
                ->withInput()
                ->withErrors(array(
                    'name' => 'The name has already been taken on the folder.',
                    'folder' => 'The name already exist on this folder.'
                ));
        }


        $name = $request->name;
        $page_title = $request->page_title;
        $is_start_page = $request->start_page;
        $page_body = $request->page_body;
        $page_desc = $request->page_desc;
        $template = $request->template;


        if ($is_start_page) {
            Page::where([['is_start_page', '=', true], ['id', '!=', $id]])->update(['is_start_page' => false]);
        }

        $page_url = $folder . '/' . str_slug($name, '-');

        $file_path = public_path() . '/site/' . $folder . '/' . $page_name;

        SiteDirectory::removeFile(public_path() . '/site/' . $page->content_path);

        $page->name = $name;
        $page->slug = str_slug($name, '-');
        $page->content_path = $relative_file_path;
        $page->content_html = $page_body;
        $page->page_title = $page_title;
        $page->is_start_page = $is_start_page ? true : false;
        $page->page_url = $page_url;
        $page->page_description = $page_desc;
        $page->page_template_id = $template == 'default' ? null : $template;
        $page->default_template = $template == 'default' ? true : false;
        $page->save();

        File::put($file_path,
            View::make('admin.pagebuilder.builder-generator.create-page',
                compact('page_title', 'page_body', 'page_desc', 'name')));

        return redirect()->route('admin.pagebuilder.index')->with('status', $name . ' Template created!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Page::where('id', $id)->firstOrFail();
        SiteDirectory::removeFile(public_path() . '/site/' . $page->content_path);
        Page::where('page_template_id', $id)->update([
            'page_template_id' => null
        ]);
        $name = $page->name;
        $page->delete();
        return redirect()->route('admin.pagebuilder.index')->with('status', $name . ' Page deleted!');
    }

    public function folderStore(Request $request)
    {

        $name = strtolower($request->name);
        $folder = $request->folder;

        $validator = Validator::make($request->all(), array(
            'name' => 'required'
        ));

        if ($validator->fails()) {
            $request->flash();
            return redirect()->back()->with('fail_status', 'Folder name is required.');
        }

        if (!file_exists(public_path() . '/site/' . $folder . '/' . $name)) {
            mkdir(public_path() . '/site/' . $folder . '/' . $name, 0700);
        } else {
            return redirect()->back()->with('fail_status', $name . ' folder already exist.');
        }

        return redirect()->back()->with('status', $name . ' folder created.');

    }
}
