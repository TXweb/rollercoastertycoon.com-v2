<?php
function getFileToInclude(string $requestUri)
{
    $includePath = substr($requestUri, 1);
    if (file_exists($includePath))
    {
        return $includePath;
    }

    $questionMarkPos = strpos($includePath, '?');
    if ($questionMarkPos === false)
    {
        return '';
    }

    $filePath = substr($includePath, 0, $questionMarkPos);
    $queryString = substr($requestUri, $questionMarkPos + 2);
    $queryParts = explode('&', $queryString);
    $newParts = [];
    foreach ($queryParts as $queryPart)
    {
        $keyAndValue = explode('=', $queryPart);
        if ($keyAndValue[0] !== 's')
        {
            $newParts[] = $queryPart;
        }
    }

    $includePath = $filePath . '?' . implode('&', $newParts);
    if (file_exists($includePath))
    {
        return $includePath;
    }

    return $filePath;
}

$requestUri = $_SERVER['REQUEST_URI'];
//echo var_dump($_GET);

$parts = explode('/', $requestUri);
foreach ($parts as $part)
{
    if (strpos($part, '..') !== false)
        die('t');
}

$last = end($parts);
$lastParts = explode('?', $last);
$origFile = $lastParts[0] ?? '';
$queryString = $lastParts[1] ?? '';
if (substr($origFile, -4) !== '.php')
    die('e');
    
$includePath = getFileToInclude($requestUri);

if ($includePath === '')
{
    http_response_code(404);
    echo 'File not found. Might not have been archived!';
    exit(1);
}

if (!file_exists($includePath))
{
    http_response_code(404);
    echo 'File ' . $includePath . ' not found. Might not have been archived!';
    exit(1);
}

$contents = file_get_contents($includePath);
$contents = strtr($contents, [
    'www.rctmart.com' => 'rctmart.rctspace.com',
    '//rollercoastertycoon.com' => '//rctmart.rctspace.com',
]);

echo $contents;
