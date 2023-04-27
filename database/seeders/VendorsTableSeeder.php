<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vendor;

class VendorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vendorRecords = [
            ['id'=>1, 'name'=>'John', 'address'=>'CP-112', 'city'=>'Dhaka', 'state'=>'Dhaka', 'country'=>"Bangladesh", 'pincode'=>'2250', 'mobile'=>'01700000000', 'email'=>'john@admin.com', 'status'=>0],
        ];
        Vendor::insert($vendorRecords);
    }
}
