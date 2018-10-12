<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * InvoicesFile Entity
 *
 * @property int $id
 * @property int $invoice_id
 * @property int $file_id
 *
 * @property \App\Model\Entity\Invoice $invoice
 * @property \App\Model\Entity\File $file
 */
class InvoicesFile extends Entity
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
        'invoice_id' => true,
        'file_id' => true,
        'invoice' => true,
        'file' => true
    ];
}
