<?php

namespace App\Http\Controllers\Admin;

use App\Page;
use App\PageTemplate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Purifier;
use View;
use File;
use App\Helpers\SiteDirectory;

class PageTemplateBuilderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $templates = PageTemplate::all();

        return view('admin.pagebuilder.templates.index', compact('templates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $template = new PageTemplate();
        return view('admin.pagebuilder.templates.create', compact('template'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $template = new PageTemplate();
        $validator = Validator::make($request->all(), $template->rules());

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }


        $name = $request->name;
        $raw_body = $request->body;
        $body = $raw_body ? $raw_body : '{tag_pagecontent}';
        $is_default = false;
        if ($request->default_template) {
            $is_default = true;
            $default_template = PageTemplate::hasDefaultTemplate();
            if ($default_template) {
                $default_template->default_template = false;
                $default_template->save();
            }
        }

        $template_name = str_slug($name, '-') . '.html';
        $relative_file_path = '/template/' . $template_name;
        $file_path = public_path() . '/site/template/' . $template_name;

        $template->name = $name;
        $template->content_path = $relative_file_path;
        $template->content_html = $relative_file_path;
        $template->default_template = $is_default;
        $template->save();

        File::put($file_path,
            View::make('admin.pagebuilder.builder-generator.create-template', compact('body')));

        return redirect()->route('admin.pagetemplatebuilder.index')->with('status', $name . ' Template Created!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'waddht';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $template = PageTemplate::where('id', $id)->firstOrFail();
        return view('admin.pagebuilder.templates.edit', compact('template'));
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

        $template = PageTemplate::where('id', $id)->firstOrFail();

        $validator = Validator::make($request->all(), array(
            'name' => 'required'
        ));

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $name = $request->name;

        if (PageTemplate::where([['name', '=', $name], ['id', '!=', $id]])->first()) {
            return redirect()
                ->back()
                ->withErrors(array('name' => 'The name has already been taken.'))
                ->withInput();
        }

        $raw_body =$request->body;
        $body = $raw_body ? $raw_body : '{tag_pagecontent}';
        $is_default = false;
        if ($request->default_template) {
            $is_default = true;
            $default_template = PageTemplate::hasDefaultTemplate();
            if ($default_template) {
                $default_template->default_template = false;
                $default_template->save();
            }
        }

        $template_name = str_slug($name, '-') . '.html';
        $relative_file_path = '/template/' . $template_name;
        $file_path = public_path() . '/site/template/' . $template_name;

        $template->name = $name;
        $template->content_path = $relative_file_path;
        $template->content_html = $relative_file_path;
        $template->default_template = $is_default;
        $template->save();

        File::put($file_path,
            View::make('admin.pagebuilder.builder-generator.create-template', compact('body')));

        return redirect()->route('admin.pagetemplatebuilder.index')->with('status', $name . ' Template updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $template = PageTemplate::where('id', $id)->firstOrFail();
        SiteDirectory::removeFile(public_path() . '/site/' . $template->content_path);
        Page::where('page_template_id',$id)->update([
            'page_template_id' => null
        ]);
        $name = $template->name;
        $template->delete();
        return redirect()->route('admin.pagetemplatebuilder.index')->with('status', $name . ' Template deleted!');
    }

}
