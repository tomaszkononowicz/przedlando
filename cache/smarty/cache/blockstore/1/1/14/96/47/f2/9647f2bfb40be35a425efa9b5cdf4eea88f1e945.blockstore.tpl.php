<?php /*%%SmartyHeaderCode:3233759659f358aac046e2-77588930%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9647f2bfb40be35a425efa9b5cdf4eea88f1e945' => 
    array (
      0 => '/var/www/html/themes/default-bootstrap/modules/blockstore/blockstore.tpl',
      1 => 1508491951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3233759659f358aac046e2-77588930',
  'variables' => 
  array (
    'link' => 0,
    'module_dir' => 0,
    'store_img' => 0,
    'store_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f358aac1b357_33768258',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f358aac1b357_33768258')) {function content_59f358aac1b357_33768258($_smarty_tpl) {?>
<!-- Block stores module -->
<div id="stores_block_left" class="block">
	<p class="title_block">
		<a href="http://localhost:8080/sklepy" title="Nasze sklepy">
			Nasze sklepy
		</a>
	</p>
	<div class="block_content blockstore">
		<p class="store_image">
			<a href="http://localhost:8080/sklepy" title="Nasze sklepy">
				<img class="img-responsive" src="http://localhost:8080/modules/blockstore/store.jpg" alt="Nasze sklepy" />
			</a>
		</p>
				<div>
			<a 
			class="btn btn-default button button-small" 
			href="http://localhost:8080/sklepy" 
			title="Nasze sklepy">
				<span>Odkryj nasze sklepy<i class="icon-chevron-right right"></i></span>
			</a>
		</div>
	</div>
</div>
<!-- /Block stores module -->
<?php }} ?>
