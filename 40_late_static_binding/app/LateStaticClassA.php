<?php // Late Static Binding

/**
 * Late Static Binding
 * PHP posee dos tipos de binding, el early biding que ocurre en compile time y
 * el late biding que ocurre en runtime.
 * 
 * El problema que resuelve específicamente Late Static Biding es que los métodos
 * y propiedades estáticos tienen un early biding, esto significa una cosas en el
 * contexto de la herencia:
 * 
 * 1. Cuando se declara un método o propiedad static en el padre y se hace el
 * llamado desde la clase hija el resolution operator '::' resuelve a self,
 * el cual representa la clase padre gracias al early biding que se dio en
 * compile time. Esto puede causar problemas accediendo a propiedades o métodos
 * de la clase hija.
 * 
 * Este problema es resuelto por el late static biding que usando el tipo static
 * en vez de self ayuda a que el biding se resuelva en tiempo de ejecución.
 * 
 * Siempre cuando se extienda a una clase, es mejor usar static::method o 
 * static::property desde la clase hija que usar self::method o self::property
 * porque puede hacer alusión a la clase padre aunque se haga el llamado desde
 * la clase hija.
 */

declare(strict_types=1);

namespace App;

class LateStaticClassA
{
    protected static string $name = 'A';

    public static function getName(): string
    {
        /**
         * Gracias a 'static' en vez de 'self' la clase ahora resuelve en runtime
         * con un late biding, por lo que la propiedad $name de la clase hija
         * es accedido correctamente;
         * 
         * Static solo se puede usar para acceder static methods & properties
         * y resolver el problema del early biding (compiletime) con late static
         * biding (runtime)
         */
        return static::$name;
    }
}
