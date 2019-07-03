<?php namespace App\Http\Commands;

/**
 * Class FilterByEmergency
 * @package App\Http\Commands
 */
class FilterByEmergency extends FilterByCity
{
    /**
     * @return \Illuminate\Database\Query|mixed
     */
    public function handle()
    {
        $emergency = array_get($this->filters, 'emergency', false);
        $query     = $this->query;
        if ($emergency) {
            $query = $query->where("emergency", true);
        }

        return $query;
    }
}