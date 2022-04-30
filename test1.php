
<?php
    function repeat($array){
        $result1 = array();

            for($i=0; $i<3; $i++) {
                $result1 = array_merge($result1, $array);
            }

        return print_r($result1);
    }
    echo "<pre>";
    repeat([1,2]);
?> 