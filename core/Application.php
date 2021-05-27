<?php

namespace homeWork05;

use homeWork05\contracts\ContainerInterface;
use homeWork05\contracts\RunnableInterface;

class Application implements RunnableInterface, ContainerInterface
{
    public function run()
    {
        return 'Run work';
    }

    public function get()
    {
        return 'Get work';
    }

    public function has()
    {
        return 'Has work';
    }
}