<div class="jumbotron topmost-jumbotron mb-0 p-0 index">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="/"><!-- <img src="/images/logo.jpg" class="img-fluid"/> -->
            primeArt.org
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                  @if(Auth::user()->user_type=="admin")
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('admin-main')}}"><i class="fa fa-lock"></i> Back to admin</a>
                  </li>
                  @endif
                  @if(Auth::user()->user_type=="student")
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-gears"></i> My Account</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-info-circle"></i> support</a>
                  </li>
                  @endif
                   <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('logout')}}"><i class="fa fa-power-off"></i> Logout</a>
                  </li>
                </ul>
          </div>
        </nav>
</div>

<!--bottom colored nav-->
<div class="jumbotron bottom-nav-jumbotron">
  <div class="container bottom-nav-container">
    <div class="row">

        <div class="col-md-2 col-sm-2 col-xs-2">
          <a href="{{URL::to('welcome')}}">
            <h4 class="text-center"><i class="fa fa-home"></i></h4>
            <p class="text-center d-none d-md-block">Welcome to primeArt.org</p>
          </a>
        </div>  
         

        <div class="col-md-2 col-sm-2 col-xs-2">
          <a href="#"  data-toggle="modal" data-target="#welcome-modal">
            <h4 class="text-center"><i class="fa fa-th-list"></i></h4>
            <p class="text-center d-none d-md-block">Courses</p>
          </a>
        </div>   

        <div class="col-md-1 col-sm-2 col-xs-2">
          <a href="{{URL::to('tutorials')}}">
            <h4 class="text-center"><i class="fa fa-youtube-play"></i></h4>
            <p class="text-center d-none d-md-block">Tutorials</p>
          </a>
        </div> 

        <div class="col-md-2 col-sm-1 col-xs-1">
          <a href="#" data-toggle="modal" data-target="#welcome-modal">
            <h4 class="text-center"><i class="fa fa-paint-brush"></i></h4>
            <p class="text-center d-none d-md-block">Production Resources</p>
          </a>
        </div>  

        <div class="col-md-2 col-sm-1 col-xs-1">
          <a href="#" class="in-development"  data-toggle="modal" data-target="#welcome-modal">
            <h4 class="text-center"><i class="fa fa-file-image-o"></i></h4>
            <p class="text-center d-none d-md-block">Gallery</p>
          </a>
        </div> 

        <div class="col-md-1 col-sm-2 col-xs-2">
          <a href="#" class="in-development"  data-toggle="modal" data-target="#welcome-modal">
            <h4 class="text-center"><i class="fa fa-flag"></i></h4>
            <p class="text-center d-none d-md-block">Contests</p>
          </a>
        </div> 

        <div class="col-md-2 col-sm-2 col-xs-2">
          <a href="{{URL::to('forum')}}"  data-toggle="modal" data-target="#welcome-modal">
            <h4 class="text-center"><i class="fa fa-comments"></i></h4>
            <p class="text-center d-none d-md-block">Forums</p>
          </a>
        </div> 

      
     
    </div><!--end row-->
  </div><!--end bottom-nav-container-->
</div>



<!--welcome modal-->
<div class="modal fade" id="welcome-modal" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-info-circle"></i> Hey there!</h5><br>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-7">
               <img src="/images/working.gif" class="img-fluid"/>
              </div>
              <div class="col-md-5">
               <h5 class="mt-5 text-center">We are currently working around the clock to make this awesome feature available as soon as possible.</h5>
              </div>
            </div><!--end row-->
            <div class="row">
              <div class="col-md-12">
                <p class="text-center mt-3 tagline">Why don't you continue with some great tutorials?</p>
              </div>
            </div>
          </div><!--end container fluid-->
          <div class="modal-footer">
          <a href="{{URL::to('tutorials')}}" class="btn btn-dark close-modal" ><i class="fa fa-youtube-play"></i> Watch tutorials</a>
        </div><!--end modal footer-->
      </div><!--end modal body-->
    </div><!--end modal content-->
  </div><!--end modal dialog-->
</div><!--end main modal-->