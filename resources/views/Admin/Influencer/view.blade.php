
@extends('layouts.admin')
@section('content')
<div class="container">

    <a href="{{ url()->previous() }}" class="btn float-right btn-outline-dark">Back</a>
    <a href="/admin/influencer/edit/{{$data->id}}" class="btn float-right btn-outline-primary"><i class="fa fa-fw  fa-pen" aria-hidden="true"></i>Edit Profile</a>

    <h3>Influencers - {{ $data->name }}</h3>
    <div class="row gutters-sm h-100 mt-3">
        <div class="col-md-4 ">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <img src="/storage/profile/{{ $data->avatar ?? 'Empty.png' }}" alt="Admin" class="rounded-circle" width="150">
                <div class="mt-3">
                  <h4>{{ $data->name }}</h4>
                  <p class="text-secondary h5 mb-1">
                    Account Status :
                    @if($data->status==0)
                     Pending   
                    @elseif($data->status==1)
                       <span style="color: green"> <b>Active</b></span>
                    @else
                      <span style="color: red"> <b>Rejected</b> </span>
                    @endif
                    </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card mt-3">
            <ul class="list-group list-group-flush">
    
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0"><i class="fab fa-instagram fa-fw fa-lg   "></i> Instagram</h6>
                <span class="text-secondary"><a href="#" data-toggle="modal" data-target="#instadel">{{ $data->instagram->iusername??'Not Eneterd' }}</a></span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0"><i class="fab fa-facebook-f fa-lg fa-fw" aria-hidden="true"></i> Facebook</h6>
                <span class="text-secondary"><a href="#" >{{ $data->facebook->fusername??'Not Eneterd' }}</a></span>
              </li>
          
            
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0"><i class="fab fa-youtube fa-lg fa-fw" aria-hidden="true"></i> Youtube</h6>
                <span class="text-secondary"><a href="#">{{ $data->youtube->yusername??'Not Eneterd' }}</a></span>
              </li>
         
            </ul>
          </div>
        </div>



        <div class="modal fade" id="instadel" tabindex="-1" role="dialog" aria-labelledby="addcat" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="addcast">{{ $data->instagram->iusername }} Instagram Details</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">

                <div class="row ">

                  <div class="col-md-8 mt-2">
                    <b>Instagram Id</b>:  {{ $data->instagram->iusername }} 
                  </div>
                  <div class="col-6 col-md-4 mt-2">
                    <b>Status</b>:  @if  ($data->instagram->iusernamestatus == 0 )
                    <span>
                       Pending
                     </span>
                     @elseif ($data->instagram->iusernamestatus == 1)
                     <span style="color: green">
                      Verified
                    </span>
                    @else 
                    <span style="color: red">
                     Rejected
                   </span>
                  @endif
                  </div>

                  <div class="col-md-8 mt-2">
                    <b>Followers</b>:  {{ $data->instagram->ifollowers }} 
                  </div>
                  <div class="col-6 col-md-4 mt-2">
                    <b>Status</b>:  @if  ($data->instagram->ifollowersstatus == 0 )
                    <span>
                       Pending
                     </span>
                     @elseif ($data->instagram->ifollowersstatus == 1)
                     <span style="color: green">
                      Verified
                    </span>
                    @else 
                    <span style="color: red">
                     Rejected
                   </span>
                  @endif
                  </div>

                  <div class="col-md-8 mt-2">
                    <b>Posts</b>:  {{ $data->instagram->iposts }} 
                  </div>
                  <div class="col-6 col-md-4 mt-2">
                    <b>Status</b>:  @if  ($data->instagram->ipostsstatus == 0 )
                    <span>
                       Pending
                     </span>
                     @elseif ($data->instagram->ipostsstatus == 1)
                     <span style="color: green">
                      Verified
                    </span>
                    @else 
                    <span style="color: red">
                     Rejected
                   </span>
                  @endif
                  </div>

                  <div class="col-md-8 mt-2">
                    <b>Average Likes</b>:  {{ $data->instagram->iavglike }} 
                  </div>
                  <div class="col-6 col-md-4 mt-2">
                    <b>Status</b>:  @if  ($data->instagram->iavglikestatus == 0 )
                    <span>
                       Pending
                     </span>
                     @elseif ($data->instagram->iavglikestatus == 1)
                     <span style="color: green">
                      Verified
                    </span>
                    @else 
                    <span style="color: red">
                     Rejected
                   </span>
                  @endif
                  </div>

                  <div class="col-md-8 mt-2">
                    <b>Average Comments</b>:  {{ $data->instagram->iavgcmt }} 
                  </div>
                  <div class="col-6 col-md-4 mt-2">
                    <b>Status</b>:  @if  ($data->instagram->iavgcmtstatus == 0 )
                    <span>
                       Pending
                     </span>
                     @elseif ($data->instagram->iavgcmtstatus == 1)
                     <span style="color: green">
                      Verified
                    </span>
                    @else 
                    <span style="color: red">
                     Rejected
                   </span>
                  @endif
                  </div>

                  <div class="col-md-8 mt-2">
                    <b>Engagement Rate</b>:  {{ $data->instagram->iengagementrate }} 
                  </div>
                
                  <div class="col-md-8 mt-2">
                    <b>Quality Score</b>:  {{ $data->instagram->iqs }} 
                  </div>
                
                  <div class="col-md-8 mt-2">
                    <b>Posts : Followers Ratio</b>:  {{ $data->instagram->ipfr }} 
                  </div>
                  <div class="col-6 col-md-4 mt-2">
                    <b>Status</b>:  @if  ($data->instagram->ipfrstatus == 0 )
                    <span>
                       Pending
                     </span>
                     @elseif ($data->instagram->ipfrstatus == 1)
                     <span style="color: green">
                      Verified
                    </span>
                    @else 
                    <span style="color: red">
                     Rejected
                   </span>
                  @endif
                  </div>

                  <div class="col-md-8 mt-2">
                    <b>Age</b>:  {{ $data->instagram->iaudienceage }} 
                  </div>
                  <div class="col-6 col-md-4 mt-2">
                    <b>Status</b>:  @if  ($data->instagram->iaudagestatus == 0 )
                    <span>
                       Pending
                     </span>
                     @elseif ($data->instagram->iaudagestatus == 1)
                     <span style="color: green">
                      Verified
                    </span>
                    @else 
                    <span style="color: red">
                     Rejected
                   </span>
                  @endif
                  </div>

                  
                  <div class="col-md-8 mt-2">
                    <b>Location</b>:  {{ $data->instagram->iaudienceloc }} 
                  </div>
                  <div class="col-6 col-md-4 mt-2">
                    <b>Status</b>:  @if  ($data->instagram->iaudlocstatus == 0 )
                    <span>
                       Pending
                     </span>
                     @elseif ($data->instagram->iaudlocstatus == 1)
                     <span style="color: green">
                      Verified
                    </span>
                    @else 
                    <span style="color: red">
                     Rejected
                   </span>
                  @endif
                  </div>

                  
                  <div class="col-md-8 mt-2">
                    <b>Gender</b>:  {{ $data->instagram->iaudiencegen }} 
                  </div>
                  <div class="col-6 col-md-4 mt-2">
                    <b>Status</b>:  @if  ($data->instagram->iaudgenestatus == 0 )
                    <span>
                       Pending
                     </span>
                     @elseif ($data->instagram->iaudgenestatus == 1)
                     <span style="color: green">
                      Verified
                    </span>
                    @else 
                    <span style="color: red">
                     Rejected
                   </span>
                  @endif
                  </div>





                </div>

                
                  
              </div>
        
              </div>
          </div>
      </div>


        <div class="col-md-8">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Full Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  {{ $data->name }}
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  {{ $data->email }}
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Phone</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                 {{  $data->influencer->phone ?? 'Not Entered' }}
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Gender</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    {{  $data->influencer->genders ?? 'Not Entered' }}
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Date of Birth</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    {{  $data->influencer->dob ?? 'Not Entered DOB' }}
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Address</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    {{  $data->influencer->city ?? 'City Not Entered' }} {{  $data->influencer->state ?? ',State Not Entered ' }} {{  $data->influencer->country ?? ', Country Not Entered ' }}
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Language</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    @if(!is_null($data->influencer->languages))
                        @php
                            $lan=json_decode($data->influencer->languages);
                        @endphp
                        {{ $lan }}
                    @else
                        Not Entered
                    @endif
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Area of Intrest</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    @if(!is_null($data->influencer->intrest))
                        @php
                            $lan=json_decode($data->influencer->intrest);
                        @endphp
                        {{ $lan }}
                    @else
                        Not Entered
                    @endif
                </div>
              </div>
              <hr>
              <div class="row align-middle justify-contents-center align-items-center">
                <div class="col-sm-3">
                  <h6 class="mb-0">Payment Details</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                        @php
                            $lan=json_decode($data->influencer->payment);
                            $lanx=json_decode($lan->value);
                        @endphp
                        @if($lan->type=='Net Banking')
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    Account Name
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    {{ $lanx->accname ? $lanx->accname : 'Not Entered' }}
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    Account Number
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    {{ $lanx->accno ? $lanx->accno : 'Not Entered' }}
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    Account IFSC
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    {{ $lanx->ifsc ? $lanx->ifsc : 'Not Entered' }}
                                </div>
                            </div>

                        @elseif($lan->type=='Google Pay')
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    Full Name
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    {{ $lanx->fullname ? $lanx->fullname :'Not Entered' }}
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    GPay Number
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    {{ $lanx->gpaynumber ? $lanx->gpaynumber : 'Not Entered' }}
                                </div>
                            </div>
                        @elseif($lan->type=='UPI')
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    Full Name
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    {{ $lanx->fullname ? $lanx->fullname :'Not Entered' }}
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    GPay Number
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    {{ $lanx->upiid ? $lanx->upiid : 'Not Entered' }}
                                </div>
                            </div>
                        @elseif($lan->type=='Paytm')
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    Full Name
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    {{ $lanx->fullname ? $lanx->fullname :'Not Entered' }}
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    Paytm Number
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    {{ $lanx->paytmnumber ? $lanx->paytmnumber : 'Not Entered' }}
                                </div>
                            </div>
                        @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
