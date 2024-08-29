<?php
require("header3.php");
require("connection.php");
?>
<html>
<center>
  <div class="heading" style="background-color:skyblue;font-size:25px;">Image Gallery</div>
</center>
<hr class="customline">



<div class="containerimg">
  <?php
  $sql = "select * from Gallery";
  $rs = mysqli_query($conn, $sql);


  //$result = mysqli_fetch_assoc($rs);
  
  while ($row = mysqli_fetch_assoc($rs)) {
    ?>
    <div>
      <img src='<?php echo $row["Path"]; ?>' />
    </div>

  <?php } ?>
</div>


</html>
<hr class="customline">
<?php
require("footer.php");
?>
<style>
  .containerimg {
    margin-top: 1rem;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 290px));
    grid-gap: 3rem;
    padding: 1rem;
    justify-content: center;
    box-shadow: 0 1px 1px #000;

  }

  img {
    background-position: top;
    background-size: cover;
    height: 200px;
    width: 290px;
    box-shadow: 0 2px 10px #000;
    cursor: pointer;
    transition: all 0.2s;
  }

  img:hover {
    box-shadow: none;
    transform: scale(1.1);
  }