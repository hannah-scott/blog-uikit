<?php 

    function getDirContents($p) {
        // List directory contents
        $l = array_diff(scandir($p), array('.','..'));

        // Alphabetical sorting, allows for-loop to
        // start at 0
        sort($l,SORT_NATURAL | SORT_FLAG_CASE);

        // Create empty array to return
        $f = [];
        
        // Append filenames to array
        for ($i = 0; $i < count($l); $i++){
            array_push($f,$l[$i]);
        }

        return $f;
    }

    function listFiles($f) {
    // Create listitems for all .php files passed
        $str = "";
        for ($x = 0; $x < count($f); $x++) {
            $str=$str."<li>".
            // Remove .php file extension
            "<a class='nav-post'>".substr($f[$x],0,-4)."</a>".
            "</li>";
        }
        return $str;
    } 
?>

    