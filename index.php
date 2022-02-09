<?php 
  //inlcuding the necessary files
  include 'header.php'; 
  include 'config.php'; 
  include 'Database.php'; 

  //creating database object and stating the query statement
  $db = new Database();
  $query = "SELECT * FROM Student";
  $data = $db->select($query);

  //Displaying message if any passed by GET method
  if(!isset($_GET['msg'])) {
    echo "<span style='color:green'>".$GET['msg']."</span>";
  }

?>
<table class="mainTable">
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Skill</th>
    <th>Action</th>
  </tr>
  <?php
    //check for data
    if($data) {
      while($row = $data->fetch_assoc()){
    
  ?>
  <tr>
    <td> <?php echo $row['name'];?> </td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['skill'];?></td>
    <td><a href="">Edit</a></td>
  </tr>
  <?php 
      }
    } else {
  ?>
  
      <p>Empty! No data.</p>
  <?php 
    }
  
  ?>
  <a href="create.php"> Create </a>
</table>





<?php include 'footer.php' ?>