@extends('meta-content.master-layout')

@section('custom-css')
<!-- <link rel="stylesheet" href="/css/index.css" type="text/css"/> -->
@endsection

@section('custom-title')
<title>Primeart (Reset Password) - Online Education For Artists</title>
@endsection

@section('main')
<!-- <div class="jumbotron custom-jumbotron mb-0 p-0 index">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="/"><img src="/images/logo.jpg" class="img-fluid"/></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-envelope"></i> support@tekloans.com</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-phone"></i> +233209058871</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/more-information"><i class="fa fa-clone"></i> How it works</a>
                  </li>
                   <li class="nav-item">
                    <a data-toggle="tooltip" data-placement="bottom" title="It's quite simple"  class="nav-link btn btn-default" href="/application-first-step"><i class="fa fa-paper-plane"></i> Apply Now</a>
                  </li>
                </ul>
          </div>
        </nav>
</div> -->

<div class="jumbotron index-jumbotron">
<div class="container-fluid form-container" id="reset-container">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <h5>Enter your signup phone number</h5>
      <div class="card">
        <form action="#" method="#">
          {{csrf_field()}}
          <label class="col-form-label">Email</label>
          <input type="text" class="form-control form-control-md">

          <label class="col-form-label">Primeart Token</label>
          <input type="text" class="form-control form-control-md">
          <button type="submit" class="btn btn-block btn-teal mt-4">
            <i class="fa fa-refresh"></i> Reset my password</button>
          <p class="text-center mt-2">Back to login? <a href="#">Right here</a></p>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
@endsection

