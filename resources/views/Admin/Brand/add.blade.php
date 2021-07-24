
@extends('layouts.admin')
@section('content')
<div class="container">

{{-- <brandadd></brandadd> --}}
  {{-- <div class="col-sm-12 mt-2 col-md-6">
            <brandadd></brandadd> 
          </div> --}}

 <div class="float-right">
    <a href="/admin/brand" class="btn btn-primary"><i class="fa fa-caret-left" aria-hidden="true"></i> Back</a>
</div>
<h3 class="mt-4 mb-3">Add Brand</h3>
    <nav aria-label="breadcrumb" class="mt-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Admin</a></li>
            <li class="breadcrumb-item"><a href="/vendors">Brand</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add</li>
        </ol>
    </nav>


<form action="/admin/brand/add" method="POST" enctype="multipart/form-data">
  @csrf
<div class=" mt-2 card">
  <div  class="card-body text-dark">
      <div class="row mt-2">
          <div class="col-sm-12 mt-2 col-md-6">
              <div class="form-group">
                  <label for="name">Brand Name</label>
                  <input   type="text" value="{{old('name')}}" class="form-control" name="name" id="name" placeholder="Enter Name">
                  @if($errors->has('name'))
                      <small id="name" class="form-text text-danger">Enter Brand Name</small>
                  @endif
              </div>
          </div>
          <div class="col-sm-12 mt-2 col-md-6">
            <div class="form-group">

              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" value="{{old('email')}}" name="email" id="email" placeholder="Enter Email" >
                @if($errors->has('email'))
                    <small id="email" class="form-text text-danger">Enter Email</small>
                @endif
            </div>
        </div>
       
        <div class="col-sm-12 mt-2 col-md-6">
            <div class="form-group">
              <label for="companyname" class="form-label">Company Name</label>
             <input type="text" class="form-control" id="companyname" value="{{old('companyname')}}" name="companyname" placeholder="Enter Company Name">
                @if($errors->has('companyname'))
                    <small id="companyname" class="form-text text-danger">Enter Customer Address 1</small>
                @endif
            </div>
        </div>
        <div class="col-sm-12 mt-2 col-md-6">
          <div class="form-group">
            <label for="brandphoto" class="form-label">Brand Photo</label>
            <input required type="file" class="form-control-file" name="brandphoto" placeholder="" aria-describedby="fileHelpId">
            <small id="fileHelpId" class="form-text text-muted">Select a File of Png,Svg,Jpg with a size limit  of 7mb</small>

              @if($errors->has('brandphoto'))
                  <small id="brandphoto" class="form-text text-danger">Select Brand Photo</small>
              @endif
          </div>
        </div>
        <div class="col-sm-12 mt-2 col-md-6">
            <div class="form-group">
              <label for="designation" class="form-label">Designation</label>
                <select value="" id="designation" name="designation" class="form-control">
                  <option @if(old('designation')=='Owner') selected @endif value="Owner" selected>Owner</option>
                  <option @if(old('designation')=='Others') selected @endif value="Others" >Others</option>

               </select>
                @if($errors->has('designation'))
                    <small id="designation" class="form-text text-danger">Select Designation</small>
                @endif
            </div>
          </div>
     

        <div class="col-sm-12 mt-2 col-md-6">
          <div class="form-group">
            <label for="phonenumber" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" name="phonenumber" value="{{old('phonenumber')}}" id="phonenumber" placeholder="Enter Phone Number">

              @if($errors->has('phonenumber'))
                  <small id="phonenumber" class="form-text text-danger">Enter Phone Number</small>
              @endif
          </div>
      </div>
            
                <div class="col-sm-12 mt-2 col-md-6">
                  <div class="form-group">
                      <label for="name">Pincode</label>
                      <input   type="text" value="{{old('pincode')}}" class="form-control" name="pincode" id="pincode" placeholder="Enter Pincode">
                      @if($errors->has('pincode'))
                          <small id="pincode" class="form-text text-danger">Enter Pincode</small>
                      @endif
                  </div>
              </div>
              <div class="col-sm-12 mt-2 col-md-6">
                <div class="form-group">
                    <label for="name">City</label>
                    <input   type="text" value="{{old('city')}}" class="form-control" name="city" id="city" placeholder="Enter City">
                    @if($errors->has('city'))
                        <small id="city" class="form-text text-danger">Enter City</small>
                    @endif
                </div>
            </div>
            <div class="col-sm-12 mt-2 col-md-6">
              <div class="form-group">
                  <label for="name">State</label>
                  <input   type="text" value="{{old('state')}}" class="form-control" name="state" id="state" placeholder="Enter State">
                  @if($errors->has('state'))
                      <small id="state" class="form-text text-danger">Enter State</small>
                  @endif
              </div>
          </div>
          <div class="col-sm-12 mt-2 col-md-6">
            <div class="form-group">
                <label for="name">Country</label>

                <select name="country" id="country" class="form-control">
                  <option value="Afganistan">Afghanistan</option>
                  <option selected>India</option>
                  <option value="Myanmar">Myanmar</option>
                  <option value="Pakistan">Pakistan</option>
                  <option value="Qatar">Qatar</option>
                  <option value="Saudi Arabia">Saudi Arabia</option>
                  <option value="Singapore">Singapore</option>
                  <option value="Sri Lanka">Sri Lanka</option>
                  <option value="United Kingdom">United Kingdom</option>
                  <option value="United Arab Erimates">
                    United Arab Emirates
                  </option>
                  <option value="United States of America">
                    United States of America
                  </option>
                </select>             
                   @if($errors->has('country'))
                    <small id="country" class="form-text text-danger">Enter Country</small>
                @endif
            </div>
        </div>

           
  

            <div class="col-sm-12 mt-2 col-md-6">
                    <div class="form-group">
                    <label for="offering" class="form-label">Offering</label>
                      <select value="" id="offering" name="offering" class="form-control">
                        <option @if(old('offering')=='Product') selected @endif value="Product" selected>Product</option>
                        <option @if(old('offering')=='Service') selected @endif value="Service" >Service</option>

                    </select>
                      @if($errors->has('offering'))
                          <small id="offering" class="form-text text-danger">Select Offering</small>
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