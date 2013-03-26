<?php

/**
 * This examples shows how Mandrill library is used to send a message.
 */

require('../Mandrill.php');
require('config.php');

// since we are using php I prefer to keep my data in an array
$request = array (
  				"type" => "messages",
					"call" => "send",
					"message" => array (
						"html" => "<h1>example html</h1>", 
						"text" => "example text", 
						"subject" => "example subject", 
						"from_email" => "chad@minuszeromedia.com", 
						"from_name" => "Chad", 
						"to" => array(
								array(
								"email" => "chadwick37@gmail.com", 
								"name" => "Chad Baron"
								)
							),
						)
					);
				
				$ret = Mandrill::call($request);
				echo json_encode($ret);
