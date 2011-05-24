<!DOCTYPE html>
<?php
$menu = JSite::getMenu();
if ($menu)
    $menu = $menu->getActive();
if ($menu)
    $menu = $menu->alias;

echo JHtml::_('behavior.modal');
?>
<html>
<head>
	<jdoc:include type="head" />
	<link rel="shortcut icon" href="/templates/rfht/images/favicon.ico" />
	<link rel="stylesheet" href="/templates/rfht/css/template.css" />
	
</head>


<body class="<?php echo $menu ?>">
	<div id="top"><div>
		<jdoc:include type="modules" name="top" style="xhtml" />
		<div class="clear"></div>
	</div></div>
	
	<div id="mainmenu"><div>
		<jdoc:include type="modules" name="mainmenu" style="xhtml" />
		<div class="clear"></div>
	</div></div>
	
	<div id="header"><div><div><div>
		<jdoc:include type="modules" name="header" style="xhtml" />
		<div class="clear" style="height:0px;"></div>
	</div></div></div></div>
	
	<div id="content">
		
		<?php
			$sb1 = $this->countModules('sidebar_right');
			$sb2 = $this->countModules('sidebar_left');
			
			if ($sb1 !== 0 && $sb2 !== 0) {
				$width = 'class="narrow"';
			} elseif ($sb1 !== 0 || $sb2 !== 0) {
				$width = 'class="medium"';
			} else {
				$width = '';
			}
		?>
		<div id="component" <?php echo $width; ?>><div>
			<jdoc:include type="component" />
			<div class="clear"></div>
		</div></div>
		
		<?php if ($this->countModules('sidebar_left')): ?><div>
		<div id="sidebar_left"><div>
			<jdoc:include type="modules" name="sidebar_left" style="xhtml" />
			<div class="clear"></div>
		</div></div></div>
		<?php endif; ?>
		
		<?php if ($this->countModules('sidebar_right')): ?>
		<div id="sidebar_right"><div>
			<jdoc:include type="modules" name="sidebar_right" style="xhtml" />
			<div class="clear"></div>
		</div></div>
		<?php endif; ?>
		
		<div class="clear"></div>
	</div>
	
	<div id="bottom"><div>
		<div>
			<jdoc:include type="modules" name="bottom" style="xhtml" />
			<div class="clear"></div>
		</div>
		<div>
			<div class="left">&copy; Rapids Family Health Team <?php echo date ('Y')?>. All Rights Reserved.</div>
			<div class="right">Site by<a href="http://www.ccistudios.com" target="_blank"> CCI Studios</a></div>
		</div>	
	</div></div>
	
	<div class="hidden">
		<jdoc:include type="modules" name="hidden" style="xhtml" />
		<div class="clear"></div>
	</div>
	
</body>
</html>