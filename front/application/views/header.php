<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Ecar后台管理系统</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/style/main.css ">
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/jquery.easyui.min.js"></script>
	<?php if( $this->uri->segment(2) == 'store'){ ?>
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/store.js"></script>
	<?php }else if( $this->uri->segment(2) == 'userinfo'){ ?>
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/userinfo.js"></script>
	<?php } ?>
	
</head>
<body>
	
	