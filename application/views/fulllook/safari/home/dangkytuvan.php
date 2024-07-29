<div class="full bg4">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6">
				<h3 id="dangkydungthu" class="heading text-uppercase text-center mb-3 text-white">{{translate('Sign up for a trial')}}</h3>
				
				<form method="post">
					<div class="form-group mb-4">
					    <input type="text" ng-model="advice.name" class="form-control input" placeholder="{{translate('Full name')}}" required>
					    
					</div>
					<div class="form-group mb-4">
					    <input type="text" ng-model="advice.phone" class="form-control input" placeholder="{{translate('Phone number')}}" required>					    
					</div>
					<div class="form-group mb-4">
					    <input type="email" ng-model="advice.email" class="form-control input" placeholder="Email" required>
					    
					</div>
					<div class="form-group alert" ng-class="{'alert-danger': advice.success == 0, 'alert-success': advice.success== 1}" ng-show="advice.success" ng-bind-html="advice.message">
						
					</div>
					<div class="form-group text-center">						
						<input type="submit" class="btn dangki" ng-click="registerForAdvice()" value="{{translate('Sign up')}}">
						
					</div>
				</form>
			</div>
			<div class="col-xs-12 col-md-6">
				<h3 class="heading text-uppercase mb-3 text-center text-white">{{translate('Tuition')}}</h3>
				<div class="box-hocphi full text-center">
					<div class="hocphi full">
						{{translate('LEARN AND PREPARE IN VIETNAMESE, ENGLISH AND DUAL LANGUAGE')}}  <br> 
						{{translate('Only')}} <span class="fs29">900.000</span> VNĐ <br> 
						{{translate('For')}}<span class="fs29">{{translate('1 year')}}</span> {{translate('of use')}}<br> 
					</div>
					
					<a href="/about#guide" class="buynow full">
					{{translate('Buy now')}}
					</a>
				</div>
			</div>
		</div>
	</div>
</div>