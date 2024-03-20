<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/index.css">
    <meta name="description" content="">
    <meta name="author" content="Marley Santos">
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="../assets/images/logo04.svg" type="image/x-icon">
    <title>Illumi | Sobre nós</title>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <img src="../assets/images/logo04.svg" alt="Logo Illumi">
            </div>

            <div class="links-navigation">
                <ul>
                    <li><a href="#">Início</a></li>
                    <li class="menu-item-solucoes">
                        <a href="#">Soluções
                            <img src="../assets/images/icons/arrow-down-svgrepo-com.svg" alt="">
                        </a>
                        <div class="submenu-solucoes">
                            <ul>
                                <li><a href="#">Solução 1</a></li>
                                <li><a href="#">Solução 2</a></li>
                                <li><a href="#">Solução 3</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">Sobre nós</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Trabalhe conosco</a></li>
                    <li><a href="#formulario">Contato</a></li>
                </ul>
            </div>

        </nav>

        <div class="image-header">
            <div class="title">
                <h1>Transformando ideias em soluções digitais.</h1>
                <span>Sua empresa, impulsionada por tecnologia.</span>
                <div class="call-to-action">
                    <a href="#">Saiba mais</a>
                </div>
            </div>
        </div>
    </header>

    <main>

    </main>

    <footer>
        <section class="social-media">
            <div class="logo-footer">
                <img src="../assets/images/logo04.svg" alt="Logo Illumi">
            </div>

            <div class="links-sociais">
                <div class="">
                    <p>Siga-nos nas redes sociais</p>
                </div>

                <div class="icones">
                    <a href="#" title="Linkedin">
                        <img src="../assets/images/icons/linkedin-svgrepo-com.png" alt="">
                    </a>

                    <a href="#" title="Instagram">
                        <img src="../assets/images/icons/instagram-svgrepo-com.png" alt="">
                    </a>

                    <a href="#" title="Facebook">
                        <img src="../assets/images/icons/facebook-svgrepo-com.png" alt="">
                    </a>

                    <a href="#" title="Twitter/X">
                        <img src="../assets/images/icons/twitter-svgrepo-com.png" alt="">
                    </a>

                    <a href="#" title="YouTube">
                        <img src="../assets/images/icons/youtube-svgrepo-com.png" alt="">
                    </a>
                </div>
            </div>
        </section>

        <div class="line-divisor"></div>

        <section>
            <div class="item-footer">

                <div class="item-footer-in">
                    <h4>Soluções</h4>
                    <ul>
                        <li><a href="#">Para juridicas</a></li>
                        <li><a href="#">Pessoas físicas</a></li>
                        <li><a href="#">Link</a></li>
                    </ul>
                </div>

                <div class="item-footer-in">
                    <h4>Entre em contato</h4>
                    <ul>
                        <li><a href="mailto:comercial@illumi.com.br"
                                title="Enviar e-mail para comercial@illumi.com.br">comercial@illumi.com.br</a></li>
                        <li><a href="tel:08001234567" title="Discar para 0800 123 4567">0800 123 4567</a></li>
                        <li><a href="tel:40028922" title="Discar para (11) 4002 8922">(11) 4002 8922</a></li>
                    </ul>
                </div>

                <div class="item-footer-in">
                    <h4>Mapa do site</h4>
                    <ul>
                        <li><a href="./index.html">Início</a></li>
                        <li><a href="#solucoes">Soluções</a></li>
                        <li><a href="#">Sobre nós</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Trabalhe conosco</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </div>

                <div class="item-footer-in">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="#">Política de Coockies</a></li>
                        <li><a href="#">Política de privacidade</a></li>
                        <li>
                            <a href="#" title="LGPD">
                                <img src="../assets/images/lgpd-selo-1.png" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <div class="line-divisor"></div>

        <section>
            <div class="copy">
                2023 &copy; Illumi Soluções Digitais LTDA – Todos os direitos reservados | CNPJ: 12.345.678/0001-11
            </div>
        </section>
    </footer>

    <div class="whatsapp-icon circle pulse">
        <a href="https://wa.me/5511957467475" target="_blank" rel="noreferrer noopener" title="WhatsApp">
            <img src="../assets/images/icons/whatsapp1.png" alt="WhatsApp">
        </a>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var navbar = document.querySelector("nav");

            window.onscroll = function () {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    navbar.classList.add("scrolled");
                } else {
                    navbar.classList.remove("scrolled");
                }
            };
        });

    </script>
</body>

</html>