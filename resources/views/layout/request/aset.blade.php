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
                            <input type="text" class="form-control" placeholder="Contains">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <a href="#" class="btn btn-success btn-block mt-0 search_button">
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
                        Assets
                    </h4>
                </div>
                <div class="history">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>No. Asset</th>
                                    <th>Serial No.</th>
                                    <th>Asset Type</th>
                                    <th>Model</th>
                                    <th>Notes</th>
                                    <th>Location</th>
                                    <th>Reserve</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($assets as $aset)
                                <tr>
                                    <td>{{ $aset->id }}</td>
                                    <td>{{ $aset->serial }}</td>
                                    <td>{{ $aset->type }}</td>
                                    <td>{{ $aset->model }}</td>
                                    <td></td>
                                    <td></td>
                                    <td>{{ $aset->location }}</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="/asetedit" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                                aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{ "/asetedit".$aset['id'] }}"><i
                                                        class="fas fa-pencil-alt m-r-5"></i>
                                                    Edit</a>
                                                <a class="dropdown-item" href="{{ "/delset".$aset['id'] }}">
                                                    <i class="fas fa-trash-alt m-r-5"></i>
                                                    Delete</a>
                                            </div>
                                        </div>
                                    </td>
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
