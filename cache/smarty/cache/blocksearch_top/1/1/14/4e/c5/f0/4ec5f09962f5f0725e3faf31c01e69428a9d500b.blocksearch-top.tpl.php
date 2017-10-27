<?php /*%%SmartyHeaderCode:109037335659f358a70eaa76-48084481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ec5f09962f5f0725e3faf31c01e69428a9d500b' => 
    array (
      0 => '/var/www/html/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1508491951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109037335659f358a70eaa76-48084481',
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f358a70fc6a3_17024479',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f358a70fc6a3_17024479')) {function content_59f358a70fc6a3_17024479($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//localhost:8080/szukaj" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Szukaj" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Szukaj</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
