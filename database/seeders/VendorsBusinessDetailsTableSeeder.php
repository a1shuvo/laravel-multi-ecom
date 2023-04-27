<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VendorBusinessDetail;

class VendorsBusinessDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vendorRecords = [
            ['id'=>1, 'vendors_id'=>1, 'shop_name'=>'John Electronics Store', 'shop_address'=>'1234-SCF', 'shop_city'=>'Dhaka', 'shop_state'=>'Dhaka', 'shop_country'=>'Bangladesh', 'shop_pincode'=>'2250', 'shop_mobile'=>'01700000000', 'shop_website'=>'moulik.xyz', 'shop_email'=>'jhon@admin.com', 'address_proof'=>'Passport', 'address_proof_image'=>'test.jpg', 'business_license_number'=>'65444621654', 'tin_number'=>'56412316514', 'bin_number'=>'654621621'],
        ];
        VendorBusinessDetail::insert($vendorRecords);
    }
}
