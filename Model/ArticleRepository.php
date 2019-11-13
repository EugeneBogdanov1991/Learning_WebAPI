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

use Magecom\LearningApi\Api\ArticleRepositoryInterface;
use Magecom\LearningApi\Api\Data\ArticleInterface;
use Magecom\LearningApi\Model\ResourceModel\Article as ArticleResource;
use Magento\Framework\Api\Search\SearchResultFactory;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magecom\LearningApi\Model\ResourceModel\Article\CollectionFactory as ArticleCollectionFactory;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Class ArticleRepository
 * @package Magecom\LearningApi\Model
 */
class ArticleRepository implements ArticleRepositoryInterface
{
    /**
     * @var ArticleFactory
     */
    protected $articleFactory;

    /**
     * @var ArticleResource
     */
    protected $articleResource;

    /**
     * @var SearchCriteriaBuilder
     */
    protected $searchCriteriaBuilder;

    /**
     * @var CollectionProcessorInterface
     */
    protected $collectionProcessor;

    /**
     * @var ArticleCollectionFactory
     */
    protected $articleCollectionFactory;

    /**
     * @var SearchResultFactory
     */
    protected $searchResultFactory;

    /**
     * ArticleRepository constructor.
     * @param ArticleFactory $articleFactory
     * @param ArticleResource $resource
     * @param SearchCriteriaBuilder $searchCriteriaBuilder
     * @param CollectionProcessorInterface|null $collectionProcessor
     * @param ArticleCollectionFactory $articleCollectionFactory
     * @param SearchResultFactory $searchResultFactory
     */
    public function __construct(
        ArticleFactory $articleFactory,
        ArticleResource $articleResource,
        SearchCriteriaBuilder $searchCriteriaBuilder,
        CollectionProcessorInterface $collectionProcessor = null,
        ArticleCollectionFactory $articleCollectionFactory,
        SearchResultFactory $searchResultFactory
    )
    {
        $this->articleFactory = $articleFactory;
        $this->articleResource = $articleResource;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->collectionProcessor = $collectionProcessor;
        $this->articleCollectionFactory = $articleCollectionFactory;
        $this->searchResultFactory = $searchResultFactory;
    }

    /**
     * @param ArticleInterface $article
     * @return ArticleInterface
     * @throws CouldNotSaveException
     */
    public function save(ArticleInterface $article)
    {
     try {
         /** @var Article $article */
         $this->articleResource->save($article);
     } catch (\Exception $exception) {
         throw new CouldNotSaveException(__($exception->getMessage()));
     }
     return $article;
    }

    /**
     * @param ArticleInterface $article
     * @return bool|mixed
     * @throws CouldNotDeleteException
     */
    public function delete(ArticleInterface $article)
    {
        try {
            /** @var Article $article */
            $this->articleResource->delete($article);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__($exception->getMessage()));
        }
        return true;
    }

    /**
     * @param $id
     * @return mixed
     * @throws NoSuchEntityException
     */
    public function get($id)
    {
        $article = $this->articleFactory->create();
        $this->articleResource->load($article, $id);

        if(!$article->getId()) {
            throw new NoSuchEntityException(__('This article is not found.', $id));
        }
        return $article;
    }

    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return \Magento\Framework\Api\Search\SearchResultInterface|mixed
     */
    public function getList(SearchCriteriaInterface $searchCriteria)
    {
        $collection = $this->articleCollectionFactory->create();

        $this->collectionProcessor->process($searchCriteria, $collection);
        $collection->load();

        $searchResults = $this->searchResultFactory->create();
        $searchResults->setSearchCriteria($searchCriteria);
        $searchResults->setItems($collection->getItems());
        $searchResults->setTotalCount($collection->getSize());

        return $searchResults;
    }

    /**
     * @param $id
     * @return bool|mixed
     * @throws CouldNotDeleteException
     * @throws NoSuchEntityException
     */
    public function deleteById($id)
    {
        return $this->delete($this->get($id));
    }
}
