<?php include_once 'db_connect.php'; ?>

<?php include 'header.php'; ?>

<?php include 'nav.php'; ?>





<main>


<?php
$conn;
?>

<?php 
    
    function getPostDetailsFromDatabase() {
     
        // Get the post title

       $postTitle = rawurldecode($_GET["title"]);

       // Get the post that matches the postTitle
       include_once 'db_connect.php';
       $sql = "SELECT * FROM posts WHERE title='" . $postTitle . "'";
       $result = mysqli_query($conn, $sql);

       // Get the first row from the result in an associative array

        $postDetails = mysqli_fetch_assoc($result);
        return $postDetails;
    }

?>

    
   

    <ul> 
     <?php 
	function getPostTitlesFromDatabase() {
	// Get all the post titles from the posts table
        include_once 'db_connect.php'; 
	$sql = "SELECT title FROM posts";
	$result = mysqli_query($conn, $sql); 
	
	// Get each result row as an assoc array, then add title to $postTitles
	$postTitles = array();
	while($row = mysqli_fetch_assoc($result)){
         array_push($postTitles, $row['title']);
	}
	return $postTitles; 
}
     ?>
     </ul>   

    

</main>

<?php include 'footer.php'; ?>

</body>
</html>

