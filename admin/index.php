<?php
include 'partials/header.php';
?>


<section class="dashboard">
    <div class="container dashboard__container">
        <button id="show__sidebar-btn" class="sidebar__toggle"><i class="uil uil-arrow-circle-right"></i></button>
        <button id="hide__sidebar-btn" class="sidebar__toggle"><i class="uil uil-arrow-circle-left"></i></button>
        <aside>
            <ul>
                <li>
                    <a href="add-post.php"><i class="uil uil-edit"></i>
                        <h5>Add Posts</h5>

                    </a>
                </li>
                <li>
                    <a href="index.php" class="active"><i class="uil uil-postcard"></i>
                        <h5>Manage Posts</h5>

                    </a>
                </li>
                <?php if (isset($_SESSION['user_is_admin'])) : ?>
                    <li>
                        <a href="add-user.php"><i class="uil uil-user-plus"></i>
                            <h5>Add User</h5>

                        </a>
                    </li>
                    <li>
                        <a href="manage-users.php"><i class="uil uil-users-alt"></i>
                            <h5>Manage Users</h5>

                        </a>
                    </li>
                    <li>
                        <a href="add-category.php"><i class="uil uil-edit"></i>
                            <h5>Add Category</h5>

                        </a>
                    </li>
                    <li>
                        <a href="manage-categories.php"><i class="uil uil-list-ul"></i>
                            <h5>Manage Category</h5>

                        </a>
                    </li>
                <?php endif ?>

            </ul>
        </aside>
        <main>
            <h2>Manage Users</h2>
            <table>
                <thead>
                    <tr>
                        <th><span> Title</span></th>
                        <th><span> Category</span></th>
                        <th><span>Edit</span></th>
                        <th><span>Delete</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <h5>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h5>
                        </td>
                        <td>
                            <h5>Photography</h5>
                        </td>
                        <td><a href="edit-post.php" class="btn sm go">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>

                    </tr>
                    <tr>
                        <td>
                            <h5>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h5>
                        </td>
                        <td>
                            <h5>Music</h5>
                        </td>
                        <td><a href="edit-post.php" class="btn sm go">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>

                    </tr>
                    <tr>
                        <td>
                            <h5>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h5>
                        </td>
                        <td>
                            <h5>Lifestyle</h5>
                        </td>
                        <td><a href="edit-post.php" class="btn sm go">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>

                    </tr>



                </tbody>
            </table>
        </main>
    </div>
</section>
<?php
include '../partials/footer.php';
?>