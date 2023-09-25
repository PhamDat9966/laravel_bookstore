<h3 style="color: red">Slider</h3>
<a href="" target="_blank">first</a>
<a href="slider/" target="_blank">list</a>
<a href="slider/form" target="_blank">add</a>
<a href="slider/form/1234" target="_blank">edit</a>
<a href="slider/delete/1234" target="_blank">delete</a>
<a href="slider/change-status-active/1234" target="_blank">status</a>

<?php
    echo '<h3 style="color: blue">Slider</h3>';
    $linkDefault = route('slider');
    echo '<h3 style="color: red">'.$linkDefault.'</h3>';
    $linkAdd = route('slider/form',['id'=>12345]);
    echo '<h3 style="color: red">'.$linkAdd.'</h3>';
    $linkabc = route('abc');
    echo '<h3 style="color: red">'.$linkabc.'</h3>';
    $linkDelete = route('slider/delete',['id'=>54321]);
    echo '<h3 style="color: red">'.$linkDelete.'</h3>';
    $linkStatus = route('slider/status',['id'=>69,'status'=>'active']);
    echo '<h3 style="color: red">'.$linkStatus.'</h3>';
    echo '<h3 style="color: blue">Ramdom</h3>';
?>
