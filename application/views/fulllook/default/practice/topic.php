<?php $controller->js('controller/practice_exercise_list.js'); ?>
<div class="text-center guide"><i class="fa fa-star" aria-hidden="true"></i>
	{{translate('Select lesson to practice')}}
	<i class="fa fa-star" aria-hidden="true"></i>
</div>
<div class="practice-content p-3 full" ng-controller="practiceExerciseListController">
	<div class="row">
		<div class="col-4 col-md-2" ng-repeat="exerciseNum in exerciseNumsList">
			<a href="/practice/exercise?subject_id={{subject_id}}&topic_id={{topic_id}}&sub_topic_id={{sub_topic_id}}&exercise_number={{exerciseNum + 1}}" class="btn lesson full mb-3 btn-primary" ng-class="{'active': exerciseNum + 1 == exercise_number}">
				{{translate('Lesson')}}
				{{exerciseNum+1}}</a>
		</div>
	</div>
</div>