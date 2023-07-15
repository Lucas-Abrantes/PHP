<?php

// tipo de retorno que eu quero da função
function soma(int ...$valores):string{

    return array_sum($valores);
}


var_dump(soma(1525, 10));


?>