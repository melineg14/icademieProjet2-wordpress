<?php get_header() ?>

<div class="container-fluid">
    <div class="banner">
        <p class="slogan"><?= get_bloginfo('description') ?></p>
    </div>
    <style>
        .banner {
            background: url("<?php the_post_thumbnail_url() ?>") center 0 no-repeat fixed;
            background-size: 100%;
            height: 550px;
        }
    </style>
    <div class="white-bloc">
        <div class="row">
            <div class="col" id="about-img">
            </div>
            <style>
                #about-img {
                    background-image: url("<?= get_template_directory_uri() . '/assets/images/general/2.jpg' ?>");
                    background-size: contain;
                    margin: 8em auto 1em 1em;
                    background-repeat: no-repeat;
                    background-attachment: fixed;
                    height: 380px;
                }
            </style>
            <div class="about col" id="about">
                <?php if (have_posts()) : while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                endif ?>
            </div>
        </div>
    </div>
    <div class="white-bloc">
        <div class="product-presentation" id="product-presentation">
            <h1>Nos produits</h1>
            <div class="row">
                <?php $loop = new WP_Query(['post_type' => 'product', 'orderby' => 'date', 'order' => 'DESC']); ?>
                <?php if ($loop->have_posts()) :
                    while ($loop->have_posts()) : $loop->the_post(); ?>
                        <div class="col">
                            <div class="card mb-3 mt-3" style="width: 210px">
                                <h4 class="card-header"><?php the_title() ?></h4>
                                <?php the_post_thumbnail('medium', ['class' => 'card-img-top', 'alt' => '', 'style' => 'height: 150px; width: 190px; margin: 1em auto 1em auto;']) ?>
                                <p style="font-size: 14px;"><?php the_excerpt() ?></p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item text-center"><?php echo get_post_meta(get_the_ID(), PriceMetaBox::META_KEY, true); ?> €</li>
                                </ul>
                                <div class="card-body">
                                    <a class="home-link" href="<?php the_permalink() ?>">
                                        <button type="button" class="btn btn-warning btn-sm mr-3 ml-2 button-yellow">>Voir le détail</button>
                                    </a>
                                    <a href=" " class="card-link"><i class="fas fa-cart-plus"></i></a>
                                </div>
                                <div class="card-footer text-muted">
                                    Le : <?= get_the_date() ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile ?>
                <?php else : ?>
                    <h1>Il n'y a pas de produit.</h1>
                <?php endif;
                wp_reset_query(); ?>
            </div>
        </div>
    </div>
    <div class="white-bloc">
        <div class="advantages">
            <h1>LES PLUS DE PRINTING3D</h1>
            <div class="row">
                <div class="col circle">
                    <h5>Qualité</h5>
                    <p>Printing3D vous propose des objets ainsi qu'un échange de qualité</p>
                </div>
                <div class="col circle">
                    <h5>Exigence</h5>
                    <p>Printing3D c'est de l'exigence pour vous assurer les meilleurs services, car
                        Printing3D pense premièrement à vous !</p>
                </div>
                <div class="col circle">
                    <h5>Technicité</h5>
                    <p>Printing3D met à votre service les meilleurs ingénieurs pour vous proposer des
                        objets d'une excellente technicité</p>
                </div>
                <div class="col circle">
                    <h5>Finitions</h5>
                    <p>Printing3D vous propose de nombreuses possibilités de finitions pour correspondre
                        à vos goûts</p>
                </div>
            </div>
        </div>
    </div>
    <div class="slide">
        <div class="partners">
            <h1>NOS PARTENAIRES</h1>
            <h4>N'hésitez pas à devenir partenaires, <a class="home-link" href="">contactez nous</a>
                pour que cette rubrique se remplisse !</h4>
        </div>
    </div>
    <style>
        .slide {
            background: url("<?= get_template_directory_uri() . '/assets/images/general/3.jpg'?>") center 0 no-repeat fixed;
            height: 300px;
        }
    </style>
</div>
<?php get_footer() ?>