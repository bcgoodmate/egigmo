@extends('layouts.admin')

@section('content')

        <div class="list-btr">
            <h2>Menus</h2>
        </div>	
		<div class="list-view">
	        <ul>
	            <li><a href="/admin/menus-create-details">Details</a></li>
	            <li><a href="/admin/menus-create-menu">Menu Items</a></li>
	            <li class="active"><a href="/admin/menus-create-menulook">Menu look</a></li>
	            <li><a href="/admin/menus-create-itemslook">IItems look</a></li>
	        </ul>
	    </div>
	   	<div class="row">
	   		<div class="">
			    <br>
				<div class="rad-wrapper">
					<div class="row form-group col-inner-deep">
						<div class="col-md-6 text-right">	
							<div class="flex-center">					
					    		<label for="name">Customize overall look of : </label>
					    	</div>
					    </div>
					    <div class="col-md-6 ">	
					    	<div class="form-group flex-inline"><input type="radio" name="name" id="p0ao" class="choice" value="" href="#rad-root" checked><label for="p0ao">The root menu</label></div>
						    <div class="form-group flex-inline"><input type="radio" name="name" id="p0a23o" class="choice" value="" href="#rad-sub"><label for="p0a23o">All sub-menus</label></div>
						</div>
				    </div>
				    <br>
					<div class="rad-main open" id="rad-root">
					    <div class="hybridFormHeader">
						    <h2 class="hybridFormTitlewrap">
						       Root Menu Basic
						    </h2>
						</div>	
						<div class="col-inner-deep">				   
						    <div class="row form-group" id="">
						    	<div class="col-md-6 text-right">	
						    		<div class="flex-center">
									    <label for="name">Menu Direction :</label>
									</div>
								</div>
								<div class="col-md-6 ">	
									<div class="form-group flex-inline">
										<input type="radio" name="2" id="" class="choice" value=""><label for="">Vertical</label>
									</div>
									<div class="form-group flex-inline">
							    		<input type="radio" name="2" id="" class="choice" value=""><label for="">Horizontal</label>
							    	</div>
							    </div>
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
						</div>		
						<br>
					    <div class="hybridFormHeader">
						    <h2 class="hybridFormTitlewrap">
						       Root Menu Borders & Colors
						    </h2>
						</div>	
						<div class="col-inner-deep">		
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

					<div class="rad-main" id="rad-sub">
					    <div class="hybridFormHeader">
						    <h2 class="hybridFormTitlewrap">
						       Sub-Menu Basic
						    </h2>
						</div>	
						<div class="col-inner-deep">							   
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


				</div>
			 	
		    	<hr>
		       
		       	<input type="button" id="" value="Save" class="btn btn-primary">
			   
			   </div>
			</div>

    	
@endsection

