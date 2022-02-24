<!-- Template name: pagina-textual -->
<?php get_header(); ?>
<div class="container-fluid">
  <div class="row bg-header">
    <div class="col-12 top-header">
      <div class="row mx-0 mx-md-4 px-2">
        <div class="col-12 px-md-0">
            <h1 class="text-center mb-4"><!-- Header Title --></h1>
        </div>
      </div>
      <div class="row mx-0 mx-md-4 px-2">
        <div class="col-12 px-md-0 m-xl-auto">
          <p class="text-justify">
            <!-- Header Text -->
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
            <a href="#side-menu-id"><!-- Side Menu Title --></a>
            <ul class="menu-subsection">
              <li><a href="#side-subsection-menu-id"><!-- Side Menu Subsection Title --></a></li>
              <li><a href="#side-subsection-menu-id"><!-- Side Menu Subsection Title --></a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
    <div class="col-12 col-lg-9">
      <div id="historico">
        <div class="row bloco-container">
          <div class="col-12 col-lg-10">
            <h2 class="title"><!-- Body Section Title --></h2>
            <p class="text-justify">
              <!-- Body Section Text -->
            </p>
          </div>
        </div>
        <div class="row mt-5 bloco-container">
          <div class="col-12 col-lg-10" id="BodySubsectionid">
            <h3><!-- Body Subsection Title --></h3>
            <div class="box-sombra mt-3 p-5">
              <p class="text-justify"><!-- Body Subsection Text --></p>
            </div>
          </div>
          <div class="row equipe justify-content-around bloco-container">
            <?php 
              $args = array(
              'post_type' => 'team_adm',
              );
              $adm = new WP_Query ( $args );
            ?>
            <?php if ($adm -> have_posts()) : while ($adm -> have_posts()) : $adm -> the_post(); ?>
                <div class="col-12">
                  <h4 class="mb-3">
                      <?php echo get_field("departamento")?>
                  </h4>
                </div>
                <div class="col-12 col-md-5 col-lg-4 mb-4">
                  <div class="b-left box-equipe">
                      <p class="mb-3">
                          <?php echo get_field("cargo")?>
                      </p>
                      <h3 class="font-weight-bold">
                          <?php the_title() ?>
                      </h3>
                      <p class="mb-3">
                          Telefone: <?php echo get_field("telefone")?>
                      </p>
                      <p class="mb-3">
                          E-mail: <?php echo get_field("email")?>
                      </p>
                  </div>
                </div>
            <?php endwhile; endif; ?>
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