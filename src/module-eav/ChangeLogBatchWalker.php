<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Eav\Model\Mview;

use Magento\Eav\Model\Mview\ChangeLogBatchWalker\IdsFetcher;
use Magento\Eav\Model\Mview\ChangeLogBatchWalker\IdsSelectBuilder;
use Magento\Eav\Model\Mview\ChangeLogBatchWalker\IdsTableBuilder;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\App\ResourceConnection;
use Magento\Framework\DB\Query\Generator;
use Magento\Framework\Mview\View\ChangeLogBatchWalker\IdsFetcherInterface;
use Magento\Framework\Mview\View\ChangeLogBatchWalker\IdsSelectBuilderInterface;
use Magento\Framework\Mview\View\ChangeLogBatchWalker\IdsTableBuilderInterface;

/**
 * Class BatchIterator
 */
class ChangeLogBatchWalker extends \Magento\Framework\Mview\View\ChangeLogBatchWalker
{
    public function __construct(
        ResourceConnection        $resourceConnection,
        Generator                 $generator,
        IdsTableBuilderInterface  $idsTableBuilder = null,
        IdsSelectBuilderInterface $idsSelectBuilder = null,
        IdsFetcherInterface       $idsFetcher = null
    )
    {
        parent::__construct(
            $resourceConnection,
            $generator,
            $idsTableBuilder ?: ObjectManager::getInstance()->get(IdsTableBuilder::class),
            $idsSelectBuilder ?: ObjectManager::getInstance()->get(IdsSelectBuilder::class),
            $idsFetcher ?: ObjectManager::getInstance()->get(IdsFetcher::class)
        );
    }
}
