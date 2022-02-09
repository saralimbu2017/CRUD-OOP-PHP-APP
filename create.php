<?php 
  include 'header.php'; 
  include 'config.php'; 
  include 'Database.php'; 
 
?>
<form action="create.php" method="post">
  <table class="mainTable">
    <tr>
      <td>Name</td>
      <td>
        <input type="text" name="name" placeholder="Please enter your name">
      </td>
    </tr>

    <tr>
      <td>Email</td>
      <td>
        <input type="text" name="email" placeholder="Please enter your email id">
      </td>
    </tr>

    <tr>
      <td>Skill</td>
      <td>
        <input type="text" name="skill" placeholder="Please enter your skill">
      </td>
    </tr>

    <tr>
      <td>Name</td>
      <td>
        <input type="submit" name="submit" value="Submit">
        <input type="reset" value="Cancel">
      </td>
    </tr>
  </table>
</form>


<a href="index.php"> List Students</a>

<?php include 'footer.php' ?>