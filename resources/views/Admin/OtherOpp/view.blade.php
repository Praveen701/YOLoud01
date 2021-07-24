@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <a href="/admin/otheropp" class="btn btn-outline-primary float-right"> <i class="fa fa-caret-left"
                aria-hidden="true"></i> Back</a>
        <h3>Other Opportunities - View</h3>
        <nav aria-label="breadcrumb" class="mt-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Admin</a></li>
                <li class="breadcrumb-item"><a href="/admin/otheropp">Other Opportunities</a></li>
                <li class="breadcrumb-item active" aria-current="page">View</li>
            </ol>
        </nav>
        <div class="card mt-4">
            <div class="card-body">
                <div class="row ">
                  
                    <div class="col-6 mt-2 ">
                       <h5> Title - {{ $data->otitle }}</h5>
                    </div>

                    <div class="col-6 mt-2 ">
                     <h5> Description - {{ $data->odes }}</h5>  
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-6 mt-2">
                      <h5> Contact Us URL - {{ $data->ocontactus }}</h5> 
                    </div>

                    <div class="col-6 mt-2">
                       
                        @if ($data->oppstatus == 0)
                          <h5 >Status - <span style="color: green">ACTIVE</span> </h5>  
                            @else
                          <h5>Status - <span style="color: red">INACTIVE</span> </h5>  
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
