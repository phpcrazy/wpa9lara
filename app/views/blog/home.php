<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
	<?php echo HTML::style('css/style.css'); ?>
	<?php echo HTML::script('js/script.js'); ?>
</head>
<body>
	<h1>Hello</h1>
	<?php echo HTML::link('https://www.google.com/', 'Google',array('style' => 'background:red'), true); ?>
	<?php echo HTML::image('img/pitty.jpg'); ?>
	<?php echo HTML::linkRoute('hello', 'Hello'); ?>
	<?php echo HTML::mailto('phpcrazy@gmail.com'); ?>
	<?php echo HTML::email('phpcrazy@gmail.com'); ?>
	<?php echo HTML::ol(array('Ko Ye', 'Thet Naing', 'Aung Aung')); ?>
	<?php echo HTML::ul(array('WPF', 'WPA')); ?>
	<?php echo HTML::linkAsset('img/pitty.jpg', 'What a pity!'); ?>
	<?php echo HTML::obfuscate('Thet Naing is fool!'); ?>
	<a href="<?php echo URL::full(); ?>">URL</a>
	<?php echo URL::previous(); ?>
</body>
</html>