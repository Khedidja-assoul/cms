<?php include "includes/db.php"; ?>

<?php include "includes/header.php"; ?>

<?php include "includes/nav.php"; ?>

<!-- Page Content -->
<div class="container">

<div class="row">

<!-- Blog Entries Column -->
<div class="col-md-8">

<?php

if (isset($_POST['submit']))
{
    //print_r($_POST['search']);
    $search =  $_POST['search'];

   $query = " SELECT * FROM posts WHERE post_tags  LIKE '%$search%' ";

   $searach_query = mysqli_query($connection,$query);

   if(!$searach_query){
       die("QUERY FAILED".mysqli_error($connection));

   }

   $count = mysqli_num_rows($searach_query);

   if ($count == 0 ){
    echo "<h1>NO RESULTS</h1>";
   }
   else {

    

    while($row = mysqli_fetch_assoc($searach_query))
    {
        $post_title = $row['post_title'];
        $post_author = $row['post_author'];
        $post_image = $row['post_image'];
        $post_date = $row['post_date'];
        $post_content = $row['post_content'];


     ?>
     
     <h1 class="page-header">
         Page Heading
         <small>Secondary Text</small>
     </h1>

     <!-- First Blog Post -->
     <h2>
         <a href="#"><?php echo $post_title ?></a>
     </h2>
     <p class="lead">
         by <a href="index.php"><?php echo $post_author ?></a>
     </p>
     <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date ?></p>
     <hr>
     <img class="img-responsive" src="images/<?php echo $post_image ; ?> " alt="">
     <hr>
     <p> <?php echo $post_content ?> </p>
     <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

     <hr>

     <?php
   }

}
}

             
                 ?>
               
            </div>

            
<?php  include "includes/sidebar.php"; ?>

        </div>
        <hr>
 

<?php include "includes/footer.php"; ?>
