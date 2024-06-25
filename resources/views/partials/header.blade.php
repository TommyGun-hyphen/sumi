<header>

    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-fixed border white no-background bootsnav">

        <div class="container">

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#brand">
                    <img src="/assets/img/logo-light.png" class="logo logo-display" alt="Logo">
                    <img src="/assets/img/logo.png" class="logo logo-scrolled" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                    <li>
                        <a href="/" class="{{ Request::path() == '/' ? 'active' : '' }}">Home</a>
                    </li>
                    <li>
                        <a href="/#sobre-nosotras">Sobre nosotras</a>
                    </li>
                    <li>
                        <a href="/#categorias">Categorías</a>
                    </li>
                    <li>
                        <a href="/#fabricantes">Fabricantes</a>
                    </li>
                    <li>
                        <a href="/contact" class="{{ Request::path() == 'contact' ? 'active' : '' }}">Contact</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>

    </nav>
    <!-- End Navigation -->

</header>
