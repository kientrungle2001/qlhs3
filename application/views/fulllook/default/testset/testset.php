<h2 class="text-center title">{{translate(testSet, 'test.name')}}</h2>
<div class="row">
	<div class="col-12 text-center pt-5">
		<h2>{{translate('Choose a test to start')}}</h2>
		<a href="/testSet/test?category_id={{category_id}}&test_set_id={{test_set_id}}&test_id={{test.id}}" 
			class="btn btn-lg" 
			ng-class="{'active btn-primary': test.id == test_id, 'btn-secondary': test.id != test_id}"
			ng-repeat="test in testSet.children" 
			style="margin-right: 15px;"><?php if($controller->input->get('showDebug', true)):?>#{{test.id}}<?php endif;?>
			<span class="fa fa-star-o"></span> {{translate(test, 'test.name')}}</a>
	</div>
</div>