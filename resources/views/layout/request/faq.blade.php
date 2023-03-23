@section('content')
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('search.faq') }}" method="get">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            {{-- <label>No.</label> --}}
                            <select class="form-control" name="cate">
                                <option value="">Category</option>
                                <option value="Cyber Security">Cyber Security</option>
                                <option value="IT General/Other">IT General/Other</option>
                                <option value="KSO TELKOM">KSO TELKOM</option>
                                <option value="ayanan Akses Server">Layanan Akses Server</option>
                                <option value="Layanan Aplikasi">Layanan Aplikasi</option>
                                <option value="Layanan Data Center">Layanan Data Center</option>
                                <option value="Layanan Dukungan Pengguna">Layanan Dukungan Pengguna</option>
                                <option value="Layanan End User Computing">Layanan End User Computing</option>
                                <option value="Layanan Jaringan dan Komunikasi">Layanan Jaringan dan Komunikasi</option>
                                <option value="Layanan Solusi Bisnis">Layanan Solusi Bisnis</option>
                                <option value="Layanan Teknis Internal">Layanan Teknis Internal</option>
                                <option value="Layanan Ticketing">Layanan Ticketing</option>
                                <option value="New Request Type [A]">New Request Type [A]</option>
                                <option value="Parking secure">Parking secure</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            {{-- <label>Contains</label> --}}
                            <input type="text" class="form-control" placeholder="Contains" name="contains">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            {{-- <label>Search</label> --}}
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
                        FAQs
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
                                    <th class="text-center" style="width: 100px">No.</th>
                                    <th style="width: 150px">Category</th>
                                    <th class="text-left" >Judul</th>
                                    <th>solusi</th>
                                    @if (Auth::User()->role == 'Admin')
                                        <th style="width: 100px" class="text-center">action</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($faqs as $faq)
                                    <tr>
                                        <td class="text-center">{{ $faq->id }}</td>
                                        <td>{{ $faq->kategori }}</td>
                                        <td style="text-align: left">{{ substr($faq->judul, 0 , 25) }}...</td>
                                        <td style="text-align: left">{{ substr($faq->solusi, 0 , 25) }}...</td>
                                        @if (Auth::User()->role == 'Admin')
                                        <td class="text-center">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false"><i
                                                        class="fas fa-ellipsis-v ellipse_color"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="{{ '/faq/' . encrypt($faq->id) . '/edit' }}"><i
                                                            class="fas fa-pencil-alt m-r-5"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item" href="{{ '/faq/' . encrypt($faq->id) . '/delete' }}">
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
                        {{ $faqs->links('vendor.pagination.costume') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
