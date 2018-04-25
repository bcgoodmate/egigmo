@extends('layouts.admin')

@section('content')

	        <div class="list-btr">
	            <h2>Mobile Support</h2>
	        </div>
			<br>
	        <h3><b>Separate Mobile Site</b></h3>
			<p>You can create a separate mobile site with new versions of some or all of the pages in your main site for visitors using tablets or smartphones. Visitors using tablets or smartphones will be redirected to an appropriate version of the page stored in the folders specified below. For example, if you set the "Phone Content Folder" setting to "/mobile", a visitor using a smartphone to view /contact.html will be redirected to /mobile/contact.html instead if you have created a mobile version of that page.</p>
			

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								<label for="name">Name</label>
							</div>
							<div class="col-md-8">
								<select class="form-control">
									<option>/_ajax/</option>
									<option>/_assets/</option>
									<option>/_source/	</option>
									<option>/administrator/</option>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								<label for="name">Tablet Content Folder</label>
							</div>
							<div class="col-md-8">
								<select class="form-control">
									<option>/_ajax/</option>
									<option>/_assets/</option>
									<option>/_source/	</option>
									<option>/administrator/</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>

			<hr>
				
			<h3><b>Mobile Templates for Responsive Site</b></h3>

			<p>You can enable this option to create a tablet or phone version of your Page Templates, in order to use a different design or include specialized scripts or stylesheets for visitors using a tablet or smartphone. Visitors using smartphones or tablets will see the pages they visit rendered using the same content, but with a template appropriate to their device. If you don't define a phone or tablet template, visitors using those devices will be shown pages using the desktop template instead.</p>

			<div class="form-group">				
				<label for="name">Mobile Templates: </label>	
				<span>Disabled</span> <span><a href="#" class="blue">Enabled</a></span>
			</div>

			<input type="button" id="" value="Save" class="btn btn-primary">

@endsection

