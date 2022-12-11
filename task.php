<html>
<head>
    <title>Таблицы истинности и сравнений</title>
    <style>
        table,th,tr,td {border: 0.1px solid black; text-align: center; border-collapse: collapse; }
        th{background-color:green; width:100px;}
        td{background-color:grey;}

    </style>
</head>
<body>
    <table>
    <colgroup>Таблица истинности PHP</colgroup>
        <tr><th><?PHP echo "A"?></th><th><?PHP echo "B"?></th><th><?PHP echo "!A"?></th><th><?PHP echo "A||B"?></th><th><?PHP echo "A&&B"?></th><th><?PHP echo "A xor B"?></th></tr>
        <tr><td><?PHP echo $a=0?></td><td><?PHP echo $b=0?></td><td><?PHP echo var_export(!$a);?></td><td><?PHP echo var_export($a||$b);?></td><td><?PHP echo var_export($a&&$b);?></td><td><?PHP echo var_export($a xor $b);?></td></tr>
        <tr><td><?PHP echo $a=0?></td><td><?PHP echo $b=1?></td><td><?PHP echo var_export(!$a);?></td><td><?PHP echo var_export($a||$b);?></td><td><?PHP echo var_export($a&&$b);?></td><td><?PHP echo var_export($a xor $b);?></td></tr>
        <tr><td><?PHP echo $a=1?></td><td><?PHP echo $b=0?></td><td><?PHP echo var_export(!$a);?></td><td><?PHP echo var_export($a||$b);?></td><td><?PHP echo var_export($a&&$b);?></td><td><?PHP echo var_export($a xor $b);?></td></tr>
        <tr><td><?PHP echo $a=1?></td><td><?PHP echo $b=1?></td><td><?PHP echo var_export(!$a);?></td><td><?PHP echo var_export($a||$b);?></td><td><?PHP echo var_export($a&&$b);?></td><td><?PHP echo var_export($a xor $b);?></td></tr>
    </table>
<br>
<table>
    <?php  
    $a=true;
    $b=false;
    $c=1;
    $d=0;
    $e=-1;
    $f="1";
    $g=null;
    $h="php";
    ?>
    <colgroup>Гибкое сравнение</colgroup>
        <tr><th></th><th><?PHP echo var_export($a)?></th><th><?PHP echo var_export($b)?></th><th><?PHP echo var_export($c)?></th><th><?PHP echo var_export($d)?></th><th><?PHP echo var_export($e)?></th><th><?PHP echo var_export($f)?></th><th><?PHP echo var_export($g)?></th><th><?PHP echo var_export($h)?></th></tr>
        <tr><th><?PHP echo var_export($a)?></th><td><?PHP echo var_export($a==$a)?></td><td><?PHP echo var_export($b==$a);?></td><td><?PHP echo var_export($c==$a);?></td><td><?PHP echo var_export($d==$a);?></td><td><?PHP echo var_export($e==$a);?></td><td><?PHP echo var_export($a==$f);?></td><td><?PHP echo var_export($a==$g);?></td><td><?PHP echo var_export($a==$h);?></td></tr>
        <tr><th><?PHP echo var_export($b)?></th><td><?PHP echo var_export($a==$b)?></td><td><?PHP echo var_export($b==$b);?></td><td><?PHP echo var_export($c==$b);?></td><td><?PHP echo var_export($d==$b);?></td><td><?PHP echo var_export($e==$b);?></td><td><?PHP echo var_export($b==$f);?></td><td><?PHP echo var_export($b==$g);?></td><td><?PHP echo var_export($b==$h);?></td></tr>
        <tr><th><?PHP echo var_export($c)?></th><td><?PHP echo var_export($a==$c)?></td><td><?PHP echo var_export($b==$c);?></td><td><?PHP echo var_export($c==$c);?></td><td><?PHP echo var_export($d==$c);?></td><td><?PHP echo var_export($e==$c);?></td><td><?PHP echo var_export($c==$f);?></td><td><?PHP echo var_export($c==$g);?></td><td><?PHP echo var_export($c==$h);?></td></tr>
        <tr><th><?PHP echo var_export($d)?></th><td><?PHP echo var_export($a==$d)?></td><td><?PHP echo var_export($b==$d);?></td><td><?PHP echo var_export($c==$f);?></td><td><?PHP echo var_export($d==$d);?></td><td><?PHP echo var_export($e==$d);?></td><td><?PHP echo var_export($d==$f);?></td><td><?PHP echo var_export($d==$g);?></td><td><?PHP echo var_export($d==$h);?></td></tr>
        <tr><th><?PHP echo var_export($e)?></th><td><?PHP echo var_export($a==$e)?></td><td><?PHP echo var_export($b==$e);?></td><td><?PHP echo var_export($c==$e);?></td><td><?PHP echo var_export($d==$e);?></td><td><?PHP echo var_export($e==$e);?></td><td><?PHP echo var_export($e==$f);?></td><td><?PHP echo var_export($e==$g);?></td><td><?PHP echo var_export($e==$h);?></td></tr>
        <tr><th><?PHP echo var_export($f)?></th><td><?PHP echo var_export($a==$f)?></td><td><?PHP echo var_export($b==$f);?></td><td><?PHP echo var_export($c==$f);?></td><td><?PHP echo var_export($d==$f);?></td><td><?PHP echo var_export($e==$f);?></td><td><?PHP echo var_export($f==$f);?></td><td><?PHP echo var_export($f==$g);?></td><td><?PHP echo var_export($f==$h);?></td></tr>
        <tr><th><?PHP echo var_export($g)?></th><td><?PHP echo var_export($a==$g)?></td><td><?PHP echo var_export($b==$g);?></td><td><?PHP echo var_export($c==$g);?></td><td><?PHP echo var_export($d==$g);?></td><td><?PHP echo var_export($e==$g);?></td><td><?PHP echo var_export($g==$f);?></td><td><?PHP echo var_export($g==$g);?></td><td><?PHP echo var_export($g==$h);?></td></tr>
        <tr><th><?PHP echo var_export($h)?></th><td><?PHP echo var_export($a==$h)?></td><td><?PHP echo var_export($b==$h);?></td><td><?PHP echo var_export($c==$h);?></td><td><?PHP echo var_export($d==$h);?></td><td><?PHP echo var_export($e==$h);?></td><td><?PHP echo var_export($h==$f);?></td><td><?PHP echo var_export($h==$g);?></td><td><?PHP echo var_export($h==$h);?></td></tr>
    </table>
