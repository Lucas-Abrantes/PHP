<form>
    <input type="text" name="nome">
    <input type="date" name="data_nascimento">
    <input type="submit" value="Enviar">

</form>

<?php

if(isset($_GET)){
    foreach($_GET as $key => $value){
        echo "Chave do campo: $key"."<br><br>";
        echo "Valor do campo: $value"."<br>";
        echo "<hr>";

        echo "<br><br>";
    }
}

?>