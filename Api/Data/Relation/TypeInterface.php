<?php
/**
 * Umc_Base extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 *
 * @category  Umc
 * @package   Umc_Base
 * @copyright Marius Strajeru
 * @license   http://opensource.org/licenses/mit-license.php MIT License
 * @author    Marius Strajeru <ultimate.module.creator@gmail.com>
 */
namespace Umc\Base\Api\Data\Relation;

use Umc\Base\Api\Data\EntityInterface;
use Umc\Base\Api\Data\RelationInterface;

/**
 * @api
 */
interface TypeInterface
{
    /**
     * @param RelationInterface $relation
     * @return mixed
     */
    public function setRelation(RelationInterface $relation);

    /**
     * @return array
     */
    public function getPlaceholders();
}