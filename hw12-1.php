<?php 
 
 $host = 'localhost' ;
 $user = 'root' ; 
 $password = '' ;
 $dbname = 'hw' ; 

 $DNS = 'mysql:host='. $host . ';dbname='.$dbname ; 
  
 //creat a PDO instance ; 
 $pdo = new PDO ($DNS,$user , $password); 
 $pdo ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE , PDO::FETCH_OBJ) ;
 
 #pdo query 
//  $stmt = $pdo -> query('SELECT  * FROM one ');
 

$sql = 'SELECT نام FROM  employee  WHERE حقوق<1000' ; 
$stmt  = $pdo ->prepare($sql) ; 

$posts = $stmt  ->fetchAll() ;

$sql = 'SELECT نام ,واحد ادتری FROM employee   ' ; 
$stmt  = $pdo ->prepare($sql) ; 

$posts = $stmt  ->fetchAll() ;

$sql = 'SELECT واحد FROM  shop  WHERE شهر = اصفهان' ; 
$stmt  = $pdo ->prepare($sql) ; 

$posts = $stmt  ->fetchAll() ;

$sql = 'SELECT واحد , میانگین حقوق FROM  shop  ' ; 
$stmt  = $pdo ->prepare($sql) ;
$posts = $stmt  ->fetchAll() ;

$sql = 'SELECT نام ,کد شعبه FROM  employee  ' ; 
$stmt  = $pdo ->prepare($sql) ;
$posts = $stmt  ->fetchAll() ;


$sql = 'SELECT واحد , میانگین حقوق FROM  shop WHERE شعبه=اصفهان ' ; 
$stmt  = $pdo ->prepare($sql) ;
$posts = $stmt  ->fetchAll() ;


