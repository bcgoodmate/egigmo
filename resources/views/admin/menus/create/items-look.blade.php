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
			            <li><a href="/admin/menus-create-menulook">Menu look</a></li>
			            <li class="active"><a href="#">Items look</a></li>
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
					    <input type="radio" name="name" id="" class="choice" value="" href="#rad-allroot" checked>All root menu items when mouse is not over
					    <input type="radio" name="name" id="" class="choice" value="" href="#rad-sub142">All root menu items when the mouse is over
					    <input type="radio" name="name" id="" class="choice" value="" href="#rad-sub7823">All sub-menu items when the mouse is not over
					    <input type="radio" name="name" id="" class="choice" value="" href="#rad-sub62526">All sub-menu items when the mouse is over
				    </div>

				    <hr>
					
					<div class="rad-main open" id="rad-allroot">
					    <h3><b>Root Menu Item Fonts</b></h3>
					    <br>
					   	
					    <div class="form-group" id="">
						    <label for="name">Font :</label>
							   	<div class="row">
							   		<div class="col-md-8">
								    <input type="text" name="name" id="" class="form-control" value="">						  
							    </div>
							</div>
						</div>


					    <div class="form-group" id="">
						    <label for="name">Font Size (pt):</label>
							<div class="row">
						   		<div class="col-md-8">
								    <input type="text" name="name" id="" class="form-control" value="">						  
							    </div>
							</div>
						</div>

					    <div class="form-group" id="">
						    <label for="name">Text Horizontal Align :</label>
						    <div class="btn-group">
							  <button type="button" class="form-control" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    Left <span class="caret"></span>
							  </button>
							  <ul class="dropdown-menu">
							    <li><a class="popup-edit" href="#">Left</a></li>
							    <li><a class="popup-edit" href="#">Center</a></li>
							    <li><a class="popup-edit" href="#">Right</a></li>
							  </ul>
							</div>					  
					    </div>

					    <div class="form-group" id="">
						    <label for="name">Text Vertical Align :</label>
						    <div class="btn-group">
							  <button type="button" class="form-control" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    Top <span class="caret"></span>
							  </button>
							  <ul class="dropdown-menu">
							    <li><a class="popup-edit" href="#">Top</a></li>
							    <li><a class="popup-edit" href="#">Middle</a></li>
							    <li><a class="popup-edit" href="#">Bottom</a></li>
							    <li><a class="popup-edit" href="#">Baseline</a></li>
							  </ul>
							</div>					  
					    </div>

					    <div class="form-group" id="">
						    <label for="name">Font Color :</label>
						    <div class="row">
						   		<div class="col-sm-8 col-xxs-8">
								    <input type="text" name="name" id="" class="form-control" value="">						  
							    </div>
								<div class="col-sm-4 col-xxs-4">
									<a href="#">Select color</a>
								</div>
							</div>
						</div>

						<div class="form-group" id="">
						    <label for="name">Back Color :</label>
						    <div class="row">
						   		<div class="col-sm-8 col-xxs-8">
								    <input type="text" name="name" id="" class="form-control" value="">						  
							    </div>
								<div class="col-sm-4 col-xxs-4">
									<a href="#">Select color</a>
								</div>
							</div>
						</div>

						<div class="row">
					   		<div class="col-md-8">
							    <div class="form-group" id="">
								    <label for="name">Text Style :</label>
								    <input type="checkbox" name="name" id="" class="" value="">	Bold	
								    <input type="checkbox" name="name" id="" class="" value="">	Underline   	
								    <input type="checkbox" name="name" id="" class="" value="">	Italics					  
							    </div>
							</div>
						</div>

						<hr>					   

						<h3><b>Root Menu Item Borders</b></h3>
					    <br>


					    <div class="form-group" id="">
						    <label for="name">Border Color :</label>
						    <div class="row">
						   		<div class="col-sm-8 col-xxs-8">
								    <input type="text" name="name" id="" class="form-control" value="">						  
							    </div>
								<div class="col-sm-4 col-xxs-4">
									<a href="#">Select color</a>
								</div>
							</div>
						</div>

						<div class="form-group" id="">
						    <label for="name">Border Style :</label>
						    <div class="row">
						   		<div class="col-sm-8 col-xxs-8">
								   <div class="btn-group">
									  <button type="button" class="form-control" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    None <span class="caret"></span>
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
							</div>
						</div>

						<div class="form-group" id="">
						    <label for="name">Border Width </label>
						    <div class="row">
						   		<div class="col-sm-8 col-xxs-8">
								    <input type="text" name="name" id="" class="form-control" value="">						  
							    </div>								
							</div>
						</div>

						<hr>
					    
					    <h3><b>Root Menu Item Padding</b></h3>
					    <br>

					    <div class="form-group" id="">
						    <label for="name">Top :	</label>
						    <div class="row">
						   		<div class="col-sm-8 col-xxs-8">
								    <input type="text" name="name" id="" class="form-control" value="">						  
							    </div>								
							</div>
						</div>
						<div class="form-group" id="">
						    <label for="name">Left :</label>
						    <div class="row">
						   		<div class="col-sm-8 col-xxs-8">
								    <input type="text" name="name" id="" class="form-control" value="">						  
							    </div>								
							</div>
						</div>
						<div class="form-group" id="">
						    <label for="name">Bottom :</label>
						    <div class="row">
						   		<div class="col-sm-8 col-xxs-8">
								    <input type="text" name="name" id="" class="form-control" value="">						  
							    </div>								
							</div>
						</div>
						<div class="form-group" id="">
						    <label for="name">Right : </label>
						    <div class="row">
						   		<div class="col-sm-8 col-xxs-8">
								    <input type="text" name="name" id="" class="form-control" value="">						  
							    </div>								
							</div>
						</div>

					    
					</div>

					<div class="rad-main" id="rad-sub142">
					    <h3><b>Root Menu Item Fonts</b></h3>
					    <br>
					   
					    <div class="form-group" id="">
						    <label for="name">Font :</label>
							   	<div class="row">
							   		<div class="col-md-8">
								    <input type="text" name="name" id="" class="form-control" value="">						  
							    </div>
							</div>
						</div>	
						<div class="form-group" id="">
						    <label for="name">Font Size (pt):</label>
							<div class="row">
						   		<div class="col-md-8">
								    <input type="text" name="name" id="" class="form-control" value="">						  
							    </div>
							</div>
						</div>

						<div class="form-group" id="">
						    <label for="name">Font Color :</label>
						    <div class="row">
						   		<div class="col-sm-8 col-xxs-8">
								    <input type="text" name="name" id="" class="form-control" value="">						  
							    </div>
								<div class="col-sm-4 col-xxs-4">
									<a href="#">Select color</a>
								</div>
							</div>
						</div>
						<div class="form-group" id="">
						    <label for="name">Back Color :</label>
						    <div class="row">
						   		<div class="col-sm-8 col-xxs-8">
								    <input type="text" name="name" id="" class="form-control" value="">						  
							    </div>
								<div class="col-sm-4 col-xxs-4">
									<a href="#">Select color</a>
								</div>
							</div>
						</div>

					    <div class="form-group" id="">
						    <label for="name">Text Style :</label>
							<div class="row">
						   		<div class="col-md-8">
								    <input type="checkbox" name="name" id="" class="" value="">	Bold	
								    <input type="checkbox" name="name" id="" class="" value="">	Underline   	
								    <input type="checkbox" name="name" id="" class="" value="">	Italics					  
							    </div>
							</div>
						</div>

						<hr>

						<h3><b>Root Menu Item Borders</b></h3>
					    <br>

					    <div class="form-group" id="">
						    <label for="name">Border Color :</label>
						    <div class="row">
						   		<div class="col-sm-8 col-xxs-8">
								    <input type="text" name="name" id="" class="form-control" value="">						  
							    </div>
								<div class="col-sm-4 col-xxs-4">
									<a href="#">Select color</a>
								</div>
							</div>
						</div>
						<div class="form-group" id="">
						    <label for="name">Border Style :</label>
						    <div class="row">
						   		<div class="col-sm-8 col-xxs-8">
								   <div class="btn-group">
									  <button type="button" class="form-control" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    None <span class="caret"></span>
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
							</div>
						</div>
						<div class="form-group" id="">
						    <label for="name">Border Width </label>
						    <div class="row">
						   		<div class="col-sm-8 col-xxs-8">
								    <input type="text" name="name" id="" class="form-control" value="">						  
							    </div>								
							</div>
						</div>
					</div>

					<div class="rad-main" id="rad-sub7823">
					    <h3><b>Sub-Menu Item Fonts</b></h3>
					    <br>
					   
					    <div class="form-group" id="">
						    <label for="name">Font :</label>
							   	<div class="row">
							   		<div class="col-md-8">
								    <input type="text" name="name" id="" class="form-control" value="">						  
							    </div>
							</div>
						</div>

						<div class="form-group" id="">
						    <label for="name">Font Size (pt):</label>
							<div class="row">
						   		<div class="col-md-8">
								    <input type="text" name="name" id="" class="form-control" value="">						  
							    </div>
							</div>
						</div>

						<div class="form-group" id="">
						    <label for="name">Text Horizontal Align :</label>
						    <div class="btn-group">
							  <button type="button" class="form-control" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    Left <span class="caret"></span>
							  </button>
							  <ul class="dropdown-menu">
							    <li><a class="popup-edit" href="#">Left</a></li>
							    <li><a class="popup-edit" href="#">Center</a></li>
							    <li><a class="popup-edit" href="#">Right</a></li>
							  </ul>
							</div>					  
					    </div>

					    <div class="form-group" id="">
						    <label for="name">Text Vertical Align :</label>
						    <div class="btn-group">
							  <button type="button" class="form-control" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    Top <span class="caret"></span>
							  </button>
							  <ul class="dropdown-menu">
							    <li><a class="popup-edit" href="#">Top</a></li>
							    <li><a class="popup-edit" href="#">Middle</a></li>
							    <li><a class="popup-edit" href="#">Bottom</a></li>
							    <li><a class="popup-edit" href="#">Baseline</a></li>
							  </ul>
							</div>					  
					    </div>
					    <div class="form-group" id="">
						    <label for="name">Font Color :</label>
						    <div class="row">
						   		<div class="col-sm-8 col-xxs-8">
								    <input type="text" name="name" id="" class="form-control" value="">						  
							    </div>
								<div class="col-sm-4 col-xxs-4">
									<a href="#">Select color</a>
								</div>
							</div>
						</div>
						<div class="form-group" id="">
						    <label for="name">Back Color :</label>
						    <div class="row">
						   		<div class="col-sm-8 col-xxs-8">
								    <input type="text" name="name" id="" class="form-control" value="">						  
							    </div>
								<div class="col-sm-4 col-xxs-4">
									<a href="#">Select color</a>
								</div>
							</div>
						</div>
					    <div class="form-group" id="">
						    <label for="name">Text Style :</label>
							<div class="row">
						   		<div class="col-md-8">
								    <input type="checkbox" name="name" id="" class="" value="">	Bold	
								    <input type="checkbox" name="name" id="" class="" value="">	Underline   	
								    <input type="checkbox" name="name" id="" class="" value="">	Italics					  
							    </div>
							</div>
						</div>

						<hr>
						<h3><b>Sub-Menu Item Borders</b></h3>
					    <br>

					    <div class="form-group" id="">
						    <label for="name">Border Color :</label>
						    <div class="row">
						   		<div class="col-sm-8 col-xxs-8">
								    <input type="text" name="name" id="" class="form-control" value="">						  
							    </div>
								<div class="col-sm-4 col-xxs-4">
									<a href="#">Select color</a>
								</div>
							</div>
						</div>
						<div class="form-group" id="">
						    <label for="name">Border Style :</label>
						    <div class="row">
						   		<div class="col-sm-8 col-xxs-8">
								   <div class="btn-group">
									  <button type="button" class="form-control" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    None <span class="caret"></span>
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
							</div>
						</div>
						<div class="form-group" id="">
						    <label for="name">Border Width </label>
						    <div class="row">
						   		<div class="col-sm-8 col-xxs-8">
								    <input type="text" name="name" id="" class="form-control" value="">						  
							    </div>								
							</div>
						</div>

						<hr>
			
						<h3><b>Sub-Menu Item Borders</b></h3>
					    <br>

					    <div class="form-group" id="">
						    <label for="name">Top :	</label>
						    <div class="row">
						   		<div class="col-sm-8 col-xxs-8">
								    <input type="text" name="name" id="" class="form-control" value="">						  
							    </div>								
							</div>
						</div>
						<div class="form-group" id="">
						    <label for="name">Left :</label>
						    <div class="row">
						   		<div class="col-sm-8 col-xxs-8">
								    <input type="text" name="name" id="" class="form-control" value="">						  
							    </div>								
							</div>
						</div>
						<div class="form-group" id="">
						    <label for="name">Bottom :</label>
						    <div class="row">
						   		<div class="col-sm-8 col-xxs-8">
								    <input type="text" name="name" id="" class="form-control" value="">						  
							    </div>								
							</div>
						</div>
						<div class="form-group" id="">
						    <label for="name">Right : </label>
						    <div class="row">
						   		<div class="col-sm-8 col-xxs-8">
								    <input type="text" name="name" id="" class="form-control" value="">						  
							    </div>								
							</div>
						</div>
					</div>

					<div class="rad-main" id="rad-sub62526">
					    <h3><b>Sub-Menu Item Fonts</b></h3>
					    <br>
					   
					    <div class="form-group" id="">
						    <label for="name">Font :</label>
							   	<div class="row">
							   		<div class="col-md-8">
								    <input type="text" name="name" id="" class="form-control" value="">						  
							    </div>
							</div>
						</div>	
						<div class="form-group" id="">
						    <label for="name">Font Size (pt):</label>
							<div class="row">
						   		<div class="col-md-8">
								    <input type="text" name="name" id="" class="form-control" value="">						  
							    </div>
							</div>
						</div>

						<div class="form-group" id="">
						    <label for="name">Font Color :</label>
						    <div class="row">
						   		<div class="col-sm-8 col-xxs-8">
								    <input type="text" name="name" id="" class="form-control" value="">						  
							    </div>
								<div class="col-sm-4 col-xxs-4">
									<a href="#">Select color</a>
								</div>
							</div>
						</div>
						<div class="form-group" id="">
						    <label for="name">Back Color :</label>
						    <div class="row">
						   		<div class="col-sm-8 col-xxs-8">
								    <input type="text" name="name" id="" class="form-control" value="">						  
							    </div>
								<div class="col-sm-4 col-xxs-4">
									<a href="#">Select color</a>
								</div>
							</div>
						</div>

					    <div class="form-group" id="">
						    <label for="name">Text Style :</label>
							<div class="row">
						   		<div class="col-md-8">
								    <input type="checkbox" name="name" id="" class="" value="">	Bold	
								    <input type="checkbox" name="name" id="" class="" value="">	Underline   	
								    <input type="checkbox" name="name" id="" class="" value="">	Italics					  
							    </div>
							</div>
						</div>

						<hr>
						<h3><b>Sub-Menu Item Borders</b></h3>
					    <br>

					    <div class="form-group" id="">
						    <label for="name">Border Color :</label>
						    <div class="row">
						   		<div class="col-sm-8 col-xxs-8">
								    <input type="text" name="name" id="" class="form-control" value="">						  
							    </div>
								<div class="col-sm-4 col-xxs-4">
									<a href="#">Select color</a>
								</div>
							</div>
						</div>
						<div class="form-group" id="">
						    <label for="name">Border Style :</label>
						    <div class="row">
						   		<div class="col-sm-8 col-xxs-8">
								   <div class="btn-group">
									  <button type="button" class="form-control" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    None <span class="caret"></span>
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
							</div>
						</div>
						<div class="form-group" id="">
						    <label for="name">Border Width </label>
						    <div class="row">
						   		<div class="col-sm-8 col-xxs-8">
								    <input type="text" name="name" id="" class="form-control" value="">						  
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

