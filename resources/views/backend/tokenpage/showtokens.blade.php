@extends('backend.layout.app')
@section('content')

    <div class="card">
        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="mb-0">All Tokens</h4>
                    </div>
                    <hr/>
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Warrenty Info</th>
                                <th>Name</th>                               
                                <th>Email</th>
                                <th>Product Name</th>
                                <th>Issue</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($showtokens as $showtoken)
                            <tr>
                                <td>{{ $showtoken->id }}</td>
                                <td>{{ $showtoken->warranty_info }}</td>
                                <td>{{ $showtoken->name }}</td>                               
                                <td>{{ $showtoken->email }}</td>
                                <td>{{ $showtoken->product_name }}</td>
                                <td>{{ $showtoken->issue }}</td>                                
                                <td>@if($showtoken->status == true) <span class="badge bg-success">ACTIVE</span> @else <span class="badge bg-danger">INACTIVE</span> @endif</td>
                                <td><button type="button" class="btn btn-primary m-1  radius-20" onclick = 'window.location.href = "{{url('admintokens/edit/' . $showtoken->id)}}"'>Edit</button></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

