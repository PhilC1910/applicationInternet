<?php
use Migrations\AbstractSeed;

/**
 * Billboards seed.
 */
class BillboardsSeed extends AbstractSeed
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
                'billboard_id' => '1',
                'billboard_details' => 'the top 100 of the year 2018',
                'created' => '2018-10-05 21:39:43',
                'modified' => '2018-10-05 21:39:43',
            ],
        ];

        $table = $this->table('billboards');
        $table->insert($data)->save();
    }
}
