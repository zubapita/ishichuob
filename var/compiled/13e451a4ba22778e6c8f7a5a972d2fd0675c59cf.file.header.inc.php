<?php /* Smarty version Smarty-3.1.21, created on 2015-09-10 08:46:25
         compiled from "/Users/tomoyun/Documents/workspace/ishichuob/view/cmn/includes/header.inc" */ ?>
<?php /*%%SmartyHeaderCode:132772921255f0c4605ee9f9-00834442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13e451a4ba22778e6c8f7a5a972d2fd0675c59cf' => 
    array (
      0 => '/Users/tomoyun/Documents/workspace/ishichuob/view/cmn/includes/header.inc',
      1 => 1441842378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132772921255f0c4605ee9f9-00834442',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55f0c460630569_57467155',
  'variables' => 
  array (
    'dispatch_path' => 0,
    'lang' => 0,
    'username' => 0,
    'l' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f0c460630569_57467155')) {function content_55f0c460630569_57467155($_smarty_tpl) {?>
<header>
<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<a href="/" class="navbar-brand">そうだ 石中に行こう！</a>
		</div><!-- /navbar-header -->
		<div class="navbar-collapse collapse" id="navbar-main">
			<ul class="nav navbar-nav">
				<li<?php if ($_smarty_tpl->tpl_vars['dispatch_path']->value=='{$lang}/') {?> class="active"<?php }?>><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value, ENT_QUOTES, 'UTF-8');?>
/">Home</a></li>
				
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Spot <span class="caret"></span></a>
					<ul class="dropdown-menu" aria-labelledby="themes">
						<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value, ENT_QUOTES, 'UTF-8');?>
/spot/">List</a></li>
						<li class="divider"></li>
						<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value, ENT_QUOTES, 'UTF-8');?>
/spot/record/add">Add</a></li>
					</ul><!-- /dropdown-menu -->
				</li><!-- /dropdown -->
				<li><a href="/mimage/">Mimage</a></li>
				<li><a href="/oauth/twitter">Twitter</a></li>
				<?php if ($_smarty_tpl->tpl_vars['dispatch_path']->value=='/func1/detail/') {?><li class="active">func1 detail</li><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['dispatch_path']->value=='/func2/detail/') {?><li class="active">func2 detail</li><?php }?>
			</ul><!-- /nav navbar-nav -->

			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_smarty_tpl->tpl_vars['username']->value)) {?>
				<li><a href="#"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value['welcome'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['username']->value, ENT_QUOTES, 'UTF-8');?>
さん</a></li>
				<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value, ENT_QUOTES, 'UTF-8');?>
/userauth/logout">ログアウト</a></li>
				<?php } else { ?>
				<li><a href="#"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value['welcome'], ENT_QUOTES, 'UTF-8');?>
ゲストさん</a></li>
				<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value, ENT_QUOTES, 'UTF-8');?>
/userauth/login">ログイン</a></li>
				<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value, ENT_QUOTES, 'UTF-8');?>
/userauth/add">新規登録</a></li>
				<?php }?>
			</ul><!-- /nav navbar-nav navbar-right -->

		</div><!-- /id="navbar-main" -->
	</div><!-- /container -->
</div><!-- /navbar navbar-default navbar-fixed-top -->
</header>
<?php }} ?>
