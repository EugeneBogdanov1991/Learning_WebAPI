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

namespace Magecom\LearningApi\Api\Data;

/**
 * Interface ArticleInterface
 * @package Magecom\LearningApi\Api\Data
 */
interface ArticleInterface
{
    /**
     * const ID
     */
    const ID = 'id';

    /**
     * const AUTHOR_ID
     */
    const AUTHOR_ID = 'author_id';

    /**
     * const AUTHOR
     */
    const AUTHOR = 'author';

    /**
     * const TITLE
     */
    const TITLE = 'title';

    /**
     * const BODY
     */
    const BODY = 'body';

    /**
     * const CREATED_AT
     */
    const CREATED_AT = 'created_at';

    /**
     * @return int
     */
    public function getId();

    /**
     * @param int $id
     * @return int
     */
    public function setId($id);

    /**
     * @return int
     */
    public function getAuthorId();

    /**
     * @param int $author_id
     * @return $this
     */
    public function setAuthorId($author_id);

    /**
     * @return string
     */
    public function getAuthor();

    /**
     * @param string $author
     * @return $this
     */
    public function setAuthor($author);

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle($title);

    /**
     * @return string
     */
    public function getBody();

    /**
     * @param string $body
     * @return $this
     */
    public function setBody($body);

    /**
     * @return string
     */
    public function getCreatedAt();

    /**
     * @param string $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt);
}
