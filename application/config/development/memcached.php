<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Memcached settings
| -------------------------------------------------------------------------
| Your Memcached servers can be specified below.
|
|	See: https://codeigniter.com/user_guide/libraries/caching.html#memcached
|
*/
$config['memcached'] = array(
	'default' => array(
		'hostname' => '127.0.0.1',
		'port'     => '11211',
		'weight'   => '100',
	),
);

/*$config['memcached'] = array(
		'default' => array(
				'hostname' => '192.168.33.18',
				'port' => '11211',
				'weight' => 30,
		),
);*/
