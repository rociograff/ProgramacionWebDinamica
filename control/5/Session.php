<?php
class Session
{
    //ATRIBUTOS
    private $baseDatos;
    private $username;
    private $password;
    private $usuario;

    //CONSTRUCTOR
    public function __construct()
    {
        if (@session_start()) {
        }
    }

    public function iniciar($usuario, $pass)
    {
        // session_start();
        $exito = false;
        if ($usuario != null && $pass != null) {
            $this->setUsername($usuario);
            $this->setPassword($pass); //md5($pass);
            $exito = true;
        }
        return $exito;
    }

    /**
     * Evalua que el usuario ya haya sido inicializado
     * Si no fue inicializado busca en la base de datos si ya está registrado. Sino devuelve false
     */
    public function validar()
    {
        $exito = false;
        if ($this->username != null && $this->password != null) {
            if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
                $sql = "SELECT COUNT(*) FROM usuario WHERE usuario_nombre = '{$this->username}' AND usuario_pass = '{$this->password}' AND usuario_deshabilitado = 0";
                $this->baseDatos = new BaseDatos();
                $resultado = $this->baseDatos->query($sql);
                $row = $resultado->fetch(PDO::FETCH_ASSOC);
                if ($row['COUNT(*)'] != 0) {
                    $exito = true;
                    $this->setUsernameSession();
                    $this->setPasswordSession();
                    $this->setActivaSession(true);
                }
            }
        }
        return $exito;
    }

    //OBSERVADORES
    public function activa()
    {
        return isset($_SESSION['activa']);
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getUsernameSession()
    {
        return $_SESSION['username'];
    }

    public function getPasswordSession()
    {
        return $_SESSION['password'];
    }

    public function getUsuario()
    {
        $abmUsuario = new AbmUsuario();
        $datos = [
            'usuario_nombre' => $this->getUsername(),
            'usuario_password' => $this->getPassword()
        ];
        $lista = $abmUsuario->buscar($datos);
        return $lista[0];
    }

    public function getRol()
    {
        return $_SESSION['rol'];
    }

    //MODIFICADORES
    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setUsernameSession()
    {
        $_SESSION['username'] = $this->getUsername();
    }

    public function setPasswordSession()
    {
        $_SESSION['password'] = $this->getPassword();
    }

    public function setActivaSession($activa)
    {
        $_SESSION['activa'] = $activa;
    }

    public function cerrar()
    {
        session_unset();
        session_destroy();
    }
}
