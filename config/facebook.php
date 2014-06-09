<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


$config['facebook']['api_id'] = 'YOUR APP ID';
$config['facebook']['app_secret'] = 'YOUR APP SECRET';
$config['facebook']['redirect_url'] = 'http://www.yourwebsite.com/login';
$config['facebook']['permissions'] = array(
    'email',
    'user_location',
    'user_birthday'
);

?>
