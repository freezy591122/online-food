<?php
echo "Static Variable Example";
function functionDemo(){
    static $x=1;//Static Variable(Variable and data are holded or stored even after the function is completely exevuted)
    $y=1;       //Non-Static Variable(variable and data are deleted once the function is finished)
    echo "value of x = $x\n";
    echo "value of y = $y\n";
    $x++;
    $y++;
};
functionDemo();
functionDemo();

echo "\nLocal Variable Exmaple";
$name="Ram";
function testFunction(){
    $name="Hari";   //This is a local variable for function testFunction because use of this variable directly is only possible inside the testFunction only
    echo "\nName inside function = $name";
}
echo "\nName outside Function = $name";
testFunction();


echo "\nGlobal Variable Exmaple";
$a=5;
function testFunction1(){
    // echo $a // Directly accesing variables like this generates an error(Undefined Variable)
    global $a;
    echo "The value of a = $a"; //Does not generate error due to usage of global keyboard
}
testFunction1();
?>