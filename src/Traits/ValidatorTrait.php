<?php

/**
 * Parte do pacote Suporte.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Contperfil de Acesso
 * @version    0.0.1
 * @author     Robson Sampaio
 * @license    BSD License (3-clause)
 * @copyright  (c) 2016, Robson Sampaio
 * @link       http://xfusionsolution.com.br
 */

namespace Xfusionsolution\Suporte\Traits;

use Xfusionsolution\Suporte\Validator;

trait ValidatorTrait
{
    /**
     * The Validator instance.
     *
     * @var \Xfusionsolution\Suporte\Validator
     */
    protected $validator;

    /**
     * Returns the Validator instance.
     *
     * @return \Xfusionsolution\Suporte\Validator
     */
    public function getValidator()
    {
        return $this->validator;
    }

    /**
     * Sets the Validator instance.
     *
     * @param  \Xfusionsolution\Suporte\Validator  $validator
     * @return $this
     */
    public function setValidator(Validator $validator)
    {
        $this->validator = $validator;

        return $this;
    }
}
