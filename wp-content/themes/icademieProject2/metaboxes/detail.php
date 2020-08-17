<?php

class DetailMetaBox
{
    const META_KEY = 'icademieproject_detail';

    public static function register()
    {
        add_action('add_meta_boxes', [self::class, 'add']);
        add_action('save_post', [self::class, 'save']);
    }

    public static function add()
    {
        add_meta_box(self::META_KEY, 'Détail', [self::class, 'render'], 'product');
    }

    public static function render($product)
    {
        $value = get_post_meta($product->ID, self::META_KEY, true);

?>
        <label for="icademieprojectdetail">Détail du produit :</label>
        <textarea name="<?= self::META_KEY ?>" id="icademieprojectdetail" cols="30" rows="10" style="width: 100%;"><?= isset($value) ? $value : '' ; ?></textarea>
<?php
    }

    public static function save($product)
    {
        if (array_key_exists(self::META_KEY, $_POST) && current_user_can('edit_post', $product)) {
            update_post_meta($product, self::META_KEY, $_POST[self::META_KEY]);
        }
    }
}