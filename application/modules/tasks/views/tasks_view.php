
<?php
echo "<hr>";

echo anchor('tasks/create','<p>Create New Task</p>');
foreach ($query->result() as $row){
    echo "<h2>".$row->name ."</h1>";
}

echo "<hr>";

$name='mano';
//this will load module but each function has been deprecated so try avoid to use it.
/*$this ->load -> module('helloworld');

this->helloworld->sayHello($name);*/

//To call from one module to another module
echo Modules::run('helloworld');//will call index function

echo Modules::run('helloworld/sayHello','mano');//will call specified function from classname/method

?>