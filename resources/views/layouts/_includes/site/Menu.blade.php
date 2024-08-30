<header class="bg-primary navbar navbar-expand-lg align-items-center w-100 position-absolute z-index-10 navbar-dark">

    <div class="position-relative container">


        <a href=#content class="skip-to-main sr-only-focusable" role=button>Skip to main content</a>
        <a class="navbar-brand mr-auto" href="{{ route('site.home') }}" aria-label="Click to go back to Homepage">
            <img width="90%"  src="/site/images/logo-hv.png" class="logo">
        </a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-expanded="false" aria-label="Toggle navigation"><span class=navbar-toggler-icon></span></button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">


                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDemos"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CPLP</a>
                    <div class="dropdown-menu d-block d-lg-table" aria-labelledby="navbarDemos">
                        <div class="row no-gutters d-flex d-lg-table-row flex-lg-nowrap mb-2">

                            <div class="row no-gutters d-lg-table-row">
                                <div class="col">

                                    <a class="dropdown-item pt-0 pb-1" href={{ route('site.about') }}>
                                        <span> Objectivos da CPLP</span>
                                    </a>

                                    <a class="dropdown-item pt-0 pb-1" href="{{ route('site.memberCountries') }}">
                                        <span>Países Membros da CPLP</span>
                                    </a>

                                </div>
                            </div>

                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarPages"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cimeira</a>
                    <div class="dropdown-menu d-block d-lg-table" aria-labelledby="navbarPages">
                        <div class="row no-gutters d-flex d-lg-table-row flex-lg-nowrap mb-2">
                            <div class="d-lg-table-cell col-6 col-md-4">
                                <div class="row no-gutters d-lg-table-row">
                                    <div class="col-6 col-md-12">
                                        <h6 class="dropdown-header text-uppercase pt-3 pb-2">Angola</h6>

                                        <a class="dropdown-item pt-0 pb-1" href={{ route('site.angola') }}>
                                            <span>Sobre Angola</span>
                                        </a>
                                        <a class="dropdown-item pt-0 pb-1" href={{ route('site.visa') }}>
                                            <span>Vistos</span>
                                        </a>

                                        <a class="dropdown-item pt-0 pb-1" href="{{ route('site.hotelList') }}">
                                            <span>Hotéis</span>
                                        </a>
                                       

                                        <a class="dropdown-item pt-0 pb-1" href="{{ route('site.listRestaurants') }}">
                                            <span>Restaurantes</span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <div class="d-lg-table-cell col-6 col-md-4">
                                <div class="row no-gutters d-lg-table-row">
                                    <div class="col-12">
                                        <h6 class="dropdown-header text-uppercase pt-3 pb-2">-</h6>

                                        <a class="dropdown-item pt-0 pb-1" href={{ route('site.schedule') }}>
                                            <span>Agenda</span>
                                        </a>

                                        <a class="dropdown-item pt-0 pb-1" href={{ route('site.docs') }}>
                                            <span>Documentos</span>
                                        </a>
                                        <a class="dropdown-item pt-0 pb-1" href={{ route('site.gallery') }}>
                                            <span>Galeria</span>
                                        </a>

                                        <a class="dropdown-item pt-0 pb-1" href={{ route('site.laceCar') }}>
                                            <span>Transportes</span>
                                        </a>
                                      
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </li>



              


                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDemos"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Saúde</a>
                    <div class="dropdown-menu d-block d-lg-table" aria-labelledby="navbarDemos">
                        <div class="row no-gutters d-flex d-lg-table-row flex-lg-nowrap mb-2">

                            <div class="row no-gutters d-lg-table-row">
                                <div class="col">
                                    <a class="dropdown-item pt-0 pb-1" href="{{ route('site.hospital') }}">
                                        <span>Hospitais</span>
                                    </a>
                                    <a class="dropdown-item pt-0 pb-1" href={{ route('site.covid19Guideline') }}>
                                        <span> Covid-19 </span>
                                    </a>

                                    <a class="dropdown-item pt-0 pb-1" href={{ route('site.smallpoxMonkey') }}>
                                        <span>Varíola dos Macacos</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </li>



                <li class=nav-item><a class="nav-link" href={{ route('site.news') }}>Notícias</a></li>

                <li class=nav-item><a class="nav-link" href={{ route('site.contact') }}>Contactos</a></li>
            </ul>

            
       
        </div>

    </div>
</header>
