<table border=1>
    <thead>
    <tr>
        <th>No. Tiket</th>
        <th>Request Type</th>
        <th>Subject Laporan</th>
        <th>Area</th>
        <th>Problem</th>
        <th>Handling Time</th>
        <th>Response Time</th>
        <th>Technisian</th>
        <th>Group IT</th>
        <th>Location</th>
        <th>Status</th>
        <th>Report Date</th>
    </tr>
    </thead>
    <tbody>
    @foreach($note as $notes)
        <tr>
            <td>{{ $notes->tickets->id}}</td>
            <td>{{ $notes->tickets->requesttype->name }} . {{ $notes->tickets->sub_category }} . {{ $notes->tickets->sub_category_type }}</td>
            <td>{{ $notes->tickets->subject }}</td>
            <td>{{ $notes->tickets->area }}</td>
            <td>{{ $notes->tickets->problem }}</td>
            <td>{{ $notes->lama_penanganan }}</td>
            <td>{{ $notes->sampai_lokasi }}</td>
            <td>{{ $notes->tickets->petugas_teknisi }}</td>
            <td>{{ $notes->tickets->regu }}</td>
            <td>{{ $notes->tickets->location }}</td>
            <td>{{ $notes->tickets->status }}</td>
            <td>{{ $notes->tickets->created_at->format('d-m-Y') }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
