<?php
$route['default_controller'] = 'Blog';
$route['blog'] = 'blog/index';
$route['blog/view/(:num)'] = 'blog/view/$1';
$route['blog/create'] = 'blog/create';
