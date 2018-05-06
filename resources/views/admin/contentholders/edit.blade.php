@extends('layouts.admin')

@section('content')
		

		<div class="row">
	   		<div class="col-inner">
	   	
		        <div class="list-btr">
		            <h2>Content Holders</h2>
		            <h5><em>Title Page Name</em></h5>
		        </div>	
		        			
				<br>

		        <div class="btn-add">
			        <ul>
			            <li>
			            	<div class="btn-group">
							  <button type="button" class="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    Actions <span class="caret"></span>
							  </button>
							  <ul class="dropdown-menu">
							    <li><a class="popup-edit" href="#contentholder-add">Add Content Holder to a Web Page</a></li>
							    <li><a class="popup-edit" href="#contentholder-audit">View Audit Log</a></li>
							  </ul>
							</div>
						</li>
			        </ul>
			    </div>

				<hr>

			    <h3><b>Content Holder Details</b></h3>	
			    <br>  

			    <div class="form-group">
				    <label for="name">Name</label>
				    <input type="text" name="name" id="name" class="form-control" value="">
			    </div>

			    <div class="form-group">
				    <label for="default_template">
				    	<input type="checkbox" id="default_template" value="1" name="">
				        Enabled:
				    </label>
				</div>

				<hr>

				<h3><b>Content Holder Content</b></h3>
				<br>

				<textarea name="page_body" cols="30" rows="10" class="rich_editor form-control" id="page_body"></textarea>

		    	<hr>
		       
		       	<input type="button" id="" value="Update" class="btn btn-primary">
		       	<input type="button" id="" value="Delete" class="btn btn-default">

			</div>
		</div>


		<div class="webform-popup">

        	<div class="mfp-hide popup-content-wrapper" id="contentholder-add">
	        	
	        	<div class="list-btr">
		            <h2>Web Form Properties</h2>
		        </div>

	        	<div class="modalwindow">

	        		<form id="" action="">									
						

						<div class="form-group">
						    <label for="default_template">
						    	<input type="checkbox" id="" value="1" name="">
						        Option:
						    </label>
						</div>



						<hr>
				       	<input type="button" id="btnSaveForm" value="Save" class="btn btn-primary btn-default">							  

					</form>

				</div>
			</div>

			<div class="mfp-hide popup-content-wrapper" id="contentholder-audit">
		        	
	        	<div class="list-btr">
		            <h2>Audit Log</h2>
		        </div>

		        <div class="modalwindow">

		        	<div id="" class="warningMessage">Archived information older than 90 days is automatically deleted from the system.</div>

	        		<form id="" action="">	

	        			

						<table id="" class="rgMasterTable" cellspacing="0" cellpadding="0" border="0">
						   <tbody>
						      <tr>
						         <th class="rgHeader var">Action</th>
						         <th class="rgHeader">Action By</th>
						         <th class="rgHeader">Action Date</th>
						      </tr>
						      <tr class="rgRow text">
						         <td class="var">View</td>
						         <td>Kirk Alvar</td>
						         <td>17-Apr-2018 02:54 PM</td>
						      </tr>
						      <tr class="rgAltRow text">
						         <td class="var">View</td>
						         <td>Kirk Alvar</td>
						         <td>17-Apr-2018 02:50 PM</td>
						      </tr>
						      <tr class="rgRow text">
						         <td class="var">View</td>
						         <td>Kirk Alvar</td>
						         <td>17-Apr-2018 02:06 PM</td>
						      </tr>
						      <tr class="rgAltRow text">
						         <td class="var">Edit</td>
						         <td>Kirk Alvar</td>
						         <td>17-Apr-2018 02:06 PM</td>
						      </tr>
						      <tr class="rgRow text">
						         <td class="var">View</td>
						         <td>Kirk Alvar</td>
						         <td>17-Apr-2018 02:03 PM</td>
						      </tr>
						      <tr class="rgAltRow text">
						         <td class="var">View</td>
						         <td>Kirk Alvar</td>
						         <td>17-Apr-2018 01:57 PM</td>
						      </tr>
						      <tr class="rgRow text">
						         <td class="var">Edit</td>
						         <td>Kirk Alvar</td>
						         <td>17-Apr-2018 01:57 PM</td>
						      </tr>
						   </tbody>
						</table>



	        			

					</form>
				</div>
				
			</div>

		</div>




	       
	    	
    	
@endsection

