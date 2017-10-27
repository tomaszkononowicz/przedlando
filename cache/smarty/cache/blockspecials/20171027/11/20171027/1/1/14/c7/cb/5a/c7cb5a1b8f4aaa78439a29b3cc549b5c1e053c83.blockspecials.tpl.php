<?php /*%%SmartyHeaderCode:39419986259f358aab88205-41785194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7cb5a1b8f4aaa78439a29b3cc549b5c1e053c83' => 
    array (
      0 => '/var/www/html/themes/default-bootstrap/modules/blockspecials/blockspecials.tpl',
      1 => 1508491951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39419986259f358aab88205-41785194',
  'variables' => 
  array (
    'link' => 0,
    'special' => 0,
    'PS_CATALOG_MODE' => 0,
    'priceDisplay' => 0,
    'specific_prices' => 0,
    'priceWithoutReduction_tax_excl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f358aabcd247_45662951',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f358aabcd247_45662951')) {function content_59f358aabcd247_45662951($_smarty_tpl) {?>
<!-- MODULE Block specials -->
<div id="special_block_right" class="block">
	<p class="title_block">
        <a href="http://localhost:8080/promocje" title="Promocje">
            Promocje
        </a>
    </p>
	<div class="block_content products-block">
    		<ul>
        	<li class="clearfix">
            	<a class="products-block-image" href="http://localhost:8080/summer-dresses/7-printed-chiffon-dress.html">
                    <img 
                    class="replace-2x img-responsive" 
                    src="http://localhost:8080/20-small_default/printed-chiffon-dress.jpg" 
                    alt="" 
                    title="Printed Chiffon Dress" />
                </a>
                <div class="product-content">
                	<h5>
                        <a class="product-name" href="http://localhost:8080/summer-dresses/7-printed-chiffon-dress.html" title="Printed Chiffon Dress">
                            Printed Chiffon Dress
                        </a>
                    </h5>
                                        	<p class="product-description">
                            Printed chiffon knee length dress...
                        </p>
                                        <div class="price-box">
                    	                        	<span class="price special-price">
                                                                    20,17 zł                            </span>
                                                                                                                                 <span class="price-percent-reduction">-20%</span>
                                                                                         <span class="old-price">
                                                                    25,22 zł                            </span>
                            
                                            </div>
                </div>
            </li>
		</ul>
		<div>
			<a 
            class="btn btn-default button button-small" 
            href="http://localhost:8080/promocje" 
            title="Wszystkie promocje">
                <span>Wszystkie promocje<i class="icon-chevron-right right"></i></span>
            </a>
		</div>
    	</div>
</div>
<!-- /MODULE Block specials -->
<?php }} ?>
