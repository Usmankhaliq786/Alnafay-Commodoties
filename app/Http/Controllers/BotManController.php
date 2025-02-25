<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Middleware\ApiAi;
use Illuminate\Http\Request;

class BotManController extends Controller
{
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{message}', function($botman, $message) {
            $this->askName($botman);
        });

        $botman->listen();
    }

    public function askName($botman)
    {
        $botman->ask('Hello! What is your name?', function(Answer $answer) {
            $name = $answer->getText();

            $this->say('Nice to meet you '.$name);
        });
    }
}
