<main class="allForms">
    <div class="widthControl">
    <h3>Edit a new author</h3>
    <form method="post">
            First Name: <input type="text" name="first_name" value="<?=$authors->first_name ?? '' ?>"  />
            Middle Name: <input type="text" name="middle_name" value="<?=$authors->middle_name ?? '' ?>"  />
            Last Name: <input type="text" name="last_name" value="<?=$authors->last_name ?? '' ?>"  />
            <input type="submit"  value="Edit Author" name="edit_author" />
    </form>

</div>
</main>
