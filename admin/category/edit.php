<?php
require_once "../../functions/pdo_connection.php";
require_once "../../functions/helpers.php";
require_once "../../functions/auth.php";

global $pdo;

//check for set cat_id
if (!isset($_GET['cat_id'])) {
    redirect('/admin/category/index.php');
}

//check for exist cat_id 
$query = "SELECT * FROM categories WHERE id = ? ;";
$statement = $pdo->prepare($query);
$statement->execute([$_GET['cat_id']]);
$category = $statement->fetch();

//check for true cat_id from database
if ($category === false) {
    redirect('/admin/category/index.php');
}

//update category
if (isset($_POST['name']) && $_POST['name'] !== '') {
    $query = "UPDATE categories SET  name = ?, created_at = NOW() WHERE id = ? ;";
    $statement = $pdo->prepare($query);
    $statement->execute([$_POST['name'], $_GET['cat_id']]);
    redirect('/admin/category/index.php');
} ?>
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
                                    Edit Category
                                </div>
                                <div class="p-3">
                                    <form action="edit.php?cat_id=<?= $_GET['cat_id'] ?>" method="post" class="w-full">
                                        <div class="flex flex-wrap -mx-3 mb-2">
                                            <div class="w-full px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                                    for="name">
                                                    Name
                                                </label>
                                                <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                    name="name" type="text" placeholder="Name ..." value="<?= $category->name ?>">
                                            </div>
                                        </div>
                                        <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-dark-700 border-teal-500 hover:border-teal-dark text-sm border-4 text-white py-1 px-2 rounded"
                                            type="submit">
                                            Update
                                        </button>
                                    </form>
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