
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style14.css">
<div class="e">


<div class="vv1">
<form action ="<?php echo URLROOT.'pages/searchview' ?>" method="post"  enctype="multipart/form-data">
<input type="Search" name="searc1">

<input type="submit" value="Search">
</form>
</div>
<div class="e1">
<form action ="<?php echo URLROOT.'pages/logout' ?>" method="post">
<button type="submit" id="l">Logout</button>
</form>
</div>

<div class="e3">
<form action ="<?php echo URLROOT.'pages/add' ?>" method="post">
<button  id="l2">Add</button>
</form>
</div>
<div class="e4">
</div>
</div>
<br>
<br><br>

<div class="d1">


<table>
<tr>

<th>First Name</th>
<th>Last Name</th>
<th>Email</th>

<th>Phone Number</th>

<th>Street</th> 

<th>City</th>


<th>State</th>


<th>Country</th>

<th>Pincode</th>


<th>Photos</th>
<th>Id</th>
<th> Action </th>

<?php
foreach($data['posts']as $post):?>
<tr>
    
    <td>  <?= $post->firstname ?>  </td>
    <td>  <?= $post->lastname?> </td>
    <td>  <?= $post->email ?> </td>
    <td>  <?= $post->phoneno ?> </td>
    <td>  <?= $post->street?> </td> 
    <td>  <?= $post->city?> </td>
    <td>  <?= $post->state?> </td>
    <td>  <?= $post->country?> </td>
    <td>  <?= $post->pincode?> </td>
   
    <td>  
        <img src="<?= $post->photo ?>" width="80px" height="80px">
    </td>
    <td>  <?= $post->id ?>  </td>
    <td>
        <button id="ll"><a href='http://localhost/mvc/pages/edit/<?= $post->id ?>'>Edit</a> </button><br><br>
        <button id="ll"><a href='http://localhost/mvc/pages/delete/<?= $post->id ?>'>Delete</a> </button>
</td>   
</tr>
 <?php endforeach ?>

</table>
</div>
<br>

<button onclick="exportReportToExcel(this)">EXPORT</button>
<script>
function exportReportToExcel() {
  let table = document.getElementsByTagName("table"); // you can use document.getElementById('tableId') as well by providing id to the table tag
  TableToExcel.convert(table[0], { // html code may contain multiple tables so here we are refering to 1st table tag
    name: `export.xlsx`, // fileName you could use any name
    sheet: {
      name: 'Sheet 1' // sheetName
    }
  });
 
}
</script>
<script src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>

