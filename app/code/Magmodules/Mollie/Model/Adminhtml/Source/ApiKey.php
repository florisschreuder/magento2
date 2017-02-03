<?php
/**
 * Copyright © 2016 Magmodules.eu. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magmodules\Mollie\Model\Adminhtml\Source;

use Magento\Framework\Option\ArrayInterface;

class ApiKey implements ArrayInterface
{

    /**
     * Live/Test Key Array
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'live', 'label' => __('Live')],
            ['value' => 'test', 'label' => __('Test')]
        ];
    }
}