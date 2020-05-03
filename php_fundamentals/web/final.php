<?php
    session_start();
    if($_SESSION['isRedirected'])
    {
        $post = $_SESSION['post'];
        unset($_SESSION['post']);
        unset($_SESSION['isRedirected']);


    }
    else
    {
        header('Location: index.php');
    }

?>


<!DOCTYPE html>
<html>
    <head>
        <title>PHP Fundamentals</title>
		<link href="assets/styles.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
		<div id="Header">
			<img src="assets/Dickens_Gurney_head.jpg" border="0" alt="">
			<h2>
				Mailing List Information
			</h2>
		</div>        
        <div id="Body">
            <div>
                <label>Favorite Author:</label> 
                <span><?=$post['author']?>&nbsp;</span>
            </div>		
            <div>
                <label>Favorite Century:</label>
                <span><?=$post['century'][0]?>&nbsp;</span>
            </div>
            <div>
                <label>Comments:</label>
                <span><?=$post['comments']?>&nbsp;</span>
            </div>
            <div>
                <label>Name:</label>
                <span><?=$post['name']?>&nbsp;</span>
            </div>
            <div>
                <label>E-mail Address:</label>
                <span><?=$post['email']?>&nbsp;</span>
            </div>
            <div>
                <label>Receive Newsletter:</label>
                <span><?=$post['newsletter']?>&nbsp;</span>
            </div>
        </div>
	</body>
</html>