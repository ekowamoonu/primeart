@extends('meta-content.master-layout')

@section('custom-css')
<link rel="stylesheet" href="/css/admin.css" type="text/css"/>
@endsection

@section('custom-title')
<title>Courses Management</title>
@endsection

@section('main')
@include('meta-content.admin-nav')

<div class="container-fluid">
    <div class="row">
       @include('meta-content.admin-side-nav')

         <div id="mainContent" class="col-lg-8 col-md-8">
          
          @include('meta-content.admin-quick-actions')

           <div class="row mt-4 table-row">
             <div class="col-md-12">
               <h5>Manage courses</h5>
               <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Course title</th>
                    <th>Course description</th>
                    <th>Phone</th>
                    <th>Last Renewal</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>How to create your own sketch grid and map</td>
                    <td>Learn a new way and way and way and way and way.</td>
                    <td>0209058871</td>
                    <td>2012/16/20</td>
                    <td>
                       <div class="dropdown">
                        <button class="btn dropdown-toggle btn-block" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Choose
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                          <a href="#" data-toggle="modal" data-target="#parts-management" class="dropdown-item"><i class="fa fa-plus"></i> Add parts</a>
                          <a href="#" class="dropdown-item"><i class="fa fa-remove"></i> Remove course</a>
                        </div>
                    </td>
                  </tr>
                </tbody>
               </table>
             </div>
           </div>

        </div><!--end main-content-->
    </div>
</div><!--end container-fluid-->

<!--find out more modal-->
<div class="modal fade" id="parts-management" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-smile-o"></i> Add parts to course</h5><br>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="container-fluid">
          
        <label class="col-form-label">How many parts to add?</label>
        <input type="number" class="form-control form-control-md" min="1" name="">

        <div class="parts mt-3">
          <form>
            <div class="card">
                 <div class="row">     
                   <div class="col-md-4">
                      <label class="col-form-label">Part number</label>
                      <input type="number" class="form-control form-control-md" min="1" name="">
                   </div>
                     <div class="col-md-8">
                      <label class="col-form-label">Part title</label>
                      <input type="text" class="form-control form-control-md"  name="">
                   </div>
                   <div class="col-md-12">
                     <label class="col-form-label">Video URL</label>
                     <input type="text" class="form-control form-control-md"  name="">
                   </div>
                 </div>
             </div>
             <button class="btn btn-primary mt-2"><i class="fa fa-plus-circle"></i> Add</button>
          </form>
        </div><!--end parts div-->


        <div class="modal-footer">
          <button type="button" class="btn btn-dark close-modal" data-dismiss="modal">Close</button>
        </div><!--end modal footer-->
       </div>
     </div>
    </div><!--end modal content-->
  </div><!--end modal dialog-->
</div><!--end main modal-->

@endsection

