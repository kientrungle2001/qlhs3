<div class="full pb-4 pt-2 bg-cloud text-center">
	<a href="/news?news_category_id=147" class="btn btn-info btn-xs">HD sử dụng</a>
	<a href="/about#guide" class="btn btn-danger btn-xs">HD mua</a>
	<?php if(isset($_SESSION['userId'])){ ?>
	<a href="/profile" class="btn btn-warning btn-xs">LS học tập</a>
	<?php } else { ?>
		<button onclick="return alert('Đăng nhập để xem lịch sử');" class="btn btn-warning btn-xs">{{translate('Studying history')}}</button>
	<?php } ?>
</div>