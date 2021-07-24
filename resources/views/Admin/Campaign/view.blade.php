@extends('layouts.admin')
@section('content')

 <div>

  <div class="container-fluid px-5 align-middle">
    <div class="float-right">
      <a href="/admin/campaign" class="btn btn-primary"><i class="fa fa-caret-left" aria-hidden="true"></i> Back</a>
  </div>

    <h2 class="mt-2 mb-4">{{$data->campaigntitle}}</h2>
    @if(request()->get('type') == 1  )
    <div class="row mt-2">
      <div class="col-sm-3">
          <div class="">
              <h6 class="text-muted text-uppercase mt-0">Creators Matched</h6>
          
              <h2 class="" data-plugin="counterup">{{count($influencer)}} </h2>
         
            </div>
      </div>
      <!-- end col -->
      <div class="col-sm-3">
          <div class="card-box tilebox-one">
              <h6 class="text-muted text-uppercase mt-0">Application Received</h6>
            
              <h2 class="" data-plugin="counterup">{{count($camplist)}}  </h2>
         
            </div>
      </div>
      <!-- end col -->
      <div class="col-sm-3">
          <div class="card-box tilebox-one"><i class="icon-rocket float-right text-muted"></i>
              <h6 class="text-muted text-uppercase mt-0">Shortlist Creators</h6>
              <h2 class="" data-plugin="counterup">{{count($screator)}}</h2></div>
      </div>
      <div class="col-sm-3">
        <div class="card-box tilebox-one"><i class="icon-rocket float-right text-muted"></i>
            <h6 class="text-muted text-uppercase mt-0">Finalized Creators</h6>
            <h2 class="" data-plugin="counterup">{{count($fcreator)}}</h2></div>
    </div>
      <!-- end col -->
  </div>
  @endif

          @if(request()->get('type') == 2 || request()->get('type') == 3 )
          <div class="row mt-2">
            <!-- end col -->
            <div class="col-sm-3">
                <div class="card-box tilebox-one">
                    <h6 class="text-muted text-uppercase mt-0">Application Received</h6>
                  
                    <h2 class="" data-plugin="counterup">{{count($camplist)}}  </h2>
              
                  </div>
            </div>
            <!-- end col -->
            <div class="col-sm-3">
                <div class="card-box tilebox-one"><i class="icon-rocket float-right text-muted"></i>
                    <h6 class="text-muted text-uppercase mt-0">Shortlist Creators</h6>
                    <h2 class="" data-plugin="counterup">{{count($screator)}}</h2></div>
            </div>
            <div class="col-sm-3">
              <div class="card-box tilebox-one"><i class="icon-rocket float-right text-muted"></i>
                  <h6 class="text-muted text-uppercase mt-0">Finalized Creators</h6>
                  <h2 class="" data-plugin="counterup">{{count($fcreator)}}</h2></div>
          </div>
            <!-- end col -->
        </div>
        @endif



        @if(request()->get('type') == 4)

        <div class="row mt-2">
          <div class="col-sm-2">
              <div class="">
                  <h6 class="text-muted text-uppercase mt-0">Finalized Creator</h6>  
                  <h2 class="" data-plugin="counterup">{{count($fcreator)}} </h2>       
                </div>
          </div>
          <!-- end col -->
          <div class="col-sm-2">
              <div class="card-box tilebox-one">
                  <h6 class="text-muted text-uppercase mt-0">MOU Sent</h6>
                
                  <h2 class="" data-plugin="counterup"> {{count($mousent)}}  </h2>
             
                </div>
          </div>
          <!-- end col -->
          <div class="col-sm-2">
              <div class="card-box tilebox-one"><i class="icon-rocket float-right text-muted"></i>
                  <h6 class="text-muted text-uppercase mt-0">MOU Accepted</h6>
                  <h2 class="" data-plugin="counterup">{{count($mouacc)}}</h2></div>
          </div>
          <div class="col-sm-2">
            <div class="card-box tilebox-one"><i class="icon-rocket float-right text-muted"></i>
                <h6 class="text-muted text-uppercase mt-0">Campaign Details Sent</h6>
                <h2 class="" data-plugin="counterup">{{count($cds)}}</h2>
              </div>
        </div>
        
      <div class="col-sm-2">
        <div class="card-box tilebox-one"><i class="icon-rocket float-right text-muted"></i>
            <h6 class="text-muted text-uppercase mt-0">Content Received</h6>
            <h2 class="" data-plugin="counterup">{{count($cr)}}</h2>
          </div>
    </div>
          <div class="col-sm-2">
            <div class="card-box tilebox-one"><i class="icon-rocket float-right text-muted"></i>
                <h6 class="text-muted text-uppercase mt-0">Content Approved</h6>
                <h2 class="" data-plugin="counterup">{{count($ca)}}</h2>
              </div>
        </div>
        <div class="col-sm-2 mt-2">
          <div class="card-box tilebox-one"><i class="icon-rocket float-right text-muted"></i>
              <h6 class="text-muted text-uppercase mt-0">Content Posted</h6>
              <h2 class="" data-plugin="counterup">{{count($cp)}}</h2>
            </div>
      </div>
      <div class="col-sm-2 mt-2">
        <div class="card-box tilebox-one"><i class="icon-rocket float-right text-muted"></i>
            <h6 class="text-muted text-uppercase mt-0">Post Insights Received</h6>
            <h2 class="" data-plugin="counterup">{{count($pir)}}</h2>
          </div>
      </div>
      <div class="col-sm-2 mt-2">
        <div class="card-box tilebox-one"><i class="icon-rocket float-right text-muted"></i>
            <h6 class="text-muted text-uppercase mt-0">Commercials Disbursed</h6>
            <h2 class="" data-plugin="counterup">{{count($cd)}}</h2>
          </div>
      </div>
          <!-- end col -->
      </div>

        @endif
        @if(request()->get('type') == 5)

        <div class="row mt-2">
          <div class="col-sm-2">
              <div class="">
                  <h6 class="text-muted text-uppercase mt-0">Views</h6>  
                  <h2 class="" data-plugin="counterup">{{$camplist->sum('views')}} </h2>       
                </div>
          </div>
          <!-- end col -->
          <div class="col-sm-2">
              <div class="card-box tilebox-one">
                  <h6 class="text-muted text-uppercase mt-0">Likes</h6>
                
                  <h2 class="" data-plugin="counterup">{{$camplist->sum('likes')}}</h2>
             
                </div>
          </div>
          <!-- end col -->
          <div class="col-sm-2">
              <div class="card-box tilebox-one"><i class="icon-rocket float-right text-muted"></i>
                  <h6 class="text-muted text-uppercase mt-0">Comments</h6>
                  <h2 class="" data-plugin="counterup">{{$camplist->sum('comments')}}</h2></div>
          </div>
          <div class="col-sm-2">
            <div class="card-box tilebox-one"><i class="icon-rocket float-right text-muted"></i>
                <h6 class="text-muted text-uppercase mt-0">Save</h6>
                <h2 class="" data-plugin="counterup">{{$camplist->sum('save')}}</h2>
              </div>
        </div>
        
      <div class="col-sm-2">
        <div class="card-box tilebox-one"><i class="icon-rocket float-right text-muted"></i>
            <h6 class="text-muted text-uppercase mt-0">Share</h6>
            <h2 class="" data-plugin="counterup">{{$camplist->sum('share')}}</h2>
          </div>
    </div>
          <div class="col-sm-2">
            <div class="card-box tilebox-one"><i class="icon-rocket float-right text-muted"></i>
                <h6 class="text-muted text-uppercase mt-0">Reach</h6>
                <h2 class="" data-plugin="counterup">{{$camplist->sum('reach')}}</h2>
              </div>
        </div>
        <div class="col-sm-2 mt-2">
          <div class="card-box tilebox-one"><i class="icon-rocket float-right text-muted"></i>
              <h6 class="text-muted text-uppercase mt-0">Impressions</h6>
              <h2 class="" data-plugin="counterup">{{$camplist->sum('impressions')}}</h2>
            </div>
      </div>
      <div class="col-sm-2 mt-2">
        <div class="card-box tilebox-one"><i class="icon-rocket float-right text-muted"></i>
            <h6 class="text-muted text-uppercase mt-0">CTR</h6>
            <h2 class="" data-plugin="counterup">{{$camplist->sum('ctr')}}</h2>
          </div>
      </div>
      <div class="col-sm-2 mt-2">
        <div class="card-box tilebox-one"><i class="icon-rocket float-right text-muted"></i>
            <h6 class="text-muted text-uppercase mt-0">CPM</h6>
            {{-- <h2 class="" data-plugin="counterup">{{ number_format((float)$camplist->sum('cpm'), 0, '.', '') }}</h2> --}}
            <h2 class="" data-plugin="counterup">{{round($camplist->sum('cpm'),0)}}</h2>
          </div>
      </div>
           <div class="col-sm-2 mt-2">
        <div class="card-box tilebox-one"><i class="icon-rocket float-right text-muted"></i>
            <h6 class="text-muted text-uppercase mt-0">Eng.Rate with views</h6>
            {{-- <h2 class="" data-plugin="counterup">{{ number_format((float)$camplist->sum('cpm'), 0, '.', '') }}</h2> --}}
            <h2 class="" data-plugin="counterup">{{round($camplist->sum('engratew'),0)}}%</h2>
          </div>
      </div>
      <div class="col-sm-2 mt-2">
        <div class="card-box tilebox-one"><i class="icon-rocket float-right text-muted"></i>
            <h6 class="text-muted text-uppercase mt-0">Eng.Rate without views</h6>
            {{-- <h2 class="" data-plugin="counterup">{{ number_format((float)$camplist->sum('cpm'), 0, '.', '') }}</h2> --}}
            <h2 class="" data-plugin="counterup">{{round($camplist->sum('engratewout'),0)}}%</h2>
          </div>
      </div>
    
          <!-- end col -->
      </div>
    

        @endif


     

    <div class=" mt-4 card">
         <div  class="card-body text-dark">
   
      
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link @if(request()->get('type') == 1) active @endif"  href="/admin/campaign/view/{{$data->id}}/?type=1"  aria-controls="pills-home" aria-selected="true">Creators Matched</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link @if(request()->get('type') == 2) active @endif"  href="/admin/campaign/view/{{$data->id}}/?type=2"  aria-controls="pills-profile" aria-selected="false">Application Received </a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link @if(request()->get('type') == 3) active @endif"  href="/admin/campaign/view/{{$data->id}}/?type=3"  aria-controls="pills-contact" aria-selected="false">Shortlist Creators</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link @if(request()->get('type') == 4) active @endif"  href="/admin/campaign/view/{{$data->id}}/?type=4"  aria-controls="pills-contact" aria-selected="false">Finalized Creators</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link @if(request()->get('type') == 5) active @endif"  href="/admin/campaign/view/{{$data->id}}/?type=5"  aria-controls="pills-contact" aria-selected="false">Campaign Performance</a>
            </li>
          </ul>


          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

              @if(request()->get('type') == 1)
                <creatormatch :influencer="{{ json_encode($influencer) }}" :data="{{ json_encode($data) }}"></creatormatch>
              @elseif(request()->get('type') == 2)
                <apprec  :datax="{{ json_encode($influencer) }}" :data="{{ json_encode($data) }}"></apprec>
                @elseif(request()->get('type') == 3)
                <shortlist :datax="{{ json_encode($screator) }}" :data="{{ json_encode($data) }}"></shortlist>
                @elseif(request()->get('type') == 4)
                <finalize :datax="{{ json_encode($fcreator) }}" :data="{{ json_encode($data) }}"></finalize>
                @elseif(request()->get('type') == 5)
                <cperform :datax="{{ json_encode($fcreator) }}" :data="{{ json_encode($data) }}"></cperform>
              @endif
         

    
            </div>       

        </div>
     </div>
 </div>
 </div>


  






</div>
 

@endsection