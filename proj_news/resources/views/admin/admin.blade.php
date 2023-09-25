<h3 style="color: red">Admin</h3>
<a href="" target="_blank">first</a>
<a href="admin/" target="_blank">list</a>
<a href="admin/form" target="_blank">add</a>
<a href="admin/form/1234" target="_blank">edit</a>
<a href="admin/delete/1234" target="_blank">delete</a>
<a href="admin/change-status-active/1234" target="_blank">status</a>

<?php
    //$link = route('slider');
    $link = route('admin');
    echo '<h3 style="color: red">'.$link.'</h3>';

?>

