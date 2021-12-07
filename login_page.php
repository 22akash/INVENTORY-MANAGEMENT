
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> IMS login page </title >
        <link rel="stylesheet" type="text/css" href="css/login.css">
    </head>

 <body class="container1">
          <div class= "login_head">
                <h1> IMS </h1>
                <p>Inventory Management System </p>
          </div>
              <div class="login_body">
                  <from action="login_page.php" method="POST">
                      <div class="login_input_container">
                          <label for=""> >>Username </label>
                          <input type="text" />
                      </div>
                      <div class="login_input_container">
                        <label for=""> >>Password </label>
                        <input type="password" />
                      </div>
                     <div class="login_button_container" >
                        <button> Login </button>
                     </div>
                  </from>
              </div>
</body>  
</html>
 