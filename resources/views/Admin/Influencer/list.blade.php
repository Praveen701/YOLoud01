@extends('layouts.admin')

@section('content')
<div class="container-fluid  align-middle">
    <a
    href="/admin/influencer/exportfiles"
    class="btn btn-outline-dark float-right"
  >
    <i class="fa fa-filter fa-fw" aria-hidden="true"></i> Export Influencers
  </a>
  <h2 class="mt-2 ml-4">Influencers</h2>

  <div class="float-right mt-2">
    <a href="/admin/influencer/add" class="btn btn-success"
      ><i class="fa fa-plus" aria-hidden="true"></i> Add New Influencer</a
    >
  </div>

  <div class="row mt-3">
    <div class="col-8">
    
    </div>

    <div class="col-4">
      <div class="row">
        <div class="col-3">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#filter">
                Filter
             </button>
        </div>
        <div class="col-2">
            <a href="/admin/influencer" class="btn btn-secondary" >
                Reset
            </a>
        </div>
        <div class="col">
          <button
            type="button"
            class="btn btn-warning float-right"
            data-toggle="modal"
            data-target="#importdata"
          >
            <i class="fas fa-file-import fa-fw"></i> Bulk Upload Influencers
          </button>
        </div>
      </div>
    </div>
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
          action="/admin/influencer/importfiles"
          method="post"
          enctype="multipart/form-data"
        >
        @csrf
          <div class="form-group-file col-sm-12 col-md-12">
            
            <label for="file">Upload the file</label>
            <input type="file" aria-describedby="fileHelpId" name="file" class="form-control" />
            <small id="myInputFileID" class="form-text text-muted">Only .csv files are allowed to upload</small>

          </div>

          <button type="submit" class="btn btn-dark float-right mt-4">
            Import
          </button>
        </form>
      </div>
    </div>
  </div>
</div>

     <div class="modal fade" id="filter" tabindex="-1" role="dialog" aria-labelledby="filter" aria-hidden="true">
         <div class="modal-dialog modal-lg" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Filter</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">
                     <form action="/admin/influencer" method="get">
                         <div class="row">
                             <div class="col-sm-12 col-md-6 mt-2">
                                 <div class="form-group">
                                     <label for="id">UID</label>
                                     <input type="text" class="form-control" value="{{request()->get('ids')}}" name="ids" id="" aria-describedby="Id"
                                         placeholder="Enter UID">
                                 </div>
                             </div>
                             <div class="col-sm-12 col-md-6 mt-2">
                                <div class="form-group">
                                    <label for="id">Sort By UID</label>
                                    <select class="form-control" name="id" id="id">
                                        <option @if(request()->get('id')==0) selected @endif value="0">No Priority</option>
                                        <option @if(request()->get('id')==2) selected @endif value="2">Ascending </option>
                                        <option @if(request()->get('id')==1) selected @endif value="1">Descending</option>
                                    </select>
                               
                                </div>
                            </div>
                             <div class="col-sm-12 col-md-6 mt-2">
                                 <div class="form-group">
                                     <label for="name">Name</label>
                                     <input type="text" class="form-control" value="{{request()->get('name')}}" name="name" id="" aria-describedby="name"
                                         placeholder="Enter Name">
                                 </div>
                             </div>
                             <div class="col-sm-12 col-md-6 mt-2">
                                 <div class="form-group">
                                     <label for="Email">Email</label>
                                     <input type="text" class="form-control" name="email" id="" value="{{request()->get('email')}}"
                                         placeholder="Enter Email">
                                 </div>
                             </div>
                             <div class="col-sm-12 col-md-6 mt-2">
                                <div class="form-group">
                                    <label for="Email">Phone Number</label>
                                    <input type="text" class="form-control" name="phone" id="" aria-describedby="phone" value="{{request()->get('phone')}}"
                                        placeholder="Enter Phone Number">
                                </div>
                            </div>
                             
                             <div class="col-sm-12 col-md-6 mt-2">
                                 <div class="form-group">
                                     <label for="type">Type</label>
                                     <select class="form-control" name="type" id="type" value="{{request()->get('type')}}">
                                         <option @if(request()->get('type')=='-1') selected @endif value="-1">Select Type</option>
                                         <option @if(request()->get('type')=='Nano') selected @endif value="Nano">Nano</option>
                                         <option @if(request()->get('type')=='Micro') selected @endif value="Micro">Micro</option>
                                         <option @if(request()->get('type')=='Macro') selected @endif value="Macro">Macro</option>
                                         <option @if(request()->get('type')=='Mega') selected @endif value="Mega">Mega</option>
                                     </select>
                                 </div>
                             </div>
                             
                             <div class="col-sm-12 col-md-6 mt-2">
                                 <div class="form-group">
                                     <label for="category">Category</label>    
                                     <select class="form-control" name="category" id="category" value="{{request()->get('category')}}">
                                         <option  value="-1">Select Category</option>
                                         @for($i=0;$i<$cat->count();$i++)
                                             <option @if(request()->get('category')==$cat[$i]) selected @endif >{{$cat[$i]}}</option>
                                         @endfor
                                     </select>
                                 </div>
                             </div>
                             
                             <div class="col-sm-12 col-md-6 mt-2">
                                 <div class="form-group">
                                     <label for="status">Status</label>
                                     <select class="form-control" name="status" id="status" value="{{request()->get('status')}}">
                                         <option @if(request()->get('status')=='-1') selected @endif value="-1">Select Status</option>
                                         <option @if(request()->get('status')=='1') selected @endif value="1">Approved</option>
                                         <option @if(request()->get('status')=='0') selected @endif value="0">Pending Approval</option>
                                         <option @if(request()->get('status')=='2') selected @endif value="2">Rejected</option>
                                     </select>
                                 </div>
                             </div>
                             <div class="col-sm-12 col-md-6 mt-2">
                                <div class="form-group">
                                    <label for="verified">Verified</label>
                                    <select class="form-control" name="verified" id="verified" value="{{request()->get('verified')}}">
                                        <option @if(request()->get('verified')=='-1') selected @endif value="-1">Select Verified</option>
                                        <option @if(request()->get('verified')=='1') selected @endif value="1">Yes</option>
                                        <option @if(request()->get('verified')=='0') selected @endif value="0">No</option>
                                    </select>
                                </div>
                            </div>
                             <div class="col-sm-12 col-md-6 mt-2">
                                 <div class="form-group">
                                     <label for="rrp">Records per Page</label>
                                     <select class="form-control" name="rpp" id="rrp">
                                         <option>20</option>
                                         <option>50</option>
                                         <option>100</option>
                                         <option>250</option>
                                         <option>500</option>
                                     </select>
                                 </div>
                             </div>
                         </div>
                         
                         <div class="d-flex flex-row-reverse">
                             <input type="submit" class="btn btn-outline-primary" value="Submit">
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 
     <influencerlist :user="{{ json_encode($user) }}"></influencerlist>
 
     <div class="d-flex mt-2 justify-content-end">
         {{$user->appends(['ids'=>request()->get('ids')??'','id'=>request()->get('id')??0,'phone'=>request()->get('phone')??'','status'=>request()->get('status')??'-1','verified'=>request()->get('verified')??'-1','type'=>request()->get('type')??'-1','name'=>request()->get('name')??'','category'=>request()->get('category')??'-1','email'=>request()->get('email')??'','rpp'=>request()->get('rpp')??20])->links()}}
     </div>
</div>
    
@endsection
