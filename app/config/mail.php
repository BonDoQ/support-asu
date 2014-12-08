<?php

return array(
 
    'driver' => 'smtp',
 
    'host' => 'smtp.gmail.com.',
 
    'port' => 465,
 
  'from' => array('address' => 'mohamedfathy234@gmail.com', 'name' => 'Support'),
 
    'encryption' => 'ssl',
 
    'username' => 'the site Mail',
 
    'password' => 'the site password',
 
    'sendmail' => '/usr/sbin/sendmail -bs',
 
    'pretend' => false,
 
);
