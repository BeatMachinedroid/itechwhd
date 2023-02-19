<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <table cellspacing="0" border="0" cellpadding="0" width="100%"
    style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;">
    <tr>
        <td style="height:20px;">&nbsp;</td>
    </tr>
    <table style=" max-width:768px; margin:0 auto; height: 50px;" width="100%" border="0"
        align="center" cellpadding="0" cellspacing="0" >
        <tr>
            <td style="text-align:center;">
                <img width="130" height="60" src="{{ public_path('logoemail.png') }}" alt="logo">
            </td>
            <td style="text-align: center;">
                <h1 style="color:#1e1e2d; font-weight:300; margin:5px;font-size:24px;font-family:'Rubik',sans-serif;">
                    Ticketing Disturbance Event Report KSO With Telkom</h1>
            </td>
            <td>
                <table border="0"
                    style="width: 200px; border-spacing: 0px; border-width: 0px; padding: 0px; margin: 0 0 0 0px;">
                    <tr >
                        <td style="width: 90px;">
                            <p
                                style="font-family:'Rubik',sans-serif; font-size:12px; margin: 2px 2px 2px 3px; font-weight: 200;">
                                No. Document </p>
                        </td>
                        <td style="text-align: center;">:</td>
                        <td style="width: 90px; text-align: center;">FT.{{ $note->ticket }}.{{ $note->created_at->format('m') }}.{{ $note->created_at->format('Y') }}</td>
                    </tr>
                    <tr >
                        <td style="width: 90px; ">
                            <p
                                style="font-family:'Rubik',sans-serif; font-size:12px; margin: 2px 2px 2px 3px; font-weight: 200;">
                                No. Ticket </p>
                        </td>
                        <td style="text-align: center;">:</td>
                        <td style="width: 90px; text-align: center;">{{ $note->ticket }}</td>
                    </tr>
                    <tr >
                        <td style="width: 90px;">
                            <p
                                style="font-family:'Rubik',sans-serif; font-size:12px; margin: 2px 2px 2px 3px; font-weight: 200;">
                                Date </p>
                        </td>
                        <td style="text-align: center;">:</td>
                        <td style="width: 90px; text-align: center;">{{ Carbon::now() }}</td>
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
        <table style="background-color: #f2f3f8; max-width:768px; width: 680px; margin:0 auto;" width="100%" border="1"
            align="center" cellpadding="0" cellspacing="0">
            <tr style="background-color: rgb(203, 203, 203);">
                <td style="width: 90px; text-align: center;" colspan="5">
                    <h1
                        style="font-family:'Rubik',sans-serif; font-size:24px; margin: 2px 2px 2px 3px; font-weight: 200;">
                        Data Information </h1>
                </td>
            </tr>
            <tr>
                <td style="width: 90px;">
                    <p
                        style="font-family:'Rubik',sans-serif; font-size:15px; margin: 2px 2px 2px 3px; font-weight: 200;">
                        No. Ticket </p>
                </td>
                <td style="width: 180px; margin-left: 10px;">
                    <p
                        style="font-family:'Rubik',sans-serif; font-size:15px; margin: 2px 2px 2px 3px; font-weight: 200;">
                        {{ $ticket->id }} </p>
                </td>
            </tr>
            <tr>
                <td style="width: 90px;">
                    <p
                        style="font-family:'Rubik',sans-serif; font-size:15px; margin: 2px 2px 2px 3px; font-weight: 200;">
                        Reporter </p>
                </td>
                <td style="width: 180px; margin-left: 10px;" colspan="">
                    <p
                        style="font-family:'Rubik',sans-serif; font-size:15px; margin: 2px 2px 2px 3px; font-weight: 200;">
                        {{ $ticket->pelapor }} </p>
                </td>
            </tr>
            <tr>
                <td style="width: 90px;">
                    <p
                        style="font-family:'Rubik',sans-serif; font-size:15px; margin: 2px 2px 2px 3px; font-weight: 200;">
                        Response Time </p>
                </td>
                <td style="width: 60px; text-align: center;">
                    <p
                        style="font-family:'Rubik',sans-serif; font-size:15px; margin: 2px 2px 2px 3px; font-weight: 200;">
                        {{ $note->lama_penanganan }} </p>
                </td>
            </tr>
                <tr>
                    <td style="width: 90px;" >
                        <p
                            style="font-family:'Rubik',sans-serif; font-size:15px; margin: 2px 2px 2px 3px; font-weight: 200;">
                            Date of open ticket </p>
                    </td>
                    <td style="width: 180px; margin-left: 10px;" colspan="">
                        <p
                            style="font-family:'Rubik',sans-serif; font-size:15px; margin: 2px 2px 2px 3px; font-weight: 200;">
                            {{ $ticket->created_at->format('D,M,Y') }} </p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 90px;" >
                        <p
                            style="font-family:'Rubik',sans-serif; font-size:15px; margin: 2px 2px 2px 3px; font-weight: 200;">
                            Location / Area </p>
                    </td>
                    <td style="width: 180px; margin-left: 10px;" >
                        <p
                            style="font-family:'Rubik',sans-serif; font-size:15px; margin: 2px 2px 2px 3px; font-weight: 200;">
                            {{ $ticket->area }} </p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 90px;" >
                        <p
                            style="font-family:'Rubik',sans-serif; font-size:15px; margin: 2px 2px 2px 3px; font-weight: 200;">
                            Condition Level </p>
                    </td>
                    <td style="width: 180px; margin-left: 10px;" >
                        <p
                            style="font-family:'Rubik',sans-serif; font-size:15px; margin: 2px 2px 2px 3px; font-weight: 200;">
                            {{ $note->tingkat_kondisi }} </p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 90px;" >
                        <p
                            style="font-family:'Rubik',sans-serif; font-size:15px; margin: 2px 2px 2px 3px; font-weight: 200;">
                            Interference Level </p>
                    </td>
                    <td style="width: 180px; margin-left: 10px;" >
                        <p
                            style="font-family:'Rubik',sans-serif; font-size:15px; margin: 2px 2px 2px 3px; font-weight: 200;">
                            {{ $note->tingkat_gangguan }} </p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 90px;">
                        <p
                            style="font-family:'Rubik',sans-serif; font-size:15px; margin: 2px 2px 2px 3px; font-weight: 200;">
                            Arrived at location </p>
                    </td>
                    <td style="width: 60px; text-align: center;">
                        <p
                            style="font-family:'Rubik',sans-serif; font-size:15px; margin: 2px 2px 2px 3px; font-weight: 200;">
                            {{ $note->lama_penanganan }} </p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 90px;" >
                        <p
                            style="font-family:'Rubik',sans-serif; font-size:15px; margin: 2px 2px 2px 3px; font-weight: 200;">
                            Device </p>
                    </td>
                    <td style="width: 180px; margin-left: 10px;" >
                        <p
                            style="font-family:'Rubik',sans-serif; font-size:15px; margin: 2px 2px 2px 3px; font-weight: 200;">
                            {{ $note->device }} </p>
                    </td>
                </tr>
        </table>
    </table>
    <table cellspacing="0" border="0" cellpadding="0" width="100%"
        style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;">
        <tr>
            <td style="height:30px;">&nbsp;</td>
        </tr>
        <table style="background-color: #f2f3f8; max-width:768px; width: 680px; margin:0 auto;" width="100%" border="1"
            align="center" cellpadding="0" cellspacing="0">
            <tr style="background-color: rgb(203, 203, 203);">
                <td style="width: 90px; text-align: center;">
                    <h1
                        style="font-family:'Rubik',sans-serif; font-size:24px; margin: 2px 2px 2px 3px; font-weight: 200;">
                        Description Of Interference</h1>
                </td>
            </tr>
            <tr>
                <td style="width: 90px; height: 60px;">
                    <h1
                        style="font-family:'Rubik',sans-serif; font-size:24px; margin: 2px 2px 2px 3px; font-weight: 200; text-align: center;">
                        {{ $note->deskripsi }}</h1>
                </td>
            </tr>
        </table>
    </table>
    <table cellspacing="0" border="0" cellpadding="0" width="100%"
        style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;">
        <tr>
            <td style="height:30px;">&nbsp;</td>
        </tr>
        <table style="background-color: #f2f3f8; max-width:768px; width: 680px; margin:0 auto;" width="100%" border="1"
            align="center" cellpadding="0" cellspacing="0">
            <tr style="background-color: rgb(203, 203, 203);">
                <td style="width: 90px; text-align: center;">
                    <h1
                        style="font-family:'Rubik',sans-serif; font-size:24px; margin: 2px 2px 2px 3px; font-weight: 200;">
                        Reason of Interference / Root Cause </h1>
                </td>
            </tr>
            <tr>
                <td style="width: 90px; height: 60px;">
                    <h1
                        style="font-family:'Rubik',sans-serif; font-size:24px; margin: 2px 2px 2px 3px; font-weight: 200; text-align: center;">
                    {{ $note->penyebab }}</h1>
                </td>
            </tr>
        </table>
    </table>
    <table cellspacing="0" border="0" cellpadding="0" width="100%"
        style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;">
        <tr>
            <td style="height:30px;">&nbsp;</td>
        </tr>
        <table style="background-color: #f2f3f8; max-width:768px; width: 680px; margin:0 auto;" width="100%" border="1"
            align="center" cellpadding="0" cellspacing="0">
            <tr style="background-color: rgb(203, 203, 203);">
                <td style="width: 90px; text-align: center;">
                    <h1
                        style="font-family:'Rubik',sans-serif; font-size:24px; margin: 2px 2px 2px 3px; font-weight: 200;">
                        Repair </h1>
                </td>
            </tr>
            <tr>
                <td style="width: 90px; height: 60px;">
                    <h1
                        style="font-family:'Rubik',sans-serif; font-size:24px; margin: 2px 2px 2px 3px; font-weight: 200; text-align: center;">
                        {{ $note->perbaikan }} </h1>
                </td>
            </tr>
        </table>
    </table>
</table>
<table cellspacing="0" border="0" cellpadding="0" width="100%"
    style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;">
    <tr>
        <td style="height:30px;">&nbsp;</td>
    </tr>
    <table style=" max-width:768px; width: 680px; margin:0 auto;" width="100%" border="0"
    align="center" cellpadding="0" cellspacing="0">
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
