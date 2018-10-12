<?php
use Migrations\AbstractSeed;

/**
 * Payments seed.
 */
class PaymentsSeed extends AbstractSeed
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
                'payment_id' => '1',
                'invoice_id' => '1',
                'payment_details' => 'un payment pour les équipements de 100$',
                'created' => NULL,
                'modified' => NULL,
            ],
            [
                'payment_id' => '2',
                'invoice_id' => '2',
                'payment_details' => 'payment de l\'abonnement du logicliel de mixage de 400$',
                'created' => '2018-10-06 02:11:08',
                'modified' => '2018-10-06 02:11:08',
            ],
        ];

        $table = $this->table('payments');
        $table->insert($data)->save();
    }
}
