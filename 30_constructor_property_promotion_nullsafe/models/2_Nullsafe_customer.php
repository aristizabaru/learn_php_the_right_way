<?php // Nullsafe operator

/**
 * Nullsafe operator
 * Gracias al nullsafe operator se puede hacer la invocación de varios
 * métodos o acceso a propiedades encadenados donde si alguno
 * de los llamados retorna null no producirá un error
 * 
 * Documentation:
 * https://wiki.php.net/rfc/nullsafe_operator
 */

declare(strict_types=1);

class Customer
{
    public ?Payment_profile $payment_profile = null;
}
