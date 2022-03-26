
<form method="post" name="contact" action="process.php">
<!--name-->
	<label for="name">Name:</label>
	<input type="text" name="name" placeholder="Your name"><br>
<!--email-->
	<label for="email">EMail:</label>
	<input type="email" name="email" placeholder="Your email"><br>
<!--reason-->
	<label for="reason">Reason for contacting:</label>
	<select name="reason">
		<option>Question</option>
		<option>Concern</option>
		<option>Greeting</option>
	</select><br>
<!--message-->	
	<label for="message">Message:</label>
	<input type="text" name="message" placeholder="Your message" maxlength="120"><br>
<!--submit-->
  <input type="submit" value="Submit">
</form> 