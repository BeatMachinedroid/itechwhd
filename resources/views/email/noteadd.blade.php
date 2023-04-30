
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
                                        <th style="padding: 10px; background: #b6b6b6; text-align: left;"><strong>Report Info</strong></th>
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
                                            <strong>Report No. :</strong>
                                        </td>
                                        <td style="text-align: left;">
                                            {{ $tickets->id }}</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;">
                                            <strong>Report Date :</strong>
                                        </td>
                                        <td style="text-align: left;">
                                            {{ $tickets->created_at->format('d / m / Y , g.i A') }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;">
                                            <strong>Status :</strong>
                                        </td>
                                        <td style="text-align: left;">
                                            {{ $tickets->status}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;">
                                            <strong>Location :</strong>
                                        </td>
                                        <td style="text-align: left;">
                                            {{ $tickets->location }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;">
                                            <strong>Request Type :</strong>
                                        </td>
                                        <td style="text-align: left;">
                                            {{ $tickets->requesttype->name }} . {{ $tickets->sub_category }} . {{ $tickets->sub_category_type }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;">
                                            <strong>Subject :</strong>
                                        </td>
                                        <td style="text-align: left;">
                                            {{ $tickets->subject }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;">
                                            <strong>Area / Location :</strong>
                                        </td>
                                        <td style="text-align: left;">
                                            {{ $tickets->area }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;">
                                            <strong>Request Detail :</strong>
                                        </td>
                                        <td style="text-align: left;">
                                            {{ $tickets->request_detail}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;">
                                            <strong>Technician :</strong>
                                        </td>
                                        <td style="text-align: left;">
                                            {{ $tickets->petugas_teknisi}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;">
                                            <strong>Reporter :</strong>
                                        </td>
                                        <td style="text-align: left;">
                                            {{ $tickets->pelapor}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;">
                                            <strong>Division :</strong>
                                        </td>
                                        <td style="text-align: left;">
                                            {{ $tickets->devisi}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;">
                                            <strong>Group IT :</strong>
                                        </td>
                                        <td style="text-align: left;">
                                            {{ $tickets->regu}}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                    </tr>
                    <tr>
                        <td style="height:20px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
                            style="max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                            <thead>
                                <tr>
                                    <th style="padding: 10px; background: #b6b6b6; text-align: left;"><strong>Notes Info</strong></th>
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
                                        <strong>Tanggal Done :</strong>
                                    </td>
                                    <td style="text-align: left;">
                                        {{ $note->tgl_done }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: right;">
                                        <strong>Jam   :</strong>
                                    </td>
                                    <td style="text-align: left;">
                                       {{ $note->jam }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: right;">
                                        <strong>lama penanganan :</strong>
                                    </td>
                                    <td style="text-align: left;">
                                        {{$note->lama_penanganan}}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: right;">
                                        <strong>Sampai Lokasi :</strong>
                                    </td>
                                    <td style="text-align: left;">
                                        {{ $note->sampai_lokasi }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: right;">
                                        <strong>Tingkat Kondisi :</strong>
                                    </td>
                                    <td style="text-align: left;">
                                        {{ $note->tingkat_kondisi }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: right;">
                                        <strong>Tingkat Gangguan :</strong>
                                    </td>
                                    <td style="text-align: left;">
                                        {{ $note->tingkat_gangguan }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: right;">
                                        <strong>Perangkat :</strong>
                                    </td>
                                    <td style="text-align: left;">
                                        {{ $note->perangkat }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: right;">
                                        <strong>Deskripsi  :</strong>
                                    </td>
                                    <td style="text-align: left;">
                                        {{ $note->deskripsi }}
                                    </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: right;">
                                        <strong>Perbaikan :</strong>
                                    </td>
                                    <td style="text-align: left;">
                                        {{ $note->perbaikan }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: right;">
                                        <strong>Penyebab  :</strong>
                                    </td>
                                    <td style="text-align: left;">
                                        {{ $note->penyebab }}
                                    </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: right;">
                                        <strong>Solusi :</strong>
                                    </td>
                                    <td style="text-align: left;">
                                       {{ $note->solusi }}
                                    </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </tr>
                    <tr>
                        <td style="height:20px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"
                                    style="max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                                    <tr>
                                        <td>
                                            <p style="color:#455056;">
                                                this notification for edited request Report data form iTech app
                                            </p>
                                            <span
                                                style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; width:100px;">
                                                <a href="{{ url('/') }}">Here Show</a>
                                            </span>
                                        </td>
                                    </tr>
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
                                            <p style="font-size:14px; color:rgba(69, 80, 86, 0.7411764705882353); line-height:18px; margin:0 0 0;">&copy; <strong>2023 iTech - PT. ASDP Indonesia Ferry</strong></p>
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
