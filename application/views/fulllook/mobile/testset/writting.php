<?php $controller->view('testset/testset', $data); ?>
<div class="do-practice" style="text-align: center; padding-top: 50px;">
	<h2>{{translate(test, 'test.name')}}</h2>
	<p><strong>{{translate('Test type')}}</strong>: {{test.trytest === 2 ? translate('Constructed response'): translate('Multiple choice')}}</p>
	<p><strong>{{translate('Number of questions')}}</strong>: {{test.quantity || 24}}</p>
	<p><strong>{{translate('Time for doing')}}</strong>: {{test.time || 45}} {{language=='en'? 'minutes': 'phút'}}</p>
</div>

<?php $controller->js('controller/test_set_doing.js'); ?>
<div ng-controller="testSetDoingController">
	<div class="do-practice" ng-hide="test.trial == 1 || checkIsPaid()">
		<h2 class="text-center guide">{{language=='en'? 'You must': 'Bạn phải'}} <a href="/about#guide">{{language=='en'? 'purchase the software': 'mua phần mềm'}}</a> {{language=='en'? 'to do this test': 'mới được làm bài kiểm tra này'}}</h2>
	</div>
	
	<div ng-show="test.trial == 1 || checkIsPaid()">
		<?php $controller->view('testset/countdown_writting', $data)?>
	</div>
</div>