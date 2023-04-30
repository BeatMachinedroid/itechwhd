<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>ITECH Help Desk</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo_itech.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/feathericon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css') }}">
    <link rel="stylehseet" href="https://cdn.oesmith.co.uk/morris-0.5.1.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}" />
</head>

<body>
    <div class="page-wrapper">
        <div class="content container-fluid">
                @include('layout/nav/nav')
        </div>
    </div>


</body>
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('assets/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script>
<script src="{{ asset('assets/js/chart.morris.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script src="http://cdn.oesmith.co.uk/morris-0.4.1.min.js"></script>
<script>
 var colors = [];
        while (colors.length < 100) {
            do {
                var color = Math.floor((Math.random()*1000000)+1);
            } while (colors.indexOf(color) >= 0);
            colors.push("#" + ("000000" + color.toString(16)).slice(-6));
        }
    Morris.Donut({
        element: 'donut-chart',
        data: [
            @forelse($area as $datas )
                {
                    label: '{{ $datas->area }}',
                    value: {{ number_format(($datas->count / $datas->count() ), 2) *100 }},
                },
            @empty
                {
                    label: 'Data is empty',
                    value: 0
                },
            @endforelse
        ],
        formatter: function(x, data) {
        return data.value + '%';
        },
        labelColor: "#FB7110",
        colors: colors,
        resize: true,
        redraw: true,
    });

    Morris.Bar({
        element: "bar-chart",
        data: [
            @forelse ($area as $datas)
                {
                    y:'{{ $datas->area }}',
                    a: {{ $datas->count }} ,
                },
            @empty
                {
                    y: 0
                }
            @endforelse

        ],
        xkey: ['y'],
        ykeys: ['a'],
        labels: ['Total'],
        barColors: colors,
        resize: true,
        redraw: true,
        hideHover: 'auto',
        xLabelAngle: '70',
        gridTextSize: 12,
        gridTextColor: 'black',
        verticalGrid: true,
        padding: 60,
    });

</script>

</html>
