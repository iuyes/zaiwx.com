<?php
	$layout = isset($layout) ? $layout : '';
	// Html view
	echo $this->Html->docType('html5');
	echo '<html xmlns="http://www.w3.org/1999/xhtml">';
	echo '<head>';
	echo $this->Html->charset();
	echo "<title>在微信</title>";
	echo $this->Html->meta('icon');
	echo $this->Html->meta('keywords', $cakeKeywords);
	echo $this->Html->meta('description', $cakeDescription);
	echo $this->Html->meta(array('name' => "author", 'content' => "liunian.CakeWX"));
	echo $this->Html->meta(array('name' => "generator", 'content' => "www.cakewx.com"));
	echo $this->Html->meta(array('name' => "width=device-width, initial-scale=1.0"));
	echo '<!-- basic styles -->'.$this->fetch('css_basic');
?>
<link rel="stylesheet" href="<?= Router::url('/js/Editor/themes/default/default.css') ?>" />
<script type="text/javascript">
var BASE_URL = '<?= Router::url("/", TRUE) ?>';
var UPLOAD_URL = '<?= Router::url("/lib/picUpload") ?>';
var ADMIN_URL = '<?= Router::url("/admin/", TRUE) ?>';
var ADMIN_WC_URL = '<?= Router::url($WC_BASE) ?>';
</script>
</head>
	<body>	
		<?php
			echo $this->Session->flash('flash', array('element' => 'flash'));
			echo $this->Session->flash('error', array('element' => 'flash', 'params' => array('tipsType' => "error")));
			echo $this->Session->flash('auth', array('element' => 'flash', 'params' => array('tipsType' => "error")));
			echo $this->fetch('content');
			echo $this->fetch('script_basic');
		?>
		<div id='ajcont' style="display:none">
			<div id="aj_box"></div>
		</div>
		<script type="text/javascript">
		var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
		document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fc6228d305de346509e945fdcf38501c4' type='text/javascript'%3E%3C/script%3E"));
		</script>
	</body>
</html>