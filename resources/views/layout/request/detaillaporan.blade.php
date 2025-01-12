@section('content')
    <div class="page-header">
        <div class="row align-items-center">

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row custom-invoice">
                        <div class="col-6 col-sm-6 m-b-20">
                                <input type="hidden" name="id" value="{{ $ticket->id }}">
                                <h2 class="text-uppercase">Ticket #{{ $ticket->id }}</h2>
                        </div>
                        <form action="{{ route('history.cancel') }}" method="POST" class="col-6 col-sm-6 text-right">
                                @csrf
                                @method('put')
                                <input type="hidden" name="id" value="{{ $ticket->id }}">
                                <button type="submit" class="btn btn-white">Cancel</button>
                                @forelse ($note as $item)
                                    <a href="{{ '/ticket/pdf' . $ticket['id'] }} " class="btn btn-white">PDF</a>
                                @empty

                                @endforelse
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 col-lg-8 m-b-20">
                            <table cellspacing="2" border="0" width="95%" cellpadding="3" class="clientTicket">
                                <tr>
                                    <td width='150'>
                                        <strong>Report Date </strong>
                                    </td>
                                    <td><strong>:</strong></td>
                                    <td>{{ $ticket->created_at->format('d / m / Y , g.i A') }}</td>
                                </tr>
                                <tr>
                                    <td width='150'>
                                        <strong>Status </strong>
                                    </td>
                                    <td><strong>:</strong></td>
                                    <td>{{ $ticket->status }}</td>
                                </tr>
                                <tr>
                                    <td width='150'>
                                        <strong>Location </strong>
                                    </td>
                                    <td><strong>:</strong></td>
                                    <td>{{ $ticket->location }}</td>
                                </tr>
                                <tr>
                                    <td width='150'>
                                        <strong>Request Type </strong>
                                    </td>
                                    <td><strong>:</strong></td>
                                    <td>{{ $ticket->requesttype->name }} . {{ $ticket->sub_category }} . {{ $ticket->sub_category_type }}</td>
                                </tr>
                                <tr>
                                    <td width='150'>
                                        <strong>Subject </strong>
                                    </td>
                                    <td><strong>:</strong></td>
                                    <td>{{ $ticket->subject}}</td>
                                </tr>
                                <tr>
                                    <td width='150'>
                                        <strong>Area / Location </strong>
                                    </td>
                                    <td><strong>:</strong></td>
                                    <td>{{ $ticket->area}}</td>
                                </tr>
                                <tr>
                                    <td width='150'>
                                        <strong>Request Detail </strong>
                                    </td>
                                    <td><strong>:</strong></td>
                                    <td>{{ $ticket->request_detail}}</td>
                                </tr>
                                <tr>
                                    <td width='150'>
                                        <strong>Technician</strong>
                                    </td>
                                    <td><strong>:</strong></td>
                                    <td>{{ $ticket->petugas_teknisi}}</td>
                                </tr>
                                <tr>
                                    <td width='150'>
                                        <strong>Reporter </strong>
                                    </td>
                                    <td><strong>:</strong></td>
                                    <td>{{ $ticket->pelapor}}</td>
                                </tr>
                                <tr>
                                    <td width='150'>
                                        <strong>Division</strong>
                                    </td>
                                    <td><strong>:</strong></td>
                                    <td>{{ $ticket->devisi}}</td>
                                </tr>
                                <tr>
                                    <td width='150'>
                                        <strong>Group IT </strong>
                                    </td>
                                    <td><strong>:</strong></td>
                                    <td>{{ $ticket->regu}}</td>
                                </tr>
                                <tr>
                                    <td width='150'>
                                        <strong>Image</strong>
                                    </td>
                                    <td><strong>:</strong></td>
                                    <td>{{ $ticket->image}}</td>
                                </tr>

                            </table>

                        </div>
                        @if ($ticket->image == null)
                        <div class="col-4 col-sm-4 text-center">

                        </div>
                        @else
                        <div class="col-4 col-sm-4 text-center">
                            <table cellspacing="2" border="0" width="95%" cellpadding="3" class="clientTicket">
                                <tr>
                                    <td><img src="{{ asset('storage/Report/' . $ticket->image) }}" alt=""
                                            style="width: 250px; height: 250px;"></td>
                                </tr>
                            </table>
                        </div>
                        @endif
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover" >
                           @forelse ($note as $item)

                           @empty
                                <div class="alert alert-danger" role="alert">
                                    Please input note first when you want to download the pdf
                                </div>
                           @endforelse


                            <thead>
                                <tr>
                                    <th width="100" style="text-align: center">Date</th>
                                    <th style="width: 150px;">User</th>
                                    <th>Notes</th>
                                </tr>
                            </thead>
                            <tbody >
                                    @foreach ($note as $item)
                                            <tr id="display-notes">
                                                <td style="width: 200px; text-align: center;">
                                                        {{ $item->updated_at->format('d / M / Y , h.i') }}
                                                </td>
                                                <td style="width: 150px;">
                                                        {{ $item->user->username }}
                                                </td>
                                                <td colspan="2">
                                                    <div class="notes">
                                                        <textarea rows="5" type="text" class="form-control note" id="usr" name="notes" disabled>
