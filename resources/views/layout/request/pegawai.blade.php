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
                            <label>No.</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Contains</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Search</label>
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
                        FAQs
                    </h4>
                </div>
                <div class="history">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Create At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($user as $pegawai)
                                <tr>
                                    <td>{{ $pegawai->id }}</td>
                                    <td>{{ $pegawai->username }}</td>
                                    <td>{{ $pegawai->email }}</td>
                                    <td>{{ $pegawai->role }}</td>
                                    <td>{{ $pegawai->created_at }}</td>
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
