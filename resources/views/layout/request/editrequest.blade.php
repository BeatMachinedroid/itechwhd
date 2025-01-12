@section('content')
    <div class="page-header">

    </div>
    <div class="row ">
        <div class="col-lg-12 addreq">
            <form action="{{ route('editrequest.edit') }}" method="post">
                <div class="card-body">
                    <h5 class="text-center">
                        <strong>
                            I - Report Edit
                        </strong>
                    </h5>
                </div>
                @csrf
                @method('PUT')
                <div class="row formtype">
                    <input type="hidden" name="id" value="{{ $ticket['id'] }}">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <h6>Request Type</h6>
                                <input type="text" class="form-control" id="usr" name="request_type" value="{{ $ticket->requesttype->name }} . {{ $ticket->sub_category }} . {{ $ticket->sub_category_type }}" disabled>
                            </div>
                        </div>
                    </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <h6>Subject</h6>
                                <input type="text" class="form-control" id="usr" name="subject" value="{{ $ticket['subject'] }}">
                            </div>
                        </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <h6>Problem Area</h6>
                            <input type="text" class="form-control" id="usr" name="area" placeholder="Problem Area" value="{{ $ticket['area'] }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <h6>Problem</h6>
                            <input type="text" class="form-control" id="usr" name="problem" value="{{ $ticket['problem'] }}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <h6>Detail Request</h6>
                            <textarea class="form-control" rows="3" id="comment" name="request_detail"  >{{ $ticket['request_detail'] }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <h6>Petugas / Vendor</h6>
                            <input type="text" class="form-control" id="usr" name="petugas_teknisi" value="{{ $ticket['petugas_teknisi'] }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <h6>Divisi / Bagian</h6>
                            <input type="text" class="form-control" id="usr" name="divisi" value="{{ $ticket['devisi'] }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <h6>Petugas IT / Regu</h6>
                            <input type="text" class="form-control" id="usr" name="regu" value="{{ $ticket['regu'] }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <h6>Nama Pelapor</h6>
                            <input type="text" class="form-control" id="usr" name="pelapor" value="{{ $ticket['pelapor'] }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <h6>Location</h6>
                            <select class="form-control" id="sel" name=location disabled>
                                <option selected="selected" value="{{ $ticket['location'] }}">{{ $ticket['location'] }}</option>
                        </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <h6>Status</h6>
                            <select class="form-control" id="sel1" name="status">
                                <option selected="selected">{{ $ticket['status'] }}</option>
                                <option value="open">Open</option>
                                <option value="pending">Pending</option>
                                <option value="closed">Closed</option>
                                <option value="cancelled">Cancelled</option>
                                <option value="resolved">Resolved</option>
                                <option value="monitoring">Monitoring</option>
                                <option value="monitoring Critical">Monitoring Critical</option>
                                <option value="pending Before Closed">Pending Before Closed</option>
                                <option value="monitoring 1 Hours">Monitoring 1 Hours</option>
                                <option value="new Status Type">New Status Type</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <h6>Carbon cc</h6>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">
                                    <input type="checkbox" aria-label="Checkbox for following text input" name="checkbox">
                                  </div>
                                </div>
                                <input type="text" class="form-control" aria-label="Text input with checkbox" name="cc" value="aris.waryanto@indonesiaferry.co.id">
                              </div>
                                {{-- <input type="checkbox" name="check-box"> <span><input type="text" class="form-control" id="usr" name="cc" placeholder="Carbon Copy"></span> --}}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Save</button>
                            <a href="{{ url()->previous() }}" class="btn btn-danger">Back</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
