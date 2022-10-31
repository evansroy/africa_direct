<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quote Request</title>
</head>
<body>

    <h1>Quote Request</h1>
    <h2>Hey, It's me {{ $data['name'] }}</h2>
    <br>

    <strong>User details: </strong><br>
    <strong>Name: </strong>{{$data['name'] }} <br>
    <strong>Email: </strong>{{ $data['email'] }} <br>
    <strong>Contact: </strong>{{ $data['contact'] }} <br>
    <strong>Freight Type: </strong>{{ $data['freightype'] }} <br>
    <strong>City of Departure: </strong>{{$data['cityofdeparture'] }} <br>
    <strong>Incoterm: </strong>{{ $data['incoterm'] }} <br>
    <strong>Weight </strong>{{ $data['weight'] }} <br>
    <strong>Height</strong>{{$data['height']}}<br>
    <strong>Width </strong>{{ $data['width'] }} <br>
    <strong>Length</strong>{{$data['length']}}<br>

    Thank you
</body>
</html>
