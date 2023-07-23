@extends('backend.layout.app')
@section('content')

    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Create Staff</h6>
                <hr>
                <div class="card border-top border-0 border-4 border-info">
                    <form action="{{ url('admin/staff/store') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="border p-4 rounded">
                                <div class="card-title d-flex align-items-center">
                                    <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                                    </div>
                                    <h5 class="mb-0 text-info">Create Staff</h5>
                                </div>
                                <hr>
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-3 col-form-label">Enter Your Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" value="{{ old('name') }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="mobile" class="col-sm-3 col-form-label">Enter Your Mobile</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Your Mobile" value="{{ old('mobile') }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email" class="col-sm-3 col-form-label">Enter Your Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter Your Email" value="{{ old('email') }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="permission" class="col-sm-3 col-form-label">Permission</label>
                                    <div class="col-sm-9">
                                        <select class="form-select mb-3" name="permission" id="permission">
                                            <option value="{{ \App\Models\User::PERMISSION_ADMIN }}" @if(\App\Models\User::PERMISSION_ADMIN == old('permission')) selected @endif>Admin</option>
                                            <option value="{{ \App\Models\User::PERMISSION_MANAGER }}" @if(\App\Models\User::PERMISSION_MANAGER == old('permission')) selected @endif>Manager</option>
                                            <option value="{{ \App\Models\User::PERMISSION_TEACHER }}" @if(\App\Models\User::PERMISSION_TEACHER == old('permission')) selected @endif>Teacher</option>
                                            <option value="{{ \App\Models\User::PERMISSION_STUDENT }}" @if(\App\Models\User::PERMISSION_STUDENT == old('permission')) selected @endif>Student</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="status" class="col-sm-3 col-form-label">Status</label>
                                    <div class="col-sm-9">
                                        <select class="form-select mb-3" name="status" id="status">
                                            <option value="{{ \App\Models\User::STATUS_ACTIVE }}" @if(\App\Models\User::STATUS_ACTIVE == old('status')) selected @endif>Active</option>
                                            <option value="{{ \App\Models\User::STATUS_INACTIVE }}" @if(\App\Models\User::STATUS_INACTIVE == old('status')) selected @endif>Inactive</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password" class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="password" placeholder="Password">
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-info px-5">Register</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
