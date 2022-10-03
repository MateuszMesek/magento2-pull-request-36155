<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Framework\Mview\View;

use Traversable;

/**
 * Interface \Magento\Framework\Mview\View\ChangeLogBatchWalkerInterface
 *
 */
interface ChangeLogBatchWalkerInterface
{
    /**
     * Walk through batches
     *
     * @param ChangelogInterface $changelog
     * @param int $fromVersionId
     * @param int $lastVersionId
     * @param int $batchSize
     * @return Traversable
     */
    public function walk(ChangelogInterface $changelog, int $fromVersionId, int $lastVersionId, int $batchSize): Traversable;
}
