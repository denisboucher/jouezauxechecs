<?php

$db = new PDO('mysql:host=localhost;dbname=Logiciels', 'usager', 'boulogne0');
//$db = new PDO(SQL_DSN, SQL_USERNAME, SQL_PASSWORD);

// Identifiants pour la base de donnees. Necessaires a PDO2.
define('SQL_DSN',      'mysql:dbname=Logiciels;host=localhost');
define('SQL_USERNAME', 'usager');
define('SQL_PASSWORD', 'boulogne0');


// Chemins a utiliser pour acceder aux vues/modeles/librairies
$module = empty($module) ? !empty($_GET['module']) ?
$_GET['module'] : 'index' : $module;
define('CHEMIN_VUE', 'modules/'.$module.'/vues/');
define('CHEMIN_MODELE', './modeles/');
define('CHEMIN_LIB', './libs/');

$les_jours = array
('-','1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31');

$les_mois = array
('-','janvier','fevrier','mars','avril','mai','juin','juillet','août','septembre','octobre','novembre','décembre');

$les_annees = array
    ('-','2012','2011','2010','2009','2008','2007','2006','2005','2004','2003','2002','2001',
     '2000','1999','1998','1997','1996','1995','1994','1993','1992','1991',
     '1990','1989','1988','1987','1986','1985','1984','1983','1982','1981',
     '1980','1979','1978','1977','1976','1975','1974','1973','1972','1971',
     '1970','1969','1968','1967','1966','1965','1964','1963','1962','1961',
     '1960','1959','1958','1957','1956','1955','1954','1953','1952','1951',
     '1950','1949','1948','1947','1946','1945','1944','1943','1942','1941',
     '1940','1939','1938','1937','1936','1935','1934','1933','1932','1931',
     '1930','1929','1928','1927','1926','1925','1924','1923','1922','1921',
     '1920','1919','1918','1917','1916','1915','1914','1913','1912','1911',
     '1910','1909','1908','1907','1906','1905','1904','1903','1902','1901','1900');

$les_pays = array
('-','Algérie','Belgique','Bulgarie','Canada','Etats-Unis','France','Liban','Luxembourg','Maroc','Mexique','Québec','Suisse','Tunisie');

?>