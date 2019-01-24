<?php

namespace RawPhpView;

class ViewService
{
    private $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function render($view, array $parameters = array())
    {
        return self::evalTemplate($this->path . '/' . $view, $parameters);
    }

    public static function evalTemplate($file, array $parameters = [])
    {
        extract($parameters, EXTR_SKIP);
        unset($parameters);
        ob_start();
        require $file;
        unset($file);

        return ob_get_clean();
    }
}

