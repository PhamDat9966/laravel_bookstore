<h3 style="color: rgb(28, 9, 196)">View: Admin - slider - form</h3>
<?php
                              //Từ controller
$param                      = [];
$param['title']             = $title;
$param['id']                = $id;
$param['controllerName']    = $controllerName;

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
$linkDefault = route($controllerName);

?>
<a href="<?php echo $linkDefault;?>" target="_blank">BACK</a>
