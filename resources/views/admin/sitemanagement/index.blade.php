@extends('layouts.admin')

@section('content')

	        <div class="list-btr">
	            <h2>Site Management</h2>
	        </div>
			<br>
	        <h3><b>Delete Site</b></h3>
	        <hr>		

			<p>If you no longer need this site, you can delete it by using the Delete Site button below. This action will remove your site from our database.</p>

			<div><span class="warning">Please take note that there is no undo for this operation.</span></div>

			<input type="button" id="" value="Delete" class="btn btn-default">
			<hr>

			<h3><b>Transfer Site</b></h3>
	        <hr>

	        <p>This site has the following partner associated to it: Junake Capolieoan (<a href="#" class="blue">Jeoekpasd@YAHOO.COM</a>). </p>	
	        <p>You can transfer it to another partner by entering the new partner code below (partners can see their partner code in the <a href="#" class="blue">Partner Settings</a> page from their Partner Portal):</p>	

	        <div><span class="warning">Important Note: No hosting or extras invoices are transferred with the site. The site becomes a Trial site in the new Partner Portal and needs to be upgraded using the regular site upgrade workflow. For more details read <a href="#" class="blue">this article</a>.</span></div>
			
			<br>
			<div class="form-group">
			    <label for="name">New Partner Code:</label>
			    <div class="row">
			    	<div class="col-md-6">
					    <input type="text" name="name" id="name" class="form-control" value="">
					</div>
				</div>
		    </div>

			<hr>
			

			<input type="button" id="" value="Transfer Site" class="btn btn-default">

@endsection

