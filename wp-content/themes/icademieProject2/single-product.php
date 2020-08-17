<?php get_header() ?>

<div class="container">
    <?php $loop = new WP_Query(['post_type' => 'product']); ?>
    <?php if ($loop->have_posts()) : ?>
        <div class="row">
            <div class="col">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="Photographie du produit" style="width:100%; height:auto; margin-top: 2em;">
                <div>
                    <a class="btn btn-warning button-yellow" href="" style="display: block; margin: 1em auto; width: max-content;">+Ajouter au panier</a>
                </div>
            </div>
            <div class="col">
                <h1 class="mt-3"><?php the_title(); ?></h1>
                <p id="price"><?php echo get_post_meta(get_the_ID(), PriceMetaBox::META_KEY, true); ?> €</p>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="color: #18BC9C">Détail du produit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p><?php echo get_post_meta(get_the_ID(), DetailMetaBox::META_KEY, true); ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>Ajouté le : <?= get_the_date() ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    <?php endif;
    wp_reset_query(); ?>
</div>

<?php get_footer() ?>