@section('content')
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('search.history') }}" method="get">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="No. Ticket" name="number">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <select class="form-control" name="status">
                                <option value="">Status</option>
                                <option value="all">All Ticket</option>
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
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Contains" name="contains">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block mt-0">
                                Search
                            </button>
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
                    <div class="text-right">
                        <a href="{{ route('cetak_excel') }} " class="btn btn-white">Download Excel</a>
                    </div>
                </div>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div class="history">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th style="width: 150px">Date</th>
                                    <th style="width: 150px">Update</th>
                                    <th class="text-left">Request Detail</th>
                                    <th class="text-center">Status</th>
                                    @if (Auth::User()->role == 'Admin')
                                    <th class="text-center">Action</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($ticket as $tiket)
                                    <tr>
                                        <td class="text-center"><a href="{{ '/report/' .  encrypt($tiket->id) . '/detail' }}" class="btn-success badge-pill mt-0 col-md-1">#{{ $tiket->id }}</a></td>
                                                <td>{{ $tiket->created_at->format('d / m / Y') }}</td>
                                                <td>{{ $tiket->updated_at->format('d / m / Y')}}</td>
                                                <td class="text-left">{{ substr($tiket->request_detail, 0 , 25) }}...</td>
                                                <td class="text-center">
                                                        @if ($tiket->status == 'open')
                                                            <span class="badge badge-pill bg-primary inv-badge">{{ $tiket->status }}</span>
                                                        @else
                                                            <span class="badge badge-pill bg-danger inv-badge">{{ $tiket->status }}</span>
                                                        @endif
                                                    {{-- <span class="badge badge-pill bg-success inv-badge">{{ $tiket->status }}</span> --}}
                                                </td>
                                        @if (Auth::User()->role == 'Admin')
                                        <td class="text-center col-md-1">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false"><i
                                                        class="fas fa-ellipsis-v ellipse_color"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="{{ '/report/' . encrypt($tiket->id) . '/edit'}}"><i
                                                            class="fas fa-pencil-alt m-r-5"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item" href="{{ '/report/' . encrypt($tiket->id) . '/delete' }}">
                                                        <i class="fas fa-trash-alt m-r-5"></i>
                                                        Delete</a>

                                                </div>
                                            </div>
                                        </td>
                                        @endif

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
                    {{ $ticket->links('vendor.pagination.costume') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
