<div class="do-practice full" style="padding-top: 15px">
    <p><strong>{{translate('Test type')}}</strong>: {{subTest.trytest === 2 ? translate('Constructed response'): translate('Multiple choice')}}</p>
    <p><strong>{{translate('Number of questions')}}</strong>: {{subTest.quantity || 24}}</p>
    <p><strong>{{translate('Time for doing')}}</strong>: {{subTest.time || 45}} {{language=='en'? 'minutes': 'phút'}}</p>
    <div ng-hide="checkIsLogedIn()">
        <h2 class="text-center">{{language=='en'? 'You must': 'Bạn phải'}} <a href="#" onclick="return false" data-toggle="modal" data-target="#loginRegisterModal">{{language=='en'? 'login': 'đăng nhập'}}</a> {{language=='en'? 'to start studying': 'mới có thể học bài'}}</h2>
    </div>
    <div ng-show="checkIsLogedIn()">
        <div ng-hide="subTest.trial == 1 || checkIsPaid()">
            <h2 class="text-center">{{language=='en'? 'You must': 'Bạn phải'}} <a href="/about#guide">{{language=='en'? 'purchase the software': 'mua phần mềm'}}</a> {{language=='en'? 'to do this test': 'mới được làm bài kiểm tra này'}}</h2>
        </div>
        <div ng-show="subTest.trial == 1 || checkIsPaid()">
            <a href="/testSet/{{test.trytest==2 ? 'subtestwritting': 'subtestdoing'}}?category_id={{category_id}}&test_set_id={{test_set_id}}&test_id={{test_id}}&sub_test_id={{subTest.id}}" class="btn btn-primary btn-lg fa fa-play fa-3x text-white"> {{translate('Start')}}</a>
        </div>
    </div>
</div>