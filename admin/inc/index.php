        <?php include('./db_config.php'); ?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Admin Panel</title>
          <style>
            .login-form {
              position: absolute;
              top: 50%;
              left: 50%;
              transform: translate(-50%, -50%);
            }
          </style>
        </head>

        <body class="bg-light">


          <div class="login-form text-center rounded bg-white shadow overflow-none">
            <form method="POST">
              <h4> Admin Login Panel</h4>
              <div class="p-4">

                <div class="mb-3">
                  <input type="text" name="admin_name" required class="form-control shadow-none text-center">
                </div>

                <div class="mb-4">
                  <input type="text" name="admin_pass" class="form-control shadow-none text-center">
                </div>

                <button type="submit" name="login" class="btn btn-primary"> Login </button>

              </div>

            </form>
          </div>



          <?php


          if (isset($_POST['login'])) {

            // print_r($_POST);

            $frm_data = filteration($_POST);
           
            //  echo "<h1>$frm_data[admin_name]</h1>";
            //  echo "<h1>$frm_data[admin_pass]</h1>";

            // print_r($frm_data);

             $query = "SELECT * FROM `admin_cred` WHERE `admin_name`= ? AND `admin_pass` = ?";
             $values = [$frm_data['admin_name'],$frm_data['admin_pass']];
             $datatypes = "ss";

            select($query,$values,"ss");

            

          }

          ?>


        </body>

        </html>