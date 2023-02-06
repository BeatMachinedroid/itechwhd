@section('content')
    <div class="page-header">

    </div>
    <div class="row ">
        <div class="col-lg-12 addreq">
            <form action="/editreq" method="post">
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
                            <input type="text" class="form-control" id="usr" disabled name="subject" value="{{ $ticket['subject'] }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <h6>Subject Location / Area</h6>
                            <input type="text" class="form-control" id="usr" name="area" placeholder="Subject Location / Area" value="">
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
                            <textarea class="form-control" rows="3" id="comment" name="request_detail" disabled >{{ $ticket['request_detail'] }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <h6>Petugas / Vendor</h6>
                            <input type="text" class="form-control" id="usr" name="petugas_teknisi" value="{{ $ticket['petugas_teknisi'] }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <h6>Divisi / Bagian</h6>
                            <input type="text" class="form-control" id="usr" name="divisi" value="{{ $ticket['devisi'] }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <h6>Petugas IT / Regu</h6>
                            <input type="text" class="form-control" id="usr" name="regu" value="{{ $ticket['regu'] }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <h6>Nama Pelapor</h6>
                            <input type="text" class="form-control" id="usr" name="pelapor" value="{{ $ticket['pelapor'] }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <h6>Location</h6>
                            <select class="form-control" id="sel" name=location disabled>
                                <option selected="selected" value="{{ $ticket['location'] }}">{{ $ticket['location'] }}</option>
                        </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <h6>Status</h6>
                            <select class="form-control" id="sel1" name="status">
                                <option selected="selected">{{ $ticket['status'] }}</option>
                                <option value="All Active">All Active</option>
                                <option >Open</option>
                                <option >Pending</option>
                                <option >Closed</option>
                                <option >Cancelled</option>
                                <option >Resolved</option>
                                <option >Monitoring</option>
                                <option >Monitoring Critical</option>
                                <option >Pending Before Closed</option>
                                <option >Monitoring 1 Hours</option>
                                <option >New Status Type</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th width="100" style="text-align: center"><h6>Date</h6></th>
                                        <th><h6>Notes</h6></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            @if ($ticket->notes !== null)
                                                {{ $ticket->updated_at }}
                                            @endif
                                        </td>
                                        <td >
                                            <div class="notes">
                                                <textarea rows="5" type="text" class="form-control note" id="usr" name="notes" value="{{ $ticket->notes }}"></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="{{ url()->previous() }}" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
