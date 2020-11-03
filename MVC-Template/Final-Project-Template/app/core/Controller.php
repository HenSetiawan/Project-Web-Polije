<?php 

    class Controller{

        protected  function views($path,$data=[]){
            require_once './app/views/'.$path.'.php';
        }


        protected function model($modelName)
        {
            require "./app/models/$modelName".".php";
            return new $modelName;
        }
    }