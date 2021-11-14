<?php $title = 'Books page'; ?>
<?php include_once BASE_DIR . '/views/_templates/_partials/header.php'; ?>

<header>
    <div class="widthControl " >
        <div class="header">
            <div class="header__top">
                <!--    <img src="./../images/book.png"/> -->
                <div class="paddingCrl"></div>
            </div>
            <div class="header__bottom">
                <h1>Search, find and explore your next book.</h1>
                <p>If you love reading and sharing your reading experiences you're in the right place!</p>
                <a href="./../books/index.html" class="btn primaryBtn">View All Books</a>
            </div>
        </div>
    </div>
</header>


<main>
    <section>
        <div class="widthControl footer" >
            <div class="bookOverview">
                <h2>Featured Books</h2>
                <div class="featured__books"> 
                    <?php foreach ($books as $book) { ?>
                        <article class="bookPreview">
                            <div class="bookImage">
                                <a href="/books/detail/<?=$book['id']?>"><img src="<?="/images/". $book['image_url']?>" width="180px" height="250px" /></a>
                            </div>
                            <div class="bookTitle">
                                <h3><?= $book['title']  ?></h3> 
                            </div>
                        </article>
                    <?php } ?>
                    
                </div>
                <a href="./../books/index.html" class="">View All books</a>
            </div>
        </div>
    </section>

    <div></div>
    
    <section>
        <div class="widthControl" >
            <div class="genreOverview">
                <div class="genreTitle">
                    <h2>Featured genres</h2>
                    <p>Understanding genres helps you find books you'll enjoy reading, but it's also good to help you understand what you're reading and what to expect from a book</p>
                    <a href="./../genres/index.html" class="">View All genres</a>
                </div>
                <div class="genresTypes">
                    <?php foreach ($genres as $genre) { ?>
                        <div class="genreName">
                        <p><b><?= $genre['name']?></b> </p>
                        </div>
                    <?php } ?>
                </div>    
            </div>
        </div>
    </section>

    <section>
        <div class="widthControl" >
            <div class="authorOverview">
                <div class="authorTitle">
                    <h2>Featured Authors</h2>
                </div>
                <div class="authorTypes">
                    <?php foreach ($authors as $author) { ?>
                        <div class="authorName">
                            <div class="authorSpan"></div>
                            <p class="authorNameSpan"><b><?= $author['first_name']?> <?= $author['middle_name']?> <?= $author['last_name']?></b></p>
                        </div>
                    <?php } ?>
                </div>
                <a href="./../authors/index.html" class="">View All authors</a>   
            </div>
        </div>
    </section>

</main>

<?php include_once BASE_DIR . '/views/_templates/_partials/footer.php'; ?>  

                