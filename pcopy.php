#!/bin/env php
<?php

//created by boondevelop
//created_at 2020-08-01 10:46:17

$_DEF ="\e[39m";
$_GREEN = "\033[0;32m";
$_YELL="\033[0;33m";
$_RED ="\033[0;31m";


$src = $argv[1]; //  "xx/yy/zz/file.ext"
$destdir = $argv[2]; //  "../majdir"

$pathfile = $destdir."/".$src;  //  "../majdir/xx/yy/zz/file.ext"

if($argc<3)
{
    print $_RED."Please specify file to copy and destination folder.\n".$_DEF;
    die("bye.");
}

$structure = dirname($pathfile);

$filename=basename($pathfile); 
if(!file_exists($structure) )
{ 
    if (!mkdir($structure, 0777, true)) 
    {
        //echo "already exists"; //already exists
        die($_RED.'Fail creating tree structure'.$_DEF."\n");
    }else  
    {
        print($_YELL.'Tree structure successfully created.'.$_DEF."\n");
    }
} 

if( !touch($pathfile) )
{
     die($_RED.'Fail to create file.'.$_DEF."\n");
}else
{
       // print($_GREEN.'File "'.$_YELL.''.$pathfile.''.$_DEF.'" created (empty).'.$_DEF."\n");
       
        $done = copy($src,$pathfile);
       if($done) 
       {
            print($_GREEN.'File "'.$_YELL.''.$pathfile.''.$_DEF.'" successfully copied.'.$_DEF."\n");
       }else
       {
            print($_GREEN.'File "'.$pathfile.'" has been created empty.'.$_DEF."\n");
            die($_RED.'Fail to copy file.'.$_DEF."\n");
       }

}
?>