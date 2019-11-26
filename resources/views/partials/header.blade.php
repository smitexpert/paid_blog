<!-- Start Top Header Bar -->
<section class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12 col-sm-6">
                <!-- Site Logo -->
                <div class="logo text-left">
                    <a href="{{ route('home') }}">
                        <!-- replace logo here -->
                        <svg width="135px" height="29px" viewBox="0 0 155 29" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-size="40" font-family="AustinBold, Austin" font-weight="bold">
                                <g id="Group" transform="translate(-108.000000, -297.000000)" fill="#000000">
                                    <text id="AVIATO">
                                        <tspan x="108.94" y="325">AVIATO</tspan>
                                    </text>
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-xs-12 col-sm-6">
            <!-- Cart -->
            <ul class="top-menu text-right list-inline">
                <!-- Search -->
                <li class="dropdown search dropdown-slide">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i class="tf-ion-ios-search-strong"></i></a>
                        <ul class="dropdown-menu search-dropdown">
                            <li><form action="http://demo.themefisher.com/themefisher/aviato/post"><input type="search" class="form-control" placeholder="Search..."></form></li>
                        </ul>
                </li><!-- / Search -->
                <li class="dropdown cart-nav dropdown-slide">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i class="fa fa-user"></i></a>
                <div class="dropdown-menu cart-dropdown">
                    <div class="media">
                        <a href="#" class="btn-block">Become A Member</a>
                    </div>
                    <div class="media">
                        <a href="{{ route('me.me') }}" class="btn-block">Profile</a>
                        <a href="{{ route('new-story') }}" class="btn-block">New Story</a>
                        <a href="{{ route('me.stories.draft') }}" class="btn-block">Stories</a>
                        <a href="{{ route('me.series.draft') }}" class="btn-block">Series</a>
                        <a href="{{ route('me.stats') }}" class="btn-block">Stats</a>
                    </div>
                    <div class="media">
                        <a href="#" class="btn-block">Partner Program</a>
                    </div>
                    <div class="media">
                        <a href="#" class="btn-block">Bookmark</a>
                        <a href="#" class="btn-block">Customize Your Interest</a>
                    </div>
                    <div class="media">
                        <a href="#" class="btn-block">Settings</a>
                        <a href="#" class="btn-block">Sign out</a>
                    </div>
                </div>

                </li><!-- / Cart -->

            </ul><!-- / .nav .navbar-nav .navbar-right -->
            </div>
        </div>
    </div>
</section><!-- End Top Header Bar -->