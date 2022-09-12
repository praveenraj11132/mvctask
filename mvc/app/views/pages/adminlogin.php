
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style333.css">

<div class="c1">
  <form action ="<?php echo URLROOT."pages/admindetail" ?>" method="post" style=text>
  <h1>Admin Details</h1>
  <p>Email address</p>
  <input type="email" name="email">
  <p>Password</p>
  <input type="password" name="password"><br><br>
  <?php
if(isset($data['title']))
{
  print_r($data['title']);
  
}
 ?><br><br>
  <input type="submit" value="login">
</form>
</div>