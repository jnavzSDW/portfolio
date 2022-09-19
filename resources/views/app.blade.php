<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="https://kit.fontawesome.com/3b8f060d8f.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">
    <nav class="navbar navbar-expand navbar-dark bg-dark fixed-top" style="height: 40px">
        <div class="container">
            <a href="#header" class="navbar-brand">Navs</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="#work" class="nav-link">work</a></li>
                <li class="nav-item"><a href="#about" class="nav-link">about me</a></li>
                @auth
                    <li class="nav-item"><a href="{{ url('logout') }}" class="nav-link text-danger">Logout</a></li>
                @endauth
            </ul>
        </div>
    </nav>
    
    <div class="bg-secondary">

        {{-- header --}}
        <div class="container-fluid" id="header">
            <div class="container d-flex flex column section">
                <div class="container my-auto text-white">
                    @auth
                        <a href="" style="">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    @endauth
                    <h1 style="font-size: 5rem;">Hi I'm Navs</h1>
                    <p style="font-size: 1.6rem;">A graduate of <b>Bachelor of science in information technology</b></p>
                </div>
            </div>
        </div>
        
        <hr>
    
    
        {{-- work --}}
        <div class="container" id="work">
            <h1 class="display-4">My Work</h1>
            <div class="row justify-content-center">
                @foreach ($works as $work)
                    <div class="card col-3 m-1 clickable" style="height: 15rem" onclick="openWork('{{ $work->id }}')">
                        <div class="card-header">
                            <h1 class="card-title text-center">
                                @foreach ($work->technologies as $tech)
                                    <i class="{{ $tech->logo }}"></i>
                                @endforeach
                            </h1>
                        </div>
                        <div class="card-body d-flex">
                            <p class="text-center mx-auto my-auto" style="font-size: 1.5rem;">{{ $work->title }}</p>
                        </div>
                        
                    </div>
                @endforeach

                @auth
                    <div class="card col-3 m-1 clickable" style="background-color: rgb(168, 168, 168); height: 15rem;" onclick="addWork()">
                        <div class="card-body d-flex">
                            <h1 class="mx-auto my-auto"><i class="fa-solid fa-plus"></i></h1>
                        </div>                
                    </div>
                @endauth
            </div>

            


        </div>
        
        <hr>
    
    
        {{-- about --}}
        <div class="container" id="about">
            <h1 class="display-4">About me</h1>
            <div class="card w-75 mx-auto">
                <div class="card-body">
                    @auth
                        <a href="" style="float: right;">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    @endauth
                    <p class="my-2">
                        Hi, my name is John Arnulfo Navera
                        <br><br>
                        I have experience in Web Development specifically working with Laravel and Bootstrap. I also have basic knowledge different programming languages
                        such as C++, Java, and Php as well as implementing relational database with the use of MySQL; conducting research, gathering and analyzing data,
                        and applying IT solutions.
                    </p>
                </div>
            </div>
    
            <hr>
            
            <div class="w-75 mx-auto" id="accordion">
                <div class="d-flex w-50">
                    <div class="me-1 tabBtn"><a href="#skills" data-bs-toggle="collapse" class="btn">Skills</a></div>
                    <div class="mx-1 tabBtn"><a href="#education" data-bs-toggle="collapse" class="btn">Education</a></div>
                    <div class="mx-1 tabBtn"><a href="#experience" data-bs-toggle="collapse" class="btn">Experience</a></div>
                </div>
                <div class="bg-white p-3 collapse show accordion-container" data-bs-parent="#accordion" id="skills">
                    @auth
                        <a href="" style="float: right;">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    @endauth
                    <div class="row">
                        <div class="col">
                            <p>
                                <b>Web Development</b><br>
                                HTML <br>
                                CSS <br>
                                JavaScript<br>
                                Laravel<br>
                                Bootstrap<br>
                                MySQL <br>
                                React.js<br>
                                <br>
                            </p>
                        </div>
                        <div class="col">
                            <p>
                                <b>Programming</b><br>
                                C++<br>
                                Java<br>
                                PHP<br>
                                <br>
                            </p>
                        </div>
                        <div class="col">
                            <p>
                                <b>Soft Skills</b><br>
                                Adaptability<br>
                                Collaboration<br>
                                Communication<br>
                                Problem Solving<br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-3 collapse accordion-container" data-bs-parent="#accordion" id="education">
                    @auth
                        <a href="" style="float: right;">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    @endauth
                    <div class="d-flex">
                        <img src="{{ asset('Images/unc.png') }}" width="50px">
                        <p class="my-auto ms-3">
                            <b>Jun 2022</b><br>
                            Bachelor of Science in Information Technology
                        </p>
                    </div>
                </div>
                <div class="bg-white p-3 collapse accordion-container" data-bs-parent="#accordion" id="experience">
                    @auth
                        <a href="" style="float: right;">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    @endauth
                    <div class="d-flex mb-3">
                        <img src="Images/unc.png" width="50px">
                        <p class="my-auto ms-3">
                            <b>Jan 2018 - Mar 2018</b><br>
                            SHS work immersion - web developer
                        </p>
                    </div>
                    <div class="d-flex mb-3">
                        <img src="Images/Accenture.png" width="50px">
                        <p class="my-auto ms-3">
                            <b>Jan 2022 - Jun 2022</b><br>
                            OJT Trainee - AWS online modules
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <hr>


        {{-- Contacts --}}
        <div class="container d-flex pb-3 justify-content-center">
            <a href="https://www.facebook.com/janavera00/">
                <i class="fa-brands fa-facebook mx-2 text-black" style="font-size: 25px"></i>
            </a>
            <a href="https://www.linkedin.com/in/john-arnulfo-navera-3ab695182/">
                <i class="fa-brands fa-linkedin mx-2 text-black" style="font-size: 25px"></i>
            </a>
            <a href="https://github.com/janavera00">
                <i class="fa-brands fa-github mx-2 text-black" style="font-size: 25px"></i>
            </a>
        </div>
    </div>
    
    @include('modals.workModal')
    @include('modals.addWorkModal')
</body>
</html>