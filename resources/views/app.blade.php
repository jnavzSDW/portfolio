<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">
        <div class="container">
            <a href="" class="navbar-brand">Navs</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="" class="nav-link">work</a></li>
                <li class="nav-item"><a href="" class="nav-link">about me</a></li>
            </ul>
        </div>
    </nav>
    
    {{-- header --}}
    <div class="container bg-secondary d-flex flex column section" id="header">
        <div class="container my-auto">Hi I'm Navs</div>
    </div>
    
    <hr>


    {{-- work --}}
    <div class="container bg-secondary section" id="work">
        <h1 class="display-4">My Work</h1>
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Spromap</h1>
            </div>
            <div class="card-body">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt fugiat iure eaque delectus culpa, enim dolorem dolore quidem commodi at quibusdam aliquid optio nihil reprehenderit incidunt nisi fuga earum nulla?
            </div>
        </div>
    </div>

    <hr>


    {{-- about --}}
    <div class="container bg-secondary section" id="work">
        <h1 class="display-4">About me</h1>
        <div class="card">
            <div class="card-body">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima sequi tempore asperiores molestias velit! Tenetur similique natus dignissimos labore quisquam minima itaque! Recusandae ratione animi itaque modi beatae omnis rem.
            </div>
        </div>

        <hr>

        <div class="d-flex w-50">
            <div class="me-1 linkBtn"><a href="" class="link">Skills</a></div>
            <div class="mx-1 linkBtn"><a href="" class="link">Education</a></div>
            <div class="mx-1 linkBtn"><a href="" class="link">Experience</a></div>
        </div>
        <div class="bg-white p-3">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad magnam sunt, quisquam molestiae debitis aliquam eos veritatis nisi reiciendis nihil nesciunt. Voluptatibus nemo adipisci repudiandae quasi tenetur ipsam atque quis?
        </div>
    </div>
    
</body>
</html>