<?php
namespace App\Services;

use App\Contracts\ArrayParseContract;

class ArrayParseService implements ArrayParseContract
{
    /**
     * array data
     * @var array
     */

    protected $data;

    /**
     * init array value
     * $data is array for all operation
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Initialize array
     *
     * @return ArrayParseContract
     */

    public static function make(array $data): ArrayParseContract
    {
        return new static($data);
    }

    /**
     * filter data form array
     *
     * @param string $index column name for filter value
     * @param string $value base on column data for filter
     * @return ArrayParseContract
     */

    public function where(string $index, string $value): ArrayParseContract
    {

    }

    /**
     * filter data form array
     *
     * @param string $index is the column name of array
     * @param string $value is the column value of the array
     * @return ArrayParseContract
     */
    public function whereIn(string $index, string $value): ArrayParseContract
    {

    }

    /**
     *
     */
    public function orderBy(string $index, string $result = "ASC"): ArrayParseContract
    {

    }

    /**
     * @return the object
     * @return ArrayParseContract
     */
    public function get(): ArrayParseContract
    {

    }

    /**
     * return data into array
     * @return object
     */
    public function toArray(): array
    {

    }

    /**
     * return data in json formate
     * @return object
     */
    public function toJson()
    {
        return json_encode($this->data);
    }

    /**
     * return the first row from the array
     * @return in array formate
     */
    public function first(): array
    {

    }
}
