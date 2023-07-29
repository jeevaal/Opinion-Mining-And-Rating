<?php
$pid = $_POST['ppid'];
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "ita");
$sql = "select review from reviews where pid='$pid'";
$result = $conn->query($sql);
$treview = "";
while ($row1 = mysqli_fetch_assoc($result)) {
	$treview = $row1['review'];
}

$myfile = fopen("userReview.txt", "w") or die("Unable to open file!");
$txt = $treview;
fwrite($myfile, $txt);
fclose($myfile);

$script_path = 'rate.py'; // Make sure to provide the correct path to rate.py
$command = "python $script_path";
$output = shell_exec($command);


// After executing rate.py, read the rating from rating.txt
$rating_file = 'rating.txt';
$rating = file_get_contents($rating_file);
if ($rating === false) {
    die("Error: Unable to read $rating_file");
}

$sql_prev_rating = "select rating from products where pid='$pid'";
$result_prev_rating = $conn->query($sql_prev_rating);
$row_prev_rating = mysqli_fetch_assoc($result_prev_rating);
$prev_rating = $row_prev_rating['rating'];

// If the previous rating is not zero, calculate the new average
if ($prev_rating != 0) {
    $new_rating = ($prev_rating + $rating) / 2;
} else {
    $new_rating = $rating;
}

// Format the new rating to one decimal place
$new_rating = number_format($new_rating, 1);

// Now update the product's rating in the database
$sql = "update products set rating='$new_rating' where pid='$pid'";
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "ita");
if ($conn->query($sql)) {
	echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Product rating updated!!')
				window.location.href='admin-rate-product.php'
				</SCRIPT>");
}
?>
