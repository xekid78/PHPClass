<?php
class Greeting {
    public function __construct($word) {
        $this->msg = $word;
    }

    public function helloworld() {
        echo $this->msg."\n";
    }
}

$gree = new Greeting("hello world");
$gree->helloworld();
