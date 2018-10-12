<?php
use Migrations\AbstractSeed;

/**
 * Invoices seed.
 */
class InvoicesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'invoice_id' => '1',
                'billboard_hire_id' => '1',
                'invoice_details' => 'logiciel de music',
                'created' => NULL,
                'modified' => NULL,
            ],
            [
                'invoice_id' => '2',
                'billboard_hire_id' => '1',
                'invoice_details' => 'logiciel de mixage',
                'created' => '2018-10-06 02:05:55',
                'modified' => '2018-10-06 02:05:55',
            ],
        ];

        $table = $this->table('invoices');
        $table->insert($data)->save();
    }
}
