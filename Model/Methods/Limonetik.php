<?php
/**
 * Copyright Magmodules.eu. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mollie\Payment\Model\Methods;

class Limonetik extends \Mollie\Payment\Model\Mollie
{
    /**
     * Payment method code
     *
     * @var string
     */
    protected $_code = 'mollie_methods_limonetik';

    /**
     * Info instructions block path
     *
     * @var string
     */
    protected $_infoBlockType = 'Mollie\Payment\Block\Info\Base';
}