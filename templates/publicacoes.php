<!-- Template name: Publicacoes -->
<?php get_header(); ?>
  <div class="container-fluid">
    <div class="row bg-header">
      <div class="col-12 top-header ">
        <h1 class="text-center mb-4 text-uppercase">Notícias</h1>
        <p class="text-center">
          Acompanhe as últimas notícias do que acontece na Fabico, Destaques acadêmicos e mais.
        </p>
      </div>
    </div>
    <!-- Acontece na Fabico -->
    <!-- <div class="row bloco-container">
      <div class="col-12">
        <h2 class="title-home">Acontece na Fabico</h2> 
      </div>
    </div> /Acontece na Fabico -->
    <div class="row publicacoes">
      <div class="col-12">
        <h2 class="title-home text-center mt-5 mb-4 pt-3">Acontece na Fabico</h2> 
      </div>
      <div class="col-12 grid-container">
        <?php 
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $aconteceFabico = new WP_Query(array(
                'post_type'=>'acontece-na-fabico', // your post type name
                'posts_per_page' => 6, // post per page
                'paged' => $paged,
            ));
        ?>
        <?php if ($aconteceFabico -> have_posts()) : while ($aconteceFabico -> have_posts()) : $aconteceFabico -> the_post(); ?> 
          <a href="<?php the_permalink(); ?>">
            <div class="post bg-oxford">
              <h2 class="text-center p-4"><?php the_title() ?></h2>
            </div>
          </a>
        <?php endwhile; endif; ?>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-12 grid-container">
        <a href="<?php echo site_url(); ?>/acontece-na-fabico" class="text-right start-3">ver todas</a>
      </div>
    </div>

    <div class="row publicacoes bg-orange mt-5 pb-5">
      <div class="col-12">
        <h2 class="title-home text-center text-white mt-5 mb-4 pt-3">Destaques Acadêmicos</h2> 
      </div>
      <div class="col-12 grid-container">
        <?php 
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $destaquesAcademicos = new WP_Query(array(
            'post_type'=>'destaques-academicos', // your post type name
            'posts_per_page' => 6, // post per page
            'paged' => $paged,
          ));
        ?>
        <?php if ($destaquesAcademicos -> have_posts()) : while ($destaquesAcademicos -> have_posts()) : $destaquesAcademicos -> the_post(); ?>
          <a href="<?php the_permalink(); ?>">
            <div class="post bg-white">
              <h2 class="text-oxford text-center p-4"><?php the_title() ?></h2>
            </div>
          </a>
        <?php endwhile; endif; ?>
      </div>
      <div class="col-12 grid-container">
        <a href="<?php echo site_url(); ?>/destaques-academicos" class="text-right start-3">ver todas</a>
      </div>
    </div>

    <div class="row publicacoes">
      <div class="col-12">
        <h2 class="title-home text-center mt-5 mb-4 pt-3">+Notícias</h2> 
      </div>
      <div class="col-12 grid-container">
        <?php 
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $maisNoticias = new WP_Query(array(
            'post_type'=>'mais-noticias', // your post type name
            'posts_per_page' => 6, // post per page
            'paged' => $paged,
          ));
        ?>
        <?php if ($maisNoticias -> have_posts()) : while ($maisNoticias -> have_posts()) : $maisNoticias -> the_post(); ?>
          <a href="<?php the_permalink(); ?>">
            <div class="post bg-oxford">
              <h2 class="text-center p-4"><?php the_title() ?></h2>
            </div>
          </a>
        <?php endwhile; endif; ?>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-12 grid-container">
        <a href="<?php echo site_url(); ?>/mais-noticias" class="text-right start-3">ver todas</a>
      </div>
    </div>

    <div class="row publicacoes bg-orange mt-5 pb-5">
      <div class="col-12">
        <h2 class="title-home text-center text-white mt-5 mb-4 pt-3">Mural de Oportunidades</h2> 
      </div>
      <div class="col-12 grid-container">
        <?php 
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $muralOportunidades = new WP_Query(array(
            'post_type'=>'mural-oportunidades', // your post type name
            'posts_per_page' => 6, // post per page
            'paged' => $paged,
          ));
        ?>
        <?php if ($muralOportunidades -> have_posts()) : while ($muralOportunidades -> have_posts()) : $muralOportunidades -> the_post(); ?>
          <a href="<?php the_permalink(); ?>">
            <div class="post bg-white">
              <h2 class="text-oxford text-center p-4"><?php the_title() ?></h2>
            </div>
          </a>
        <?php endwhile; endif; ?>
      </div>
      <!-- <div class="row text-right mt-5 w-100 mx-0">
        <div class="col-12">
          <span>Ver todas</span>
        </div>
      </div> -->
      <div class="col-12 grid-container">
        <a href="<?php echo site_url(); ?>/mural-de-oportunidades" class="text-right start-3">ver todas</a>
      </div>
    </div>   
  </div>
<?php get_footer(); ?>

<?php 
  function create_publicacao($titulo){
    $hmtl .= '<div class="post">';
    $html .= '<h2 class="titulo"><?php the_title() ?></h2>';
    $html .= '</div>';
  }
?>