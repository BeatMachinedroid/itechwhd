<!doctype html>
<html lang="en-US">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="description" content="Reset Password Email Template.">
    <style type="text/css">
        a:hover {
            text-decoration: underline !important;
        }
    </style>
</head>

<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; " leftmargin="0">
    <table cellspacing="0" border="0" cellpadding="0" width="100%"
        style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;">
        <tr>
            <td style="height:20px;">&nbsp;</td>
        </tr>
    </table>

    <table style=" max-width:60%; margin:0 auto; height: 50px;" width="100%" border="0" align="center"
        cellpadding="0" cellspacing="0">
        <tr>
            <td style="text-align:center;">
                <img width="130" height="60" src="{{ public_path('images/logoemail.png') }}" alt="logo">
            </td>
            <td style="text-align: center;">
                <h1 style="color:#1e1e2d; font-weight:300; margin:5px;font-size:24px;font-family:'Rubik',sans-serif;">
                    Ticketing System Problem Report
                    <br>
                    KSO Telkom
                </h1>
            </td>
            <td>
                <table border="0"
                    style="width: 200px; border-spacing: 0px; border-width: 0px; padding: 0px; margin: 0 0 0 0px;">
                    <tr>
                        <td style="width: 90px;">
                            <p
                                style="font-family:'Rubik',sans-serif; font-size:12px; margin: 2px 2px 2px 3px; font-weight: 200;">
                                No. Document </p>
                        </td>
                        <td style="text-align: center;">:</td>
                        <td style="width: 90px; text-align: left;">
                            <p
                                style="font-family:'Rubik',sans-serif; font-size:12px; margin: 2px 2px 2px 3px; font-weight: 200;">
                                FT-301.00.02
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 90px; ">
                            <p
                                style="font-family:'Rubik',sans-serif; font-size:12px; margin: 2px 2px 2px 3px; font-weight: 200;">
                                Revisi </p>
                        </td>
                        <td style="text-align: center;">:</td>
                        <td style="width: 90px; text-align: left;">
                            <p
                                style="font-family:'Rubik',sans-serif; font-size:12px; margin: 2px 2px 2px 3px; font-weight: 200;">
                                01
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 90px;">
                            <p
                                style="font-family:'Rubik',sans-serif; font-size:12px; margin: 2px 2px 2px 3px; font-weight: 200;">
                                Date </p>
                        </td>
                        <td style="text-align: center;">:</td>
                        <td style="width: 90px; text-align: left;">
                            <p
                                style="font-family:'Rubik',sans-serif; font-size:12px; margin: 2px 2px 2px 3px; font-weight: 200;">
                                {{ now('Asia/Jakarta')->format('d M Y') }} </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table cellspacing="0" border="0" cellpadding="0" width="100%"
        style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;">
        <tr>
            <td style="height:30px;">&nbsp;</td>
        </tr>
    </table>
    <table style=" max-width:768px; width: 680px; margin:0 auto;" width="80%" border="1" align="center"
        cellpadding="0" cellspacing="0">
        <tr style="background-color: rgb(203, 203, 203);">
            <td style="width: 90px; text-align: center;" colspan="5">
                <h1 style="font-family:'Rubik',sans-serif; font-size:24px; margin: 2px 2px 2px 3px; font-weight: 200;">
                    Data Information </h1>
            </td>
        </tr>
        <tr>
            <td style="width: 90px;" colspan="2">
                <p style="font-family:'Rubik',sans-serif; font-size:15px; margin: 2px 2px 2px 3px; font-weight: 200;">
                    No. Ticket </p>
            </td>
            <td style="width: 180px; margin-left: 10px;" colspan="3">
                <p style="font-family:'Rubik',sans-serif; font-size:15px; margin: 2px 2px 2px 3px; font-weight: 200;">
                    {{ $ticket->id }} </p>
            </td>
        </tr>
        <tr>
            <td style="width: 90px;" colspan="2">
                <p style="font-family:'Rubik',sans-serif; font-size:15px; margin: 2px 2px 2px 3px; font-weight: 200;">
                    Date of open ticket </p>
            </td>
            <td style="width: 180px; margin-left: 10px;" colspan="3">
                <p style="font-family:'Rubik',sans-serif; font-size:15px; margin: 2px 2px 2px 3px; font-weight: 200;">
                    {{ $ticket->updated_at->format('d / M / Y , h.i') }}
                </p>
            </td>
        </tr>
        <tr>
            <td style="width: 90px;" colspan="2">
                <p style="font-family:'Rubik',sans-serif; font-size:15px; margin: 2px 2px 2px 3px; font-weight: 200;">
                    Location / Area </p>
            </td>
            <td style="width: 180px; margin-left: 10px;" colspan="3">
                <p style="font-family:'Rubik',sans-serif; font-size:15px; margin: 2px 2px 2px 3px; font-weight: 200;">
                    {{ $ticket->area }} </p>
            </td>
        </tr>
        <tr>
            <td style="width: 90px;" colspan="2">
                <p style="font-family:'Rubik',sans-serif; font-size:15px; margin: 2px 2px 2px 3px; font-weight: 200;">
                    handling time </p>
            </td>
            <td style="width: 60px; " colspan="3">
                <p style="font-family:'Rubik',sans-serif; font-size:15px; margin: 2px 2px 2px 3px; font-weight: 200;">
                    {{ $note->lama_penanganan }} </p>
            </td>
        </tr>
        <tr>
            <td style="width: 90px;" colspan="2">
                <p style="font-family:'Rubik',sans-serif; font-size:15px; margin: 2px 2px 2px 3px; font-weight: 200;">
                    Response Time </p>
            </td>
            <td style="width: 60px;" colspan="3">
                <p style="font-family:'Rubik',sans-serif; font-size:15px; margin: 2px 2px 2px 3px; font-weight: 200;">
                    {{ $note->sampai_lokasi }} </p>
            </td>
        </tr>
        <tr>
            <td style="width: 90px;" colspan="2">
                <p style="font-family:'Rubik',sans-serif; font-size:15px; margin: 2px 2px 2px 3px; font-weight: 200;">
                    Condition Level </p>
            </td>
            <td style="width: 180px; margin-left: 10px;" colspan="3">
                <p style="font-family:'Rubik',sans-serif; font-size:15px; margin: 2px 2px 2px 3px; font-weight: 200;">
                    {{ $note->tingkat_kondisi }} </p>
            </td>
        </tr>
        <tr>
            <td style="width: 90px;" colspan="2">
                <p style="font-family:'Rubik',sans-serif; font-size:15px; margin: 2px 2px 2px 3px; font-weight: 200;">
                    Interference Level </p>
            </td>
            <td style="width: 180px; margin-left: 10px;" colspan="3">
                <p style="font-family:'Rubik',sans-serif; font-size:15px; margin: 2px 2px 2px 3px; font-weight: 200;">
                    {{ $note->tingkat_gangguan }} </p>
            </td>
        </tr>
        <tr>
            <td style="width: 90px;" colspan="2">
                <p style="font-family:'Rubik',sans-serif; font-size:15px; margin: 2px 2px 2px 3px; font-weight: 200;">
                    Device </p>
            </td>
            <td style="width: 180px; margin-left: 10px;" colspan="3">
                <p style="font-family:'Rubik',sans-serif; font-size:15px; margin: 2px 2px 2px 3px; font-weight: 200;">
                    {{ $note->perangkat }}</p>
            </td>
        </tr>
        <tr>
            <td style="width: 90px;" colspan="2">
                <p style="font-family:'Rubik',sans-serif; font-size:15px; margin: 2px 2px 2px 3px; font-weight: 200;">
                    Reporter </p>
            </td>
            <td style="width: 180px; margin-left: 10px;" colspan="3">
                <p style="font-family:'Rubik',sans-serif; font-size:15px; margin: 2px 2px 2px 3px; font-weight: 200;">
                    {{ $ticket->pelapor }} </p>
            </td>
        </tr>
    </table>
    <table cellspacing="0" border="0" cellpadding="0" width="100%"
        style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;">
        <tr>
            <td style="height:30px;">&nbsp;</td>
        </tr>
    </table>
    <table style=" max-width:768px; width: 680px; margin:0 auto;" width="100%" border="1" align="center"
        cellpadding="0" cellspacing="0">
        <tr style="background-color: rgb(203, 203, 203);">
            <td style="width: 90px; text-align: center;">
                <h1 style="font-family:'Rubik',sans-serif; font-size:24px; margin: 2px 2px 2px 3px; font-weight: 200;">
                    Description Of Interference</h1>
            </td>
        </tr>
        <tr>
            <td style="width: 90px; height: 60px;">
                <p
                    style="font-family:'Rubik',sans-serif; font-size:16px; margin: 2px 2px 2px 3px; font-weight: 200; text-align: center;">
                    {{ $note->deskripsi }}</p>
            </td>
        </tr>
    </table>
    <table cellspacing="0" border="0" cellpadding="0" width="100%"
        style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;">
        <tr>
            <td style="height:30px;">&nbsp;</td>
        </tr>
    </table>
    <table style=" max-width:768px; width: 680px; margin:0 auto;" width="100%" border="1" align="center"
        cellpadding="0" cellspacing="0">
        <tr style="background-color: rgb(203, 203, 203);">
            <td style="width: 90px; text-align: center;">
                <h1 style="font-family:'Rubik',sans-serif; font-size:24px; margin: 2px 2px 2px 3px; font-weight: 200;">
                    Reason of Interference / Root Cause</h1>
            </td>
        </tr>
        <tr>
            <td style="width: 90px; height: 60px;">
                <p
                    style="font-family:'Rubik',sans-serif; font-size:16px; margin: 2px 2px 2px 3px; font-weight: 200; text-align: center;">
                    {{ $note->penyebab }}</p>
            </td>
        </tr>
    </table>
    <table cellspacing="0" border="0" cellpadding="0" width="100%"
        style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;">
        <tr>
            <td style="height:30px;">&nbsp;</td>
        </tr>
    </table>
    <table style=" max-width:768px; width: 680px; margin:0 auto;" width="100%" border="1" align="center"
        cellpadding="0" cellspacing="0">
        <tr style="background-color: rgb(203, 203, 203);">
            <td style="width: 90px; text-align: center;">
                <h1 style="font-family:'Rubik',sans-serif; font-size:24px; margin: 2px 2px 2px 3px; font-weight: 200;">
                    Repair</h1>
            </td>
        </tr>
        <tr>
            <td style="width: 90px; height: 60px;">
                <p
                    style="font-family:'Rubik',sans-serif; font-size:16px; margin: 2px 2px 2px 3px; font-weight: 200; text-align: center;">
                    {{ $note->perbaikan }}</p>
            </td>
        </tr>
    </table>

    <table cellspacing="0" border="0" cellpadding="0" width="100%"
        style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;">
        <tr>
            <td style="height:35px;">&nbsp;</td>
        </tr>
    </table>
    <table style=" max-width:768px; width: 680px; margin:0 auto;" width="100%" border="0" align="center"
        cellpadding="0" cellspacing="0">
        <tr>
            <td style="width: 90px;" colspan="2">
                <h6
                    style="font-family:'Rubik',sans-serif; font-size:20px; margin: 2px 2px 2px 3px; font-weight: 200; text-align: center;">
                    Agreed By, </h6>
            </td>
        </tr>
        <tr>
            <td style="height:30px;">&nbsp;</td>
        </tr>
        <tr>
            <td style="text-align: center; width: 50%;">
                IT ASDP
            </td>
            <td style="text-align: center; width: 50%;">
                TELKOM
            </td>
        </tr>
        <tr>
            <td style="height:70px;">&nbsp;</td>
        </tr>
        <tr>
            <td style="text-align: center; width: 50%;">
                ( {{ $ticket->regu }} )
            </td>
            <td style="text-align: center; width: 50%;">
                ( __________________ )
            </td>
        </tr>
        <tr>
            <td style="height:40px;">&nbsp;</td>
        </tr>
    </table>


</body>

</html>
