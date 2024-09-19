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

    @if (isset($successDelete))
        <div class="alert alert-success">
          {{$successDelete}}
        </div>
    @endif

    

    <section class="bg-light py-3 py-md-5 py-xl-8">
        <div class="container overflow-hidden">
            <div class="row gy-4 gy-lg-0 gx-xxl-5">
                @foreach ($students as $student)
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
                      <div class="card-body p-0">
                        <figure class="m-0 p-0">
                          <img class="img-fluid" loading="lazy" src="./assets/img/team-img-1.jpg" alt="{{$student->student_name}}">
                          <figcaption class="m-0 p-4">
                            <h4 class="mb-1">{{$student->student_name}} {{$student->student_lastname}} {{$student->student_surname}}</h4>
                            <p class="text-secondary mb-0">{{$student->career}}</p>
                            <form action="{{ url('/api/delete', ['id'=>$student->id]) }}" method="POST">
                              <input type="submit" value="Delete" class="btn btn-success">
                              @method('delete')
                              @csrf
                            </form>
                          </figcaption>
                        </figure>
                      </div>
                    </div>
                  </div>
                @endforeach
            </div>
        </div>
      </section>

    <script src={{ asset('bootstrap\js\bootstrap.min.js') }}></script>
</body>
</html>
