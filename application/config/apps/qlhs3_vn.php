<?php
$config['apps'][] =
	[
		'name' => 'qlhs3',
		'host'	=>	'qlhs3.vn',
		'aliases' => ['qlhs3.vn:3001'],
		'view_packages' => ['qlhs3'],
		'css_packages' => ['qlhs3'],
		'js_packages' => ['qlhs3'],
		'media_packages' => ['qlhs3'],
		'devices' => [
			[
				'conds' => false,
				'result' => [
					'view_packages' => ['default'],
					'css_packages' => ['default'],
					'js_packages' => ['default'],
					'media_packages' => ['default'],
					'css_libraries' => ['default'],
					'js_libraries' => ['default']
				]
			]
		]
	];
$config['packages'][] =
	[
		'name' => 'qlhs3',
		'devices' => [
			[
				'name' => 'default',
				'css_libraries' => [
					[
						'name' => 'bootstrap',
						'version' => '4.3.1',
						'file' => 'dist/css/bootstrap.min.css'
						//'file' => 'scss/css/bootstrap.css?_=' . time()
					],
					[
						'name' => 'font-awesome',
						'version' => '4.7.0',
						'file' => 'css/font-awesome.min.css'
					],
                    [
                        'name' => 'AdminLTE',
                        'version' => '3.2.0',
                        'files' => [
                            'plugins/fontawesome-free/css/all.min.css',
                            'plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
                            'plugins/icheck-bootstrap/icheck-bootstrap.min.css',
                            'plugins/jqvmap/jqvmap.min.css',
                            'dist/css/adminlte.min.css',
                            'plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
                            'plugins/daterangepicker/daterangepicker.css',
                            'plugins/summernote/summernote-bs4.min.css'
                        ]
                    ]
				],
				'js_libraries' => [
					[
						'name' => 'jquery',
						'version' => '3.3.1',
						'file' => 'jquery.min.js'
					],
					[
						'name' => 'bootstrap',
						'version' => '4.3.1',
						'file' => 'dist/js/bootstrap.min.js'
					],
					[
						'name' => 'angularjs',
						'version' => '1.7.8',
						'files' => ['angular.min.js', 'angular-sanitize.min.js']
					],
					[
						'name' => 'AdminLTE',
						'version' => '3.2.0',
						'files' => [
                            'plugins/jquery/jquery.min.js',
                            'plugins/jquery-ui/jquery-ui.min.js',
                            'plugins/bootstrap/js/bootstrap.bundle.min.js',
                            'plugins/chart.js/Chart.min.js',
                            'plugins/sparklines/sparkline.js',
                            'plugins/jqvmap/jquery.vmap.min.js',
                            'plugins/jqvmap/maps/jquery.vmap.usa.js',
                            'plugins/jquery-knob/jquery.knob.min.js',
                            'plugins/moment/moment.min.js',
                            'plugins/daterangepicker/daterangepicker.js',
                            'plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
                            'plugins/summernote/summernote-bs4.min.js',
                            'plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
                            'dist/js/adminlte.js'
                        ]
					]
				]
			]
		]
	];
