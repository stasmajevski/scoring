<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Scoring</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

<div class="container">
    <nav class="navbar navbar-dark bg-primary">
        <h2 style="color:white">Users Scoring</h2>
        <a href="" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i><span>Add New User</span></a>
    </nav>
    @yield('main')
</div>
<script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>
