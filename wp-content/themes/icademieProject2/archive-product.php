<?php get_header() ?>

<div class="container">
    <h1>Nos produits</h1>

    <?php $loop = new WP_Query(['post_type' => 'product', 'orderby' => 'title', 'order' => 'ASC']); ?>
    <?php if ($loop->have_posts()) : ?>
        <div class="row">
            <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                <div class="col-4">
                    <div class="card mb-5 mt-3 mr-2">
                        <h3 class="card-header"><?php the_title() ?></h3>
                        <?php the_post_thumbnail('medium', ['class' => 'card-img-top', 'alt' => '', 'style' => 'height: 200px; width: 300px; margin: 1em auto 1em auto;']) ?>
                        <div class="card-body text-justify"><?php the_excerpt() ?></div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text-center"><?php echo get_post_meta(get_the_ID(), PriceMetaBox::META_KEY, true); ?> €</li>
                        </ul>
                        <div class="card-body">
                            <a href="<?php the_permalink() ?>"><button type="button" class="btn btn-warning button-yellow ml-5 mr-3" id="btn-description">Voir le
                                    détail</button></a>
                            <a href=" " class="card-link"><i class="fas fa-cart-plus"></i> Ajouter</a>
                        </div>
                        <div class="card-footer text-muted">
                            Ajouté le : <?= get_the_date() ?>
                        </div>
                    </div>
                </div>
            <?php endwhile ?>
        </div>
    <?php else : ?>
        <h1>Il n'y a pas de produit.</h1>
    <?php endif;
    wp_reset_query(); ?>

    <div class="suggestion">
        <h3>Suggérer un produit</h3>
        <div>
            <p class="text-center">Si vous ne trouvez pas l'objet de vos rêves, n'hésitez pas à nous le suggérer !</p>
            <form class="sugg-form">
                <div class="form-group">
                    <label for="product">Produit : </label>
                    <input type="text" class="form-control" id="product">
                </div>
                <div class="select">
                    <label for="select">Matériaux <span id="fac">(facultatif)</span> :</label>
                    <select class="form-control">
                        <option>ABS</option>
                        <option>PLA</option>
                        <option>ASA</option>
                        <option>PET</option>
                        <option>PC ou Polycarbonate</option>
                        <option>Thermoplastiques hautes performances</option>
                        <option>Matériaux flexibles</option>
                        <option>Fibres de carbone</option>
                        <option>Matériaux hybrides</option>
                        <option>Matériaux solubles</option>
                        <option>Autre</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-warning button-yellow" style="display: block; margin: .5em auto .5em auto;">Suggérer</button>
            </form>
        </div>
    </div>
</div>

<?php get_footer() ?>