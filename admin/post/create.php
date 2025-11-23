<?php
require_once "../../functions/pdo_connection.php";
require_once "../../functions/helpers.php";
require_once "../../functions/auth.php";
//validation
if (
    isset($_POST['title']) && $_POST['title'] !== '' &&
    isset($_POST['cat_id']) && $_POST['cat_id'] !== '' &&
    isset($_POST['body']) && $_POST['body'] !== '' &&
    isset($_FILES['image']) && $_FILES['image']['name'] !== ''
) {

    // query for fetch category
    global $pdo;
    $query = "SELECT * FROM categories WHERE id = ?;";
    $statement = $pdo->prepare($query);
    $statement->execute([$_POST['cat_id']]);
    $category = $statement->fetch();

    //check for true image extension
    $allowedMimes = ['png', 'jpeg', 'jpg', 'gif'];
    $imageMime = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    if (!in_array($imageMime, $allowedMimes)) {
        redirect('/admin/post/index.php');
    }

    //upload image
    $basePath = dirname(dirname(__DIR__));
    $image = '/assets/site/images/posts/' . date("Y_m_d_H_i_s") . '.' . $imageMime;
    $image_upload = move_uploaded_file($_FILES['image']['tmp_name'], $basePath . $image);
    //insert post
    if ($category !== false && $image_upload !== false) {
        $query = "INSERT INTO posts SET  title = ?, cat_id = ?, body = ?, image = ?, created_at = NOW() ;";
        $statement = $pdo->prepare($query);
        $statement->execute([$_POST['title'], $_POST['cat_id'], $_POST['body'], $image]);
    }
    redirect('/admin/post/index.php');
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
                                    Create Post
                                </div>
                                <div class="p-3">
                                    <form action="create.php" method="post" class="w-full" enctype="multipart/form-data">
                                        <div class="flex flex-wrap -mx-3 mb-2">
                                            <div class="w-full px-3 mb-6    md:mb-0">
                                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                                    for="title">
                                                    Title
                                                </label>
                                                <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                    name="title" type="text" placeholder="Title ...">
                                            </div>
                                            <div class="w-full px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                                    for="name">
                                                    Image
                                                </label>
                                                <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                    name="image" id="image" type="file" accept="image/*">
                                            </div>
                                            <div class="w-full px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                                    for="name">
                                                    Category
                                                </label>
                                                <select class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="cat_id" id="cat_id">
                                                    <?php
                                                    global $pdo;
                                                    $query = "SELECT * FROM categories;";
                                                    $statement = $pdo->prepare($query);
                                                    $statement->execute();
                                                    $categories = $statement->fetchAll();
                                                    foreach ($categories as $category) {
                                                    ?>
                                                        <option value="<?= $category->id ?>"><?= $category->name ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="w-full px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                                    for="body">
                                                    Body
                                                </label>
                                                <textarea class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="body" rows="4" placeholder="Body ..."></textarea>

                                            </div>
                                        </div>
                                        <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-dark-700 border-teal-500 hover:border-teal-dark text-sm border-4 text-white py-1 px-2 rounded"
                                            type="submit">
                                            Create
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