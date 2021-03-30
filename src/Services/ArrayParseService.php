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
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Initialize array
     *
     * @param array $data
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
        //
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
        //
    }

    /**
     * @param string $index
     * @param string $result
     * @return ArrayParseContract
     */
    public function orderBy(string $index, string $result = "ASC"): ArrayParseContract
    {
        //
    }

    /**
     * @return ArrayParseContract object
     */
    public function get(): ArrayParseContract
    {
        return $this;
    }

    /**
     * return data into array
     * @return object
     */
    public function toArray(): array
    {
        return (array)$this->data;
    }

    /**
     * return data in json format
     * @return false|object|string
     */
    public function toJson()
    {
        return json_encode($this->data);
    }

    /**
     * return the first row from the array
     * @return array array format
     */
    public function first(): array
    {
        return (array)$this->data[0];
    }
}
