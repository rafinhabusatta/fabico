<!-- Template name: Main-Paige -->
<?php get_header(); ?>
<div class="container-fluid">
    <div class="row bg-header">
        <div class="col-12 p-0">
            <img src="<?php bloginfo("template_directory"); ?>/assets/banner.png" alt="Imagem da fachada da Fabico" width="100%">  
        </div>
    </div>
    <div class="row mx-0 mt-3">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center text-md-left mb-0 specialBorder">Acontece na Fabico<span class=""></span></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 grid-container mt-3">
                    <div class="col-12 px-md-0 mt-3">
                        <div class="post">
                            <h2>Fabico realiza colação de grau em gabinete dos formandos do primeiro semestre de 2021</h2>
                            <!-- <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus ex non nibh pellentesque condimentum. </p> -->
                        </div>
                    </div>
                    <div class="col-12 px-md-0 mt-3">
                        <div class="post">
                            <h2>Fabico divulga resultado do edital 01/2021 da bolsa PROPG</h2>
                            <!-- <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus ex non nibh pellentesque condimentum. </p> -->
                        </div>
                    </div>
                    <div class="col-12 px-md-0 mt-3">
                        <div class="post">
                            <h2>Fabico divulga cronograma dos TCCs para o semestre 2021/2</h2>
                            <!-- <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus ex non nibh pellentesque condimentum. </p> -->
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="allNews">
                        <a href="#">visualizar todas</a>
                    </div>
                </div>
            </div>
            <!-- <div class="row mt-3">
                <div class="col-12 mb-3">
                    <h2 class="greenTitle mt-4 d-lg-none">Ações Desenvolvidas</h2>
                    <h2 class="greenTitle mt-4 d-none d-lg-block">Ações de Integração Ensino-Serviço</h2>
                </div> 
                <div class="col-12 grid-container">
                    <div class="col-12 col-md- boxCard">
                        <div class="box-sombra cardHome">
                            <a href="<?php //echo site_url(); ?>/">Manual do Aluno</a>
                        </div>
                    </div>
                    <div class="col-12 col-md- boxCard">
                        <div class="box-sombra cardHome">
                            <a href="<?php //echo site_url(); ?>/">Documentos da Unidade</a>
                        </div>
                    </div>
                    <div class="col-12 col-md- boxCard">
                        <div class="box-sombra cardHome">
                            <a href="<?php //echo site_url(); ?>/">COMGRADS</a>
                        </div>
                    </div>
                    <div class="col-12 col-md- boxCard">
                        <div class="box-sombra cardHome">
                            <a href="<?php //echo site_url(); ?>/">Serviços</a>
                        </div>
                    </div>
                    <div class="col-12 col-md- boxCard">
                        <div class="box-sombra cardHome">
                            <a href="<?php //echo site_url(); ?>/">Produção dos Alunos</a>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="row mt-lg-5">
                <div class="col-12 col-md mt-0 mt-lg-5 card-container">
                    <a href="<?php echo site_url(); ?>/" class="mt-3 mt-lg-0"><img src="<?php bloginfo("template_directory"); ?>/img/manual_aluno.png" alt="Manual do Aluno"></a>
                    <a href="<?php echo site_url(); ?>/" class="mt-3 mt-lg-0 ml-lg-3"><img src="<?php bloginfo("template_directory"); ?>/img/doc_unidades.png" alt="Documentos da Unidade"></a>
                    <a href="<?php echo site_url(); ?>/" class="mt-3 mt-lg-0 ml-lg-3"><img src="<?php bloginfo("template_directory"); ?>/img/comgrads.png" alt="COMGRADS"></a>
                    <a href="<?php echo site_url(); ?>/" class="mt-3 mt-lg-0 ml-lg-3"><img src="<?php bloginfo("template_directory"); ?>/img/servicos.png" alt="Serviços"></a>
                    <a href="<?php echo site_url(); ?>/" class="mt-3 mt-lg-0 ml-lg-3"><img src="<?php bloginfo("template_directory"); ?>/img/prod_alunos.png" alt="Produção dos Alunos"></a>
                </div>
            </div>
            
        </div>     
    </div>
    <div class="row bg-slider mt-5">
        <div class="col-12">
            <div id="carouselHome" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselHome" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselHome" data-slide-to="1"></li>
                    <li data-target="#carouselHome" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active carousel-item-style">
                        <h2>Destaques Acadêmicos</h2>
                    </div>
                    <div class="carousel-item carousel-item-style">
                        <h2>Mais Notícias</h2>
                    </div>
                    <div class="carousel-item carousel-item-style">
                        <h2><a href="https://www.ufrgs.br/bibfbc/" target="_blank">Biblioteca da Fabico</a></h2>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselHome" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselHome" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </button>
            </div>
        </div>
    </div> 
</div>
<?php get_footer(); ?>