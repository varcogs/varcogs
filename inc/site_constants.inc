<?php
//site constants
define('SITE_NAME','Varcogs ');
define('AUTHOR_NAME','Varcogs');
define('AUTHOR_SITE','//www.varcogs.com/');
define('FROM_MAIL','info@varcogs.com');  
 
define('SALT', 'e74dc0e91be62c8ad3e663d6dd456a5334cc4d505ff115f3bfb90cb2f48dc16a3340ca');
//DB constants
if($_SERVER['HTTP_HOST']!='localhost')
{ 
	define('DB_HOST','localhost');
	define('DB_USER','varco_user');
	define('DB_PASSWRD','varco_user@123');
	define('DB_NAME','easeopsc_varco_db');
	define('BETA_URL','/');	
	define('SITE_URL','http://'.$_SERVER['HTTP_HOST'].'');	
	define('STATIC_CONTENT','//cdn.thewebhive.com/isb/');	
	define('DOMAIN_KEY','56e24ff5dd86e'); 
}
else
{ 	
	define('DB_HOST','localhost');
	define('DB_USER','root');
	define('DB_PASSWRD','twh123');
	define('DB_NAME','db_varcogsdb');
	define('BETA_URL','/');
	define('SITE_URL','http://'.$_SERVER['HTTP_HOST'].'/varcogs');	
	define('STATIC_CONTENT','//cdn.thewebhive.com/isb/');	
	define('DOMAIN_KEY','56e24ff5dd86e'); 
}
if(isset($_GET['id']))
{ 	define('PGID',preg_replace('#[^0-9]#', '', $_GET['id']));  }
else
{ 	define('PGID',''); }

if(isset($_GET['title']))
{ 	define('PGTITLE',preg_replace('#[^0-9a-z_-]#', '', $_GET['title']));  }
else
{ 	define('PGTITLE',''); }

?>