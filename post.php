<?php include 'header.php'; ?>

<?php include 'head.php'; ?>

<?php include 'nav.php'; ?>

<main>

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

<?php
 // Post details contains all the data to generate a blog from 

 $postDetails = getPostDetailsFromDatabase();
 ?>
 <h1> <?php echo $postDetails["title"]; ?> </h1>
 <div> <?php echo $postDetails["author"]; ?> </div>
 <div> <?php echo $postDetails["date"]; ?> </div>
 <div> <?php echo $postDetails["content"]; ?> </div>
</main>

<?php include 'footer.php'; ?>






</body>
</html>
