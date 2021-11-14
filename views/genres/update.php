

<main class="allForms">
    <div class="widthControl">
    <h3>Edit a new genre</h3>
    <form method="post">
            Name: <input type="text" name="name" value="<?=$genres->name ?? '' ?>"  />
            <input type="submit"  value="Edit Genre" name="edit_genre" />
    </form>
    </div>
</main>
