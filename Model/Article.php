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

use Magecom\LearningApi\Api\Data\ArticleInterface;
use Magento\Framework\Model\AbstractModel;
use Magecom\LearningApi\Model\ResourceModel\Article as ResourceArticle;

/**
 * Class Article
 * @package Magecom\LearningApi\Model
 */
class Article extends AbstractModel implements ArticleInterface
{
    /**
     * @var string
     */
    protected $_idFieldName = ArticleInterface::ID;

    protected function _construct()
    {
        $this->_init(ResourceArticle::class);
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->getData(ArticleInterface::TITLE);
    }

    /**
     * @param $title
     * @return Article|mixed
     */
    public function setTitle($title)
    {
        return $this->setData(ArticleInterface::TITLE,$title);
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->getData(ArticleInterface::BODY);
    }

    /**
     * @param $body
     * @return Article|mixed
     */
    public function setBody($body)
    {
        return $this->setData(ArticleInterface::BODY,$body);
    }

    /**
     * @return int
     */
    public function getAuthorId()
    {
        return $this->getData(ArticleInterface::AUTHOR_ID);
    }

    /**
     * @param int $author_id
     * @return Article|mixed
     */
    public function setAuthorId($author_id)
    {
        return $this->setData(ArticleInterface::AUTHOR_ID,$author_id);
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->getData(ArticleInterface::AUTHOR);
    }

    /**
     * @param $author
     * @return Article|mixed
     */
    public function setAuthor($author)
    {
        return $this->setData(ArticleInterface::AUTHOR,$author);
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->getData(ArticleInterface::CREATED_AT);
    }

    /**
     * @param $createdAt
     * @return Article|mixed
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(ArticleInterface::CREATED_AT,$createdAt);
    }
}
