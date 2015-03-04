<?php
/**
 * Created by PhpStorm.
 * User: ssmulder
 * Date: 4-3-2015
 * Time: 12:27
 */
class TodoController{

    public function Index()
    {
        $todos = Todo::GetAll();

        require('view/todo/index.php');
    }

    public function Detail($id)
    {
        $todo = new Todo($id);

        require('view/todo/detail.php');
    }

    public function Update($id){
        echo "update mijn todotje met id $id" ;
    }

    public function Delete($id){
        echo "delete mijn todjte met id $id";
    }
}

?>