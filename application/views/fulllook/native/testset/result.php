<!--show result-->
<div class="modal" role="dialog" id="resultModal" aria-labelledby="gridSystemModalLabel" aria-hidden="false">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button style="right: 15px;" type="button" class="close absolute" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
				<h3 class="modal-title text-center title-blue" id="gridSystemModalLabel"><b>{{translate('Result')}}</b></h3>
			</div>
			
			<div class="modal-body">
				<div class="row">
						<div class="col-md-8 question_true control-label">{{translate('number of right answers')}} </div> 
						<div class="col-md-4 num_true title-blue">{{totalRights}}</div>
				</div>	
				<div class="row">	
					<div class="col-md-8 question_false control-label">{{translate('number of wrong answers')}} </div> 
					<div class="col-md-4 num_false title-red">{{totalWrongs}}</div>
				</div>
				<div class="row">
					<div class="col-md-8 question_total control-label">{{translate('Total of questions')}} </div> 
					<div class="col-md-4 num_total">{{questions.length}}</div>
				</div>
			</div>
			<div class="modal-footer">
				<div class=" full text-center">
					<button class="btn btn-sm btn-danger top10" onclick="window.location='/#practice'"> 
						<span >{{translate('Select other subject')}}</span> 
						<span class="glyphicon glyphicon-arrow-left"></span>
					</button>
					<button id="show-answers-on-dialog" class="btn btn-sm btn-danger top10 " name="show-answers"  ng-click="showAnswers();" ng-show="practiceStep=='finishPractice'" ng-disabled="showAnswersStep=='showAnswers'" type="button" onclick="jQuery('#resultModal').modal('hide');">
						<span class="glyphicon glyphicon-check"></span>
						{{translate('Show Answers')}}							
					</button>
					<button type="button" class="btn btn-sm btn-success top10" onclick="jQuery('#resultModal').modal('hide'); jQuery(window).scrollTop(0)">
						<span class="glyphicon glyphicon-arrow-right hidden-xs"></span> {{translate('Select other lesson')}}
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
