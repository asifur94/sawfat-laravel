<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use App\Models\Lead;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{



    private function create_user_with_role($type, $name, $email){
        $role = Role::create([
            'name' =>$type
        ]);
        $user = User::create([
        'name' => $name,
        'email' => $email,
        'password' => bcrypt('password') ,
        ]);

        if($type == 'Super Admin'){

        $role->givePermissionTo(Permission::all());
        }
        elseif($type == 'Leads'){
            $role->givePermissionTo('lead-management');
        }

        // $user->assignRole($role);

        return $user;
    }











    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $defaultPermissions =['lead-management', 'create-admin', 'user-management'];
        foreach($defaultPermissions as $permission){
            Permission::create(['name'=>$permission]);
        }


    $this->create_user_with_role(type: 'Super Admin' , name: 'Super Admin' , email: 'super-admin@lms.com');
    $this->create_user_with_role(type: 'Communication' , name: 'Communication Team' , email: 'Communication@lms.com');

    $this->create_user_with_role(type: 'Leads' , name: 'Leads' , email: 'leads@lms.com');




        //create lead

        Lead::factory()->count(100)->create();



        // $product = Product::create([
        //     'name' => 'Olive',
        //     'slug' => 'olive',
        //     'description' => 'The olive, botanical name Olea europaea, meaning European olive in Latin, is a species of small tree or shrub in the family Oleaceae, found traditionally ...',
        //     'image' => 'https://laravel.com/img/logomark.min.svg',
        //     'price' => 500
        // ]);





    }


}
