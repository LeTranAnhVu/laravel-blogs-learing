<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Blog;
use App\User;
use App\Role;
use App\RoleUser;

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
        $this->call(blogSeeder::class);

        $this->call(userSeeder::class);

        $this->call(RoleSeeder::class);
        $this->call(RoleUserSeeder::class);
    }
}


class blogSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            $blog = new Blog;
            $blog->title = Str::random(10);
            $blog->content = Str::random(100);
            $blog->author = rand(1, 3);
            $blog->save();
        }
    }
}

class userSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['name' => 'letrananhvu', 'email' => 'vule5726@gmail.com', 'password' => '1234'],
            ['name' => 'phamthithutrang', 'email' => 'trangpham98@gmail.com', 'password' => 'abcxyz'],
            ['name' => 'lequocphong', 'email' => 'phongle64@gmail.com', 'password' => 'meomeo'],
            ['name' => 'levandat', 'email' => 'datle03@gmail.com', 'password' => 'rerrr'],
            ['name' => 'nevermore', 'email' => 'nevermore@gmail.com', 'password' => 'abcxyz'],
            ['name' => 'conchimnon', 'email' => 'conchimnon@gmail.com', 'password' => 'meomeo'],
        ];
        foreach ($data as $user) {
            $userModel = new User();
            foreach ($user as $col => $value) {
                $userModel->$col = $value;
            }
            $userModel->save();
        }
    }
}

class RoleSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            ['name' => 'admintratror'],
            ['name' => 'frontend developer'],
            ['name' => 'backend developer'],
            ['name' => 'dev ops'],
            ['name' => 'communicator'],
            ['name' => 'CEO'],
        ];
        foreach ($roles as $role) {
            $roleModel = new Role();
            foreach ($role as $col => $value) {
                $roleModel->$col = $value;
            }
            $roleModel->save();
        }
    }
}
class RoleUserSeeder extends Seeder{
    public function run(){
        $data = [
            ['user_id'=> 1, 'role_id'=> rand(1,5)],
            ['user_id'=> 2, 'role_id'=> rand(1,5)],
            ['user_id'=> 3, 'role_id'=> rand(1,5)],
            ['user_id'=> 4, 'role_id'=> rand(1,5)],
            ['user_id'=> 5, 'role_id'=> rand(1,5)],
            ['user_id'=> 6, 'role_id'=> rand(1,5)],
        ];
        foreach ($data as $re){
            $ruModel = new RoleUser();
            foreach ($re as $col=>$value){
                $ruModel->$col = $value;
            }
            $ruModel->save();
        }
    }
}