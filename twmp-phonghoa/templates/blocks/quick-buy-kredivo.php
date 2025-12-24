<?php

global $product;

$condition = $product->is_type('simple') || $product->is_type('variable');

$button_class = 'quick_buy rounded-0';

$button_text = __("Trả góp / Trả sau", "twmp-phonghoa");
$sub_button_text = __("Cùng Kredivo", "twmp-phonghoa");

if ($condition) {
    echo $product->is_type('simple') ? '<input type="hidden" name="product_id" value="'.$product->get_id().'"><a data-block="quick-buy-kredivo" data-method="kredivo" href="#" style="width: 100% !important" class="mt-1 w-100 text-white ' . $button_class . '"><span>' . $button_text . '</span><span>'.$sub_button_text.'</span></a>' : '<a data-block="quick-buy-kredivo" data-method="kredivo" style="width: 100% !important" href="#" class="mt-1 text-white ' . $button_class . '"><span>' . $button_text . '</span><span>'.$sub_button_text.'</span></a>';
}