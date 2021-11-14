
<main class="allForms">
    <div class="widthControl">
    <h3>Edit a Book</h3>
    <form method="post" enctype="multipart/form-data">
            Title: <input type="text" name="title" value="<?=$books->title ?? '' ?>"/>
            ISBN: <input type="text" name="isbn" value="<?=$books->isbn ?? '' ?>"/>
            Nr Pages: <input type="number" name="nr_pages" value="<?=$books->nr_pages ?? '' ?>"/>
            Image Url: <input type="file" name="image_url" value="<?=$books->image_url ?? '' ?>"/>
            Publication Date: <input type="text" name="publication_date" value="<?=$books->publication_date ?? '' ?>"/>
            Description: <textarea rows="10" cols="100%" type="text" name="description" ><?=$books->description ?? '' ?>"</textarea>
            <input type="submit"  value="Edit Book" name="edit_book" />
    </form>
</div>
</main>
