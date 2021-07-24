@extends('layouts.app')

@section('content')


<div class="container">
                <h3 class="mt-2"> Good <span style="font-weight:900;font-size:28px">
                    @if(date('H')>=0 && date('H')<12) Morning
                        @elseif(date('H')>=12 && date('H')<15) Afternoon
                        @else Evening
                  @endif
                        </span>, {{Auth::user()->name}} !
            </h3>
      
            <hr>
            <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Pending Actions</h2>
                  <div class="row justify-content-start mt-3">
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
                   
             
                    </div>  
                </div>
              </div>
              <hr>

 
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">My Performance</h2>
    
   

    @if (count($myper) > 0)
    <div class="row justify-content-center" >
      
        <div class="col-md-3  col-sm-12 mt-2" >
            <div class="card border border-primary" style="border-radius: 20px">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h3 style="color:#fb743e" class="">{{count($brandww)}}</h3>
                            <h5>Brands Worked With</h5>
                        </div>
                        {{-- <div class="col-4">
                            <h1 style="color:#1a508b"><i class="fas fa-cubes    "></i></h1>
                        </div> --}}
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12 mt-2" >
            <div class="card border border-primary" style="border-radius: 20px">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h3 style="color:#fb743e" class=""> {{round($campper,2)}} %</h3>
                            <h5>Campaign Performance</h5>
                        </div>
                        {{-- <div class="col-4">
                            <h1 style="color:#1a508b"><i class="fas fa-box-open    "></i></h1>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
       
      
        <div class="col-md-3  col-sm-12 mt-2">
            <div class="card border border-primary" style="border-radius: 20px">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <h3 style="color:#fb743e" class=""><i class="fas fa-rupee-sign"></i> {{$earn}}</h3>
                            <h5>My Earnings</h5>
                        </div>
                        {{-- <div class="col-4">
                            <h1 style="color:#1a508b"><i class="fas fa-rupee-sign    "></i></h1>
                        </div> --}}
                    </div>

                </div>
            </div>
        </div>

      
        <div class="col-md-3 col-sm-12 mt-2" >
            <div class="card border border-primary" style="border-radius: 20px">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            @if ($rating == null)
                            <h3 style="color:#fb743e" class="">
                               0 / 5</h3>
                            @else
                            <h3 style="color:#fb743e" class="">
                                {{$rating}} / 5</h3>
                            @endif
                          
                            <h5>Average Rating</h5>
                        </div>
                        {{-- <div class="col-4">
                            <h1 style="color:#1a508b"><i class="fas fa-star"></i></h1>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

    
    </div>
    @else


            <div class="justify-content-center mt-3">
                <div class="alert alert-info" role="alert">
                    <h5>It seems you have not engaged with us much hence we do not 
                        have enough data to show your campaign performance.</h5>
                </div>
        
            </div>

    
    @endif
</div>
</div>

    

    <hr>

    <h2 class="mt-2">Other Opportunities</h2>
    @if($otheropp->count()>0)
    <div class="row mt-2" >
        @foreach ($otheropp as $row)
        <div class="col-6 col-md-4 mt-2"  >
              <div class="card">
        
                    <div class="card-body">
         
                   <h3 class="card-title ">{{$row->otitle}}</h3>
               
                  <div class="card-text" style="height: 130px">
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












     @endif

    










</div>
@endsection
