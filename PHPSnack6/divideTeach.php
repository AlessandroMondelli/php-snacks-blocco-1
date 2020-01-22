<?php
function divideEl($pos,$array) {
    $keys = array_keys($array);

    foreach ($array as $teach => $value) {
        if ($teach == $keys[$pos]) {
            $request = $value;
        }
    }
    
    return $request;
}
 ?>
