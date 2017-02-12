<?php
$dirFiles = array();
function importAllFiles($folderName)
{
    if ($handle = opendir($folderName)) {

        while (false !== ($entry = readdir($handle))) {

            if ($entry != "." && $entry != ".." && $entry != ".DS_Store") {
                $dirFiles[] = $folderName . $entry;
                array_push($dirFiles,$folderName . $entry);
            }
        }
        closedir($handle);
    }
    sort($dirFiles);
    foreach($dirFiles as $file)
    {
        include_once($file);
    }
    foreach($dirFiles as $file)
    {
        echo "file name = "+$file+ "</br>";
    }

}

?>