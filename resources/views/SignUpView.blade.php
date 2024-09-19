<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap\css\bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css\style.css') }}">
    <title>Document</title>
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar fixed-top">
        <div class="container-fluid">
            <a href="./user" class="navbar-brand">LARAVEK CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Laravel Crud</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
                        <li class="nav-item"><a href="./user" class="nav-link">Students</a></li>
                        <li class="nav-item"><a href="./registration" class="nav-link">Sign Up</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <br>

    @if (!empty($successMsg))
        <div class="alert alert-success">{{ $successMsg }}</div>
    @endif
    
    <form action="./process" class="object-sm" method="POST">
        <legend>STUDENT FORM</legend>
        <div class="input-group mb-3">
            <span class="input-group-text">Student Name</span>
            <input type="text" class="form-control" name="student_name" id="student_name">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Student Lastname</span>
            <input type="text" class="form-control" name="student_lastname" id="student_lastname">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Student Surname</span>
            <input type="text" class="form-control" name="student_surname" id="student_surname">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Group</span>
            <input type="text" class="form-control" name="group" id="group">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Grade</span>
            <input type="text" class="form-control" name="grade" id="grade">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Career</span>
            <input type="text" class="form-control" name="career" id="career">
        </div>
        <div class="text-center">
            <input type="submit" name="submit" value="Submit" class="btn btn-success">
        </div>
    </form>
    <script src={{ asset('bootstrap\js\bootstrap.min.js') }}></script>
</body>
</html>