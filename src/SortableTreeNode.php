<?php

declare(strict_types=1);

namespace TreeNodes;

interface SortableTreeNode extends TreeNode
{
    /**
     * @return int
     */
    public function getPerLevelSorting(): int;

    /**
     * @return SortableTreeNode|null
     */
    public function getLeftSibling(): ?SortableTreeNode;

    /**
     * @return SortableTreeNode|null
     */
    public function getRightSibling(): ?SortableTreeNode;

    /**
     * @return array
     */
    public function getChildrenWithSorting(): array;

    /**
     *
     * @param SortableTreeNode $child
     * @param integer|null $sorting
     * @return void
     */
    public function addChildWithSorting(SortableTreeNode $child, ?int $sorting = null): void;

    /**
     * @param SortableTreeNode $child
     */
    public function removeChildWithSorting(SortableTreeNode $child): void;

    /**
     * @return int
     */
    public function getNoOfChildrenWithSorting(): int;

    /**
     * @return int
     */
    public function getNoOfDescendantsWithSorting(): int;

    /**
     * @return bool
     */
    public function isLeafWithSorting(): bool;

    /**
     * @return int
     */
    public function getHeightWithSorting(): int;
}
