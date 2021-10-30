<?php

class control_ej1
{
    public function readNumber($array)
    {

        if ($array) {
            $enteredNumber = $array['enteredNumber'];
            if ($enteredNumber == "" || $enteredNumber == 0) {
                $retorno = "<span>0 es <B>neutro</B>.</span><br />";
            } elseif ($enteredNumber > 0) {
                $retorno = "<span>$enteredNumber es <B>positivo</B>.</span><br />";
            } elseif ($enteredNumber < 0) {
                $retorno = "<span>$enteredNumber es <B>negativo</B>.</span><br />";
            }
        }
        return $retorno;
    }
}
