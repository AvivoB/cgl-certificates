<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
    <div class="test">
        <p class="text-white">
            {{ $certificate->customer->email }}
        </p>
        <p>
            <img src="data:image/png;base64, {!! base64_encode($qrcode) !!} ">
        </p>
    </div>
</body>
</html>