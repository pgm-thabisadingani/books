<?php $title = $book->title; ?>

<?php include_once BASE_DIR . '/views/_templates/_partials/header.php'; ?>


<h1><?php echo $book->title; ?></h1>
 
<?php

?>
<div class="book">
    <img src="<?="/../images/" . $book->image_url?>" width="300px" height="400px" />
</div>

<div class="authors">

    <?php 
    $url = $book->id;

    foreach ($books_authors as $author) { 
        
        if($url === $author['id']){
        ?> 
            <p><?= $author['Authors'] ?></p>
        <?php 
        }

    }?>

</div>


<div class="isbn">
    <p>ISBN: <?php echo $book->isbn; ?> </p>
</div>
<div class="bookPages">
    <p>Pages: <?php echo $book->nr_pages; ?> </p>
</div>
<div class="publication_date">
    <p>Publication date: <?php echo $book->publication_date; ?> </p>
</div>
<div class="description">
    <p><?php echo $book->description ?> </p>
</div>

<div class="authors">
    <?php 
    $url = $book->id;
        foreach ($books_genres as $genre) { 
        
            if( $url === $genre['id']){
            ?> 
                <b> <?= $genre['Genres'] ?></b>
            <?php 
        }
    }?>
</div>
<?php include_once BASE_DIR . '/views/_templates/_partials/footer.php'; ?>