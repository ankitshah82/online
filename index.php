
<!DOCTYPE html>
<html lang="en">

<html>
	<head>

	<title>ONLINE COMPILER</title>
	<style type="text/css">

	#header{
		background-color: black;
		color:white;
		text-align: center;
		padding: 5px;
	}
	#footer{
		background-color: black;
		color:white;
		text-align: center;
		clear: both;
		position: fixed;
		bottom: 0;
		width: 100%;
		z-index: 100;
		height: 1em;
		margin-top:-3em;
	}

	form * {
  		display: block;
 		margin: 10px;
		width=400px;
		background-color: black;
		color: white; 
		
	}
	
	
	

	





	</style>

	</head>



		<body>		
		<div id="header">
		<h1>C/C++</h1>
		</div>

		

			<form method="post">
			<textarea id="codeeditor" 
			 name="codeeditor"
			 cols="55"
			 rows="15"
			 wrap="off"
			 
			 display="block
			 data-gramm="true"
			
			 data-txt_gramm_id="5ef8ad51-203f-fc00-68f0-5a5a4e6a80c4"
			 data-gramm_id="5ef8ad51-203f-fc00-68f0-5a5a4e6a80c4"
			 spellcheck="false"
			 data-gramm_editor="true"
			 style="z-index: auto;
			 position: relative;
			 width=400px;
			 line-height: normal;
			 margin-top: 50px;
			 font-size: 13.3333px;
			 transition: none;
			 "><?php if(isset($_POST['codeeditor']))
			{echo $_POST["codeeditor"];} ?></textarea>
			
			<input type="submit" value="Compile and run" name="submit" id="submit" >
			</form>


			
			<?php
			if(isset($_POST['codeeditor']))
			{
			$myfile = fopen("newfile.c", "w") or die("Unable to open file!");
			$txt = $_POST['codeeditor'];
			fwrite($myfile, $txt);
			
			fclose($myfile);
			/*$last_line = system('gcc H:\wamp\www\online-master\newfile.c -o newfile');
			echo $last_line;*/
			$output=shell_exec('g++ newfile.c 2>&1');
			echo $output;
			
			if(!$output){
			$output=shell_exec('a 2>&1');
			echo $output;
			
			shell_exec('del /f a.exe, newfile.c');
			}
			}
			/*$txt = "Jane Doe\n";
			fwrite($myfile, $txt);
			echo $_POST["codeeditor"];*/
			?>



			<div class="out"><pre style="font-size:17px;">
			
			
			
			
			</pre></div>
			
	




		<footer class="site-footer">
		<div id="footer">
		CJG
		</div>
			

		</body>



</html>