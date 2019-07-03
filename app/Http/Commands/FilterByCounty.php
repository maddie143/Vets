<?php namespace App\Http\Commands;

use Illuminate\Database\Query;


/**
 * Class FilterByCounty
 * @package App\Http\Commands
 */
class FilterByCounty
{
    /**
     * @var Query
     */
    protected $query;

    /**
     * @var array
     */
    protected $filters;

    public function __construct($query, array $filters)
    {
        $this->query = $query;
        $this->filters = $filters;
    }

    /**
     * @return mixed
     */
    public function handle()
    {
        $county = array_get($this->filters, "county", null);
        $query = $this->query;

        if (!is_null($county) && 0 < strlen($county)) {
            $query = $query->whereHas("user", function ($q) use ($county) {
                return $q->where("county", $county);
            });
        }

        return $query;
    }
}