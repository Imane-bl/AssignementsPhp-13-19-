<?php

echo $_SERVER['SERVER_NAME'];
echo '<br>';
echo $_SERVER['DOCUMENT_ROOT'];
echo '<br>'
;
$stm= $_SERVER['HTTP_USER_AGENT'];

if(strpos($stm,"Win") !==false){
    echo "Windows";
}else if(strpos($stm,"Mac") !==false){
    echo "macos" ;
}else  if(strpos($stm,"Linux") !==false) {
echo "Linux" ;
}


echo '<br>';
echo $opensslConfig['config_file'];
echo '<br>';

phpinfo();


/*
"C:/xampp/htdocs"
"localhost"
"C:\WINDOWS"
"C:/xampp/apache/bin/openssl.cnf"
*/
?>