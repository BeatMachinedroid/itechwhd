
<!doctype html>
<html lang="en-US">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="description" content="Reset Password Email Template.">
    <style type="text/css">
        a:hover {text-decoration: underline !important;}
    </style>
</head>

<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
    <!--100% body table-->
    <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
        style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif; text-align:center;">
        <tr>
            <td>
                <table style="background-color: #f2f3f8; max-width:670px;  margin:0 auto;" width="100%" border="0"
                    align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td style="height:80px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">
                            <img width="130" height="60" src="{{ $message->embed(public_path().'/images/logoemail.png') }}" alt="logo">
                        </td>
                    </tr>
                    <tr>
                        <td style="height:20px;">&nbsp;</td>
                    </tr>
                    <tr>
                            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
                                style="max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                                <thead>
                                    <tr>
                                        <th style="padding: 10px; background: #b6b6b6; text-align: left;"><strong>Client</strong></th>
                                    </tr>
                                </thead>
                            </table>
                    </tr>
                    <tr>

                            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="15"
                                style="max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                                <tbody>
                                    <tr>
                                        <td style="text-align: right;">
                                            <strong>Name :</strong>
                                        </td>
                                        <td style="text-align: left;">
                                            {{ Auth::user()->username }} <{{ Auth::user()->email }}></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;">
                                            <strong>Location :</strong>
                                        </td>
                                        <td style="text-align: left;">
                                            {{ Auth::user()->location }}</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                    </tr>
                    <tr>
                        <td style="height:10px;">&nbsp;</td>
                    </tr>
                    <tr>
                            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
                                style="max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                                <thead>
                                    <tr>
                                        <th style="padding: 10px; background: #b6b6b6; text-align: left;"><strong>Report Assets</strong></th>
                                    </tr>
                                </thead>
                            </table>
                    </tr>
                    <tr>
                            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="15"
                                style="max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                                <tbody>
                                    <tr>
                                        <td style="text-align: right;">
                                            <strong>No. Assets :</strong>
                                        </td>
                                        <td style="text-align: left;">
                                            {{ $asset->id }}</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;">
                                            <strong>Type :</strong>
                                        </td>
                                        <td style="text-align: left;">
                                            {{ $asset->type }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;">
                                            <strong>Model :</strong>
                                        </td>
                                        <td style="text-align: left;">
                                            {{ $asset->model }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;">
                                            <strong>Serial :</strong>
                                        </td>
                                        <td style="text-align: left;">
                                            {{ $asset->serial }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;">
                                            <strong>Totally :</strong>
                                        </td>
                                        <td style="text-align: left;">
                                            {{ $asset->jumlah }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;">
                                            <strong>Area :</strong>
                                        </td>
                                        <td style="text-align: left;">
                                            {{ $asset->area }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;">
                                            <strong>Location :</strong>
                                        </td>
                                        <td style="text-align: left;">
                                            {{ $asset->location }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;">
                                            <strong>Status :</strong>
                                        </td>
                                        <td style="text-align: left;">
                                            {{ $asset->status }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                    </tr>
                    <tr>
                        <td style="height:40px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <table width="100%" border="0" align="center" cellpadding="10" cellspacing="0"
                                    style="max-width:670px; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                                    <tr>
                                        <td>
                                            <p style="font-size:14px; color:rgba(69, 80, 86, 0.7411764705882353); line-height:18px; margin:0 0 0;">&copy; <strong>2023 iTech - <a href="{{ url('/') }}">PT. ASDP Indonesia Ferry</a></strong></p>
                                        </td>
                                    </tr>
                        </table>
                    </tr>
                    <tr>
                        <td style="height:80px;">&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!--/100% body table-->
</body>

</html>
