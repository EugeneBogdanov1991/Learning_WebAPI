<?php
/**
 * Magecom
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to info@magecom.net so we can send you a copy immediately.
 *
 * @category Magecom
 * @package Magecom_LearningApi
 * @copyright Copyright (c) 2018 Magecom, Inc. (http://www.magecom.net)
 * @license  http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Magecom\LearningApi\Model;

use Magecom\LearningApi\Api\ProductInterface;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;

/**
 * Class Product
 * @package Magecom\LearningApi\Model
 */
class Product implements ProductInterface
{
    /**
     * @var CollectionFactory
     */
    protected $productCollectionFactory;

    /**
     * Product constructor.
     * @param CollectionFactory $productCollectionFactory
     */
    public function __construct(
        CollectionFactory $productCollectionFactory
    )
    {
        $this->productCollectionFactory = $productCollectionFactory;
    }

    /**
     * @return array
     */
    public function getProductNames()
    {
        $productCollection = $this->productCollectionFactory->create();
        $productCollection->addAttributeToSelect('sku')
        ->addAttributeToSelect('name')
        ->addAttributeToSelect('url_key');

        $result = [];

        foreach ($productCollection as $product) {
            if ($product->getVisibility() == 1 || !$product->getStatus()) continue;
            $data = [];
            $data['id'] = $product->getId();
            $data['sku'] = $product->getSku();
            $data['name'] = $product->getName();
            $data['url'] = $product->getUrlKey();

            $result[] = $data;
        }

        return $result;
    }
}
