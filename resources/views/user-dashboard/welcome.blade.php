@extends('meta-content.master-layout')

@section('custom-css')
<!-- <link rel="stylesheet" href="/css/index.css" type="text/css"/> -->
@endsection

@section('custom-title')
<title>Welcome - primeArt.org</title>
@endsection

@section('main')
@include('meta-content.user-dashboard-nav')

<div class="container welcome-container mb-5">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <h4 class="text-center"><b>Welcome to primeArt.org, {{Auth::user()->name}}!</b></h4>
      <p class="text-center">Watch this video to get started</p>
      <div class="card">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item"  src="https://player.vimeo.com/video/248791247"  frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
<!-- <p><a href="https://vimeo.com/248791247">This is a super test video</a> from <a href="https://vimeo.com/user77848150">Prime Art</a> on <a href="https://vimeo.com">Vimeo</a>.</p> -->
        </div>
      </div>
    </div>
  </div>
</div>
</div> 
@endsection

