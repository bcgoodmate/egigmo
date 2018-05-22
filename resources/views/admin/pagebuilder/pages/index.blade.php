@extends('layouts.admin')

@section('content')

    @include('admin.pagebuilder.pages.partials.alert')
    <div class="list-btr">
        <h2>Pages</h2>
    </div>
    <div class="list-view">
        @include('admin.pagebuilder.pages.partials.menu')
    </div>
    <div class="btn-add">
        <ul>
            <li><a href="{{route('admin.pagebuilder.create')}}">Add Page</a></li>
            <li><a href="#pl092" class="popup-edit">Extract template</a></li>
            <li><a href="#p2012" class="popup-edit">Apply template</a></li>
        </ul>
    </div>
    <div class="table-main">
        <table id="table-anchor" class="display" style="width:100%">
            <thead>
            <tr class="">
                <th width="20"><input type="checkbox" name=""></th>
                <th>Page Name</th>
                <th>URL</th>
                <th>Template</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pages as $page)
                <tr>
                    <td><input type="checkbox" name=""></td>
                    <td><a href="{{route('admin.pagebuilder.edit', $page->id)}}">{{$page->name}} {{$page->is_start_page ? '(Start Page)' : ''}}</a></td>
                    <td>{{$page->page_url}}</td>
                    <td>
                        @if($page->default_template)
                            default template
                        @else
                            @if($page -> template()->first())
                                {{$page -> template()->first()->name}}
                            @else
                                no template
                            @endif
                        @endif
                    </td>
                    <td>
                        <a href="{{str_replace_last('.html', '', $page->content_path)}}" target="_blank" class="blue">Preview</a> | 
                        <a href="{{route('admin.pagebuilder.edit', $page->id)}}"> Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="webform-popup">
        <div class="popup-content-wrapper mfp-hide" id="pl092">
            <div class="">
                <div class="list-btr">
                    <h2>Extract template</h2>
                </div>
                <div class="modalwindow">
                    <div class="">
                        <span>Please select exactly two pages. These will be compared and all common content will be saved as a site template.</span>
                    </div>
                    <div class="footerbuttons">
                        <hr>
                        <button class="btn btn-default">OK</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="popup-content-wrapper mfp-hide" id="p2012">
            <div class="">
                <div class="list-btr">
                    <h2>Apply template</h2>
                </div>
                <div class="modalwindow">
                    <div class="">
                        <span>Please select at least one page. You will then have the option to apply desired site template to selected pages.</span>
                    </div>
                    <div class="footerbuttons">
                        <hr>
                        <button class="btn btn-default">OK</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection