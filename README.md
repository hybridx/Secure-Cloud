# Secure-Cloud

PHP upload download project



	REQUIRMENTS: 
	Apache Server;
	PHP: PHP version 5.5.12;
	RAM: 2GB (min);
	OS: Ubuntu(tested on 14.04,16.04)
------------------------------------------------------------------------------------------------------------------------------
	DATABASE:(copy paste in sql CLI)//(with USERNAME = postgres    PASSWORD = root)
------------------------------------------------------------------------------------------------------------------------------
	Copy/Replace the given 'php.ini' file with the system php.ini file in 'php5/apache2' folder.
	Then restart the apache server.
   
	&&
	
	Also Copy/Replace the given 'apache2.conf' file with yur system '/etc/apache2/apache2.conf' file.
------------------------------------------------------------------------------------------------------------------------------
	Make sure the system has php-PDO drivers..
	If yu dont then run the following command(internet required)
=========================================================================
	if system = ubuntu or debian based
	
	run the following command
	
	'''''''''''''''''''''''''''''''
	sudo apt-get install php5-pgsql
	'''''''''''''''''''''''''''''''
==========================================================================
	if system = redHat or fedora (.rpm) based
	run the following command
	'''''''''''''''''''''''''''''
	su -c "yum install php5-pgsql"
	''''''''''''''''''''''''''''''
------------------------------------------------------------------------------------------------------------------------------
	CREATEDB SeCloud; 
	psql SeCloud;
	CREATE TABLE newsletter(id SERIAL,email varchar(100),PRIMARY KEY(id));
	CREATE TABLE users(id SERIAL,
	name varchar(50),email varchar(50) NOT NULL,
	contact BIGINT,pass varchar(50) NOT NULL,PRIMARY KEY(id));
-----
