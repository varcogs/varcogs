<?php
/*
Purpose: check  gpc, special charecter and add slashes
*/
function mconnect()
{
	$mainc=mysqli_connect(DB_HOST, DB_USER, DB_PASSWRD, DB_NAME);
	return $mainc;
}
function ccMasking($number, $maskingCharacter = 'X') {
    return substr($number, 0, 4) . str_repeat($maskingCharacter, strlen($number) - 8) . substr($number, -4);
}

function prepSQL($value, $type = "Text") {
    if ($value == "") {
        return "NULL";
    } else {

        if ($type == "Number")
            return doubleval($value);

        else {

            if (get_magic_quotes_gpc() == 0) {

                $value = str_replace("'", "''", $value);

                $value = str_replace("\\", "\\\\", $value);
            } else {

                if (is_array($value)) {

                    $value = implode(",", $value);
                }

                $value = addslashes($value);

                $value = str_replace("\\'", "''", $value);

                $value = str_replace("\\\"", "\"", $value);
            }

            return "'" . $value . "'";
        }
    }
}

 function sendMail( $to, $subject, $from, $message ) {
    
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";      
      // More headers
      $headers .= 'From: '.$from . "\r\n";
      //$headers .= 'Cc: myboss@example.com' . "\r\n";
       
      mail($to,$subject,$message,$headers);  
          
    }
    
function pagename()
{
	$currentpage = basename($_SERVER['SCRIPT_NAME']);
	return $currentpage;
}

function getExtension($str) 
{
	$i = strrpos($str,".");
	if (!$i) { return ""; }
	$l = strlen($str) - $i;
	$ext = substr($str,$i+1,$l);
	return $ext;
}

function cleanStr($string) {
   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
   $string = strtolower($string);
   return preg_replace('/[^A-Za-z0-9.\-\_]/', '', trim($string)); // Removes special chars.
}

function get_ip() {

		//Just get the headers if we can or else use the SERVER global
		if ( function_exists( 'apache_request_headers' ) ) {

			$headers = apache_request_headers();

		} else {

			$headers = $_SERVER;

		}

		//Get the forwarded IP if it exists
		if ( array_key_exists( 'X-Forwarded-For', $headers ) && filter_var( $headers['X-Forwarded-For'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 ) ) {

			$the_ip = $headers['X-Forwarded-For'];

		} elseif ( array_key_exists( 'HTTP_X_FORWARDED_FOR', $headers ) && filter_var( $headers['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 )
		) {

			$the_ip = $headers['HTTP_X_FORWARDED_FOR'];

		} else {
			
			$the_ip = filter_var( $_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 );

		}

		return $the_ip;

	}
	
function get_authentication($url, $key) {
	
	   $postData = array(
		'domain' => $url,
		'domain_key' => $key
	);
$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => 'http://www.thewebhive.com/domain_authenticate',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData,
    CURLOPT_FOLLOWLOCATION => true
));

$output = curl_exec($ch);

    return $output;
}

?>