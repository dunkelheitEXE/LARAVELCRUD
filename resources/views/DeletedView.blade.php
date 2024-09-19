<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap\css\bootstrap.min.css') }}">
    <title>Document</title>
</head>
<body>
    <style>
        .new-target {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
    </style>

    <div class="new-target">
        <div class="alert alert-success">
            USER DELETED SUCCESSFULLY
        </div>
        <a href="{{ url("/api/user") }}" class="btn btn-success">OK!</a>
    </div>

    <script src={{ asset('bootstrap\js\bootstrap.min.js') }}></script>
</body>
</html>