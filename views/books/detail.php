<?php $title = $book->title; ?>

<?php include_once BASE_DIR . '/views/_templates/_partials/header.php'; ?>



<main>
    <div class="widthControl">
        <div class="detailPage">
            
            <article class="detail__top">
                <div class="detailPage__title">
                    <h2><?php echo $book->title; ?></h2>
                </div>

                <div class="detailPage__author">
                    <?php 
                    $url = $book->id;
                    foreach ($books_authors as $author) { 
                        if($url === $author['id']){
                        ?> 
                            <h4><?= $author['Authors'] ?></h4>
                        <?php 
                        }
                    }?>
        
                    <p><?php echo $book->description ?> </p>
                </div>
            </article>

            <article class="detail__bottom">
                <div class="detail__img">
                    <div class="book">
                        <img src="<?="/../images/" . $book->image_url?>" width="300px" height="400px" />
                    </div>
                </div>

                <div class=detail__footer>
                    <div class="isbn">
                        <p><b>ISBN:</b> <?php echo $book->isbn; ?> </p>
                    </div>
                    <div class="bookPages">
                        <p><b>Pages:</b> <?php echo $book->nr_pages; ?> </p>
                    </div>
                    <div class="publication_date">
                        <p><b>Publication date:</b> <?php echo $book->publication_date; ?> </p>
                    </div>

                    <div class="genres">
                        <?php 
                        $url = $book->id;
                            foreach ($books_genres as $genre) { 
                            
                                if( $url === $genre['id']){
                                ?> 
                                    <p><b> Genre: </b><?= $genre['Genres'] ?></p>
                                <?php 
                            }
                        }?>
                    </div>
                </div>
            </article>
        </div>
    </div>
</main>
<?php include_once BASE_DIR . '/views/_templates/_partials/footer.php'; ?>