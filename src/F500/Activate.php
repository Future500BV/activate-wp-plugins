<?php

Namespace F500;

use Composer\Script\Event;

class Activate
{

    public static function postInstall(Event $event)
    {
        $composer = $event->getComposer();
        var_dump($composer);
        // do stuff
    }

}
