<header id="header" class="header-floating" data-plugin-options="{'stickyEnabled': false, 'stickyEnableOnBoxed': false, 'stickyEnableOnMobile': false, 'stickyStartAt': 0, 'stickySetTop': '60px', 'stickyChangeLogo': false}">
    <div class="header-body">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-nav pt-1">
                            <div class="header-nav-main">
                                <nav class="wrapper-spy collapse">
                                    <ul class="nav" id="mainNav">
                                        <li>
                                            <a data-hash href="#about-me" class="nav-link text-color-dark background-color-primary">
                                                <i class="icon-home icons"></i>
                                                <span class="custom-tooltip">Sobre mi</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-hash href="#experience" class="nav-link text-color-dark background-color-primary">
                                                <i class="icon-eye icons"></i>
                                                <span class="custom-tooltip">Experiencia</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-hash href="#education" class="nav-link text-color-dark background-color-primary">
                                                <i class="icon-graduation icons"></i>
                                                <span class="custom-tooltip">Educación</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-hash href="#skills" class="nav-link text-color-dark background-color-primary">
                                                <i class="icon-briefcase icons"></i>
                                                <span class="custom-tooltip">Habilidades</span>
                                            </a>
                                        </li>
                                        @if ($configuracion->mostrar_portafolio=='SI')
                                        <li>
                                            <a data-hash href="#portfolio" class="nav-link text-color-dark background-color-primary">
                                                <i class="icon-diamond icons"></i>
                                                <span class="custom-tooltip">Portafolio</span>
                                            </a>
                                        </li>
                                        @endif
                                        @if ($configuracion->mostrar_recomendaciones=='SI')
                                        <li>
                                            <a data-hash href="#recommendations" class="nav-link text-color-dark background-color-primary">
                                                <i class="icon-pencil icons"></i>
                                                <span class="custom-tooltip">Recommendaciones</span>
                                            </a>
                                        </li>
                                        @endif
                                        @if ($configuracion->mostrar_blog=='SI')
                                        <li>
                                            <a data-hash href="#blog" class="nav-link text-color-dark background-color-primary">
                                                <i class="icon-bubbles icons"></i>
                                                <span class="custom-tooltip">Blog</span>
                                            </a>
                                        </li>
                                        @endif
                                        <li>
                                            <a data-hash href="#say-hello" class="nav-link text-color-dark background-color-primary">
                                                <i class="icon-envelope-open icons"></i>
                                                <span class="custom-tooltip">Contactame</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
