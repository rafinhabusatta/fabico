<!-- Template name: teste -->
<?php get_header(); ?>
<div class="container-fluid">
  <div class="row bg-header">
    <div class="col-12 top-header">
      <div class="row mx-0 mx-md-4 px-2">
        <div class="col-12 px-md-0">
            <h1 class="text-center mb-4"><?php echo get_theme_mod('header_page_title', 'A Fabico'); ?></h1>
        </div>
      </div>
      <div class="row mx-0 mx-md-4 px-2">
        <div class="col-12 px-md-0 m-xl-auto">
          <p class="text-justify">
            <?php echo get_theme_mod('header_page_text', 'A Faculdade de Biblioteconomia e Comunicação foi criada pela Portaria nº 714, assinada pelo Reitor Eduardo Zaccaro Faraco, em 1º de setembro de 1970, em sequência à Reforma Universitária implantada pela Lei nº 5540 de 1968.'); ?>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="row mx-0 mt-3">
    <div class="col-lg-3 d-none d-lg-block mt-5">
      <nav class="side-menu">
        <ul class="side-menu-ul">
          <li class="menu-item">
            <a href="#">Menu lateral 1</a>
            <ul class="menu-subsection">
              <li><a href="#">Submenu lateral 1</a></li>
              <li><a href="#">Submenu lateral 2</a></li>
            </ul>
          </li>
          <li class="menu-item"><a href="#">Menu lateral 2</a></li>
          <li class="menu-item"><a href="#">Menu lateral 3</a></li>
          <li class="menu-item"><a href="#">Menu lateral 4</a></li>
        </ul>
      </nav>
    </div>
    <div class="col-12 col-lg-9">
      <div id="historico">
        <div class="row bloco-container">
          <div class="col-12 col-lg-10">
            <h2 class="title"><?php echo get_theme_mod('header_page_title', 'Histórico'); ?></h2>
            <p class="text-justify">
              Parágrafo 1...
            </p>
            <p class="text-justify">
            Parágrafo 2...
            </p>
            <p class="text-justify">
            Parágrafo 3...
            </p>
          </div>
        </div>
        <div class="row bloco-container">
          <div class="col-12 col-lg-10" id="memorias">
            <h3>Submenu lateral 1</h3>
            <div class="box-sombra mt-3 p-5">
              <a href="<?php bloginfo("template_directory"); ?>/docs/memorias-digitais.pdf" target="_blank">Link</a>
              <p class="text-justify">
                Parágrafo 1...
              </p>
              <p class="text-justify">
                Parágrafo 2...
              </p>
            </div>
          </div>
        </div>
        <div class="row mt-5 bloco-container">
          <div class="col-12 col-lg-10" id="galeria">
            <h3>Submenu lateral 2</h3>
            <div class="container-ex-diretor mt-3">
              <h4>Karla Maria Müller - 2016-2020</h4>
              <p class="text-justify">
                Parágrafo 1...
              </p>
            </div>
            <div class="container-ex-diretor">
              <h4>Ana Maria Mielniczuk de Moura - 2012-2016</h4>
              <p class="text-justify">
                Parágrafo 2...
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>

<?php
    function create_nau($nome, $cargo){
        $html .= '<div class="col-12 col-md-5 col-lg-4 mb-4">';
        $html .= '<div class="b-left box-equipe">';
        $html .= '<h3 class="font-weight-bold">$nome</h3>';
        $html .= '<p class="mb-3">$cargo</p>';
        $html .= '</div>';
        $html .= '</div>';
    }
?>

<?php
    function create_adm($nome, $cargo, $telefone, $email, $departamento){
        $html .= '<div class="col-12 col-md-5 col-lg-4 mb-4">';
        $html .= '<div class="b-left box-equipe">';
        $html .= '<p class="mb-3">$departamento</p>';
        $html .= '<p class="mb-3">$cargo</p>';
        $html .= '<h3 class="font-weight-bold">$nome</h3>';
        $html .= '<p class="mb-3">Telefone: $telefone</p>';
        $html .= '<p class="mb-3">E-mail: $email</p>';
        $html .= '</div>';
        $html .= '</div>';
    }
?>