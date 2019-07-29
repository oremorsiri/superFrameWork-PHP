<?php

use Phinx\Seed\AbstractSeed;

class PostSeeder extends AbstractSeed {
    public function run() {
        $faker = \Faker\Factory::create();
        $data=[];
        for($i=0; $i<50; $i++) {
            $data[] = [
                'titulo'=>$faker->sentence($nbWords = 6, $variableNbWords = true),
                'descripcion'=>$faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'autor'=>$faker->lastName,
                'created_at'=>date('Y-m-d H:i:s')
            ];
        }

        $this->insert('posts', $data);

    }
}
