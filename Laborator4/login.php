<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
</style>
</head>
<body>
<div class="common_box_body test">
  <h2>Login</h2>
  <form action="#" name="registration" id="registration";>

 
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