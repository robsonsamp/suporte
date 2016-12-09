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

use Xfusionsolution\Suporte\Mailer;

trait MailerTrait
{
    /**
     * The Mailer instance.
     *
     * @var \Xfusionsolution\Suporte\Mailer
     */
    protected $mailer;

    /**
     * Returns the Mailer instance.
     *
     * @return \Xfusionsolution\Suporte\Mailer
     */
    public function getMailer()
    {
        return $this->mailer;
    }

    /**
     * Sets the Mailer instance.
     *
     * @param  \Xfusionsolution\Suporte\Mailer  $mailer
     * @return $this
     */
    public function setMailer(Mailer $mailer)
    {
        $this->mailer = $mailer;

        return $this;
    }
}
