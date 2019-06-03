<?php
/**
 * Created by Lebedev Vitaly
 * Email: eslovo@gmail.com
 * Date: 02.06.2019 17:19
 */

declare(strict_types=1);

// THIS LIST ALL FILES IN A GIVEN DIRECTORY AND SHAPES HTML WITH ALL OF THEM BUT ITSELF


/*
 * Getting all files in directory
 */

$rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(dirname(__FILE__)));

$files = array();

foreach ($rii as $file) {
    if ($file->isDir()){  continue; }
    $files[] = $file->getPathname();
}

// File list excluding the current one
$fileList =shapeFileList($files);

// HTML output of files
htmlOutput($fileList);



/*
 *  Removing current index file
 *  Shaping array with: filename, dir and url
 */
function shapeFileList(array $thisDirFiles) : array {

    $noThisFileArray=[];

    $thisFile =fileFromPath(__FILE__);
    //echo $thisFile; die;

    foreach($thisDirFiles as $key=>$val){

        $file =fileFromPath($val);
        //echo $val; die('sdfsd');

        if($file != $thisFile) {

            //shape url
            $url =shapeUrl($val);

            $fileData =array('file'=>$file, 'path'=>$val, 'url' =>$url);

            array_push($noThisFileArray, $fileData);
        }
    }

    //var_dump($noThisFileArray); die(' +++');
    if(!empty($noThisFileArray)) return $noThisFileArray;
}


/*
 * File from Path
 */

function fileFromPath(string $file) : string{
    $thisFile = substr($file, strrpos($file, '/') + 1);
    return $thisFile;
}


/*
 * Shaping URL
 */
function shapeUrl(string $path) : string {

    $dirFile =str_replace(  $_SERVER["DOCUMENT_ROOT"], '', $path);
    $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$dirFile";

    return $url;
}


/*
 * Generating HTML output
 */
function htmlOutput(array $files){
    ?><ul><?php
    foreach($files as $key=>$val){
        ?>
            <li><a target="_blank" class="link" href="<?php echo $val['url']; ?>"><?php echo $val['file']; ?></a></li>
        <?php
    }
    ?></ul><?php
}