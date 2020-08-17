<?php get_header() ?>

<div class="container">
    <h1> <?php the_title() ?></h1>

    <div style="width: 75%; margin: 2em auto 2em auto;">
        <?php if (have_posts()) : while (have_posts()) : the_post();
                the_content();
            endwhile;
        endif ?>
    </div>
</div>
<?php get_footer() ?>