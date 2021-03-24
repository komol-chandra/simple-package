<?php
namespace App\Contracts;

interface ArrayParseContract
{
    /**
     * Initialize array
     *
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
     *
     */
    public function orderBy(string $index, string $result = "ASC"): ArrayParseContract;

    /**
     * @return the object
     * @return ArrayParseContract
     */
    public function get(): ArrayParseContract;

    /**
     * return data into array
     * @return object
     */
    public function toArray(): array;

    /**
     * return data in json formate
     * @return object
     */
    public function toJson();

    /**
     * return the first row from the array
     * @return in array formate
     */
    public function first(): array;
}
