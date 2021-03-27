<?php


class Autoloader
{
    public static function register()
    {
        spl_autoload_register(function ($class) {
            $file = include $_SERVER['DOCUMENT_ROOT'] . "/system/$class.php";
            if (file_exists($file)) {
                require $file;
                return true;
            }
            return false;
        });
    }

    public static function load_css($where = null)
    {
        if (is_null($where)) {
            $files = array_diff(scandir("../includes/css/load_first/"), array('.', '..'));
            $count = count($files) - 1;
            $files = array_merge($files, array_diff(scandir("../includes/css/"), array('.', '..')));
        } else {
            $files = array_diff(scandir("../includes/css/$where/"), array('.', '..'));
        }
        foreach ($files as $index => $file) {
            $name_array = explode('.', $file);
            if ($name_array[count($name_array) - 1] == 'css')
                echo "<link rel='stylesheet' type='text/css' href='http://" . $_SERVER['HTTP_HOST'] . "/includes/css/" .
                    ((is_null($where)) ? (($index > $count) ? '' : 'load_first/') : $where . "/") . "$file'>";
        }


    }

    public static function load_js($where = null)
    {
        if (is_null($where)) {
            $files = array_diff(scandir("../includes/js/load_first/"), array('.', '..'));
            $count = count($files) - 1;
            $files = array_merge($files, array_diff(scandir("../includes/js/"), array('.', '..')));
        } else {
            $files = array_diff(scandir("../includes/js/$where/"), array('.', '..'));
        }
        foreach ($files as $index => $file) {
            $name_array = explode('.', $file);
            if ($name_array[count($name_array) - 1] == 'js')
                echo "<script src='http://" . $_SERVER['HTTP_HOST'] . "/includes/js/" .
                    ((is_null($where)) ? (($index > $count) ? '' : 'load_first/') : $where . "/") . "$file'></script>";
        }
    }
}

Autoloader::register();