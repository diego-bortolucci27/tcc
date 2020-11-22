<?php

    session_start();
    
	if(!$_SESSION['usuario'])
	{
		header('Location: formLogin.php');
		exit();
    }
?>