<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: /smes-perigrinus-design/main-registrar");
   }
?>