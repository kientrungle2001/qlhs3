<?php $controller->js('controller/test_detail.js');?>
<div class="full practice pt-4 pb-5" ng-controller="testDetailController">

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-3">
				<div class="bg-success clearfix mb-3">
					<button type="button" class="navbar-toggle collapsed heading" data-toggle="collapse" data-target="#sidebar"
						aria-expanded="false">
						Chọn đề thi <i class="fa fa-bars text-danger" aria-hidden="true"></i>
					</button>
				</div>
				<div id="sidebar" class="navbar-collapse collapse">
					<div class="main-shadow full">
						<div class="full">
							<div style="border-radius: 5px 0px 0px 0px;" class="nav-link text-center title-pr text-white bg-primary">
							{{translate(category, 'category.name')}}</div>
						</div>
						
								<ul class="list-group full vocabulary">
								<li class="list-group-item" ng-repeat="test in tests" ng-show="language=='vn'" ng-class="{'active sub-active': test.id==test_id}">
								<a href="/test/detail?category_id={{category_id}}&test_id={{test.id}}">{{test.name || test.name_en}} {{test.trial? ' - Free': ''}}</a></li>
								<li class="list-group-item" ng-repeat="test in tests" ng-show="language!='vn'" ng-class="{'active sub-active': test.id==test_id}">
								<a href="/test/detail?category_id={{category_id}}&test_id={{test.id}}">{{test.name_en || test.name}} {{test.trial? ' - Free': ''}}</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-9">
				<div class="main-shadow full">
					<h2 class="text-center title">{{translate(category, 'category.name')}}</h2>
					<div class="practice-content p-3 full">
						<div class="do-practice text-center" style="padding-top: 50px;">
							<h2>{{translate(test, 'test.name')}}</h2>
							<p><strong>{{translate('Test type')}}</strong>: {{test.trytest === 2 ? translate('Constructed response'): translate('Multiple choice')}}</p>
							<p><strong>{{translate('Number of questions')}}</strong>: {{test.quantity || 24}}</p>
							<p><strong>{{translate('Time for doing')}}</strong>: {{test.time || 45}} {{language=='en'? 'minutes': 'phút'}}</p>

							<div ng-hide="checkIsLogedIn()">
								<h2 class="text-center guide">{{language=='en'? 'You must': 'Bạn phải'}} <a href="#" onclick="return false" data-toggle="modal"
										data-target="#loginRegisterModal">{{language=='en'? 'login': 'đăng nhập'}}</a> {{language=='en'? 'to start studying': 'mới có thể học bài'}}</h2>
							</div>

						</div>

						<div ng-show="checkIsLogedIn()">
								<!-- Đã login -->
								<?php
								if(isset($child_view)) {
									$controller->view($child_view, $data);
								} else { ?>
									<div ng-show="test.trial == 1 || checkIsPaid()" class="text-center">
										<a href="/test/doing?category_id={{category_id}}&test_id={{test_id}}" class="btn btn-primary fa fa-play-circle-o fa-3x"> {{translate('Start')}}</a>
									</div>
									<div ng-hide="test.trial == 1 || checkIsPaid()" class="text-center">
										<h2 class="text-center guide">{{language=='en'? 'You must': 'Bạn phải'}} <a href="/about#guide">{{language=='en'? 'purchase the software': 'mua phần mềm'}}</a> mới được xem bài kiểm tra này</h2>
									</div>
								<?php } ?>
							</div>
					</div>

					<img class="img-fluid full" src="http://tdn.nextnobels.com/assets/images/bg-huongdan.png">
				</div>
			</div>
		</div>
	</div>
</div>

<style>
.text-white {color: white !important;}
.list-group-test-set-item {background-color: #bbb !important;}
.list-group-test-set-item.active {background-color: #fbd65b !important;}
.list-group-item.sub-active {background-color: #ffe693;}
.list-group-item.sub-active > a {color: #333;}
.inline {display: inline;}
</style>
