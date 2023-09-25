<h3 style="color: red">Slider</h3>
<a href="" target="_blank">first</a>
<a href="slider/" target="_blank">list</a>
<a href="slider/form" target="_blank">add</a>
<a href="slider/form/1234" target="_blank">edit</a>
<a href="slider/delete/1234" target="_blank">delete</a>
<a href="slider/change-status-active/1234" target="_blank">Change Status</a>

<?php

    //$controllerName     = 'slider';

    echo '<h3 style="color: blue">Slider</h3>';
    $linkDefault = route($controllerName);
    echo '<h3 style="color: blue">'.$linkDefault.'</h3>';
    $linkAdd = route($controllerName . '/form',['id'=>12345]);
    echo '<h3 style="color: red">'.$linkAdd.'</h3>';

    $linkABC = route('abc');
    echo '<h3 style="color: blue">'.$linkABC.'</h3>';

    $linkDelete = route($controllerName . '/delete',['id'=>54321]);
    echo '<h3 style="color: blue">'.$linkDelete.'</h3>';
    $linkStatus = route($controllerName . '/status',['id'=>69,'status'=>'active']);
    echo '<h3 style="color: red">'.$linkStatus.'</h3>';
    echo '<h3 style="color: blue">Ramdom</h3>';
?>

<a href="<?php echo $linkAdd;?>" target="_blank">ADD</a>
