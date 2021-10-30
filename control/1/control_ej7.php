<?php
class control_ej7 {
    public function realizarOperacion($array) {
        $opcion = $array["opcion"];
        $num1 = $array["number1"];
        $num2 = $array["number2"];
        switch ($opcion) {
            case "SUMA":
                $suma = $num1 + $num2;
                $calculo = $num1 . " + " . $num2 . " = " . $suma;
                break;
            case "RESTA":
                $resta = $num1 - $num2;
                $calculo = $num1 . " - " . $num2 . " = " . $resta;
                break;
            case "MULTIPLICACION":
                $multiplicacion = $num1 * $num2;
                $calculo = $num1 . " x " . $num2 . " = " . $multiplicacion;
                break;
        }
        return $calculo;
    }
}