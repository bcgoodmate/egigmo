@extends('layouts.admin')

@section('content')

	   	<div class="row">
	   		<div class="col-inner">
		        <div class="list-btr">
		            <h2>Menus</h2>
		            <h5><em>Title Page Name</em></h5>
		        </div>	

				<div class="list-view">
			        <ul>
			            <li><a href="/admin/menus-edit-details">Details</a></li>
			            <li><a href="/admin/menus-edit-menu">Menu Items</a></li>
			            <li class="active"><a href="/admin/menus-edit-menulook">Menu look</a></li>
			            <li><a href="/admin/menus-edit-itemslook">IItems look</a></li>
			        </ul>
			    </div>

			    <br>
				
				
				<div class="rad-wrapper">
					<div class="form-group">						
					    <label for="name">Customize overall look of : </label>
					    <input type="radio" name="name" id="" class="choice" value="" href="#rad-root" checked>The root menu
					    <input type="radio" name="name" id="" class="choice" value="" href="#rad-sub">All sub-menus
				    </div>

				    <hr>
					
					<div class="rad-main open" id="rad-root">
					    <h3><b>Root Menu Basic</b></h3>
					    <br>
					   
					    <div class="form-group" id="">
						    <label for="name">Menu Direction :</label>
						    <input type="radio" name="name" id="" class="choice" value="">Vertical
						    <input type="radio" name="name" id="" class="choice" value="">Horizontal
					    </div>
					    <div class="form-group" id="">
						    <label for="name">Display Sub-Menu Arrow :</label>
						    <input type="checkbox" name="name" id="name" class="" value="">
					    </div>
					    <div class="form-group" id="">
						    <label for="name">Sub-Menu Position :</label>				    
							<select class="form-control">
						   		<option>Next to Parent</option>
						   		<option>Relative to Parent</option>
						   		<option>Relative to Left Parent</option>
						   		<option>Relative to Page</option>
						   </select>
					    </div>	

					    <hr>			

						<h3><b>Root Menu Borders & Colors</b></h3>
					    <br>

					    <div class="form-group" id="">
						    <label for="name">Border Color :</label>
						    <div class="row">
						    	<div class="col-sm-8 col-xxs-8">
						    		<input type="text" name="name" id="name" class="form-control" value="">
						    	</div>
						    	<div class="col-sm-4 col-xxs-4">
						    		<a href="#">Select color</a>
						    	</div>
						    </div>
					    </div>
					    <div class="form-group" id="">
						    <label for="name">Border Style :</label>
							<select class="form-control">
						   		<option>None</option>
						   		<option>Dotted</option>
						   		<option>Dashed</option>
						   		<option>Solid</option>
						   		<option>Double</option>
						   		<option>Groove</option>
						   		<option>Ridge</option>
						   		<option>Inset</option>
						   		<option>Outset</option>
						   </select>

					    </div>
					    <div class="form-group" id="">
						    <label for="name">Border Width :</label>
						    <div class="row">
						    	<div class="col-sm-8 col-xxs-8">
						    		<input type="text" name="name" id="name" class="form-control" value="">
						    	</div>
						    	<div class="col-sm-4 col-xxs-4">
						    		<a href="#">Select color</a>
						    	</div>
						    </div>
					    </div>
					</div>

					<div class="rad-main" id="rad-sub">
					    <h3><b>Sub-Menu Basic</b></h3>
					    <br>
					   
					    <div class="form-group" id="">
						    <label for="name">Menu Direction :</label>
						    <input type="radio" name="name" id="" class="choice" value="">Vertical
						    <input type="radio" name="name" id="" class="choice" value="">Horizontal
					    </div>
					    <div class="form-group" id="">
						    <label for="name">Display Sub-Menu Arrow :</label>
						    <input type="checkbox" name="name" id="name" class="" value="">
					    </div>
					    <div class="form-group" id="">
						    <label for="name">Sub-Menu Position :</label>	
						    <select class="form-control">
						   		<option>Next to Parent</option>
						   		<option>Relative to Parent</option>
						   		<option>Relative to Left Parent</option>
						   		<option>Relative to Page</option>
						   </select>

					    </div>				

						<h3><b>Sub-Menu Borders & Colors</b></h3>
					    <br>

					    <div class="form-group" id="">
						    <label for="name">Border Color :</label>
						    <div class="row">
						    	<div class="col-sm-8 col-xxs-8">
						    		<input type="text" name="name" id="name" class="form-control" value="">
						    	</div>
						    	<div class="col-sm-4 col-xxs-4">
						    		<a href="#">Select color</a>
						    	</div>
						    </div>
					    </div>
					    <div class="form-group" id="">
						    <label for="name">Border Style :</label>
						   <select class="form-control">
						   		<option>None</option>
						   		<option>Dotted</option>
						   		<option>Dashed</option>
						   		<option>Solid</option>
						   		<option>Double</option>
						   		<option>Groove</option>
						   		<option>Ridge</option>
						   		<option>Inset</option>
						   		<option>Outset</option>
						   </select>
					    </div>
					   	<div class="form-group" id="">
						    <label for="name">Border Width :</label>
						    <div class="row">
						    	<div class="col-sm-8 col-xxs-8">
						    		<input type="text" name="name" id="name" class="form-control" value="">
						    	</div>
						    	<div class="col-sm-4 col-xxs-4">
						    		<a href="#">Select color</a>
						    	</div>
						    </div>
					    </div>
					</div>


				</div>
			 	
		    	<hr>
		       
		       	<input type="button" id="" value="Save" class="btn btn-primary">
			   
			   </div>
			</div>

    	
@endsection

