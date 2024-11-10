<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
            .navbar{
                padding: 1rem;
            }

            .navbar-nav{
                gap: 2.5rem;
            }

            .logo{
                width: 80px;
                height: 60px;
            }

            .carousel-item img{
                height: 50dvh;
            }

            .article_container{
                display: flex;
            }

            .article_container img{
                width: 600px;
                height: 350px;
                margin-top: 2.5%;
            }

            .article_content{
                width: 100%;
                display: flex;
                flex-direction: column;
                margin-top: 5%;
                margin-left: 5%;
                justify-content: center;
            }
        </style>

    </head>
    <body>
     <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> <img class="logo" src="{{ asset('FunEdu.png') }}" alt="EduFun"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="justify-content-end collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu">
                        @foreach($categories as $category)
                            <li><a class="dropdown-item" href="{{ route('categories', $category->id) }}">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/writers">Writers</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Popular</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="{{ asset('c1.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="{{ asset('c2.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="{{ asset('c3.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Article -->
    @foreach($articles as $article)
    <div class="article_container" style="margin: 2.5%;">
        <img class="img-fluid img-thumbnail" src="{{$article->image}}" alt="article_cover">
        <div class="article_content">
            <h6>{{$article->title}}</h6>
            <p class="article_published">{{$article->published_date}} by {{$article->writer->name}}</p>
            <p>{{$article->description}}</p>
            <a href="#" class="mt-auto ms-auto"><button type="button" class="btn btn-primary">read more..</button></a>
        </div>
    </div>
    @endforeach

     <!-- Footer -->
     <footer class="bg-primary" style="padding: 1rem; text-align:center; color:white;">
        <h5>@EduFun 2024|Web Programming|Bryan Abraham Sunaryo|2602127721</h5>
     </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
