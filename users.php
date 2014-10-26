<?php 

//NEEDS FORMATTING

    require('includes/util.inc.php');
    include('includes/header.inc.php');

    $q = "SELECT * FROM users";
    $query = $pdo->prepare( $q );
    $query->execute();
    $results = $query->fetchAll( PDO::FETCH_ASSOC );

?>
 <table class="table">
   <tr>
     <th>userId</th>
     <th>username</th>
     <th>password</th>
     <th>userStatus</th>
     <th>Email</th>
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
     echo "</td>";
   echo "</tr>";
   }
 ?>
 </table>