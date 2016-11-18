goes with default.php

apache:
```
RewriteEngine on
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ /default.php?q=$1 [L,QSA]
```
nginx:
```
if (!-e $request_filename)
{
    rewrite ^/(.*)$ /default.php?/$1 last;
    break;
}
```
