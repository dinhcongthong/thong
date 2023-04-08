<?php

namespace App\Imports;

use App\Models\Location;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use DB;

class LocationImport implements ToModel, WithChunkReading, ShouldQueue
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        //
    }

    /**
     * @param array $row
     *
     * @return Xxx|null
     */
    public function model(array $row)
    {
        return new Location([
            'zipcode' => $row[0],
            'provinces' => $row[1],
            'prefectures' => $row[2],
            'wards' => $row[3],
        ]);
    }

    public function chunkSize(): int
    {
        return 5000;
    }

    public function batchSize(): int
    {
        return 5000;
    }

    // public function onRow($row)
    // {
    //     $data = [
    //         'zipcode' => $row[0],
    //         'provinces' => $row[1],
    //         'prefectures' => $row[2],
    //         'wards' => $row[3],
    //     ];
    //     DB::table('location')->insert($data);
    // }
}
