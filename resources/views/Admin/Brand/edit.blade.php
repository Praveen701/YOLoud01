@extends('layouts.admin')

@section('content')

<div class="container">


{{-- <brandedit :brand="{{ json_encode($brand) }}" :campaign="{{ json_encode($campaign) }}"></brandedit> --}}





 

  
 <div class="float-right mt-2">
  <a href="/admin/brand" class="btn btn-primary"><i class="fa fa-caret-left" aria-hidden="true"></i> Back</a>
</div>
    <h1 class="mt-2 mb-2" >Edit Brand</h1>
    <div class=" mt-2 card">
        <div  class="card-body text-dark">
          <form action="/admin/brand/edit/{{ $brand->id }}" method="POST">
            @csrf
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Details</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Edit Brand </a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Settings</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-campaign" role="tab" aria-controls="pills-campaign" aria-selected="false">Campaign Created</a>
        </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">






            <div class="col-12 col-md-12 mt-2">
                <div class="row">
                  <div class="col-12 grid-margin">
                    <div class="card">
                      <div class="faq-block card-body">
                       
                          <h2 class="mb-4">Brand Details</h2>
                    

             
                        <div class="row mt-3 ">
                            <div class="col-12 col-sm-6 "><h5> <b>Name :</b> {{$brand->name}} </h5></div>
                            <div class="col-12 col-sm-6 "><h5><b>Email :</b> {{$brand->email}} </h5></div>
                            
                        </div>
                        
                        <div class="row mt-3">
                            <div class="col-12 col-sm-6 "><h5><b>Company Name : </b>{{$brand->companyname}}</h5></div>
                            <div class="col-12 col-sm-6 "><h5><b>Designation :</b> {{$brand->designation}}</h5></div>        
                        </div>
                        
                        <div class="row mt-3">
                            
                            <div class="col-12 col-sm-6 "><h5><b>Phone Number : </b>{{$brand->phonenumber}}</h5></div>
                            <div class="col-12 col-sm-6 "><h5><b>Pincode : </b>{{$brand->pincode}}</h5></div> 
                        </div>
                             
                        <div class="row mt-3">
                            <div class="col-12 col-sm-6 "><h5><b>City : </b>{{$brand->city}}</h5></div> 
                            <div class="col-12 col-sm-6 "><h5><b>State : </b>{{$brand->state}}</h5></div>
                           
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 col-sm-6 "><h5><b>Country : </b>{{$brand->country}}</h5></div> 
                            <div class="col-12 col-sm-6 "><h5><b>Offering :</b> {{$brand->offering}}</h5></div> 
                           
                            
                        </div>












                      </div>
                    </div>
                  </div>
                </div>
              </div>

        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">





        
              <div class=" mt-2 card">
                <div  class="card-body text-dark">
                    <div class="row mt-2">
                        <div class="col-sm-12 mt-2 col-md-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input   type="text" value="{{old('name')?? $brand->name}}" class="form-control" name="name" id="name" placeholder="Enter Name">
                                @if($errors->has('name'))
                                    <small id="name" class="form-text text-danger">Enter Name</small>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-12 mt-2 col-md-6">
                           <div class="form-group">
              
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" value="{{old('email')?? $brand->email}}" name="email" id="email" placeholder="Enter Email" >
                            @if($errors->has('email'))
                                <small id="email" class="form-text text-danger">Enter Email</small>
                            @endif
                          </div> 
                      </div>
                      <div class="col-sm-12 mt-2 col-md-6">
                          <div class="form-group">
                            <label for="companyname" class="form-label">Company Name</label>
                           <input type="text" class="form-control" id="companyname" value="{{old('companyname')?? $brand->companyname}}" name="companyname" placeholder="Enter Company Name">
                              @if($errors->has('companyname'))
                                  <small id="companyname" class="form-text text-danger">Enter Customer Address 1</small>
                              @endif
                          </div>
                      </div>
    
                      <div class="col-sm-12 mt-2 col-md-6">
                          <div class="form-group">
                            <label for="designation" class="form-label">Designation</label>
                              <select value="" id="designation" name="designation" class="form-control">
                                <option @if($brand->designation=='Owner') selected @endif value="Owner" selected>Owner</option>
                                <option @if($brand->designation=='Others') selected @endif value="Others" >Service</option>
              
                             </select>
                              @if($errors->has('designation'))
                                  <small id="designation" class="form-text text-danger">Select Designation</small>
                              @endif
                          </div>
                        </div>
              
                      <div class="col-sm-12 mt-2 col-md-6">
                        <div class="form-group">
                          <label for="phonenumber" class="form-label">Phone Number</label>
                          <input type="tel" class="form-control" name="phonenumber" value="{{old('phonenumber')?? $brand->phonenumber}}" id="phonenumber" placeholder="Enter Phone Number">
              
                            @if($errors->has('phonenumber'))
                                <small id="phonenumber" class="form-text text-danger">Enter Phone Number</small>
                            @endif
                        </div>
                    </div>
               
                    <div class="col-sm-12 mt-2 col-md-6">
                      <div class="form-group">
                        <label for="pincode" class="form-label">Pincode</label>
                        <input type="text" class="form-control" id="pincode" name="pincode" value="{{old('pincode')?? $brand->pincode}}" placeholder="Enter Pincode">
                          @if($errors->has('pincode'))
                              <small id="pincode" class="form-text text-danger">Enter Pincode</small>
                          @endif
                      </div>
                  </div>
                  <div class="col-sm-12 mt-2 col-md-6">
                    <div class="form-group">
                      <label for="city" class="form-label">City</label>
                      <input type="text" class="form-control" id="city" name="city" value="{{old('city')?? $brand->city}}" placeholder="Enter City">
                        @if($errors->has('city'))
                            <small id="city" class="form-text text-danger">Enter City</small>
                        @endif
                    </div>
                </div>
                 
                <div class="col-sm-12 mt-2 col-md-6">
                  <div class="form-group">
                    <label for="state" class="form-label">State</label>
                    <input type="text" class="form-control" id="state" name="state" value="{{old('state')?? $brand->state}}" placeholder="Enter State">
                      @if($errors->has('state'))
                          <small id="state" class="form-text text-danger">Enter State</small>
                      @endif
                  </div>
              </div>
                   
              <div class="col-sm-12 mt-2 col-md-6">
                <div class="form-group">
                  <label for="country" class="form-label">Country</label>
                  <input type="text" class="form-control" id="country" name="country" value="{{old('country')?? $brand->country}}" placeholder="Enter Country">
                    @if($errors->has('country'))
                        <small id="country" class="form-text text-danger">Enter Country</small>
                    @endif
                </div>
            </div>
              
              <div class="col-sm-12 mt-2 col-md-6">
              <div class="form-group">
              <label for="offering" class="form-label">Offering</label>
                <select value="" id="offering" name="offering" class="form-control">
                  <option @if($brand->offering=='Product') selected @endif value="Product">Product</option>
                  <option @if($brand->offering=='Service') selected @endif value="Service" >Service</option>
              
               </select>
                @if($errors->has('offering'))
                    <small id="offering" class="form-text text-danger">Select Offering</small>
                @endif
              </div>
              </div>
              
              
              
              
              
              
              
              
                    </div>
                </div>
              
              
              </div>
              
              </form>







        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">




              <div class=" mt-2 card">
                <div  class="card-body text-dark">
                    <div class="row mt-2">
                        <div class="col-sm-12 mt-2 col-md-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                             <h5>{{$brand->name}}</h5>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-2 col-md-6">
                            <div class="form-group">
                              <label for="companyname" class="form-label">Company Name</label>
                              <h5>{{$brand->companyname}}</h5>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-2 col-md-6">
                          <div class="form-group">
              
                            <label for="email" class="form-label">Email</label>
                            <h5>{{$brand->email}}</h5>
                          </div>
                      </div>
                      <div class="form-group col-sm-12 col-md-6 mt-2">
                        <label for="emailstatus"><b>Email Status</b></label>
                        <select
                        name="emailstatus"
                          id="emailstatus"
                          class="form-control"
                        >
                        <option @if($brand->emailstatus=='0') selected @endif value="0" selected>Pending</option>
                        <option @if($brand->emailstatus=='1') selected @endif value="1">Active</option>
                        <option @if($brand->emailstatus=='2') selected @endif value="2">Rejected</option>
                        </select>
                      </div>
                      

               
                      <div class="col-sm-12 mt-2 col-md-6">
                          <div class="form-group">
                            <label for="designation" class="form-label">Designation</label>
                            
                            <h5>{{$brand->designation}}</h5>
                          </div>
                        </div>
                        <div class="col-sm-12 mt-2 col-md-6">
                            <div class="form-group">
                            <label for="offering" class="form-label">Offering</label>
                            <h5>{{$brand->offering}}</h5>
                            </div>
                            </div>
              
                      <div class="col-sm-12 mt-2 col-md-6">
                        <div class="form-group">
                          <label for="phonenumber" class="form-label">Phone Number</label>
                          <h5>{{$brand->phonenumber}}</h5>
                        </div>
                    </div>
                    <div class="form-group col-sm-12 col-md-6 mt-2">
                        <label for=""><b>Phone Number Status</b></label>
                        <select
                         
                          id="phonestatus"
                        name="phonestatus"
                          class="form-control"
                        >
                          <option @if($brand->phonestatus=='0') selected @endif value="0" selected>Pending</option>
                          <option @if($brand->phonestatus=='1') selected @endif value="1">Active</option>
                          <option @if($brand->phonestatus=='2') selected @endif value="2">Rejected</option>
                        </select>
                      </div>
                 
                <div class="col-sm-12 mt-2 col-md-6">
                  <div class="form-group">
                    <label for="city" class="form-label">City</label>
                    <h5>{{$brand->city}}</h5>
                  </div>
              </div>
              
          
              
              
              
              
              
              
              
              
                    </div>
                </div>
              
              
              </div>
              

        </div>

        <div class="tab-pane fade" id="pills-campaign" role="tabpanel" aria-labelledby="pills-contact-tab">
          
          <div class="card">
            <div class="faq-block card-body">
             
                <h2 class="mb-4">Campaign Created</h2>
          

              @if ($campaign == null)
                  <p>No Campaign Created</p>
              @else
              @foreach ($campaign as $row)
              <div class="row mt-4">
                <div class="col-12 col-sm-6 "><h5><b>Campaign Title : </b>{{$row->campaigntitle}} </h5></div>
                <div class="col-12 col-sm-6 "><h5><b>Description :</b>{{$row->campaigndes}}  </h5></div>        
              </div>
              @endforeach

              @endif
           
          
              
            
           



            </div>
          </div>

        </div>
        <div class="">
          <input type="submit" class="float-right btn btn-primary" value="Save Changes">
      </div>
    </form>
      </div>









        </div>
    </div>  
</div>
@endsection
