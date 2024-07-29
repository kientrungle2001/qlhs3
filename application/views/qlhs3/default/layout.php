<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="vi-vn">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Trang chủ</title>
	<script>

	setInterval(function() {
		serverTime++;
	}, 1000);
	</script>

	<?php $controller->css_libraries(); ?>

	
	<?php
        $controller->js('array.js');
        $controller->js('app.js');
	?>
    <?php $controller->css('style.css') ?>
</head>

<body class="<?php echo $controller->router->fetch_class();?>-page hold-transition sidebar-mini layout-fixed">
	<div>
		<?php $controller->view($view, $data);?>
	</div>
    <?php $controller->js_libraries(); ?>
</body>

</html>
