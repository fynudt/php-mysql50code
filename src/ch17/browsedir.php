<html>
<head>
    <title>Browse Directories</title>
</head>
<body>
<h1>Browsing</h1>
<?php
/**
 * Created by PhpStorm.
 * User: Hurf
 * Date: 2018/7/21
 * Time: 11:12
 */
    $current_dir = str_replace( '\\' , '/' , realpath(dirname(__FILE__).'/../../')).'/uploads/';
//    $current_dir = '/../../uploads';
    $dir = opendir($current_dir);
  
    echo '<p>Upload directory</p>';
    echo '<p>Directory Listing:</p><ul>';
    echo realpath(dirname(__FILE__).'/../../').'<br>';
    // echo $current_dir;
    while (false !== ($file = readdir($dir))) {
        // strip out the two entries of . and ..
        if ($file != "." && $file != "..") {
            echo '<li>'.$file.'</li>';
        }
    }
    echo '</ul>';
    closedir($dir);
?>
</body>
</html>
