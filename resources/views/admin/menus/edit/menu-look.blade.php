@extends('layouts.admin')

@section('content')

        <div class="list-btr">
            <h2>Menus</h2>
        </div>	
		<div class="list-view">
			        <ul>
			            <li><a href="/admin/menus-edit-details">Details</a></li>
			            <li><a href="/admin/menus-edit-menu">Menu Items</a></li>
			            <li class="active"><a href="/admin/menus-edit-menulook">Menu look</a></li>
			            <li><a href="/admin/menus-edit-itemslook">IItems look</a></li>
			        </ul>
			    </div>
	   	<div class="row">
	   		<div class="">
			    <br>
				<div class="rad-wrapper">
					<div class="row form-group col-inner-deep">
						<div class="col-md-5 text-right">	
							<div class="flex-center">					
					    		<label for="name">Customize overall look of : </label>
					    	</div>
					    </div>
					    <div class="col-md-7">	
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
						    	<div class="col-md-5 text-right">	
						    		<div class="flex-center">
									    <label for="name">Menu Direction :</label>
									</div>
								</div>
								<div class="col-md-5">	
									<div class="form-group flex-inline">
										<input type="radio" name="2" id="" class="" value=""><label for="">Vertical</label>
									</div>
									<div class="form-group flex-inline">
							    		<input type="radio" name="2" id="" class="" value=""><label for="">Horizontal</label>
							    	</div>
							    </div>
						    </div>
						    <div class="row form-group" id="">
						    	<div class="col-md-5 text-right">
							    	<label for="">Display Sub-Menu Arrow :</label>
							    </div>
							    <div class="col-md-7">
							    	<input type="checkbox" name="" id="" class="" value="">
							    </div>
						    </div>
						    <div class="row form-group" id="">
						    	<div class="col-md-5 text-right">
							    	<label for="">Sub-Menu Position :</label>	
							    </div>			    
								<div class="col-md-5">
									<select class="form-control">
								   		<option>Next to Parent</option>
								   		<option>Relative to Parent</option>
								   		<option>Relative to Left Parent</option>
								   		<option>Relative to Page</option>
								   </select>
								</div>
						    </div>
						</div>		
						<br>
					    <div class="hybridFormHeader">
						    <h2 class="hybridFormTitlewrap">
						       Root Menu Borders & Colors
						    </h2>
						</div>	
						<div class="col-inner-deep">		
						    <div class="row form-group" id="">
						    	<div class="col-md-5 text-right">
							    	<label for="">Border Color :</label>
							    </div>
							    <div class="col-md-5">								    
								   	<input type="text" name="" id="name" class="form-control" value="">
								</div><a href="#">Select color</a>
						    </div>
						    <div class="row form-group" id="">
						    	<div class="col-md-5 text-right">
							    	<label for="name">Border Style :</label>
							    </div>
							    <div class="col-md-5">	
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
						    </div>
						    <div class="row form-group" id="">
						    	<div class="col-md-5 text-right">
							    	<label for="name">Border Width :</label>
							    </div>
							    <div class="col-md-5">	
							    	<input type="text" name="" id="" class="form-control" value="">							    	
							    </div><a href="#">Select color</a>
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
						    <div class="row form-group" id="">
						    	<div class="col-md-5 text-right">
						    		<div class="flex-center">
							    		<label for="name">Menu Direction :</label>
							    	</div>
							    </div>
							    <div class="col-md-5">	
							    	<div class="form-group flex-inline"><input type="radio" name="" id="" class="" value=""><label>Vertical</label></div>
							    	<div class="form-group flex-inline"><input type="radio" name="" id="" class="" value=""><label>Horizontal</label></div>
							    </div>
						    </div>
						    <div class="row form-group" id="">
						    	<div class="col-md-5 text-right">
							    	<label for="name">Display Sub-Menu Arrow :</label>
							    </div>
							    <div class="col-md-5">
							    	<input type="checkbox" name="" id="name" class="" value="">
							    </div>
						    </div>
						    <div class="row form-group" id="">
						    	<div class="col-md-5 text-right">
							    	<label for="name">Sub-Menu Position :</label>	
							    </div>
							    <div class="col-md-5">
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
							       Sub-Menu Borders & Colors
							    </h2>
							</div>	
						    <div class="row form-group" id="">
						    	<div class="col-md-5 text-right">
							    	<label for="name">Border Color :</label>
							    </div>
							    <div class="col-md-5">
						    		<input type="text" name="" id="name" class="form-control" value="">
						    	</div>
							    <a href="#">Select color</a>							    
						    </div>
						    <div class="row form-group" id="">
						    	<div class="col-md-5 text-right">
							    	<label for="name">Border Style :</label>
							    </div>
							    <div class="col-md-5">
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
						    </div>
						   	<div class="row form-group" id="">
						   		<div class="col-md-5 text-right">
							    	<label for="name">Border Width :</label>
							    </div>
							    <div class="col-md-5">							    
							    	<input type="text" name="" id="name" class="form-control" value="">
							    </div>
							    <a href="#">Select color</a>							    	
						    </div>
						</div>
					</div>
				</div>
			 	<div class="button-wrapper">
			       	<input type="button" id="" value="Save" class="btn btn-primary">
			    </div>			   
			   </div>
			</div>

    	
@endsection

