@extends('layouts.admin')

@section('content')

	        <div class="list-btr">
	            <h2>Security Settings</h2>
	        </div>
			<br>
	        <h3><b>Whitelisted Domains</b></h3>
	        <hr>		

			<div class="btn-add">
		        <ul>
		            <li><a id="" class="" href="#">Add Domain</a></li>
		        </ul>
		    </div>

		    <div id="" class="warningMessage">You don't have any domains. To add a domain click the Add domain button.</div>
			<hr>
		    <h3><b>Security Flags</b></h3>
	        <hr>	
			
			<div class="form-group">
			    <label for="name">Block unsafe files upload:</label><br>
			    <input type="radio" name="name" id="name" class="" value=""> Enabled 
			    <input type="radio" name="name" id="name" class="" value="">  Disabled  
		    </div>
			<p>Enable / Disable front-end visitors and users to upload unsafe files.</p>

			<hr>

			<input type="button" id="" value="Transfer Site" class="btn btn-default">

@endsection

