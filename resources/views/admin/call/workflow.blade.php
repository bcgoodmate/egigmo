@extends('layouts.admin')

@section('content')
	   	
        <div class="card-header"><h1>New Template (Draft)</h1></div>
		
		<div class="row">
			<div class="choose">
				<h2>Choose a workflow to apply to this item</h2>
				<form>					
					<ul>
						<li>
							<input id="p012" type="radio" name="ctl00$cp$uc$radioWorkflow" value="-1" checked="checked">
							<label for="p012"><span>Don't apply workflows to this item</span></label>
						</li>
						<li>
							<input id="p0132" type="radio" name="ctl00$cp$uc$radioWorkflow" value="-1">
							<label for="p0132"><span>Compliance workflow</span></label>
						</li>
						<li>
							<input id="p012332" type="radio" name="ctl00$cp$uc$radioWorkflow" value="-1">
							<label for="p012332"><span>Content Approval Workflow</span></label>
						</li>
						<li>
							<input id="p0212" type="radio" name="ctl00$cp$uc$radioWorkflow" value="-1">
							<label for="p0212"><span>Customer Inquiry Workflow</span></label>
						</li>
						<li>
							<input id="p01322" type="radio" name="ctl00$cp$uc$radioWorkflow" value="-1">
							<label for="p01322"><span>Customer Survey</span></label>
						</li>
						<li>
							<input id="p01321" type="radio" name="ctl00$cp$uc$radioWorkflow" value="-1">
							<label for="p01321"><span>Upload Workflow</span></label>
						</li>
					</ul>
					<div class="button-wrapper">
					    <button class="btn btn-primary btn-default btn-submit">Select</button>
					</div>
				</form>
		</div>

@endsection