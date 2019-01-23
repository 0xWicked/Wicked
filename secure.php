<?php
    if (isset($_POST['password']) && $_POST['password'] == '6asd4a8df7d6as8e46sas7d8f7asd') {
        setcookie("password", '6asd4a8df7d6as8e46sas7d8f7asd', strtotime('+2 days'));
        header('Location: index.php');
        exit;
    }

    if (isset($_POST['password']) && $_POST['password'] == 'lucid2489') {
        setcookie("password", 'testpass', strtotime('+1 days'));
        header('Location: https://shockchan.com/wp-content/uploads/lemonparty.jpg');
        exit;
    }  
?>




<!DOCTYPE html>
<html>
	<head>
		<title>
			0xWicked - Secure
		</title>
		<link href="assets/css/shit.css" rel="stylesheet" type="text/css">
		<link href="assets/css/star-animation.css" rel="stylesheet" type="text/css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	</head>
	<body>

      <div class="centershit">
		<img src="assets/media/logo.png"><br>
		<br>
        <br>


		<div style="position: fixed;
    text-align: center;
    left: 45.2%;
    top: 45%;">
        <p style="color: #fff;">Enter Password :)</p>
        <form method="POST">
            <input type="text" name="password">
        </form>
    </div>
    </div>


		
		<div class="bg-animation">
					<div id='stars'>
					</div>

					<div id='stars2'>
					</div>

					<div id='stars3'>
					</div>

					<div id='stars4'>
					</div>
				</div>





		












<footer class="demo-footer">
	<a href="#" target="_blank">Coded by Wicked</a>
</footer>






<iframe src="silence.mp3" allow="autoplay" id="audio" style="display:none"></iframe>

<audio id="player" autoplay loop>
    <source src="source.mp3" type="audio/mp3">
</audio>

		<div id="vidBG" width="600" height="800"></div>
	<script type="text/javascript">
		var videoList = ["http://0xwicked.pw/assets/media/vid1.mp4", "http://0xwicked.pw/assets/media/vid1.mp4"];
videoList.sort(function(a, b) {return 0.5 - Math.random()});

$("#vidBG").html("<video id='rawvideo' autoplay muted poster='' id='bgvid' loop><source src='" + videoList[0] + "' type='video/mp4'></video>");

var ValidPassword = $('#passsword').val() === 'lucid2489'; // pass

        if (ValidPassword === true) { 
            $('.valid').css('display', 'block');
            grant.access
        }
        else {
            $('.error').css('display', 'block');
        }

	</script>
	</body>
</html>