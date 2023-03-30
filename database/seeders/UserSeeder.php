<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//     { User::firstOrCreate(
//         [
//         'name'=>'rabee',
//         'email'=>'ra@gmail.com',
//         'password'=>'852852',
//     ],
    
$posts  =
[  
      [
    'name'=>'rabee',
    'email'=>'rer@gmail.com',
    'password'=>'852852',
],
[
    'name'=>'ra',
    'email'=>'ra2@gmail.com',
    'password'=>'582588',
],
[
    'name'=>'ssa',
    'email'=>'ra3@gmail.com',
    'password'=>'582588797',
],
[
    'name'=>'sha',
    'email'=>'sh@gmail.com',
    'password'=>'5825887987887',
],
[
    'name'=>'shima',
    'email'=>'sh5@gmail.com',
    'password'=>'5825887987',
]

];
foreach($posts as $posts)
{
    User::create($posts);

}
        //protected $fillable = [
   
    }
}
