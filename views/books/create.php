<main class="allForms">
    <div class="widthControl">
    <h3>Add a new Book</h3>
    <form method="post" enctype="multipart/form-data">
            Title: <input type="text" name="title" placeholder="Title" required="required"/>
            ISBN: <input type="text" name="isbn" placeholder="ISBN" required="required" />
            Nr Pages: <input type="number" name="nr_pages" placeholder="Nr Pages" required="required"/>
            Image Url: <input type="file" name="image_url" placeholder="Image Url"/>
            Publication Date: <input type="date" name="publication_date" placeholder="yyyy-mm-dd" />
            Description: <textarea rows="10" cols="100%" type="text" name="description" >Book description</textarea>
            <input type="submit"  value="Add Book" name="add_book" />
    </form>
    </div>
</main>
