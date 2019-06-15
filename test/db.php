<?php
/**
 * Created by Vitaly Lebedev
 * Email: eslovo@gmail.com
 * Date: 15.06.2019
 * Time: 22:50
 */


$pms['db.server'] =$dbConn['db.server'];
$pms['db.host'] =$dbConn['db.host'];
$pms['db.update'] =$dbConn['db.update'];
$pms['db.update.login'] =$dbConn['db.update.login'];
$pms['db.update.pass'] =$dbConn['db.update.pass'];

$encoding ='utf8';
//$db_update = new PDO($pms['db.server'].':host='.$pms['db.host'].';port=3306;dbname='.$pms['db.update'],$pms['db.update.login'],$pms['db.update.pass'],array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES $encoding"));
$db_update = new PDO($pms['db.server'].':host='.$pms['db.host'].';dbname='.$pms['db.update'],$pms['db.update.login'],$pms['db.update.pass'],array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES $encoding"));
$db_update->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);


if($sb_provID ==$provData['sb_provID']){

    try {

        $sql ="INSERT INTO up_provider_line (sb_provID,sb_Title,INN,IP) VALUES (:sb_provID, :sb_Title, :INN, :IP)";

        $stmt = $db_update ->prepare($sql);
        $stmt -> bindParam(':sb_provID',  $provData['sb_provID'], PDO::PARAM_STR);
        $stmt -> bindParam(':sb_Title',  $provData['sb_Title'], PDO::PARAM_STR);
        $stmt -> bindParam(':INN',  $provData['INN'], PDO::PARAM_STR);
        $stmt -> bindParam(':IP',  $ipCurrent, PDO::PARAM_STR);

        if($stmt->execute()){
            echo '<div class="message">Запрос выполнен корректно. Поставщик: '.$provData['sb_Title'].' ИНН: '.$provData['INN'].'</div>';
        }else{
            echo '
                         <div class="message error">
                             [#01-EVENT-MAP] СБОЙ! Запрос к БД не был исполнен! Поставщик: '.$provData['sb_Title'].' ИНН: '.$provData['INN'].'
                         </div>';
        }


    } catch(PDOExcetion $e){
        echo $db_update -> errorCode(); print_r($db_update -> errorInfo()); // for PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING
    }
}