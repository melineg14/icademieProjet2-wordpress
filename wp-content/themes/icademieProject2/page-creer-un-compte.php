<?php get_header() ?>

<div class="container">
    <h1> <?php the_title() ?></h1>
    <form action="" method="post">
        <div class="form-group">
            <input type="text" class="form-control" id="firstname" style="width: 500px; margin: 2em auto 1em auto;" placeholder="Votre prénom">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="lastname" style="width: 500px; margin: 2em auto 1em auto;" placeholder="Votre nom">
        </div>
        <div class="form-group" >
            <input type="email" class="form-control" id="email" style="width: 500px; margin: 2em auto 1em auto;" placeholder="Votre e-mail">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="password" style="width: 500px; margin: 2em auto 1em auto;" placeholder="Veuillez créer un mot de passe">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="password-confirm" style="width: 500px; margin: 2em auto 1em auto;" placeholder="Veuillez réécrire le mot de passe">
        </div>
        <button type="submit" class="btn btn-warning button-yellow" style="display: block; margin: 1em auto 2em auto;" tabindex="100" value="register" id="wp-submit" name="wp-submit">S'inscrire</button>
    </form>
</div>

<?php get_footer() ?>