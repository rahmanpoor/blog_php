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
                                    Category
                                </div>
                                <div class="p-3 m-3">
                                    <a href="<?= url('admin/category/create.php') ?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2  px-4  rounded">
                                        Create 
                                    </a>

                                    <table class="table-auto w-full rounded mt-6">
                                        <thead>
                                            <tr class="flex">
                                                <th class="border  px-4 py-2">#</th>
                                                <th class="border w-11/12 px-4 py-2">Name</th>
                                                <th class="border w-1/12 px-4 py-2">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            global $pdo;
                                            $query = "SELECT * FROM categories;";
                                            $statement = $pdo->prepare($query);
                                            $statement->execute();
                                            $categories = $statement->fetchAll();
                                            foreach ($categories as $category) {
                                            ?>
                                                <tr class="flex">
                                                    <td class="border  px-4 py-2"><?= $category->id ?></td>
                                                    <td class="border w-11/12 px-4 py-2"><?= $category->name ?></td>
                                                    <td class="border w-1/12 px-4 py-2">
                                                        <a href="<?= url('/admin/category/edit.php?cat_id=' . $category->id) ?>" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                                            <i class="fas fa-edit"></i></a>
                                                        <a href="<?= url('/admin/category/delete.php?cat_id=' . $category->id) ?>" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">
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