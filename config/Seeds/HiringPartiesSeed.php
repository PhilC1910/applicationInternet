<?php
use Migrations\AbstractSeed;

/**
 * HiringParties seed.
 */
class HiringPartiesSeed extends AbstractSeed
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
                'hiring_party_id' => '1',
                'hiring_party_details' => 'madonna party',
                'hiring_party_type_code_id' => '1',
                'created' => '2018-10-05 21:40:17',
                'modified' => '2018-10-05 21:40:17',
            ],
        ];

        $table = $this->table('hiring_parties');
        $table->insert($data)->save();
    }
}
