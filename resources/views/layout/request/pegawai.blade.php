@section('content')
<div class="page-header">
    <div class="row align-items-center">
        <div class="col">

        </div>
    </div>
</div>
<div class="row">
        <div class="col-lg-12">
            <form action="{{ route('search.staf') }}">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            {{-- <label>No.</label> --}}
                            <input type="text" class="form-control" placeholder="Username" name="username">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            {{-- <label>Contains</label> --}}
                            <input type="text" class="form-control" placeholder="Email" name="email">
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
                        User Account
                    </h4>
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
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Create At</th>
                                    @if (Auth::User()->role == 'Admin')
                                    <th style="text-align: center;">action</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($user as $pegawai)
                                <tr>
                                    <td class="text-center">{{ $pegawai->id }}</td>
                                    <td>{{ $pegawai->username }}</td>
                                    <td>{{ $pegawai->email }}</td>
                                    <td>{{ $pegawai->role }}</td>
                                    <td>{{ $pegawai->created_at }}</td>
                                    @if (Auth::User()->role == 'Admin')
                                    <td style="text-align: center;">
                                        <div class="dropdown dropdown-action">
                                            <a class="action-icon dropdown-toggle"
                                                data-toggle="dropdown" aria-expanded="false"><i
                                                    class="fas fa-ellipsis-v ellipse_color"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{ '/staf/' . encrypt($pegawai->id) . '/edit' }}"><i
                                                        class="fas fa-pencil-alt m-r-5"></i>
                                                    Edit</a>
                                                <a class="dropdown-item" href="{{ '/staf/' . encrypt($pegawai->id) . '/delete' }}">
                                                    <i class="fas fa-trash-alt m-r-5"></i>
                                                    Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                    @endif
                                </tr>
                                @empty
                                <div class="alert alert-danger">
                                    Data Post belum Tersedia.
                                </div>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="pagen">
                        {{ $user->links('vendor.pagination.costume') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
