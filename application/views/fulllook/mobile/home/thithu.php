<?php $controller->js('controller/test_set_list.js'); ?>
<div id="thithu" class="full" ng-controller="testSetListController">
	<div class="container">
		<div class="text-center heading mt-2 mb-4 text-white">
			{{translate('Tran Dai Nghia Mock Exam')}}
		</div>
	</div>
	<div class="container">
		<div class="row" ng-init="selectedTestSetPage = 0">

			<div class="col-xs-12 clearfix" ng-repeat="testSet in testSets | orderBy: 'ordering'" ng-show="inPage($index, selectedTestSetPage, 4)">
				<div class="box-thithu bg-white full-xs">
					<h3 class="text-center head-box"><a href="/testSet/detail?category_id=1413&test_set_id={{testSet.id}}">{{translate(testSet, 'test.name')}}</a></h3>
					<div class="box-body">
						<div ng-repeat="test in testSet.children | orderBy: 'ordering'">
							<div class="link-box text-center">
								<a href="/testSet/detail?category_id=1413&test_set_id={{testSet.id}}&test_id={{test.id}}" class="text-color">
									{{translate(test, 'test.name')}}
									<span ng-show="test.trial==1" class="badge badge-pill badge-danger">Free</span>
								</a>
							</div>
							<div class="link-box text-center" ng-repeat="subTest in test.children | orderBy: 'ordering'">
								<a href="/testSet/subtest?category_id=1413&test_set_id={{testSet.id}}&test_id={{test.id}}&sub_test_id={{subTest.id}}" class="text-color">
									{{translate(subTest, 'test.name')}}
									<span ng-show="subTest.trial==1" class="badge badge-pill badge-danger">Free</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="row">
			<div class="col-xs-12 text-center">
				<nav aria-label="Navigation">
					<ul class="pagination justify-content-center">
						<li class="page-item" ng-repeat="page in range(1, totalPage(testSets.length, 4), 1)" ng-click="selectTestSetPage(page-1)" ng-class="{'active': selectedTestSetPage == page-1}"><a href="#" class="page-link" onclick="return false;">{{page}}</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>