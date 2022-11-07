#Instalation de Laravel 
1. Composer (https://getcomposer.org/download/)
2.  dans la console git ou une console shell ,on se place  dans le répertoire
www de wamp64  et on crée le projet .
#Création du projet 
1. on  met composer create-project laravel/laravel Project_name

#exécuter le projet 👍
1.  dans la console ou vsc on met : php artisan serve 

#créer une base de données.
Pour indiquer à Laravel quel SGBD est utilisé 
"DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE="nom de la base de donnée"
DB_USERNAME=root
"




#Envoyer un email depuis le SMTP GMAIL :
Dans le  fichier .env
    MAIL_DRIVER=smtp
    MAIL_HOST=smtp.googlemail.com
    MAIL_PORT=465
    MAIL_USERNAME=votre_adresse@gmail.com
    MAIL_PASSWORD=votre_mot_de_passe_d_application
    MAIL_ENCRYPTION=ssl

 

