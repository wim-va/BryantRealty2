{{-- <div class="header" style="outline: 1px solid blue;">
    <div class="">
        Header
    </div>
    <div class="auth">
        @auth
            {{ auth()->user() }}
        @endauth
    </div>

    <div class="" style="margin-bottom:  30px">
        <a style="border-bottom: 1px solid red; margin-right: 25px;" href="{{ route('agents.login') }}">Log In Agent</a>
        <a style="border-bottom: 1px solid red; margin-right: 25px;" href="{{ route('clients.login') }}">Log In Client</a>
        <a style="border-bottom: 1px solid red; margin-right: 25px;" href="{{ route('agents.logout') }}">Log Out
            Agent</a>
        <a style="border-bottom: 1px solid red; margin-right: 25px;" href="{{ route('clients.logout') }}">Log Out
            Client</a>
    </div>
</div>
 --}}

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">Real Estate<em> Website</em></a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="index.html" class="active">Home</a></li>
                        <li><a href="properties.html">Properties</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false">About</a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="about.html">About Us</a>
                                <a class="dropdown-item" href="team.html">Team</a>
                                <a class="dropdown-item" href="blog.html">Blog</a>
                                <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                                <a class="dropdown-item" href="terms.html">Terms</a>
                            </div>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
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
<!-- ***** Header Area End ***** -->
