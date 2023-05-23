<?php

/*
 * DockBlock
 * Dockblocks se usan principalmente para documentar clases, propiedades y métodos
 * en PHP, si bien su uso se ha ido disminuyendo por la constante implementación
 * de tipos dentro del lenguaje, lo cual hace este proceso en ciertas ocaciones
 * redundante.
 * 
 * Documentación:
 * https://docs.phpdoc.org/3.0/guide/guides/docblocks.html
 */

namespace App;

/**
 * Responsable to handle transactions
 * 
 * @property string $id
 * 
 * @method bool process(Customer $customer, string $amount)
 */
class Transaction
{
    private string $id;

    public function __construct()
    {
        $this->id = 'xxx-xxx-xxx';
    }
    /**
     * Process a customer transaction
     * 
     * @param Customer $customer
     * Object with customer information
     * 
     * @param float|int $amount
     * Amount to process
     * 
     * @throws \RuntimeException
     * 
     * @return bool
     * Whether the transaction went well or not
     */
    public function process($customer, $amount)
    {
        // process transaction

        // if failed, return false

        // otherwise return true
        return true;
    }
}
