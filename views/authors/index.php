<?php $title = 'Authors';

$search_str = $_GET['search_term'] ?? '';
$authors = searchAuthorsByTitle($search_str); //

?>
<?php include_once BASE_DIR . '/views/_templates/_partials/header.php'; ?>

<main>

<article>
    <div class="widthControl" >
        <div class="searchbox">
            <div class="searchbox__Add">
                <a href="/authors/create">Add Author</a>
            </div>    
            <form method="GET" action="/authors/index">
                <div class="search">
                    <input type="text" class="book_search" name="search_term" placeholder="Author title"/>
                    <input type="submit" class="deleteBtn submitBtn" value="Search" />
                </div>
            </form>
        </div>
    </div>
</article>

<section>
        <div class="widthControl" >
            <div class="authorOverview">
                <div class="authorTitle">
                    <h2>Authors Collection</h2>
                </div>
                <div class="authorTypes">
                    <?php foreach ($authors as $author) { ?>
                        <div class="authorName authorPage">
                            <div class="authorSpan"></div>
                            <p class="authorNameSpan"><b><?= $author['first_name']?> <?= $author['middle_name']?> <?= $author['last_name']?></b></p>
                                <article  class="deleteEdit authorDelete">
                                <form method="post" >
                                    <input type="text" class="author_hidden" name="author_id" value=<?=$author['id']?>/>
                                    <input type="submit" class="smallBtn deleteBtn" value="🗑️" name="delete_author" />
                                </form>
                                <div>
                                    <a class="smallBtn editBtn" href="/authors/update/<?= $author['id'] ?>" >🖊️</a> 
                                </div>
                             </article>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include_once BASE_DIR . '/views/_templates/_partials/footer.php'; ?>




