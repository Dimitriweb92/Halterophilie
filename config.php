<?php
/**
 * Config, add in .gitignore when you make the true login and password
 */
# aaa004 create connection constants
define("DB_TYPE","mysql");
define("DB_HOST","localhost");
define("DB_NAME","dbhalterophilie");
define("DB_PORT",3306);
define("DB_LOGIN","root");
define("DB_PWD","");
define("DB_CHARSET","utf8");

# aaa044 constante for dev/prod
define("DB_MODE","dev"); // set to "prod" for hidding sql errors

# aaa045 constante for permanent connection
define("DB_PERSIST",false); // set to true for permanent connexion