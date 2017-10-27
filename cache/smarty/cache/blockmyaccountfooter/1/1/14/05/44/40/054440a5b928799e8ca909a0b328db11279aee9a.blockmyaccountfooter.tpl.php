<?php /*%%SmartyHeaderCode:117512646059f358a77b37c1-40808720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '054440a5b928799e8ca909a0b328db11279aee9a' => 
    array (
      0 => '/var/www/html/themes/default-bootstrap/modules/blockmyaccountfooter/blockmyaccountfooter.tpl',
      1 => 1508491951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117512646059f358a77b37c1-40808720',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f358a77e1fa8_71913004',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f358a77e1fa8_71913004')) {function content_59f358a77e1fa8_71913004($_smarty_tpl) {?>
<!-- Block myaccount module -->
<section class="footer-block col-xs-12 col-sm-4">
	<h4><a href="http://localhost:8080/moje-konto" title="Zarządzaj moim kontem klienta" rel="nofollow">Moje konto</a></h4>
	<div class="block_content toggle-footer">
		<ul class="bullet">
			<li><a href="http://localhost:8080/historia-zamowien" title="Moje zamówienia" rel="nofollow">Moje zamówienia</a></li>
						<li><a href="http://localhost:8080/pokwitowania" title="Moje rachunki" rel="nofollow">Moje rachunki</a></li>
			<li><a href="http://localhost:8080/adresy" title="Moje adresy" rel="nofollow">Moje adresy</a></li>
			<li><a href="http://localhost:8080/dane-osobiste" title="Zarządzaj moimi informacjami osobistymi" rel="nofollow">Moje informacje osobiste</a></li>
						
            		</ul>
	</div>
</section>
<!-- /Block myaccount module -->
<?php }} ?>
