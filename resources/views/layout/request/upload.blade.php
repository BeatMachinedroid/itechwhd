@section('content')
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 addreq">
            <form action="{{ route('upload.post') }}" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <h5 class="text-center">
                        <strong>
                            I - Files Upload
                        </strong>
                    </h5>
                </div>

                @csrf

                <div class="row">
                    {{-- sub1 --}}
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="hidden" name="users" value="{{ Auth::user()->id }}">
                            <input type="file" name="files" class="form-control">
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
            <div class="history">
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 50px">No.</th>
                                <th style="width: 150px">Date</th>
                                <th style="width: 150px">User</th>
                                <th class="text-left" style="width: 300px">File</th>
                                <th class="text-center" style="width: 80px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($file as $no => $files)
                                <tr>
                                    <td class="text-center">{{ ++$no }}</td>
                                    <td>{{ $files->created_at->format('d / m / Y') }}</td>
                                    <td>{{ $files->user->username }}</td>
                                    <td class="text-left">
                                        {{ $files->files }}
                                    </td>
                                    <td class="text-center col-md-1">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                                aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{ '/upload/download' . $files['id']}}"><i
                                                        class="fas fa-pencil-alt m-r-5"></i>
                                                    Download</a>
                                                <a class="dropdown-item" href="{{ '/upload/delete' . $files['id'] }}">
                                                    <i class="fas fa-trash-alt m-r-5"></i>
                                                    Delete</a>

                                            </div>
                                </tr>
                            @empty
                                <div class="alert alert-danger">
                                    Data is empty
                                </div>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <div class="pagen">
                    {{ $file->links('vendor.pagination.costume') }}
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
