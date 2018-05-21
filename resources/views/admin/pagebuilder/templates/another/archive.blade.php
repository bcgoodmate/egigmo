@extends('layouts.admin')

@section('content')
	   	
        <div class="card-header"><h1>Archive And Rollback</h1></div>
		
		<div class="warning-row">
	        <div class="warningMessage">
	        	<span>Archived information older than 90 days is automatically deleted from the system.</span>
        	</div>
        </div>
		

		<div class="table-main">
            <table id="table-anchor" class="display" style="width:100%">
                <thead>
                    <tr class="">                                    
                        <th>Edited By</th>
                        <th>Archive Date	</th>
                        <th>Name</th>
                        <th>FileName</th>
                        <th>ID	</th>	
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>3LD Artwork</td>
                        <td>18-May-2018</td>
                        <td>tester</td>
                        <td>tester.htm</td>
                        <td>1195306</td>
                        <td><a href="#">  Desktop  Rollback</a></td>
                    </tr>
                                     
                   
                </tbody>
               
            </table>
        </div>
		

@endsection