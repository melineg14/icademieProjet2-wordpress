<?php

class PriceMetaBox
{
    const META_KEY = 'icademieproject_price';

    public static function register()
    {
        add_action('add_meta_boxes', [self::class, 'add']);
        add_action('save_post', [self::class, 'save']);
    }

    public static function add()
    {
        add_meta_box(self::META_KEY, 'Prix', [self::class, 'render'], 'product', 'side');
    }

    public static function render($product)
    {
        $value = get_post_meta($product->ID, self::META_KEY, true);

?>
        <label for="icademieprojectprice">Prix :</label>
        <input type="text" id="icademieprojectprice" name="<?= self::META_KEY ?>" style="width: 60px;" value="<?= isset($value) ? $value : '' ; ?>"> €
<?php
    }

    public static function save($product)
    {
        if (array_key_exists(self::META_KEY, $_POST) && current_user_can('edit_post', $product)) {
            update_post_meta($product, self::META_KEY, $_POST[self::META_KEY]);
        }
    }
}
