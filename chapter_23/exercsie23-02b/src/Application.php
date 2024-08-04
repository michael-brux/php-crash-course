<?php

namespace Mattsmithdev;

class Application
{
    public function run()
    {

        try {

    $p1 = new Product('hammer', -2);

    $p1 = new Product('hammer', 2221119999);

    $p1 = new Product('', 22);

            $p1 = new Product('hammer', 22);

            var_dump($p1);
        } catch (\InvalidArgumentException $e) {
            print "(Application->run) InvalidArgumentException caught: " . $e->getMessage();
        }

        print '(Application->run) --- execution completed --';
    }

}