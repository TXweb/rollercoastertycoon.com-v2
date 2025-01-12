<?php
$filename = basename($_SERVER['REQUEST_URI']);
if (str_starts_with($filename, 'index.php?') && file_exists($filename))
{
    include $filename;
    exit(0);
}
?>