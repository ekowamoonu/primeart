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
               <h5>Upload new tutorial</h5>
                @if($flash=session('message'))
                  <div class="alert alert-success">
                    <p>New tutorial uploaded!</p>
                  </div>
                @endif
               <form action="/new-tutorial" method="post">
                {{csrf_field()}}
                 <label class="col-form-label">Tutorial title</label>
                 <input type="text" placeholder="Max: 40 words" class="form-control form-control-md" required name="title">
                 <label class="col-form-label mt-2">Tutorial description</label>
                 <textarea class="form-control form-control-md" required name="description">
                 </textarea> 
                 <div class="row">
                   <div class="col-md-6">
                      <label class="col-form-label mt-2">Topic</label>
                      <select class="form-control form-control-md" name="topic">
                        <option value=""></option>
                        @foreach($topics as $topic)
                         <option value="{{$topic->id}}">{{ucfirst($topic->alias)}}</option>
                        @endforeach
                      </select>
                   </div>
                    <div class="col-md-6">
                      <label class="col-form-label mt-2">Instructor</label>
                      <select class="form-control form-control-md" name="instructor">
                        <option value=""></option>
                        @foreach($instructors as $instructor)
                         <option value="{{$instructor->id}}">{{ucfirst($instructor->name)}}</option>
                        @endforeach
                      </select>
                   </div>
                 </div><!--end inner row-->
                 <div class="row">
                   <div class="col-md-6">
                     <label class="col-form-label mt-2">Skill level</label>
                     <select class="form-control form-control-md" name="skill_level">
                       <option value=""></option>
                       @foreach($skill_levels as $skill_level)
                       <option value="{{$skill_level->id}}">{{ucfirst($skill_level->alias)}}</option>
                      @endforeach
                     </select>
                   </div>
                    <div class="col-md-6">
                      <label class="col-form-label mt-2">Tutorial URL</label>
                      <input type="text" class="form-control form-control-md" required name="source_file" placeholder="Embed src from Vimeo">
                   </div>
                 </div><!--end inner row-->
                 <label class="col-form-label">Duration</label>
                 <input type="text" placeholder="Mm Ss" class="form-control form-control-md" required name="duration">

                 <button type="submit" class="btn btn-secondary mt-4 pull-right">Upload tutorial</button>

               </form> 
             </div>
           </div>

        </div><!--end main-content-->
    </div>
</div><!--end container-fluid-->
@endsection

