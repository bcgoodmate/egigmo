@extends('layouts.admin')

@section('content')
	        <div class="list-btr">
	            <h2>System Pages</h2>	            
	        </div>			
			<br>
			<div class="row system-pages">
				<label class="heading">Secure Zones</label>
				<li>
					<a href="/admin/systempages-custom">
						<span class="pad-lft">Secure Zone Access Expired</span>		
						<span class="listItemDescription">This error is displayed if a user's access to a secure zone has expired</span>
					</a>					
				</li>				
				<li>
					<a href="/admin/systempages-custom">
						<span class="pad-lft">Secure Zone Access Denied</span>				
						<span class="listItemDescription">This error is displayed if a user unsuccessfully tries to login to a secure zone</span>
					</a>
				</li>
				<li>
					<a href="/admin/systempages-custom">
						<span class="pad-lft">Secure Zone Reauthentication Page</span>				
						<span class="listItemDescription">This message is displayed when a user is asked to reauthenticate before making sensitive changes</span>
					</a>
				</li>
				<li>
					<a href="/admin/systempages-custom">
						<span class="pad-lft">Secure Zone Log Out Page</span>				
						<span class="listItemDescription">This message is displayed when a user logs out of a secure zone</span>
					</a>
				</li>
				<br>
				<label class="heading">Users</label>
				<li>
					<a href="/admin/systempages-custom">
						<span class="pad-lft">Password Retrieve Request</span>				
						<span class="listItemDescription">This message is displayed if a user requests to reset his password</span>
					</a>
				</li>
				<li>
					<a href="/admin/systempages-custom">
						<span class="pad-lft">Password Retrieve Confirmation</span>				
						<span class="listItemDescription">Confirmation message shown to a user after retrieving their forgotten/lost password</span>
					</a>
				</li>
				<li>
					<a href="/admin/systempages-custom">
						<span class="pad-lft">Password Reset</span>				
						<span class="listItemDescription">This message is displayed when a user resets his password after clicking the reset link which was emailed to him</span>
					</a>
				</li>
				<li>
					<a href="/admin/systempages-custom">
						<span class="pad-lft">Password Reset Success</span>				
						<span class="listItemDescription">Confirmation message shown to a user after he has successfully reset his password</span>
					</a>
				</li>
				<br>
				<label class="heading">General</label>				
				<li>
					<a href="/admin/systempages-custom">
						<span class="pad-lft">Secure Zone Unauthorized</span>				
						<span class="listItemDescription">This error is displayed if a user views any content which he does not have access to</span>
					</a>
				</li>	
				<li>
					<a href="/admin/systempages-custom">
						<span class="pad-lft">404 Page Not Found</span>				
						<span class="listItemDescription">This error is displayed if no web page is found for a corresponding URL</span>
					</a>
				</li>
				<li>
					<a href="/admin/systempages-custom">
						<span class="pad-lft">General</span>				
						<span class="listItemDescription">General System error message shown to the user</span>
					</a>
				</li>
				<br>
				<label class="heading">Online Shop</label>
				<li>
					<a href="/admin/systempages-custom">
						<span class="pad-lft">Credit Card Payment Fail Page</span>				
						<span class="listItemDescription">This error message is displayed if credit card processing fails.</span>
					</a>
				</li>
				<br>	
				<label class="heading">Favorites</label>
				<li>
					<a href="/admin/systempages-custom">
						<span class="pad-lft">Favorites Confirmation Page</span>				
						<span class="listItemDescription">Confirmation message shown to a user after adding an item to their favorites list</span>
					</a>
				</li>
				<br>
				<label class="heading">Comments</label>	
				<li>
					<a href="/admin/systempages-custom">
						<span class="pad-lft">Comments Confirmation Page</span>				
						<span class="listItemDescription">Confirmation message shown to a user after commenting on an item</span>
					</a>
				</li>
				<li>
					<a href="/admin/systempages-custom">
						<span class="pad-lft">Comments Denied Page</span>				
						<span class="listItemDescription">This error is displayed if the current user is not allowed to comment on an item</span>
					</a>
				</li>
				<br>
				<label class="heading">Email Marketing</label>				
				<li>
					<a href="/admin/systempages-custom">
						<span class="pad-lft">Subscription Confirmation Request</span>				
						<span class="listItemDescription">Message shown to a user to confirm a newsletter subscription</span>
					</a>
				</li>	
				<li>
					<a href="/admin/systempages-custom">
						<span class="pad-lft">Subscription Confirmed</span>				
						<span class="listItemDescription">Confirmation message shown to a user after subscribing or verifying a newsletter subscription</span>
					</a>
				</li>
				<li>
					<a href="/admin/systempages-custom">
						<span class="pad-lft">Unsubscribe Confirmation</span>				
						<span class="listItemDescription">Message shown to a user to confirm a newsletter unsubscribe</span>
					</a>
				</li>
				<li>
					<a href="/admin/systempages-custom">
						<span class="pad-lft">Unsubscribe Confirmed</span>				
						<span class="listItemDescription">Confirmation message shown to a user after unsubscribing from a newsletter campaign</span>
					</a>
				</li>	
				<br>
				<label class="heading">Events</label>				
				<li>
					<a href="/admin/systempages-custom">
						<span class="pad-lft">Event Confirmation Page</span>				
						<span class="listItemDescription">Confirmation message shown to a user directly after making a booking</span>
					</a>
				</li>
				<li>
					<a href="/admin/systempages-custom">
						<span class="pad-lft">Event Verification Confirm Form</span>				
						<span class="listItemDescription">Message shown to a user to confirm a booking verification</span>
					</a>
				</li>	
				<li>
					<a href="/admin/systempages-custom">
						<span class="pad-lft">Event Verification Page</span>				
						<span class="listItemDescription">Confirmation message shown to a user after a user verifies their booking</span>
					</a>
				</li>	
				<br>
				<label class="heading">Web Forms</label>
				<li>
					<a href="/admin/systempages-custom">
						<span class="pad-lft">Web Forms Confirmation Page</span>				
						<span class="listItemDescription">Confirmation message shown to a user directly after filling in a web form</span>
					</a>
				</li>	
				<li>
					<a href="/admin/systempages-custom">
						<span class="pad-lft">Update Details Form Confirmation Page</span>				
						<span class="listItemDescription">Confirmation message shown to a user after they update their details via a Secure Zone</span>
					</a>
				</li>	
				<br>
				<label class="heading">Web Apps</label>
				<li>
					<a href="/admin/systempages-custom">
						<span class="pad-lft">Web App Item Confirmation Page</span>				
						<span class="listItemDescription">Confirmation message shown to a user after submitting a new Web App item via a Secure Zone</span>
					</a>
				</li>	
				<li>
					<a href="/admin/systempages-custom">
						<span class="pad-lft">Web App Item Delete Confirmation Page</span>				
						<span class="listItemDescription">Confirmation message shown to a user after they delete a previously submitted Web App item</span>
					</a>
				</li>	
			</div>    	
    	
@endsection

