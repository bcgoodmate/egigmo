@extends('layouts.admin')

@section('content')	   	

    <div class="list-btr">
        <h2>System E-mails</h2>
    </div>			
	<br>
    <div class="btn-add">
        <ul>
            <li><a id="" class="" href="#">Set Default 'From' Email</a></li>
        </ul>
    </div>			
	<div class="row system-pages">
	    <label class="heading">Users</label>
		<li>
			<a href="/admin/systememails-custom">
				<span class="pad-lft">Password Retrieve Email</span>		
				<span class="listItemDescription">This email is sent to your customers when they use the 'lost password' feature</span>
			</a>					
		</li>			
		<br>
		<label class="heading">Online Shop</label>
		<li>
			<a href="/admin/systememails-custom">
				<span class="pad-lft">Invoice</span>		
				<span class="listItemDescription">Invoice template sent as email to your customers when an order invoice is generated</span>
			</a>					
		</li>		
		<li>
			<a href="/admin/systememails-custom">
				<span class="pad-lft">Order Status Changed</span>		
				<span class="listItemDescription">Sent to a customer when their order status has changed</span>
			</a>					
		</li>	
		<li>
			<a href="/admin/systememails-custom">
				<span class="pad-lft">Quote</span>		
				<span class="listItemDescription">Quote template sent as email to your customers when an order quote is generated</span>
			</a>					
		</li>	
		<li>
			<a href="/admin/systememails-custom">
				<span class="pad-lft">Gift Voucher</span>		
				<span class="listItemDescription">Sent to a customer receiving a gift voucher from another customer</span>
			</a>					
		</li>	
		<li>
			<a href="/admin/systememails-custom">
				<span class="pad-lft">Drop Shipping</span>		
				<span class="listItemDescription">Sent to one or more suppliers to fulfil a customer order on behalf of your business</span>
			</a>					
		</li>	
		<li>
			<a href="/admin/systememails-custom">
				<span class="pad-lft">First Cart Recovery Email</span>		
				<span class="listItemDescription">Email template sent when a customer abandons a cart</span>
			</a>					
		</li>	
		<li>
			<a href="/admin/systememails-custom">
				<span class="pad-lft">Second Cart Recovery Email</span>		
				<span class="listItemDescription">Second email template sent when a customer abandons a cart</span>
			</a>					
		</li>	
		<br>
		<label class="heading">Email Marketing</label>
		<li>
			<a href="/admin/systememails-custom">
				<span class="pad-lft">Double Opt-In Email</span>		
				<span class="listItemDescription">Sent to a customer asking them to verify their subscription to an email marketing list</span>
			</a>					
		</li>	
		<br>
		<label class="heading">Secure Zones</label>
		<li>
			<a href="/admin/systememails-custom">
				<span class="pad-lft">Secure Zone Login Details</span>		
				<span class="listItemDescription">Sent to a customer containing login details and a list of secure zones they may access</span>
			</a>					
		</li>						
		<br>
		<label class="heading">Affiliates</label>
		<li>
			<a href="/admin/systememails-custom">
				<span class="pad-lft">Affiliate Program Details</span>		
				<span class="listItemDescription">Sent to a customer containing details of any affiliate programs they belong to</span>
			</a>					
		</li>					
		<br>
		<label class="heading">Tell-a-Friend</label>		
		<li>
			<a href="/admin/systememails-custom">
				<span class="pad-lft">Tell-a-Friend</span>		
				<span class="listItemDescription">Sent to one or more friends after the Tell-a-Friend feature is used with an item</span>
			</a>					
		</li>					
		<br>
		<label class="heading">Forums</label>
		<li>
			<a href="/admin/systememails-custom">
				<span class="pad-lft">Forums Subscriber Alert for New Posts</span>		
				<span class="listItemDescription">Sent to a subscriber of a forum topic when a new post is submitted</span>
			</a>					
		</li>	
		<li>
			<a href="/admin/systememails-custom">
				<span class="pad-lft">Forums Subscriber Alert for New Topics</span>		
				<span class="listItemDescription">Sent to a subscriber of a forum topic when a new topic is created</span>
			</a>					
		</li>					
		<br>
		<label class="heading">CST</label>
		<li>
			<a href="/admin/systememails-custom">
				<span class="pad-lft">Customer Service Ticketing</span>		
				<span class="listItemDescription">Sent to a customer after a customer service representative replies to their query.</span>
			</a>					
		</li>			
		<br>
		<label class="heading">Workflows</label>	
		<li>
			<a href="/admin/systememails-custom">
				<span class="pad-lft">Workflow Notification</span>		
				<span class="listItemDescription">Sent to all responsible users once a workflow not requiring approval has been launched</span>
			</a>					
		</li>	
		<li>
			<a href="/admin/systememails-custom">
				<span class="pad-lft">3rd Party Workflow Emails</span>		
				<span class="listItemDescription">Sent to 3rd parties who are registered for a workflow process</span>
			</a>					
		</li>	
		<li>
			<a href="/admin/systememails-custom">
				<span class="pad-lft">Workflow Task</span>		
				<span class="listItemDescription">Sent to all responsible users once a workflow requiring approval has been launched</span>
			</a>					
		</li>		
		<li>
			<a href="/admin/systememails-custom">
				<span class="pad-lft">Workflow Completion</span>		
				<span class="listItemDescription">Sent to all responsible users once a workflow has been completed</span>
			</a>					
		</li>		
		<li>
			<a href="/admin/systememails-custom">
				<span class="pad-lft">Workflow Reminder</span>		
				<span class="listItemDescription">Sent to all responsible users if there is a workflow requiring approval</span>
			</a>					
		</li>
		<li>
			<a href="/admin/systememails-custom">
				<span class="pad-lft">Workflow Escalation</span>		
				<span class="listItemDescription">Sent to all escalation users if a workflow has not been approved in time</span>
			</a>					
		</li>	
		<li>
			<a href="/admin/systememails-custom">
				<span class="pad-lft">Workflow Rejection</span>		
				<span class="listItemDescription">Sent to a user if their workflow has been rejected</span>
			</a>					
		</li>			
		<hr>
	</div> 	
    	
@endsection