<br>
<table>
    <colgroup>Жёсткое сравнение</colgroup>
        <tr><th></th><th><?PHP echo var_export($a)?></th><th><?PHP echo var_export($b)?></th><th><?PHP echo var_export($c)?></th><th><?PHP echo var_export($d)?></th><th><?PHP echo var_export($e)?></th><th><?PHP echo var_export($f)?></th><th><?PHP echo var_export($g)?></th><th><?PHP echo var_export($h)?></th></tr>
        <tr><th><?PHP echo var_export($a)?></th><td><?PHP echo var_export($a===$a)?></td><td><?PHP echo var_export($b===$a);?></td><td><?PHP echo var_export($c===$a);?></td><td><?PHP echo var_export($d===$a);?></td><td><?PHP echo var_export($e===$a);?></td><td><?PHP echo var_export($a===$f);?></td><td><?PHP echo var_export($a===$g);?></td><td><?PHP echo var_export($a===$h);?></td></tr>
        <tr><th><?PHP echo var_export($b)?></th><td><?PHP echo var_export($a===$b)?></td><td><?PHP echo var_export($b===$b);?></td><td><?PHP echo var_export($c===$b);?></td><td><?PHP echo var_export($d===$b);?></td><td><?PHP echo var_export($e===$b);?></td><td><?PHP echo var_export($b===$f);?></td><td><?PHP echo var_export($b===$g);?></td><td><?PHP echo var_export($b===$h);?></td></tr>
        <tr><th><?PHP echo var_export($c)?></th><td><?PHP echo var_export($a===$c)?></td><td><?PHP echo var_export($b===$c);?></td><td><?PHP echo var_export($c===$c);?></td><td><?PHP echo var_export($d===$c);?></td><td><?PHP echo var_export($e===$c);?></td><td><?PHP echo var_export($c===$f);?></td><td><?PHP echo var_export($c===$g);?></td><td><?PHP echo var_export($c===$h);?></td></tr>
        <tr><th><?PHP echo var_export($d)?></th><td><?PHP echo var_export($a===$d)?></td><td><?PHP echo var_export($b===$d);?></td><td><?PHP echo var_export($c===$f);?></td><td><?PHP echo var_export($d===$d);?></td><td><?PHP echo var_export($e===$d);?></td><td><?PHP echo var_export($d===$f);?></td><td><?PHP echo var_export($d===$g);?></td><td><?PHP echo var_export($d===$h);?></td></tr>
        <tr><th><?PHP echo var_export($e)?></th><td><?PHP echo var_export($a===$e)?></td><td><?PHP echo var_export($b===$e);?></td><td><?PHP echo var_export($c===$e);?></td><td><?PHP echo var_export($d===$e);?></td><td><?PHP echo var_export($e===$e);?></td><td><?PHP echo var_export($e===$f);?></td><td><?PHP echo var_export($e===$g);?></td><td><?PHP echo var_export($e===$h);?></td></tr>
        <tr><th><?PHP echo var_export($f)?></th><td><?PHP echo var_export($a===$f)?></td><td><?PHP echo var_export($b===$f);?></td><td><?PHP echo var_export($c===$f);?></td><td><?PHP echo var_export($d===$f);?></td><td><?PHP echo var_export($e===$f);?></td><td><?PHP echo var_export($f===$f);?></td><td><?PHP echo var_export($f===$g);?></td><td><?PHP echo var_export($f===$h);?></td></tr>
        <tr><th><?PHP echo var_export($g)?></th><td><?PHP echo var_export($a===$g)?></td><td><?PHP echo var_export($b===$g);?></td><td><?PHP echo var_export($c===$g);?></td><td><?PHP echo var_export($d===$g);?></td><td><?PHP echo var_export($e===$g);?></td><td><?PHP echo var_export($g===$f);?></td><td><?PHP echo var_export($g===$g);?></td><td><?PHP echo var_export($g===$h);?></td></tr>
        <tr><th><?PHP echo var_export($h)?></th><td><?PHP echo var_export($a===$h)?></td><td><?PHP echo var_export($b===$h);?></td><td><?PHP echo var_export($c===$h);?></td><td><?PHP echo var_export($d===$h);?></td><td><?PHP echo var_export($e===$h);?></td><td><?PHP echo var_export($h===$f);?></td><td><?PHP echo var_export($h===$g);?></td><td><?PHP echo var_export($h===$h);?></td></tr>
    </table>
<!-- Вывод. Гибкое сравнение != жесткое сравнение. Гибкое сравнение преобраует типы данных тк в php динамичиская типизация, в то время как жесткое сравнение выводит true только для идентичных переменных -->
</body>
</html>