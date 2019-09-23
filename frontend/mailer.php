<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/**
 * 1.引入
 * 2.实例化
 * 3.配置属性
 * 4.调用发送
 
 */


 require('../phpmailer/src/PHPMailer.php');
 require('../phpmailer/src/Exception.php');
 require('../phpmailer/src/SMTP.php');
$phpmailer = new PHPMailer(true);

/*
设置phpmailer发信用的方式
可以用win 下的mail（）来发；
可以用Linux下的sendmail.gmail组件来发
可以用smtp协议登录到某个账户上来发
*/
$phpmailer->IsSMTP(); //用SMTP协议来发
$phpmailer->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$phpmailer->SMTPAuth   = true;                                   // Enable SMTP authentication
$phpmailer->Username   = '305055411lgt@gamil.com';                     // SMTP username
$phpmailer->Password   = '13903676251lgT';                               // SMTP password
$phpmailer->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
$phpmailer->Port       = 587;     // TCP port to connect to


$phpmailer->From ='305055411lgt@gamil.com';
$phpmailer->FromName ='305055411lgt';
$phpmailer->Subject ='test';
$phpmailer->Body ='test';


//
$phpmailer->AddAddress('305055411lgt@gmail.com');
$phpmailer->AddCC('305055411@qq.com','abc'); 
echo $phpmailer->send()?"ok":"failed";





?>