@extends('layouts.admin')

@section('content')
		

        <div class="list-btr">
            <h2>Content Holders</h2>
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
		<div class="row">
		    <br>
			<div class="hybridFormHeader">
			    <h2 class="hybridFormTitlewrap">
			        Content Holder Details
			    </h2>
			</div>
	   		<div class="col-inner-extra">
	   			<div class="row form-group">
			        <div class="col-sm-4 text-right">
			            <label for="name">Name</label> 
			        </div>
			        <div class="col-sm-8">
			            <input type="text" name="name" id="name" class="form-control" value="">
			        </div>
			    </div>
			    <div class="row form-group">
			        <div class="col-sm-4 text-right">
			            <label for=""> Enabled:</label> 
			        </div>
			        <div class="col-sm-8">
			            <input type="checkbox" id="default_template" value="1" name="">
			        </div>
			    </div>
			</div>
			<br>
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
		       	<input type="button" id="" value="Save" class="btn btn-primary">
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
						<div class="footerbuttons">
							<hr>
					       	<input type="button" id="btnSaveForm" value="Save" class="btn btn-primary btn-default">	
					    </div>
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

