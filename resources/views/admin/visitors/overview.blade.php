@extends('layouts.admin')

@section('content')

	   	
	        <div class="list-btr">
	            <h2>Visitors</h2>
	        </div>

			<div class="list-view">
		        <ul>
		            <li class="active"><a href="/admin/visitors-overview">Overview</a></li>
		            <li><a href="/admin/visitors-visitview">Visits and Page Views</a></li>
		            <li><a href="/admin/visitors-geographic">Geographic Location</a></li>
		            <li><a href="/admin/visitors-uniquevisitor">Unique Visitors</a></li>
		            <li><a href="/admin/'visitors-visitorloyalty">Visitor Loyalty</a></li>
		            <li><a href="/admin/visitors-browser">Browsers</a></li>
		            <li>
		            	<select>
		            		<option><a href="/admin/visitors-opratesystem">Operating Systems</a></option>
		            		<option><a href="/admin/visitors-addresslist">Ignored IP Address List</a></option>
		            	</select>
		            </li>
		        </ul>
		    </div>        
	    	
    	
@endsection

