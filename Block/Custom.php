<?php

namespace Perspectivee\TutorialProductPage\Block;

class Custom extends \Magento\Catalog\Block\Product\View
{
    //  /** @var \Perspectivee\TutorialProductPage\Helper\Custom  */
    //  protected $_customHelper;

    //  public function __construct(
    //     \Magento\Catalog\Block\Product\Context $context,
    //     \Magento\Framework\Url\EncoderInterface $urlEncoder,
    //     \Magento\Framework\Json\EncoderInterface $jsonEncoder,
    //     \Magento\Framework\Stdlib\StringUtils $string,
    //     \Magento\Catalog\Helper\Product $productHelper,
    //     \Magento\Catalog\Model\ProductTypes\ConfigInterface $productTypeConfig,
    //     \Magento\Framework\Locale\FormatInterface $localeFormat,
    //     \Magento\Customer\Model\Session $customerSession,
    //     \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
    //     \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency,
    //     \Perspectivee\TutorialProductPage\Helper\Custom $customHelper,
    //     array $data = []
    //  ) {
    //      $this->_customHelper = $customHelper;
    //      parent::__construct(
    //         $context,
    //         $urlEncoder,
    //         $jsonEncoder,
    //         $string,
    //         $productHelper,
    //         $productTypeConfig,
    //         $localeFormat,
    //         $customerSession,
    //         $productRepository,
    //         $priceCurrency,
    //         $data);
    //  }
 
     /**
      * Get any value for our template
      *
      * @return string
      */
    public function getAnyCustomValue()
    {
        $_product = $this->getProduct();
        $attributes = $_product->getAttributes();
        $positionAttribute = null;

        if (array_key_exists('tutorial_product_page', $attributes)){

            $positionAttribute = $attributes['tutorial_product_page']->getFrontend()->getValue($_product);

        }
        return  $positionAttribute;
    }

    

    // /**
    //  * @return bool
    //  */
    // public function isAvailable()
    // {
    //     $$attributes = $this->getProduct();
    //     return $this->_customHelper->validateProductBySku($attributes->getSku());
    // }
}