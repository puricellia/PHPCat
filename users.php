<?php 

//NEEDS FORMATTING

    require('includes/util.inc.php');
    include('includes/header.inc.php');

    $q = "SELECT * FROM users";
    $stmt = $pdo->prepare( $q );
    $stmt->execute();
    $results = $stmt->fetchAll( PDO::FETCH_ASSOC );

    if(isset($_GET['q'])) {
      echo $_GET['q'] . ' User removed';
    }

?>
 <table class="table">
   <tr>
     <th>userId</th>
     <th>username</th>
     <th>password</th>
     <th>userStatus</th>
     <th>email</th>
     <th>remove?</th>
   </tr>
   <?php foreach( $results as $row ){
   echo "<tr><td>";
     echo $row['userId'];
     echo "</td><td>";
     echo $row['username'];
     echo "</td><td>";
     echo $row['password'];
     echo "</td><td>";
     echo $row['userStatus'];
     echo "</td><td>";
     echo $row['email'];
     echo "</td><td>";
     echo "<a href=removeUser.php?username=". $row['username'] .">remove user</a>";
     echo "</td>";
   echo "</tr>";
   }

 ?>
 </table>