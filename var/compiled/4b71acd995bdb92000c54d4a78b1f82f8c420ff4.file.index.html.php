<?php /* Smarty version Smarty-3.1.21, created on 2015-09-10 08:44:32
         compiled from "/Users/tomoyun/Documents/workspace/ishichuob/view/index.html" */ ?>
<?php /*%%SmartyHeaderCode:179648181455f0c4602d35b7-15667108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b71acd995bdb92000c54d4a78b1f82f8c420ff4' => 
    array (
      0 => '/Users/tomoyun/Documents/workspace/ishichuob/view/index.html',
      1 => 1441749715,
      2 => 'file',
    ),
    '5d9857e56e56e7e2521665722c5b43ef1a6c2b6f' => 
    array (
      0 => '/Users/tomoyun/Documents/workspace/ishichuob/view/cmn/layout/index.tpl',
      1 => 1441749715,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179648181455f0c4602d35b7-15667108',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55f0c4605e4ce7_96738726',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f0c4605e4ce7_96738726')) {function content_55f0c4605e4ce7_96738726($_smarty_tpl) {?><!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" media="screen">
	
	<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.4/cerulean/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/cmn/css/cmn.css" type="text/css" media="screen" title="cmn.css">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	
	<!-- Write meta tag and link tag here. -->
	<!-- <link rel="stylesheet" href="/cmn/css/style_name.css" type="text/css" media="screen" title="no title" charset="utf-8">
charset="utf-8"> -->

	<title>Page Title|Site name</title>
</head>
<body>
<div id="wrapper" class="container">
<?php echo $_smarty_tpl->getSubTemplate ('cmn/includes/header.inc', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div class="container">
<div class="page-header">
	<div class="row">
		<div class="col-lg-12">
			<section id="searchForm">
				<h1>Min Sample</h1>
				<form>
					<input id="keywordSearch" type="search" placeholder="Search Keyword" />
					<span>Found:</span><span id="allItemsNum"></span>
				</form>
			</section>
		</div><!-- /col-lg-12 -->
		<div class="col-lg-12">
			<section id="data-table">
				
			</section>
			<form>
				
				
			</form>
		</div><!-- /col-lg-12 -->
	</div><!-- /row -->
</div><!-- /page-header -->
</div><!-- /container -->

</div><!-- /#wrapper -->

	<?php echo '<script'; ?>
 src="http://code.jquery.com/jquery-1.11.2.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	
	<?php echo '<script'; ?>
 src="/cmn/conf" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/cmn/js/ajax.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
	
	
	<!-- Write loading javascript tag here. -->
	<!-- <?php echo '<script'; ?>
 src="/cmn/js/script_name.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
> -->

</body>
</html><?php }} ?>
