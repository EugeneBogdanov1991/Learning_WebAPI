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

namespace Magecom\LearningApi\Model\ResourceModel\Article;

use Magecom\LearningApi\Model\Article;
use Magecom\LearningApi\Model\ResourceModel\Article as ResourceArticle;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Class Collection
 * @package Magecom\LearningApi\Model\ResourceModel\Article
 */
class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Article::class, ResourceArticle::class);
    }
}
