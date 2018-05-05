@extends('layouts.admin')

@section('content')

	   	
	        <div class="list-btr">
	            <h2>File Manager</h2>
	        </div>
			
			<br>

	        <div class="btn-add">
		        <ul>
		            <li><a id="" class="popup-edit" href="#edit-prop">New Folder</a></li>
		            <li><a id="" class="" href="#">Delete Folder</a></li>
		            <li><a id="" class="" href="#">Upload File(s)</a></li>
		            <li><a id="" class="" href="#">Thumbnail View</a></li>
		            <li><a id="" class="" href="#">Detail View</a></li>
		        </ul>
		    </div>

	       <!--  <div class="table-main">
	            <table id="table-anchor" class="display" style="width:100%">
	                <thead>
	                    <tr class="">                                    
	                        <th>Name</th>
	                        <th>Dimensions</th>	
	                        <th>Size</th>
	                    </tr>
	                </thead>
	                <tbody>

	                    <tr>
	                        <td><a href="#"><i class="fas fa-folder-open"></i> _System</a></td>                                                 
	                    </tr>
	                    <tr>
	                    	<td><a href="#"><i class="fas fa-folder-open"></i> assets</a></td>  
	                    </tr>
	                    <tr>
	                    	<td><a href="#"><i class="fas fa-folder-open"></i> css</a></td>        
	                    </tr>

	                                                   
	                   
	                </tbody>
	               
	            </table>
	        </div> -->
	    	

	    	<!-- <div class="mfp-hide popup-content-wrapper" id="edit-prop">

	    		<div class="">

	        	
		        	<div class="list-btr">
			            <h2>Preview</h2>
			        </div>

					<div class="modalwindow">						   
					   <span class="req">*</span>  Required

					   <form action="" method="post">							

							<div class="form-group">
							    <div class="row">
							    	<div class="col-sm-4">
							    		<label for="name">Title </label>
							    	</div>
							    	<div class="col-sm-8">
							    		<select name="Title" id="Title" class="form-control">
							            	<option value="">DR</option>
							            	<option value="">MISS</option>
							            	<option value="" selected="selected">MR</option>
							            	<option value="">MRS</option><option value="1599810">MS</option>
							            </select>
							    	</div>
							    </div>
						    </div>
						    <div class="form-group">
							    <div class="row">
							    	<div class="col-sm-4">
							    		<label for="name">First Name  </label>
							    	</div>
							    	<div class="col-sm-8">
							    		<input type="text" name="name" id="name" class="form-control" value="">
							    	</div>
							    </div>
						    </div>
						    <div class="form-group">
							    <div class="row">
							    	<div class="col-sm-4">
							    		<label for="name">Last Name </label>
							    	</div>
							    	<div class="col-sm-8">
							    		<input type="text" name="name" id="name" class="form-control" value="">
							    	</div>
							    </div>
						    </div>
						    <div class="form-group">
							    <div class="row">
							    	<div class="col-sm-4">
							    		<label for="name">Email Address </label>
							    	</div>
							    	<div class="col-sm-8">
							    		<input type="text" name="name" id="name" class="form-control" value="">
							    	</div>
							    </div>
						    </div>

						   <hr>
						   <input type="button" id="btnSaveForm" value="Save" class="btn btn-primary btn-default">

						</form>
					</div>

				</div>		

			</div> -->
    	
@endsection

