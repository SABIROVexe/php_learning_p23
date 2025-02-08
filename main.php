<?php
$age = 70;

switch (true){

    case $age <= 14:
        echo "детсво";
        break;
    
    case $age >= 15 && $age < 24:
        echo "молодость";
        break;
    
    case $age >= 25 && $age < 59:
        echo "зрелость";
        break;
    
    case $age >= 60:
        echo "старость";
        break;
}
?>