<!DOCTYPE html>
<html>
<head>
<style>
  label,
  input,
  button {
    border: 0;
    margin-bottom: 3px;
    display: block;
    width: 100%;
  }
 .common_box_body {
    padding: 15px;
    border: 12px solid #28BAA2;
    border-color: #28BAA2;
    border-radius: 15px;
    margin-top: 10px;
    background: #d4edda;
}
.error {color: #FF0000;}
</style>

</head>
<body>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script>
$(document).ready(function(){
  $("#registration").validate({
    // Specify validation rules
    rules: {
      firstname: {
        require : true,
        minlenght: 3
      },
      lastname: {
        require: true,
        minlenght : 3
      },
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 7
      },
    },
    messages:{
      firstname:{
        require : "Please enter your name!",
        minlenght: "At least 3 characters!"
      },
      lastname:{
        require : "Please enter your name!",
        minlenght: "At least 3 characters!"
      },
      password:{
        require : "Please enter your password!",
        minlenght: "At least 7 characters!"
      }
    },
    sumbitHandler: function(form){
      form.submit();
    }
  });
});
</script>
<br><br><br><br><br><br>
<div class="common_box_body test">
  <h2>Registration</h2>
  <form action="#" name="registration" id="registration">

 
    <label for="firstname">First Name</label>
    <input type="text" name="firstname" id="firstname" placeholder="John" ><br>
 
    <label for="lastname">Last Name</label>
    <input type="text" name="lastname" id="lastname" placeholder="Doe"><br>
 
    <label for="email">Email</label>
    <input type="email" name="email" id="email" placeholder="john@doe.com"><br>
 
    <label for="password">Password</label>
    <input type="password" name="password" id="password" placeholder=""><br>
 
    <input name="submit" type="submit" id="submit" class="submit" value="Submit">
    <p style="margin-left: 46%;font-size: 20px"><a href="index.php"style="color: black;text-decoration: none;">Back to menu</a></p>
  </form>
</div>




</body>
</html>