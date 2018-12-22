<?php
function password_generate($chars) 
{
  return substr(password_hash('random', PASSWORD_DEFAULT), 3, $chars);
}

$pword = password_generate(8);
echo $pword;
?> 