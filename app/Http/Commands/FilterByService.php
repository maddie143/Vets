<?php namespace App\Http\Commands;

/**
 * Class FilterByService
 * @package App\Http\Commands
 */
class FilterByService extends FilterByCity
{

    /**
     * @return \Illuminate\Database\Query|mixed
     */
    public function handle()
    {
        $service = array_get($this->filters, "service", null);
        $query   = $this->query;

        if (!is_null($service)) {
            $query = $query->whereHas("services", function ($servicesQuery) use ($service) {
                return $servicesQuery->whereIn("services.id", [intval($service)]);
            });
        }

        return $query;
    }
}