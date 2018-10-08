
<?php include_once 'db_connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
    
<?php include 'head.php'; ?>

<body>





    <h1 style="text-align:center; color:white;" id="hidden">I was hidden!</h1>
        <button>Hello</button>

        <div id="sortable-blog-list">
            <input class="search" placeholder="Search" />
            <button class="sort" data-sort="title">Sort</button>
     <ul class="list">
        <?php
            $postTitles = getPostTitlesFromDatabase();
            foreach($postTitles as $postTitle) {
                echo "<li><a href='post.php?title=" . $postTitle 

                    . "' class='title'>" . $postTitle . "</a></li>";
            }
        ?>
    </ul>
</div>


</body>
</html>

