<?php /* Smarty version Smarty-3.1.18, created on 2015-10-05 14:57:36
         compiled from "views/news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1651852339561269c64b43c9-15770409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bcc0de9b63e22ff8c55ba99584d3688b301d12d' => 
    array (
      0 => 'views/news.tpl',
      1 => 1444049843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1651852339561269c64b43c9-15770409',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_561269c6513127_80486863',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561269c6513127_80486863')) {function content_561269c6513127_80486863($_smarty_tpl) {?>
<<?php ?>?php 

	echo '<div id="containerG">';

		$result = $mysqli->query("SELECT * FROM pictures");

		while ($newsarticles = $result->fetch_assoc()) {
			
			echo '<div class="news_article">';
			echo '<h1>'.$newsarticles['title'].'</h1>';
			echo '<div class="picture">';
				echo '<img src="img/'.$newsarticles['image'].'">';
			echo '</div>';
			echo '<div class="text">'.$newsarticles['content'].'</div>';
			echo '</div>';
		}

	echo '</div>';

<?php }} ?>
