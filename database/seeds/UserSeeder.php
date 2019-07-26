<?php


use Phinx\Seed\AbstractSeed;

class UserSeeder extends AbstractSeed
{
    public function run()
    {
        $faker = \Faker\Factory::create();
        $data=[];
        for($i=0; $i<50; $i++) {
            $data[] = [
                'name'=>$faker->name,
                'email'=>$faker->email,
                'password'=>$faker->sha1($faker->password),
                'created_at'=>date('Y-m-d H:i:s')
            ];
        }

        $this->insert('users', $data);
    }
}
