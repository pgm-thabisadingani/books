<?php 
$title = 'Genres page'; 

?>
<?php include_once BASE_DIR . '/views/_templates/_partials/header.php'; ?>

<h1>Index page of the Genres</h1>

<form action="" method="post" name="add_genre">
        Add Genre: <input type="text" name="title" placeholder="Add Genre" required="required"/>
        <input type="submit"  value="Add Genre" name="add_genre" />
</form>
    
<?php

foreach ($genres as $genre) {
?>
    <div class="book">
        
    </div>

        <div id="bookTitle">
            <b><?= $genre['name']?></b> 
        </div>

        <?php

    }

    ?>
    <?php include_once BASE_DIR . '/views/_templates/_partials/footer.php'; ?>

