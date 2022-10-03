<?php declare(strict_types=1);
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Framework\Mview\View\ChangeLogBatchWalker;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Mview\View\ChangelogInterface;

/**
 * Interface \Magento\Framework\Mview\View\ChangeLogBatchWalker\IdsTableBuilderInterface
 *
 */
interface IdsTableBuilderInterface
{
    public const FIELD_ID = 'id';
    public const TABLE_NAME_SUFFIX = '_tmp';
    public const INDEX_NAME_UNIQUE = 'unique';

    /**
     * @param \Magento\Framework\Mview\View\ChangelogInterface $changelog
     * @return \Magento\Framework\DB\Ddl\Table
     */
    public function build(ChangelogInterface $changelog): Table;
}
