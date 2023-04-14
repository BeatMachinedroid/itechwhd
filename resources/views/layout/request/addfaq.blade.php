@section('content')
    <div class="page-header">

    </div>
    <div class="row ">
        <div class="col-lg-12 addreq">
            <form action="{{ route('add.faq') }}" method="post">
                @csrf
                <div class="card-body">
                    <h5 class="text-center">
                        <strong>
                            I - FaQs
                        </strong>
                    </h5>
                </div>
                <div class="row formtype">
                    <div class="col-md-6">
                        <div class="form-group">
                            <h6>Category</h6>
                            <select class="form-control" id="sel1" name="kategori">
                                <option >Cyber Security</option>
                                <option >IT General/Other</option>
                                <option >KSO TELKOM</option>
                                <option >Layanan Akses Server</option>
                                <option >Layanan Aplikasi</option>
                                <option >Layanan Data Center</option>
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
                    <div class="col-md-6">
                        <div class="form-group">
                            <h6>Judul</h6>
                            @error('subject')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                            <input type="text" class="form-control" id="usr" name="judul">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <h6>solusi</h6>
                            @error('detail')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                            <textarea class="form-control" rows="5" id="comment" name="solusi"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Save</button>
                            <a href="{{ url()->previous() }}" class="btn btn-danger">Back</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
