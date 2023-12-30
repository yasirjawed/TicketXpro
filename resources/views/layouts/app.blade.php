<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keyword')">
    <meta name="author" content="Online Journalism">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <link href="{{ asset('assets/css/styles.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.theme.default.min.css')}}" rel="stylesheet">
    <style>
        *{
    box-sizing: border-box;
}
html, body {

    height: 100%;
    width: 100%;
    /* margin: 0;
    padding: 0; */
      /* overflow-x: hidden; */
      /* overflow-y: scroll; */
      /* display: -webkit-box; */
      /* white-space: nowrap; */

}
body {
  font-family: 'Varela Round', sans-serif;
    /* background: #fff; */
    padding: 0;
    background-color:#ddd;
    margin: 0;
}
h1{
    text-align: center;
    padding-top: 30px;
}
.navbar {
    background-color: white;
    width: 100%;
    height: 60px;
    position: fixed;
    z-index: 10;
}
.main {
    height: 100%;
    margin-top: 60px;
    padding: 10px 50px;
}
#sidebarMenu {
    height: 100%;
    padding-bottom: 90px;
    position: fixed;
    left: 0;
    top: 0;
    width: 330px;
    overflow:scroll;
    margin-top: 60px;
    transform: translateX(-330px);
    transition: transform 250ms ease-in-out;
    background: white;
    z-index: 100;
    color: black;
}
.menu{
  list-style: none;
    margin:0;
    padding:0;
}
.menu li{
    border-bottom: 2px solid rgba(121, 7, 7, 0.1);
}
.menu li a{
    color: black;
    display: block;
    padding: 20px;
    text-transform: uppercase;
    font-weight: bold;
    text-decoration: none;
}

.menu li a:hover{
    color: rgb(185, 26, 26)
}
.menu2{
  list-style: none;
    margin:0;
    padding:0;
}
.menu2 li a{
    color: black;
    display: block;
    padding:15px;
    font-size: 12px;
    text-transform: uppercase;
    font-weight: bold;
    text-decoration: none;
}

.menu2 li a:hover{
    color: rgb(185, 26, 26)
}
#openSidebarMenu:checked ~ #sidebarMenu {
    transform: translateX(0);
}

input#openSidebarMenu{
    display: none;

}
.sidebarIconToggle {
  height: 22px;
    width: 22px;
    position: absolute;
    z-index: 99;
    top: 22px;
    left: 15px;
    transition: all 0.3s;
    cursor: pointer;

}
.spinner {
    height: 3px;
    background-color: #df5b57;
    transition: all 0.3s;
}
.spinner.middle ,
.spinner.bottom{
    margin-top: 3px;
}
#openSidebarMenu:checked ~ .sidebarIconToggle > .spinner.middle {
    opacity: 0;
}
#openSidebarMenu:checked ~ .sidebarIconToggle > .spinner.top {
    transform: rotate(135deg);
    margin-top: 8px;
}
#openSidebarMenu:checked ~ .sidebarIconToggle > .spinner.bottom {
    transform: rotate(-135deg);
    margin-top: -9px;
}

#openSidebarMenuborder{
    border-right: 2px solid white;
}
.header2{
    display: flex;
    justify-content: space-between;
}
.navbar-nav.navbar-center {
    position: absolute;
    left: 50%;
    transform: translatex(-50%);
  }
  .button-nav{
    position: absolute;
    left: 80%;
    transform: translatex(-50%);

    border: 2px solid #df5b57;
  }
  .button-nav2{
    position: absolute;
    left: 90%;
    transform: translatex(-50%);

    border: 2px solid #df5b57;
  }
  .button-nav:hover{
    color: white;
    font-weight: bold;
}
.button-nav2:hover{
    color: white;
    font-weight: bold;
}
.button-nav a{
text-decoration: none;
color: #df5b57;

}
.button-nav2 a{
text-decoration: none;
color: #df5b57;

}

