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
                                <h2 class="text-uppercase">Ticket {{ $ticket->id }}</h2>
                        </div>
                        <form action="{{ route('history.cancel') }}" method="POST" class="col-6 col-sm-6 text-right">
                                @csrf
                                @method('put')
                                <input type="hidden" name="id" value="{{ $ticket->id }}">
                                <button type="submit" class="btn btn-white">Cencel Ticket</button>
                                <a href="{{ '/ticket/pdf' . $ticket['id'] }} " class="btn btn-white">PDF</a>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-lg-12 m-b-20">
                            <table cellspacing="2" border="0" width="95%" cellpadding="3" class="clientTicket">
                                <tr>
                                    <td width='150'>
                                        <strong>Report Date </strong>
                                    </td>
                                    <td><strong>:</strong></td>
                                    <td>{{ $ticket->created_at->format('d / m / Y , h.i') }}</td>
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
                                        <strong>Devition </strong>
                                    </td>
                                    <td><strong>:</strong></td>
                                    <td>{{ $ticket->devisi}}</td>
                                </tr>
                                <tr>
                                    <td width='150'>
                                        <strong>Grub </strong>
                                    </td>
                                    <td><strong>:</strong></td>
                                    <td>{{ $ticket->regu}}</td>
                                </tr>
                                <tr>
                                    <td width='150'>
                                        <strong>Location</strong>
                                    </td>
                                    <td><strong>:</strong></td>
                                    <td>{{ $ticket->lokasi}}</td>
                                </tr>
                            </table>

                        </div>
                    </div>
                    <div class="alert alert-danger" role="alert">
                        Please make sure you add the note before continue export processing !
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th width="100" style="text-align: center">Date</th>
                                    <th style="width: 150px;">User</th>
                                    <th>Notes</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @if ($ticket->notes !== null) --}}
                                    @foreach ($note as $item)
                                <tr>
                                            <td style="width: 200px;">
                                                    {{ $item->updated_at->format('d / m / Y , h.i') }}
                                            </td>
                                            <td style="width: 150px;">
                                                    {{ Auth::user()->username }}
                                            </td>
                                            <td>
                                                <div class="notes">
                                                    <textarea rows="5" type="text" class="form-control note" id="usr" name="notes" disabled>
                                                        {{ $item->tgl_done }} <br>
                                                        {{ $item->jam }}<br>
                                                        {{ $item->sampai_lokasi }}<br>
                                                        {{ $item->tingkat_kondisi }}<br>
                                                        {{ $item->tingkat_gangguan }}<br>
                                                        {{ $item->lama_penanganan }}<br>
                                                        {{ $item->lokasi }}<br>
                                                        {{ $item->perangkat }}<br>
                                                        {{ $item->deskripsi }}<br>
                                                        {{ $item->perbaikan }}<br>
                                                        {{ $item->penyebab }}<br>
                                                        {{ $item->solusi }}
                                                    </textarea>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    {{-- @endif --}}
                                <tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td colspan="3" style="text-align: right">
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
                                <div class="col-md-4">
                                    <div class="form-group">
                                        @error('tgl_done')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <input type="text" class="form-control" id="usr" name="tgl_done" placeholder="Date of Completion">
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
                                        <input type="text" class="form-control" id="usr" name="sampai_lokasi" placeholder="Arrived at location">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        @error('tingkat_kondisi')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <input type="text" class="form-control" id="usr" name="tingkat_kondisi" placeholder="Condition Level">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        @error('tingkat_gangguan')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <input type="text" class="form-control" id="usr" name="tingkat_gangguan" placeholder="Couse of problem">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        @error('lama_penanganan')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <input type="text" class="form-control" id="usr" name="lama_penanganan" placeholder="Long of Handling">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        @error('lokasi')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <input type="text" class="form-control" id="usr" name="lokasi" placeholder="Area / Location">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        @error('deskripsi')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <input type="text" class="form-control" id="usr" name="deskrip" placeholder="Description">
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
                                        @error('perangkat')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <input type="text" class="form-control" id="usr" name="perangk" placeholder="Device">
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
            </div>
        </div>
    </div>
@endsection
