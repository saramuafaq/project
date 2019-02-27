<?php
$mynum=100;
/*if($mynum==100)
{
  echo "True";
else
{
    echo "false";
}
*/
echo $res=($mynum==100)?"True":"False";
echo "<br>";
$player1=1500;
$player2=1750;
echo "the winner is";
echo $res=($player1>$player2)? "player1":"player2";
?>