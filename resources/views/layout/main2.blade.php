<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>ITECH Help Desk</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/logo_itech.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
    <link rel="stylesheet" href="assets/css/feathericon.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">
    <link rel="stylehseet" href="https://cdn.oesmith.co.uk/morris-0.5.1.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css" />
</head>

<body>
    <div class="page-wrapper">
        <div class="content container-fluid">

            @if (Auth::User()->role == 'admin')
                @include('layout/nav/nav')
            @else
                @include('layout/nav/navp')
            @endif


        </div>
    </div>


</body>
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/raphael/raphael.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/plugins/morris/morris.min.js"></script>
<script src="assets/js/chart.morris.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script src="http://cdn.oesmith.co.uk/morris-0.4.1.min.js"></script>
<script>
    Morris.Donut({
        element: 'donut-chart',
        data: [
            @forelse($area as $datas )
                {
                    label: '{{ $datas->area }}',
                    value: {{ $datas->count }}
                },
            @empty
                {
                    label: 'Data is empty',
                    value: 0
                },
            @endforelse
        ],
        labelColor: "#FB7110",
        colors: ["#148BE3", "#93B5C2",'red', 'green', 'blue'],
        resize: true,
        redraw: true,
    });

    Morris.Bar({
        element: "bar-chart",
        data: [
            @forelse ($area as $datas)
                {
                    y:'{{ $datas->area }}',
                    a: {{ $datas->count }},
                },
            @empty
                {
                    y: 0
                }
            @endforelse

        ],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Total'],
        barColors: ["#148BE3","red"],
        resize: true,
        redraw: true,
    });

</script>

</html>
