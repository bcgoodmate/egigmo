@extends('layouts.admin')

@section('content')

	   	<div class="row">
	   		<div class="col-sm-8">
		        <div class="list-btr">
		            <h2>Menus</h2>
		        	<h5><em>Title Page Name</em></h5>
		        </div>	


				<div class="list-view">
			        <ul>
			            <li><a href="/admin/menus-edit-details">Details</a></li>
			            <li class="active"><a href="#">Menu Items</a></li>
			            <li><a href="/admin/menus-edit-menulook">Menu look</a></li>
			            <li><a href="/admin/menus-edit-itemslook">Items look</a></li>
			        </ul>
			    </div>

			    <div class="btn-add">
			        <ul>
			            <li><a id="" class="" href="#">Add Item</a></li>
			        </ul>
			    </div>

			    <br>

				<div class="form-group">
				    <label for="name">Item Label </label>
				    <input type="text" name="name" id="name" class="form-control" value="">
			    </div>

			    <div class="form-group">
				    <label for="name">Item Tooltip  </label>
				    <input type="text" name="name" id="name" class="form-control" value="">
			    </div>
				
				<div class="for-check">
				    <div class="form-group">
					    <label for="name">Use Image?</label>
					    <input type="checkbox" name="name" id="name" class="open-check" value="">
				    </div>

					<div class="open-check-active">

					    <div class="form-group" id="opportunity-details">
						    <label for="name">Image</label>
						    <div class="row">
						    	<div class="col-sm-8 col-xxs-8">
							    	<input type="text" name="name" id="name" class="form-control" value="">
							    </div>
							    <div class="col-sm-4 col-xxs-4">
							    	<a href="#">Select Image</a>
							    </div>
							</div>
					    </div>
					    <div class="form-group" id="opportunity-details">
						    <label for="name">Roll over Image</label>
						    <div class="row">
						    	<div class="col-sm-8 col-xxs-8">
							    	<input type="text" name="name" id="name" class="form-control" value="">
							    </div>
							    <div class="col-sm-4 col-xxs-4">
							    	<a href="#">Select Image</a>
							    </div>
							</div>
					    </div>
					    <div class="form-group" id="opportunity-details">
						    <label for="name">Selected Image</label>
						    <div class="row">
						    	<div class="col-sm-8 col-xxs-8">
							    	<input type="text" name="name" id="name" class="form-control" value="">
							    </div>
							    <div class="col-sm-4 col-xxs-4">
							    	<a href="#">Select Image</a>
							    </div>
							</div>
					    </div>

					</div>
				</div>

			    <div class="form-group">
				    <label for="name">Item URL</label>
				    <input type="text" name="name" id="name" class="form-control" value="">
			    </div>				   

			    <div class="form-group">
				    <label for="name">Item Width</label>
				    <input type="text" name="name" id="name" class="form-control" value="">
			    </div>

			    <div class="form-group">
				    <label for="name">Item Height</label>
				    <input type="text" name="name" id="name" class="form-control" value="">
			    </div>

			    <div class="form-group">
				    <label for="name">Target Frame</label>
				    <input type="text" name="name" id="name" class="form-control" value="">
			    </div>

			    <div class="form-group">
				    <label for="name">Parent</label>
				    <select class="form-control">
				    	<option>Root</option>
				    </select>
			    </div>
			
				<div class="for-check">
				    <div class="form-group">
					    <label for="name">Assign your own CSS to menu item?</label>
					    <input type="checkbox" name="name" id="name" class="open-check" value="">
				    </div>

				    <div class="check-css-active">
					    <div class="form-group" id="opportunity-details">
						    <label for="name">Item CSS Class Name</label>
						    <input type="text" name="name" id="name" class="form-control" value="">
					    </div>
					    <div class="form-group" id="opportunity-details">
						    <label for="name">Item Roll over CSS Class Name</label>
						    <input type="text" name="name" id="name" class="form-control" value="">
					    </div>
					    <div class="form-group" id="opportunity-details">
						    <label for="name">Item Selected CSS Class Name</label>
						    <input type="text" name="name" id="name" class="form-control" value="">
					    </div>
					    <div class="form-group" id="opportunity-details">
						    <label for="name">Item ID Name</label>
						    <input type="text" name="name" id="name" class="form-control" value="">
					    </div>
					</div>

				    <div class="form-group">
					    <label for="name">Enabled</label>
					    <input type="checkbox" name="name" id="name" class="" value="">
				    </div>
				</div>

		    	<hr>
		       
		       	<input type="button" id="" value="Save Item" class="btn btn-primary">
			   
			   </div>
			</div>

    	
@endsection

