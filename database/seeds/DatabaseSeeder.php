<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Post;
use App\Category;
use App\Customer;
use App\Job;
use App\JobDetail;
use App\Type;
use App\Facility;
use Carbon\Carbon;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('users')->insert([
            [
                'name' => '管理者',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin'),
                'role'=>'2',
                'type_id'=> 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '顧客',
                'email' => 'customer@gmail.com',
                'password' => bcrypt('customer'),
                'role'=>'1',
                'type_id'=> 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]);
        

        

       
        
        $faker = Faker::create();
        for ($i=0; $i < 20; $i++) { 
            $post = new Post();
            $post->title = $faker->sentence();
            $post->photo = "day1.jpg";
            $post->body = $faker->paragraph();
            $post->main_point = $faker->sentence();
            $post->category_id = rand(1, 5);
            $post->user_id = rand(1, 2);
            $post->save();
        }

        $faker = Faker::create();
        for ($i=0; $i < 10; $i++) { 
            $cus = new Customer();
            $cus->name = $faker->sentence();
            $cus->email = "customer@gmail.com";
            $cus->password = bcrypt("123123");
            $cus->logo = "day1.jpg";
            $cus->type_id = rand(1, 3);
            $cus->townships_id = rand(1, 10);
            $cus->phone = "09-20102010";
            $cus->address = $faker->sentence();
            $cus->user_id = rand(1, 2);
            $cus->save();
        }

        // $faker = Faker::create();
        // for ($i=0; $i < 10; $i++) { 
        //     $job = new Job();
        //     $job->title = $faker->sentence();
        //     $job->customer_id = rand(1, 10);
        //     // $job->photo = $faker->sentence();
        //     $job->user_id = rand(1, 2);
        //     $job->save();
        // }
        
        // $faker = Faker::create();
        // for ($i=0; $i < 10; $i++) { 
        //     $jobdetail = new JobDetail();
        //     $jobdetail->job_id = rand(1, 10);
        //     $jobdetail->header = $faker->sentence();
        //     $jobdetail->body = $faker->paragraph();
        //     $jobdetail->user_id = rand(1, 2);
        //     $jobdetail->save();
        // }

        $category = new Category();
        $category->name = "病院";
        $category->user_id = 1;
        $category->save();

        $category = new Category();
        $category->name = "特養";
        $category->user_id = 1;
        $category->save();

        $category = new Category();
        $category->name = "有料老人ホーム";
        $category->user_id = 1;
        $category->save();

        $category = new Category();
        $category->name = "訪問介護・看護";
        $category->user_id = 1;
        $category->save();

        $category = new Category();
        $category->name = "デイサービス等";
        $category->user_id = 1;
        $category->save();
        
        $type = new Type();
        $type->name = "admin";
        $type->user_id = 1;
        $type->parent = 0;
        $type->save();

        $type = new Type();
        $type->name = "病院";
        $type->user_id = 1;
        $type->parent = 0;
        $type->save();

        $type = new Type();
        $type->name = "介護";
        $type->user_id = 1;
        $type->parent = 0;
        $type->save();
        
        $type = new Type();
        $type->name = "有料老人ホーム";
        $type->user_id = 1;
        $type->parent = 2;
        $type->save();
        $type = new Type();
        $type->name = "デイサービス";
        $type->user_id = 1;
        $type->parent = 2;
        $type->save();
        $type = new Type();
        $type->name = "訪問介護・看護";
        $type->user_id = 1;
        $type->parent = 2;
        $type->save();

        $fac = new Facility();
        $fac->description = "駐車場";
        $fac->save();

        $fac = new Facility();
        $fac->description = "女医";
        $fac->save();

        $fac = new Facility();
        $fac->description = "人間ドック";
        $fac->save();

        $fac = new Facility();
        $fac->description = "カード";
        $fac->save();

        $fac = new Facility();
        $fac->description = "院内処方";
        $fac->save();

        $fac = new Facility();
        $fac->description = "意見";
        $fac->save();
        
    }
  
    
    
}
