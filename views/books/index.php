<?php 
$title = 'Books page'; 
shuffle($books);

$search_str = $_GET['search_term'] ?? '';
$books = searchBookByTitle($search_str);
?>

<?php include_once BASE_DIR . '/views/_templates/_partials/header.php'; ?>

<main>

<article>
    <div class="widthControl" >
        <div class="searchbox">
            <div class="searchbox__Add">
                <a href="/books/create">Add Book</a>
            </div>
       
            <form method="GET" action="/books/index">
                <div class="search">
                    <input type="text" class="book_search" name="search_term" placeholder="Book title"/>
                    <input type="submit" class="deleteBtn submitBtn"  value="Search" />
                </div>
            </form> 
        </div>
    </div>
</article>

<section>
        <div class="widthControl" >
            <div class="bookOverview bookPage">
                <h2> Books Collection</h2>
                <div class="featured__books"> 
                    <?php foreach ($books as $book) { ?>
                        <article class="bookPreview">
                            <div class="bookImage">
                                <a href="/books/detail/<?=$book['id']?>"><img src="<?="/images/". $book['image_url']?>" width="180px" height="250px" /></a>
                            </div>
                            <div class="bookTitle">
                                <h3><?= $book['title']  ?></h3> 
                            </div>
                            <article  class="deleteEdit">
                                <form method="post" >
                                    <input type="text" class="author_hidden" name="book_id" value=<?=$book['id']?> />
                                    <input type="submit" class="smallBtn deleteBtn" value="🗑️" name="delete_book" />
                                </form>
                                <div>
                                    <a  class="smallBtn editBtn" href="/books/update/<?= $book['id'] ?>" >🖊️</a>
                                </div>
                            </article>
                        </article>
                    <?php } ?>
                    
                </div>
            </div>
        </div>
</section>

    </main>
<?php include_once BASE_DIR . '/views/_templates/_partials/footer.php'; ?>

