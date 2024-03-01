<?php

namespace App\Controller;

class HelloController extends AppController
{

    public function initialize()
{
    $this->name = 'hello';
    $this->autoRender = true;
}

    public function index()
    {

        // echo "PHPから出力しています";
        $this->autoRender = true;
    }

    public function sendForm()
    {
        $str = $this->request->query['text1'];
        $result = "";
        if( $str != ""){
            $result = "you type: " . h($str);
        } else {
            $result = "empty.";
        }
        $string = "文字列";
        $int = 123;
        $bool = true;
        $array = ['hello', 'world'];
        $this->set(compact('result','string','int','bool','array'));
    }
}
