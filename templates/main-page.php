<!-- Template name: Main-Paige -->
<?php get_header(); ?>
<div class="container-fluid">
  <!-- <div class="row">
    <div class="col-12 px-0 home-header">
       <img src="<?php bloginfo("template_directory"); ?>/assets/banner.jpg" alt="Imagem da fachada da Fabico" width="100%">
    </div>
  </div> -->
  <div class="row mx-0">
    <div class="col-12 px-0">
      <div class="row bg-slider">
        <div class="col-12"></div>
      </div>
      <!-- bg-slider -->
      <div class="row carousel-content">
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
                <h2>Mural de Oportunidades</h2>
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
      </div> <!-- /bg-slider -->
      <div class="row bg-blue">
        <!-- apresentação -->
        <div class="row bloco-container apresentacao">
          <div class="col-12">
            <h2 class="title-home">Desde 1970 formando alunos na UFRGS.</h2>
            <p class="text-justify">
              A Faculdade de Biblioteconomia e Comunicação (Fabico) foi criada em 1970. Possui, atualmente, sete cursos de graduação: Arquivologia, Biblioteconomia, Biblioteconomia EAD, Jornalismo, Museologia, Publicidade & Propaganda e Relações Públicas, administrados pelos departamentos de Ciências da Informação (DCI) e de Comunicação (DECOM).

              A Unidade possui 18 núcleos e laboratórios para desenvolvimento de ensino, pesquisa e extensão, além de três Programas de Pós-Graduação: PPG em Comunicação (PPGCOM), PPG em Museologia e Patrimônio (PPGMUSPA) e PPG em Ciências da Informação (PPGCIN).
            </p>
            <!-- <p class="text-justify">
              Localizada na rua Ramiro Barcelos, 2705, em Porto Alegre, a Fabico também conta com técnicos administrativos dos setores administrativo, acadêmico, de informática e da infraestrutura, além dos funcionários terceirizados dos estúdios, da segurança e da limpeza.
            </p> -->
          </div>
        </div> <!-- /apresentação -->
     </div>
      <!-- Cursos -->
      <div class="row bloco-container">
        <div class="col-12">
          <h2 class="title-home mb-5">Conheça nossos cursos</h2>
          <div class="row px-3 justify-content-between text-center">  
            <div class="col-12 col-md- col-lg-3 mx-3 card">
              <a href="<?php echo site_url(); ?>/#">Arquivologia</a>
            </div>
            <div class="col-12 col-md- col-lg-3 mx-3 card">
              <a href="<?php echo site_url(); ?>/#">Biblioteconomia</a>
            </div>
            <div class="col-12 col-md- col-lg-3 mx-3 card">
              <a href="<?php echo site_url(); ?>/#">Jornalismo</a>
            </div>
            <div class="col-12 col-md- col-lg-3 mx-3 card">
              <a href="<?php echo site_url(); ?>/#">Arquivologia</a>
            </div>
        </div>
      </div> <!-- /Cursos -->
    </div>
  </div>
</div>
<?php get_footer(); ?>