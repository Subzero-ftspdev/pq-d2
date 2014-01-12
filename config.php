<?php
/*
 *      config.php
 *      
 *      pq-d2 - A PHP IRC ROBOT
 *      
 *      Our configuration
 *      
 */

// Default Config

$config=array(
     // the Bot array contains info on how to login
	'bot'=>array(
		'nick'=>'pq-d2',
		'altnick'=>'beep boop',
		'username'=>'pq-d2',
		'realname'=>'This isn\'t the droid you are looking for',
		'host' => 'localhost',
		'servername'=>'p2pnet',),
     // network
	'network'=>array(
        // servers is an array, you can specify more than 1 server
        // format: pass@server:port
		'servers'=>array('irc.choopa.net:6667'),
		),
	'channels'=>array(
		// channels to join
		array('name'=>'#pdq'),
		// Add more
		//array('name'=>'#bots'),
		),
	);
