@extends('meta-content.master-layout')

@section('custom-css')
<!-- <link rel="stylesheet" href="/css/index.css" type="text/css"/> -->
@endsection

@section('custom-title')
<title>primeArt (Please Sign In) - Online Education For Artists</title>
@endsection

@section('main')

<div class="jumbotron index-jumbotron">
<div class="container-fluid form-container" id="login-container">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <h5>Sign in to primeArt</h5>
      <div class="card">
        @if($flash=session('message'))
          <div class="alert alert-danger">
            <p>Illegal login attempt!</p>
          </div>
        @endif
        <form action="/login" method="post">
          {{csrf_field()}}
          <label class="col-form-label">Phone No. (with country code) or Email</label>
          <input type="text" name="username" class="form-control form-control-md">
          <label class="col-form-label mt-2">Password</label>
          <input type="password" name="password" class="form-control form-control-md">
          <button type="submit" class="btn btn-block btn-teal mt-3">
            <i class="fa fa-unlock-alt"></i> Sign in</button>
          <!-- <p class="mt-3 text-center"><a href="#">Forgot your password?</a></p> -->
          <p class="text-center mt-3">New to Primeart? <a href="{{URL::to('register')}}">Start here</a></p>
        </form>
      </div>
    </div>
  </div>
</div>
</div>



<!--welcome modal-->
<div class="modal fade" id="welcome-modal" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-info-circle"></i> New to primeArt?</h5><br>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-7">
               <img src="/images/welcome.jpg" class="img-fluid"/>
              </div>
              <div class="col-md-5">
               <h5 class="start-here-header"><a href="{{URL::to('register')}}" class="btn start-here d-inline-block btn-block">Start here!</a></h5>
              </div>
            </div><!--end row-->
            <div class="row">
              <div class="col-md-12">
                <p class="text-center mt-3 tagline">The world's leading online art educational platform.</p>
              </div>
            </div>
          </div><!--end container fluid-->
        </div><!--end modal footer-->
      </div><!--end modal body-->
    </div><!--end modal content-->
  </div><!--end modal dialog-->
</div><!--end main modal-->
@endsection


@section('custom-scripts')
<script type="text/javascript" src="/js/jquery.cookie.js"></script>
<script type="text/javascript">
  $(function(){
      if($.cookie('welkies')==null){
               $("#welcome-modal").delay(1000).modal("show");
                $.cookie('welkies','1',{expires:100});
      }

  });
</script>
@endsection

