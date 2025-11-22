<?php
require_once "../functions/pdo_connection.php";
require_once "../functions/helpers.php";
require_once "../functions/auth.php";
?>
<!DOCTYPE html>
<html lang="en">

<!--Head Section Starts Here-->
<?php include "layouts/head.php" ?>
<!--/Head-->

<body>
    <!--Container -->
    <div class="mx-auto bg-grey-400">
        <!--Screen-->
        <div class="min-h-screen flex flex-col">
            <!--Header Section Starts Here-->
            <?php require_once "layouts/header.php" ?>
            <!--/Header-->

            <div class="flex flex-1">
                <!--Sidebar-->
                <?php require_once "layouts/sidebar.php" ?>
                <!--/Sidebar-->
                <!--Main-->
                <main class="bg-white-300 flex-1 p-3 overflow-hidden">

                    <div class="flex flex-col">
                        <!-- Stats Row Starts Here -->
                        <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
                            <div class="shadow-lg bg-red-vibrant border-l-8 hover:bg-red-vibrant-dark border-red-vibrant-dark mb-2 p-2 md:w-1/4 mx-2">
                                <div class="p-4 flex flex-col">
                                    <span href="#" class="no-underline text-white text-2xl">
                                        4
                                    </span>
                                    <span href="#" class="no-underline text-white text-lg">
                                        All Posts
                                    </span>
                                </div>
                            </div>

                            <div class="shadow bg-info border-l-8 hover:bg-info-dark border-info-dark mb-2 p-2 md:w-1/4 mx-2">
                                <div class="p-4 flex flex-col">
                                    <span href="#" class="no-underline text-white text-2xl">
                                        3
                                    </span>
                                    <span href="#" class="no-underline text-white text-lg">
                                        All Categories
                                    </span>
                                </div>
                            </div>

                            <div class="shadow bg-warning border-l-8 hover:bg-warning-dark border-warning-dark mb-2 p-2 md:w-1/4 mx-2">
                                <div class="p-4 flex flex-col">
                                    <span href="#" class="no-underline text-white text-2xl">
                                        14
                                    </span>
                                    <span href="#" class="no-underline text-white text-lg">
                                        Total Users
                                    </span>
                                </div>
                            </div>

                            <div class="shadow bg-success border-l-8 hover:bg-success-dark border-success-dark mb-2 p-2 md:w-1/4 mx-2">
                                <div class="p-4 flex flex-col">
                                    <span href="#" class="no-underline text-white text-2xl">
                                        325
                                    </span>
                                    <span href="#" class="no-underline text-white text-lg">
                                        Total Views
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <!--/Main-->
            </div>
            <!--Footer-->
            <?php require_once "layouts/footer.php" ?>
            <!--/footer-->

        </div>

    </div>
    <!-- Script -->
    <?php require_once "layouts/script.php" ?>
    <!-- /Script -->

</body>

</html>