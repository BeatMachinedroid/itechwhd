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
                                <h4 class="text-uppercase">Assert #{{ $asset->serial }}{{ $asset->id }}</h4>
                        </div>
                        <div class="col-6 col-sm-6 text-right">
                            <a href="{{ '/assets/pdf' . $asset['id'] }} " class="btn btn-white">PDF</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-lg-12 m-b-20">
                            <table cellspacing="2" border="0" width="95%" cellpadding="3" class="clientTicket">
                                <tr>
                                    <td width='150'>
                                        <strong>Type</strong>
                                    </td>
                                    <td><strong>:</strong></td>
                                    <td>{{ $asset->type}}</td>
                                </tr>
                                <tr>
                                    <td width='150'>
                                        <strong>Model</strong>
                                    </td>
                                    <td><strong>:</strong></td>
                                    <td>{{ $asset->model}}</td>
                                </tr>
                                <tr>
                                    <td width='150'>
                                        <strong>Serial</strong>
                                    </td>
                                    <td><strong>:</strong></td>
                                    <td>{{ $asset->serial}}</td>
                                </tr>
                                <tr>
                                    <td width='150'>
                                        <strong>Location</strong>
                                    </td>
                                    <td><strong>:</strong></td>
                                    <td>{{ $asset->location}}</td>
                                </tr>
                                <tr>
                                    <td width='150'>
                                        <strong>Created At</strong>
                                    </td>
                                    <td><strong>:</strong></td>
                                    <td>{{ $asset->created_at->format('d / m / Y , h.i') }}</td>
                                </tr>

                            </table>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
