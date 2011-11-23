￼<!doctype html>
<html lang="pt-br"> <head>
<meta charset="utf-8" />
<title><?php echo $title_for_layout ?></title> <?php echo $this->Html->css('bootstrap') ?>
<style type="text/css">
 body {
 	 padding-top:40px; 
 }
 </style>
</head> <body>
<?php echo $this->element('topo') ?>
<div class="container">	
<?php echo $content_for_layout ?> 
</div>
</body>
</html>