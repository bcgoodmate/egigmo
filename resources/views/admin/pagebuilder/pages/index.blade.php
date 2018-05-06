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
        </ul>
    </div>
    <div class="table-main">
        <table id="table-anchor" class="display" style="width:100%">
            <thead>
            <tr class="">
                <th>Page Name</th>
                <th>URL</th>
                <th>Template</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pages as $page)
                <tr>
                    <td>{{$page->name}} {{$page->is_start_page ? '(Start Page)' : ''}}</td>
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
                        <a href="{{route('admin.pagebuilder.edit', $page->id)}}" class="blue"> Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection