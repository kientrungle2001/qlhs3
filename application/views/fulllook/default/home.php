<?php $controller->view('home/slideshow', $data); ?>
<?php $controller->view('home/submenu', $data); ?>
<?php $controller->view('home/practice', $data); ?>
<img src="http://tdn.nextnobels.com/assets/images/background1.png" alt="" class="full" />
<?php $controller->view('home/ontienganh', $data); ?>
<?php if ($enabledTTV = false) : ?>
    <?php $controller->view('home/ontoan', $data); ?>
    <?php $controller->view('home/ontiengviet', $data); ?>
<?php endif; ?>
<?php $controller->view('home/ontonghopset', $data); ?>
<img src="http://tdn.nextnobels.com/assets/images/background2.png" alt="" class="full" />
<?php $controller->view('home/thithu', $data); ?>
<?php $controller->view('home/dethitdn', $data); ?>
<img ng-hide="language=='en'" src="/assets/images/lydo_vn.jpg" alt="" class="full" />
<img ng-hide="language!='en'" src="/assets/images/lydo_en.jpg" alt="" class="full" />
<?php $controller->view('home/dangkytuvan', $data); ?>
<?php $controller->view('home/testimonial', $data); ?>