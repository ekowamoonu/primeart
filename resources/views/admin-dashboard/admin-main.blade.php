@extends('meta-content.master-layout')

@section('custom-css')
<link rel="stylesheet" href="/css/admin.css" type="text/css"/>
@endsection

@section('custom-title')
<title>Admin</title>
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
               <h5>Expired subscriptions</h5>
              <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Last Renewal</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Test</td>
                  <td>test@gmail.com</td>
                  <td>02000000000</td>
                  <td>0000/00/00</td>
                  <td>
                     <div class="dropdown">
                      <button class="btn dropdown-toggle btn-block" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Choose
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <a href="#" class="dropdown-item"><i class="fa fa-refresh"></i> Renewed</a>
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
@endsection

