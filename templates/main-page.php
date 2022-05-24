<!-- Template name: Main-Paige -->
<?php get_header(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 px-0 home-header">
            <!-- <img src="<?php bloginfo("template_directory"); ?>/assets/banner.jpg" alt="Imagem da fachada da Fabico" width="100%">   -->
        </div>
    </div>
    <div class="row mx-0 mt-3">
        <div class="col-12 px-0">
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
                                <h2>Acontece na Fabico</h2>
                            </div>
                            <div class="carousel-item carousel-item-style">
                                <h2>Destaques Acadêmicos</h2>
                            </div>
                            <div class="carousel-item carousel-item-style">
                                <h2>Mais Notícias</h2>
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
            <!-- <div class="row">
                <div class="col-12">
                    <h1 class="text-center text-md-left mb-0 specialBorder">Acontece na Fabico<span class=""></span></h1>
                </div>
            </div> -->
            <div class="row grid-container mt-3"> 
                <div class="col-12 px-md-0 mt-3">
                    <div class="post">
                        <h2>Acontece na Fabico</h2>
                        <a href="#" class="btn-fabico">Acessar</a>
                    </div>
                </div>
                <div class="col-12 px-md-0 mt-3">
                    <div class="post">
                        <h2>Destaques Acadêmicos</h2>
                        <a href="#" class="btn-fabico">Acessar</a>
                    </div>
                </div>
                <div class="col-12 px-md-0 mt-3">
                    <div class="post">
                        <h2>+Notícias</h2>
                        <a href="#" class="btn-fabico">Acessar</a>
                    </div>
                </div>   
                <!-- <div class="col-12 mt-3">
                    <div class="allNews">
                        <a href="#">visualizar todas</a>
                    </div>
                </div> -->
            </div>

            <!-- <div class="row mt-lg-5">
                <div class="col-12 col-md mt-0 mt-lg-5 card-container">
                    <a href="<?php echo site_url(); ?>/" class="mt-3 mt-lg-0"><img src="<?php bloginfo("template_directory"); ?>/assets/manual_aluno.svg" alt="Manual do Aluno"></a>
                    <a href="<?php echo site_url(); ?>/" class="mt-3 mt-lg-0 ml-lg-3"><img src="<?php bloginfo("template_directory"); ?>/assets/doc_unidades.svg" alt="Documentos da Unidade"></a>
                    <a href="<?php echo site_url(); ?>/" class="mt-3 mt-lg-0 ml-lg-3"><img src="<?php bloginfo("template_directory"); ?>/assets/comgrads.svg" alt="COMGRADS"></a>
                    <a href="<?php echo site_url(); ?>/" class="mt-3 mt-lg-0 ml-lg-3"><img src="<?php bloginfo("template_directory"); ?>/assets/servicos.svg" alt="Serviços"></a>
                    <a href="<?php echo site_url(); ?>/" class="mt-3 mt-lg-0 ml-lg-3"><img src="<?php bloginfo("template_directory"); ?>/assets/prod_alunos.svg" alt="Produção dos Alunos"></a>
                </div>
            </div> -->
            
        </div>     
    </div>
    
</div>
<?php get_footer(); ?>