<div class="golbal-navbar">

    <nav class="navbar navbar-expand-lg" style="background-color: #000000;width: 100%">


        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <ul class="navbar-nav navbar-center mr-auto hiding-case-class" style="">
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/aboutus')}}">About Us <span class="sr-only"></span></a>
              </li>
            {{-- <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Contact Us<span class="sr-only"></span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">About Us<span class="sr-only"></span></a>
              </li> --}}


          </ul>

          <a class="navbar-brand navbar-logo-class" href="#"><img src="{{url('images/applogo.png')}}" id="logo-navbar" class="image-fluid" style="display:none"></a>
            @if (Auth::check())

                <button type="button" class="btn  button-nav" ><a href="/{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="">Logout</a></button>
                <form action="{{route('logout')}}" id="logout-form" class="d-none" method="post">
                    @csrf
                </form>

                @if (Auth::user()->role_as=='2')
                    <button type="button" class="btn  button-nav2" ><a href="{{url('admin/dashboard')}}" style="">Dashboard</a></button>
                @elseif(Auth::user()->role_as=='1')
                <button type="button" class="btn  button-nav2" ><a href="{{url('journalist/dashboard')}}" style="">Dashboard</a></button>
                @else
                @endif
            @else
                <button type="button" class="btn  button-nav" ><a href="{{url('/login')}}" style="">Login / Signup</a></button>
            @endif




        </div>
      </nav>
      <input type="checkbox" id="openSidebarMenu">
      <label for="openSidebarMenu" class="sidebarIconToggle" style="position:fixed">
          <div class="spinner top"></div>
          <div class="spinner middle"></div>
          <div class="spinner bottom"></div>
      </label>
      <div id="sidebarMenu">
          <ul class="menu">
            <li style=""><a  href="{{url('/aboutus')}}">About Us<i class="fa-solid fa-chevron-right" style="color: #c62a2a;text-align:end;float: right "></i></a></li>

              {{-- <li style=""><a  href="{{url('/')}}">Home<i class="fa-solid fa-chevron-right" style="color: #c62a2a;text-align:end;float: right "></i></a></li>
              <li><a  href="{{url('/correspondents')}}">Contact Us<i class="fa-solid fa-chevron-right" style="color: #c62a2a;text-align:end;float: right "></i></a></li>
              <li><a  href="{{url('/collections')}}">About US<i class="fa-solid fa-chevron-right" style="color: #c62a2a;text-align:end;float: right "></i></a></li> --}}
              {{-- <li><a  href="{{url('/listen')}}">Listen<i class="fa-solid fa-chevron-right" style="color: #c62a2a;text-align:end;float: right "></i></a></li>
              <li><a  href="{{url('/founding_principles')}}">Founding Principles<i class="fa-solid fa-chevron-right" style="color: #c62a2a;text-align:end;float: right "></i></a></li> --}}
              @if (Auth::check())

              <li><a href="/{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="">Logout</a></li>
              <form action="{{route('logout')}}" id="logout-form" class="d-none" method="post">
                  @csrf
              </form>

              @if (Auth::user()->role_as=='2')
              <li><a href="{{url('admin/dashboard')}}" style="">Dashboard</a></li>
              @elseif(Auth::user()->role_as=='1')

                   <li><a href="{{url('journalist/dashboard')}}" style="">Dashboard</a></li>
                   @else
              @endif
          @else
          <li ><a href="{{url('/login')}}" style="">Login / Signup</a></li>
          @endif
            </ul>

      </div>

</div>
