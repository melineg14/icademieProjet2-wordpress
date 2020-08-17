<?php get_header() ?>

<div class="container">
    <h1> <?php the_title() ?></h1>
    <form method="post" action="<?php get_template_directory_uri() . '/wp-login.php' ?>" id="loginform" name="loginform">
        <input class="form-control" type="text" style="width: 500px; margin: 2em auto 1em auto;" value="" placeholder="Votre email" id="user_login" name="log">
        <input class="form-control" type="password" style="width: 500px; margin: auto;" value="" placeholder="Votre mot de passe" id="user_pass" name="pwd">
        <button type="submit" class="btn btn-warning button-yellow" style="display: block; margin: 1em auto 2em auto;" tabindex="100" value="Se connecter" id="wp-submit" name="wp-submit">Se connecter</button>
        <input type="hidden" value="/" name="redirect_to">
    </form>
</div>

<?php get_footer() ?>