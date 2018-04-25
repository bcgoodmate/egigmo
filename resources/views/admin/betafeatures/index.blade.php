@extends('layouts.admin')

@section('content')

	        <div class="list-btr">
	            <h2>Beta Features</h2>
	        </div>
			<br>
	        <h3>Enabling Beta Features</h3>
	        <p>Beta features are ideas we explore and experiment with. Below is an overview of these features and some of them require enabling them first before you try them out.</p>
	        <hr>		

			<h3><b>Content management</b></h3>

			<div class="form-group">
				<div class="row">
					<div class="col-md-2">
						<label for="name">New admin editor:</label>
					</div>
					<div class="col-md-10">
						<input type="checkbox" name="" id="ai-01"><label for="ai-01"> Enable</label>	
						<p>Replace the current visual and code editors in all admin interfaces with completely new tools that provide additional functionality and support for modern HTML editing.</p>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col-md-2">
						<label for="name">Module Named Parameters:</label>
					</div>
					<div class="col-md-10">
						<input type="checkbox" name="" id="ai-02"><label for="ai-02"> Enable</label>	
						<p>When active the Module Manager will generate module tokens using named parameters.</p>
						<p><em>Note: Doesn't work in E-Mail Campaigns. <a href="#" class="blue" target="_blank">Read more</a></em></p>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col-md-2">
						<label for="name">Liquid Markup:</label>
					</div>
					<div class="col-md-10">
						<input type="checkbox" name="" id="ai-03"><label for="ai-03"> Enable Liquid </label>	
						<p><a href="#" class="blue" target="_blank">Liquid mark-up language</a> gives developers a greater control over the site layouts and templates by enabling a more granular access to the the information already available in the site database and providing methods to further process the data through liquid operator like loops and filters. </p>
						<p>Notes:</p>
						<p>1. If you're using JavaScript libraries whose template markup might conflict with Liquid (such as AngularJS, Mustache, Handlebars and others) please read this <a href="#" class="blue" target="_blank">how-to first.</a></p>
						<p>2. Doesn't work in E-Mail Campaigns. <a href="#" class="blue" target="_blank">Read more</a></p>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col-md-2">
						<label for="name">Render page as JSON:</label>
					</div>
					<div class="col-md-10">
						<input type="checkbox" name="" id="ai-04"><label for="ai-04"> Enable page output as JSON (?json=true)  </label>	
						<p>When active, will allow you to capture all modules and tags from a page into a data tree and exposing it in browser. Enabling this will expose all information about items in a page regardless of whether they are protected by a secure zone or not. </p>
					</div>
				</div>
			</div>

			<hr>
			

			<input type="button" id="" value="Save" class="btn btn-primary">

@endsection

