# YOi


Configuracion para el virtual host

Se debe de agregar el archivo htacess


<VirtualHost *:80>
    ServerName quiz.dev
    ServerAlias www.quiz.dev

    DocumentRoot "/Applications/XAMPP/xamppfiles/htdocs/Quiz"
    <Directory "/Applications/XAMPP/xamppfiles/htdocs/Quiz">
        Options Indexes FollowSymLinks Includes ExecCGI
        AllowOverride All
        Order allow,deny
        Allow from all
    </Directory>
</VirtualHost>