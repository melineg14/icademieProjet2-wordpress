<?php get_header() ?>

<div class="container">
    <h1> <?php the_title() ?></h1>
    <p id="contact-p">N'hésitez pas à nous contacter, peu importe la raison, nous vous répondrons dans les meilleurs délais
    </p>
    <div class="row">
        <div class="col-4 form-contact-left">
            <h5>Pas de réponse sous 24h ? </h5>
            <p>N'hésitez pas à nous contacter par un de ces moyens : </p>
            <ul>
                <li><span class="mr-1" style="font-size: 1.2em; color: #FBC000;"><i class="fas fa-phone"></i></span> <?= get_option('company_phone_number') ?>
                <li><span class="mr-1" style="font-size: 1.2em; color: #FBC000;"><i class="fas fa-envelope"></i></span> <?= get_option('company_mail') ?>
                <li><span class="ml-1 mr-1" style="font-size: 1.2em; color: #FBC000;"><i class="fas fa-map-marker-alt"></i></span> <?= nl2br(get_option('company_adress')) ?>
            </ul>
            <h5>Nous suivre</h5>
            <div class="socialmedias">
                <a href="#" class="mr-2"><span style="font-size: 2em; color: #FBC000;"><i class="fab fa-facebook"></i></span></a>
                <a href="#" class="mr-2"><span style="font-size: 2em; color: #FBC000;"><i class="fab fa-linkedin"></i></span></a>
                <a href="#" class="mr-2"><span style="font-size: 2em; color: #FBC000;"><i class="fab fa-instagram"></i></span></a>
                <a href="#" class="mr-2"><span style="font-size: 2em; color: #FBC000;"><i class="fab fa-youtube"></i></span></a>
            </div>
        </div>
        <div class="col-6 form-contact-right">
            <form>
                <div class="form-group">
                    <span class="mr-1" style="font-size: 1.2em; color: #2C3E50;"><i class="fas fa-user-alt"></i></span>
                    <label for="contact-name">Votre nom*</label>
                    <input type="text" class="form-control" id="contact-name" placeholder="Prénom NOM" required>
                </div>
                <div class="form-group">
                    <span class="mr-1" style="font-size: 1.2em; color: #2C3E50;"><i class="fas fa-envelope"></i></span>
                    <label for="contact-mail">Votre e-mail*</label>
                    <input type="text" class="form-control" id="contact-mail" placeholder="email@exemple.com" required>
                    <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre adresse
                        e-mail, elle sert simplement à ce que l'on puisse vous répondre.</small>
                </div>
                <div class="form-group">
                    <span class="mr-1" style="font-size: 1.2em; color: #2C3E50;"><i class="fas fa-pen"></i></span>
                    <label for="contact-message">Votre message*</label>
                    <textarea class="form-control" id="contact-message" cols="10" rows="5"></textarea>
                </div>
                <small class="form-text text-muted">* = champs obligatoires</small>
                <button type="submit" class="btn btn-primary mb-3 button-blue">Envoyer</button>
            </form>
        </div>
    </div>
</div>

<?php get_footer() ?>