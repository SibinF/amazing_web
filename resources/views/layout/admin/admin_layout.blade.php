<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Starter Template - Materialize</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <style type="text/css">
        .my_container
        {
            min-height:400px;
        }
        header, main, footer {
            padding-left: 300px;
        }

        @media only screen and (max-width : 992px) {
            header, main, footer,.section, .container {
                padding-left: 120px;
            }
        }
        @media only screen and (max-width :992px) {
            .section {
                padding-left: 120px;
            }
        }

        .section {
            padding-left: 120px;
        }
    </style>
</head>
<body>
@include('layout.admin.header')
<!--  <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
   <ul class="right hide-on-med-and-down">
     <li><a href="#">Navbar Link</a></li>
   </ul>

   <ul id="nav-mobile" class="side-nav">
     <li><a href="#">Navbar Link</a></li>
   </ul>
   <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
 </div> -->

<div class="section no-pad-bot" id="index-banner">
    <div class="container my_container">

@yield('content')

    </div>
</div>

@include('layout.admin.footer')


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
<script type="text/javascript">
    $(".button-collapse").sideNav();
</script>

</body>
</html>
