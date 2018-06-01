@extends('layouts.admin')

@section('content')

	   	
	        <div class="list-btr">
	            <h2>File Manager</h2>
	        </div>
			<br>
			<div class="path-tablet">
		        <div class="btn-add">
			        <ul>
			            <li><a id="" class="path-trigger" href="#edit-prop">New Folder</a></li>
			            <li><a id="" class="" href="#">Delete Folder</a></li>
			            <li><a id="" class="path-trigger" href="#edit-up">Upload File(s)</a></li>
			            <li><a id="" class="" href="#">Thumbnail View</a></li>
			            <li><a id="" class="" href="#">Detail View</a></li>
			        </ul>
			    </div>	
				<div class="path-wrapper">
					<div class="path-head">
						<span> Current Folder:</span>
						<span> / <a href="#">Root</a> / </span>
					</div>
					<div class="">
						<div class="path-body" id="edit-prop">
							<div class="col-inner-extra">
								<br>
								<div class="row form-group">
							        <div class="col-sm-4 text-right">
							            <label for="">Folder Name</label> 
							        </div>
							        <div class="col-sm-8">
							            <input type="text" name="name" id="name" class="form-control" value="">
							        </div>
							    </div>
							    <div class="row form-group">
							        <div class="col-sm-4 text-right">						            
							        </div>
							        <div class="col-sm-8">		
								       	<input type="button" id="" value="Save" class="btn btn-primary">
								       	<input type="button" id="" value="Cancel" class="btn btn-default">									
							        </div>
							    </div>
							</div>
						</div>
						<div class="path-body" id="edit-up">
							<div class="file-bg-01">
								<div class="col-inner-extra">
									<br>
									<div class="row form-group">
								        <div class="col-sm-4 text-right">
								            <label for="">Choose folder to upload to:	</label> 
								        </div>
								        <div class="col-sm-6">
								            <select name="" id="D" class="form-control">
												<option value="">/</option>
												<option value="">/_ajax/</option>
												<option value="">/_assets/</option>		
											</select>
								        </div>
								    </div>
								    <div class="row form-group">
								        <div class="col-sm-4 text-right">						           
								        </div>
								        <div class="col-sm-6">
								            <div class="upload-div">
				                                <input type="file" name="" id="pko20" class="form-control" value="">
				                                <input type="text" name="" id="pko20" class="form-control" value="">
				                            </div>
								        </div>
								        <label for="pko20" class="btn btn-default select">Select</label>
								    </div>
								    <div class="row form-group">
								        <div class="col-sm-4 text-right">
								            <label for="">Select file to upload to server:	</label> 
								        </div>
								        <div class="col-sm-6">
								            <div class="upload-div">
				                                <input type="file" name="" id="pko220" class="form-control" value="">
				                                <input type="text" name="" id="pko220" class="form-control" value="">
				                            </div>
								        </div>
								        <label for="pko220" class="btn btn-default select">Select</label>
								    </div>
								    <div class="row form-group">
								        <div class="col-sm-4 text-right">
								           
								        </div>
								        <div class="col-sm-6">
								            <div class="upload-div">
				                                <label for="pko20" class="btn btn-default select">Add</label>
				                            </div>
								        </div>
								    </div>
								    <div class="row form-group">
								        <div class="col-sm-4 text-right">
								           
								        </div>
								        <div class="col-sm-6">
								            <div class="upload-div">
				                                <span class="font-size-11">(250MB limit applies to each file)</span>
				                            </div>
								        </div>
								    </div>
								    <div class=""><span class="font-size-11"> Tip: you can also use SFTP to upload web pages and files! <a href="#">[Learn More]</a> <a href="#">[See Details]</a></span></div>
								    <br>
								    <div class="button-wrapper-deep">
									    <button class="btn btn-primary btn-default btn-submit">Submit</button>
									    <a href="#" class="btn btn-default" onclick="">Delete</a>
									</div>
									<br>
								</div>
							</div>
						</div>
					</div>
				</div>
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
	    	<!-- <div class="mfp-hide popup-content-wrapper" id="edit-prop">
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
			</div> -->
    	
@endsection

