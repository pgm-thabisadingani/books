<?php 
$title = 'Books page'; 

?>
<?php include_once BASE_DIR . '/views/_templates/_partials/header.php'; ?>

<h1>Index page of the Books</h1>
    
<?php

foreach ($books as $book) {
    
?>
    <div class="book">
        <a href="/books/detail/<?=$book['id']?>"><img src="<?="./images/". $book['image_url']?>" width="180px" height="250px" /></a>
    </div>
        <div id="bookTitle">
            <b><?= $book['title']  ?></b> 
        </div>
    <?php
    }
    ?>
    <?php include_once BASE_DIR . '/views/_templates/_partials/footer.php'; ?>

