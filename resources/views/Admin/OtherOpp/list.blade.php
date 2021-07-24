@extends('layouts.admin')

@section('content')

<div class="container-fluid px-5 align-middle">
 

  <h2 class="mb-4">Other Opportunities</h2>

  <div class="row mt-2">
  <div class="col-sm-3">
    <div class="">
        <h6 class="text-muted text-uppercase mt-0">Total Opportunities Created</h6>
        <h2 class="" data-plugin="counterup"> {{count($otheropp)}} </h2></div>
  </div>
  <!-- end col -->
  <div class="col-sm-3">
    <div class="card-box tilebox-one">
        <h6 class="text-muted text-uppercase mt-0">Opportunities in Active</h6>
        <h2 class="" data-plugin="counterup">{{count($inact)}}</h2></div>
  </div>
  <!-- end col -->
  <div class="col-sm-3">
    <div class="card-box tilebox-one"><i class="icon-rocket float-right text-muted"></i>
        <h6 class="text-muted text-uppercase mt-0">Opportunities in Inactive</h6>
        <h2 class="" data-plugin="counterup">{{count($act)}}</h2>
        </div>
  </div>
  
  <!-- end col -->
  </div>
  
  <div class="float-right mt-2">
    <a href="/admin/otheropp/add" class="btn btn-success">
    <i class="fa fa-plus" aria-hidden="true"></i> Create New Opportunities</a>
  </div>
  
  
         
            <form action="/admin/otheropp" method="get">
              <div class="row mt-3">
               <input class="form-control mr-sm-2 col-3" type="search" name="otitle" value="{{request()->get('otitle')}}" placeholder="Search By Title" aria-label="Search">
               <input class="form-control mr-sm-2 col-3" type="search" name="ids" value="{{request()->get('ids')}}" placeholder="Search By Id" aria-label="Search">
               <button class="btn btn-outline-primary my-2 mr-4 my-sm-0" type="submit">Search</button>
                  <a href="/admin/otheropp" class="btn btn-outline-secondary my-2  my-sm-0" type="submit">Reset</a>
                </div>
          </form>
  
     
        <opplist :otheropp="{{ json_encode($otheropp) }}" :inact="{{ json_encode($inact) }}" :act="{{ json_encode($act) }}"></opplist>

        <div class="d-flex mt-2 justify-content-end">
          {{$otheropp->appends(['ids'=>request()->get('ids')??'','otitle'=>request()->get('otitle')??''])->links()}}
      </div>
        
</div>

  


{{-- 

<div class="container-fluid px-5 align-middle">

    <h2 class="mt-2">Other Opportunities</h2>
         
     
    <div class="float-right mt-3">
      <a href="/admin/otheropp/add" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Create New Opportunities</a>
  </div>

    <form action="/admin/otheropp" method="GET">
     <div class="row mt-4">
   <div class="col-8">
   
      <div class="row row-cols-3">
   <div class="col">

       <div class="form-group has-search">
  
   <input type="text" value="{{ request()->get('otitle') }}" name="id"   class="form-control" placeholder="Search by Title">
 </div>

   </div>
  


 </div>
     </div>
 
   <div class="col-4">
       <div class="row">
   <div class="col-3">
         <button type="submit"  class="btn btn-secondary">Search</button>
   </div>
   <div class="col-2">
         <a href="/admin/otheropp" class="btn btn-outline-dark ">Reset</a>
   </div>
   <div class="col">


  

   </div>


 </div>

     
     </div>
    </form>
 </div>


   <table  class="table mt-3 table-responsive-sm">
     <thead>
       <tr class="text-center">
         <th>
           Id
          
         </th>
         <th>Title</th>
         <th>
           Description     
         </th>
           <th>Status</th>
        
          </th>
          <th>Action</th>
        
            
     
        
       </tr>
     </thead>
     <tbody>
        @if($otheropp->count()>0)
        @foreach ($otheropp as $row)
       <tr
         class="text-center align-middle"
       >
         <td class="align-middle">
           <a href="/admin/otheropp/edit/{{$row->id}}">  {{$row->id}}</a>
           </td>

         <td class="align-middle">
            {{$row->otitle}}
         </td>

         <td class="align-middle">
            {{$row->odes}}
         </td>
         <td
         class="align-middle"
     
       >
       {{$row->oppstatus}}
       </td>
           <td
           class="align-middle"
       
         >
         Delete
         </td>
        
     


  </tr>
  @endforeach
  @else
      
       <tr >
         <th colspan="4" class="text-center h5 alert alert-danger">
           Oops no data found
         </th>
       </tr>
       @endif
     </tbody>
   </table>



   

 </div> --}}
@endsection