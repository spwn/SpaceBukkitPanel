<?php
class Configurator extends AppModel {

    public $name = 'Configurator';

    public $useTable = false; // This model does not use a database table


    //Save database

    function saveDb($type, $host = 'localhost', $login, $password, $database) {

        $config = APP.'Config/database.php'; 
        $template = APP.'Config/database.php.default';

        $old = array();

        $old['type']        = '%type%';
        $old['username']    = '%login%';
        $old['password']    = '%password%';
        $old['database']    = '%database%';
        $old['host']        = '%host%';

        $new = array();

        $new['type']        = $type;
        $new['username']    = $host;
        $new['password']    = $login;
        $new['database']    = $password;
        $new['host']        = $database;

        $new_file = implode(file($template));     
     
        $str = str_replace($old,$new,$new_file);

        //now, TOTALLY rewrite the file
        $fp=fopen($config,'w');

        fwrite($fp,$str,strlen($str));     

    }

    //Save config

    function saveVars($new) {

      $file       = APP . 'webroot/vars.php';
      $contents   = file_get_contents($file);

      $old = array();

      foreach ($new as $num => $value) {

        $old[$num] = $this->get_string_between($contents, "/*".$num."*/'", "'");

      }

      $new_file = implode(file($file));     
   
      $str = str_replace($old,$new,$new_file);

      //now, TOTALLY rewrite the file
      $fp=fopen($file,'w');

      fwrite($fp, $str, strlen($str));     
      
      debug($old);
      debug($new);
      debug($contents);

    }

    //Retrieve config   

    function returnVars($key = null) {

      require APP . 'webroot/vars.php';

      if ($key) {

        return $variables[$key];

      } else {

        return $variables;

      }

    }

    /* SYSTEM */

    //Save config

    function saveSys($values) {

      $file = file_get_contents(APP . 'webroot/system.php');

      $matches =$this->get_string_between($file, "'0'", "'");

      debug($file);
      debug($matches);

    }

    //Retrieve config   

    function returnSys($key = null) {

      require APP . 'webroot/system.php';

      if ($key) {

        return $variables[$key];

      } else {

        return $variables;

      }

    }
        
    //Function to get strings
    function get_string_between($string, $start, $end){
      $string = " ".$string;
      $ini = strpos($string,$start);
      if ($ini == 0) return "";
      $ini += strlen($start);
      $len = strpos($string,$end,$ini) - $ini;
      return substr($string,$ini,$len);
    }

}