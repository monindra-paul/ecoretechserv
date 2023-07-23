@extends('backend.layout.app')
@section('content')

    <div class="card">
        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="mb-0">All Staffs</h4>
                    </div>
                    <hr/>
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                               
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->phno }}</td>
                                <td>{{ $user->email }}</td>
                                
                                <td>@if($user->status == true) <span class="badge bg-success">ACTIVE</span> @else <span class="badge bg-danger">INACTIVE</span> @endif</td>
                                <td><button type="button" class="btn btn-primary m-1  radius-20" onclick='window.location.href="{{ url('admin/staff/' . $user->id) }}"'>Action</button></td>
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
