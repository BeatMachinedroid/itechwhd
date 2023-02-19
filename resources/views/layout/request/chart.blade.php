@section('content')
    <div class="page-header">

    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card card-chart">
                <div class="card-header">
                    <h4 class="card-title">Area Loket</h4> </div>
                <div class="card-body">
                    <div id="bar-chart"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        Morris.Bar({
        element: "bar-chart",
        data: [
            @forelse($data as $datas )
                {
                    y: '{{ $datas->area}}',
                    a: {{ $datas->groupBy('area')->count() }},
                },
                @empty
                    {
                        y: 0,
                        a: 0,
                    }
            @endforelse
        ],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['@foreach ($data as $datas) {{ $datas->updated_at->format('Y') }}, @endforeach'],
        barColors: ["#148BE3", "#FB7110"],
        resize: true,
        redraw: true,
    });
    </script>
@endsection
