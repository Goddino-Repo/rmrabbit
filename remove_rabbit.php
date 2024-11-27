<?php
    echo "\nTool for removing rabbit\n";
    
    $disk = strtolower($argv[1]);
    
    if(strpos(" ", $argv[2])) {
	    $argv[2] = str_replace(" ", "\ ", $argv[2]);
    }

    $text = shell_exec("find /mnt/" . $disk . "/ -name '" . $argv[2] . "'");

    $file = fopen("result.txt", "w");
    fwrite($file, $text);
    fclose($file);
    
    $handle = file("result.txt");
    foreach($handle as $directory) {
	    if(strpos(" ", $directory)) {
            $directory = str_replace(" ", "\ ", $directory);
        }
	    
        shell_exec("rm -f " . $directory);
	    echo "deleted " . $directory . "\n";
    }
    
    echo "\nRabbit deleted!\n";
?>
