

@extends('layouts.admin')
@section('content')

		<div class="row">
		   <div class="col-inner">
		      <div class="list-btr">
		         <h2>Menus</h2>
		      </div>
		      <div class="list-view">
		         <ul>
		            <li><a href="/admin/menus-create-details">Details</a></li>
		            <li><a href="/admin/menus-create-menu">Menu Items</a></li>
		            <li><a href="/admin/menus-create-menulook">Menu look</a></li>
		            <li class="active"><a href="#">Items look</a></li>
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
		               <input type="text" name="name" id="" class="form-control" value="">			                 
		            </div>
		            <div class="form-group" id="">
		               <label for="name">Font Size (pt):</label>
		               <input type="text" name="name" id="" class="form-control" value="">	
		            </div>
		            <div class="form-group" id="">
		               <label for="name">Text Horizontal Align :</label>		            
		               <select class="form-control">
		                  <option>Left</option>
		                  <option>Center</option>
		                  <option>Right</option>
		               </select>
		            </div>
		            <div class="form-group" id="">
		               <label for="name">Text Vertical Align :</label>		           
		               <select class="form-control">
		                  <option>Top</option>
		                  <option>Middle</option>
		                  <option>Bottom</option>
		                  <option>Baseline</option>
		               </select>
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
		               <label for="name">Border Width </label>
		               <div class="row">
		                  <div class="col-sm-8 col-xxs-8">
		                     <input type="text" name="name" id="" class="form-control" value="">						  
		                  </div>
		                  <div class="col-sm-4 col-xxs-4">
		                     <a href="#">Select color</a>
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
		               <input type="text" name="name" id="" class="form-control" value="">
		            </div>
		            <div class="form-group" id="">
		               <label for="name">Font Size (pt):</label>
		               <input type="text" name="name" id="" class="form-control" value="">						  
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
		               <label for="name">Border Width </label>
		                     <input type="text" name="name" id="" class="form-control" value="">						  
		                
		            </div>
		         </div>
		         <div class="rad-main" id="rad-sub7823">		            
		            <h3><b>Sub-Menu Item Fonts</b></h3>
		            <br>
		            <div class="form-group" id="">
		               <label for="name">Font :</label>
		                     <input type="text" name="name" id="" class="form-control" value="">						  
		                  
		            </div>
		            <div class="form-group" id="">
		               <label for="name">Font Size (pt):</label>
		                     <input type="text" name="name" id="" class="form-control" value="">						  
		                 
		            </div>
		            <div class="form-group" id="">
		               <label for="name">Text Horizontal Align :</label>
		               <select class="form-control">
		                  <option>Left</option>
		                  <option>Center</option>
		                  <option>Right</option>
		               </select>
		            </div>
		            <div class="form-group" id="">
		               <label for="name">Text Vertical Align :</label>
		               <select class="form-control">
		                  <option>Top</option>
		                  <option>Middle</option>
		                  <option>Bottom</option>
		                  <option>Baseline</option>
		               </select>
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
		               <label for="name">Border Width </label>
		                     <input type="text" name="name" id="" class="form-control" value="">						  
		                 
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
		                     <input type="text" name="name" id="" class="form-control" value="">						  
		                
		            </div>
		            <div class="form-group" id="">
		               <label for="name">Font Size (pt):</label>
		                     <input type="text" name="name" id="" class="form-control" value="">						  
		                
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
		               <label for="name">Border Width </label>
		                     <input type="text" name="name" id="" class="form-control" value="">						  
		                 
		            </div>
		         </div>
		      </div>
		      <input type="button" id="" value="Save" class="btn btn-primary">
		   </div>
		   <hr>
		</div>


@endsection

