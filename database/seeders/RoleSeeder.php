<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Root']);
        $role2 = Role::create(['name' => 'Subscribed']);
        $role3 = Role::create(['name' => 'Registered']);
        $role4 = Role::create(['name' => 'Guest']);

        Permission::create(['name' => 'admin.index'])->assignRole($role1);       //ver panel de administracion

        Permission::create(['name' => 'exercises.more10'])  ->syncRoles([$role1,$role2]);               //ver mas de 10 ejercicios
        Permission::create(['name' => 'exercises.like'])    ->syncRoles([$role1,$role2,$role3]);        //poner me gusta a los ejercicios
        Permission::create(['name' => 'exercises.report'])  ->syncRoles([$role1,$role2,$role3,$role4]); //reportar ejercicios
        Permission::create(['name' => 'exercises.save'])    ->syncRoles([$role1,$role2,$role3]);        //guardar ejercicios
        Permission::create(['name' => 'exercises.comment']) ->syncRoles([$role1,$role2,$role3]);        //agregar comentarios a ejercicios
        Permission::create(['name' => 'exercises.video'])   ->syncRoles([$role1,$role2,$role3]);        //ver video de ejercicios
        Permission::create(['name' => 'exercises.upload'])  ->syncRoles([$role1,$role2,$role3]);        //enviar ejercicios
    }
}
