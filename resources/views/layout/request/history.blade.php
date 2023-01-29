@section('content')
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="No. Ticket">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <select class="form-control" id="sel1" name="sellist1">
                                <option>All Active</option>
                                <option>Open</option>
                                <option>Pending</option>
                                <option>Closed</option>
                                <option>Cancelled</option>
                                <option>Resolved</option>
                                <option>Monitoring</option>
                                <option>Monitoring Critical</option>
                                <option>Pending Before Closed</option>
                                <option>Monitoring 1 Hours</option>
                                <option>New Status Type</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Contains">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <a href="#" class="btn btn-success btn-block mt-0">
                                Search
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        I – Ticket History
                    </h4>
                </div>
                <div class="history">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th>Tanggal</th>
                                    <th>Update At</th>
                                    <th class="text-left">Request Detail</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($tickets as $tiket)
                                    <tr>
                                        <td class="text-center"><a href="/detail"
                                                class="btn-success badge-pill mt-0 col-md-1">{{ $tiket->id }}</a></td>
                                        <td>{{ $tiket->created_at }}</td>
                                        <td>{{ $tiket->updated_at }}</td>
                                        <td class="text-left">{{ $tiket->request_detail }}</td>
                                        <td class="text-center">
                                            <span class="badge badge-pill bg-success inv-badge">{{ $tiket->status }}</span>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false"><i
                                                        class="fas fa-ellipsis-v ellipse_color"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="{{ '/editrequest' . $tiket['id'] }}"><i
                                                            class="fas fa-pencil-alt m-r-5"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item" href="{{ '/delreq' . $tiket['id'] }}">
                                                        <i class="fas fa-trash-alt m-r-5"></i>
                                                        Delete</a>

                                                </div>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data is empty
                                    </div>
                                @endforelse
                    </div>
                    </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <div class="pagen">
                    {{ $tickets->links('vendor.pagination.costume') }}
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
