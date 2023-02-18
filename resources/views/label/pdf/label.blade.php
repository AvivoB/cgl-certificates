<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{margin:0;padding:1px}

        body {
            font-family: 'Nunito', sans-serif;
            font-size: 10px;
        }

        .logo {
            width: 100%;
        }
        .qrcode {
            float: left;
        }

        td.data {
            font-weight: bold;
            width: 70%;
            font-size: 7px;
            border-bottom: 0.5px dotted #000;
        }

        td.info {
            width: 27%;
            font-size: 7px;
        }

        table.info {
            border-spacing: 0px;
        }

        .small-text {
            font-size: 7px;
            text-align: left;
        }

        table td, table td * {
            vertical-align: top;
        }

        p {
            font-size: 8px;
            font-weight: bold;
            padding-top: 4px;
        }

        .image-cert {
            float:left;
            display: inline-block;
            width: 30%;
        }
    </style>
</head>
<body>
    <table style="width: 100%;">
        <tbody>
            <tr align="right">
                <td></td> <td>{{ $label->label_num }}</td>
            </tr>
            <tr align="right">
                <td></td> <td>{{ Carbon\Carbon::parse($label->created_at)->format('d/m/Y') }}</td>
            </tr>
            <tr align="right">
                 <td></td> <td>{{ $dataLabel->shape_stone }}</td>
            </tr>
            <tr align="right">
                <td></td> <td>{{ $dataLabel->weight }} Ct.</td>
            </tr>
            <tr align="right">
                <td align="left">Color</td><td>{{ $dataLabel->color }}</td>
            </tr>
            <tr align="right">
                <td align="left">Clarity</td><td>{{ $dataLabel->clarity }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>