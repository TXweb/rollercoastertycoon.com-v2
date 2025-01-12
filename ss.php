<?php
$index = strtr(basename($_SERVER['REQUEST_URI']),
    [
        'ss.php' => '',
        '?' => '',
    ]
);
$index = (int)$index;
if ($index < 1 || $index > 10)
    $index = 1;

$previous = ($index != 1) ? ($index - 1) : 10;
$next = ($index != 10) ? ($index + 1) : 1;

$filename = "screenshots/{$index}b.jpg";
if (!file_exists(__DIR__ . "/{$filename}"))
{
    $filename = "screenshots/{$index}.jpg";
}

?>
<html lang="en">
<head>
    <title>RollerCoaster Tycoon&#174;</title>
</head>
<body bgcolor="#0099FF" marginheight=0 marginwidth=0 topmargin=0 leftmargin=0>
    <a href="javascript:top.close()">
        <img src="images/ss_top.gif" height="39" width="320" border="0">
            <br><img src="<?=$filename?>" width=400 height=300 border=0 alt='Click to Close'>
    </a><br>
    <center>
        <a href="ss.php?<?=$previous?>">
            <img src="images/ss_back.gif" width="79" height="40" border="0">
        </a>
        <a href="ss.php?<?=$next?>">
            <img src="images/ss_next.gif" width="79" height="40" border="0">
        </a>
    </center>
</body>
</html>



