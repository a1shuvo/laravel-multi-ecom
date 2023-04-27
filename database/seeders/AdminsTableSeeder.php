<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRecords = [
            ['id'=>2, 'name'=>'John', 'type'=>'vendor', 'vendor_id'=>1, 'mobile' =>'01700000000', 'email'=>'john@admin.com', 'password'=>'$2y$10$oPvlkyxYgdwQ1AHtb4hpp.A1e2qkDBTKvQUYMomsHckDGpAwtYB4.', 'image'=>'', 'status'=>0],
        ];
        Admin::insert($adminRecords);
    }
}
