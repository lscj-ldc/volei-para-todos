<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="author" content="Rafael Klestoff">
        <link rel="icon" href="Imagens/favicon.png">
        <title>Vôlei Para Todos</title>
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Staatliches&display=swap" rel="stylesheet">
        
    </head>
    <body>
        <nav class="navbar">
            <div class="nav-wrapper" style="width: 80%; margin: 0 auto;">
                <a href="#" class="brand-logo hide-on-med-and-up"><img class="responsive-img" src="Imagens/LogoS.png" style="width:65px; margin-top: 20px"></a>
                <ul class="center hide-on-med-and-down valign-wrapper" style="font-family: Staatliches, serif;">
                    <li style="width: 125px;"><img class="responsive-img logoD" src="Imagens/Logo.png"></li>
                    <li><a class="menu-link" href="#">Início</a></li>
                    <li><a class="menu-link" href="#SO">Sobre</a></li>
                    <li><a class="menu-link" href="PaginasExternas/Infos.html">Infos</a></li>
                    <li><a class="menu-link" href="#IS">Valores</a></li>
                    <li><a class="menu-link" href="#UN">Unidades</a></li>
                    <li><a class="menu-link" href="#DU">Contato</a></li>
                    <li><a target="_blank" href="PaginasExternas/Inscricao.html" class="inscricao-btn">Inscrição</a></li>
                    <li><a target="_blank" href="https://www.h10voleicamp.com.br" class="inscricao-btn">Vôlei Camp</a></li>
                </ul>
            </div>
        </nav>


        <a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="sidenav center" id="mobile-menu" style="font-family: Staatliches, serif;">
            <li><img class="responsive-img" src="Imagens/Logo.png" style="width:150px; margin-top: 25px;"></li>
            <li><a href="index.php" style="border-top: 1px #223A8F solid;">Início</a></li>
            <li><a href="#SO" style="border-top: 1px #223A8F solid;">Sobre</a></li>
            <li><a href="PaginasExternas/Infos.html">Infos</a></li>
            <li><a href="#IS">Valores</a></li>
            <li><a href="#UN">Unidades</a></li>
            <li><a href="#DU">Contato</a></li>
            <li><a target="_blank" href="PaginasExternas/Inscricao.html" class="waves-effect waves-light btn" style="background-color: #223A8F; color:#FFD204;">Inscrição</a></li>
            <li><a target="_blank" href="https://www.h10voleicamp.com.br" class="waves-effect waves-light btn" style="background-color: #223A8F; color:#FFD204;">Vôlei Camp</a></li>
        </ul>
        
        <a id="whatsapp-button" class="floating-button" target="_blank" href="https://wa.me/message/GXQCVPUNNRUTO1">
            <img id="whatsapp-icon" src="Imagens/midias/whats.png" alt="WhatsApp">
            <span id="whatsapp-text">Fale Conosco</span>
        </a>

        <div class="carousel carousel-slider hide-on-small-only" style="margin-top: 125px;">
            <a class="carousel-item" href="#two!"><img src="Imagens/Banner/BannerD1.jpg" class="desktop"></a>
            <a class="carousel-item" href="#one!"><img src="Imagens/Banner/BannerD2.jpg" class="desktop"></a>
            <a class="carousel-item" href="#three!"><img src="Imagens/Banner/BannerD3.jpg" class="desktop"></a>
        </div>

        <div class="carousel carousel-slider hide-on-med-and-up">
            <a class="carousel-item" href="#two!"><img src="Imagens/Banner/BannerM1.jpg" class="mobile"></a>
            <a class="carousel-item" href="#one!"><img src="Imagens/Banner/BannerM2.jpg" class="mobile"></a>
            <a class="carousel-item" href="#three!"><img src="Imagens/Banner/BannerM3.jpg" class="mobile"></a>
        </div>
        
        <div id="meuModal" class="modal center" style="background-color: #FFD204; color: #223A8F;">
            <div class="modal-content" style="padding: 5px;">
                <h4 style="margin:20px;"><span style="text-transform: uppercase; background-color: #223A8F; color: #FFD204; padding: 5px 10px; border-radius:25px;">Novidades 2025</span></h4>
                
                <div class="row valign-wrapper" style="margin:5px;">
                    <div class="col s12 m2 hide-on-small-only"></div>
                    <div class="col s12 m4 hide-on-small-only"><img style="padding: 5px;" class="responsive-img" src="Imagens/Diversas/ModalQuadra.jpg" width="100%;"></div>
                    <div class="col s12 m4" style="text-transform: uppercase; color:#223A8F;">
                        <h4 style="margin-bottom: 0;">Nova Unidade<br></h4>
                        <h5 style="margin-top: 0;">Turmas de segunda a quinta e sábado</h5>
                        <h5 style="margin-top: 0; background-color: #223A8F; color: #FFD204; border-radius:15px;">Brooklin</h5>
                    </div>
                    <div class="col s12 m2 hide-on-small-only"></div>
                </div>
                
                <div class="row" style="margin: 5px;">
                    <div class="col s12 m2 hide-on-small-only"></div>
                    <div class="col s12 m8 "><hr style="border: 2px solid #223A8F;"></div>
                    <div class="col s12 m2 hide-on-small-only"></div>
                </div>
                
                <div class="row valign-wrapper" style="margin: 5px;">
                    <div class="col s12 m2 hide-on-small-only"></div>
                    <div class="col s12 m4" style="text-transform: uppercase; color:#223A8F;">
                        <h5 style="margin: 0;">Vôlei Mães e Adulto Fem.<br></h5>
                        <p style="margin: 0;">Mulheres, temos um espaço dedicado a vocês</p>
                        <p style="margin-top: 0; background-color: #223A8F; color: #FFD204; border-radius:25px;">Unidades Acre/ZN, Vila Mariana e Brooklin<br> Sábado - 08h</p>
                    </div>
                    <div class="col s12 m4 hide-on-small-only"><img class="responsive-img" src="Imagens/Diversas/ModalProfs.jpg" width="100%;"></div>
                    <div class="col s12 m2 hide-on-small-only"></div>
                </div>
                
                <div class="row" style="margin: 5px;">
                    <div class="col s12 m2 hide-on-small-only"></div>
                    <div class="col s12 m8 "><hr style="border: 2px solid #223A8F;"></div>
                    <div class="col s12 m2 hide-on-small-only"></div>
                </div>
                
                <h5 style="color:#223A8F; margin: 0;">Quer fazer uma aula experimental?</h5>
                <div class="center" style="padding: 10px 0 25px 0;">
                    <a href="https://wa.me/message/GXQCVPUNNRUTO1" target="_blank">
                        <button class="centered-buttonB pulsing-text"><p style="margin: 0; padding: 0;">CLIQUE AQUI</p></button>
                    </a>
                </div>
                
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect btn-flat"><span style="background-color:#FFD204; color:#223A8F; padding:5px; border-radius:15px;"><b>FECHAR</b></span></a>
            </div>
        </div>
        
        <div id="SO" style="margin-bottom: 100px;"></div>
        <div class="LateralE" style="width:100%; margin: 0 auto; background-color:#223A8F;">
            <div class="objetivo">
                <div style="color:#FFD204; padding: 20px;">
                    <h2 style="margin-top: 0px; display: flex; align-items: center; gap: 10px;">
                        H10 ESCOLA DE VÔLEI
                        <img class="responsive-img center" src="Imagens/LogoAS.png" style="height: auto; max-height: 1em;">
                    </h2>

                    <p class="textoObjetivo" style="text-align: justify;">A H10 Escola de Vôlei é um espaço dedicado à crianças e jovens (07 a 18 anos), com o intuito de contribuir na formação esportiva, através da nossa metodologia e pilares esportivos pautados na pedagogia do esporte. Nossa missão é tornar essas crianças e jovens apaixonadas pelo esporte, através de um ambiente prazeroso, contando com profissionais especialistas na modalidade. “Um lugar para se apaixonar pelo esporte”.</p>
                </div>
                <div class="row row-objetivo">
                    <!-- Vídeo -->
                    <div class="col s12 m7 center" style="display: flex; flex-direction: column;">
                        <img class="responsive-img center" src="Imagens/Diversas/CapaVideo.png">
                    </div>

                    <!-- Texto -->
                    <div class="col s12 m5 text-objetivo" style="color:#FFD204;">
                        <h5 class="h10e10">H10 É 10</h5>
                        <ul class="browser-default" style="list-style-type: square !important; padding-left: 20px !important; margin-top:0px;">
                            <li class="textoObjetivo">Somos uma escola especializada em vôlei, pautada nos 4 pilares: gosto pela prática, desenvolvimento integral, integração da família e compromisso pedagógico.</li>
                        </ul>
                        <h5 style="margin:0;">COMPETIÇÃO</h5>
                        <ul class="browser-default" style="list-style-type: square !important; padding-left: 20px !important; margin-top:0px;">
                            <li class="textoObjetivo">A competição em nossas turmas é ambiente de aprendizagem, permitindo evolução e oportunizando momentos de crescimento no esporte!</li>
                        </ul>
                        <h5 style="margin:0;">METODOLOGIA</h5>
                        <ul class="browser-default" style="list-style-type: square !important; padding-left: 20px !important; margin-top:0px;">
                            <li class="textoObjetivo">Metodologia própria pautada em princípios da pedagogia do jogo, aumentando a compreensão e a lógica do jogo.</li>
                        </ul>
                        <h5 style="margin:0;">O QUE QUEREMOS?</h5>
                        <ul class="browser-default" style="list-style-type: square !important; padding-left: 20px !important; margin-top:0px;">
                            <li class="textoObjetivo">Promover ambientes de aprendizagem, oportunizando o esporte e seus valores à crianças e jovens.</li>
                        </ul>
                        <h5 style="margin:0;">O QUE FAZEMOS?</h5>
                        <ul class="browser-default" style="list-style-type: square !important; padding-left: 20px !important; margin-top:0px;">
                            <li class="textoObjetivo">Formar, oportunizar e desenvolver crianças e jovens através de nossos pilares esportivos.</li>
                        </ul>
                    </div>
                </div>

                <div class="row center pilaresDiv">
                    <h3 class="hide-on-small-only" style="margin-bottom:0; margin-top:0;">NOSSOS PILARES</h3>
                    <div class="row valign-wrapper publicoBase">
                        <div class="col s12 center" style="color:#223A8F;">
                            <div class="beneficios-container">
                                <div class="beneficio">
                                    <i class="small material-icons">directions_run</i>
                                    <p style="margin:0;"><b>GOSTO PELA<br>PRÁTICA</b></p>
