<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
</head>
<body>

    <h1>Contact Message</h1>
    <h2>Hey, It's me {{ $data['name'] }}</h2>
    <br>

    <strong>User details: </strong><br>
    <strong>Name: </strong>{{$data['name'] }} <br>
    <strong>Email: </strong>{{ $data['email'] }} <br>
    <strong>Subject: </strong>{{ $data['subject'] }} <br>
    <strong>Message: </strong>{{ $data['message'] }} <br><br>

Thank you
</body>
</html>
