<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- prism.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.0/themes/prism.min.css">

    <!-- Jquery -->
    <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

    <!-- custom css -->
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Chakra+Petch" rel="stylesheet">

    <!-- quill stuff -->
    <script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>

    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">

</head>
<body class="{{ $page_class }}">

<div class="container-fluid top-nav-container">

<div class="container">

    

        <div class="row navbar">

            <div class="col-sm-4">

                <ul class="nav">

                    <li class="nav-item">

                        <a href="/" class="nav-link"><h4>Ollie's Blog</h4></a>

                    </li>

                </ul>

            </div>

            <div class="col-sm-8">

                <ul class="nav">

                    <div style="width: 100%;" class="row">
                
                        <li class="nav-item col-sm-4">

                        @if (Auth::check())
                        
                            <a href="/contacts" class="nav-link">Contacts</a>
                        
                        @else 

                            <a href="/contact" class="nav-link">Contact</a>

                        @endif

                        </li>

                        <li class="nav-item col-sm-4">
                        
                            <a href="/projects" class="nav-link">Projects</a>
                        
                        </li>

                    @if (auth()->check())

                        <li class="nav-item col-sm-4">
                        
                            <a class="nav-link" href="/logout">Logout</a>
                        
                        </li>

                    @else

                        <li class="nav-item col-sm-4">
                        
                            <a class="nav-link" href="/login">Admin</a>
                        
                        </li>

                    @endif

                    </div>

                </ul>
            
            </div>

        </div>
    
    

</div>

</div>

