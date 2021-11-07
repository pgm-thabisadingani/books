<?php $title = 'Authors'?>
<?php include_once BASE_DIR . '/views/_templates/_partials/header.php'; ?>

<h1>Index page of the Authors</h1>
    

<form action="" method="post" name="add_author">
        First Name: <input type="text" name="first_name" placeholder="First name" required="required"/>
        Middle Name: <input type="text" name="middle_name" placeholder="Middle name"/>
        Last Name: <input type="text" name="last_name" placeholder="First name" required="required"/>
        <input type="submit"  value="Add Author" name="add_author" />
</form>

<?php foreach ($authors as $author){?>

    <p><?= $author['first_name']?> <?= $author['middle_name']?> <?= $author['last_name']?></p>

<?php } ?>

<?php include_once BASE_DIR . '/views/_templates/_partials/footer.php'; ?>

