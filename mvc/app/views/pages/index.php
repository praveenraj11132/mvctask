
<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="s">

     <h1> USER </h1>

     <form action="<?php echo URLROOT."pages/adminview" ?>" method="post">
        <input type="submit"   value="Admin"><br><br><br>
     </form>
     <form action="<?php echo URLROOT."pages/guestview" ?>" method="post">
        <input type="submit"  value="Guest">
     </form>

</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
