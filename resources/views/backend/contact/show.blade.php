@extends('backend.layout.app')
@section('content')

    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">{{ $data->id }}</h6>
                <hr>
                <div class="card border-top border-0 border-4 border-info">

                        <div class="card-body">
                            <div class="border p-4 rounded">
                                <div class="card-title d-flex align-items-center">
                                    <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                                    </div>
                                    <h5 class="mb-0 text-info">Contacts</h5>
                                </div>
                                <hr>
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" value="{{ $data->name }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="mobile" class="col-sm-3 col-form-label">Mobile</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Your Mobile" value="{{ $data->mobile }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter Your Email" value="{{ $data->email }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="type" class="col-sm-3 col-form-label">Type</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Type" value="{{ $data->subject }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="type" class="col-sm-3 col-form-label">Message</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" id="details" name="message">{{ $contact->message }}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="status" class="col-sm-3 col-form-label">Status</label>
                                    <div class="col-sm-9">
                                        <select class="form-select mb-3" name="status" id="status">
                                            <option value="{{ \App\Models\Contact::STATUS_ACTIVE }}" @if(\App\Models\Contact::STATUS_ACTIVE == $data->status) selected @endif>Active</option>
                                            <option value="{{ \App\Models\Contact::STATUS_INACTIVE }}" @if(\App\Models\Contact::STATUS_INACTIVE == $data->status) selected @endif>Inactive</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-12">
                                        <button class="btn btn-info px-5" onclick='window.location.href="{{url('/contacts')}}"'>Back</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>

@endsection
