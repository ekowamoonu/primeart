@extends('meta-content.master-layout')

@section('custom-css')
<link rel="stylesheet" href="/css/ekko-lightbox.css" type="text/css"/>
<style type="text/css">
	body{background-color: #e7edee;}
</style>
@endsection

@section('custom-title')
<title>Gallery - primeArt.org</title>
@endsection

@section('main')
@include('meta-content.user-dashboard-nav')

<div class="container content-container mb-3">
  <div class="row">
     <div class="col-md-12">
     	<h4 class="text-center"><b>Arts Gallery</b></h4>
     </div>
 </div>
</div> 

<div class="container-fluid mb-5">
  <div class="card gallery-card">

	  	<div class="grid">
	  		<div class="grid-sizer"></div>
	  		@for($i=0;$i<5;$i++)
		    <div class="grid-item">
		    	<!--can add data title-->
		    	<a href="/images/gallery/g9.png" data-toggle="lightbox" data-gallery="arts">
		    		<div class="overlay"><p class="text-center"><i class="fa fa-plus"></i></p>
		    		</div>
		    		<img  src="/images/gallery/g9.png"/>
		    	</a>
		    </div>
		    <div class="grid-item">
		    	<a href="/images/gallery/g10.jpg" data-toggle="lightbox" data-gallery="arts">
		    		<div class="overlay"><p class="text-center"><i class="fa fa-plus"></i></p>
		    		</div>
		    		<img  src="/images/gallery/g10.jpg"/>
		    	</a>
		    </div>
		    <div class="grid-item">
		    	<a href="/images/gallery/g3.jpg" data-toggle="lightbox" data-gallery="arts"><img  src="/images/gallery/g3.jpg"/></a>
		    </div>
		    <div class="grid-item">
		    	<a href="/images/gallery/g11.jpg" data-toggle="lightbox" data-gallery="arts"><img  src="/images/gallery/g11.jpg"/></a>
		    </div>
		    <div class="grid-item">
		    	<a href="/images/gallery/g5.jpg" data-toggle="lightbox" data-gallery="arts"><img  src="/images/gallery/g5.jpg"/></a>
		    </div>
		    <div class="grid-item">
		    	<a href="/images/gallery/g6.jpg" data-toggle="lightbox" data-gallery="arts"><img  src="/images/gallery/g6.jpg"/></a>
		    </div>
		    <div class="grid-item">
		    	<a href="/images/gallery/g7.jpg" data-toggle="lightbox" data-gallery="arts"><img  src="/images/gallery/g7.jpg"/></a>
		    </div>
		    <div class="grid-item">
		    	<a href="/images/gallery/g8.png" data-toggle="lightbox" data-gallery="arts"><img  src="/images/gallery/g8.png"/></a>
		    </div>
		    <div class="grid-item">
		    	<a href="/images/gallery/g9.png" data-toggle="lightbox" data-gallery="arts"><img  src="/images/gallery/g9.png"/></a>
		    </div>
		    <div class="grid-item">
		    	<a href="/images/gallery/g10.jpg" data-toggle="lightbox" data-gallery="arts"><img  src="/images/gallery/g10.jpg"/></a>
		    </div>	
		    @endfor
	    </div><!--end grid-->	

	      <nav aria-label="pagination">
	          <ul class="pagination justify-content-center"">
	            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-long-arrow-left"></i> Previous</a></li>
	            <li class="page-item"><a class="page-link" href="#">1</a></li>
	            <li class="page-item"><a class="page-link" href="#">2</a></li>
	            <li class="page-item"><a class="page-link" href="#">3</a></li>
	            <li class="page-item"><a class="page-link" href="#">Next <i class="fa fa-long-arrow-right"></i></a></li>
	          </ul>
	        </nav> 
	</div>

</div>


@endsection

@section('custom-scripts')
<script type="text/javascript" src="/js/ekko-lightbox.min.js"></script>
<script type="text/javascript" src="/js/masonry.js"></script>
<script type="text/javascript" src="/js/imagesloaded.min.js"></script>
<script type="text/javascript">
	$(function(){

		// layout Masonry after each image loads
		var $grid = $('.grid').imagesLoaded().progress( function() {
		      $grid.masonry({
			    itemSelector: '.grid-item',
				columnWidth: '.grid-sizer',
	  			percentPosition: true
			  });
		});
	});
</script>
<script type="text/javascript">
	
	$(function(){
      
      $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });

	});
</script>
@endsection

