@extends('meta-content.master-layout')

@section('custom-css')
<!-- <link rel="stylesheet" href="/css/index.css" type="text/css"/> -->
<style type="text/css">
	body{background-color: #e7edee;}
</style>
@endsection

@section('custom-title')
<title>{{$course->title}} - primeArt.org</title>
@endsection

@section('main')
@include('meta-content.user-dashboard-nav')

<div class="container content-container mb-5">
  <div class="row">
    <div class="col-md-8">
    	<div class="video-card card">
            @if(isset($first_part))
            <h4 class="loading text-center">Loading...</h4>
    		<div class="embed-responsive embed-responsive-16by9">
              <iframe id="course-display" class="embed-responsive-item" src="{{$first_part->source_file}}" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            @else
            <div class="embed-responsive embed-responsive-16by9">
              <iframe id="course-display" class="embed-responsive-item" src="null" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            @endif
    	</div>
    	<div class="course-detail-card card">
    		<h4><b>{{$course->title}}</b></h4>
            @if(isset($first_part))
    		<h5 class="dynamic-course-part">
                <b>{{$first_part->part_name}}-{{$first_part->part_title}}</b>
            </h5>
            @else
            <h5 class="dynamic-course-part">
                <b>Course videos pending.</b>
            </h5>
            @endif
    		<p class="details">
		  		<span class="d-inline-block mr-5"><b>Instructor:</b> {{$course->owningUser->name}}</span>
		  		<span class="d-inline-block mr-5"><b>Skill Level:</b> {{$course->owningSkillLevel->alias}}</span>
		  		<span><b>Release Date:</b> {{\Carbon\Carbon::parse($course->release_date)->format('d/m/y')}}</span>
     		 </p>
     		 <p>{{$course->description}}</p>
    	</div><!--end course detail card-->
        <div class="comment-card mt-4">
            <h4><b>Contact instructor for your questions &amp; comments</b></h4>
            <p>{{$course->owningUser->phone}}</p>
        </div>
    	<!-- <div class="comment-card mt-4">
    		<h4><b>Comments</b></h4>
    		<form>
    			<textarea class="form-control form-control-md"></textarea>
    			<button class="btn btn-secondary mt-2">Leave comment</button>
    		</form>
    	</div> -->
    </div>
    <div class="col-md-4">
    	<!-- <div class="card parts-head"><h4>Course parts</h4></div> -->
    	<div class="card parts-list-card">
    		<ul>
            @if(isset($first_part))
            @foreach($course->courseParts as $course_part)
            <li><a class="course-part d-block" data-url="{{$course_part->source_file}}" href="#">{{$course_part->part_name}} - {{$course_part->part_title}}</a></li>
            @endforeach
            @else
            <li><a class="course-part" href="#"><b>Course videos pending.</b></a></li>
            @endif
    		</ul>
    	</div>
    </div>
 </div>
</div> 
@endsection

@section('custom-scripts')
<script type="text/javascript">
    $(function(){
          $("a.course-part").click(function(e){

            e.preventDefault();         
            $(".dynamic-course-part").html(($(this).html()));
            $("#course-display").attr("src",$(this).data("url"));
            $("a.course-part").removeClass("active-part");
            $(this).addClass("active-part");

          });
    });
</script>
@endsection

