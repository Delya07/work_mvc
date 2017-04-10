<?php
/**
 * Created by PhpStorm.
 * User: delya
 * Date: 05.04.17
 * Time: 20:01
 */
class DBException extends Exception{
    public function action()
    {
        echo $this->getMessage();
        die;
    }
}