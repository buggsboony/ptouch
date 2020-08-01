#!/bin/env php
<?php

//created by boondevelop
//created_at 2020-08-01 10:46:17

$_DEF ="\e[39m";
$_GREEN = "\033[0;32m";
$_YELL="\033[0;33m";
$_RED ="\033[0;31m";


$pathfile = $argv[1];

if($argc<2)
{
    print $_RED."Please specify file to touch.\n".$_DEF;
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
       print($_GREEN.'File successfully created.'.$_DEF."\n");
}
?>