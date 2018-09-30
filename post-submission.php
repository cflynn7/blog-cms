<?php include 'header.php'; ?>

<?php include 'nav.php'; ?>



<main>
    <form action="submit-post.php" method="POST">
     Title: <input type="text" name="title"><br>
     Author: <input type="text" name="authName"><br>
     Date: <input type="date" name="dateOfPost"><br>
     Your Blog Entry: <input type="textarea" name="blogContent" id="entryContent"><br>
     <input type="submit" value="Submit" name="submit"> 
    </form>
</main>

<?php include 'footer.php'; ?>




<p> </p>

</body>
</html>

