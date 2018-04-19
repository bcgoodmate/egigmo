@extends('layouts.admin')

@section('content')

	   	<div class="row">
	   		<div class="col-sm-8">
		        <div class="list-btr">
		            <h2>Content Holders</h2>
		        </div>
				
				<br>

				<h3><b>Content Holder Details</b></h3>	  

				<br>      
				
				<div class="form-group">
				    <label for="name">Name</label>
				    <input type="text" name="name" id="name" class="form-control" value="">
			    </div>

			    <div class="form-group">
				    <label for="default_template">
				    	<input type="checkbox" id="" value="1" name="">
				        Enabled:
				    </label>
				</div>

				<hr>

				<h3><b>Content Holder Content</b></h3>
				<br>

		    	
		    	<textarea name="page_body" cols="30" rows="10" class="rich_editor form-control" id="page_body"></textarea>

		    	<hr>
		       
		       	<input type="button" id="" value="Save" class="btn btn-primary btn-default">
		       	<input type="button" id="" value="Cancel" class="btn btn-default">
			   
			   </div>
			</div>

    	
@endsection

