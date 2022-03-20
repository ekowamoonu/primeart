@extends('meta-content.master-layout')

@section('custom-css')
<!-- <link rel="stylesheet" href="/css/index.css" type="text/css"/> -->
<style type="text/css">
    body{background-color: #e7edee;}
</style>
@endsection

@section('custom-title')
<title>{{$tutorial->detail}} - primeArt.org</title>
@endsection

@section('main')
@include('meta-content.user-dashboard-nav')

<div class="container content-container mb-5">
  <div class="row">
    <div class="col-md-8">
        <div class="video-card card">
            <h4 class="loading text-center">Loading...</h4>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="{{$tutorial->source_file}}" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
        </div>
        <div class="course-detail-card card">
            <h4><b>{{$tutorial->title}}</b></h4>
            <p class="details">
                    <span class="d-inline-block mr-3"><b>Instructor:</b> {{$tutorial->owningUser->name}}</span>
                    <span class="d-inline-block mr-3"><b>Skill Level:</b> {{$tutorial->owningSkillLevel->alias}}</span>
                    <span class="d-inline-block mr-3"><b>Duration:</b> {{$tutorial->duration}}</span>
                    <span><b>Release Date:</b> {{\Carbon\Carbon::parse($tutorial->release_date)->format('d/m/y')}}</span>
                </p>
             <p>{{$tutorial->description}}</p>
        </div><!--end course detail card-->
        <div class="comment-card mt-4">
            <h4><b>Contact instructor for your questions &amp; comments</b></h4>
            <p>{{$tutorial->owningUser->phone}}</p>
        </div>
       <!--  <div class="comment-card mt-4">
            <h4><b>Leave your questions &amp; comments</b></h4>
            <form>
                <textarea class="form-control form-control-md"></textarea>
                <button class="btn btn-secondary mt-2">Submit</button>
            </form>
        </div> -->
    </div>
    <div class="col-md-4">
        <div class="card parts-head"><h5><b>Related Tutorials</b></h5></div>
        <div class="card related-list-card">

        @foreach($related_tutorials as $related_tutorial)
        <a href="/tutorial-detail/{{$related_tutorial->id}}">
            <div class="row related-row mb-1">
                <div class="col-md-5">
                   
                        <div class="title-image-overlay">
                            <p class="text-center">{{$related_tutorial->title}}</p>
                        </div>
                    <!-- </a>  -->
                </div>
                <div class="col-md-7">
                    <h6><b>{{$related_tutorial->title}}</b></h6>
                    <p class="mb-0">with {{$related_tutorial->owningUser->name}}</p>
                    <p class="mt-0 pt-0">({{$related_tutorial->duration}}) {{$related_tutorial->owningSkillLevel->alias}}</p>
                </div>
            </div><!--end related row-->
        </a>
        @endforeach
        
        <p class="text-center mt-1 mb-0"><a href="/tutorials/by-topic/{{$tutorial->topic_id}}" class="text-muted">see more</a></p>
        </div><!--end related list card-->
    </div><!--end col md-4-->
 </div>
</div> 
@endsection

