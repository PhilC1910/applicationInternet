<?php
use Migrations\AbstractSeed;

/**
 * RefHiringPartyTypes seed.
 */
class RefHiringPartyTypesSeed extends AbstractSeed
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
                'hiring_party_type_code_id' => '1',
                'hiring_party_type_description' => 'fete pour un grand mere',
                'advertising_agency_client' => 'club 105',
                'created' => '2018-09-24 16:43:22',
                'modified' => '2018-09-24 16:43:22',
            ],
        ];

        $table = $this->table('ref_hiring_party_types');
        $table->insert($data)->save();
    }
}
