<?php 
    namespace System;

    use System\System;

    class Controller extends System 
    {
        protected function view( $name, $data = null )
        {
            if( is_array( $data ) && count( $data ) > 0 ){
                extract( $data );
            }
            require_once APPPATH . DIRECTORY_SEPARATOR . \Config::$view . DIRECTORY_SEPARATOR . $name . '.php';
        }

        protected function url( $page = '' )
        {    
            return BASE_URL . $page;
        }
    }