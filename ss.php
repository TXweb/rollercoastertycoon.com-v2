<?php
$filename = basename($_SERVER['REQUEST_URI']);
if (str_starts_with($filename, 'ss.php?') && file_exists($filename))
{
    include $filename;
    exit(0);
}
?>