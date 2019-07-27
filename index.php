<?php
  // Define a constant __CONFIG__
  define("__CONFIG__",true);

  // require config file
  require_once("inc/config.php");
?>

<!doctype html>
<html lang="en-US">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Document meta tags -->
        <meta name="language" content="EN">

        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.6/css/uikit.min.css" />

        <title>Blog</title>
    </head>

    <body>
        <div class="uk-container uk-section">
            <div class="uk-margin">
                <h1>Blog</h1>

                <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1">
                    
                <div class="uk-width-1-1@s uk-width-1-4@m"> 
                        <!-- Navigation bar -->
                        Navigation
                        <ul>
                            <?php 
                                // Read in files in assets/content
                                $path = "assets/content";
                                $files = array_diff(scandir($path), array('.','..'));
                                sort($files, SORT_NATURAL | SORT_FLAG_CASE);

                                for ($x = 0; $x < count($files); $x++) {
                                    echo "<li>";
                                        // Remove .php file extension
                                        echo "<a class='nav-post'>".substr($files[$x],0,-4)."</a>";
                                    echo "</li>";
                                }
                            ?>
                    </ul>

                    </div>
                    <div class="uk-width-1-1@s uk-width-3-4@m blog-text">  
                        <!-- Blog text goes here -->
                        <?php 
                            // If content was received from AJAX, display it
                            if (isset($_SESSION['text'])){
                                echo $_SESSION['text'];
                            }
                        ?>
                    </div>

                </div>
            </div>
        </div>
        <?php require_once("inc/footer.php"); ?>
    </body>
</html>