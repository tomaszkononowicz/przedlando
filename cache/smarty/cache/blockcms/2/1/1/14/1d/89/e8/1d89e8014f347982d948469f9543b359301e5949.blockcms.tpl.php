<?php /*%%SmartyHeaderCode:205209551659f34ecfbe7520-70124963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d89e8014f347982d948469f9543b359301e5949' => 
    array (
      0 => '/var/www/html/themes/default-bootstrap/modules/blockcms/blockcms.tpl',
      1 => 1508491951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205209551659f34ecfbe7520-70124963',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f4bce5ab5261_86150135',
  'has_nocache_code' => true,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f4bce5ab5261_86150135')) {function content_59f4bce5ab5261_86150135($_smarty_tpl) {?>
	<!-- Block CMS module footer -->
	<section class="footer-block col-xs-12 col-sm-2" id="block_various_links_footer">
		<h4>Informacja</h4>
		<ul class="toggle-footer">
																		<li class="item">
				<a href="http://localhost:8080/kontakt" title="Kontakt z nami">
					Kontakt z nami
				</a>
			</li>
															<li class="item">
						<a href="http://localhost:8080/content/2-legal-notice" title="Regulamin">
							Regulamin
						</a>
					</li>
																<li class="item">
						<a href="http://localhost:8080/content/3-terms-and-conditions-of-use" title="Polityka prywatności">
							Polityka prywatności
						</a>
					</li>
																<li class="item">
						<a href="http://localhost:8080/content/4-about-us" title="O nas">
							O nas
						</a>
					</li>
												</ul>
		
	</section>
		<section class="bottom-footer col-xs-12">
		<div>
			<?php echo smartyTranslate(array('s'=>'[1] %3$s %2$s - Ecommerce software by %1$s [/1]','mod'=>'blockcms','sprintf'=>array('PrestaShop™',date('Y'),'©'),'tags'=>array('<a class="_blank" href="http://www.prestashop.com">')),$_smarty_tpl);?>

		</div>
	</section>
		<!-- /Block CMS module footer -->
<?php }} ?>
