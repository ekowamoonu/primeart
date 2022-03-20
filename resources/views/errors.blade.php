@extends('meta-content.master-layout')

@section('custom-css')
<!-- <link rel="stylesheet" href="/css/index.css" type="text/css"/> -->
@endsection

@section('custom-title')
<title>primeArt (Transaction Errors)</title>
@endsection

@section('main')
<div class="jumbotron index-jumbotron">
<div class="container-fluid form-container" id="errors-container">
  <div class="row">
    <div class="col-md-5 mx-auto">
      <h5><i class="fa fa-info-circle"></i> Yikes! Something snapped</h5>
      <div class="card">
          <p class="text-left mb-3">Luckily, we have identified some possible causes:</p>
          <ul>
            <li>Insufficient funds in your mobile money wallet.</li>
            <li>Mobile number is not registered for payments.</li>
            <li>Your wallet service provider is temporary down.</li>
            <li>You did not confirm the transaction from your phone.</li>
            <li>A simple network glitch.</li>
          </ul>
          <p class="text-center" style="background-color:#eee;">Let's show them artists don't give up, shall we?</p>
          <a href="{{URL::to('payment')}}"  style="background-color:#1E824C;" class="btn start-studying mt-3 d-block mx-auto">
          <i class="fa fa-refresh"></i> Yes, let's try again
          </a>

      </div><!--end card-->
    </div><!--end col-md-5-->
  </div>
</div>
</div>
@endsection

