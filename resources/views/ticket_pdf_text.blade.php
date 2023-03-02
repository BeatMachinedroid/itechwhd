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

    <table style=" max-width:60%; margin:0 auto; height: 50px;" width="100%" border="0"
        align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td style="text-align:center;">
                <img width="130" height="60" src="{{ public_path('images/logoemail.png') }}" alt="logo">
            </td>
            <td style="text-align: center;">
                <h1 style="color:#1e1e2d; font-weight:300; margin:5px;font-size:24px;font-family:'Rubik',sans-serif;">
                    Ticketing Disturbance Event Report KSO With Telkom</h1>
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
                                FT-{{ $ticket->id }}-{{ $note->id }}.{{ $note->updated_at->format('m') }}.{{ $note->updated_at->format('y') }}
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
                        <td style="width: 90px; text-align: left;"><p
                            style="font-family:'Rubik',sans-serif; font-size:12px; margin: 2px 2px 2px 3px; font-weight: 200;">
                            {{ $ticket->updated_at->format('d / M / Y') }}
                        </p></td>
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
    <table style=" max-width:768px; width: 680px; margin:0 auto;" width="100%"
        border="1" align="center" cellpadding="0" cellspacing="0">
        <tr style="background-color: rgb(203, 203, 203);">
            <td style="width: 90px; text-align: center;">
                <h1 style="font-family:'Rubik',sans-serif; font-size:24px; margin: 2px 2px 2px 3px; font-weight: 200;">
                    Description Of Interference</h1>
            </td>
        </tr>
        <tr>
            <td style="width: 90px; height: 300px;">
                <h1
                    style="font-family:'Rubik',sans-serif; font-size:24px; margin: 2px 2px 2px 3px; font-weight: 200; text-align: center;">
                    {{ $note->notes }}
                </h1>
            </td>
        </tr>
    </table>

    <table cellspacing="0" border="0" cellpadding="0" width="100%"
        style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;">
        <tr>
            <td style="height:40px;">&nbsp;</td>
        </tr>
    </table>
    <table style=" max-width:768px; width: 680px; margin:0 auto;" width="100%"
        border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td style="width: 90px;" colspan="2">
                <h6
                    style="font-family:'Rubik',sans-serif; font-size:20px; margin: 2px 2px 2px 3px; font-weight: 200; text-align: center;">
                    Agreed By, </h6>
            </td>
        </tr>
        <tr>
            <td style="height:40px;">&nbsp;</td>
        </tr>
        <tr>
            <td style="text-align: center; width: 90px;">
                IT ASDP
            </td>
            <td style="text-align: center; width: 90px;">
                TELKOM
            </td>
        </tr>
        <tr>
            <td style="height:70px;">&nbsp;</td>
        </tr>
        <tr>
            <td style="text-align: center; width: 90px;">
                ( __________________ )
            </td>
            <td style="text-align: center; width: 90px;">
                ( __________________ )
            </td>
        </tr>
        <tr>
            <td style="height:40px;">&nbsp;</td>
        </tr>
    </table>


</body>

</html>
