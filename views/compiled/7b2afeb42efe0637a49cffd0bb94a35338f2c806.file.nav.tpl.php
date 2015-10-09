<?php /* Smarty version Smarty-3.1.18, created on 2015-10-08 15:25:01
         compiled from "views/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35337474356123e5d0f1884-31644018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b2afeb42efe0637a49cffd0bb94a35338f2c806' => 
    array (
      0 => 'views/nav.tpl',
      1 => 1444310667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35337474356123e5d0f1884-31644018',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56123e5d18c227_43396652',
  'variables' => 
  array (
    'curr_page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56123e5d18c227_43396652')) {function content_56123e5d18c227_43396652($_smarty_tpl) {?><header>
	<h1 href="?do=default">Garfield</h1>

	<nav>
		<ul>
			<li <?php if ($_smarty_tpl->tpl_vars['curr_page']->value=='default') {?>class="selected"<?php }?>><a href="?do=default">Home</a></li>
			<li <?php if ($_smarty_tpl->tpl_vars['curr_page']->value=='about') {?>class="selected"<?php }?>><a href="?do=about">About</a></li>
			<li <?php if ($_smarty_tpl->tpl_vars['curr_page']->value=='news') {?>class="selected"<?php }?>><a href="?do=news">News</a></li>
			<li <?php if ($_smarty_tpl->tpl_vars['curr_page']->value=='contact') {?>class="selected"<?php }?>><a href="?do=contact">Contact</a></li>
		</ul>
	</nav>
</header><?php }} ?>
