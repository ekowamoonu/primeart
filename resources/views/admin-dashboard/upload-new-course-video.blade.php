@extends('meta-content.master-layout')

@section('custom-css')
<link rel="stylesheet" href="/css/admin.css" type="text/css"/>
@endsection

@section('custom-title')
<title>Upload new course video</title>
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
               <h5>Upload new course video</h5>
               <form>
                 <label class="col-form-label">Course title</label>
                 <input type="text" class="form-control form-control-md" required name="">
                 <label class="col-form-label mt-2">Course description</label>
                 <textarea class="form-control form-control-md" required name="">
                 </textarea> 
                 <label class="col-form-label mt-2">Topic</label>
                 <select class="form-control form-control-md"></select>
                 <div class="row">
                   <div class="col-md-6">
                         <label class="col-form-label mt-2">Instructor</label>
                         <select class="form-control form-control-md"></select>
                   </div>
                    <div class="col-md-6">
                         <label class="col-form-label mt-2">Skill level</label>
                         <select class="form-control form-control-md"></select>
                   </div>
                 </div><!--end inner row-->
                 <button type="submit" class="btn btn-secondary mt-4 pull-right">Add new course</button>
               </form> 
             </div>
           </div>

        </div><!--end main-content-->
    </div>
</div><!--end container-fluid-->
@endsection

