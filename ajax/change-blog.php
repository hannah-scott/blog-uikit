<?php
  // Define a constant __CONFIG__
  define("__CONFIG__",true);

  // require config file
  require_once("../inc/config.php");
?>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET'){
        // header("Content-Type: application/json");
        $return=[];
        
        // Read in file name, filter for safety
        $fname = Filter::String($_GET["fname"].$GLOBALS["fileext"]);

        // Open file, set div contents to file contents
        $file = fopen("../assets/content/$fname","r") or die("File does not exist.");

        $_SESSION['text'] = fread($file,filesize("../assets/content/$fname"));
        fclose($file);

        // For debugging
        echo json_encode($return, JSON_PRETTY_PRINT); exit;
    } else {
        // Kill the script
        exit("Invalid URL");
    }
?>