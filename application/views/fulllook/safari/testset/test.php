<?php $controller->view('testset/testset', $data); ?>
<div class="do-practice full" style="text-align: center; padding-top: 50px;">
	<h2>{{translate(test, 'test.name')}}</h2>
	<p><strong>{{translate('Test type')}}</strong>: {{test.trytest === 2 ? translate('Constructed response'): translate('Multiple choice')}}</p>
	<p><strong>{{translate('Number of questions')}}</strong>: {{test.quantity || 24}}</p>
	<p><strong>{{translate('Time for doing')}}</strong>: {{test.time || 45}} {{language=='en'? 'minutes': 'phút'}}</p>
	<div ng-hide="checkIsLogedIn()">
		<h2 class="text-center">{{language=='en'? 'You must': 'Bạn phải'}} <a href="#" onclick="return false" data-toggle="modal"
				data-target="#loginRegisterModal">{{language=='en'? 'login': 'đăng nhập'}}</a> {{language=='en'? 'to start studying': 'mới có thể học bài'}}</h2>
	</div>
	<div ng-show="checkIsLogedIn()">
		<div ng-hide="test.trial == 1 || checkIsPaid()">
		<h2 class="text-center">{{language=='en'? 'You must': 'Bạn phải'}} <a href="/about#guide">{{language=='en'? 'purchase the software': 'mua phần mềm'}}</a> {{language=='en'? 'to do this test': 'mới được làm bài kiểm tra này'}}</h2>
		</div>
		<div ng-show="test.trial == 1 || checkIsPaid()">
			<a href="/testSet/{{test.trytest==2 ? 'writting': 'doing'}}?category_id={{category_id}}&test_set_id={{test_set_id}}&test_id={{test_id}}" class="btn btn-danger btn-lg fa fa-play fa-3x text-white"> {{translate('Start')}}</a>
		</div>
	</div>
	
</div>