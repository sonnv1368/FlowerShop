<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$template['default']['template']        = 'includes/default/home_template';
$template['default']['regions']         = array(
    '_top',
    '_content',
    '_bottom',
    '_sidebar'
);
$template['default']['parser']          = 'parser';
$template['default']['parser_method']   = 'parse';
$template['default']['parse_template']  = false;

/** */

$template['admin']['template']        = 'admin/default_admin_template';
$template['admin']['regions']         = array(
    '_top',
    '_content',
    '_bottom'
);
$template['admin']['parser']          = 'parser';
$template['admin']['parser_method']   = 'parse';
$template['admin']['parse_template']  = false;