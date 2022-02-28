<?php 
$name= "Teresa"; // Heading 1
$city = "NYC";
$movie = "Star Wars"; //Italics
$friend = "George"; //Bold
$candy = "Sour Patch Kids";
?>

<h1>Hello, <?php echo $name;?>!</h1>


<?php
echo 'So glad you  could come to ' . $city . ' to see ';
echo '<i>' . $movie . ' </i>';
echo 'with <b>' . $friend . '. </b>';
echo "Let's get some " . $candy . '!';

?>