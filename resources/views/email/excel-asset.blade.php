<table border=1>
    <thead>
    <tr>
        <th>No. Asset</th>
        <th>Type</th>
        <th>Model</th>
        <th>Serial</th>
        <th>Jumlah</th>
        <th>Area</th>
        <th>Location</th>
        <th>Status</th>
        <th>Create At</th>
    </tr>
    </thead>
    <tbody>
    @foreach($aset as $notes)
        <tr>
            <td>{{ $notes->id}}</td>
            <td>{{ $notes->type}}</td>
            <td>{{ $notes->model}}</td>
            <td>{{ $notes->serial}}</td>
            <td>{{ $notes->jumlah}}</td>
            <td>{{ $notes->area}}</td>
            <td>{{ $notes->location}}</td>
            <td>{{ $notes->status}}</td>
            <td>{{ $notes->created_at->format('d-m-Y') }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
