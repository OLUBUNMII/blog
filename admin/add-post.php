<?php
include 'partials/header.php';

//fetch categories from the database
$query = "SELECT * FROM categories";
$categories = mysqli_query($connection, $query);

//get form data back
$title = $_SESSION['add-post-data']['title'] ?? null;
$body = $_SESSION['add-post-data']['body'] ?? null;

//delete form data session
unset($_SESSION['add-post-data']);
?>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Add an Article</h2>
        <?php if (isset($_SESSION['add-post'])) : ?>
            <div class="alert__message error">
                <p>
                    <?= $_SESSION['add-post'];
                    unset($_SESSION['add-post']); ?>
                </p>
            </div>
        <?php endif ?>
        <form action="<?= ROOT_URL ?>admin/add-post-logic.php" enctype="multipart/form-data" method="POST">
            <input type="text" name="title" value="<?= $title ?>" placeholder="Title">
            <select name="category">
                <?php while ($category = mysqli_fetch_assoc($categories)) : ?>
                    <option value="<?= $category['id'] ?>"><?= $category['title'] ?></option>
                <?php endwhile ?>
            </select>

            <textarea rows="10" name="body" placeholder="Body"><?= $body ?></textarea>
            <?php if (isset($_SESSION['user_is_admin'])) : ?>
                <div class="form__control inline">
                    <input type="checkbox" name="is_featured" value="1" id="is_featured" checked>
                    <label for="is_featured">
                        <h5>Featured Post</h5>
                    </label>
                </div>
            <?php endif ?>
            <div class="form__control">
                <label for="thumbnail" checked>
                    <h5>Add Thumbnail</h5>
                </label>
                <input type="file" name="thumbnail" id="thumbnail">

            </div>
            <button type="submit" name="submit" class="btn1">Add Article </button>
        </form>
    </div>

</section>



<?php
include '../partials/footer.php';
?>