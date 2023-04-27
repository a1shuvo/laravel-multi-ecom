<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VendorsBankDetail;

class VendorsBankDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vendorRecords = [
            ['id'=>1, 'vendor_id'=>1, 'account_holder_name'=>'John Cena', 'bank_name'=>'City Bank', 'account_number'=>'656262114465', 'bank_ifsc_code'=>'65561512'],
        ];
        VendorsBankDetail::insert($vendorRecords);
    }
}
