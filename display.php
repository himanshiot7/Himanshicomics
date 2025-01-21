<?php

include 'connect.php';

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
  <div class="container">
    <button class="btn btn-primary my-3">
      <a class="text-light" href="user.php">
        Add User
      </a>
    </button>

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">S.No.</th>
          <th scope="col">Email</th>
          <th scope="col">Name</th>
          <th scope="col">Mobile</th>
          <th scope="col">Password</th>
          <th scope="col">Operations</th>
        </tr>
      </thead>
      <tbody>

        <?php

        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $email = $row['email'];
            $name = $row['name'];
            $mobile = $row['mobile'];
            $password = $row['password'];

            echo ' 
            <tr>
              <th scope="row">' . $id . '</th>
              <td>' . $email . '</td>
              <td>' . $name . '</td>
              <td>' . $mobile . '</td>
              <td>' . $password . '</td>
              <td>
                <button class="btn btn-primary">
                  <a class="text-light" href="update.php?updateid='.$id.'">
                    Update
                  </a>
                </button>
                <button class="btn btn-danger">
                  <a id="delete" class="text-light" href="remove.php?deleteid='.$id.'">Remove</a>
                </button>
              </td>
            </tr> ';
          }
        }

        ?>


      </tbody>
    </table>


  </div>
</body>

</html>