@extends('backend.layout.app')
@section('content')

    <div class="card">
        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="mb-0">All Contacts</h4>
                    </div>
                    <hr/>
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>                               
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Subject</th>                             
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contacts as $contact)
                            <tr>
                                <td>{{ $contact->id }}</td>
                                <td>{{ $contact->name }}</td>                               
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->mobile }}</td>
                                <td>{{ $contact->subject }}</td>                            
                                
                                <td>@if($contact->status == true) <span class="badge bg-success">ACTIVE</span> @else <span class="badge bg-danger">INACTIVE</span> @endif</td>
                                <td><button type="button" class="btn btn-primary m-1  radius-20" onclick='window.location.href="{{ url('contact/' . $contact->id) }}"'>Action</button></td>
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
