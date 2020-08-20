<!DOCTYPE html>
<html>
<head>
	<title>signin</title>
	<style type="text/css">
		body{
				padding: 2em;
			    width: 40%;
			    margin: auto;
			    margin-top: 5em;
			    background-color: #000080;
		}
		form{
/*			background-color: white;*/
		    padding: 2em;
		    width: 80%;
		    margin: auto;
		    
		}
		table{
			color: blue;
			width: 60%;
			height: 15em;
			background-color: white;
			padding: 2em;
			border: 2px solid blue;
			border-radius: 10px;
		}
		h2{
			color: white;
			text-align: center;
			vertical-align: bottom;
			width: inherit;
		}
		tr td:nth-child(){
			width: 2em;
		}
		td>input{
			height: 3em;
			width: 15em;
			outline: none;
			float: right;
			border:2px solid lightblue;
		}
		td{
			width: 50%;
		}
		
		.svg-inline--fa.fa-w-16,.svg-inline--fa.fa-w-20 {
		    width: 2em;
			padding: 5%;
			height: 2.5em;
			color: white;
			background-color: blue;
			border-radius: 10px;
			float: right;
		}
	</style>
	<script type="text/javascript" src="font.js"></script>
</head>
<body>
	<form>
		<table>
			<h2>LOGIN</h2>
			<tr>
				<td><i class="far fa-users"></i></td>
				<td><input type="text" name="email" placeholder="email"></td>
			</tr>
			<tr>
				<td><i class="fad fa-key"></i></td>
				<td><input type="text" name="pass" placeholder="Password"></td>
			</tr>
		</table>
	</form>
</body>
</html>