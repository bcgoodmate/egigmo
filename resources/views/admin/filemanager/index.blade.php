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
		            <li><a id="" class="popup-edit" href="#edit-up">Upload File(s)</a></li>
		            <li><a id="" class="" href="#">Thumbnail View</a></li>
		            <li><a id="" class="" href="#">Detail View</a></li>
		        </ul>
		    </div>	      

	         <div class="table-main">
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
	                        <td><a href="#"><i class="folder-img"></i> _System</a</td>
	                        <td></td>
	                        <td></td>
	                                                                                     
	                    </tr>

	                    <tr>
	                        <td><a href="#"><i class="folder-img"></i> assets</a></td>  
	                        <td></td>
	                        <td></td>
	                                                                                     
	                    </tr>	    

	                    <tr>
	                        <td><a href="#"><i class="folder-img"></i> css</a></td>  
	                        <td></td>
	                        <td></td>	                                                                                     
	                    </tr>	  
	                    <tr>
	                        <td><a href="#"><i class="folder-img"></i> js</a></td>  
	                        <td></td>
	                        <td></td>
	                                                                                     
	                    </tr>	                                        
	                   
	                </tbody>
	               
	            </table>
	        </div>
	    	

	    	<div class="mfp-hide popup-content-wrapper" id="edit-prop">
	    		<div class="">	        	
		        	<div class="list-btr">
			            <h2>File Manager</h2>
			        </div>

					<div class="modalwindow">		

					   <form action="" method="post">		

						    <div class="form-group">
							    <div class="row">
							    	<div class="col-sm-4">
							    		<label for="name">Folder Name</label>
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
			</div>

			<div class="mfp-hide popup-content-wrapper" id="edit-up">
	    		<div class="">	        	
		        	<div class="list-btr">
			            <h2>File Manager</h2>
			        </div>

					<div class="modalwindow">		

					   <form action="" method="post">		

						    <div class="form-group">
							    <div class="row">
							    	<div class="col-sm-4">
							    		<label for="name">Choose folder to upload to:</label>
							    	</div>
							    	<div class="col-sm-8">
							    		<select class="form-control">
							    			<option>/</option>
							    			<option>_System</option>
							    			<option>assets</option>
							    			<option>js</option>
							    		</select>
							    	</div>
							    </div>
						    </div>
						    <div class="form-group">
							    <div class="row">
							    	<div class="col-sm-12">
							    		<label for="name">Select file to upload to server:</label>							    	
							    		<input type="file" class="form-control" name="">
							    		<input type="file" class="form-control" name="">
									    <br>
							    		<input type="button" class="btn btn-default" name="" value="Add">
							    		<span class="warning">(250MB limit applies to each file)</span>
							    	</div>
							    </div>
						    </div>
						   
						    <p> Tip: you can also use SFTP to upload web pages and files! <a href="#" class="blue">[Learn More]</a> <a href="#" class="blue">[See Details]</a></p>
						   
						   <hr>
						   <input type="button" id="btnSaveForm" value="Upload" class="btn btn-primary btn-default">

						</form>
					</div>
				</div>	
			</div>
    	
@endsection

