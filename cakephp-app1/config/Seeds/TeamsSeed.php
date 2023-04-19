<?php
declare(strict_types=1);

namespace Seeds;

use Migrations\AbstractSeed;

/**
 * Teams seed.
 */
class TeamsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run():void
    {
        $data = [
            [
                'id' => '1',
                'name' => 'AEU 01',
                'created' => '2023-03-17 22:40:53',
                'modified' => '2023-04-08 17:01:35',
                'deleted' => NULL,
            ],
            [
                'id' => '2',
                'name' => 'CADT 01',
                'created' => '2023-03-17 22:41:04',
                'modified' => '2023-04-08 17:01:46',
                'deleted' => NULL,
            ],
            [
                'id' => '3',
                'name' => 'CADT 02',
                'created' => '2023-03-17 22:41:12',
                'modified' => '2023-04-08 17:01:56',
                'deleted' => NULL,
            ],
            [
                'id' => '4',
                'name' => 'CAMTECH 01',
                'created' => '2023-03-17 22:41:19',
                'modified' => '2023-04-08 17:02:08',
                'deleted' => NULL,
            ],
            [
                'id' => '5',
                'name' => 'ITC 01',
                'created' => '2023-03-17 22:41:28',
                'modified' => '2023-04-08 17:02:25',
                'deleted' => NULL,
            ],
            [
                'id' => '6',
                'name' => 'ITC 02',
                'created' => '2023-03-17 22:41:38',
                'modified' => '2023-04-08 17:02:31',
                'deleted' => NULL,
            ],
            [
                'id' => '7',
                'name' => 'NPIC 01',
                'created' => '2023-03-17 22:41:51',
                'modified' => '2023-04-08 17:02:40',
                'deleted' => NULL,
            ],
            [
                'id' => '8',
                'name' => 'NPIC 02',
                'created' => '2023-04-01 14:54:26',
                'modified' => '2023-04-08 17:02:47',
                'deleted' => NULL,
            ],
            [
                'id' => '9',
                'name' => 'NUM 01',
                'created' => '2023-04-08 17:02:56',
                'modified' => '2023-04-08 17:02:56',
                'deleted' => NULL,
            ],
            [
                'id' => '10',
                'name' => 'NUM 02',
                'created' => '2023-04-08 17:03:01',
                'modified' => '2023-04-08 17:03:01',
                'deleted' => NULL,
            ],
            [
                'id' => '11',
                'name' => 'PPI 01',
                'created' => '2023-04-08 17:03:07',
                'modified' => '2023-04-08 17:03:07',
                'deleted' => NULL,
            ],
            [
                'id' => '12',
                'name' => 'PPI 02',
                'created' => '2023-04-08 17:03:10',
                'modified' => '2023-04-08 17:03:10',
                'deleted' => NULL,
            ],
        ];

        $table = $this->table('teams');
        $table->insert($data)->save();
    }
}
