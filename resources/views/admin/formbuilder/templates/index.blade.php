@extends('layouts.admin')

@section('content')
    <div class="list-btr">
        <h2>Web Forms</h2>
    </div>

    <br>

    <div class="btn-add">
        <ul>
            <li><a id="" class="" href="{{route('admin.formbuilder.create')}}">Add Web Form</a></li>
        </ul>
    </div>

    <div class="table-main">
        <table id="table-anchor" class="display" style="width:100%">
            <thead>
            <tr class="">
                <th>WebForm Name</th>

            </tr>
            </thead>
            <tbody>
            @if(count($forms) > 0)
                @foreach($forms as $form)
                    <tr>
                        <td><a href="{{route('admin.formbuilder.edit', $form->id)}}">{{$form->name}}</a></td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td>No web form found.</td>
                </tr>
            @endif
            </tbody>

        </table>
    </div>
@endsection

