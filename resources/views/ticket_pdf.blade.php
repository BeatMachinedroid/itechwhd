<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

                            <div class="row custom-invoice">
                                <div class="col-6 col-sm-6 m-b-20">
                                        <input type="hidden" name="id" value="{{ $ticket->id }}">
                                        <h2 class="text-uppercase">Ticket {{ $ticket->id }}</h2>
                                </div>
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
                                                <strong>Subject Area </strong>
                                            </td>
                                            <td><strong>:</strong></td>
                                            <td>{{ $ticket->area }}</td>
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
                                                <strong>Request Detail </strong>
                                            </td>
                                            <td><strong>:</strong></td>
                                            <td>{{ $ticket->request_detail}}</td>
                                        </tr>
                                        <tr>
                                            <td width='150'>
                                                <strong>Tect </strong>
                                            </td>
                                            <td><strong>:</strong></td>
                                            <td>{{ $ticket->petugas_teknisi}}</td>
                                        </tr>
                                        <tr>
                                            <td width='150'>
                                                <strong>Pelapor </strong>
                                            </td>
                                            <td><strong>:</strong></td>
                                            <td>{{ $ticket->pelapor}}</td>
                                        </tr>
                                        <br>
                                    </table>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Notes</th>
                                            <th>Input</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td width="150">
                                                @if ($ticket->notes !== null)
                                                    {{ $ticket->updated_at }}
                                                @endif
                                            </td>
                                            <td style="background: #f3dfba" >
                                                <div class="notes">
                                                    {{ $ticket->notes }}
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div>
                                 <div class="row">
                                    <div class="col-sm-12" style="text-align: center">
                                        <br>
                                            <h6><strong>Disepakati oleh</strong></h6>
                                        <br>
                                    </div>
                                </div>
                                <div class="invoice-info">
                                    <div class="col-sm-12 col-lg-12 m-b-20">
                                        <table cellspacing="2" border="0" width="95%" cellpadding="3" class="clientTicket">
                                            <tr>
                                                <td style="text-align: center">
                                                    IT ASDP
                                                </td>
                                                <td style="text-align: center">
                                                    TELKOM
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-6">
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                </td>
                                                <td class="col-md-6">
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center" class="col-md-6">
                                                    (.........................................)
                                                </td>
                                                <td style="text-align: center" class="col-md-6">
                                                    (.........................................)
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>

    </body>
</html>
