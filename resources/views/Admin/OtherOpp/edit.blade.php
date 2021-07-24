@extends('layouts.admin')
@section('content')
<div class="container mt-4">
    <a href="/admin/otheropp" class="btn btn-outline-primary float-right"> <i class="fa fa-caret-left"
        aria-hidden="true"></i> Back</a>
    <h3>Other Opportunities - Edit</h3>

    <nav aria-label="breadcrumb" class="mt-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Admin</a></li>
            <li class="breadcrumb-item"><a href="/admin/otheropp">Other Opportunities</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </nav>
    <form action="/admin/otheropp/edit/{{ $opp->id }}" method="POST" enctype="multipart/form-data"> @csrf
    <div class="card">
    
        <div class="card-body">
           
                <div class="row">
                    <div class="col-sm-12 mt-3 col-md-6">
                        <div class="form-group">
                            <label for="otitle"> Title <span class="text-danger"></span></label>
                            <input type="text" class="form-control" required value="{{ old('otitle') ?? $opp->otitle }}" name="otitle" id="otitle" placeholder="Enter Title">
                            @if($errors->has('otitle'))
                                <small id="otitle" class="form-text text-danger">{{ $errors->first('otitle') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-12 mt-3 col-md-6">
                        <div class="form-group">
                            <label for="odes">Description <span class="text-danger"></span></label>
                            <input type="text" class="form-control" value="{{ old('odes') ?? $opp->odes }}" name="odes" id="odes" placeholder="Enter Description">
                            @if($errors->has('odes'))
                                <small id="odes" class="form-text text-danger">{{ $errors->first('odes') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-12 mt-3 col-md-6">
                        <div class="form-group">
                            <label for="ocontactus">Contact Us URL <span class="text-danger"></span></label>
                            <input type="text" class="form-control" value="{{ old('ocontactus') ?? $opp->ocontactus }}" name="ocontactus" id="ocontactus" placeholder="Enter Contact Us URL">
                            @if($errors->has('ocontactus'))
                                <small id="ocontactus" class="form-text text-danger">{{ $errors->first('ocontactus') }}</small>
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
@endsection
