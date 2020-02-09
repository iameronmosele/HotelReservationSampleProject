<?php

if (! function_exists('implode_value')) {
    /**
     * Generate an asset path for the application.
     *
     * @param  string  $path
     * @return string
     */

    function implode_value($delimiter,$data){
        $content = implode($delimiter, $data);
        return $content;
      }
}

if (! function_exists('explode_value')) {
    /**
     * Generate an asset path for the application.
     *
     * @param  string  $path
     * @return string
     */
     
      function explode_value($delimiter,$data){
        $content = explode($delimiter, $data);
        return $content;
      }
}


