<?php
function tiempo($hora, $minuto)
    {
        $minuto++;
        if ($minuto == 60) {
            $minuto = 0;
            $hora++;
        }
        echo "La hora es: $hora:$minuto";
    }
    ?>
