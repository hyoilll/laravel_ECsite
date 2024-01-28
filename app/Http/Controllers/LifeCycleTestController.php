<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LifeCycleTestController extends Controller
{
    //

    public function showServiceContainerTest()
    {
        app()->bind('lifeCycleTest', fn() => 'ライフサイクル');

        $test = app()->make('lifeCycleTest');

        // サービスコンテナなしの場合
        // $msg = new Message();
        // $sample = new Sample($msg);
        // $sample->run();

        // サービスコンテナありの場合
        app()->bind('sample', Sample::class);
        $sample = app()->make('sample');
        $sample->run();

        dd($test, app());
    }

    public function showServiceProviderTest(){
        $encrypt = app()->make('encrypter');
        $pw = $encrypt->encrypt('password');

        $sample = app()->make('serviceProviderTest');

        dd($sample, $pw, $encrypt->decrypt($pw));
    }
}

class Sample{
    public $msg;

    public function __construct(Message $msg){
        $this->msg = $msg;
    }

    public function run(){
        $this->msg->send();
    }
}

class Message{
    public function send(){
        echo('メッセージ表示');
    }
}