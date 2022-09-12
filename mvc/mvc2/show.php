<?php require APPROOT . '/views/inc/header.php'; ?>
  <!-- <h1><?php echo $data['title']; ?></h1> -->
  <!-- <p>This is the TraversyMVC PHP framework. Please refer to the docs on how to use it</p> -->
  
  <div class="a">
   <form action="<?php echo URLROOT . 'pages/save'?>" method="POST" enctype="multipart/form-data" style="text-align:center">
    
     <h2>BOOK DETAILS</h2>
     <h3> Bookname  : </h3> <input type="text" name="bookname">
     <h3> BookId    : </h3>  <input type="number" name="bookid">
     <h3> BookTitle : </h3> <input type="text" name="booktitle">
     <h3> BookAuthor: </h3> <input type="text" name="bookauthor">
     <h3> BookPrice : </h3> <input type="number" name="bookprice"><br><br> 
    <!-- <h2> login page</h2>
    <h5>Username:</h5> <input type="text" name ="Username" >
    <h5>password:</h5> <input type="text" name="Password"><br><br>2 -->

     <button name="submit"> submit</button>
  </form>
   <form action="<?php echo URLROOT.'pages/display'?> "method="POST" style="text-align:center"> 
   <button name="display">display</button>
  </form>
  </div> -->
<?php require APPROOT . '/views/inc/footer.php'; ?>

