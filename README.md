Sample project for iron.io testing
==================================
This project used symfony2 standard edition

1) Installing this project
----------------------------------

* Git clone
* Create DB named "symfony" and import data from src/Yoda/EventBundle\sql
* you can update you DB server info  app\config\parameter.yml

2) Routing
-------------------------------------

* when you browse [YOUR_DOMAIN_NAME]/app_dev.php/ then you will see application running
* we are considering [YOUR_DOMAIN_NAME]/app_dev.php/email will be a cronjob, which sending email 

3) Testing
------------------------------------

* You have to upload this bundle to iron.io
* You have to run this "[YOUR_DOMAIN_NAME]/app_dev.php/email" route as cronjob 