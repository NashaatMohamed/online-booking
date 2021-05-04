<?php

$handle = fopen("nashaat.txt","r+");

$content=fseek($handle,3,SEEK_SET);
$write = fwrite($handle, "m");
$content=fseek($handle,7,SEEK_CUR);
$write = fwrite($handle, "e");
$content=fseek($handle,-5,SEEK_END);
$write = fwrite($handle, "a");