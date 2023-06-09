<?php

declare(strict_types=1);

namespace App\Classes;

class Invoice
{
    public function index(): string
    {
        $view =  'Invoices' . PHP_EOL;

        // Unset de la variable count en $_SESSION
        unset($_SESSION['count']);

        if (isset($_GET)) {
            foreach ($_GET as $key => $value) {
                $view .= $key . '=' . $value . PHP_EOL;
            }
        }

        return $view;
    }

    public function create(): string
    {
        $CONSTANTS = get_defined_constants();

        $view =  <<<FORM
        <form action="{$CONSTANTS['BASE_PATH']}/invoice/create" method="post">
            <label for="input">Input Amout</label>
            <input type="text" name="amount" id="input" />
        </form>
        FORM;

        // Custom logic...

        if (isset($_GET)) {
            foreach ($_GET as $key => $value) {
                $view .= $key . '=' . $value . PHP_EOL;
            }
        }

        return $view;
    }

    public function store(): string
    {
        $view =  'Store Invoice' . PHP_EOL;

        // Custom logic...

        if (isset($_POST)) {
            foreach ($_POST as $key => $value) {
                $view .= $key . '=' . $value . PHP_EOL;
            }
        }

        return $view;
    }
}
