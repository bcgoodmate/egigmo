@extends('layouts.admin')

@section('content')

	   	<div class="row">
	   		<div class="col-sm-8">
		        <div class="list-btr">
		            <h2>Content Holders</h2>
		        </div>	

				<div class="list-view">
			        <ul>
			            <li><a href="/admin/menus-create-details">Details</a></li>
			            <li><a href="/admin/menus-create-menu">Menu Items</a></li>
			            <li class="active"><a href="/admin/menus-create-menulook">Menu look</a></li>
			            <li><a href="/admin/menus-create-itemslook">IItems look</a></li>
			        </ul>
			    </div>

			    <div class="btn-add">
			        <ul>
			            <li><a id="" class="" href="#">Add Item</a></li>
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
						    <div class="btn-group">
							  <button type="button" class="form-control" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    Under Parent <span class="caret"></span>
							  </button>
							  <ul class="dropdown-menu">
							    <li><a class="popup-edit" href="#">Next to Parent</a></li>
							    <li><a class="popup-edit" href="#">Relative to Parent</a></li>
							    <li><a class="popup-edit" href="#">Relative to Left Parent</a></li>
							    <li><a class="popup-edit" href="#">Relative to Page</a></li>
							  </ul>
							</div>
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
						    </div>
					    </div>
					    <div class="form-group" id="">
						    <label for="name">Border Style :</label>

						    <div class="btn-group">
							  <button type="button" class="form-control" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    Under Parent <span class="caret"></span>
							  </button>
							  <ul class="dropdown-menu">
							    <li><a class="popup-edit" href="#">None</a></li>
							    <li><a class="popup-edit" href="#">Dotted</a></li>
							    <li><a class="popup-edit" href="#">Dashed</a></li>
							    <li><a class="popup-edit" href="#">Solid</a></li>
							    <li><a class="popup-edit" href="#">Double</a></li>
							    <li><a class="popup-edit" href="#">Groove</a></li>
							    <li><a class="popup-edit" href="#">Ridge</a></li>
							    <li><a class="popup-edit" href="#">Inset</a></li>
							    <li><a class="popup-edit" href="#">Outset</a></li>
							  </ul>
							</div>
					    </div>
					    <div class="form-group" id="">
						    <label for="name">Border Width :</label>
						    <div class="row">
						    	<div class="col-sm-8 col-xxs-8">
						    		<input type="text" name="name" id="name" class="form-control" value="">
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
						    <div class="btn-group">
							  <button type="button" class="form-control" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    Under Parent <span class="caret"></span>
							  </button>
							  <ul class="dropdown-menu">
							    <li><a class="popup-edit" href="#">Next to Parent</a></li>
							    <li><a class="popup-edit" href="#">Relative to Parent</a></li>
							    <li><a class="popup-edit" href="#">Relative to Left Parent</a></li>
							    <li><a class="popup-edit" href="#">Relative to Page</a></li>
							  </ul>
							</div>
					    </div>				

						<h3><b>Sub-Menu Borders & Colors</b></h3>
					    <br>

					    <div class="form-group" id="">
						    <label for="name">Border Color :</label>
						    <input type="text" name="name" id="name" class="form-control" value="">
					    </div>
					    <div class="form-group" id="">
						    <label for="name">Border Style :</label>
						    <div class="btn-group">
							  <button type="button" class="form-control" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    Under Parent <span class="caret"></span>
							  </button>
							  <ul class="dropdown-menu">
							    <li><a class="popup-edit" href="#">None</a></li>
							    <li><a class="popup-edit" href="#">Dotted</a></li>
							    <li><a class="popup-edit" href="#">Dashed</a></li>
							    <li><a class="popup-edit" href="#">Solid</a></li>
							    <li><a class="popup-edit" href="#">Double</a></li>
							    <li><a class="popup-edit" href="#">Groove</a></li>
							    <li><a class="popup-edit" href="#">Ridge</a></li>
							    <li><a class="popup-edit" href="#">Inset</a></li>
							    <li><a class="popup-edit" href="#">Outset</a></li>
							  </ul>
							</div>
					    </div>
					    <div class="form-group" id="">
						    <label for="name">Border Width :</label>
						    <input type="text" name="name" id="name" class="form-control" value="">
					    </div>
					</div>


				</div>
			 	
		    	<hr>
		       
		       	<input type="button" id="" value="Save" class="btn btn-primary">
			   
			   </div>
			</div>

    	
@endsection

