<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UserTableSeeder');
        $this->command->info('Таблица пользователей загружена данными!');
    }
}

class UserTableSeeder extends Seeder {

  public function run()
  {
    for($i = 0; $i < 10; $i++)
    {
	DB::insert('insert into position (position) values (?)', ['Должность'.$i]);
    }

    $chief_id = 0;
    for($i = 0; $i < 1000; $i++)
    {
	DB::table('users')->insert([ 'fio' => 'User'.$i,
				     'position' => random_int( DB::table('position')->min('id'), DB::table('position')->max('id')),
		   		     'date' => date("Y-m-d"),
			   	     'salary' => random_int(100, 10000),
			  	     'chief' => $chief_id ]
        );
	$chief_id = $this->chief_id($chief_id);
    }
  }

  private function chief_id($chief_id)
  {
    	if( $chief_id < 5)
	{
		$chief_id++;    
	} else {
            	$chief_id = random_int( 1, 5);
          }
		
	return $chief_id;

  }

}
