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

		    <label><h3>Users</h3></label>
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="/admin/PasswordRetrieveEmail" class="pad-lft">Password Retrieve Email</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>This email is sent to your customers when they use the 'lost password' feature</span>
				</div>
			</div>			
			<hr>
			<label><h3>Online Shop</h3></label>
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="/admin/Invoice" class="pad-lft">Invoice</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>Invoice template sent as email to your customers when an order invoice is generated</span>
				</div>
			</div>	
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="/admin/OrderStatusChanged" class="pad-lft">Order Status Changed</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>Sent to a customer when their order status has changed</span>
				</div>
			</div>	
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="/admin/Quote" class="pad-lft">Quote</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>Quote template sent as email to your customers when an order quote is generated</span>
				</div>
			</div>	
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="/admin/GiftVoucher" class="pad-lft">Gift Voucher</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>Sent to a customer receiving a gift voucher from another customer</span>
				</div>
			</div>	
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="/admin/DropShipping" class="pad-lft">Drop Shipping</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>Sent to one or more suppliers to fulfil a customer order on behalf of your business</span>
				</div>
			</div>	
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="/admin/FirstCartRecoveryEmail" class="pad-lft">First Cart Recovery Email</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>Email template sent when a customer abandons a cart</span>
				</div>
			</div>	
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="/admin/SecondCartRecoveryEmail" class="pad-lft">Second Cart Recovery Email</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>Second email template sent when a customer abandons a cart</span>
				</div>
			</div>	

			<hr>

			<label><h3>Email Marketing</h3></label>
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="/admin/DoubleOpt" class="pad-lft">Double Opt-In Email</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>Sent to a customer asking them to verify their subscription to an email marketing list</span>
				</div>
			</div>	

			<hr>

			<label><h3>Secure Zones</h3></label>
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="/admin/SecureZoneLoginDetails" class="pad-lft">Secure Zone Login Details</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>Sent to a customer containing login details and a list of secure zones they may access</span>
				</div>
			</div>					
			<hr>

			<label><h3>Affiliates</h3></label>
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="/admin/AffiliateProgramDetails" class="pad-lft">Affiliate Program Details</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>Sent to a customer containing details of any affiliate programs they belong to</span>
				</div>
			</div>					
			<hr>

			<label><h3>Tell-a-Friend</h3></label>
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="/admin/TellFriend" class="pad-lft">Tell-a-Friend</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>Sent to one or more friends after the Tell-a-Friend feature is used with an item</span>
				</div>
			</div>					
			<hr>

			<label><h3>Forums</h3></label>
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="/admin/ForumsSubscriberAlert" class="pad-lft">Forums Subscriber Alert for New Posts</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>Sent to a subscriber of a forum topic when a new post is submitted</span>
				</div>
			</div>	
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="/admin/ForumsSubscriberAlertTopics" class="pad-lft">Forums Subscriber Alert for New Topics</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>Sent to a subscriber of a forum topic when a new topic is created</span>
				</div>
			</div>					
			<hr>

			<label><h3>CST</h3></label>
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="/admin/CustomerServiceTicketing" class="pad-lft">Customer Service Ticketing</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>Sent to a customer after a customer service representative replies to their query.</span>
				</div>
			</div>			
			<hr>

			<label><h3>Workflows</h3></label>
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="/admin/WorkflowNotification" class="pad-lft">Workflow Notification</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>Sent to all responsible users once a workflow not requiring approval has been launched</span>
				</div>
			</div>	
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="/admin/3rdPartyWorkflow" class="pad-lft">3rd Party Workflow Emails</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>Sent to 3rd parties who are registered for a workflow process</span>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="/admin/WorkflowTask" class="pad-lft">Workflow Task</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>Sent to all responsible users once a workflow requiring approval has been launched</span>
				</div>
			</div>	
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="/admin/WorkflowCompletion" class="pad-lft">Workflow Completion</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>Sent to all responsible users once a workflow has been completed</span>
				</div>
			</div>	
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="/admin/WorkflowReminder" class="pad-lft">Workflow Reminder</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>Sent to all responsible users if there is a workflow requiring approval</span>
				</div>
			</div>	
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="/admin/WorkflowEscalation" class="pad-lft">Workflow Escalation</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>Sent to all escalation users if a workflow has not been approved in time</span>
				</div>
			</div>	
			<div class="row">
				<div class="col-sm-3 col-xxs-3">
					<a href="/admin/WorkflowRejection" class="pad-lft">Workflow Rejection</a>
				</div>
				<div class="col-sm-9 col-xxs-9">
					<span>Sent to a user if their workflow has been rejected</span>
				</div>
			</div>			
			<hr>


	       	    	
    	
@endsection

