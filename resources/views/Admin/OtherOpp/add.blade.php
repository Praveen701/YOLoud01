@extends('layouts.admin')
@section('content')
<div class="container">



 <div class="float-right">
    <a href="/admin/otheropp" class="btn btn-primary"><i class="fa fa-caret-left" aria-hidden="true"></i> Back</a>
</div>
<h3 class="mt-4 mb-3">Create Other Opportunities</h3>
    <nav aria-label="breadcrumb" class="mt-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Admin</a></li>
            <li class="breadcrumb-item"><a href="/admin/otheropp">Other Opportunities</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add</li>
        </ol>
    </nav>


<form action="/admin/otheropp/add" method="POST">
  @csrf
<div class=" mt-2 card">
  <div  class="card-body text-dark">
      <div class="row mt-2">
          <div class="col-sm-12 mt-2 col-md-6">
              <div class="form-group">
                  <label for="name">Title</label>
                  <input   type="text" value="{{old('otitle')}}" class="form-control" name="otitle" id="otitle" placeholder="Enter Title">
                  @if($errors->has('otitle'))
                      <small id="otitle" class="form-text text-danger">Enter Title</small>
                  @endif
              </div>
          </div>
       
       
        <div class="col-sm-12 mt-2 col-md-6">
            <div class="form-group">
              <label for="ocontactus" class="form-label">Contact Us URL</label>
             <input type="text" class="form-control" id="ocontactus" value="{{old('ocontactus')}}" name="ocontactus" placeholder="Enter Contact Us URL">
                @if($errors->has('ocontactus'))
                    <small id="ocontactus" class="form-text text-danger">Enter Contact Us URL</small>
                @endif
            </div>
        </div>
        <div class="col-sm-12 mt-2 col-md-6">
            <div class="form-group">

              <label for="odes" class="form-label">Description</label>
              <textarea type="text" class="form-control" value="{{old('odes')}}" name="odes" id="odes" placeholder="Only 1000 characters allowed" ></textarea>
                @if($errors->has('odes'))
                    <small id="odes" class="form-text text-danger">Enter Description</small>
                @endif
            </div>
        </div>
    



      </div>
  </div>

  <div class="card-footer">
      <input type="submit" class="float-right btn btn-primary" value="Submit">
  </div>
</div>

</form>
</div>  



</div>

@endsection