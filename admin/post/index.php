<?php
require_once "../../functions/pdo_connection.php";
require_once "../../functions/helpers.php";
require_once "../../functions/auth.php";
?>
<!DOCTYPE html>
<html lang="en">

<!--Head Section Starts Here-->
<?php include "../layouts/head.php" ?>
<!--/Head-->


<body>
    <!--Container -->
    <div class="mx-auto bg-grey-lightest">
        <!--Screen-->
        <div class="min-h-screen flex flex-col">
            <!--Header Section Starts Here-->
            <?php require_once "../layouts/header.php" ?>
            <!--/Header-->

            <div class="flex flex-1">
                <!--Sidebar-->
                <?php require_once "../layouts/sidebar.php" ?>
                <!--/Sidebar-->
                <!--Main-->
                <main class="bg-white-500 flex-1 p-3 overflow-hidden">
                    <div class="flex flex-col">
                        <!--Grid Form-->
                        <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                            <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                                <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                                    Articles
                                </div>
                                <div class="p-3 m-3">
                                    <a href="<?= url('admin/post/create.php') ?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2  px-4  rounded">
                                        Create
                                    </a>

                                    <table class="table-auto w-full rounded mt-6">
                                        <thead>
                                            <tr class="flex">
                                                <th class="border  px-4 py-2">#</th>
                                                <th class="border w-1/12 px-4 py-2">Image</th>
                                                <th class="border w-2/12 px-4 py-2">Title</th>
                                                <th class="border w-2/12 px-4 py-2">Category</th>
                                                <th class="border w-5/12 px-4 py-2">Body</th>
                                                <th class="border w-1/12 px-4 py-2">Status</th>
                                                <th class="border w-1/12 px-4 py-2">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            global $pdo;
                                            $query = "SELECT posts.*, categories.name AS category_name FROM posts LEFT JOIN categories ON posts.cat_id=categories.id;";
                                            $statement = $pdo->prepare($query);
                                            $statement->execute();
                                            $posts = $statement->fetchAll();
                                            foreach ($posts as $post) {
                                            ?>
                                                <tr class="flex">
                                                    <td class="border px-4 py-2"><?= $post->id ?></td>
                                                    <td class="border w-1/12 px-4 py-2"><img style="width: 90px;" src="<?= asset($post->image) ?>"></td>
                                                    <td class="border w-2/12 px-4 py-2"><?= $post->title ?></td>
                                                    <td class="border w-2/12 px-4 py-2"><?= $post->category_name ?></td>
                                                    <td class="border w-5/12 px-4 py-2"><?= $post->body ?></td>
                                                    <?php if ($post->status == 0) { ?>
                                                        <td class="border w-1/12 px-4 py-2">
                                                            <i class="fas fa-times text-red-500 mx-2"></i>
                                                        </td>
                                                    <?php } else if ($post->status == 1) { ?>
                                                        <td class="border w-1/12 px-4 py-2">
                                                            <i class="fas fa-check text-green-500 mx-2"></i>
                                                        </td>

                                                    <?php } ?>
                                                    <td class="border w-1/12 px-4 py-2">
                                                        <a href="<?= url('/admin/post/edit.php?cat_id=' . $post->id) ?>" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                                            <i class="fas fa-edit"></i></a>
                                                        <a href="<?= url('/admin/post/delete.php?cat_id=' . $post->id) ?>" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--/Grid Form-->
                    </div>
                </main>
                <!--/Main-->
            </div>
            <!--Footer-->
            <footer class="bg-grey-darkest text-white p-2">
                <div class="flex flex-1 mx-auto">&copy; My Design</div>
            </footer>
            <!--/footer-->

        </div>

    </div>

    <!-- Script -->
    <?php require_once "../layouts/script.php" ?>
    <!-- /Script -->

</body>

</html>