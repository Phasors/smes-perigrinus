<?php
$file = "Pictures/usermgmt.PNG";
if (!unlink($file))
  {
  echo ("Error deleting $file");
  }
else
  {
  echo ("Deleted $file");
  }
?> 