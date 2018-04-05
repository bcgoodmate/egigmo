@extends('layouts.admin')

@section('content')
    <div class="list-btr">
        <h2>Page Templates</h2>
    </div>
    <br>
    <div class="btn-add">
        <ul>
            <li><a id="" class="" href="#">Add Templates</a></li>
        </ul>
    </div>
    <div class="table-main">
        <table id="table-anchor" class="display" style="width:100%">
            <thead>
            <tr class="">
                <th>Templates</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Blank</td>
                <td><a href="#">Edit</a></td>
            </tr>
            <tr>
                <td>Buyer Dashboard - Account</td>
                <td><a href="#">Edit</a></td>
            </tr>
            <tr>
                <td>Blank</td>
                <td><a href="#">Edit</a></td>
            </tr>
            <tr>
                <td>Inner (Default Template) (Printer View)</td>
                <td><a href="#">Edit</a></td>
            </tr>
            <tr>
                <td>Seller Dashboard - Account</td>
                <td><a href="#">Edit</a></td>
            </tr>
            <tr>
                <td>Blank</td>
                <td><a href="#">Edit</a></td>
            </tr>
            <tr>
                <td>Blank</td>
                <td><a href="#">Edit</a></td>
            </tr>
            <tr>
                <td>Seller Dashboard - Inbox</td>
                <td><a href="#">Edit</a></td>
            </tr>

            </tbody>
        </table>
    </div>
@endsection