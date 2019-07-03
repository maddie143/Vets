<?php namespace App\Http\Commands;


/**
 * Class FilterByCity
 * @package App\Http\Commands
 */
class FilterByCity extends FilterByCounty
{
    /**
     * @return \Illuminate\Database\Query|mixed
     */
    public function handle()
    {
        $city   = array_get($this->filters, "city", null);
        $query  = $this->query;
        if (!is_null($city) && 0 < strlen($city)) {
            $query = $query->whereHas("user", function ($q) use ($city) {
                return $q->where("city", $city);
            });
        }

        return $query;
    }
}