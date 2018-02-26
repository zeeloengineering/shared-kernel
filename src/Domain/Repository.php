<?php
/**
 * This file belongs to SharedKernel project.
 *
 * Author: Alex Hernández <info@alexhernandez.info>
 *
 * For license information, view LICENSE file in the root of the project.
 */

namespace StraTDeS\SharedKernel\Domain;

interface Repository
{
    /**
     * @param Id $id
     * @return Entity
     * @throws EntityNotFoundException
     */
    public function get(Id $id): Entity;

    public function find(Id $id): ?Entity;

    public function all(int $offset, int $limit): array;

    public function findByCriteria(array $criteria): array;

    /**
     * @param array $criteria
     * @return null|Entity|object
     */
    public function findOneByCriteria(array $criteria): ?Entity;

    public function delete(Entity $entity): void;
}