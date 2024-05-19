<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="area">
    <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
    </ul>
  </div >
  <div class="wrapper">
    <section class="form signup">
      <header>Chat Application System</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>First Name <span>*</span></label>
            <input type="text" name="fname" placeholder="First name" required>
          </div>
          <div class="field input">
            <label>Last Name <span>*</span></label>
            <input type="text" name="lname" placeholder="Last name" required>
          </div>
        </div>
        <div class="field input">
          <label>Email Address <span>*</span></label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password <span>*</span></label>
          <input type="password" name="password" placeholder="Enter  password" required>
          <i class="fas fa-eye" style="color: black;"></i>
        </div>
        <div class="field image">
          <label>Select Profile <span>*</span></label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input  type="submit" name="submit" value="Sign Up">
        </div>
      </form>
      <div class="link">Already signed up? <a href="login.php">Login now</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
