<?php
namespace App\Contracts;

interface ArrayParseContract
{
    /**
     * Initialize array
     *
     * @param array $data
     * @return ArrayParseContract
     */

    public static function make(array $data): ArrayParseContract;

    /**
     * filter data form array
     *
     * @param string $index column name for filter value
     * @param string $value base on column data for filter
     * @return ArrayParseContract
     */

    public function where(string $index, string $value): ArrayParseContract;

    /**
     * filter data form array
     *
     * @param string $index is the column name of array
     * @param string $value is the column value of the array
     * @return ArrayParseContract
     */
    public function whereIn(string $index, string $value): ArrayParseContract;

    /**
     * @param string $index
     * @param string $result
     * @return ArrayParseContract
     */
    public function orderBy(string $index, string $result = "ASC"): ArrayParseContract;

    /**
     * @return ArrayParseContract object
     */
    public function get(): ArrayParseContract;

    /**
     * return data into array
     * @return object
     */
    public function toArray(): array;

    /**
     * return data in json format
     * @return object
     */
    public function toJson();

    /**
     * return the first row from the array
     * @return array array format
     */
    public function first(): array;
}
