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
	</div></div>
	
	<div class="clear"></div>
	
	<div id="mainmenu"><div>
		<jdoc:include type="modules" name="mainmenu" style="xhtml" />
	</div></div>
	
	<div id="header"><div><div><div>
		<jdoc:include type="modules" name="header" style="xhtml" />
	</div></div></div></div>
	
	<div id="content"><div>
		<jdoc:include type="component" />
	</div></div>
	
	<!-- <div id="sidebar1"><div>
		<jdoc:include type="modules" name="sidebar1" style="xhtml" />
	</div></div> -->
	
	<div id="sidebar2"><div>
		<jdoc:include type="modules" name="sidebar2" style="xhtml" />
	</div></div>
	
	<div id="bottom"><div>
		<div><jdoc:include type="modules" name="bottom" style="xhtml" /></div>
		<div class="left">&copy; Rapids Family Health Team <?php echo date ('Y')?>. All Rights Reserved.</div>
		<div class="right">Site by<a href="http://www.ccistudios.com" target="_blank"> CCI Studios</a></div>
	</div></div>
	
</body>
</html>