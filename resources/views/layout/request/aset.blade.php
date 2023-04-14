@section('content')
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('search.asset')}}" method="get">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Contains" name="contains">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <select class="form-control" name="status">
                                <option value="">Status</option>
                                <option value="UNAVAILABLE">UNAVAILABLE</option>
                                <option value="AVAILABLE">AVAILABLE</option>
                                <option value="CANCEL">CANCEL</option>
                            </select>
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
                        All Assets
                    </h4>
                    <div class="text-right">
                        <a href="{{ route('asset_excel') }} " class="btn btn-white">Download Excel</a>
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
                                    <th style="text-align: center;">No. Asset</th>
                                    <th>Serial No.</th>
                                    <th>Asset Type</th>
                                    <th>Model</th>
                                    <th>Location</th>
                                    <th>Status</th>
                                    <th>jumlah</th>
                                    <th>area</th>
                                    <th>Image</th>
                                    @if (Auth::User()->role == 'Admin')
                                    <th style="text-align: center;">action</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($assets as $aset)
                                    <tr>
                                        @if (Auth::User()->role == 'viewers / audience')
                                        <td style="text-align: center;">{{ $aset->id }}</td>
                                        @else
                                        <td style="text-align: center;"><a href="{{ '/asset/'. encrypt($aset->id) . '/detail' }}" class="btn-success badge-pill mt-0 col-md-1">{{ $aset->id }}</a></td>
                                        @endif
                                        <td >{{ $aset->serial }}</td>
                                        <td >{{ $aset->type }}</td>
                                        <td >{{ $aset->model }}</td>
                                        <td >{{ $aset->location }}</td>
                                        <td>
                                            @if ($aset->status == 'UNAVAILABLE')
                                            <span class="badge badge-pill bg-warning inv-badge"> {{ $aset->status }} </span>
                                            @elseif($aset->status == 'AVAILABLE')
                                            <span class="badge badge-pill bg-primary inv-badge"> {{ $aset->status }} </span>
                                            @else
                                            <span class="badge badge-pill bg-danger inv-badge"> {{ $aset->status }} </span>
                                            @endif
                                        </td>
                                        <td>{{ $aset->jumlah }}</td>
                                        <td>{{ $aset->area }}</td>
                                        <td><img src="{{ asset('storage/Assets/' . $aset->file) }}"
                                            alt=""
                                            style="width: 120px; height: 120px;"></td>
                                        @if (Auth::User()->role == 'Admin')
                                        <td style="text-align: center;">
                                            <div class="dropdown dropdown-action">
                                                <a class="action-icon dropdown-toggle"
                                                    data-toggle="dropdown" aria-expanded="false"><i
                                                        class="fas fa-ellipsis-v ellipse_color"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="{{ '/asset/' . encrypt($aset->id) . '/edit' }}"><i
                                                            class="fas fa-pencil-alt m-r-5"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item" href="{{ '/asset/' . encrypt($aset->id) . '/delete' }}">
                                                        <i class="fas fa-trash-alt m-r-5"></i>
                                                        Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                        @endif

                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data is Empty
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="pagen">
                        {{ $assets->links('vendor.pagination.costume') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
