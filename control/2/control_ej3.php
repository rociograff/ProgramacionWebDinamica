<?php
class control_ej3
{

    public function verifyFields($array)
    {
        $valid = true;
        if (empty($array["username"]) || empty($array["password"])) {
            $valid = false;
        }
        return $valid;
    }

    public function verifyData($array, $enteredData)
    {
        $i = 0;
        $found = false;

        if (!($enteredData["username"] == $enteredData["password"])) {
            while ($i < count($array) && !$found) {
                if ($array[$i]["username"] == $enteredData["username"] && $array[$i]["password"] == $enteredData["password"]) {
                    $found = true;
                }
                $i++;
            }
        }

        return $found;
    }

    public function verifyForm($arrayUsers, $arrayData)
    {
        $valid = $this->verifyFields($arrayData);
        $message = "<h2>Usuario invalido</h2>";
        if ($valid) {
            $valid = $this->verifyData($arrayUsers, $arrayData);
            if ($valid) {
                $user = $arrayData["username"];
                $message = "<h2>Bienvenido $user</h2>";
            }
        }
        return $message;
    }
}
