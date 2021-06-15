 <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="google" content="notranslate">
    <title>Testing of sql Injection</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <section class="container mt-5 mb-5">
      <a href="index.html">Click to go back to sql index</a> /  
      <a href="/security">Click to go back to Home</a>
      <h2> Data fatching from user table</h2>
      <p>Only contains id name and password</p>
      <table class="table table-hover">
          <thead>
              <tr>
                  <th>Id</th>
                  <th>Username</th>
                  <th>password</th>
              </tr>
          </thead>
          <tbody>
</body>

</html>
  <?php
  $uname= filter_input(INPUT_POST, 'name');
  $passd= filter_input(INPUT_POST, 'pwd');
  $conn = mysqli_connect("localhost", "root", "", "injection");
  $flag = 0;
  if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  echo "error at connetion";
  } 


  $sql = "select * from user where name='$uname' AND password='$passd'" ;
  // $result = $conn->query($sql);
  $result2 = $conn->query($sql);
  if ($result2->num_rows > 0) 
      {
          while($row2 = $result2->fetch_assoc())
          {
              echo "<tr><td>" . $row2["id"]. "</td><td>" . $row2["name"] . "</td><td>"
          . $row2["password"]. "</td></tr>";
          }
          echo "</tbody>";
          echo "</table>";
          echo "<p class ='text-primary'>$sql</p>";
      }
  else { echo "0 results"; }



    // if ($flag==1){
    //   $sql2 = "SELECT * FROM user";
    //   $result2 = $conn->query($sql2);
    //   if ($result2->num_rows > 0) 
    //       {
    //           while($row2 = $result2->fetch_assoc())
    //           {
    //               echo "<tr><td>" . $row2["id"]. "</td><td>" . $row2["name"] . "</td><td>"
    //           . $row2["password"]. "</td></tr>";
    //           }
    //           echo "</tbody>";
    //           echo "</table>";
    //           echo "<p class ='text-primary'>$sql</p>";
    //       }
    //   else { echo "0 results"; }
    //   $flag = 0;
    // }

  $conn->close();
  ?>