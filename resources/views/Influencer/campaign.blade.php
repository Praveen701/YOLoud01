@extends('layouts.app')

@section('content')
<html>
<div class="container mt-4" style="margin-bottom: 3rem">
    <p class="mt-5" style="font-size: 22px"> <b style="black">Campaigns</b> </p>

    @if (Auth::user()->profilestatus == 1)
  
    <div class="card" style="border-radius:20px">
         
        <div class="card-body">
          
          <div class="row d-flex flex-row flex-nowrap overflow-auto mt-1 mb-1">

                  
              <div class="col-md-3 col-6 mt-2">
                  <div class="card border" style="border-radius: 20px;background-color: #bedfdf">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-8">
                                  <h3 style="color:black" class=""> <b> {{count($campaign)}}</b></h3>
                                  <h4 class="ctit">Campaigns Received</h4>
                              </div>
                              <div class="col-4 mt-3">
                              
                                  <h1><i class="fa fa-chart-line instai" ></i></h1>
      
                              </div>
                          </div>
      
                      </div>
                  </div>
              </div>
              <div class="col-md-3  col-6 mt-2">
                  <div class="card border" style="border-radius: 20px;background-color: #bedfdf">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-8">
                                  <h3 style="color:black" class=""> <b>{{count($capp)}}</b> </h3>
                                  <h4 class="ctit">Campaigns
                                      Applied</h4>
                              </div>
                              <div class="col-4 mt-3">
                              
                                  <h1><i class="fa fa-chart-line instai" ></i></h1>
      
                              </div>
                          </div>
      
                      </div>
                  </div>
              </div>
              <div class="col-md-3  col-6 mt-2">
                  <div class="card border" style="border-radius: 20px;background-color: #bedfdf">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-8">
                                  <h3 style="color:black" class=""> <b>{{count($cpar)}}</b> </h3>
                                  <h4 class="ctit">Campaigns
                                      Participated</h4>
                              </div>
                              <div class="col-4 mt-3">
                              
                                  <h1><i class="fa fa-chart-line instai"></i></h1>
      
                              </div>
                          </div>
      
                      </div>
                  </div>
              </div>
              <div class="col-md-3  col-6 mt-2">
                  <div class="card border" style="border-radius: 20px;background-color: #bedfdf">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-8">
                                  <h3 style="color:black" class=""> <b>{{count($ccom)}}</b> </h3>
                                  <h4 class="ctit">Campaigns
                                      Completed
                                      </h4>
                              </div>
                              <div class="col-4 mt-3">
                              
                                  <h1><i class="fa fa-chart-line instai" ></i></h1>
      
                              </div>
                          </div>
      
                      </div>
                  </div>
              </div>

          </div>

        </div>
      </div>


      <div class="card mt-4" style="border-radius:20px">

        <div class="card-body">

            <ul class="nav nav-pills mb-1" id="pills-tab" role="tablist">
                <div class="row d-flex flex-row flex-nowrap overflow-auto scroll ">
                    <div class="col mt-2">
                        <li class="nav-item ml-4" role="presentation">
                            <a class="nav-link btn btn-outline-primary @if(request()->get('type') == 1) btn-primary active @endif"  href="/campaign/?type=1" style="border-radius: 22px;padding: 7px 41px 7px 36px;"  aria-controls="pills-home" aria-selected="true">All</a>
                          </li>
                    </div>
                    <div class="col mt-2">
                        <li class="nav-item ml-4" role="presentation">
                            <a class="nav-link btn btn-outline-primary @if(request()->get('type') == 2) btn-primary active @endif"  href="/campaign/?type=2"  style="border-radius: 22px;padding: 7px 41px 7px 36px;"  aria-controls="pills-profile" aria-selected="false">Upcoming</a>
                          </li>
                    </div>
                    <div class="col mt-2">
                        <li class="nav-item ml-4" role="presentation">
                            <a class="nav-link btn btn-outline-primary @if(request()->get('type') == 3) btn-primary active @endif"  href="/campaign/?type=3" style="border-radius: 22px;padding: 7px 41px 7px 36px;" aria-controls="pills-contact" aria-selected="false">Open</a>
                          </li>
                    </div>
                    <div class="col mt-2">
                        <li class="nav-item ml-4" role="presentation">
                            <a class="nav-link btn btn-outline-primary @if(request()->get('type') == 4) btn-primary active @endif"  href="/campaign/?type=4" style="border-radius: 22px;padding: 7px 41px 7px 36px;"  aria-controls="pills-contact" aria-selected="false">Applied</a>
                          </li>
                    </div>
                      <div class="col mt-2">
                        <li class="nav-item ml-4" role="presentation">
                            <a class="nav-link btn btn-outline-primary @if(request()->get('type') == 5) btn-primary active @endif"  href="/campaign/?type=5" style="border-radius: 22px;padding: 7px 41px 7px 36px;"  aria-controls="pills-contact" aria-selected="false">Rejected</a>
                          </li>
                    </div>
                    <div class="col mt-2">
                        <li class="nav-item ml-4" role="presentation">
                            <a class="nav-link btn btn-outline-primary @if(request()->get('type') == 6) btn-primary active @endif"  href="/campaign/?type=6" style="border-radius: 22px;padding: 7px 41px 7px 36px;"  aria-controls="pills-contact" aria-selected="false">Expired</a>
                          </li>
                    </div>

                </div>
              
           
             
             
              
              </ul>

               
{{--       
            <div class="row d-flex flex-row flex-nowrap overflow-auto">

                <div class="col mt-2 ">
                    <button type="submit" name="all" value="al" class="btn " style="border-radius: 22px;padding: 7px 41px 7px 36px;background-color:#6aa3d8;color:White">All</button>

                </div>

                <div class="col mt-2">
                    <button type="submit" name="upcoming" value="up" class="btn btn-outline-primary" style="border-radius: 22px;padding: 7px 41px 7px 36px;">Upcoming</button>
                </div>
                <div class="col mt-2">
                    <button type="submit" name="open" value="op" class="btn btn-outline-primary" style="border-radius: 22px;padding: 7px 41px 7px 36px;">Open</button>

                </div>
                <div class="col mt-2">
                    <button type="submit" name="applied" value="app" class="btn btn-outline-primary" style="border-radius: 22px;padding: 7px 41px 7px 36px;">Applied</button>

                </div>
                <div class="col mt-2">
                    <button type="submit" name="expired" value="exp" class="btn btn-outline-primary" style="border-radius: 22px;padding: 7px 41px 7px 36px;">Expired</button>

                </div>
               
            </div> --}}

      

        </div>

    </div>


      
        <div>
            @if (count($campaign) > 0)
                
       
  


       


  
        
      


   
        
       
        {{-- <form action="/campaign" method="get">
             <div class="row mt-4">
         
           <div class="col-sm-8"> 
               <div class="form-group has-search">
         
               <input type="text" value="{{ request()->get('cname') }}" name="cname" class="form-control" placeholder="Search by Campaign Title">
               </div>
           </div>
             <div class="col-sm-4">
                 <div class="col">
                   <button type="submit"  class="btn btn-primary mr-3">Search</button>
                   <a href="/campaign"   class="btn btn-secondary">Reset</a>
                 </div>
           </div>
         </div>
        </form> --}}
         
         <campaign  :campaign="{{ json_encode($campaign) }}" :user="{{ Auth::user() }}" :capp="{{ json_encode($capp) }}" :cpar="{{ json_encode($cpar) }}" :ccom="{{ json_encode($ccom) }}" ></campaign>

   
          <div class="d-flex justify-content-center mt-3">
            {{$campaign->appends(['id'=>request()->get('id')??''])->links()}}
        </div> 

        @else


       
           
               <div class="card mt-3" style="border-radius: 20px;">

                <div class="card-body">

             
                <div class="row mt-4 justify-content-center">

                        <img src="{{asset('img/nodata.png')}}" alt="" >   
               </div>

                   <div class="row mt-2 justify-content-center">
                        <h3><b>Sorry, we could not find any campaign matching your profile</b></h3>
                   </div>

                </div>

               </div>
         
       

     
        @endif
         </div>







    
         @else

                <div class="jumbotron">
                    <div class="container">
                    <h1 class="display-4">Oops !</h1>
                    <p class="lead">
                    
                        Your profile is under verification, once it is approved you will be able to receive campaign opportunities.
                        
                        </p>
                    </div>
            </div>

        
   
            @endif







     
        {{-- <campaign :brand="{{ json_encode($brand) }}" :campaign="{{ json_encode($campaign) }}" :user="{{ Auth::user() }}" :capp="{{ json_encode($capp) }}" :cpar="{{ json_encode($cpar) }}" :ccom="{{ json_encode($ccom) }}" :cpaarr="{{ json_encode($cpaarr) }}"></campaign> --}}

            {{-- :profile="{{ Auth::user() }}" :intrest="{{ json_encode($intrest) }}" --}}
</div>
</html>

<style>
    .page-item {
    color: #6c757d;
    pointer-events: none;
    cursor: auto;
    background-color: #fff;
    border-color: #dee2e6;
    margin: 0 36px 0 0;
    border-radius: 52px;
}




    </style>
@endsection