

@extends('layouts.admin')
@section('content')

      	<div class="list-btr">
         	<h2>Menus</h2>
     	</div>
	   	 <div class="list-view">
		         <ul>
		            <li><a href="/admin/menus-edit-details">Details</a></li>
		            <li><a href="/admin/menus-edit-menu">Menu Items</a></li>
		            <li><a href="/admin/menus-edit-menulook">Menu look</a></li>
		            <li class="active"><a href="#">Items look</a></li>
		         </ul>
		      </div>
		<div class="row">
		   <div class="">
		      <br>
		      <div class="rad-wrapper">
		         <div class="row form-group col-inner-deep">	
		         	<div class="col-md-5 text-right">	
		         		<div class="flex-center" style="min-height: 104px;">
		            		<label for="name">Customize overall look of : </label>
		            	</div>
		            </div>
		            <div class="col-md-7">
			            <div class="form-group flex-inline"><input type="radio" name="name" id="p0923" class="choice" value="" href="#rad-allroot" checked><label for="p0923">All root menu items when mouse is not over</label></div>
			            <div class="form-group flex-inline"><input type="radio" name="name" id="p09233" class="choice" value="" href="#rad-sub142"><label for="p09233">All root menu items when the mouse is over</label></div>
			            <div class="form-group flex-inline"><input type="radio" name="name" id="p09k2" class="choice" value="" href="#rad-sub7823"><label for="p09k2">All sub-menu items when the mouse is not over</label></div>
			            <div class="form-group flex-inline"><input type="radio" name="name" id="p192" class="choice" value="" href="#rad-sub62526"><label for="p192">All sub-menu items when the mouse is over</label></div>
			        </div>
		         </div>
		         <br>
		        <div class="rad-main open" id="rad-allroot">	
		         	<div class="hybridFormHeader">
					    <h2 class="hybridFormTitlewrap">
					      Root Menu Item Fonts
					    </h2>
					</div>	
					<div class="col-inner-deep">  
			            <div class="row form-group" id="">
			            	<div class="col-md-5 text-right">
			               		<label for="name">Font :</label>
			               	</div>
			               	<div class="col-md-5 ">
			               		<input type="text" name="" id="" class="form-control" value="">	
			               	</div>		                 
			            </div>
			            <div class="row form-group" id="">
			            	<div class="col-md-5 text-right">
			               		<label for="name">Font Size (pt):</label>
			               	</div>
			               	<div class="col-md-5">
			               		<input type="text" name="" id="" class="form-control" value="">	
			               	</div>
			            </div>
			            <div class="row form-group" id="">
			            	<div class="col-md-5 text-right">
			               		<label for="name">Text Horizontal Align :</label>	
			               	</div>	
			               	<div class="col-md-5">            
				               <select class="form-control">
				                  <option>Left</option>
				                  <option>Center</option>
				                  <option>Right</option>
				               </select>
				           </div>
			            </div>
			            <div class="row form-group" id="">
			            	<div class="col-md-5 text-right">
			               		<label for="name">Text Vertical Align :</label>	
			               		</div>	
			               	<div class="col-md-5 text-right">           
				               <select class="form-control">
				                  <option>Top</option>
				                  <option>Middle</option>
				                  <option>Bottom</option>
				                  <option>Baseline</option>
				               </select>
				           </div>
			            </div>
			            <div class="row form-group" id="">
			            	<div class="col-md-5 text-right">
			               		<label for="name">Font Color :</label>
			               	</div>
			               	<div class="col-md-5 text-right">
			                     <input type="text" name="" id="" class="form-control" value="">						  
			                </div>
			                <a href="#">Select color</a>
			            </div>
			            <div class="row form-group" id="">
			            	<div class="col-md-5 text-right">
			               		<label for="name">Back Color :</label>
			               	</div>
			              	<div class="col-md-5 text-right">
			                     <input type="text" name="" id="" class="form-control" value="">						  
			                  </div>			               
			                <a href="#">Select color</a>
			            </div>
			            <div class="row form-group">
			              	<div class="col-md-5 text-right">
			                     <label for="name">Text Style :</label>
			                 </div>
			                <div class="col-md-5">
			                     <input type="checkbox" name="" id="" class="" value=""><label>Bold</label>	
			                     <input type="checkbox" name="" id="" class="" value=""><label>Underline</label>   	
			                     <input type="checkbox" name="" id="" class="" value=""><label>Italics</label>	
			               	</div>
			            </div>
			        </div>
			        <br>
		            <div class="hybridFormHeader">
					    <h2 class="hybridFormTitlewrap">
					      Root Menu Item Borders
					    </h2>
					</div>
					<div class="col-inner-deep"> 
			            <div class=" row form-group">
			            	<div class="col-md-5 text-right">
			               		<label for="name">Border Color :</label>
			               	</div>
			               	<div class="col-md-5">			              
			                     <input type="text" name="name" id="" class="form-control" value="">						  
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
			               		<label for="name">Border Width </label>
			               	</div>
			               	<div class="col-md-5">
			                     <input type="text" name="" id="" class="form-control" value="">						  
			                </div>
			                <a href="#">Select color</a>		                 
			            </div>
			        </div>
		            <br>
		            <div class="hybridFormHeader">
					    <h2 class="hybridFormTitlewrap">
					      Root Menu Item Padding
					    </h2>
					</div>
					<div class="col-inner-deep">
			            <div class="row form-group" id="">
			            	<div class="col-md-5 text-right">
			               		<label for="name">Top :	</label>
			               	</div>
			               	<div class="col-md-5">
			                     <input type="text" name="" id="" class="form-control" value="">						  
			               	</div>
			            </div>
			            <div class="row form-group" id="">
			            	<div class="col-md-5 text-right">
			               		<label for="name">Left :</label>
			               	</div>
			               	<div class="col-md-5">
			                     <input type="text" name="" id="" class="form-control" value="">		
			               	</div>
			            </div>
			            <div class="row form-group" id="">
			            	<div class="col-md-5 text-right">
			               		<label for="name">Bottom :</label>
			               	</div>
			               	<div class="col-md-5">
			                     <input type="text" name="" id="" class="form-control" value="">						  
			               </div>
			            </div>
			            <div class="row form-group" id="">
			            	<div class="col-md-5 text-right">
			               		<label for="name">Right : </label>
			               	</div>
			               	<div class="col-md-5">
			                     <input type="text" name="" id="" class="form-control" value="">						  
			               </div>
			            </div>
			        </div>
		        </div>
		        <div class="rad-main" id="rad-sub142">	
		         	<div class="hybridFormHeader">
					    <h2 class="hybridFormTitlewrap">
					      Root Menu Item Fonts
					    </h2>
					</div>
					<div class="col-inner-deep">	
			            <div class="row form-group" id="">
			            	<div class="col-md-5 text-right">
			               		<label for="name">Font :</label>
			               	</div>
			               	<div class="col-md-5">
			              		<input type="text" name="" id="" class="form-control" value="">
			              	</div>
			            </div>
			            <div class="row form-group" id="">
			            	<div class="col-md-5 text-right">
			               		<label for="name">Font Size (pt):</label>
			               	</div>
			               	<div class="col-md-5">
			               		<input type="text" name="" id="" class="form-control" value="">	
			               		</div>					  
			            </div>
			            <div class=" row form-group" id="">
			            	<div class="col-md-5 text-right">
			               		<label for="name">Font Color :</label>
			               	</div>
			                <div class="col-md-5">
			                     <input type="text" name="" id="" class="form-control" value="">						  
			                </div>
			                <a href="#">Select color</a>
			            </div>
			            <div class=" row form-group" id="">
			            	<div class="col-md-5 text-right">
			               		<label for="name">Back Color :</label>
			               	</div>
				            <div class="col-md-5 text-right">
			                     <input type="text" name="" id="" class="form-control" value="">						  
			                </div>
			                <a href="#">Select color</a>
			            </div>
			            <div class=" row form-group" id="">
			            	<div class="col-md-5 text-right">
			              		 <label for="name">Text Style :</label>
			              	</div>
			               	<div class="col-md-5">
			                     <input type="checkbox" name="" id="" class="" value="">	Bold	
			                     <input type="checkbox" name="" id="" class="" value="">	Underline   	
			                     <input type="checkbox" name="" id="" class="" value="">	Italics					  
			                  </div>
			               </div>
			            </div>
			        </div>
		            <div class="hybridFormHeader">
					    <h2 class="hybridFormTitlewrap">
					      Root Menu Item Borders
					    </h2>
					</div>
					<div class="col-inner-deep">
			            <div class="row form-group" id="">
			            	<div class="col-md-5 text-right">
			               		<label for="name">Border Color :</label>
			               	</div>
			               	<div class="col-md-5 text-right">
			                     <input type="text" name="" id="" class="form-control" value="">						  
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
			               		<label for="name">Border Width </label>
			               	</div>
			               	<div class="col-md-5">
			                    <input type="text" name="" id="" class="form-control" value="">	
			                </div>
			            </div>
			        </div>
		        </div>
		        <div class="rad-main" id="rad-sub7823">	
		         	<div class="hybridFormHeader">
					    <h2 class="hybridFormTitlewrap">
					      Sub-Menu Item Fonts
					    </h2>
					</div>	
					<div class="col-inner-deep">
			            <div class="row form-group" id="">
			            	<div class="col-md-5 text-right">
			               		<label for="name">Font :</label>
			               	</div>
			               	<div class="col-md-5">
			                    <input type="text" name="" id="" class="form-control" value="">		
			                </div>
			            </div>
			            <div class="row form-group" id="">
			            	<div class="col-md-5 text-right">
			               		<label for="name">Font Size (pt):</label>
			               	</div>
			               	<div class="col-md-5">
			                    <input type="text" name="" id="" class="form-control" value="">	
			                </div>		
			            </div>
			            <div class="row form-group" id="">
			            	<div class="col-md-5 text-right">
			               		<label for="name">Text Horizontal Align :</label>
			               	</div>
			               	<div class="col-md-5">
				               <select class="form-control">
				                  <option>Left</option>
				                  <option>Center</option>
				                  <option>Right</option>
				               </select>
				           </div>
			            </div>
			            <div class="row form-group" id="">
			            	<div class="col-md-5 text-right">
			               		<label for="name">Text Vertical Align :</label>
			               	</div>
			               	<div class="col-md-5">
				               <select class="form-control">
				                  <option>Top</option>
				                  <option>Middle</option>
				                  <option>Bottom</option>
				                  <option>Baseline</option>
				               </select>
				           </div>
			            </div>
			            <div class="row form-group" id="">
			            	<div class="col-md-5 text-right">
			               		<label for="name">Font Color :</label>
			               	</div>
			               	<div class="col-md-5">
			                     <input type="text" name="" id="" class="form-control" value="">						  
			                </div>
			                <a href="#">Select color</a>
			            </div>
			            <div class="row form-group" id="">
			            	<div class="col-md-5 text-right">
			               		<label for="name">Back Color :</label>
			               	</div>
			               	<div class="col-md-5">
			                     <input type="text" name="" id="" class="form-control" value="">						  
			                </div>
			                <a href="#">Select color</a>
			            </div>
			            <div class="row form-group" id="">
			            	<div class="col-md-5 text-right">
			               		<label for="name">Text Style :</label>
			               	</div>
			               	<div class="col-md-5">
			                     <input type="checkbox" name="" id="" class="" value="">	Bold	
			                     <input type="checkbox" name="" id="" class="" value="">	Underline   	
			                     <input type="checkbox" name="" id="" class="" value="">	Italics	
			               	</div>
			            </div>
			        </div>
			        <br>
			        <div class="hybridFormHeader">
					    <h2 class="hybridFormTitlewrap">
					      Sub-Menu Item Borders
					    </h2>
					</div>	
					<div class="col-inner-deep">
			            <div class="row form-group" id="">
			            	<div class="col-md-5 text-right">
			               		<label for="name">Border Color :</label>
			               	</div>
			               	<div class="col-md-5">
			                     <input type="text" name="" id="" class="form-control" value="">						  
			                </div>
			                <a href="#">Select color</a>
			            </div>
			            <div class="row form-group" id="">
			            	<div class="col-md-5 text-right">
			               		<label for="name">Border Style :</label>
			               	</div>
			               	<div class="col-md-5 text-right">
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
			               		<label for="name">Border Width </label>
			               	</div>
			               	<div class="col-md-5">
			                     <input type="text" name="" id="" class="form-control" value="">	
							</div>					   
			            </div>
			        </div>
			        <br>
			        <div class="hybridFormHeader">
					    <h2 class="hybridFormTitlewrap">
					      Sub-Menu Item Borders
					    </h2>
					</div>
					<div class="col-inner-deep">	
			            <div class="row form-group" id="">
			            	<div class="col-md-5 text-right">
			               		<label for="name">Top :	</label>
			               	</div>
			               	<div class="col-md-5 text-right">
			                    <input type="text" name="" id="" class="form-control" value="">		
			               </div>
			            </div>
			            <div class="row form-group" id="">
			            	<div class="col-md-5 text-right">
				               <label for="name">Left :</label>
				           </div>
	   		                <div class="col-md-5">
			                     <input type="text" name="" id="" class="form-control" value="">						  
			               </div>
			            </div>
			            <div class="row form-group" id="">
			            	<div class="col-md-5 text-right">
				               <label for="name">Bottom :</label>
				           </div>
	   		                <div class="col-md-5">
			                     <input type="text" name="" id="" class="form-control" value="">						  
			               </div>
			            </div>
			            <div class="row form-group" id="">
			            	<div class="col-md-5 text-right">
				               <label for="name">Right : </label>
				           </div>
	   		                <div class="col-md-5">
			                     <input type="text" name="" id="" class="form-control" value="">						  
			               </div>
			            </div>
			        </div>
		        </div>
		        <div class="rad-main" id="rad-sub62526">	
		         	<div class="hybridFormHeader">
					    <h2 class="hybridFormTitlewrap">
					      Sub-Menu Item Fonts
					    </h2>
					</div>	
					<div class="col-inner-deep">   
			            <div class="row form-group" id="">
			            	<div class="col-md-5 text-right">
			               		<label for="name">Font :</label>
			               	</div>
			               	<div class="col-md-5">
			                    <input type="text" name="" id="" class="form-control" value="">						  
			                </div>
			            </div>
			            <div class="row form-group" id="">
			            	<div class="col-md-5 text-right">
			               		<label for="name">Font Size (pt):</label>
			               	</div>
			               	<div class="col-md-5 text-right">
			                     <input type="text" name="" id="" class="form-control" value="">	
			                </div>					  
			            </div>
			            <div class="row form-group" id="">
			            	<div class="col-md-5 text-right">
			               		<label for="name">Font Color :</label>
			               	</div>
			               	<div class="col-md-5 text-right">
			                     <input type="text" name="" id="" class="form-control" value="">						  
			                </div>
			                <a href="#">Select color</a>
			            </div>
			            <div class="row form-group" id="">
			            	<div class="col-md-5 text-right">
			               		<label for="name">Back Color :</label>
			               	</div>
			               	<div class="col-md-5 text-right">
			                     <input type="text" name="" id="" class="form-control" value="">						  
			                </div>
			                <a href="#">Select color</a>
			            </div>
			            <div class="row form-group" id="">
			            	<div class="col-md-5 text-right">
			               		<label for="name">Text Style :</label>
			               	</div>
			               	<div class="col-md-5">
			                     <input type="checkbox" name="" id="" class="" value="">	Bold	
			                     <input type="checkbox" name="" id="" class="" value="">	Underline   	
			                     <input type="checkbox" name="" id="" class="" value="">	Italics					  
			                  </div>
			               </div>
			            </div>
			        </div>

			        <br>
		            <div class="hybridFormHeader">
					    <h2 class="hybridFormTitlewrap">
					     Sub-Menu Item Borders
					    </h2>
					</div>	
					<div class="col-inner-deep">
			            <div class="row form-group" id="">
			            	<div class="col-md-5 text-right">
			               		<label for="name">Border Color :</label>
			               	</div>
			               	<div class="col-md-5">
			                     <input type="text" name="" id="" class="form-control" value="">						  
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
			               		<label for="name">Border Width </label>
			               	</div>
			               	<div class="col-md-5">
			                     <input type="text" name="" id="" class="form-control" value="">
			                </div>						  
			                 
			            </div>
			        </div>
		         </div>
			      <div class="button-wrapper">
			      	<input type="button" id="" value="Save" class="btn btn-primary">
			      </div>
		      </div>
		   </div>
		   <hr>
		</div>


@endsection

