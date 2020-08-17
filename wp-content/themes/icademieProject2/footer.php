</div>
<footer>
    <?php
    // wp_nav_menu([
    //     'theme_location' => 'footer',
    //     'container' => false
    // ]) 
    ?>

    <div class="container">
        <div class="row">
            <div class="col-3 footer-left">
                <img id="footer-logo" src=" <?= get_template_directory_uri() . "/assets/images/general/logo.png" ?> " alt="logo de l'entreprise">
            </div>
            <div class="col footer-right">
                <div class="row">
                    <div class="col">
                        <h5>INFOS LEGALES</h5>
                        <ol>
                            <li> <?= nl2br(get_option('company_infos')) ?></li>
                        </ol>
                    </div>
                    <div class="col">
                        <h5>DECOUVREZ PRINTING3D</h5>
                        <ol>
                            <li><a href="#about">> A propos de Printing3D</a></li>
                            <li><a href=" ">> Nous contacter</a></li>
                        </ol>
                    </div>
                    <div class="col-4">
                        <h5>SUIVEZ-NOUS</h5>
                        <a href="#" class="mr-3"><span style="font-size: 2em; color: #FBC000;"><i class="fab fa-facebook"></i></span></a>
                        <a href="#" class="mr-3"><span style="font-size: 2em; color: #FBC000;"><i class="fab fa-linkedin"></i></span></a>
                        <a href="#" class="mr-3"><span style="font-size: 2em; color: #FBC000;"><i class="fab fa-instagram"></i></span></a>
                        <a href="#" class="mr-3"><span style="font-size: 2em; color: #FBC000;"><i class="fab fa-youtube"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Printing3D©2020 - Tous droits réservés - <a href="">Mentions légales</a></p>
        </div>
    </div>
</footer>
<?php wp_footer() ?>
</body>

</html>