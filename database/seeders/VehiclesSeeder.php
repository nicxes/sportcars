<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Flynsarmy\CsvSeeder\CsvSeeder;
use Illuminate\Support\Facades\DB;

class VehiclesSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->table = 'vehicles';
		$this->filename = base_path().'/database/seeders/csv/example.csv';
        $this->offset_rows = 1;
        $this->mapping = [
            9 => 'year',
            10 => 'make',
            11 => 'model',
            12 => 'trim',
            13 => 'odometer',
            14 => 'price',
            15 => 'exterior_color',
            16 => 'interior_color',
            17 => 'transmission',
            18 => 'images',
            19 => 'description',
            20 => 'equipment',
            23 => 'engine',
            24 => 'drive_train',
            25 => 'fuel',
        ];
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Recommended when importing larger CSVs
        DB::disableQueryLog();

        // Uncomment the below to wipe the table clean before populating
        DB::table($this->table)->truncate();

        parent::run();
    }
}