Tanggal Masalah  : {{ $item->updated_at->format('d / m / Y') }}
Tanggal Done     : {{ $item->tgl_done }}
Jam              : {{ $item->jam }}
lama penanganan  : {{$item->lama_penanganan}}
Sampai Lokasi    : {{ $item->sampai_lokasi }}
Tingkat Kondisi  : {{ $item->tingkat_kondisi }}
Tingkat Gangguan : {{ $item->tingkat_gangguan }}
Perangkat        : {{ $item->perangkat }}
Deskripsi        : {{ $item->deskripsi }}
Perbaikan        : {{ $item->perbaikan }}
Penyebab         : {{ $item->penyebab }}
Solusi           : {{ $item->solusi }}
                                                        </textarea>
                                                    </div>
                                                </td>
                                            </tr>
                                    @endforeach
                            <tbody>
                                <tr>
                                    <td colspan="5" style="text-align: right">
                                        <button class="btn btn-white" id="show-form">Add Notes</button>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <form action="{{ route('detail.addnote')}}" method="POST">
                            <div class="card-body">
                            </div>
                            @csrf
                            <div class="row formtype" style="display: none;" id="notes">
                            <input type="hidden" name="ticket" value="{{ $ticket->id }}">
                            <input type="hidden" name="users" value="{{ Auth::user()->id }}">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        @error('tgl_done')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <input type="text" class="form-control" id="usr" name="tgl_done" placeholder="Date Of Done">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        @error('jam')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <input type="text" class="form-control" id="usr" name="jam" placeholder="Time">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        @error('sampai_lokasi')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <input type="text" class="form-control" id="usr" name="sampai_lokasi" placeholder="Response time">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        @error('tingkat_kondisi')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <input type="text" class="form-control" id="usr" name="tingkat_kondisi" placeholder="Condition Levels">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        @error('tingkat_gangguan')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <input type="text" class="form-control" id="usr" name="tingkat_gangguan" placeholder="Problem Levels">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        @error('lama_penanganan')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <input type="text" class="form-control" id="usr" name="lama_penanganan" placeholder="Handling Time">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        @error('deskripsi')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <input type="text" class="form-control" id="usr" name="deskripsi" placeholder="Description">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        @error('perbaikan')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <input type="text" class="form-control" id="usr" name="perbaikan" placeholder="Repair">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        @error('penyebab')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <input type="text" class="form-control" id="usr" name="penyebab" placeholder="Problem">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{-- <h6>Location</h6> --}}
                                        <input type="text" class="form-control" id="usr" name="perangkat" placeholder="Device">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        @error('solusi')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <input type="text" class="form-control" id="usr" name="solusi" placeholder="Solution">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input" name="checkbox">
                                          </div>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Text input with checkbox" name="cc" value="aris.waryanto@indonesiaferry.co.id">
                                      </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success"  id="btn" disabled>Save</button>
                                    <a href="{{ url()->previous() }}" class="btn btn-danger">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
