<?php
include "connection.php";
$id=$_GET["id"];
mysqli_query($link,"update student_registration set status='no' where id=$id");
?>
<script type="text/Javascript">
window.location="display_studentinfo.php";
</script>
