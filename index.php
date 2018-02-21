<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo date('j F Y');
        echo "<br> za 3 dni będzie: " . date('j F Y', time() + 3*24*60*60);
        ?>
    </body>
</html>
