<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Illumi é uma empresa de desenvolvimento de Softwares">
    <meta name="author" content=" Marley Santos | Illumi ">
    <meta name="keywords" content="Illumi, Software, Sites, Aplicativos, Tecnologia, Programação, Desenvolvimento">

    <link rel="stylesheet" type="text/css" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/libraries/slick-1.8.1/slick/slick.css">
    <link rel="stylesheet" href="../assets/libraries/slick-1.8.1/slick/slick-theme.css">
    <link rel="shortcut icon" href="../assets/images/logo04.svg" type="image/x-icon">

    <script src="https://kit.fontawesome.com/9b58b8faa9.js" crossorigin="anonymous"></script>

    <title>Illumi</title>
</head>

<body>
    <header>
        <?php include('../assets/components/navbar.php'); ?>

        <!-- Menu - Oculto para mobile -->
        <aside id="menuOculto" class="menuOculto">
            <div class="btn-fechar-caixa">
                <a href="#" class="btnFechar" onclick="fecharNav()">
                    <i class="fa-solid fa-xmark"></i>
                </a>
            </div>

            <!-- Links menu -->
            <a href="#">Início</a>
            <a href="#">Soluções</a>
            <a href="#">Softwares</a>
            <a href="#">Sites</a>
            <a href="#">Aplicativos Móveis</a>
            <a href="#">Integração de Sistemas</a>
            <a href="#">Consultoria em Tecnologia</a>
            <a href="#">E-commerce</a>
            <a href="#">Sistemas de Gerenciamento</a>
            <a href="#">Jogos</a>
        </aside>


        <div id="topo-desk" class="image-header">
            <div class="title">
                <h1>Transforme e ilumine suas ideias em soluções digitais.</h1>
                <span>Sua empresa, impulsionada por tecnologia.</span>
                <div class="call-to-action">
                    <a href="#">Saiba mais</a>
                </div>
            </div>
        </div>


        <div class="topo-header">
            <div class="image-header">
                <div class="title">
                    <h1>Transforme e ilumine suas ideias em soluções digitais.</h1>
                    <span>Sua empresa, impulsionada por tecnologia.</span>
                    <div class="call-to-action">
                        <a href="#">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <main>

        <section class="nossos-servicos">
            <div class="cards">
                <div class="cardi">
                    <div class="icon-card">
                        <img src="../assets/images/integracao.png" alt="">
                    </div>

                    <div class="title-card">
                        <h3>Integração de Sistemas</h3>
                    </div>

                    <div class="content-card">
                        <p>Oferecemos soluções de integração de sistemas para tornar sua operação mais eficiente e conectada. Nossa equipe especializada trabalha para integrar sistemas diversos, garantindo a interoperabilidade e o fluxo de dados entre eles.</p>
                    </div>
                </div>

                <div class="cardi">
                    <div class="icon-card">
                        <img src="../assets/images/dados.png" alt="">
                    </div>

                    <div class="title-card">
                        <h3>Desenvolvimento de Jogos</h3>
                    </div>

                    <div class="content-card">
                        <p>Transformamos ideias em experiências de jogo envolventes para diversas plataformas, incluindo consoles, PC e dispositivos móveis. Nossa equipe apaixonada garante qualidade, inovação e parceria para o sucesso do seu jogo. Entre em contato e torne sua visão realidade!</p>
                    </div>
                </div>

                <div class="cardi">
                    <div class="icon-card">
                        <img src="../assets/images/iphone.png" alt="">
                    </div>

                    <div class="title-card">
                        <h3>Soluções Mobile</h3>
                    </div>

                    <div class="content-card">
                        <p>Um cartão completo, moderno e gratuito pra você. E com anuidade zero. Fique no controle da
                            sua vida financeira.</p>
                    </div>
                </div>

                <div class="cardi">
                    <div class="icon-card">
                        <img src="../assets/images/codificacao-da-web.png" alt="">
                    </div>

                    <div class="title-card">
                        <h3>Desenvolvimento Web</h3>
                    </div>

                    <div class="content-card">
                        <p>Um cartão completo, moderno e gratuito pra você. E com anuidade zero. Fique no controle da
                            sua vida financeira.</p>
                    </div>
                </div>

                <div class="cardi">
                    <div class="icon-card">
                        <img src="../assets/images/servicos-de-consultor.png" alt="">
                    </div>

                    <div class="title-card">
                        <h3>Consultoria</h3>
                    </div>

                    <div class="content-card">
                        <p>Descubra nossa consultoria especializada em tecnologia. Transforme seu negócio com soluções
                            inovadoras.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="remove-paper">
            <div class="div-s">
                <h2>Tirar a sua ideia do papel <span>não</span> precisa ser difícil</h2>

                <!-- apenas para mobile e tablet copiei o código ja pronto porém coloquei mobile na class-->
                <div class="side-iage-mobile">
                    <img src="../assets/images/pexels-helena-lopes-1015568.jpg" alt="">
                </div>
                <p>Transformamos ideias em realidade digital. Descubra como podemos tornar sua visão em um software ou
                    site impressionante.</p>
                <div class="cta">
                    <a href="#">Solicite uma consultoria
                        <img src="../assets/images/icons/arrow-sm-right-svgrepo-com.svg" alt="">
                    </a>
                </div>
            </div>

            <!-- Desktop -->
            <div class="side-iage">
                <img src="../assets/images/pexels-helena-lopes-1015568.jpg" alt="">
            </div>

        </section>


        <!-- Dados -->
        <div class="title-section-dados fade-in">
            <h2>Excelência comprovada</h2>
        </div>
        <section class="dados fade-in">
            <div class="container-dados">
                <div class="dado">
                    <p id="d">+</p>
                    <span>Empresas de grande e médio porte confiam</span>
                </div>

                <div class="dado">
                    <p id="e"></p>
                    <span title="">De nossos clientes satisfeitos</span>
                </div>

                <div class="dado">
                    <p id="g"></p>
                    <span title="O Net Promoter Score (NPS) é uma métrica de satisfação do cliente que mede a disposição dos clientes a recomendarem uma empresa, produto ou serviço para outras pessoas." style="cursor:help">NPS (Net Promoter Score) de 78 pontos</span>
                </div>

                <div class="dado">
                    <p id="f"></p>
                    <span title="Percentual da nossa receita que é voltado para Pesquisa e Desenvolvimento para melhorias de nossa atuação" style="cursor: help;">Da receita voltada para P&D</span>
                </div>

                <div class="dado">
                    <p id="k">+</p>
                    <span>Clientes satisfeitos nos últimos 12 meses</span>
                </div>
            </div>
        </section>

        <section class="equipe">
            <div class="container-equipe">
                <div class="carroussels">
                    <div class="card-equipe">
                        <div><img src="" alt=""></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Está comentado por isso não aparece! -->
        <section class="cases">
            <div>
                <!--<h2>Casos de sucesso</h2>-->
            </div>

            <div class="">

            </div>
        </section>

        <section class="formulario-de-contato" id="formulario">
            <div class="imagem-form">
                <img src="../assets/images/pexels-ivan-samkov-4240503.jpg" alt="Imagem">
            </div>

            <!-- Formulário de contato -->
            <div class="form-contact">
                <form action="../../configs/sendMail.php" method="post">
                    <div class="title-form">
                        <h3>Ainda não é nosso cliente?</h3>
                        <p>Solicite mais informações</p>
                        <span>Sites corporativos, sites pessoais, aplicativos web, design, aplicações mobile,
                            etc.</span>
                    </div>

                    <div class="inputs">
                        <div class="item-form">
                            <label for="">Você já é nosso cliente?</label>
                            <select name="NossoCliente" id="" title="Nosso cliente?">
                                <option value=""></option>
                                <option value="não">Não</option>
                                <option value="sim">Sim</option>
                            </select>
                        </div>

                        <div class="item-form">
                            <label for="nome">Nome</label>
                            <input type="text" name="nomeCliente" id="nome">
                        </div>

                        <div class="item-form">
                            <label for="empresa">Nome da empresa</label>
                            <input type="text" name="nomeEmpresa" id="empresa">
                        </div>

                        <div class="item-form">
                            <label for="emailCliente">E-mail</label>
                            <input type="email" name="emailContato" id="emailCliente">
                        </div>

                        <div class="item-form">
                            <label for="contato">Telefone</label>
                            <input type="tel" name="telefoneContato" id="contato">
                        </div>

                        <div class="item-form">
                            <label for="interesse">Qual serviço você deseja informações?</label>
                            <select name="servicoInteresse" id="interesse">
                                <option value="Selecionar"></option>
                                <option value="Softwares">Softwares</option>
                                <option value="Sites">Sites</option>
                                <option value="Aplicativos Móveis">Aplicativos Móveis</option>
                                <option value="Integrações de Sistemas">Integrações de Sistemas</option>
                                <option value="Consultoria em Tecnologia">Consultoria em Tecnologia</option>
                                <option value="E-Commerce">E-Commerce</option>
                                <option value="Sistemas de Gerenciamento">Sistemas de Gerenciamento</option>
                                <option value="Desenvolvimento de Jogos">Desenvolvimento de Jogos</option>
                            </select>
                        </div>

                        <div class="item-form inverse">
                            <label for="termos">Ao clicar no botão de enviar, concordo com os <a href="#">Termos</a>
                            </label>
                            <input type="checkbox" name="concordaTermo" id="termos">
                        </div>

                        <div class="btn-submit">
                            <button type="submit">
                                Enviar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <!-- Include do Footer -->
    <?php
    include('../assets/components/footer.php');
    ?>


    <!-- Botão de WhatsApp -->
    <div class="whatsapp-icon circle pulse">
        <a href="https://wa.me/5511957467475" target="_blank" rel="noreferrer noopener" title="WhatsApp">
            <img src="../assets/images/icons/whatsapp1.png" alt="WhatsApp">
        </a>
    </div>

    <!-- JavaScripts -->
    <script type="text/javascript" src="../assets/javascript/navbar.js"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <script type="text/javascript" src="../assets/libraries/slick-1.8.1/slick/slick.min.js"></script>


    <!-- Efeito fadein da div de dados-->
    <script type="text/javascript" src="../assets/javascript/fade-in.js"></script>


    <script type="text/javascript" src="../assets/javascript/carousel.js"></script>

    <script type="text/javascript" src="../assets/javascript/menu.js"></script>

    <script>
        $(document).ready(function() {
            // Objeto com os textos em diferentes idiomas
            var languages = {
                'pt': {
                    'home': 'Início',
                    'solutions': 'Soluções',
                    'about_us': 'Sobre nós',
                    'blog': 'Blog',
                    'faq': 'FAQ',
                    'work_with_us': 'Trabalhe conosco',
                    'contact': 'Contato'
                },
                'en': {
                    'home': 'Home',
                    'solutions': 'Solutions',
                    'about_us': 'About Us',
                    'blog': 'Blog',
                    'faq': 'FAQ',
                    'work_with_us': 'Work with Us',
                    'contact': 'Contact'
                },
                'es': {
                    'home': 'Inicio',
                    'solutions': 'Soluciones',
                    'about_us': 'Sobre nosotros',
                    'blog': 'Blog',
                    'faq': 'Preguntas frecuentes',
                    'work_with_us': 'Trabaja con nosotros',
                    'contact': 'Contacto'
                }
            };

            // Função para atualizar os textos com base no idioma selecionado
            function updateLanguage(language) {
                var selectedLanguage = languages[language];
                $('[data-translate]').each(function() {
                    var key = $(this).data('translate');
                    $(this).text(selectedLanguage[key]);
                });
            }

            // Mudar o idioma quando um dos links de idioma for clicado
            $('#lang-pt, #lang-en, #lang-es').on('click', function() {
                var selectedLanguage = $(this).attr('id').split('-')[1];
                updateLanguage(selectedLanguage);
            });

            // Definir o idioma padrão
            var defaultLanguage = 'pt';
            updateLanguage(defaultLanguage);
        });
    </script>
</body>

</html>