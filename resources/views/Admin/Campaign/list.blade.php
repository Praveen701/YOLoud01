@extends('layouts.admin')
@section('content')

  <div class="container-fluid px-5 align-middle">

    <h2 class="mt-2 mb-4">Campaigns</h2>
 
  

    <div class="row mt-2">
      <div class="col-sm-3">
          <div class="">
              <h6 class="text-muted text-uppercase mt-0">Total Campaigns Created</h6>
              <h2 class="" data-plugin="counterup">   {{$data->count()}}</h2></div>
      </div>
      <!-- end col -->
      <div class="col-sm-3">
          <div class="card-box tilebox-one">
              <h6 class="text-muted text-uppercase mt-0">Scheduled Campaigns</h6>
              <h2 class="" data-plugin="counterup">{{$shed->count()}}</h2></div>
      </div>
      <!-- end col -->
      <div class="col-sm-3">
          <div class="card-box tilebox-one"><i class="icon-rocket float-right text-muted"></i>
              <h6 class="text-muted text-uppercase mt-0">Ongoing Campaigns</h6>
              <h2 class="" data-plugin="counterup">{{$ongoing->count()}}</h2></div>
      </div>
      <div class="col-sm-3">
        <div class="card-box tilebox-one"><i class="icon-rocket float-right text-muted"></i>
            <h6 class="text-muted text-uppercase mt-0">Completed Campaigns</h6>
            <h2 class="" data-plugin="counterup">{{$completed->count()}}</h2></div>
    </div>
      <!-- end col -->
  </div>

    <form action="/admin/campaign" method="GET">
     <div class="row mt-4">
   <div class="col-8">
   
      <div class="row row-cols-3">
     <div class="col">

       <div class="form-group has-search">
        <div class="form-group has-search">
          <input type="text" value="{{ request()->get('name') }}" name="name"   class="form-control" placeholder="Search by Brand Name">

    </div>
     </div>

   </div>
       <div class="col">
            <div class="form-group has-search">
              <input type="text" value="{{ request()->get('id') }}" name="id"   class="form-control" placeholder="Search by Id">

        </div>
   

  

     </div>
          <div class="col">
              <div class="form-group has-search">
   
              <input type="text"  value="{{ request()->get('campaigntitle') }}" name="campaigntitle" class="form-control" placeholder="Search by Campaign Title">
            </div>

         </div>

        </div>
     </div>
 
   <div class="col-4">
       <div class="row">
   <div class="col-3">
         <button type="submit"  class="btn btn-outline-primary">Search</button>
   </div>
   <div class="col-2">
         <a href="/admin/campaign" class="btn btn-secondary">Reset</a>
   </div>
   <div class="col">

<a href="/admin/campaign/create"
     
     class="btn btn-success float-right"
    
   >
     <i class="fas fa-plus fa-fw"></i> Add Campaign
   </a>
   </div>

 </div>

     
     </div>
    </form>
 </div>


   <table  class="table mt-3 table-responsive-sm">
     <thead>
       <tr class="text-center">
        <th>Date</th>
         <th>
           Campaign ID
          
         </th>
         <th>
          Campaign Title
         
        </th>
        
 
         <th>
           Status     
         </th>
         <th>
          Brand Name     
        </th>
        <th>
          City     
        </th>
        <th>
           Email     
        </th>
        <th>
          Phone Number     
        </th>
          
            <th>Edit</th>
            <th>Action</th>
          
            
     
        
       </tr>
     </thead>
     <tbody>
      @if($data->count()>0)
        @foreach ($data as $row) 
       <tr
         class="text-center "
       >
         <td class="align-middle">
    {{$row->created_at}} 
           </td>

       

         <td class="align-middle">
           <a href="/admin/campaign/view/{{$row->id}}"> {{$row->id}}</a>
         </td>
         
         <td class="align-middle">
          {{$row->campaigntitle}}
       </td>
         <td
         class="align-middle"
     
       >

       @if($row->startdate <= date('Y-m-d') && $row->enddate >= date('Y-m-d'))
       Ongoing
         @elseif($row->startdate > date('Y-m-d'))
         Sheduled
         @elseif($row->enddate < date('Y-m-d'))
         Completed
         @else
         -
         @endif
        

         </td>
         @foreach ($row->brandlinked as $item)
           
  
         <td
         class="align-middle">
         {{$item->name}}
         </td>
         <td
         class="align-middle">
         {{$item->city}}
         </td>
         <td
         class="align-middle">
         {{$item->email}}
         </td>
         <td
         class="align-middle">
         {{$item->phonenumber}}
         </td>
         @endforeach
           <td
           class="align-middle"
       
         >
        <a href="/admin/campaign/edit/{{$row->id}}" >Edit</a>
         </td>
         <td
         class="align-middle"
     
       >
      <a class="btn btn-warning btn-sm" href="/admin/campaign/sendmail/{{$row->id}}" >Trigger Mail</a>
       </td>
      
  


  </tr>
 @endforeach
  @else
      
       <tr >
         <th colspan="10" class="text-center h5 alert alert-danger">
           Oops no data found
         </th>
       </tr>
       @endif
     </tbody>
   </table>
   <div class="d-flex justify-content-end mt-2">
    {{$data->appends(['id'=>request()->get('id')??0,'campaigntitle'=>request()->get('campaigntitle')??'','name'=>request()->get('name')??''])->links()}}
</div>
   

 </div>


@endsection