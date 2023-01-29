<!DOCTYPE html>
<html lang="en">

<head>
    <title>Help Portal Itech</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/logo_itech.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/error.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="glitch-wrapper">
        <div class="glitch-text">
            ERROR 404: Not found
        </div>
    </div>
    <a href="{{ url()->previous() }}">
    <button type="button">Back</button></a>

    <div class="footer">
        <p>© 2023 iTech - PT. ASDP Indonesia Ferry</p>
    </div>


</body>
<script>
    $('button').hover(function() {
        $('.glitch-wrapper').toggleClass('paused');
        $('body').toggleClass('paused');
    });
</script>

</html>
