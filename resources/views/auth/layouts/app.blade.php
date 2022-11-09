<!DOCTYPE html>
<html lang="en">

<head>

    <title>Bigdeal - Multi-purpopse E-commerce Html Template</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="big-deal">
    <meta name="keywords" content="big-deal">
    <meta name="author" content="big-deal">
    <link rel="icon" href="{{asset('/assets/images/favicon/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('/assets/images/favicon/favicon.png')}}" type="image/x-icon">

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

    <!--icon css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/themify.css')}}">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/slick-theme.css')}}">


    <!--Animate css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/animate.css')}}">


    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/bootstrap.css')}}">


    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/color2.css')}}" media="screen" id="color">

</head>
<body>
<!-- loader start -->
<div class="loader-wrapper">
    <div>
        <img src="../assets/images/loader.gif" alt="loader">
    </div>
</div>
<header id="stickyheader">
    <div class="mobile-fix-option"></div>
    @include('frontend.top')
</header>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>


</body>
</html>
