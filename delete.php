<?php
include "connection.php";
if(isset($_GET["id"]))
{
    $id=$_GET["id"];

    mysqli_query($link,"delete from add_books where id=$id");
    ?>
<script>
    window.location="display_books.php";
    </script>
    <?php
}
else{
    ?>
    <script>
    window.location="display_books.php";
    </script>
    <?php
    }
?>