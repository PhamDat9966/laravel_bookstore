<h3 style="color: rgb(28, 9, 196)">View: Admin - Category - edit</h3>
<?php

echo "<pre>Param:";
print_r($param);
echo "</pre>";

$xhtml = '';
foreach ($param as $key => $value) {
    $key_name  = array_search($value,$param);
    $valueP    = $value;
    $xhtml .=  '<h3 style="color: rgb(28, 9, 196)">'.$key_name.': '.$valueP.'</h3>';
}

echo $xhtml;

// echo  '<h3 style="color: rgb(28, 9, 196)">ID: '.$id.'</h3>';
// echo  '<h3 style="color: rgb(28, 9, 196)">TITLE: '.$title.'</h3>';
