@extends('meta-content.master-layout')

@section('custom-css')
<!-- <link rel="stylesheet" href="/css/index.css" type="text/css"/> -->
@endsection

@section('custom-title')
<title>primeArt (Payment) - Online Education For Artists</title>
@endsection

@section('main')
<div class="jumbotron index-jumbotron">
<div class="container-fluid form-container" id="success-container">
  <div class="row">
    <div class="col-md-5 mx-auto">
      <h5><i class="fa fa-check"></i> Subscription successful</h5>
      <div class="card">
          <p class="text-center mb-3">Good job, {{Auth::user()->name}}! You have successfully completed your registration and ready to join primeArt.org. Your subscription expires on 
            <b>{{\Carbon\Carbon::now()->addDays(31)->format("d/m/Y")}}</b></p>
          <a href="{{URL::to('welcome')}}" class="btn start-studying mt-3 d-block mx-auto">
          <i class="fa fa-thumbs-up"></i> Start studying!
          </a>

      </div><!--end card-->
    </div><!--end col-md-5-->
  </div>
</div>
</div>
@endsection

