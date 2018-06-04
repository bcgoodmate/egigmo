@extends('layouts.admin')

@section('content')


    <div class="list-btr">
        <h2>URL Redirects</h2>	           
    </div>
    <br>
    <div class="btn-add">
        <ul>
            <li><a id="" class="popup-edit" href="#">Download Import Template</a></li>
        </ul>
    </div>
	<div class="row">
	   	<div class="">	
		    <div class="hybridFormHeader">
			    <h2 class="hybridFormTitlewrap">
			        Import Details
			    </h2>
			</div>
			<div class="col-inner-extra">
			    <div class="row form-group">
			    	<div class="col-md-4 text-right">
				    	<label for="name">File to Import:</label>
				    </div>
				    <div class="col-md-6">
				    	<input type="file" name="name" id="name" class="" value="">
				    </div>
			    </div>			
				<div class="row rad-wrapper">
				    <div class="row form-group">
				    	<div class="col-md-4 text-right">
				    		<div class="flex-center" style="min-height: 104px;">
					    		<label for="name">File Type:</label>
					    	</div>
					    </div>
					    <div class="col-md-8">
					    	<div class="form-group flex-inline">
							    <input type="radio" name="name" id="name" class="" value="" checked=""><label>Auto-detect (Comma delimited or Tab delimited)</label>
							</div>
							<div class="form-group flex-inline">
							    <input type="radio" name="name" id="name" class="" value=""><label>Comma Delimited (CSV)</label>
							</div>
							<div class="form-group flex-inline">
							    <input type="radio" name="name" id="name" class="" value=""><label>Tab Delimited</label>
							</div>
							<span class="warning" style="font-style: italic;font-size:.9em;color: red;">(Note: sometimes, Excel automatically converts the CSV file on save to the TAB delimited format):</span>
						</div>
				    </div>
				</div>
				<br>
				<div class="row form-group">
					<div class="col-md-4 text-right">
				    	<label for="name">First Row</label>
				    </div>
				    <div class="col-md-6">
				    	<input type="checkbox" name="name" id="name" class="" value="">First row of data contains column headers
				    </div>
			    </div>
			    <div class="row rad-wrapper">
				    <div class="form-group">
				    	<div class="col-md-4 text-right">
					    	<div class="flex-center">
						    	<label for="name">File Type:</label>
						    </div>
						</div>
						<div class="col-md-6">
						    <div class="form-group flex-inline">
						    	<input type="radio" name="name" id="name" class="" value="" checked=""><label>Add/Update Items</label>
						    </div>
						    <div class="form-group flex-inline">
						    	<input type="radio" name="name" id="name" class="" value=""><label>Delete Items</label>
						    </div>
						</div>
				    </div>
				</div>
				<div class="row form-group">
					<div class="col-md-4 text-right">
				    	
				    </div>
				    <div class="col-md-6 div-ol">
				    	Fields to Import(Columns must appear in this order)
					    <ol>
				    		<br>
					    	<li>1. Old URL</li>
					    	<li>2. New URL</li>
					    	<li>3. Enabled</li>
					    </ol>
					</div>
			    </div>
			</div>
			<div class="button-wrapper">
			    <input type="button" value="Next" name="" class="btn btn-default">
			</div>
		</div>
	</div>


		
	       
    	
@endsection

