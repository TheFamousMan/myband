<?php /* Smarty version Smarty-3.1.18, created on 2015-10-08 09:45:22
         compiled from "views/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:637380135612c2a4a98112-32717764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fad77a03206b670fbd775331b985abd5c190387c' => 
    array (
      0 => 'views/search.tpl',
      1 => 1444290288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '637380135612c2a4a98112-32717764',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5612c2a4aec986_19819569',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5612c2a4aec986_19819569')) {function content_5612c2a4aec986_19819569($_smarty_tpl) {?><div class="widthStroke">
	<form id="searchForm" action="?do=news_search" method="post">
		<input type="text" name="search" placeholder="search for articles" id="searchbar">
		<input type="submit" value="Search" id="search">
	</form>
</div><?php }} ?>
