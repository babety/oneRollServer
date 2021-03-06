<?php
namespace Common\Util;
abstract class Common_Util_PropertyObject
{
    public function __get($name)
    {
        if (method_exists($this, ($method = 'get_' . $name))) {
            return $this->$method ();
        } else
            return null;
    }

    public function __isset($name)
    {
        if (method_exists($this, ($method = 'isset_' . $name))) {
            return $this->$method ();
        } else
            return null;
    }

    public function __set($name, $value)
    {
        if (method_exists($this, ($method = 'set_' . $name))) {
            $this->$method ($value);
        }
    }

    public function __unset($name)
    {
        if (method_exists($this, ($method = 'unset_' . $name))) {
            $this->$method ();
        }
    }
}