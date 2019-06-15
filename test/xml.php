<?php
/**
 * Created by Vitaly Lebedev
 * Email: eslovo@gmail.com
 * Date: 15.06.2019
 * Time: 22:51
 */

require_once "init.php";

/**
 *  Load File
 */
$xmlFileName ='Camt_053_Beispiel_1.XML';
$xmlFile =CAMT_XML_UPLOAD_DIR.'/'.$xmlFileName;

/**
 *  XML FILE PARSER
 */
$sxml =simplexml_load_file($xmlFile);
foreach ($sxml->xpath("/BkToCstmrStmt/GrpHdr") as $node) {

    $MsgId = (string)$node->MsgId;
    $CreDtTm = (string)$node->CreDtTm;
    $MsgPgntn = (string)$node->MsgPgntn->MsgPgntn;
    $LastPgInd = (string)$node->MsgPgntn->LastPgInd;

    foreach ($node->Bal as $balance) {

        $SesId = (string)$balance->SesId;
        $Date = (string)$balance->Date;
        $DateStamp = substr($Date, 0, 10);
        $DateStamp = strtotime($DateStamp);
    }
}

foreach ($sxml->xpath("/BkToCstmrStmt/Stmt") as $node) {

    $Id = (string)$node->Id;
    $ElctrncSeqNb = (string)$node->ElctrncSeqNb;

    foreach ($node->Bal as $balance) {

        $SesId = (string)$session->SesId;
        $Date = (string)$session->Date;
    }
}

/**
 *  XML DOM PARSER
 */
$xmlDoc = new DOMDocument();
$xmlDoc->loadXML($xmlFile);
$sxml = simplexml_import_dom($xmlDoc);

foreach ($sxml->xpath("/ProvData/EventSet/Event") as $event) {

    $eventTitle = (string)$event->EventTitle;
    $eventGenreID = (string)$event->Genre->attributes()->id;

    foreach ($event->SessionSet->Session as $session) {

        $SesId = (string)$session->SesId;
        $Date = (string)$session->Date;
        $DateStamp = substr($Date, 0, 10);
        $DateStamp = strtotime($DateStamp);
    }
}