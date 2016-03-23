<?php

print "<div id='loginSplash'>";
print "</div>";

	print "<div id='loginSplash_container'>";
		print "<div id='closingX' onclick='closeSplash()'>&times;</div>";
		print "<div id='loginSplash_text'>";
		print "<h1>Looks like you don't have an account yet :(</h1>";
		print "<h2>Sign up for a free account!</h2>";
		print "<form action='signup.php' method='post' id='signUpForm'>";
			print "<h3>Username:</h3> <input type='text' name='unInput' id='unInput'>";
			print "<h3>Password:</h3> <input type='text' name='pwInput' id='pwInput'>";
			print "<h3>Email:</h3> <input type='text' name='emailInput' id='emailInput'>";
			print "<input type='button' onclick='checkSignUp()' value='Submit'>";
			print "<a href='login.php'><h3>Already have an account? Log in here!</h3></a>";
		print "</form>";
	print "</div>";
	
print "</div>";

?>