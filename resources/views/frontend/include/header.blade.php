<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{route('index')}}" class="logo">
                        <img src="{{asset('assets/images/logo.png')}}" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Search End ***** -->
                    <div class="search-input">
                        <form id="search" action="#">
                            <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                            <i class="fa fa-search"></i>
                        </form>
                    </div>
                    <!-- ***** Search End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{route('index')}}" class="active">Home</a></li>
                        <li><a href="{{route('browse')}}">Browse</a></li>
                        <li><a href="{{route('details')}}">Details</a></li>
                        <li><a href="{{route('stream')}}">Streams</a></li>
                        @if(Auth::user())
                        <li><a href="profile.html">Profile <img src="{{asset('assets/images/profile-header.jpg')}}" alt=""></a></li>
                        @else
                        <li><a href="{{route('stream')}}">Login</a></li>
                        <!-- <li><a href="{{route('stream')}}">Registration</a></li> -->
                        @endif

                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
