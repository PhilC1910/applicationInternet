<?php
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
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
                'user_id' => '1',
                'username' => 'admin',
                'password' => 'admin',
                'created' => NULL,
                'modified' => NULL,
                'role_id' => 'admin',
                'email' => '',
                'codeConfirmation' => '',
                'verifies' => '0',
            ],
            [
                'user_id' => '2',
                'username' => 'client',
                'password' => 'client',
                'created' => NULL,
                'modified' => NULL,
                'role_id' => 'client',
                'email' => '',
                'codeConfirmation' => '',
                'verifies' => '0',
            ],
            [
                'user_id' => '3',
                'username' => 'agent',
                'password' => 'agent',
                'created' => NULL,
                'modified' => NULL,
                'role_id' => 'agent de marketing',
                'email' => '',
                'codeConfirmation' => '',
                'verifies' => '0',
            ],
            [
                'user_id' => '4',
                'username' => 'admin02 ',
                'password' => '$2y$10$39T1ZgyWV6mV4o1USjOPRujNnaj5ab0mAzQvQDXtPon...',
                'created' => '2018-10-05 21:32:19',
                'modified' => '2018-10-05 21:32:19',
                'role_id' => 'admin',
                'email' => '',
                'codeConfirmation' => '',
                'verifies' => '0',
            ],
            [
                'user_id' => '5',
                'username' => 'client01',
                'password' => '$2y$10$agBnx4pbYF11QE4MrBzSGuGg1NPNwWdyaANTyIgUWa9qUxkKKZ3NS',
                'created' => '2018-10-05 21:50:15',
                'modified' => '2018-10-05 21:50:15',
                'role_id' => 'client',
                'email' => '',
                'codeConfirmation' => '',
                'verifies' => '0',
            ],
            [
                'user_id' => '6',
                'username' => 'agent01',
                'password' => '$2y$10$qw/1FA3AnoLJ8vWyBU3/fOiLUqt7VyYLQI/ZNr8nl4O/lTsktH3qu',
                'created' => '2018-10-05 21:50:40',
                'modified' => '2018-10-05 21:50:40',
                'role_id' => 'agent de marketing',
                'email' => '',
                'codeConfirmation' => '',
                'verifies' => '0',
            ],
            [
                'user_id' => '7',
                'username' => 'admin01',
                'password' => '$2y$10$Ohhdh5IS0B5mtG5Qs2j4TOZuM7ATL9LwsaQKqiLD7SZtKqSxxCxcW',
                'created' => '2018-10-05 22:00:31',
                'modified' => '2018-10-05 22:00:31',
                'role_id' => 'admin',
                'email' => '',
                'codeConfirmation' => '',
                'verifies' => '0',
            ],
            [
                'user_id' => '8',
                'username' => 'justin',
                'password' => '$2y$10$zQcakAQ1lgEnIWkfab1JyuHm7EUlo2VZarA/eSUArmGAJYS4LP1CK',
                'created' => '2018-10-11 20:25:26',
                'modified' => '2018-10-11 20:46:10',
                'role_id' => 'agent de marketing',
                'email' => 'intigolasagna@gmail.com',
                'codeConfirmation' => '4c3fc44b-6bf0-444d-a0b6-20b12637e336',
                'verifies' => '1',
            ],
            [
                'user_id' => '9',
                'username' => 'phil24',
                'password' => '$2y$10$e/W8Q13qr9ouy9RRxIopl.2UrYgIon.0YYQp58GDFyaCk9K3CL2L6',
                'created' => '2018-10-11 21:01:23',
                'modified' => '2018-10-11 21:01:23',
                'role_id' => 'agent de marketing',
                'email' => 'phil45@gmail.com',
                'codeConfirmation' => '07a8d7cf-e0f5-49cd-b650-7cbfaae1ba92',
                'verifies' => '0',
            ],
            [
                'user_id' => '18',
                'username' => 'admin32',
                'password' => '$2y$10$ws.JbhQWwC6QeYQsXAnCIOYMLSRQbaenoTdUXmPewYRdyS55t3r7G',
                'created' => '2018-10-11 23:34:54',
                'modified' => '2018-10-11 23:35:17',
                'role_id' => 'admin',
                'email' => 'philc1019@gmail.com',
                'codeConfirmation' => 'd20f0e09-f854-470b-b20b-fc8f1506d8aa',
                'verifies' => '1',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
