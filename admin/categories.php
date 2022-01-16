<?php include "includes/admin_header.php"; ?>

<div id="wrapper">

    <!-- Navigation -->

    <?php include "includes/admin_nav.php"; ?>
    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welcome to Admin
                        <small>Author</small>
                    </h1>
                    <div class="col-xs-6">

                        <?php insert_category(); ?>

                        <form action="" method="post">
                            <div class="form-group">
                                <label for="cat_title">Add category</label>
                                <input class="form-control" type="text" name="cat_title">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="submit" value="Add category">
                            </div>
                        </form>


                        <?php //UPDATE AND INCLUDE
                        if (isset($_GET['edit'])) {

                            $cat_id = $_GET['edit'];
                            include "includes/edit_categories.php";
                        }
                        ?>
                    </div>
                    <div class="col-xs-6">
                        <table class="table  table-bordered table-hover">
                            <thead>
                                <th>Id</th>
                                <th>Category title</th>
                            </thead>
                            <tbody>

                                <?php findAllCategories(); ?>

                                <?php deleteCategory(); ?>

                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <?php include "includes/admin_footer.php"; ?>