<?php /* Smarty version Smarty-3.1.19, created on 2017-10-27 17:59:58
         compiled from "/var/www/html/admin/themes/default/template/controllers/customer_threads/helpers/view/timeline_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:66156348959f357fe5a1e98-97706321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9e4789693c9f53e1ff4525b1dd03303f28edc03' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/customer_threads/helpers/view/timeline_item.tpl',
      1 => 1508491950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66156348959f357fe5a1e98-97706321',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'timeline_item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f357fe5c2ee5_78534418',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f357fe5c2ee5_78534418')) {function content_59f357fe5c2ee5_78534418($_smarty_tpl) {?>
<article class="timeline-item<?php if (isset($_smarty_tpl->tpl_vars['timeline_item']->value['alt'])) {?> alt<?php }?>">
	<div class="timeline-caption">
		<div class="timeline-panel arrow arrow-<?php echo $_smarty_tpl->tpl_vars['timeline_item']->value['arrow'];?>
">
			<span class="timeline-icon" style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['timeline_item']->value['background_color'], ENT_QUOTES, 'UTF-8', true);?>
;">
				<i class="<?php echo $_smarty_tpl->tpl_vars['timeline_item']->value['icon'];?>
"></i>
			</span>
			<span class="timeline-date"><i class="icon-calendar"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['timeline_item']->value['date'],'full'=>0),$_smarty_tpl);?>
 - <i class="icon-time"></i> <?php echo substr($_smarty_tpl->tpl_vars['timeline_item']->value['date'],11,5);?>
</span>
			<?php if (isset($_smarty_tpl->tpl_vars['timeline_item']->value['id_order'])) {?><a class="badge" href="#"><?php echo smartyTranslate(array('s'=>"Order #"),$_smarty_tpl);?>
<?php echo intval($_smarty_tpl->tpl_vars['timeline_item']->value['id_order']);?>
</a><br/><?php }?>
			<span><?php echo nl2br($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['timeline_item']->value['content'],220));?>
</span>
			<?php if (isset($_smarty_tpl->tpl_vars['timeline_item']->value['see_more_link'])) {?>
				<br/><br/><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['timeline_item']->value['see_more_link'], ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-default _blank"><?php echo smartyTranslate(array('s'=>"See more"),$_smarty_tpl);?>
</a>
			<?php }?>
		</div>
	</div>
</article>
<?php }} ?>
