<?php
  session_start();
  unset($_SESSION["userid"]);
  unset($_SESSION["username"]);
  
  echo("
       <script>
          location.href = 'start2.php';
         </script>
       ");
?>