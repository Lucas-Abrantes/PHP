<?php

echo "<select>";

for($i = Date("Y"); $i >= Date("Y") - 100; $i--){
    echo '<option value= "'.$i.'" >'.$i.'</option>';
}
echo "</select>";

?>