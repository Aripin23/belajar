<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['ras'] = 'ras';

$route['asosiasi'] = 'asosiasi';
$route['welcome'] = 'welcome';

$route['default_controller'] = 'asosiasi/view';

$route['(:any)'] = 'asosiasi/view/$1';
 

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
