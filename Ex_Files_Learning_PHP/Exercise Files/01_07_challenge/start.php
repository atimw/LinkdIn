<?php 
$name= "Teresa"; // Heading 1
$city = "NYC";
$movie = "Star Wars"; //Italics
$friend = "George"; //Bold
$candy = "Sour Patch Kids";

// Challenge, write a story about a person going to a city to see a movie with a friend where they select their favorite candy. Format variable with commented text


// My solution
echo '<h1>' . $name . '</h1>' . ', and <b>' . $friend . '</b> are going to ' . $city . ' to see <i>' . $movie . '</i>. They purchase their favorite candy to snack on, ' . $candy . '</p>';

echo '<br>';

?>
<!-- Another solution -->
<h1>Hello <?php echo $name; ?>!</h1>
<p>So glad you can join us in <?php echo $city; ?> today! You will be <b><?php echo $friend; ?></b>'s guide as you do a range of activities.</p><p>You will end your day by seeing <i><?php echo $movie ?></i> at 7:00pm. Make sure to bring the money you've been provided. The movie ticket is $12. <?php echo $friend; ?>'s favorite candy is <?php echo $candy; ?>, so grab some of those too. <p>... and of-course, "May the force be with You!"</p>