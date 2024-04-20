<?php

require 'base.php';

generatetitle("Anonymous Classes", 'red');

//interface DisplayMsg {
//    public function printMsg(string $msg);
//}
//
//class Application{
//    private  $displayer;
//    /**
//     * @param mixed $displayer
//     */
//    public function setDisplayer(DisplayMsg $displayer): void
//    {
//        $this->displayer = $displayer;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getDisplayer() :DisplayMsg
//    {
//        return $this->displayer;
//    }
//
//
//}

//class Message_ implements DisplayMsg{
//    public function printMsg(string $msg)
//    {
//        echo "<h1> {$msg} </h1>";
//        // TODO: Implement printMsg() method.
//    }
//}
//
//
//$m = new Message_();
//
//$app = new Application();
//var_dump($app);
////var_dump($m instanceof DisplayMsg);
//$app->setDisplayer($m);
//var_dump($app);
//
//$displayerr = $app->getDisplayer();
//var_dump($displayerr);
//$displayerr->printMsg("Hello World");


echo "<br>#####################################</br>";

interface DisplayMsg {
    public function printMsg(string $msg);
}

class Application{
    private  $displayer;
    /**
     * @param mixed $displayer
     */
    public function setDisplayer(DisplayMsg $displayer): void
    {
        $this->displayer = $displayer;
    }

    /**
     * @return mixed
     */
    public function getDisplayer() :DisplayMsg
    {
        return $this->displayer;
    }


}


$app2= new Application();

$app2->setDisplayer(new class implements DisplayMsg{
    public function printMsg(string $msg)
    {
        echo "<h1>{$msg}</h1>";
        // TODO: Implement printMsg() method.
    }
});

$res = $app2->getDisplayer();
var_dump($res);
$res->printMsg("Anonymous Classes");

$app3 = new Application();
$app3->setDisplayer(new class implements DisplayMsg{
    public function printMsg(string $msg){
        echo "<h2 style='color: red'>{$msg}</h2>";
        echo "$$$$$$$$$$$$$$$$$$$$$$<br>";
    }
});


$app3->getDisplayer()->printMsg("Bye");






