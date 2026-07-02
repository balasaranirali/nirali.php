<?php
function name()
{
    echo $name="nirali";
}
name();

echo"<br>";

/*argument function*/

function abc($name)
{
    echo$name;
}

abc("yadav");

/*call by value*/
function abc1($num)
{
    echo $num=$num+10;
}
$x=5;
abc1($x);
echo $x;

/*call by referance*/

function abc3(&$num)
{
    echo $num=$num+10;
}
$x=5;
abc3($x);
echo"<br>";
echo"<br>";

/*function with value*/

function sum($x,$y)
{
    $z=$x+$y;
    return $z;
}
echo sum(10,20);
echo"<br>";
echo"<br>";

/*default arg*/
function add1($x,$y,$z=5)
{
    echo $x+$y+$z;
}
add1(1,2,3);

echo"<br>";

/*nesting of function*/

function nir()
{
    echo"this is car"; echo"<br>";
    echo("this is flower");


}
nir();
echo"<br>";
echo"<br>";
/*variable function*/
function jiyu($name)
{
    echo $name;
}
$j="jiyu";
$j("yadav");

?>