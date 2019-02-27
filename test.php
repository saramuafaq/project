<?php
/*echo "<h1 style='color:blue'>";
echo "my first paragraph";
echo"</h1>";*/
?>
<h1 style="color:blue">
<?php
    echo"my first paragraph"
        ?>
</h1>
<?php
$var1=5;
$var2=3.5;
$var3="ferxwaz";
$var4=TRUE;
echo $var1;
echo "<br>";
echo $var2."<br>";
echo $var3;
echo $var4;

var_dump($var3);//to show the length and type and location
echo "<br>";

$a=2;
$b=5;
$c="10";
$d='a1';
$e="4b";
    
$result=$a+$e;
echo"the result is=";
echo $result;
 echo "<br>";
    
$x=15;
$x++;
echo $x;
     echo "<br>";
$y=15;
echo ++$y;
     echo "<br>";
$x+=5;
echo $x;
     echo "<br>";
    
$s=30;
$t=4;
echo $s%$t;
     echo "<br>";
    
$me="ferxwaz";
$me.=" ";
$me.="institude";
echo $me;
    ?>