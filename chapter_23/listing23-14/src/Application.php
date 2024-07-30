<?php
namespace Mattsmithdev;

class Application
{
    public function run(): void
    {
        $calories = 500; // Valid
        $calories = -1; // Negative invalid argument
        $calories = 6000; // General exception

        try {
            $f2 = new Dessert('strawberry cheesecake', $calories);
            print $f2;
        } catch (NegativeCaloriesException $e) {
            print
                '(Application->run) - Negative Calories Value Exception caught!';
        }
    }
}
