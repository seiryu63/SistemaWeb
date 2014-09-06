<?php

namespace casamunoz\empresaBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class ContainsAlphanumeric extends Constraint
{
    public $message = 'La cadena "%string%" contiene caracteres no permitidos, pueden ser letras o numeros solamente.';

	public function validatedBy()
	{
	    return get_class($this).'Validator';
	}
}
