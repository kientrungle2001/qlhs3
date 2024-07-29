<script type="text/javascript">
<?php if(isset($_REQUEST['copy']) && $_REQUEST['copy']) { ?>
	localStorage.setItem('copy_mode', '1');
<?php } else { ?>
	localStorage.removeItem('copy_mode');
<?php } ?>
window.location = '/';
</script>