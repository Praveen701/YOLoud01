@extends('layouts.app')

@section('content')



<div class="container" style="margin-top: 4rem;margin-bottom: 3rem">

    
              
      
             
            <div class="card" style="border-radius: 20px;">
                <div class="card-body">
                    <h3 class="mt-2"> Good <span style="font-weight:900;font-size:28px">
                        @if(date('H')>=0 && date('H')<12) Morning
                            @elseif(date('H')>=12 && date('H')<15) Afternoon
                            @else Evening
                      @endif
                            </span>, {{Auth::user()->name}} 
                </h3>
                <h4><b style="color: grey">Account : </b> 
                    @if(Auth::user()->profilestatus == 1)
                    <b style="color: green">Approved</b>
                    @else
                    <b style="color: red">Not Approved</b>
                    @endif
                </h4>

                
                <div class="row mt-3 ">

                    <div class="col-md-3  col-sm-6 col-6">
                       

                        <a href="/campaign">
                            <span class="badge text-wrap pop popsm" style="background-color: #6aa3f9;color:white;font-size:1.1rem;
   
                            border-radius: 18px;">
                               
                                {{count($campaign)}}</span>
                         
                            <div class="card text-center" style="border-radius: 20px;background-color: #ebe8e8">

                             
                        
                                <div class="card-body">
                                    
                                   
                                  <h4 class="card-title" style="color: #7e7979"><i class="fas fa-bullhorn" style="font-size: 20px"></i></h4>
                                
                                  <h6 class="card-text cdes" style="color: #7e7979;font-size:0.80rem">New Campaign Opportunity</h6>
                                </div>
                              </div>
                           
                        </a>
                      

                    </div>
                    <div class="col-md-3 col-sm-6 col-6">

                        <a href="/otheroffers">
                            <span class="badge text-wrap not pop popsm2" style="background-color: #6aa3f9;color:white;
                        
                           
                            border-radius: 18px;
                            
                            font-size:1.1rem;
                           ">
                                {{count($otheropp)}}</span>
                            <div class="card text-center oopp" style="border-radius: 20px;background-color: #ebe8e8">
                        
                                <div class="card-body">
                                  <h4 class="card-title" style="color: #7e7979"><i class="fas fa-tag" style="font-size: 20px"></i></h4>
                                  <h6 class="card-text cdes" style="color: #7e7979;font-size:0.80rem">Other Opportunities</h6>
                                </div>
                              </div>

                        </a>
                       
                        
                    </div>

                </div>




                  {{-- <div class="row justify-content-start mt-3">
                    @if (Auth::user()->name == '' || Auth::user()->email == '' || Auth::user()->name == '' || Auth::user()->influencer->phone == ''
                    || Auth::user()->influencer->gender == '' || Auth::user()->influencer->state == '' || Auth::user()->influencer->city == ''
                     || Auth::user()->influencer->pincode == '' || Auth::user()->influencer->country == '' || Auth::user()->influencer->intrest == ''
                      || Auth::user()->influencer->occupation == ''  || Auth::user()->influencer->dob == '' 
                     || Auth::user()->influencer->payment == '' || Auth::user()->influencer->languages == '' || Auth::user()->instagram->iusername == ''
                     || Auth::user()->instagram->iaudienceage == '' || Auth::user()->instagram->iaudiencegen == '' || Auth::user()->instagram->iaudienceloc == ''
                     || Auth::user()->yftsocial->yurl == '' || Auth::user()->yftsocial->furl == '' || Auth::user()->yftsocial->tusername == '')
                       
                       <div class="col-md-2 col-sm-12 mt-2">
                             <a href="/settings" class="btn btn-primary">Complete Profile</a>
                         </div>
                    @endif
                    
               @if (Auth::user()->profilestatus == 1 && $campaign != '')
                    <div class="col-md-10 col-sm-12 mt-2">
                        <a href="/campaign" class="btn btn-primary">New Campaign Opportunity</a>
                    </div>
               @endif
                   
             
                    </div>   --}}


                </div>
              </div>
              

              <h2 class="card-title mt-3">My Performance</h2>
              <div class="card" style="border-radius: 20px">
                <div class="card-body">
              

    


     <div class="row justify-content-center" >
      
        {{-- <div class="col-md-3  col-sm-12 mt-2" >
            <div class="card border border-primary" style="border-radius: 20px">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h3 style="color:#fb743e" class="">{{count($brandww)}}</h3>
                            <h5>Brands Worked With</h5>
                        </div>
                      
                    </div>

                </div>
            </div>
        </div> --}}
        {{-- <div class="col-md-3 col-sm-12 mt-2" >
            <div class="card border border-primary" style="border-radius: 20px">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h3 style="color:#fb743e" class=""> {{round($campper,2)}} %</h3>
                            <h5>Campaign Performance</h5>
                        </div>
                        <div class="col-4">
                            <h1 style="color:#1a508b"><i class="fas fa-box-open    "></i></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
       
      

      
        <div class="col-md-6 col-6 mt-2" >
            <div class="card border " style="border-radius: 20px;background-color: #bedfdf">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                           <h3 style="color: black" class="instaii">{{count($cpar)}}</h3>
                          
                            <h4 class="myp">Campaigns
                                Participated</h4>
                        </div>
                        <div class="col-4">
                            <h1 style="color:black"><i class="fas fa-clipboard-check instai" ></i></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="col-md-6  col-6 mt-2">
            <div class="card border" style="border-radius: 20px;background-color: #b6f1e3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <h3 style="color:black" class="instaii"><i class="fas fa-rupee-sign"></i> {{$earn}}</h3>
                            <h4 class="myp">Commercials Received</h4>
                        </div>
                        <div class="col-4">
                        
                            <h1 style="color:black"><i class="fa fa-wallet instai" ></i></h1>

                        </div>
                    </div>

                </div>
            </div>
        </div>



    
    </div>


    {{-- @else


            <div class="justify-content-center mt-3">
                <div class="alert alert-info" role="alert">
                    <h5>It seems you have not engaged with us much hence we do not 
                        have enough data to show your campaign performance.</h5>
                </div>
        
            </div>

    
    @endif --}}
</div>
</div>


     <h2 class="mt-3">Social Accounts</h2>

    

      <div class="row">

          <div class="col-md-6">
              
                <div class="card mb-3" style="border-radius: 20px;">
                 
                  <div class="row">
                  <div class="col-6">
                    <i class="fab fa-instagram  ml-4 mt-2" style="font-size: 4rem;" ></i>
                  </div>
                  <div class="col-6">
                    @if (Auth::user()->instagram->iusername != null)
                   <h6 class="ml-4 mt-4 shead"><b>@ {{Auth::user()->instagram->iusername}}</b></h6>
                   
                   @else
                   <h6 class="ml-4 mt-4" style="color: black"><b>-</b></h6>
                   @endif
                  </div>
                </div>


                <div class="row">
                    <div class="col-6">
                    <h6 style="color: grey" class="ml-4 mt-4">Followers</h6>
                    </div>
                    <div class="col-6">
                     <h6 class="ml-4 mt-4" style="color: grey" ><b>{{Auth::user()->instagram->ifollowers}}</b></h6>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-6">
                    <h6 style="color: grey" class="ml-4 mt-4">Posts</h6>
                    </div>
                    <div class="col-6">
                     <h6 class="ml-4 mt-4" style="color: grey" ><b>{{Auth::user()->instagram->iposts}}</b></h6>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-6">
                    <h6 style="color: grey" class="ml-4 mt-4">Average Likes</h6>
                    </div>
                    <div class="col-6">
                     <h6 class="ml-4 mt-4" style="color: grey" ><b>{{Auth::user()->instagram->iavglike}}</b></h6>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-6">
                    <h6 style="color: grey" class="ml-4 mt-4">Average Comments</h6>
                    </div>
                    <div class="col-6">
                     <h6 class="ml-4 mt-4" style="color: grey" ><b>{{Auth::user()->instagram->iavgcmt}}</b></h6>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-6">
                    <h6 style="color: grey" class="ml-4 mt-4">Engagement Rate</h6>
                    </div>
                    <div class="col-6">
                     <h6 class="ml-4 mt-4" style="color: grey" ><b>{{Auth::user()->instagram->iengagementrate}}%</b></h6>
                    </div>
                  </div>

                  @if (Auth::user()->instagram->iusername != null)
                  <div class="row">
                    <div class="col-6">
                    <h6 style="color: grey" class="ml-4 mt-4">Last Update On</h6>
                    </div>
                    <div class="col-6">


                        
                     <h6 class="ml-4 mt-4" style="color: grey" ><b>{{Auth::user()->instagram->updated_at}}</b></h6>
                    </div>
                  </div>
                  
                  
                  
                  @endif

              

                  <div class="container ml-2 mt-3 mb-3">

                    <p style="color: grey">(Please note: Update your instagram account stats every week so 
                        that you never miss out on any opportunity matching your profile)</p>
                    
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <h6 style="color: #6aa3d8"><a href="/socialaccounts" class=""><b>Update your Instagaram Stats</b></a></h6> 

                            </div>
                        </div>

                  </div>

        





                </div>


          </div>


          <div class="col-md-6">

            <div class="card" style="border-radius: 20px;">
                <div class="container mt-2">

              
                 <div class="row">
                  <div class="col-6">
                    <i class="fab fa-facebook-square  ml-2 mt-2" style="font-size: 4rem;" ></i>
                  </div>
                  <div class="col-6">
                      @if (Auth::user()->yftsocial->furl != null)
                      <h6 class="ml-4 mt-4"><b>{{Auth::user()->yftsocial->furl}}</b></h6>
                      <h6 style="color: grey" class="mt-3 cdes"><b>(Facebook Insights will be available very soon)</b></h6>
                      @else
                      <h6 class="ml-4 mt-4" style="color: black"><b>-</b></h6>
                      @endif
               
                   
                 
                  </div>
                </div>

                <div class="mt-4 mb-3  row">
                    <div class="col-12 col-md-12">
                        <h6 style="color: #6aa3d8"><a href="/socialaccounts"><b>Update your Facebook Account Info</b></a></h6> 

                    </div>

                </div>
            

            </div>
              </div>


              <div class="card mt-4 mb-5" style="border-radius: 20px;">
                <div class="container mt-2">

              
                 <div class="row">
                  <div class="col-6">
                    <i class="fab fa-youtube  ml-2 mt-2" style="font-size: 4rem;" ></i>
                  </div>
                  <div class="col-6">
                    @if (Auth::user()->yftsocial->yurl != null)
                    <h6 class="ml-4 mt-4"><b>{{Auth::user()->yftsocial->yurl}}</b></h6>
                    <h6 style="color: grey" class="mt-3 cdes"><b>(Youtube Insights will be available very soon)</b></h6>
                    @else
                    <h6 class="ml-4 mt-4" style="color: black"><b>-</b></h6>
                    @endif
                   
                  
                  </div>
                </div>

                <div class="mt-4 mb-3  row">
                    <div class="col-12 col-md-12">
                        <h6 style="color: #6aa3d8"><a href="/socialaccounts"><b>Update your Youtube Account Info</b></a></h6> 

                    </div>

                </div>
            

            </div>
              </div>


            

          
      </div>

     


    

    {{-- <hr>

    <h2 class="mt-2">Other Opportunities</h2>
    @if($otheropp->count()>0)
    <div class="row mt-2" >
        @foreach ($otheropp as $row)
        <div class="col-6 col-md-4 mt-2"  >
              <div class="card">
        
                    <div class="card-body">
         
                   <h3 class="card-title ">{{$row->otitle}}</h3>
               
                  <div class="card-text" style="height: 270px">
                            {{$row->odes}}
                     </div>
                      </div>
                     <div class="card-footer">
                        
                          <a href="https:/{{$row->ocontactus}}" target="_blank" class="btn btn-info float-right btn-sm">Contact Us</a>
                         </div>
                  </div>
              </div>
              @endforeach
         </div>


         @else

         <div class="row justify-content-center mt-5">
            <img src="{{asset('img/empty.jpg')}}" alt="" width="280" height="250">
         </div>
         <div class="row justify-content-center">
            <h3 class="mt-4"> No New Opportunity available for you. We will be back soon.</h3>
         </div>












     @endif --}}

    










</div>




@endsection
