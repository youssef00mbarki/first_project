<?php $menu=array('home','Posts','about' );?>
<nav>
	<ul>
		<?php foreach($menu as $m): ?>
		<li><a href="<?php echo $m=='home'?'index':$m;?>.php"><?php echo $m; ?></a></li>
		<?php endforeach;?>
	</ul>
</nav>