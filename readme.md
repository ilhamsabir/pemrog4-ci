# Pemrog 4

## Build Setup
This project build with CI3 Framework

## Dependency
Create .htaccess and paste it

RewriteEngine on
RewriteCond $1 !^(index\.php|resources|robots\.txt)
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php?/$1 [L,QSA]

## Config
edit config.php
