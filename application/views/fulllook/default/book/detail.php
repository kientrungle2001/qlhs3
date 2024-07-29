<script>
userBookId = <?php echo $controller->input->get('user_book_id', true)?>;
</script>
<?php $controller->js('controller/book_detail.js'); ?>
<div class="full practice pb-5" ng-controller="bookDetailController">
	<div class="container mt-4 mb-3">
		<div class="main-shadow full p-3">
			<div class="full  p-3 mb-3">
				<h4 class="text-center t-weight ">CHI TIẾT VỞ BÀI TẬP</h4>
				<p class="text-center t-weight"><a href="/profile">Quay lại</a></p>
			</div>
			<!-- Hiển thị {{translate('Number of questions')}} -->
			<div class="full p-3 mb-3">
				<div class="row">
				<div class="col-md-4 offset-md-4">
				<table class="table table-bordered">
					<tr>
				      <th scope="row">Số câu đúng</th>
				      <th scope="row">{{lessons.mark}}</th>
				      
				    </tr>
				    <tr>
				      <th scope="row">{{translate('Total of questions')}}</th>
				      <th scope="row">{{lessons.quantity_question}}</th>				      
				    </tr>
				</table>
				</div>
				</div>
			</div>
			<!-- chi tiết về bài làm của hs -->
			<div class="p-3 mb-3 row">
				<div ng-repeat="question in questions" class="col-md-8 offset-md-2">
					<div class="question clearfix">
						<div class="item cau">
							<div id="{{question.questionId}}" class="stt">{{translate('Question')}}:  {{$index+1}}</div>
						</div>
						<div class="nobel-list-md choice">
							<div ng-if="lessons.lang != 'vn'" class="ptnn-title full" mathjax-bind="formatWritting(question, question.name)"></div>
							<div ng-if="lessons.lang == 'vn'" class="ptnn-title full" mathjax-bind="formatWritting(question, question.name_vn)"></div>
							<table class="full">
							<tbody>
								<tr ng-repeat="answer in question.ref_question_answers" ng-class="{'font-weight-bold text-success': answer.status==1, 'font-weight-bold text-danger': answer.id == userAnswers[question.id]&& answer.status !=1 }">
									<td style="padding: 10px;" ng-if="lessons.lang != 'vn'">
										<input  type="radio" name="{{question.id}}" id="{{answer.id}}"  value="{{answer.id}}" ng-checked="answer.id == userAnswers[question.id]" disabled />
										<span class="answers_474_38915 pl10" mathjax-bind="answer.content"></span>										

									</td>
									<td style="padding: 10px;" ng-if="lessons.lang == 'vn'">
										<input  type="radio" name="{{question.id}}" id="{{answer.id}}"  value="{{answer.id}}" ng-checked="answer.id == userAnswers[question.id]" disabled  />
										<span class="answers_474_38915 pl10" mathjax-bind="answer.content_vn"></span>
									</td>
								</tr>
								<tr  class="bg-success text-white" ng-show="!question.detect_writing && trueAnswers[question.id]== userAnswers[question.id]">
									<td style="padding: 10px;">
										{{translate('You Are Right')}}
									</td>
									<td colspan="2"></td>
								</tr>
								<tr class="bg-warning text-white" ng-show="!question.detect_writing && userAnswers[question.id] != 0 && trueAnswers[question.id] != userAnswers[question.id]">
									<td style="padding: 10px;">
										{{translate('Wrong Answer')}}
									</td>
								</tr>
								<tr class="bg-warning text-white" ng-show="!question.detect_writing && userAnswers[question.id]== 0">
									<td style="padding: 10px;">
										Bạn chưa trả lời
									</td>
								</tr>
							</tbody>
						</table>
						</div>
					</div>
					<hr />
				</div>
			</div>
		</div>
	</div>

</div>

