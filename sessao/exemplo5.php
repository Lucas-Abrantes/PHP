<?php

require_once("config.php");
//diretório onde os arquivos temporários da sessão
//ficam armazenados
echo session_save_path();
echo "<br>";    
var_dump(session_status());
echo "<br>"; 

switch(session_status()){

    case PHP_SESSION_DISABLED:
        echo "sessões desabilitadas";
        break;
    
    case PHP_SESSION_NONE:
        echo "sessão desabilitada, mas nenhuma existe";
        break;
    
    case PHP_SESSION_ACTIVE:
        echo "sessões habilitadas, mas uma existir";
        break;
}
?>