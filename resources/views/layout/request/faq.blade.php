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
                            {{-- <label>No.</label> --}}
                            <select name="" id="" class="form-control">
                                <option value="" selected="selected">Category</option>
                                <option value="0">Cyber Security</option>
                                <option value="1">IT General/Other</option>
                                <option value="2">KSO TELKOM</option>
                                <option value="3">Layanan Akses Server</option>
                                <option value="4">Layanan Aplikasi</option>
                                <option  value="5">Layanan Data Center</option>
                                <option value="6">Layanan Dukungan Pengguna</option>
                                <option value="7">Layanan End User Computing</option>
                                <option value="8">Layanan Jaringan dan Komunikasi</option>
                                <option value="9">Layanan Solusi Bisnis</option>
                                <option value="10">Layanan Teknis Internal</option>
                                <option value="11">Layanan Ticketing</option>
                                <option value="12">New Request Type [A]</option>
                                <option value="13">New Request Type [A]</option>
                                <option value="14">New Request Type [A]</option>
                                <option value="15">Parking secure</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            {{-- <label>Contains</label> --}}
                            <input type="text" class="form-control" placeholder="Contains">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            {{-- <label>Search</label> --}}
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
                                    <th>Category</th>
                                    <th>Judul</th>
                                    <th>solusi</th>
                                    <th>Vote</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($faqs as $faq)
                                    <tr>
                                        <td>{{ $faq->id }}</td>
                                        <td>{{ $faq->kategori }}</td>
                                        <td>{{ $faq->judul }}</td>
                                        <td>{{ $faq->solusi }}</td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false"><i
                                                        class="fas fa-ellipsis-v ellipse_color"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="{{ '/faqedit' . $faq['id'] }}"><i
                                                            class="fas fa-pencil-alt m-r-5"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item" href="{{ '/delfaq' . $faq['id'] }}">
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
                        {{ $faqs->links('vendor.pagination.costume') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
