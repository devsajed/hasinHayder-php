<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasin hayder php</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

<style>
  body{
    margin-top: 50px;
  }
</style>

<?php 
include_once 'functions.php';

?>
</head>
<body>
  
<div class="container">
  <div class="row">
    <div class="column column-60 column-offset-20">
      <h2>My First Form php</h2>
      <p>This is a simple PHP application to demonstrate the use of PHP with HTML.</p>
    <h4>out put</h4>

    <p>

    <?php
    $fname = '';
    $lname = '';
    $checked = '';
    if(isset($_REQUEST['cb1']) && $_REQUEST['cb1']== 1){
      // $checked = htmlspecialchars($_REQUEST['cb1']);
      $checked = 'checked';
      // $checked = filter_input( INPUT_POST, 'cb1', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    }

    if(isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])){
      // $fname = htmlspecialchars($_REQUEST['fname']);
      $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_URL);
      // $fname = filter_input( INPUT_POST, 'fname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    }

    if(isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])){
      // $lname = htmlspecialchars($_REQUEST['lname']);
      $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_URL);

    }


      echo "<b>First Name : </b>" . $fname . "<br>";
      echo "<b>Last Name : </b>" . $lname;


    
    ?>
      <!-- <?php if(isset($_POST['fname']) && !empty($_POST['fname'])):?>
      <b>First Name : </b><?php echo htmlspecialchars(  $_POST['fname']);?>
      <?php endif;?>
      <br>
      <?php if(isset($_POST['lname']) && !empty($_POST['lname'])):?>
      <b>Last Name : </b><?php echo htmlspecialchars( $_POST['lname']);?>
      <?php endif;?> -->
    </p>
    
    </div>
  </div>

  <div class="row">
    <div class="column column-60 column-offset-20">

      <h2>Form</h2>
      <p>Fill out the form below and click submit.</p>
      <form  method="POST" action="">
        <label for="fname">First Name</label>
        <input type="text" placeholder="First Name" name="fname" value ="<?php echo $fname; ?>" >
        <label for="lname">Last Name</label>
        <input type="text" placeholder="Last Name" name="lname" value ="<?php echo $lname; ?>" >
        <div>
          <input type="checkbox" name="cb1" id="cb1" value="1" <?php echo $checked; ?> >
          <label for="cb1" class="label-inline">Check me</label>
        </div>

        <label for="label">Select some fruits</label>
        <input type="checkbox" name="fruits[]" id="fruits" value="apple" <?php isFruitsChecked('apple'); ?> >
        <label for="fruits" class="label-inline">Apple</label>
        <input type="checkbox" name="fruits[]" id="fruits" value="banana" <?php isFruitsChecked('banana'); ?> >
        <label for="fruits" class="label-inline">Banana</label>
        <input type="checkbox" name="fruits[]" id="fruits" value="orange" <?php isFruitsChecked('orange'); ?> >
        <label for="fruits" class="label-inline">Orange</label>
        <input type="checkbox" name="fruits[]" id="fruits" value="mango" <?php isFruitsChecked('mango'); ?> >
        <label for="fruits" class="label-inline">Mango</label>
        <input type="checkbox" name="fruits[]" id="fruits" value="grape"  <?php isFruitsChecked('grape'); ?> >
        <label for="fruits" class="label-inline">Grape</label>
        <input type="checkbox" name="fruits[]" id="fruits" value="watermelon"   <?php isFruitsChecked('watermelon'); ?> >
        <label for="fruits" class="label-inline">Watermelon</label>
        <button type="submit">submit</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>