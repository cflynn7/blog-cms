<?php include 'head.php'; ?>

<?php include 'header.php'; ?>

<?php include 'nav.php'; ?>



<main>
    <form action="submit-post.php" method="POST">
    <input type="text" id="title" name="title" placeholder="Title"></input>
<input type="text" id="author" name="author" placeholder="Author"></input>
<input type="date" id="date" name="date" placeholder="Date"></input>
<div id="editor"></div>
<button id="submit">Submit</input>
    </form>

   
</main>

<?php include 'footer.php'; ?>




<p> </p>

</body>
</html>

