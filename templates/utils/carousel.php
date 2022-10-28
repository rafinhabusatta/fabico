<?php
$args = array(
    'numberposts'    => 5,
    'category'        => 1
);
$my_posts = get_posts($args);
if (
    !empty($my_posts)
) {
    $output = '<ul>';
}

?>
<div id="carouselFabico" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselFabico" data-slide-to="0" class="active"></li>
        <li data-target="#carouselFabico" data-slide-to="1"></li>
        <li data-target="#carouselFabico" data-slide-to="2"></li>
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
            echo '<div class="container">';
            echo '<div class="row">';
            echo '<div class="col-2">';
            echo '<img src="' . get_the_post_thumbnail_url($p->ID) . '" alt="..." class="img-thumbnail">';
            echo '</div>';
            echo '<div class="col-10">';
            echo '<h2 class="text-center font-weight-bold">' . $p->post_title . '</h2>';
            echo '<p class="text-justify">' . $content . '</p>';

            echo $link.'leia mais...' . $linka;
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</li>';
            $i++;
        }
        ?>
    </div>

    <!-- Controls -->
    <a class="carousel-control-prev" href="#carouselFabico" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselFabico" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>