@extends('meta-content.master-layout')

@section('custom-css')
<!-- <link rel="stylesheet" href="/css/index.css" type="text/css"/> -->
<style type="text/css">
	body{
		background-color: #e7edee !important;
	}
</style>
@endsection

@section('custom-title')
<title>Forums - Join a discussion!</title>
@endsection

@section('main')
@include('meta-content.user-dashboard-nav')

<div class="container content-container">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <h4 class="text-center"><b><i class="fa fa-comments"></i> Lots of interesting topics!</b></h4>
      <p class="text-center">Join the discussions</p>
    </div>
</div>
</div> 

<div class="container mb-5">
  <div class="row">
     <div class="col-md-3">
     	<ul class="sidebar">
     		 <li><h5><b>Browse by topics</b></h5></li>
     		 <li><h6><b><a href="#">All Topics(25)</a></b></h6></li>
             <li class="mt-3"><h6><b><a href="#">Color Sketches</a></b></h6></li>
     		 <li><a href="#">Drawing (12)</a></li>
             <li><a href="#">Painting (15)</a></li>
             <li><a href="#">Sketching (7)</a></li>
             <li class="mt-3"><h6><b><a href="#">Charcoal Arts</a></b></h6></li>
     		 <li><a href="#">Drawing (12)</a></li>
             <li><a href="#">Painting (15)</a></li>
             <li><a href="#">Sketching (7)</a></li>
             <li class="mt-3"><h5><b>Hottest posts</b></h5></li>
     		 <li><a href="#">Why painting sucks</a></li>
             <li><a href="#">How to drive</a></li>
             <li><a href="#">Pencil art</a></li>
              <li class="mt-3"><h5><b>Archives</b></h5></li>
     		 <li><a href="#">January 2017</a></li>
             <li><a href="#">February 2017</a></li>
             <li><a href="#">June 2017</a></li>
     	</ul>
     </div><!--end col md 3-->
     <div class="col-md-9">
     	<div class="card content-card forum-card">

     		<div class="row first-row mb-2">
     			<div class="col-md-4"><p class="pt-1"><b>Over 1000+</b> discussions</p></div>
     			<div class="col-md-8">
     				<form>
     					<div class="input-group">
     						<input type="text" class="form-control form-control-md" placeholder="search discussion..." name="">
     						<span class="input-group-btn"> 
     							<button type="submit" class="btn"> <i class="fa fa-search"></i> Search</button>
     						</span>
     					</div>
     				</form>
     			</div><!--end-col-md-8-->
     		</div><!--end first inner row-->

     		<!--row content-->
     		@for($i=0;$i<10;$i++)	
     		<div class="row content-row forum-content-row pt-2 pb-2 mb-4">
     		  <div class="col-md-12">
     		  	<h6><a href="#"><b><i class="fa fa-comment"></i> How to create your own sketch grid and map</b></a></h6>
     		  	<p class="description"><a href="#">Lorem Ipusm door is a funny text made up of funny descriptive content.
     		  	  Lorem Ipusm door is a funny text made up of funny descriptive content. 
     		  	  escriptive content. escriptive content. escriptive content. escriptive content.
     		  	  escriptive content. escriptive content. escriptive content. escriptive content.escriptive content. escriptive content. escriptive content. escriptive content.
     		  	  escriptive.
     		  	</a>
     		  	</p>
     		  	<p class="details">
     		  		<span class="d-inline-block mr-5"><b>By:</b> Gordon Irving</span>
     		  		<span class="d-inline-block mr-5"><b>Posted:</b> 11/09/12</span>
     		  		<span class="d-inline-block mr-5"><b>Topic:</b> Drawing</span>
     		  		<span><b>Comments:</b> 45</span>
     		  	</p>
     		  </div><!--end col-md-3-->
     		</div>
     		<!--end row content-->
     		@endfor
     		  <nav aria-label="pagination">
	          <ul class="pagination justify-content-center"">
	            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-long-arrow-left"></i> Previous</a></li>
	            <li class="page-item"><a class="page-link" href="#">1</a></li>
	            <li class="page-item"><a class="page-link" href="#">2</a></li>
	            <li class="page-item"><a class="page-link" href="#">3</a></li>
	            <li class="page-item"><a class="page-link" href="#">Next <i class="fa fa-long-arrow-right"></i></a></li>
	          </ul>
	        </nav>
     	</div><!--end content card-->
     </div><!--end-col-md-9-->
 </div><!--end row-->
</div> 
@endsection

