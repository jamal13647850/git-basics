<?php 
session_start();

if( isset($_POST['submit'])) {
   if( $_SESSION['security_code'] == $_POST['security_code'] && !empty($_SESSION['security_code'] ) ) {
		// If the answer is true. Insert you code for processing the form here, e.g emailing the submission, entering it into a database. 
		echo 'Thank you. Your message said "'.$_POST['message'].'"';
		unset($_SESSION['security_code']);
   } else {
		// If the answer is false. Insert your code for showing an error message here.
		echo 'Ups, you have provided an invalid security code! Please ';
?>
		<a href="form_example.php">reload</a>
<?PHP
   }
} else {
var $number;
		var $first;
		var $second;
		function __construct($first,$second)
		{
			$this->number = "0";
			$this->first = $first;
			$this->second = $second;
		}
		
		function generate_number()
		{
			$first=$this->first;
			$second=$this->second;
			$a=rand ($first,$second);
			
			$this->number= $a;					
		}
?>
	<span> github for designer <span>
	<form action="form_example.php" method="post">
		<label for="name">Name: </label><input type="text" name="name" id="name" /><br />
		<label for="email">Email: </label><input type="text" name="email" id="email" /><br />
		<label for="message">Message: </label><textarea rows="5" cols="30" name="message" id="message"></textarea><br />
		<img src="MathchaSecurityImages.php?difficulty=1&theme=t0" /><br />
		<label for="security_code">Security Code: </label><input id="security_code" name="security_code" type="text" /><br />
		<input type="submit" name="submit" value="Submit" />
	</form>
	<span>fgfdgfdgfdgfgfdgfd</span>
	<div>book nere</div>
<?php
	}
?>