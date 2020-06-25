TO DO AFTER UPLOADING:
1. update BASE_URL in application/config/constants.php
2. update db config in application/config/database.php
3. update email settings in application/config/email.php
4. update company info in application/config/constants.php
5. update email validation info in application/controllers/Applicant.php->send_validation_email()
6. change submit button theme in views/login.php
7. update db-settings_users
8. update user access db-settings_menu
9. if globe sms service is set, update redirect/notify url

============================================

update controllers/Home
-temporary redirect to search applicant
-set index redirect to dashboard if created

update config/routes
-temporary 404 redirect to search applicant
-set to 404 page

============================================

known issues:
-facebox close image is broken
*edit value of settings:closeImage in facebox.js

-datatable pagination image is broken
*check path of external scripts

-Error: no input file specified
*Just add the ? sign after index.php in the .htaccess file
ie: RewriteRule ^(.*)$ index.php?/$1 [L]

-CORS missing
*add www in URL
*edit application/config/constants.php BASE_URL
*or application/config/config.php $config['base_url']

-extending core library
*check file name of class
*check subprefix in config

============================================

TO DO:
#ALTER TABLE manager_jobs AUTO_INCREMENT=1001;