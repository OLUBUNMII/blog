<?php
include 'partials/header.php';
?>


<section class="form__section">
    <div class="container form__section-container">
        <h2>Edit Post</h2>
        <form action="" enctype="multipart/form-data">
            <input type="text" placeholder="Title">
            <select>
                <option value="1">Photography</option>
                <option value="1">Politics</option>
                <option value="1">Music</option>
                <option value="1">Lifestyle</option>
                <option value="1">Beauty</option>
                <option value="1">Food</option>
            </select>

            <textarea rows="10" placeholder="Body"></textarea>
            <div class="form__control">
                <label for="thumbnail" checked>
                    <h5>Change Thumbnail</h5>
                </label>
                <input type="file" id="thumbnail">

            </div>
            <button type="submit" class="btn">Update Post</button>
        </form>
    </div>

</section>
<?php
include '../partials/footer.php';
?>