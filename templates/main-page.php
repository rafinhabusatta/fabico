<!-- Template name: Pagina Inicial Fabico -->
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
      <?php require("utils/carousel_old.php"); ?>
      <div class="row bg-oxford text-white">
        <div class="col-12">
          <!-- apresentação -->
          <div class="row bloco-container">
            <div class="col-12">
              <h2 class="title-home mb-32">Desde 1970 formando alunos na UFRGS.</h2>
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
     </div>
      <!-- Cursos -->
      <div class="row bloco-container">
        <div class="col-12">
          <h2 class="title-home mb-5">Conheça nossos cursos</h2>
          <div class="row px-3 justify-content-between text-center">
            <div class="col-12 col-md- col-lg-3">
              <a href="<?php echo site_url(); ?>/#" class="card">Arquivologia</a>
            </div>
            <div class="col-12 col-md- col-lg-3">
              <a href="<?php echo site_url(); ?>/#" class="card">Biblioteconomia</a>
            </div>
            <div class="col-12 col-md- col-lg-3">
              <a href="<?php echo site_url(); ?>/#" class="card">Biblioteconomia EAD</a>
            </div>
            <div class="col-12 col-md- col-lg-3">
              <a href="<?php echo site_url(); ?>/#" class="card">Jornalismo</a>
            </div>
            <div class="col-12 col-md- col-lg-3">
              <a href="<?php echo site_url(); ?>/#" class="card">Museologia</a>
            </div>
            <div class="col-12 col-md- col-lg-3">
              <a href="<?php echo site_url(); ?>/#" class="card">Publicidade & Propaganda</a>
            </div>
            <div class="col-12 col-md- col-lg-3">
              <a href="<?php echo site_url(); ?>/#" class="card">Relações Públicas</a>
            </div>
          </div>
        </div>
      </div> <!-- /Cursos -->
      <div class="row bg-orange text-white">
        <div class="col-12">
          <!-- Biblioteca -->
          <div class="row bloco-container">
            <div class="col-12">
              <h2 class="title-home mb-32 mw-640">Conheça a Biblioteca da Fabico</h2>
              <p class="text-justify">
                Com início em 1959, hoje possui ambiente exclusivo de consulta e estudos para os estudantes da universidade, proporcionando um ambiente perfeito para estudos e pesquisa.
              </p>
              <a href="https://www.ufrgs.br/bibfbc/" target="_blank" class="btn-fabico bg-oxford">Acesse aqui</a>
            </div>
          </div> <!-- /Biblioteca -->
        </div>
      </div>
      <!-- Portal do Egresso -->
      <div class="row bloco-container">
        <div class="col-12">
          <h2 class="title-home mb-32 mw-640">Portal do Egresso</h2>
          <p class="text-justify">
            O Portal de Egressos da FABICO mantém o registro dos egressos desde a primeira turma de formados, de 1954. Sinta-se à vontade para navegar pela página e consultar!
          </p>
          <a href="https://www.ufrgs.br/bibfbc/" target="_blank" class="btn-fabico">Acesse aqui</a>
        </div>
      </div> <!-- /Portal do Egresso -->
    </div> <!-- /col-12 -->
  </div>
</div>
<?php get_footer(); ?>