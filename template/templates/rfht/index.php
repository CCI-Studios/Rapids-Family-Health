<!DOCTYPE html>

<html>

<head>
	<jdoc:include type="head" />
	<link rel="shortcut icon" href="/templates/rfht/images/favicon.ico" />
	<link rel="stylesheet" href="/templates/rfht/css/template.css" />
	
</head>


<body>
	<div id="top"><div>
		<jdoc:include type="modules" name="top" style="xhtml" />
		<div class="clear"></div>
	</div></div>
	
	<div id="mainmenu"><div>
		<jdoc:include type="modules" name="mainmenu" style="xhtml" />
	</div></div>
	
	<div id="header"><div><div><div>
		<jdoc:include type="modules" name="header" style="xhtml" />
	</div></div></div></div>
	
	<div id="content">
		
		<?php
			$sb1 = $this->countModules('sidebar1');
			$sb2 = $this->countModules('sidebar2');
			
			if ($sb1 !== 0 && $sb2 !== 0) {
				$width = 'class="narrow"';
			} elseif ($sb1 !== 0 || $sb2 !== 0) {
				$width = 'class="medium"';
			} else {
				$width = '';
			}
		?>
		<div id="component" <?php echo $width; ?>>
			<jdoc:include type="component" />
		</div>
		
		<?php if ($this->countModules('sidebar1')): ?>
		<div id="sidebar1"><div>
			<jdoc:include type="modules" name="sidebar1" style="xhtml" />
		</div></div>
		<?php endif; ?>
		
		<?php if ($this->countModules('sidebar2')): ?>
		<div id="sidebar2"><div>
			<jdoc:include type="modules" name="sidebar2" style="xhtml" />
		</div></div>
		<?php endif; ?>
		<div class="clear"></div>
	</div>
	
	<div id="bottom">
		<div><jdoc:include type="modules" name="bottom" style="xhtml" /></div>
		<div><div>
			<div class="left">&copy; Rapids Family Health Team <?php echo date ('Y')?>. All Rights Reserved.
			<div class="right">Site by<a href="http://www.ccistudios.com" target="_blank"> CCI Studios</a>
		</div></div>
		</div></div>	
	</div>
	
</body>
</html>