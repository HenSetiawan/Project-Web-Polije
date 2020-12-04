<?php 

    class Controller{

        protected  function views($path, $data=[]){
            require_once './app/views/'.$path.'.php';
        }


        protected function model($modelFolder,$modelName)
        {
            require "./app/models/$modelFolder/$modelName".".php";
            return new $modelName;
        }
    }