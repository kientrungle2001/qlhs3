<div class="full pb-4 pt-2 bg-cloud text-center">
	<a href="/news?news_category_id=1377" class="btn btn-warning">{{translate('News')}}</a>
	<a href="/news?news_category_id=147" class="btn btn-info">{{translate('User manual')}}</a>
	<a href="/about#guide" class="btn btn-danger">{{translate('Purchase Guide')}}</a>
	<?php if(isset($_SESSION['userId'])){ ?>
	<a href="/profile" class="btn btn-warning">{{translate('Studying history')}}</a>
	<?php } else { ?>
		<button onclick="return alert('Đăng nhập để xem lịch sử');" class="btn btn-warning">{{translate('Studying history')}}</button>
	<?php } ?>
</div>