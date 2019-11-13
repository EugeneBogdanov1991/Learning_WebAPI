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

namespace Magecom\LearningApi\Api;

use Magecom\LearningApi\Api\Data\ArticleInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * Interface ArticleRepositoryInterface
 * @package Magecom\LearningApi\Api
 */
interface ArticleRepositoryInterface
{
    /**
     * @param \Magecom\LearningApi\Api\Data\ArticleInterface $article
     * @return \Magecom\LearningApi\Api\Data\ArticleInterface
     */
    public function save(ArticleInterface $article);

    /**
     * @param \Magecom\LearningApi\Api\Data\ArticleInterface $article
     * @return bool
     */
    public function delete(ArticleInterface $article);

    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Magecom\LearningApi\Api\Data\ArticleSearchResultInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria);

    /**
     * @param int $id
     * @return \Magecom\LearningApi\Api\Data\ArticleInterface
     */
    public function get($id);

    /**
     * @param int $id
     * @return bool
     */
    public function deleteById($id);
}
