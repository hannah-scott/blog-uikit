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

    function separateDirsAndFiles($l) {
        $fs = [];
        $ds = [];

        for ($i=0; $i<count($l);$i++){
            $ss = substr($l[$i],-strlen($GLOBALS["fileext"] ));
            if ($ss == $GLOBALS["fileext"] ){
                array_push($fs,$l[$i]);
            } else {
                array_push($ds,$l[$i]);
            }
        }

        $r = array($ds,$fs);
        return $r;
    }

    function listFiles($f) {
    // Create listitems for all files passed
        $str = "";
        for ($x = 0; $x < count($f); $x++) {
            $str=$str."<li>".
            // Remove file extension
            "<a class='nav-post'>".substr($f[$x],0,-strlen($GLOBALS["fileext"] ))."</a>".
            "</li>";
        }
        return $str;
    } 

    function createList($p) {
        // Initialize return string
        $r = "";

        // Get array of dirs and files
        $c = getDirContents($p);
        $dfs = separateDirsAndFiles($c);
        
        // Split out
        $ds = $dfs[0];
        $fs = $dfs[1];

        // If any dirs exist, list contents
        if (count($ds) > 0){
            for ($i=0;$i<count($ds);$i++){
                $r=$r."<li>$ds[$i]<ul>";

                $sfs = getDirContents($p."/".$ds[$i]);
                $r =$r.listFiles($sfs);

                $r = $r."</ul></li>";
            }
        }
        // List file contents
        $r=$r.listFiles($fs);

        return $r;
    }
?>

    