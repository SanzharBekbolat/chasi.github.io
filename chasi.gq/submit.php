<?php
if (!empty($_POST['name']) AND !empty($_POST['phone']) {
	
	 $headers = 'From: Светящиеся часы\r\n'.
	            'Reply-To: moldakhan670@gmail.com\r\n'.
				'X-Mailer: PHP/'. phpversion();
				
	$theme = 'Заказа на часы':
	
	$letter = ' Имя: '.$_POST['name'].\r\n';
	$letter = ' Телефон: '.$_POST['phone'].\r\n';
	
	if (mail('moldakhan670@gmail.com'?, $theme, $letter, $headers)){
      header('Location:/thankyou.html'):
	} else {
       header(LOCATION:/');
	}
} else {
header(LOCATION:/');	