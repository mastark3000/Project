<?php
	echo "";
  ?>

<!DOCTYPE html>
<html>
<head>
	<title>signup</title>
	<script type="text/javascript" src="font.js"></script>	

	<style type="text/css">
		body{
			/*background-color: blue;*/
		}
		form{
			width: 50%;
			margin: 0 auto;
			margin-top: 2%;
			padding: 2%;
			border-radius: 10px;
			border: 2px solid white;
			/*height: 5em;*/
			background-color: #000080;
		}
		table{
			margin: 0%;
			padding: 1%;
			width: 100%;
			border-collapse: collapse;
		}
		/*caption{
			margin-bottom: 3em;
			font-family: helvetica,serif,sans-serif;
			font-weight: bolder;
			font-size: 20px;
			background-color: blue;
			padding: 2em;
			border-radius: 10px 10px 0px 0px;
		}*/
		
		tr{
			margin: 1em 0em;
		}
		td{
			outline: none;
			width: 50%;
			/*padding: 1%;*/
			border: none;
			/*padding: 2%;*/
			font-family: helvetica,sans-serif,serif;
		}
		input{
			outline: none;
			border-radius: 10px 20px;
			width: 100%;
			height: 2em;
			padding: 2%;
			font-size: 16px;
			border: 2px solid grey;
		}
		tr td:first-child{
			text-align: left;
			font-weight: bold;
		}
		tr:nth-element(6){
			margin-top: 3em;
			text-align: center;
		}
		.svg-inline--fa.fa-w-20,.svg-inline--fa.fa-w-16,.svg-inline--fa.fa-w-14,.svg-inline--fa.fa-w-12{
			padding: 2%;
		   width: 15em;
		    height: 2em;
		    float: left;
		    background-color: white;
		    color: blue;
		    border-radius: 10px 20px;
		}
		button{
			margin: 0 auto;
			width: 100%;
			border-radius: 0px 0px 10px 10px;
			height: 3em;
			padding: 2%;
			margin-top: 3em;
			border-collapse: collapse;
		}
		h2{
			color: white;
			text-align:right;
			vertical-align: middle;
		}
		h2,#f{
			display: inline-block;
			width: 50%;
			margin: 0%;
			margin-bottom: 1em;
		}
		#f{
			width: 2em;
			float: right;
			height: 0.5em;
			
			
		}
	</style>
</head>
<body>
	<div id="form">
		<form method="GET">
			<table>
				<!-- <caption>SignUp</caption> -->
				<h2>SIGNUP<i class="far fa-sign-in"  id="f"></i></h2>
				<tr>
					<td><i class="far fa-users"></i></td>
					<td><input type="text" name="usrnm" placeholder="username"></td>
				</tr>
				<tr>
					<td><i class="far fa-envelope"></i></td>
					<td><input type="text" name="email" placeholder="email"></td>
				</tr>
				<tr>
					<td><i class="fal fa-table"></i></td>
					<td><input type="date" name="date" placeholder="date of birth"></td>
				</tr>
				<tr>
					<td><i class="fad fa-phone-volume"></i></td>
					<td><input type="tel" name="phone" placeholder="phone number"></td>
				</tr>
				<tr>
					<td><i class="fad fa-key"></i></td>
					<td><input type="password" name="pass" placeholder="password"></td>
				</tr>
				<tr>
					<td><i class="fad fa-key"></td>
					<td><input type="password" name="rpass" placeholder="confirm password"></td>
				</tr>
			</table>
			<button>SignUp</button>
		</form>
	</div>

</body>
</html>