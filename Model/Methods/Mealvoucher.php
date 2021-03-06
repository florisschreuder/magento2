<?php
/**
 * Copyright Magmodules.eu. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mollie\Payment\Model\Methods;

use Magento\Quote\Api\Data\CartInterface;

class Mealvoucher extends \Mollie\Payment\Model\Mollie
{
    /**
     * Payment method code
     *
     * @var string
     */
    protected $_code = 'mollie_methods_mealvoucher';

    /**
     * Info instructions block path
     *
     * @var string
     */
    protected $_infoBlockType = 'Mollie\Payment\Block\Info\Base';

    public function isAvailable(CartInterface $quote = null)
    {
        if ($quote && !$this->config->getMealvoucherCategory($quote->getStoreId())) {
            return false;
        }

        return parent::isAvailable($quote);
    }
}