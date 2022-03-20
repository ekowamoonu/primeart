@extends('meta-content.master-layout')

@section('custom-css')
<!-- <link rel="stylesheet" href="/css/index.css" type="text/css"/> -->
@endsection

@section('custom-title')
<title>My Account- primeArt.org</title>
@endsection

@section('main')
@include('meta-content.user-dashboard-nav')

<div class="container content-container">
  <div class="row">

    <div class="col-md-3">
      <div class="card sidebar-card">
       <div class="nav flex-column nav-pills"  role="tablist" aria-orientation="vertical">
          <a class="nav-link active"  data-toggle="pill" href="#settings" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-gears"></i> Settings</a>
          <a class="nav-link" data-toggle="pill" href="#subscription" role="tab" aria-selected="false"><i class="fa fa-user"></i> Subscription</a>
          <a class="nav-link"  data-toggle="pill" href="#logout" role="tab" aria-selected="false"><i class="fa fa-power-off"></i> Logout</a>
       </div>
      </div><!--end sidebar card-->
    </div><!--end side nav col md-3-->

    <div class="col-md-9">
    	 <div class="tab-content">
			<div class="tab-pane fade show active" id="settings" role="tabpanel">
				Hey Kojo, we are currently working on something cool to help you update and make changes to your profile
			</div>
			<div class="tab-pane fade" id="subscription" role="tabpanel">
				..and also to help you manage your primeArt.org subscription
			</div>
			<div class="tab-pane fade" id="logout" role="tabpanel">
				<p>Are you sure you want to logout?</p>
				<p><span><a href="#" class="btn btn-primary">Yes, I will be back</a></span><span><a href="#" class="btn btn-danger ml-2">No, checkout some courses</a></span></p>
			</div>
         </div>
    </div><!--end col-md-9-->

 </div><!--end row-->
</div> 
@endsection

