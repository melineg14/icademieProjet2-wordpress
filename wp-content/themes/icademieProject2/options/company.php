<?php

class CompanyMenuPage
{
    const GROUP = 'company_options';

    public static function register()
    {
        add_action('admin_menu', [self::class, 'addMenu']);
        add_action('admin_init', [self::class, 'registerSettings']);
    }       

    public static function registerSettings()
    {
        register_setting(self::GROUP, 'company_phone_number');
        register_setting(self::GROUP, 'company_mail');
        register_setting(self::GROUP, 'company_adress');
        register_setting(self::GROUP, 'company_infos');

        add_settings_section('company_options_section', 'Informations', function() {
            echo "Vous pouvez ici gérer les informations de l'entreprise";
        }, self::GROUP);

        add_settings_field('company_options_phone_number', 'Numéro du contact', function() {
            ?>
            <input type="text" name="company_phone_number" value="<?= esc_html(get_option('company_phone_number')); ?>">
            <?php
        }, self::GROUP, 'company_options_section');

        add_settings_field('company_options_mail', 'Email du contact', function() {
            ?>
            <input type="text" name="company_mail" value="<?= esc_html(get_option('company_mail')); ?>">
            <?php
        }, self::GROUP, 'company_options_section');

        add_settings_field('company_options_adress', "Adresse de l'entreprise", function() {
            ?>
            <textarea name="company_adress" cols="30" rows="10" style="width: 300px; height: 120px;"><?= esc_html(get_option('company_adress')); ?></textarea>
            <?php
        }, self::GROUP, 'company_options_section');

        add_settings_field('company_options_infos', "Informations légales", function() {
            ?>
            <textarea name="company_infos" cols="30" rows="10" style="width: 350px; height: 120px;"><?= esc_html(get_option('company_infos')); ?></textarea>
            <?php
        }, self::GROUP, 'company_options_section');
    }
    
    public static function addMenu()
    {
        add_options_page("Gestion de l'entreprise", 'Printing3D', 'manage_options', self::GROUP, [self::class, 'render']);
    }

    public static function render()
    {
        ?>
        <h1>Gestion des informations de l'entreprise Printing3D</h1>
        <form action="options.php" method="post">
            <?php settings_fields(self::GROUP);
            do_settings_sections(self::GROUP);
            submit_button(); ?>
        </form>
        <?php
    }
}
