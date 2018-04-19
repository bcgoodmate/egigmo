@extends('layouts.admin')

@section('content')

	   	
	        <div class="list-btr">
	            <h2>System Pages</h2>
	        </div>
			
			<br>

			<label><h3>Secure Zones</h3></label>
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="#" class="pad-lft">Secure Zone Access Expired</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>This error is displayed if a user's access to a secure zone has expired</span>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="#" class="pad-lft">Secure Zone Access Denied</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>This error is displayed if a user unsuccessfully tries to login to a secure zone</span>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="#" class="pad-lft">Secure Zone Reauthentication Page</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>This message is displayed when a user is asked to reauthenticate before making sensitive changes</span>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="#" class="pad-lft">Secure Zone Log Out Page</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>This message is displayed when a user logs out of a secure zone</span>
				</div>
			</div>
			<hr>
			<label><h3>Users</h3></label>
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="#" class="pad-lft">Password Retrieve Request</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>This message is displayed if a user requests to reset his password</span>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="#" class="pad-lft">Password Retrieve Confirmation</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>Confirmation message shown to a user after retrieving their forgotten/lost password</span>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="#" class="pad-lft">Password Reset</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>This message is displayed when a user resets his password after clicking the reset link which was emailed to him</span>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="#" class="pad-lft">Password Reset Success</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>Confirmation message shown to a user after he has successfully reset his password</span>
				</div>
			</div>
			<hr>
			<label><h3>General</h3></label>
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="#" class="pad-lft">Secure Zone Unauthorized</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>This error is displayed if a user views any content which he does not have access to</span>
				</div>
			</div>	
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="#" class="pad-lft">404 Page Not Found</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>This error is displayed if no web page is found for a corresponding URL</span>
				</div>
			</div>		
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="#" class="pad-lft">General</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>General System error message shown to the user</span>
				</div>
			</div>	
			<hr>
			<label><h3>Online Shop</h3></label>
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="#" class="pad-lft">Credit Card Payment Fail Page</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>This error message is displayed if credit card processing fails.</span>
				</div>
			</div>
			<hr>		
			<label><h3>Favorites</h3></label>
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="#" class="pad-lft">Favorites Confirmation Page</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>Confirmation message shown to a user after adding an item to their favorites list</span>
				</div>
			</div>	
			<hr>
			<label><h3>Comments</h3></label>
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="#" class="pad-lft">Comments Confirmation Page</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>Confirmation message shown to a user after commenting on an item</span>
				</div>
			</div>		
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="#" class="pad-lft">Comments Denied Page</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>This error is displayed if the current user is not allowed to comment on an item</span>
				</div>
			</div>	
			<hr>
			<label><h3>Email Marketing</h3></label>
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="#" class="pad-lft">Subscription Confirmation Request</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>Message shown to a user to confirm a newsletter subscription</span>
				</div>
			</div>	
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="#" class="pad-lft">Subscription Confirmed</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>Confirmation message shown to a user after subscribing or verifying a newsletter subscription</span>
				</div>
			</div>	
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="#" class="pad-lft">Unsubscribe Confirmation </a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>Message shown to a user to confirm a newsletter unsubscribe</span>
				</div>
			</div>	
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="#" class="pad-lft">Unsubscribe Confirmed </a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>Confirmation message shown to a user after unsubscribing from a newsletter campaign</span>
				</div>
			</div>	
			<hr>
			<label><h3>Events</h3></label>
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="#" class="pad-lft">Event Confirmation Page</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>Confirmation message shown to a user directly after making a booking</span>
				</div>
			</div>	
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="#" class="pad-lft">Event Verification Confirm Form</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>Message shown to a user to confirm a booking verification</span>
				</div>
			</div>	
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="#" class="pad-lft">Event Verification Page</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>Confirmation message shown to a user after a user verifies their booking</span>
				</div>
			</div>	
			<hr>
			<label><h3>Web Forms</h3></label>
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="#" class="pad-lft">Web Forms Confirmation Page</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>Confirmation message shown to a user directly after filling in a web form</span>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="#" class="pad-lft">Update Details Form Confirmation Page</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>Confirmation message shown to a user after they update their details via a Secure Zone</span>
				</div>
			</div>	
			<hr>
			<label><h3>Web Apps</h3></label>
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="#" class="pad-lft">Web App Item Confirmation Page</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>Confirmation message shown to a user after submitting a new Web App item via a Secure Zone</span>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="#" class="pad-lft">Web App Item Delete Confirmation Page</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>Confirmation message shown to a user after they delete a previously submitted Web App item</span>
				</div>
			</div>




	    	
    	
@endsection

