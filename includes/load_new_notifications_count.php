<?php
	require '../config/config.php';
	require 'classes/Notification.php';
	try{
		$notification = new Notification($conn, $_SESSION['username']);
		$count = $notification->getUnreadNotificationsCount();
		if($count > 99){
			echo "99+";
		}elseif($count != 0){
			echo $count;
		}	
	}catch(Exception $e){
		// do nothing on session out
	}
?>