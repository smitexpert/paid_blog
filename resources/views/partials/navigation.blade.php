<!-- Main Menu Section -->
<section class="menu">
    <div class="container">
        <nav class="navbar navigation">
            <div class="container">
                <div class="navbar-header">
                    <h2 class="menu-title">Main Menu</h2>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
    
                </div><!-- / .navbar-header -->
    
                <!-- Navbar Links -->
                <div id="navbar" class="navbar-collapse collapse text-center">
                    <ul class="nav navbar-nav">
                        <li class="dropdown ">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="dropdown ">
                            <a href="{{ route('posts') }}">All Post</a>
                        </li>
                        <li class="dropdown ">
                            <a href="{{ route('singe') }}">Single Post</a>
                        </li>
                    </ul><!-- / .nav .navbar-nav -->
    
                </div>
                <!--/.navbar-collapse -->
            </div><!-- / .container -->
        </nav>
    </div>
</section>