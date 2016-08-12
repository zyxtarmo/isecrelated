<?php
$req = serialize($_SERVER) . serialize($_REQUEST);
file_put_contents('/tmp/' . time() . '-' . md5($req), $req);
header('HTTP/1.1 500 Internal Server Error');
?>