<!--                                    <p class="valign-wrapper quadroC">Estimular o gosto pelo esporte é nosso pontapé inicial</p>-->
                                </div>
                                <div class="beneficio">
                                    <i class="small material-icons">extension</i>
                                    <p style="margin:0;"><b>DESENVOLVIMENTO<br>INTEGRAL</b></p>
<!--                                    <p class="valign-wrapper quadroC">Desenvolver crianças e jovens, contribuindo para uma formação além do esporte, através de princípios, valores e práticas positivas</p>-->
                                </div>
                                <div class="beneficio">
                                    <i class="small material-icons">group</i>
                                    <p style="margin:0;"><b>INTEGRAÇÃO<br>DA FAMÍLIA</b></p>
<!--                                    <p class="valign-wrapper quadroC">Aproximar as famílias demonstrando a importância da parentalidade no esporte</p>-->
                                </div>
                                <div class="beneficio">
                                    <i class="small material-icons">public</i>
                                    <p style="margin:0;"><b>RESPONSABILIDADE<br>SOCIAL</b></p>
<!--                                    <p class="valign-wrapper quadroC">Kit Promover o espírito de solidariedade através de ações esportivas / sociais além das quatro linhas</p>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m12">
                        <div class="card cardObjetivo">
                            <div class="row">
                                <div class="col m12 s12" style="color:#223A8F;">
                                    <h3 class="hide-on-small-only" style="text-align: center; margin-bottom: 0;">QUER MAIS INFORMAÇÕES?</h3>
                                    <h5 class="hide-on-med-and-up" style="text-align: center; margin-bottom: 0;">QUER MAIS INFORMAÇÕES?</h5>
                                    <div class="center pulse" style="padding: 10px 0 25px 0;">
                                        <a href="https://wa.me/message/GXQCVPUNNRUTO1" target="_blank">
                                            <button class="centered-buttonB pulsing-text"><p style="margin: 0; padding: 0;">CLIQUE AQUI</p></button>
                                        </a>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="LateralD">
            <h3 class="center" style="margin: 200px auto 25px auto;"><span style="border-left: #FFD204 5px solid; padding-left: 5px; color: #223A8F;">TURMAS E HORÁRIOS</span></h3>
            <div class="row center turmasFlexMacro">
                <div class="col turmasFlexPai">
                    <h5 style="color:#223A8F; margin:0;">ZONA NORTE  •  Acre Clube</h5>
                    <p style="color:#223A8F; margin:0;">Rua Água Cumprida, 257</p>
                    <div class="turmasFlex" style="background-color:#223A8F; border:#FFD204 solid 5px;">
                        <div class="Explosao agenda" style="margin: 0 auto;">
                            <div class="row valign-wrapper agendaBase">
                                <div class="col s12 center" style="color:#FFD204; padding:0;">
                                    <div class="agenda-container">
                                        <h5 style="margin-bottom:0;">TURMAS QUINTA</h5>
                                        <p style="margin-top:0;">MASCULINO E FEMININO</p>
                                        <table class="tg">
                                            <thead>
                                                <tr>
                                                    <td class="tg-clab1">HORÁRIO</td>
                                                    <td class="tg-clab1">CATEGORIA</td>
                                                    <td class="tg-clab1">IDADE</td>
                                                </tr>
                                                <tr>
                                                    <td class="tg-quxf1">09h00</td>
                                                    <td class="tg-quxf1">Sub 13</td>
                                                    <td class="tg-quxf1">10 a 12 anos</td>
                                                </tr>
                                                <tr>
                                                    <td class="tg-uqo31">09h00</td>
                                                    <td class="tg-uqo31">Sub 15</td>
                                                    <td class="tg-uqo31">13 e 14 anos</td>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                    <div class="agenda-container">
                                        <h5 style="margin-bottom:0;">TURMAS QUARTA E SEXTA</h5>
                                        <p style="margin-top:0;">MASCULINO E FEMININO</p>
                                        <table class="tg">
                                            <thead>
                                                <tr>
                                                    <td class="tg-clab1">HORÁRIO</td>
                                                    <td class="tg-clab1">CATEGORIA</td>
                                                    <td class="tg-clab1">IDADE</td>
                                                </tr>
                                                <tr>
                                                    <td class="tg-quxf1">14h00</td>
                                                    <td class="tg-quxf1">Sub 13</td>
                                                    <td class="tg-quxf1">10 a 12 anos</td>
                                                </tr>
                                                <tr>
                                                    <td class="tg-uqo31">14h00</td>
                                                    <td class="tg-uqo31">Sub 15</td>
                                                    <td class="tg-uqo31">13 e 14 anos</td>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col turmasFlexPai">
                    <h5 style="color:#223A8F; margin:0;">ZONA OESTE  •  MED Pinheiros</h5>
                    <p style="color:#223A8F; margin:0;">Rua Artur de Azevedo, nº 1</p>
                    <div class="turmasFlex" style="background-color:#FFD204; border:#223A8F solid 5px;">
                        <div class="Explosao agenda" style="margin: 0 auto;">
                            <div class="row valign-wrapper agendaBase">
                                <div class="col s12 center" style="color:#223A8F; padding:0;">
                                    <div class="agenda-container">
                                        <h5 style="margin-bottom:0;">TURMAS QUARTA</h5>
                                        <p style="margin-top:0;">MASCULINO E FEMININO</p>
                                        <table class="tg">
                                            <thead>
                                                <tr>
                                                    <td class="tg-clab2">HORÁRIO</td>
                                                    <td class="tg-clab2">CATEGORIA</td>
                                                    <td class="tg-clab2">IDADE</td>
                                                </tr>
                                                <tr>
                                                    <td class="tg-quxf2">16h30</td>
                                                    <td class="tg-quxf2">Sub 13</td>
                                                    <td class="tg-quxf2">10 a 12 anos</td>
                                                </tr>
                                                <tr>
                                                    <td class="tg-uqo32">17h30</td>
                                                    <td class="tg-uqo32">Sub 15</td>
                                                    <td class="tg-uqo32">13 e 14 anos</td>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                    <div class="agenda-container">
                                        <h5 style="margin-bottom:0;">TURMAS SEXTA</h5>
                                        <p style="margin-top:0;">MASCULINO E FEMININO</p>
                                        <table class="tg">
                                            <thead>
                                                <tr>
                                                    <td class="tg-clab2">HORÁRIO</td>
                                                    <td class="tg-clab2">CATEGORIA</td>
                                                    <td class="tg-clab2">IDADE</td>
                                                </tr>
                                                <tr>
                                                    <td class="tg-quxf2">15h00</td>
                                                    <td class="tg-quxf2">Sub 13</td>
                                                    <td class="tg-quxf2">10 a 12 anos</td>
                                                </tr>
                                                <tr>
                                                    <td class="tg-uqo32">16h00</td>
                                                    <td class="tg-uqo32">Sub 15</td>
                                                    <td class="tg-uqo32">13 e 14 anos</td>
                                                </tr>
                                                <tr>
                                                    <td class="tg-quxf2">17h00</td>
                                                    <td class="tg-quxf2">Sub 17 e Sub 19</td>
                                                    <td class="tg-quxf2">15 a 18 anos</td>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col turmasFlexPai">
                    <h5 style="color:#223A8F; margin:0;">ZONA SUL  •  V. Clementino MED</h5>
                    <p style="color:#223A8F; margin:0;">Rua Pedro de Toledo, 844</p>
                    <div class="turmasFlex" style="background-color:#223A8F; border:#FFD204 solid 5px;">
                        <div class="Explosao agenda" style="margin: 0 auto;">
                            <div class="row valign-wrapper agendaBase">
                                <div class="col s12 center" style="color:#FFD204; padding:0;">
                                    <div class="agenda-container">
                                        <h5 style="margin-bottom:0;">TURMAS SÁBADO</h5>
                                        <p style="margin-top:0;">MASCULINO E FEMININO</p>
                                        <table class="tg">
                                            <thead>
                                                <tr>
                                                    <td class="tg-clab1">HORÁRIO</td>
                                                    <td class="tg-clab1">CATEGORIA</td>
                                                    <td class="tg-clab1">IDADE</td>
                                                </tr>
                                                <tr>
                                                    <td class="tg-quxf1">08h00</td>
                                                    <td class="tg-quxf1">Vôlei Adulto Feminino</td>
                                                    <td class="tg-quxf1">35+</td>
                                                </tr>
                                                <tr>
                                                    <td class="tg-uqo31">09h00</td>
                                                    <td class="tg-uqo31">Mini Vôlei</td>
                                                    <td class="tg-uqo31">08 a 10 anos</td>
                                                </tr>
                                                <tr>
                                                    <td class="tg-quxf1">10h00</td>
                                                    <td class="tg-quxf1">Sub 13</td>
                                                    <td class="tg-quxf1">11 e 12 anos</td>
                                                </tr>
                                                <tr>
                                                    <td class="tg-uqo31">11h00</td>
                                                    <td class="tg-uqo31">Sub 15</td>
                                                    <td class="tg-uqo31">13 e 14 anos</td>
                                                </tr>
                                                <tr>
                                                    <td class="tg-quxf1">12h00</td>
                                                    <td class="tg-quxf1">Sub 17 e Sub 19</td>
                                                    <td class="tg-quxf1">15 a 18 anos</td>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col turmasFlexPai">
                    <h5 style="color:#223A8F; margin:0;">ZONA SUL  •  V. Mariana</h5>
                    <p style="color:#223A8F; margin:0;">Av. Mal. Estênio Albuquerque Lima, 401</p>
                    <div class="turmasFlex" style="background-color:#FFD204; border:#223A8F solid 5px;">
                        <div class="Explosao agenda" style="margin: 0 auto;">
                            <div class="row valign-wrapper agendaBase">
                                <div class="col s12 center" style="color:#223A8F; padding:0;">
                                    <div class="agenda-container">
                                        <h5 style="margin-bottom:0;">TURMAS TERÇA E QUINTA</h5>
                                        <p style="margin-top:0;">MASCULINO E FEMININO</p>
                                        <table class="tg">
                                            <thead>
                                                <tr>
                                                    <td class="tg-clab2">HORÁRIO</td>
                                                    <td class="tg-clab2">CATEGORIA</td>
                                                    <td class="tg-clab2">IDADE</td>
                                                </tr>
                                                <tr>
                                                    <td class="tg-quxf2">14h00</td>
                                                    <td class="tg-quxf2">Mini Vôlei</td>
                                                    <td class="tg-quxf2">08 a 10 anos</td>
                                                </tr>
                                                <tr>
                                                    <td class="tg-uqo32">15h00</td>
                                                    <td class="tg-uqo32">Sub 13</td>
                                                    <td class="tg-uqo32">11 e 12 anos</td>
                                                </tr>
                                                <tr>
                                                    <td class="tg-quxf2">16h00</td>
                                                    <td class="tg-quxf2">Sub 15</td>
                                                    <td class="tg-quxf2">13 e 14 anos</td>
                                                </tr>
                                                <tr>
                                                    <td class="tg-uqo32">17h00</td>
                                                    <td class="tg-uqo32">Sub 17 e Sub 19</td>
                                                    <td class="tg-uqo32">15 a 18 anos</td>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col turmasFlexPai">
                    <h5 style="color:#223A8F; margin:0;">ZONA SUL  •  BROOKLIN</h5>
                    <p style="color:#223A8F; margin:0;">R. Arizona, 1554</p>
                    <div class="turmasFlex" style="background-color:#223A8F; border:#FFD204 solid 5px;">
                        <div class="Explosao agenda" style="margin: 0 auto;">
                            <div class="row valign-wrapper agendaBase">
                                <div class="col s12 center" style="color:#FFD204; padding:0;">
                                    <div class="agenda-container">
                                        <h5 style="margin-bottom:0;">TURMAS SEGUNDA</h5>
                                        <p style="margin-top:0;">MASCULINO E FEMININO</p>
                                        <table class="tg">
                                            <thead>
                                                <tr>
                                                    <td class="tg-clab1">HORÁRIO</td>
                                                    <td class="tg-clab1">CATEGORIA</td>
                                                    <td class="tg-clab1">IDADE</td>
                                                </tr>
                                                <tr>
                                                    <td class="tg-quxf1">18h00 as 19h30</td>
                                                    <td class="tg-quxf1">Sub 17</td>
                                                    <td class="tg-quxf1">15 e 16 anos</td>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                    <div class="agenda-container">
                                        <h5 style="margin-bottom:0;">TURMAS TERÇA E QUINTA</h5>
                                        <p style="margin-top:0;">MASCULINO E FEMININO</p>
                                        <table class="tg">
                                            <thead>
                                                <tr>
                                                    <td class="tg-clab1">HORÁRIO</td>
                                                    <td class="tg-clab1">CATEGORIA</td>
                                                    <td class="tg-clab1">IDADE</td>
                                                </tr>
                                                <tr>
                                                    <td class="tg-quxf1">16h00</td>
                                                    <td class="tg-quxf1">Sub 13</td>
                                                    <td class="tg-quxf1">11 e 12 anos</td>
                                                </tr>
                                                <tr>
                                                    <td class="tg-uqo31">17h00</td>
                                                    <td class="tg-uqo31">Sub 15</td>
                                                    <td class="tg-uqo31">13 e 14 anos</td>
                                                </tr>
                                                <tr>
                                                    <td class="tg-quxf1">18h00 as 19h30 (apenas as terças)</td>
                                                    <td class="tg-quxf1">Vôlei 30+</td>
                                                    <td class="tg-quxf1"></td>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                    <div class="agenda-container">
                                        <h5 style="margin-bottom:0;">TURMAS SÁBADO</h5>
                                        <p style="margin-top:0;">MASCULINO E FEMININO</p>
                                        <table class="tg">
                                            <thead>
                                                <tr>
                                                    <td class="tg-clab1">HORÁRIO</td>
                                                    <td class="tg-clab1">CATEGORIA</td>
                                                    <td class="tg-clab1">IDADE</td>
                                                </tr>
                                                <tr>
                                                    <td class="tg-quxf1">07h30 as 09h00</td>
                                                    <td class="tg-quxf1">Vôlei Mães 40+</td>
                                                    <td class="tg-quxf1"></td>
                                                </tr>
                                                <tr>
                                                    <td class="tg-uqo31">11h30 as 12h30</td>
                                                    <td class="tg-uqo31">Mini Vôlei</td>
                                                    <td class="tg-uqo31">08 a 11 anos</td>
                                                </tr>
                                                <tr>
                                                    <td class="tg-quxf1">12h30 as 13h30</td>
                                                    <td class="tg-quxf1">Sub 13</td>
                                                    <td class="tg-quxf1">11 e 12 anos</td>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="Explosao NossoTime" style="background-color:#FFD204;">
            <div class="center">
                <h3 style="padding-top:30px;"><span style="border-left: #FFFFFF 5px solid; padding-left: 5px; color: #223A8F;">NOSSO TIME</span></h3>
                <p style="font-size: 1.25em;">Um time de profissionais especializados na modalidade e com ampla vivência no esporte em diferentes cenários competitivos.</p>
                <div class="row">
                    <div class="col s12 m3 hide-on-samll-only"></div>
                    <div class="col s12 m2" style="margin-bottom:25px;">
                        <img class="responsive-img" src="Imagens/Professores/1.jpg" width="60%;" style="border-radius: 5%;">
                        <h5 style="color:#223A8F; margin:0;">VALTER COSTA</h5>
                        <p style="font-size: 1em; margin:0;">CEO H10 Esportes, Professor e Gestor de Programas Esportivos</p>
                    </div>
                    <div class="col s12 m2" style="margin-bottom:25px;">
                        <img class="responsive-img" src="Imagens/Professores/2.jpg" width="60%;" style="border-radius: 5%;">
                        <h5 style="color:#223A8F; margin:0;">RICARDO AMENDOLA</h5>
                        <p style="font-size: 1em; margin:0;">Coordenador Pedagógico H10 Escola de Vôlei, Treinador São Caetano</p>
                    </div>
                    <div class="col s12 m2" style="margin-bottom:25px;">
                        <img class="responsive-img" src="Imagens/Professores/3.jpg" width="60%;" style="border-radius: 5%;">
                        <h5 style="color:#223A8F; margin:0;">GIOVANNA BRAGGION</h5>
                        <p style="font-size: 1em; margin:0;">Treinadora H10 Escola de Vôlei - Unid Pinheiros e Vila Clementino, Personal Training</p>
                    </div>
                    <div class="col s12 m3 hide-on-samll-only"></div>
                </div>
                <div class="row">
                    <div class="col s12 m3 hide-on-samll-only"></div>
                    <div class="col s12 m2" style="margin-bottom:25px;">
                        <img class="responsive-img" src="Imagens/Professores/4.jpg" width="60%;" style="border-radius: 5%;">
                        <h5 style="color:#223A8F; margin:0;">FELIPE VAZZOLER</h5>
                        <p style="font-size: 1em; margin:0;">Treinador Vôlei H10 Unid. Brooklin e Acre Clube, Graduado Ed Física - São Judas</p>
                    </div>
                    <div class="col s12 m2" style="margin-bottom:25px;">
                        <img class="responsive-img" src="Imagens/Professores/5.jpg" width="60%;" style="border-radius: 5%;">
                        <h5 style="color:#223A8F; margin:0;">DENNIS DECINA</h5>
                        <p style="font-size: 1em; margin:0;">Treinador H10 Escola de Vôlei, Professor Rio Branco e Beacon School, Graduado EEFE - USP</p>
                    </div>
                    <div class="col s12 m2" style="margin-bottom:25px;">
                        <img class="responsive-img" src="Imagens/Professores/6.jpg" width="60%;" style="border-radius: 5%;">
                        <h5 style="color:#223A8F; margin:0;">MATEUS FERREIRA</h5>
                        <p style="font-size: 1em; margin:0;">Estagiário H10 Escola de Vôlei, Graduando Ed. Física - USCS</p>
                    </div>
                    <div class="col s12 m3 hide-on-samll-only"></div>
                </div>
            </div>
        </div>
        
        <div class="Explosao">
            <div class="hide-on-small-only center" style="width: 20%; margin: 100px auto 0px auto;"><img class="responsive-img" src="Imagens/Logo.png"></div>
            <div class="hide-on-med-and-up" style="width: 75%; margin: 30px auto 0 auto;"><img class="responsive-img" src="Imagens/Logo.png"></div>
        </div>
        
        <div id="IS" style="margin-bottom: 0px;"></div>
        <div class="LateralE">
            <h3 class="center" style="margin: 100px auto 25px auto;"><span style="border-left: #FFD204 5px solid; padding-left: 5px; color: #223A8F;">PLANOS E MATRÍCULAS</span></h3>
            <p class="center" style="color: #223A8F; margin-top:0px; font-size:1.25em;">Faça uma boa escolha: ofereça esporte as crianças e jovens.<br>Agende uma aula experimental e conheça nossa escola</p>
            <div class="valign-wrapper">
                <div class="row main-container">
                    <div class="inner-div">
                        <h4 style="color:#FFD204;">AULAS 2 X POR SEMANA</h4>
                        <div class="row" style="width:80%; margin: 0 auto;">
                            <div class="col s12 m4">
                                <div style="border:#FFFFFF solid 3px; border-radius:15px;">
                                    <p style="font-size:0.5em; margin:0;">MENSAL</p>
                                    <h3 style="margin:0;">R$314,90</h3>
                                    <p style="font-size:0.5em; margin:0;">&nbsp;</p>
                                </div>
                            </div>
                            <div class="col s12 m4">
                                <div style="color:#FFD204; border:#FFD204 solid 3px; border-radius:15px;">
                                    <p style="font-size:0.5em; margin:0;">SEMESTRAL</p>
                                    <h3 style="margin:0;">R$1495,00</h3>
                                    <p style="font-size:0.5em; margin:0;">em 4x</p>
                                </div>
                            </div>
                            <div class="col s12 m4">
                                <div style="color:#FFD204; border:#FFD204 solid 3px; border-radius:15px;">
                                    <p style="font-size:0.5em; margin:0;">ANUAL</p>
                                    <h3 style="margin:0;">R$2890,00</h3>
                                    <p style="font-size:0.5em; margin:0;">em 5x</p>
                                </div>
                            </div>
                        </div>
                        <h5>Taxa de Matrícula: R$100,00</h5>
                        <h5 style="color:#FFD204;">Planos semestrais com validade de fevereiro a junho / agosto a dezembro</h5>
                    </div>

                    <div class="inner-div">
                        <h4 style="color:#FFD204;">AULAS 1 X POR SEMANA</h4>
                        <div class="row" style="width:80%; margin: 0 auto;">
                            <div class="col s12 m4">
                                <div style="border:#FFFFFF solid 3px; border-radius:15px;">
                                    <p style="font-size:0.5em; margin:0;">MENSAL</p>
                                    <h3 style="margin:0;">R$209,90</h3>
                                    <p style="font-size:0.5em; margin:0;">&nbsp;</p>
                                </div>
                            </div>
                            <div class="col s12 m4">
                                <div style="color:#FFD204; border:#FFD204 solid 3px; border-radius:15px;">
                                    <p style="font-size:0.5em; margin:0;">SEMESTRAL</p>
                                    <h3 style="margin:0;">R$975,00</h3>
                                    <p style="font-size:0.5em; margin:0;">em 3x</p>
                                </div>
                            </div>
                            <div class="col s12 m4">
                                <div style="color:#FFD204; border:#FFD204 solid 3px; border-radius:15px;">
                                    <p style="font-size:0.5em; margin:0;">ANUAL</p>
                                    <h3 style="margin:0;">R$1900,00</h3>
                                    <p style="font-size:0.5em; margin:0;">em 4x</p>
                                </div>
                            </div>
                        </div>
                        <h5>Taxa de Matrícula: R$100,00</h5>
                        <h5 style="color:#FFD204;">Planos semestrais com validade de fevereiro a junho / agosto a dezembro</h5>
                    </div>

                    <div class="inner-div">
                        <h4 style="color:#FFD204;">KIT ESPORTIVO</h4>
                        <div class="row" style="width:80%; margin: 0 auto;">
                            <div class="col s12 m4 hide-on-small-only"></div>
                            <div class="col s12 m4">
                                <div style="border:#FFFFFF solid 3px; border-radius:15px;">
                                    <h3 style="margin:0;">R$289,90</h3>
                                    <p style="font-size:0.5em; margin:0;">Parcelado em 2x no cartão</p>
                                    <p style="font-size:0.5em; margin:0;">Pago no ato da matrícula</p>
                                </div>
                            </div>
                            <div class="col s12 m4 hide-on-small-only"></div>
                        </div>
                        <h5>Kit composto por: 02 shorts, 02 camisetas (treino e jogo), 01 squeeze e 01 sacochila.</h5>
                        <h5 style="color:#FFD204;">Todos os itens são personalizados com distintivos da escola.</h5>
                    </div>

                    <div class="center pulse" style="padding: 10px 0 25px 0;">
                        <a href="PaginasExternas/Inscricao.html" target="_blank">
                            <button class="centered-buttonB pulsing-text"><p style="margin: 0; padding: 0;">CLIQUE AQUI E FAÇA SUA MATRÍCULA</p></button>
                        </a>
                    </div> 
                </div>
            </div>
        </div>
        
        <div id="UN" style="margin-bottom: 0px;"></div>
        <div class="LateralD">
            <h3 class="center" style="margin: 200px auto 25px auto;"><span style="border-left: #FFD204 5px solid; padding-left: 5px; color: #223A8F;">UNIDADES</span></h3>
            <div class="row center turmasFlexMacro">
                <div class="col turmasFlexPai">
                    <h5 style="color:#223A8F; margin:0;">ZONA NORTE  •  Acre Clube</h5>
                    <div class="turmasFlex" style="background-color:#223A8F; border:#FFD204 solid 5px;">
                        <div class="Explosao agenda" style="margin: 0 auto;">
                            <div class="row valign-wrapper agendaBase">
                                <div class="col s12 center" style="color:#FFD204; padding:0;">
                                    <div class="agenda-container">
                                        <h5 style="margin-bottom:0;">Rua Água Cumprida, 257</h5>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.5100468036226!2d-46.61830622467228!3d-23.47813137885708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef643b9718913%3A0x62af16f57f94b3a3!2sR.%20%C3%81gua%20Comprida%2C%20257%20-%20Jardim%20Franca%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2002339-040!5e0!3m2!1spt-PT!2sbr!4v1736367391707!5m2!1spt-PT!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br>
                                        <p style="font-size: 1em;">&nbsp;</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col turmasFlexPai">
                    <h5 style="color:#223A8F; margin:0;">ZONA OESTE  •  MED Pinheiros</h5>
                    <div class="turmasFlex" style="background-color:#FFD204; border:#223A8F solid 5px;">
                        <div class="Explosao agenda" style="margin: 0 auto;">
                            <div class="row valign-wrapper agendaBase">
                                <div class="col s12 center" style="color:#223A8F; padding:0;">
                                    <div class="agenda-container">
                                        <h5 style="margin-bottom:0;">Rua Artur de Azevedo, nº 1</h5>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.3292532494743!2d-46.675314424670056!3d-23.55661547880301!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce57813a4b2d71%3A0x6d3f40727e6abcc4!2sR.%20Artur%20de%20Azevedo%2C%201%20-%20Jardim%20Paulista%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2005404-010!5e0!3m2!1spt-PT!2sbr!4v1712858276113!5m2!1spt-PT!2sbr" width="100%" height="100%" style="border:none;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br>
                                        <p style="font-size: 1em;">Situada dentro do clube da MEDICINA USP, com um ginásio e estrutura esportiva.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col turmasFlexPai">
                    <h5 style="color:#223A8F; margin:0;">ZONA SUL  •  V. Clementino MED</h5>
                    <div class="turmasFlex" style="background-color:#223A8F; border:#FFD204 solid 5px;">
                        <div class="Explosao agenda" style="margin: 0 auto;">
                            <div class="row valign-wrapper agendaBase">
                                <div class="col s12 center" style="color:#FFD204; padding:0;">
                                    <div class="agenda-container">
                                        <h5 style="margin-bottom:0;">Rua Pedro de Toledo, 844</h5>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.1772615282794!2d-46.6476299246687!3d-23.5979748787746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5a24ec8923a9%3A0xc995f7200db65057!2sRua%20Pedro%20de%20Toledo%2C%20844%20-%20Vila%20Clementino%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2004039-002!5e0!3m2!1spt-PT!2sbr!4v1743344904258!5m2!1spt-PT!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br>
                                        <p style="font-size: 1em;">Ginásio Vila Clementino, estacionamento no local.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col turmasFlexPai">
                    <h5 style="color:#223A8F; margin:0;">ZONA SUL  •  V. Mariana</h5>
                    <div class="turmasFlex" style="background-color:#FFD204; border:#223A8F solid 5px;">
                        <div class="Explosao agenda" style="margin: 0 auto;">
                            <div class="row valign-wrapper agendaBase">
                                <div class="col s12 center" style="color:#223A8F; padding:0;">
                                    <div class="agenda-container">
                                        <h5 style="margin-bottom:0;">Av. Mal. Estênio Albuquerque Lima, 401</h5>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3656.289105368341!2d-46.6481131!3d-23.5939624!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5a211a66685d%3A0xc5e90931ac665338!2sR.%20Estado%20de%20Israel%2C%20860%20-%20Vila%20Clementino%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2004022-002!5e0!3m2!1spt-BR!2sbr!4v1642954229069!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:none;" allowfullscreen="" loading="lazy"></iframe><br>
                                        <p style="font-size: 1em;">Ginásio oficial, além e estacionamento no local.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col turmasFlexPai">
                    <h5 style="color:#223A8F; margin:0;">ZONA SUL  •  BROOKLIN</h5>
                    <div class="turmasFlex" style="background-color:#223A8F; border:#FFD204 solid 5px;">
                        <div class="Explosao agenda" style="margin: 0 auto;">
                            <div class="row valign-wrapper agendaBase">
                                <div class="col s12 center" style="color:#FFD204; padding:0;">
                                    <div class="agenda-container">
                                        <h5 style="margin-bottom:0;">R. Arizona, 1554</h5>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.8488551835603!2d-46.69822282466835!3d-23.609752978766597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce50cc61d1ed11%3A0x992910cf083d77bf!2sClube%20da%20Comunidade%20Brooklin!5e0!3m2!1spt-PT!2sbr!4v1743340126118!5m2!1spt-PT!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br>
                                        <p style="font-size: 1em;">&nbsp;</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="LateralD" style="background-color: #f3f4f6;">
            <div class="LocalInfo">
                <div class="row valign-wrapper" style="padding: 20px 20px 0 20px; margin-bottom: 0;">
                    <div class="col s12 m6" style="color:#000000;">
                        <h2 style="border-left: #FFD204 5px solid; padding-left: 15px; color:#223A8F;">VÔLEI CAMP • O MAIOR CAMP DE VÔLEI NAS FÉRIAS!</h2>
                        <p class="textoObjetivo"><a href="https://www.h10voleicamp.com.br" target="_blank">www.h10voleicamp.com.br</a></p>
                        <p class="textoObjetivo">Conheça essa experiência incrível, que é o H10 Vôlei Camp.</p>
                    </div>
                    <div class="col s12 m6 center">
                        &nbsp;
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col s12 m5">
                    <div style="margin-top: 25px;">
                        <video controls poster="Imagens/Diversas/CapaVideo2.jpg" style="width: 100%;">
                            <source src="Imagens/Diversas/VideoCamp2024.mp4" type="video/mp4">
                            Seu navegador não suporta o elemento de vídeo.
                        </video>
                    </div>
                </div>
                
                <div class="col s12 m7">
                    <div class="timeline">
                        <div class="timeline-item"><div class="timeline-marker"></div><div class="timeline-content"><p><b>COMO FUNCIONA?: </b>São 6 dias de treinos, atividades, clínicas, torneios e lazer, com os melhores treinadores(as) e ídolos(as). Um ambiente de muito esporte e diversão.</p></div></div>
                        <div class="timeline-item"><div class="timeline-marker"></div><div class="timeline-content"><p><b>QUEM PODE PARTICIPAR?: </b>Crianças e jovens de 11 a 17 anos, masculino e feminino, interessados em esporte e diversão nas férias. Aberto a todo(a)s interessado(a)s. Convide seus amigos e amigas!</p></div></div>
                        <div class="timeline-item"><div class="timeline-marker"></div><div class="timeline-content"><p><b>QUEM SOMOS?: </b>A H10 Esportes é uma empresa especializada em competições, viagens e acampamentos esportivos, há mais de 16 anos no cenário esportivo.</p></div></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="gallery-container LateralE" style="margin: 100px auto;">
            <div class="gallery-row">
                <div class="gallery-track">
                    <img src="Imagens/Fotos/1.JPG">
                    <img src="Imagens/Fotos/2.JPG">
                    <img src="Imagens/Fotos/3.JPG">
                    <img src="Imagens/Fotos/4.JPG">
                    <img src="Imagens/Fotos/5.JPG">
                    <img src="Imagens/Fotos/6.JPG">
                    <img src="Imagens/Fotos/7.JPG">
                    <img src="Imagens/Fotos/8.JPG">
                    <img src="Imagens/Fotos/9.JPG">
                    <img src="Imagens/Fotos/10.JPG">
                    <img src="Imagens/Fotos/11.JPG">
                    <img src="Imagens/Fotos/12.JPG">
                    <img src="Imagens/Fotos/13.JPG">
                    <img src="Imagens/Fotos/14.JPG">
                    <img src="Imagens/Fotos/15.JPG">
                    <img src="Imagens/Fotos/16.JPG">
                    <img src="Imagens/Fotos/17.JPG">
                    <img src="Imagens/Fotos/18.JPG">
                    <img src="Imagens/Fotos/19.JPG">
                    <img src="Imagens/Fotos/20.JPG">
                    <img src="Imagens/Fotos/21.JPG">
                    <img src="Imagens/Fotos/22.JPG">
                    <img src="Imagens/Fotos/23.JPG">
                    <img src="Imagens/Fotos/24.JPG">
                </div>
            </div>
            <div class="gallery-row">
                <div class="gallery-track reverse">
                    <img src="Imagens/Fotos/25.JPG">
                    <img src="Imagens/Fotos/26.JPG">
                    <img src="Imagens/Fotos/27.JPG">
                    <img src="Imagens/Fotos/28.JPG">
                    <img src="Imagens/Fotos/29.JPG">
                    <img src="Imagens/Fotos/30.JPG">
                    <img src="Imagens/Fotos/31.JPG">
                    <img src="Imagens/Fotos/32.JPG">
                    <img src="Imagens/Fotos/33.JPG">
                    <img src="Imagens/Fotos/34.JPG">
                    <img src="Imagens/Fotos/35.JPG">
                    <img src="Imagens/Fotos/36.JPG">
                    <img src="Imagens/Fotos/37.JPG">
                    <img src="Imagens/Fotos/38.JPG">
                    <img src="Imagens/Fotos/39.JPG">
                    <img src="Imagens/Fotos/40.JPG">
                    <img src="Imagens/Fotos/41.JPG">
                    <img src="Imagens/Fotos/42.JPG">
                    <img src="Imagens/Fotos/43.JPG">
                    <img src="Imagens/Fotos/44.JPG">
                    <img src="Imagens/Fotos/45.JPG">
                    <img src="Imagens/Fotos/46.JPG">
                    <img src="Imagens/Fotos/47.JPG">
                    <img src="Imagens/Fotos/48.JPG">
                </div>
            </div>
        </div>
        
        <div class="Explosao">
            <div class="center" style="background-color:#FFD204;"> 
                <h3 style="padding-top:30px;"><span style="border-left: #FFFFFF 5px solid; padding-left: 5px; color: #223A8F;">PARCEIROS</span></h3>
                <div class="center row">
                    <div class="col s12 m1 hide-on-small-only"></div>
                    <div class="col s12 m2"><a href="https://jandaia.com" target="_blank"><img class="responsive-img" src="Imagens/Parceiros/Jandaia.png" width="50%;"></a></div>
                    <div class="col s12 m2"><a href="http://h10sportscamp.com.br" target="_blank"><img class="responsive-img" src="Imagens/Parceiros/H10Sports.png" width="50%;"></a></div>
                    <div class="col s12 m2"><a href="" target="_blank"><img class="responsive-img" src="Imagens/Parceiros/H10.png" width="50%;"></a></div>
                    <div class="col s12 m2"><a href="https://www.cortclinica.com.br" target="_blank"><img class="responsive-img" src="Imagens/Parceiros/Cort.png" width="50%;"></a></div>
                    <div class="col s12 m2"><a href="https://sportz.com.br" target="_blank"><img class="responsive-img" src="Imagens/Parceiros/Sportz.png" width="50%;"></a></div>
                    <div class="col s12 m1 hide-on-small-only"></div>
                </div>
            </div>
        </div>
        
        <div id="DU" style="margin-bottom: 0px;"></div> 
        <div class="LateralD center">
            <div style="background-color:#223A8F;"> 
                <h3 style="padding-top:30px;"><span style="border-left: #FFFFFF 5px solid; padding-left: 5px; color: #FFD204;">CONTATO</span></h3>
                <p style="margin: 0; color: #FFFFFF;">Tem alguma dúdiva? Clique <a target="_blank" href="https://wa.me/message/GXQCVPUNNRUTO1">AQUI</a> para entrar em contato via Whatsapp ou nos envie um contato pelo formulário abaixo:</p>
                <div class="center row">
                    <div class="form-container">
                        <form action="PaginasExternas/Actions/Contato.php" method="post" enctype="multipart/form-data">
                            <!-- Nome completo -->
                            <div class="row">
                                <div class="input-field col s12 m12">
                                    <input name="NomeCompleto" type="text" class="validate" value="" placeholder="Nome Completo" required>
                                </div>
                                <div class="input-field col s12 m4">
                                    <input name="Email" type="Email" class="validate" value="" placeholder="E-mail" required>
                                </div>
                                <div class="input-field col s12 m4">
                                    <input name="Celular" type="Tel" class="validate" value="" placeholder="Celular (com DDD)" required>
                                </div>
                                <div class="input-field col s12 m4">
                                    <input name="Equipe" type="text" class="validate" value="" placeholder="Equipe/Colégio" required>
                                </div>
                                <div class="input-field col s12 m12">
                                    <input name="Mensagem" type="text" class="validate" value="" placeholder="Mensagem" required>
                                </div>
                            </div>
                            <!-- Botão de enviar -->
                            <button type="submit" class="btn-submit">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="LateralE">
            <div class="center" style="background-color:#f3f4f6;"> 
                <h3 style="padding-top:30px;"><span style="border-left: #FFD204 5px solid; padding-left: 5px; color: #223A8F;">PROJETOS H10</span></h3>
                <div class="center row">
                    <div class="col s12 m3 hide-on-small-only"></div>
                    <div class="col s12 m2"><a href="http://h10voleicup.com.br" target="_blank"><img class="responsive-img" src="Imagens/Logos/H10Cup.png" width="50%;"></a></div>
                    <div class="col s12 m2"><a href="" target="http://escoladabola.com.br"><img class="responsive-img" src="Imagens/Logos/LogoBola.png" width="50%;"></a></div>
                    <div class="col s12 m2"><a href="https://h10sportscamp.com.br/" target="_blank"><img class="responsive-img" src="Imagens/Logos/LogoCamps.png" width="50%;"></a></div>
                    <div class="col s12 m3 hide-on-small-only"></div>
                </div>
            </div>
        </div>

        <div>
            <div style="background-color: #223A8F; color: #FFD204; width: 100%; text-align: center; position: relative; bottom: 0%;">
                <p align="center" style="margin: 3px 0 0 0; padding: 10px 0 0 0;">
                    <a style="margin: 0 20px 0 20px;" target="_blank" href="https://www.instagram.com/h10escoladevolei"><img src="Imagens/midias/Insta.png" alt="Instagram" height="20" width="20"></a>
                    <a target="_blank" href="https://wa.me/message/GXQCVPUNNRUTO1"><img src="Imagens/midias/whats.png" alt="Instagram" height="20" width="20"></a>
                </p>
                <p align="center" style="margin: 0; padding: 0 0 20px 0; font-size: 15px; line-height: 18px;">
                    &copy; 2025 H10 Escola de Vôlei<br>
                    Todos os direitos reservados  •   Desenvolvido por <a href="https://www.instagram.com/kffdesign" target="blank" style="color: #FFFFFF;">KFF! Design</a><br>

                </p>
            </div>
        </div> 

        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="js/materialize.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var elems = document.querySelectorAll('.parallax');
                var instances = M.Parallax.init(elems);
            });
            
            document.addEventListener('DOMContentLoaded', function() {
                var elems = document.querySelectorAll('.collapsible');
                var instances = M.Collapsible.init(elems);
            });
            
            document.addEventListener('DOMContentLoaded', function() {
                var elems = document.querySelectorAll('.modal');
                var instances = M.Modal.init(elems);
            });
        </script>
        
        <script>
            document.addEventListener('DOMContentLoaded', function() {
              var elems = document.querySelectorAll('.modal');
              var instances = M.Modal.init(elems, {});

              var meuModal = document.getElementById('meuModal');
              var instance = M.Modal.getInstance(meuModal);
              instance.open();
            });
        </script>
        
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                M.Sidenav.init(document.querySelectorAll('.sidenav'));

                let desktopCarousel = document.querySelectorAll('.carousel.hide-on-small-only');
                let mobileCarousel = document.querySelectorAll('.carousel.hide-on-med-and-up');

                M.Carousel.init(desktopCarousel, {
                    fullWidth: true,
                    indicators: true,
                    duration: 500,
                });

                M.Carousel.init(mobileCarousel, {
                    fullWidth: true,
                    indicators: true,
                    duration: 500,
                });

                setInterval(() => {
                    let desktopInstance = M.Carousel.getInstance(desktopCarousel[0]);
                    desktopInstance.next();

                    let mobileInstance = M.Carousel.getInstance(mobileCarousel[0]);
                    mobileInstance.next();
                }, 5000);
            });

            window.addEventListener('scroll', function() {
                let navbar = document.querySelector('.navbar');
                if (window.scrollY > 50) {
                    navbar.classList.add('shrink');
                } else {
                    navbar.classList.remove('shrink');
                }
            });
        </script>
        
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                M.Sidenav.init(document.querySelectorAll('.sidenav'));

                let elements = document.querySelectorAll('.LateralE, .LateralD, .Explosao');
                let observer = new IntersectionObserver(entries => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('show');
                            observer.unobserve(entry.target); // Remove a observação após a primeira execução
                        }
                    });
                }, { threshold: 0.3 });

                elements.forEach(el => observer.observe(el));
            });
        </script>
        
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const track = document.querySelector('.carousel-track');
                const cards = document.querySelectorAll('.carousel-card');
                const leftArrow = document.querySelector('.left-arrow');
                const rightArrow = document.querySelector('.right-arrow');

                let currentIndex = 0;
                const totalCards = cards.length;

                // Função para determinar o número de cards visíveis com base no tamanho da tela
                function getVisibleCards() {
                    if (window.innerWidth <= 600) {
                        return 1; // Apenas 1 card visível no mobile
                    } else if (window.innerWidth <= 992) {
                        return 3; // Exibe 3 cards no tablet
                    } else {
                        return 5; // Exibe 5 cards no desktop
                    }
                }

                let visibleCards = getVisibleCards();

                // Atualiza o número de cards visíveis ao redimensionar a janela
                window.addEventListener('resize', () => {
                    visibleCards = getVisibleCards();
                    updateCarousel(); // Reajusta o carrossel no resize
                });

                function updateCarousel() {
                    const cardWidth = cards[0].offsetWidth;
                    track.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
                }

                leftArrow.addEventListener('click', () => {
                    currentIndex = (currentIndex === 0) ? totalCards - visibleCards : currentIndex - 1;
                    updateCarousel();
                });

                rightArrow.addEventListener('click', () => {
                    currentIndex = (currentIndex === totalCards - visibleCards) ? 0 : currentIndex + 1;
                    updateCarousel();
                });
            });
        </script>
        
        <script>
            document.addEventListener("DOMContentLoaded", function () {
            const button = document.getElementById("whatsapp-button");
            const icon = document.getElementById("whatsapp-icon");
            const text = document.getElementById("whatsapp-text");
            let expanded = false;

            button.addEventListener("click", function (event) {
                event.preventDefault(); // Impede o redirecionamento imediato

                if (!expanded) {
                    icon.style.width = "75px"; // Expande o botão
                    icon.style.height = "75px";
                    text.style.opacity = "1"; // Mostra o texto
                    text.style.visibility = "visible";
                    expanded = true;
                } else {
                    window.open(button.href, "_blank"); // Redireciona ao WhatsApp
                }
            });
        });
        </script>
        
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const tracks = document.querySelectorAll(".gallery-track");

                tracks.forEach(track => {
                    const images = track.querySelectorAll("img");
                    images.forEach(img => {
                        const clone = img.cloneNode(true);
                        track.appendChild(clone);
                    });
                });
            });
        </script>
        
        <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Inicializar o Sidenav do Materialize
            const sidenav = document.querySelectorAll('.sidenav');
            const instances = M.Sidenav.init(sidenav);

            // Fechar menu ao clicar nos links de âncoras
            const links = document.querySelectorAll('.sidenav a[href^="#"]'); // Seleciona links que começam com #
            links.forEach(link => {
                link.addEventListener("click", function (event) {
                    const instance = M.Sidenav.getInstance(document.getElementById("mobile-menu"));
                    instance.close(); // Fecha o menu
                });
            });
        });

        </script>
        
        <script>
        document.addEventListener("DOMContentLoaded", function() {
    const items = document.querySelectorAll(".expandable-item .item-header");

    items.forEach(header => {
        header.addEventListener("click", function() {
            const content = this.nextElementSibling;
            const icon = this.querySelector(".expand-icon");

            if (content.style.display === "block") {
                content.style.display = "none";
                icon.textContent = "▶";
            } else {
                content.style.display = "block";
                icon.textContent = "▼";
            }
        });
    });
});
        </script>
    </body>
</html>

