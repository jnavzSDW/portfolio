<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">
    <nav class="navbar navbar-expand navbar-dark bg-dark fixed-top" style="height: 40px">
        <div class="container">
            <a href="#header" class="navbar-brand">Navs</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="#work" class="nav-link">work</a></li>
                <li class="nav-item"><a href="#about" class="nav-link">about me</a></li>
            </ul>
        </div>
    </nav>
    
    <div class="bg-secondary">

        {{-- header --}}
        <div class="container-fluid" id="header">
            <div class="container d-flex flex column section">
                <div class="container my-auto text-white">
                    <h1 style="font-size: 5rem;">Hi I'm Navs</h1>
                    <p style="font-size: 1.6rem;">A graduate of <b>Bachelor of science in information technology</b></p>
                </div>
            </div>
        </div>
        
        <hr>
    
    
        {{-- work --}}
        <div class="container" id="work">
            <h1 class="display-4">My Work</h1>
            <div class="card myWorks" style="width: calc(100vw / 5);" onclick="openWork()">
                <div class="card-header">
                    <h1 class="card-title text-center">
                        <img src="{{ asset('Images/laravel.svg') }}" alt="" height="30px">
                    </h1>
                </div>
                <div class="card-body">
                    <p class="text-center" style="font-size: 1.5rem;">(Capstone) Surveying firm's Project Management System</p>
                </div>
                <button data-bs-toggle="modal" data-bs-target="#mywork" id="openWork" hidden></button>
            </div>
        </div>
        <!-- work Modal -->
        <div class="modal" id="mywork">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-dark">
                        <h1 class="text-white modal-title">SProMAp</h1>
                    </div>
                    <div class="modal-body overflow-auto" style="height: 80vh; font-size: 1.2rem;">
                        <h1>Description</h1>
                        <p class="ms-4">
                            <b>Suvery Project Management Application</b> is a project management application for Surveying Firms. <br><br>
                            The application aims to help surveying firms in managing their projects along with the tasks and documents associated with those projects.<br><br>
                            Users can add their clients, the projects for those clients, and the documents for the projects. certain users can also use the app to schedule
                            task for a specific project and assign employees to work on that task.
                        </p>

                        <hr>


                        <div class="my-4">
                            <h1>Tech Stack</h1>
                            <div class="d-flex justify-content-around">
                                <div class="text-center">
                                    <img src="{{ asset('Images/laravel.svg') }}" alt="" height="50px">
                                    <p>Laravel 9</p>
                                </div>
                                <div class="text-center">
                                    <img src="{{ asset('Images/html5.svg') }}" alt="" height="50px">
                                    <p>HTML 5</p>
                                </div>
                                <div class="text-center">
                                    <img src="{{ asset('Images/bootstrap.svg') }}" alt="" height="50px">
                                    <p>Bootstrap 5</p>
                                </div>
                                <div class="text-center">
                                    <img src="{{ asset('Images/js.svg') }}" alt="" height="50px">
                                    <p>JavaScript</p>
                                </div>
                            </div>
                        </div>


                        <hr>
                        <h1>Images</h1>
                        <div class="d-flex flex-column justify-content-around">
                            <img src="{{ asset('Images/work1.png') }}Images/work1.png" class="border mx-auto my-2" width="80%">
                            <img src="{{ asset('Images/work2.png') }}" class="border mx-auto my-2" width="80%">
                            <img src="{{ asset('Images/work3.png') }}" class="border mx-auto my-2" width="80%">
                            <img src="{{ asset('Images/work4.png') }}" class="border mx-auto my-2" width="80%">
                            <img src="{{ asset('Images/work5.png') }}" class="border mx-auto my-2" width="80%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    
    
        {{-- about --}}
        <div class="container" id="about">
            <h1 class="display-4">About me</h1>
            <div class="card w-75 mx-auto">
                <div class="card-body">
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
                    <div class="d-flex">
                        <img src="{{ asset('Images/unc.png') }}" width="50px">
                        <p class="my-auto ms-3">
                            <b>Jun 2022</b><br>
                            Bachelor of Science in Information Technology
                        </p>
                    </div>
                </div>
                <div class="bg-white p-3 collapse accordion-container" data-bs-parent="#accordion" id="experience">
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
                <img src="{{ asset('Images/facebook.svg') }}" class="mx-2" height="20px">
            </a>
            <a href="https://www.linkedin.com/in/john-arnulfo-navera-3ab695182/">
                <img src="{{ asset('Images/linkedin.svg') }}" class="mx-2" height="20px">
            </a>
            <a href="https://github.com/janavera00">
                <img src="{{ asset('Images/github.svg') }}" class="mx-2" height="20px">
            </a>
        </div>
    </div>
    

</body>
</html>