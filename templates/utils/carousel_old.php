<?php
$args = array(
    'numberposts'    => 5,
    'category'        => 23
);
$my_posts = get_posts($args);
if (
    !empty($my_posts)
) {
    $output = '<ul>';
}

?>
<div class="row carousel-content">
    <div class="col-12">
        <div id="carouselHome" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselHome" data-slide-to="0" class="active"></li>
                <li data-target="#carouselHome" data-slide-to="1"></li>
                <li data-target="#carouselHome" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <?php
                $i = 0;
                foreach ($my_posts as $p) {

                    $active = '';
                    if ($i == 0) {
                        $active = 'active';
                    }

                    //$style = 'style="background-image: url(' . get_the_post_thumbnail_url($p->ID) . ');"';
                    $style = '';
                    $link = '<a href="' . get_permalink($p->ID) . '">';
                    $linka = '</a>';
                    $content = trim($p->post_content);
                    $content = strip_tags($content);
                    $limit = 800;
                    if (strlen($content) > $limit) {
                        $content = substr($content, 0, $limit) . '...';
                    }

                    echo '<div class="p-3 carousel-item ' . $active . '" ' . $style . '>';
                    echo '<li style="height: 300px;">';
                    echo '<div class="container-fluid">';
                    echo '<div class="row">';
                    echo '<div class="col-3">';
                    echo $link;
                    echo '<img src="' . get_the_post_thumbnail_url($p->ID) . '" class="img-fluid">';
                    echo $linka;
                    echo '</div>';
                    echo '<div class="col-9">';
                    echo '<h2 class="text-center font-weight-bold">' .$link. $p->post_title . $linka. '</h2>';
                    echo '<p class="text-justify">' . $content . '</p>';
                    echo $link . 'leia mais...' . $linka;
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</li>';
                    $i++;
                }
                ?>
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