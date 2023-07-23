@extends('backend.layout.app')
@section('content')

<div class="page-content-wrapper">
    <div class="page-content">
        <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Creat Token</h6>
            <hr>
            <div class="card border-top border-0 border-4 border-info">
                <div class="card-body">
                    <div class="border p-4 rounded">
                        <div class="card-title d-flex align-items-center">
                            <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                            </div>
                            <h5 class="mb-0 text-info">Tokens</h5>
                        </div>
                        <hr>

                        <form action="{{url('/admintokens')}}" method="post">
                            @csrf

                            @if ($errors->has('warranty_info'))
                                <span class="text-danger">{{ $errors->first('warranty_info') }}</span>
                                @endif
                            <div class="row mb-3">
                                <label for="warranty_info" class="col-sm-3 col-form-label" id="warranty_info">Select
                                    Service Type
                                </label>                               
                                <div class="col-sm-9">
                                    <select class="form-select mb-3" aria-label="Default select example"
                                        name="warranty_info">
                                        <option selected="">Select Service Type</option>
                                        <option value="In Warranty">In Warranty</option>
                                        <option value="Out of Warranty">Out of Warranty</option>
                                    </select>
                                </div>
                            </div>

                            @if ($errors->has('warranty_info'))
                            <span class="text-danger">{{ $errors->first('warranty_info') }}</span>
                            @endif
                            <div class="row mb-3">
                                <label for="name" class="col-sm-3 col-form-label">Enter Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" placeholder="Enter Name"
                                        name="name">
                                </div>
                            </div>

                            @if ($errors->has('mobile'))
                                <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                @endif
                            <div class="row mb-3">
                                <label for="mobile" class="col-sm-3 col-form-label">Enter Mobile Number</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="mobile"
                                        placeholder="Enter Mobile Number" name="mobile">
                                </div>
                            </div>

                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            <div class="row mb-3">
                                <label for="Email" class="col-sm-3 col-form-label">Enter Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="email" placeholder="Enter Email"
                                        name="email">
                                </div>
                            </div>

                            @if ($errors->has('invoice_no'))
                                <span class="text-danger">{{ $errors->first('invoice_no') }}</span>
                                @endif

                            <div class="row mb-3">
                                <label for="InvoiceNo" class="col-sm-3 col-form-label">Enter Invoice No.</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="invoice_no"
                                        placeholder="Enter Invoice No." name="invoice_no">
                                </div>
                            </div>

                            @if ($errors->has('invoice_date'))
                                <span class="text-danger">{{ $errors->first('invoice_date') }}</span>
                                @endif
                            <div class="row mb-3">
                                <label for="invoice_date" class="col-sm-3 col-form-label datepicker">Enter Invoice
                                    Date</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="invoice_date"
                                        placeholder="Enter Invoice Date" name="invoice_date">
                                </div>
                            </div>

                            @if ($errors->has('product_name'))
                                <span class="text-danger">{{ $errors->first('product_name') }}</span>
                                @endif
                            <div class="row mb-3">
                                <label for="productName" class="col-sm-3 col-form-label">Enter Product Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="product_name"
                                        placeholder="Enter Product Name" name="product_name">
                                </div>
                            </div>

                            @if ($errors->has('serial_no'))
                                <span class="text-danger">{{ $errors->first('serial_no') }}</span>
                                @endif
                            <div class="row mb-3">
                                <label for="serialNumber" class="col-sm-3 col-form-label">Enter Serial Number</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="serial_no"
                                        placeholder="Enter Serial Number" name="serial_no">
                                </div>
                            </div>

                            @if ($errors->has('model_no'))
                                <span class="text-danger">{{ $errors->first('model_no') }}</span>
                                @endif
                            <div class="row mb-3">
                                <label for="modelNo" class="col-sm-3 col-form-label">Enter Model No.</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="model_no" placeholder="Enter Model No."
                                        name="model_no">
                                </div>
                            </div>



                            @if ($errors->has('address'))
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                                @endif
                            <div class="row mb-3">
                                <label for="Address" class="col-sm-3 col-form-label">Enter Address</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="address" rows="3" placeholder="Enter Address"
                                        name="address"></textarea>
                                </div>
                            </div>

                            @if ($errors->has('issue'))
                                <span class="text-danger">{{ $errors->first('issue') }}</span>
                                @endif
                            <div class="row mb-3">
                                <label for="issue" class="col-sm-3 col-form-label">Enter Issue</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="issue" rows="3" placeholder="Enter Issue"
                                        name="issue"></textarea>
                                </div>
                            </div>


                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-info px-5">Submit</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection