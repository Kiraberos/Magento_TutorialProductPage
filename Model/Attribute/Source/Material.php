<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Perspectivee\TutorialProductPage\Model\Attribute\Source;

class Material extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{
    /**
     * Get all options
     * @return array
     */
    public function getAllOptions()
    {
        if (!$this->_options) {
            $this->_options = [
                ['label' => __(''), 'value' => '0'],
                ['label' => __('Top'), 'value' => '1'],
                ['label' => __('Bottom'), 'value' => '2'],
                ['label' => __('Left'), 'value' => '3'],
                ['label' => __('Right'), 'value' => '4'],
            ];
        }
        return $this->_options;
    }
}
