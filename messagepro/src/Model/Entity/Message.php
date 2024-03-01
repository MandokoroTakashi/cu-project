<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Message Entity
 *
 * @property int $id
 * @property int $status
 * @property int|null $category_id
 * @property int $user_id
 * @property string $title
 * @property string|null $body
 * @property \Cake\I18n\FrozenTime|null $create_timestamp
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\User $user
 */
class Message extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'status' => true,
        'category_id' => true,
        'user_id' => true,
        'title' => true,
        'body' => true,
        'create_timestamp' => true,
        'category' => true,
        'user' => true,
    ];
}