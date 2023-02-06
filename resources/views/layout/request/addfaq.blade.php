@section('content')
    <div class="page-header">

    </div>
    <div class="row ">
        <div class="col-lg-12 addreq">
            <form action="/reqfaq" method="post">
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
                                <option value="0">Cyber Security</option>
                                <option value="1">IT General/Other</option>
                                <option value="2">KSO TELKOM</option>
                                <option value="3">Layanan Akses Server</option>
                                <option value="4">Layanan Aplikasi</option>
                                <option value="5">Layanan Data Center</option>
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
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="{{ url()->previous() }}" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
