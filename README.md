# quiz-oo-PHP
Quiz application using PHP, MySQL. With admin and user features

Application hasn't completed at, though the basic functionality works fine.

Login functionality hasn't been implimented. Admin will create subjects and add questions either it could be radio or checkbox

By clicking on the subject the user will be redirected to the respective page with respective questions.

Based on the type of the question the, list if the question options are formateed
To load the sql or populate the database with table 
  create a empty database with name of your choice <DB NAME> 
  eg: quiz is what I choose as and respectively change the database in the config.php
  
  to import the table you can choose either GUI tools such as PHPMyadmin...
  to import the sql file to the database use the following command from command line or terminal respective to the OS
  I am showing it using windows as I operate using windows7, I assume the command must be fine for the unix based OS
  C:\xampp\mysql\bin>mysql -u root -p <dbanme> < D:\quiz.sql
  Please replace  the dbname with your dbname.
