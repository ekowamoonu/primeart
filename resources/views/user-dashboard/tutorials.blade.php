@extends('meta-content.master-layout')

@section('custom-css')
<!-- <link rel="stylesheet" href="/css/index.css" type="text/css"/> -->
<style type="text/css">
	body{background-color: #e7edee;}
</style>
@endsection

@section('custom-title')
<title>Tutorials - primeArt.org</title>
@endsection

@section('main')
@include('meta-content.user-dashboard-nav')

<div class="container content-container mb-3">
  <div class="row">
     <div class="col-md-12">
     	<h4 class="text-center"><b>Tutorials</b></h4>
     </div>
 </div>
</div> 

<div class="container mb-5">
  <div class="row">
     <div class="col-md-3">
     	<ul class="sidebar">
     		<li>
                <a href="{{URL::to('tutorials/sort-a-to-z')}}" class="btn btn-block">
                  <i class="fa fa-exchange"></i> Sort by title (a-z)
                </a>              
     		</li> 
     		 <li class="mt-3"><h5><b>Topics</b></h5></li>
     		 <li><h6><b>All Topics({{$topics->count()}})</b></h6></li>
             @foreach($topics as $topic)
              <li><a href="/tutorials/by-topic/{{$topic->id}}">{{$topic->alias}} ({{$topic->tutorials->count()}})</a></li>
             @endforeach
             <li class="mt-3"><h5><b>Instructors</b></h5></li>
     		 <li><h6><b>All Instructors</b></h6></li>
             @foreach($instructors as $instructor)
              <li><a href="/tutorials/by-instructor/{{$instructor->id}}">{{$instructor->name}}</a></li>
             @endforeach
             <li class="mt-3"><h5><b>Skill Level</b></h5></li>
     		 <li><h6><b>All Skill levels</b></h6></li>
             @foreach($skill_levels as $skill_level)
              <li><a href="/tutorials/by-skill-level/{{$skill_level->id}}">{{$skill_level->alias}}</a></li>
             @endforeach
     	</ul>
     </div><!--end col md 3-->
     <div class="col-md-9">
     	<div class="card content-card">

     		<div class="row first-row mb-2">
     			<div class="col-md-4"><p class="pt-1"><b>{{$tutorials->count()}}</b> video tutorials</p></div>
     			<div class="col-md-8">
     				<form action="/search-tutorial" method="get">
     					<div class="input-group">
     						<input type="text" name="search_phrase" class="form-control form-control-md" placeholder="search tutorial...">
     						<span class="input-group-btn"> 
     							<button type="submit" class="btn"> <i class="fa fa-search"></i> Search</button>
     						</span>
     					</div>
     				</form>
     			</div><!--end-col-md-8-->
     		</div><!--end first inner row-->

            @foreach($tutorials as $tutorial)
            <div class="row content-row pt-2 pb-2 mb-4">
              <div class="col-md-3">
                <a href="/tutorial-detail/{{$tutorial->id}}">
                <div class="title-image-overlay">
                    <p class="text-center">{{$tutorial->title}}</p>
                </div>
                </a>    
              </div><!--end col-md-3-->
              <div class="col-md-9">
                <a href="/tutorial-detail/{{$tutorial->id}}">
                    <h6><b>{{$tutorial->title}}</b></h6>
                    <p class="description">{{$tutorial->description}}</p>
                    <p class="details">
                        <span class="d-inline-block mr-3"><b>Instructor:</b> {{$tutorial->owningUser->name}}</span>
                        <span class="d-inline-block mr-3"><b>Skill Level:</b> {{$tutorial->owningSkillLevel->alias}}</span>
                        <span class="d-inline-block mr-3"><b>Duration:</b> {{$tutorial->duration}}</span>
                        <span><b>Release Date:</b> {{\Carbon\Carbon::parse($tutorial->release_date)->format('d/m/y')}}</span>
                    </p>
                </a>
              </div><!--end col-md-3-->
            </div>
            <!--end row content-->
            @endforeach

     		
     		<nav aria-label="pagination">
	          <ul class="pagination justify-content-center"">
                {{$tutorials->appends(Request::only('search_phrase'))->links()}}
	       <!--      <li class="page-item"><a class="page-link" href="#"><i class="fa fa-long-arrow-left"></i> Previous</a></li>
	            <li class="page-item"><a class="page-link" href="#">1</a></li>
	            <li class="page-item"><a class="page-link" href="#">2</a></li>
	            <li class="page-item"><a class="page-link" href="#">3</a></li>
	            <li class="page-item"><a class="page-link" href="#">Next <i class="fa fa-long-arrow-right"></i></a></li> -->
	          </ul>
	        </nav>
     	</div><!--end content card-->
     </div><!--end-col-md-9-->
   </div><!--end row-->

</div> 
@endsection

