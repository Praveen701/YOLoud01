@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mt-3">All Campaigns</h2>

    @if (Auth::user()->profilestatus == 1)
  
      
      
        <div>
            @if (count($campaign) > 0)
                
       
        <div class="row mt-4">
         <div class="col-sm-3">
             <div class="">
                 <h6 class="text-muted text-uppercase mt-0">Campaigns  Recived</h6>
                 <h2 class="" data-plugin="counterup"> {{count($campaign)}}</h2></div>
         </div>
         <!-- end col -->
         <div class="col-sm-3">
             <div class="card-box tilebox-one">
                 <h6 class="text-muted text-uppercase mt-0">Campaigns  Applied</h6>
                 <h2 class="" data-plugin="counterup">{{count($capp)}}</h2></div>
         </div>
         <!-- end col -->
         <div class="col-sm-3">
             <div class="card-box tilebox-one"><i class="icon-rocket float-right text-muted"></i>
                 <h6 class="text-muted text-uppercase mt-0">Campaigns  Participated</h6>
             
                     <h2 class="" data-plugin="counterup" >
                {{count($cpar) + count($cpaarr) }}
                  
                 </h2>
                   
             </div>
         </div>
           <div class="col-sm-3">
             <div class="card-box tilebox-one"><i class="icon-rocket float-right text-muted"></i>
                 <h6 class="text-muted text-uppercase mt-0">Campaigns  Completed</h6>
                 <h2 class="" data-plugin="counterup" >
                {{count($ccom)}}
                 </h2>
                   
             </div>
         </div>
         <!-- end col -->
        </div>
   
        
       
        <form action="/campaign" method="get">
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
        </form>
         
         <campaign :brand="{{ json_encode($brand) }}" :campaign="{{ json_encode($campaign) }}" :user="{{ Auth::user() }}" :capp="{{ json_encode($capp) }}" :cpar="{{ json_encode($cpar) }}" :ccom="{{ json_encode($ccom) }}" :cpaarr="{{ json_encode($cpaarr) }}"></campaign>

   
          <div class="d-flex justify-content-end mt-2">
            {{$campaign->appends(['cname'=>request()->get('cname')??''])->links()}}
        </div> 

        @else


        <div class="jumbotron">
            <div class="container">
                 <h1 class="display-4">Oops !</h1>
                 <p class="lead">
            
                Currently there are no campaign opportunities matching your profile. You will receive an email whenever there is a new opportunity matching your profile. Please make sure you keep your profile updated !
                
                </p>
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
@endsection