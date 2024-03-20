```html
<nav id="nav-bar-desk"> <!-- ID passed to remove desktop navbar from mobile/tablet -->
    <div class="logo">
        <img src="../../assets/images/logo04.svg" alt="Logo Illumi">
    </div>

    <div class="links-navigation">
        <ul>
            <li><a href="#">Inicio</a></li>
            <li class="menu-item-solucoes">
                <a href="#">Soluciones
                    <img src="../../assets/images/icons/arrow-down-svgrepo-com.svg" alt="">
                </a>
                <div class="submenu-solucoes">
                    <ul>
                        <li><a href="#">Software</a></li>
                        <li><a href="#">Sitios web</a></li>
                        <li><a href="#">Aplicaciones móviles</a></li>
                        <li><a href="#">Integración de sistemas</a></li>
                        <li><a href="#">Consultoría en tecnología</a></li>
                        <li><a href="#">Comercio electrónico</a></li>
                        <li><a href="#">Sistemas de gestión</a></li>
                        <li><a href="#">Juegos <span id="tag">Novedad</span></a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#aboutUS">Sobre nosotros</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Preguntas frecuentes</a></li>
            <li><a href="#workwe">Trabaja con nosotros</a></li>


            <li class="menu-item-solucoes">
                <a href="#" id="lang-pt">
                    <span class="flag"> &#x1F1EA;&#x1F1F8;</span>
                    <span class="language"> Español</span>
                    <img class="arrow" src="../../assets/images/icons/arrow-down-svgrepo-com.svg" alt="">
                </a>
                <div class="submenu-solucoes">
                    <ul>
                        <li><a href="../../pages/en/index.php" id="lang-en"><span class="flag"> &#x1F1FA;&#x1F1F8; </span> Inglés</a></li>
                        <li><a href="../../pages/index.php" id="lang-es"><span class="flag"> &#x1F1E7;&#x1F1F7; </span>Portugués </a></li>
                    </ul>
                </div>
            </li>


            <li><a href="#formulario" id="go-form">Contacto</a></li>
        </ul>
    </div>
</nav>


<!-- Mobile Nav-Bar -->
<nav class="nav-bar">
    <div class="logo">
        <img src="../../assets/images/logo04.svg" alt="Logo Illumi">
    </div>
    <div class="menu-mobile">
        <div class="box-log">
            <span class="btnAbrir" onclick="abrirNav()">&#9776;</span>
        </div>
    </div>
</nav>
```