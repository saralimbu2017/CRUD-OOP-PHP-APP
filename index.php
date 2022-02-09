<?php 
  include 'header.php'; 
  include 'config.php'; 
  include 'Database.php'; 

  $db = new Database();
  $query = "SELECT * FROM Student";
  $data = $db->select($query);

?>
<table class="mainTable">
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Skill</th>
    <th>Action</th>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>





<?php include 'footer.php' ?>