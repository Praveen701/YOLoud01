@extends('layouts.admin')

@section('content')
<div class="container-fluid px-5 align-middle">
  <a href="/admin/brand/brandexport" class="btn btn-outline-dark float-right ">
    <i class="fa fa-file-export fa-fw" aria-hidden="true"></i> Export Brand
    </a>
    <h2 class="mt-2">Brands</h2>
         
     
    <div class="float-right mt-3">
      <a href="/admin/brand/add" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Add New Brand</a>
  </div>

    <form action="/admin/brand" method="GET">
     <div class="row mt-4">
   <div class="col-8">
   
      <div class="row row-cols-3">
   <div class="col">

       <div class="form-group has-search">
  
   <input type="text" value="{{ request()->get('id') }}" name="id"   class="form-control" placeholder="Search by Id">
 </div>

   </div>
   <div class="col">
            <div class="form-group has-search">
 
   <input type="text"  value="{{ request()->get('email') }}" name="email" class="form-control" placeholder="Search by Email">
 </div>

   </div>
   <div class="col">
            <div class="form-group has-search">
   
   <input type="text" value="{{ request()->get('name') }}" name="name"  class="form-control" placeholder="Search by Name">
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
         <a href="/admin/brand" class="btn btn-outline-dark ">Reset</a>
   </div>
   <div class="col">


    <button
    type="button"
    class="btn btn-primary float-right"
    data-toggle="modal"
    data-target="#importdata"
  >
    <i class="fas fa-file-import fa-fw"></i> Bulk Upload Brands
  </button>

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
         <th>Date</th>
         <th>
           Name     
         </th>
           <th>Email</th>
        
          </th>
          <th>Company Name</th>
          <th>
            Designation     
          </th>
            <th>Phone Number</th>
        
            <th>
              Offering     
            </th>
            
     
        
       </tr>
     </thead>
     <tbody>
        @if($brand->count()>0)
        @foreach ($brand as $row)
       <tr
         class="text-center align-middle"
       >
         <td class="align-middle">
           <a href="/admin/brand/edit/{{$row->id}}">  {{$row->id}}</a>
           </td>

         <td class="align-middle">
            {{$row->created_at}}
         </td>

         <td class="align-middle">
            {{$row->name}}
         </td>
         <td
         class="align-middle"
     
       >
       {{$row->email}}
       </td>
           <td
           class="align-middle"
       
         >
         {{$row->companyname}}
         </td>
         <td
         class="align-middle"
     
       >
       {{$row->designation}}
       </td>
       <td
       class="align-middle"
   
     >
     {{$row->phonenumber}}
     </td>
   
 

     <td
     class="align-middle"
 
   >
   {{$row->offering}}
   </td>


  </tr>
  @endforeach
  @else
      
       <tr >
         <th colspan="8" class="text-center h5 alert alert-danger">
           Oops no data found
         </th>
       </tr>
       @endif
     </tbody>
   </table>
   <div class="d-flex justify-content-end mt-2">
    {{$brand->appends(['name'=>request()->get('name')??'','id'=>request()->get('id')??0,'email'=>request()->get('email')??''])->links()}}
</div>


<div
class="modal fade"
id="importdata"
tabindex="-1"
role="dialog"
aria-labelledby="importdata"
aria-hidden="true"
>
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="importdata">Import Files</h5>
      <button
        type="button"
        class="close"
        data-dismiss="modal"
        aria-label="Close"
      >
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form
        action="/admin/brand/brandimport"
        method="post"
        enctype="multipart/form-data"
      >
      @csrf
        <div class="form-group col-sm-12 col-md-12">
         
          <label for="file">Upload the file</label>
          <input type="file" name="file" class="form-control" />
        </div>

        <button type="submit" class="btn btn-dark float-right">
          Import
        </button>
      </form>
    </div>
  </div>
</div>
</div>

   

 </div>
@endsection
