<?php

namespace App\Http\Controllers\Admin;

use App\Form;
use Illuminate\Http\Request;
use App\Http\Controllers\HelperController;

class FormBuilderController extends HelperController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forms = Form::all();
        return view('admin.formbuilder.templates.index')->with('forms', $forms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.formbuilder.templates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form = new Form;
        $form->name = $request->name;
        $form->save();

        // Beware that if the id is NOT autoincrement, this will always return 0.
        // In my case the id was a string (UUID) and for this to work I had to add public $incrementing = false; in my model.
        $last_insert_id = $form->id;

        return redirect()->route('admin.formbuilder.edit', $last_insert_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $form = Form::where('id', $id)->firstOrFail();
        return view('admin.formbuilder.templates.edit', compact('form'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $form = Form::where('id', $id)->firstOrFail();
        $form->name = $request->name;
        $form->fields = $request->fields;
        $form->save();

        return redirect()->route('admin.formbuilder.edit', $id)->with('status', 'Form Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
