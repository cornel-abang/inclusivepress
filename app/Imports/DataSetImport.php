<?php

namespace App\Imports;

use App\Models\DataSet;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class DataSetImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $zone = '';
        if ($row['state'] == 'Benue' || $row['state'] == 'Plateau' || $row['state'] == 'Nassarawa' || $row['state'] == 'Niger' || $row['state'] == 'Kwara' || $row['state'] == 'Kogi' || $row['state'] == 'Federal Capital Territory') {
            $zone = 'North Central';
        }elseif ($row['state'] == 'Adamawa' || $row['state'] == 'Bauchi' || $row['state'] == 'Borno' || $row['state'] == 'Gombe' || $row['state'] == 'Taraba' || $row['state'] == 'Yobe') {
            $zone = 'North East';
        }elseif ($row['state'] == 'Jigawa' || $row['state'] == 'Kaduna' || $row['state'] == 'Kano' || $row['state'] == 'Katsina' || $row['state'] == 'Kebbi' || $row['state'] == 'Sokoto' || $row['state'] == 'Zamfara') {
            $zone = 'North West';
        }elseif ($row['state'] == 'Abia' || $row['state'] == 'Anambra' || $row['state'] == 'Ebonyi' || $row['state'] == 'Enugu' || $row['state'] == 'Imo') {
            $zone = 'South East';
        }elseif ($row['state'] == 'Akwa Ibom' || $row['state'] == 'Bayelsa' || $row['state'] == 'Cross River' || $row['state'] == 'Rivers' || $row['state'] == 'Delta' || $row['state'] == 'Edo') {
            $zone = 'South South';
        }elseif ($row['state'] == 'Ekiti' || $row['state'] == 'Lagos' || $row['state'] == 'Ogun' || $row['state'] == 'Ondo' || $row['state'] == 'Osun' || $row['state'] == 'Oyo') {
            $zone = 'South West';
        }
        return new DataSet([
            'type'              => 'farmers_herdsmen',
            'event_state'       => $row['state'],
            'event_lga'         => $row['event_lga'],
            'event_local'       => $row['event_local'],
            'event_fatalities'  => $row['event_fatalities'],
            'event_latitude'    => $row['event_latitude'],
            'event_longitude'   => $row['event_longitude'],
            'event_zone'        => $zone,
            'event_state_slug'  => $row['event_state_slug'],
            'event_year'        => $row['event_year'],
            'event_date'        => \Carbon\Carbon::parse($row['event_date']),
        ]);
    }

    public function batchSize(): int
    {
        return 80;
    }

    public function chunkSize(): int
    {
        return 80;
    }
}
