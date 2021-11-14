<?php 
$title = 'Genres page'; 

$search_str = $_GET['search_term'] ?? '';
$genres = searchGenresByTitle($search_str); //
?>


?>
<?php include_once BASE_DIR . '/views/_templates/_partials/header.php'; ?>

<main>
    <article>
        <div class="widthControl" >
            <div class="searchbox">
                <div class="searchbox__Add">
                    <a href="/genres/create">Add Genre</a>
                </div>    
                <form method="GET" action="/genres/index">
                    <div class="search">
                        <input type="text" class="book_search" name="search_term" placeholder="Genre title"/>
                        <input type="submit" class="deleteBtn submitBtn" value="Search"/>
                    </div>
                </form>
            </div>
        </div>
    </article>
  

    <section>
            <div class="widthControl" >
                <div class="genrePage">
                    <div class=" genrePageTitle ">
                        <h2>Featured genres</h2>
                    </div>
                    <div class="genresTypes">
                        <?php foreach ($genres as $genre) { ?>
                            <div class="genreName">
                            <p><b><?= $genre['name'] ?></b> </p>
                                <article  class="deleteEdit authorDelete authorGenre">
                                    <form method="post" >
                                        <input type="text" class="author_hidden" name="genre_id" value=<?=$genre['id']?>/>
                                        <input type="submit" class="smallBtn deleteBtn" value="🗑️" name="delete_genre" />
                                    </form>
                                    <div>
                                        <a class="smallBtn editBtn" href="/genres/update/<?= $genre['id'] ?>" >🖊️</a>
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

