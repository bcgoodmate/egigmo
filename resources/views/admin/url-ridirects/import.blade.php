@extends('layouts.admin')

@section('content')


	<div class="row">
	   	<div class="col-inner">
	        <div class="list-btr">
	            <h2>URL Redirects</h2>

	           <h5><em>Import URL Redirects</em></h5>
	        </div>
			
			<br>

	        <div class="btn-add">
		        <ul>
		            <li><a id="" class="popup-edit" href="#">Download Import Template</a></li>
		        </ul>
		    </div>

		    <h3><b>Import Details</b></h3>
		    <hr>


		    <div class="form-group">
			    <label for="name">File to Import:</label>
			    <input type="file" name="name" id="name" class="form-control" value="">
		    </div>
			
			<div class="rad-wrapper">
			    <div class="form-group">
				    <label for="name">File Type:</label>
				    <input type="radio" name="name" id="name" class="" value="">Auto-detect (Comma delimited or Tab delimited)
				    <input type="radio" name="name" id="name" class="" value="">Comma Delimited (CSV)
				    <input type="radio" name="name" id="name" class="" value="">Tab Delimited

			    </div>
			</div>

			<span class="warning">(Note: sometimes, Excel automatically converts the CSV file on save to the TAB delimited format):</span>
			<br>

			<div class="form-group">
			    <label for="name">First Row</label>
			    <input type="checkbox" name="name" id="name" class="" value="">First row of data contains column headers
		    </div>

		    <div class="rad-wrapper">
			    <div class="form-group">
				    <label for="name">File Type:</label>
				    <input type="radio" name="name" id="name" class="" value="">Add/Update Items
				    <input type="radio" name="name" id="name" class="" value="">Delete Items
			    </div>
			</div>

			<div class="form-group">
			    <label for="name">File Type:</label>
			    <ol>
			    	<li>1. Old URL</li>
			    	<li>2. New URL</li>
			    	<li>3. Enabled</li>
			    </ol>
		    </div>

		    <hr>
		    <input type="button" value="next" name="" class="btn btn-default">


		</div>
	</div>


		
	       
    	
@endsection

