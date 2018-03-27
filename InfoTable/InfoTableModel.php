<?php


namespace Models\InfoTable;


/**
 *
 * This class is appropriate to display small finite lists.
 * It's designed for lists with no order, no filters, no pagination, just a simple informative table.
 *
 *
 *
 * This is an interface to the following array:
 *
 * - headers: array of labels, if empty, means no headers
 * - rows: array of rows, each row is an array with the same structure.
 *
 *
 *
 */
class InfoTableModel
{
    protected $headers;
    protected $rows;

    public function __construct()
    {
        $this->headers = [];
        $this->rows = [];
    }

    public static function create()
    {
        return new static();
    }

    public function headers(array $headers)
    {
        $this->headers = $headers;
        return $this;
    }

    public function rows(array $rows)
    {
        $this->$rows = $rows;
        return $this;
    }

    //--------------------------------------------
    //
    //--------------------------------------------
    /**
     * @return array
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * @return array
     */
    public function getRows(): array
    {
        return $this->rows;
    }

    public function getModel()
    {
        return [
            'headers' => $this->headers,
            'rows' => $this->rows,
        ];
    }

}