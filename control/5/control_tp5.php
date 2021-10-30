<?php
class control_tp5
{
    public function existeSesion()
    {
        @session_start();
        return isset($_SESSION['username']) && isset($_SESSION['password']);
    }
}
