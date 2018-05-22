@extends('layouts.admin')

@section('content')

        <div class="list-btr">
            <h2>Content Holders</h2>
        </div>
	   	<div class="row">				
			<div class="hybridFormHeader">
			    <h2 class="hybridFormTitlewrap">
			        Template Details
			    </h2>
			</div>
			<div class="col-inner-extra">
				<div class="row form-group">
			        <div class="col-sm-4 text-right">
			            <label for="">Name</label>
			        </div>
			        <div class="col-sm-8">
			            <input type="text" name="name" id="" class="form-control" value="">
			        </div>
			    </div>				
				<div class="row form-group">
			        <div class="col-sm-4 text-right">
			            <label for="">Enabled:</label>
			        </div>
			        <div class="col-sm-8">
			            <input type="checkbox" id="default_template" value="1" name="">
			        </div>
			    </div>					
				<br>
			</div>
			<div class="hybridFormHeader">
			    <h2 class="hybridFormTitlewrap">
			        Content Holder Content
			    </h2>
			</div>
			<div class="form-group">	
				<div class="rich-editor">						
			    	<textarea name="page_body" cols="30" rows="10" class="rich_editor form-control" id="page_body"></textarea>
			    </div>
		    </div>

		    <div class="button-wrapper">			       
		       	<input type="button" id="" value="Save" class="btn btn-primary btn-default">
		       	<input type="button" id="" value="Cancel" class="btn btn-default">
		    </div>	
		</div>
			

    	
@endsection