.button-nav a:hover{
color: white;
font-weight: bold;
}
.button-nav2 a:hover{
color: white;
font-weight: bold;
}

  .navbar-nav li a:hover{
color: white;
font-weight: bold
  }
  .navbar-nav li a{
color: rgb(117, 115, 115);
}
#main-img-display2{
    width: 300px;
    float: right;
    margin: 0;
    padding: 0;
    display:block;
    line-height: 1px;
}
.navbar-logo-class{
    position: absolute;
    left: 50%;
    transform: translatex(-50%);
}
.navbar-logo-class img{
  z-index: 200;
}
#logo-navbar{
    width: 160px;
    height: 140px;
}
.card .blogs h5{
    color: black;
    height: auto !important;
    min-height:65px;
    max-height: 65px;
}
/* .card .blogs .person{

   height: 65px;
} */
.card .blogs p,h5:hover{
    color: red;
    transition: 1ms ease-in-out;
}
.bottom-container p{
/* display: flex;
justify-content: space-between; */
/* border: 2px solid black
 */
 display: flex;
 float: left;

}
.bottom-container .person{
/* display: flex;
justify-content: space-between; */
/* border: 2px solid black
 */
 display: flex;
 float: right;

}
a:link {
      text-decoration: none;70px
}
.form-container {
    width: 450px;
    border-radius: 0.75rem;
    background-color:black;
    padding: 2rem;
    color: rgba(243, 244, 246, 1);
  }

  .title {
    text-align: center;
    font-size: 1.5rem;
    line-height: 2rem;
    font-weight: 700;
  }



  .input-group {
    margin-top: 0.25rem;
    font-size: 0.875rem;
    line-height: 1.25rem;
  }

  .input-group label {
    display: block;
    color: rgba(156, 163, 175, 1);
    margin-bottom: 4px;
  }

  .input-group input {
    width: 100%;
    border-radius: 0.375rem;
    border: 1px solid rgba(55, 65, 81, 1);
    outline: 0;
    background-color: rgba(17, 24, 39, 1);
    padding: 0.75rem 1rem;
    color: rgba(243, 244, 246, 1);
  }

  .input-group input:focus {
    border-color:#df5b57;
  }

  .forgot {
    display: flex;
    justify-content: flex-end;
    font-size: 0.75rem;
    line-height: 1rem;
    color: rgba(156, 163, 175,1);
    margin: 8px 0 14px 0;
  }

  .forgot a,.signup a {
    color: rgba(243, 244, 246, 1);
    text-decoration: none;
    font-size: 14px;
  }

  .forgot a:hover, .signup a:hover {
    text-decoration: underline rgba(167, 139, 250, 1);
  }
  .button-class {

    border: 1px solid #df5b57;
  }
  .sign {
    display: block;
    width: 100%;
    background-color:black;
    padding: 0.75rem;
    text-align: center;
    color: #df5b57;
    font-family: 'Dancing Script', cursive;
    border: none;
    font-size: 25px;
    border-radius: 0.375rem;
    font-weight: 800;
  }

  .social-message {
    display: flex;
    align-items: center;
    padding-top: 1rem;
  }

  .line {
    height: 1px;
    flex: 1 1 0%;
    background-color: rgba(55, 65, 81, 1);
  }

  .social-message .message {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
    font-size: 0.875rem;
    line-height: 1.25rem;
    color: rgba(156, 163, 175, 1);
  }

  .social-icons {
    display: flex;
    justify-content: center;
  }

  .social-icons .icon {
    border-radius: 0.125rem;
    padding: 0.75rem;
    border: none;
    background-color: transparent;
    margin-left: 8px;
  }

  .social-icons .icon svg {
    height: 1.25rem;
    width: 1.25rem;
    fill: #fff;
  }

  .signup {
    text-align: center;
    font-size: 0.75rem;
    line-height: 1rem;
    color: rgba(156, 163, 175, 1);
  }
  .form-container{
    margin: 7% auto;

  }

</style>

</head>
<body>
    <div id="app">
       @include('layouts.inc.frontend-navbar')

        <main class="">
            @yield('content')
        </main>
        @include('layouts.inc.footer')

    </div>

    <script src="{{ asset('assets/js/jquery-3.6.0.min.js')}}" ></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}" ></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js')}}" ></script>
    <script>
        $('.category-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                dots:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:4
                    }
                }
            });
            // $('.owl-nav').removeClass('disabled')
    </script>
    <script>
        var lastScrollTop = 0;
      function myFunc() {
          st = $(this).scrollTop();
          if(st < lastScrollTop){
            $('#logo-navbar').hide();
            $('.hiding-case-class').show();
            } else {
            $('.hiding-case-class').hide();
            $('#logo-navbar').show();
            // console.log('down 1');
        }

        lastScrollTop = st;
    }
    window.addEventListener("scroll", function () {
    myFunc();
}, true);

</script>
@yield('scripting')
</body>
</html>
