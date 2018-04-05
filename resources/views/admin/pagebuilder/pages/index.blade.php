@extends('layouts.admin')

@section('content')
    <div class="list-btr">
        <h2>Pages</h2>
    </div>
    <div class="list-view">
        <ul>
            <li><a href="#">List View</a></li>
        </ul>
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
                <th>Preview</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Admin Log In</td>
                <td>/_source/vendor/selectize.js-master/examples/api.html</td>
                <td>Inner</td>
                <td><a href="" target="_blank">Preview</a> | <a href=""> Edit</a></td>
            </tr>
            <tr>
                <td>contacts</td>
                <td>/browse/ph/butuan-city/gigs/cleaning-installation-and-repair/aircon-services</td>
                <td>Don't use a template</td>
                <td><a href="" target="_blank">Preview</a> | <a href=""> Edit</a></td>
            </tr>
            <tr>
                <td>Tiger Nixon</td>
                <td>/browse/by-event-type</td>
                <td>Don't use a template</td>
                <td><a href="" target="_blank">Preview</a> | <a href=""> Edit</a></td>
            </tr>
            <tr>
                <td>Browse Entertainers in Butuan City via eGigmo</td>
                <td>/browse/ph/butuan-city/gigs/entertainers</td>
                <td>Don't use a template</td>
                <td><a href="" target="_blank">Preview</a> | <a href=""> Edit</a></td>
            </tr>
            <tr>
                <td>Browse Entertainers in Butuan City via eGigmo</td>
                <td>/browse/ph/butuan-city/gigs/entertainers</td>
                <td>Inner</td>
                <td><a href="" target="_blank">Preview</a> | <a href=""> Edit</a></td>
            </tr>
            <tr>
                <td>Browse Entertainers in Butuan City via eGigmo</td>
                <td>/browse/ph/butuan-city/gigs/entertainers</td>
                <td>Inner</td>
                <td><a href="" target="_blank">Preview</a> | <a href=""> Edit</a></td>
            </tr>
            <tr>
                <td>Browse Entertainers in Butuan City via eGigmo</td>
                <td>/browse/ph/butuan-city/gigs/entertainers</td>
                <td>Inner</td>
                <td><a href="" target="_blank">Preview</a> | <a href=""> Edit</a></td>
            </tr>
            <tr>
                <td>Browse Entertainers in Butuan City via eGigmo</td>
                <td>/browse/ph/butuan-city/gigs/entertainers</td>
                <td>Inner</td>
                <td><a href="" target="_blank">Preview</a> | <a href=""> Edit</a></td>
            </tr>
            <tr>
                <td>Browse Entertainers in Butuan City via eGigmo</td>
                <td>/browse/ph/butuan-city/gigs/entertainers</td>
                <td>Inner</td>
                <td><a href="" target="_blank">Preview</a> | <a href=""> Edit</a></td>
            </tr>
            <tr>
                <td>Admin Log In</td>
                <td>/_source/vendor/selectize.js-master/examples/api.html</td>
                <td>Don't use a template</td>
                <td><a href="" target="_blank">Preview</a> | <a href=""> Edit</a></td>
            </tr>
            <tr>
                <td>Browse Entertainers in Butuan City via eGigmo</td>
                <td>/browse/ph/butuan-city/gigs/entertainers</td>
                <td>Don't use a template</td>
                <td><a href="" target="_blank">Preview</a> | <a href=""> Edit</a></td>
            </tr>
            <tr>
                <td>Admin Log In</td>
                <td>/_source/vendor/selectize.js-master/examples/api.html</td>
                <td>Inner</td>
                <td><a href="" target="_blank">Preview</a> | <a href=""> Edit</a></td>
            </tr>
            <tr>
                <td>Browse Entertainers in Butuan City via eGigmo</td>
                <td>/browse/ph/butuan-city/gigs/entertainers</td>
                <td>Inner</td>
                <td><a href="" target="_blank">Preview</a> | <a href=""> Edit</a></td>
            </tr>
            <tr>
                <td>Admin Log In</td>
                <td>/_source/vendor/selectize.js-master/examples/api.html</td>
                <td>Inner</td>
                <td><a href="" target="_blank">Preview</a> | <a href=""> Edit</a></td>
            </tr>
            <tr>
                <td>Browse Entertainers in Butuan City via eGigmo</td>
                <td>/browse/ph/butuan-city/gigs/entertainers</td>
                <td>Don't use a template</td>
                <td><a href="" target="_blank">Preview</a> | <a href=""> Edit</a></td>
            </tr>
            <tr>
                <td>Browse Entertainers in Butuan City via eGigmo</td>
                <td>/browse/ph/butuan-city/gigs/entertainers</td>
                <td>Don't use a template</td>
                <td><a href="" target="_blank">Preview</a> | <a href=""> Edit</a></td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection