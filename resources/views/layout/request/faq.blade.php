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
                                <option selected="selected">Category</option>
                                <option >Cyber Security</option>
                                <option >IT General/Other</option>
                                <option >KSO TELKOM</option>
                                <option >Layanan Akses Server</option>
                                <option >Layanan Aplikasi</option>
                                <option  >Layanan Data Center</option>
                                <option >Layanan Dukungan Pengguna</option>
                                <option >Layanan End User Computing</option>
                                <option >Layanan Jaringan dan Komunikasi</option>
                                <option >Layanan Solusi Bisnis</option>
                                <option >Layanan Teknis Internal</option>
                                <option >Layanan Ticketing</option>
                                <option >New Request Type [A]</option>
                                <option >New Request Type [A]</option>
                                <option >New Request Type [A]</option>
                                <option >Parking secure</option>
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
                                    <th style="text-align: center;">No.</th>
                                    <th>Category</th>
                                    <th>Judul</th>
                                    <th>solusi</th>
                                    <th style="text-align: center;">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($faqs as $faq)
                                    <tr>
                                        <td style="text-align: center;">{{ $faq->id }}</td>
                                        <td>{{ $faq->kategori }}</td>
                                        <td>{{ $faq->judul }}</td>
                                        <td >{{ $faq->solusi }}</td>
                                        <td style="text-align: center;">
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
