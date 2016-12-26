<?php 
$file= "config.php";
if ( !file_exists($file) ) {
        echo('File not found: '.$file);die;
      }

// read config.php file
$text = file_get_contents($file);

// find the current state of maintanence
foreach(preg_split('~[\r\n]+~', $text) as $line){
    if(empty($line) or ctype_space($line)) continue; 
       if (strpos($line,'K_SITE_OFFLINE') !== false){ $currentstate=$line;}
}

if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['newmode'])){

   // give maintanence a new state
   if (strpos($currentstate,'1') !== false) {
      // maintenance mode is on, let's switch it to off
      $newstate=str_replace("1", "0", $currentstate);
   }else{
      // maintenance mode is off, let's switch it to on
      $newstate=str_replace("0", "1", $currentstate);
   }

   // change the newstate into the $text string
   $newtext = str_replace($currentstate, $newstate, $text);

   // and write it to config.php
    file_put_contents($file, $newtext);

header("Refresh:0");
header("Location: ../admin/"); /* Redirect browser */
exit();

}
?>



<form action="" method="post">
    <?php
       if (strpos($currentstate,'1') !== false) {echo "Maintenance mode is on";}else{echo "Maintenance mode is off";} 
    ?><br/>
    <input type="hidden" name="newmode" value="1">
    <input type="submit" value="Change">

</form>
