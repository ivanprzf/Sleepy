<?php
require_once('dao/SqlCountryDAO.php');
require_once('vo/CountryVO.php');
require_once "utils/openSqlConnection.php";
require_once "utils/config.php";
require_once "utils/config.php";
require_once "utils/openSqlConnection.php";
require_once "utils/closeSqlConnection.php";
require_once('dao/SqlPhotoDAO.php');
require_once('vo/PhotoVO.php');

//$mysqli=openConnection();

session_start();

$_SESSION['conn']  = openConnection();


/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 12/11/14
 * Time: 20:33
 */


?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>

<body>

<form action="PRUEBAS.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="fotoo"/>
    <br/>
    <input type="submit" name="lool"/>
</form>
    <?php


    echo hash("sha256","www")."</br>";


        //$pais = new \CountryVO\CountryVO("RU",1,"ÑÑÑÑÑÑ");
        //AddCountry($pais, $_SESSION['conn']);
        //echo 'pais insertado';
        //echo GetCountry(2,$_SESSION['conn'])->countryName;

    //var_dump(hash_equals("", ""));
    //hash_equals(crypt("CONTRASEÑAAA","mail@mail.com") , crypt("CONTRASEÑAAA","mail@mail.com") ;
    /*echo crypt("CONTRASEÑAAA","mail@mail.com");
    echo "<br/>";
    echo crypt("CONsadsadSEÑAAAA","mail@maissadasdsadasdasdafffggdsdl.com");
    echo "<br/>";
    echo "mecagoento: ".crypt("abc123.",'mecagoento');
    echo "<br/>";
    echo "putastodas: ".crypt("abc123.",'pautasdsd.stodas');
    echo "<br/>";*/



    //echo getCountry(800,$_SESSION['conn']);
    /*foreach (GetAllCountries($_SESSION['conn']) as $pais){
        echo $pais->countryName."<br/>";
    }*/

    /*require_once('dao/SqlSubzone2DAO.php');
    require_once('vo/Subzone2VO.php');

    $mysqli=openConnection();
    $subZones2 = getAllSubzones2($mysqli);
    closeConnection($mysqli);
    foreach ($subZones2 as $element){
        echo $element->subzone2Name."<br/>";
    }*/
    echo "-------------------------------------------";







    ?>

</body>

</html>