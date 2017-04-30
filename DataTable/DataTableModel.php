<?php

namespace Models\DataTable;


use Models\Model\ModelInterface;


class DataTableModel implements ModelInterface
{

    protected $headers;
    protected $hidden;
    protected $rows;
    protected $ric;
    //
    protected $page;
    protected $nbTotalItems;
    protected $nipp;
    protected $checkboxes;
    protected $isSearchable;
    protected $unsearchable;
    protected $searchValues;
    protected $isSortable;
    protected $unsortable;
    protected $sortValues;
    protected $showCountInfo;
    protected $showNipp;
    protected $nippItems;
    protected $showQuickPage;
    protected $showPagination;
    protected $bulkActions;
    protected $textNoResult;
    protected $textSearch;

    public function __construct()
    {
        $this->headers = [];
        $this->hidden = [];
        $this->rows = [];
        $this->ric = [];
        //
        $this->page = 1;
        $this->nbTotalItems = 1;
        $this->nipp = 20;
        $this->checkboxes = true;
        $this->isSearchable = true;
        $this->unsearchable = [];
        $this->searchValues = [];
        $this->isSortable = true;
        $this->unsortable = [];
        $this->sortValues = [];
        $this->showCountInfo = true;
        $this->showNipp = true;
        $this->nippItems = [5, 10, 20, 50, 100, 'all'];
        $this->showQuickPage = true;
        $this->showPagination = true;
        $this->bulkActions = [];
        $this->textNoResult = "No result found";
        $this->textSearch = "Search";
    }

    public static function create()
    {
        return new static();
    }

    public function getArray()
    {
        return [
            'headers' => $this->headers,
            'hidden' => $this->hidden,
            'rows' => $this->rows,
            'ric' => $this->ric,
            //
            'page' => $this->page,
            'nbTotalItems' => $this->nbTotalItems,
            'nipp' => $this->nipp,
            'checkboxes' => $this->checkboxes,
            'isSearchable' => $this->isSearchable,
            'unsearchable' => $this->unsearchable,
            'searchValues' => $this->searchValues,
            'isSortable' => $this->isSortable,
            'unsortable' => $this->unsortable,
            'sortValues' => $this->sortValues,
            'showCountInfo' => $this->showCountInfo,
            'showNipp' => $this->showNipp,
            'nippItems' => $this->nippItems,
            'showQuickPage' => $this->showQuickPage,
            'showPagination' => $this->showPagination,
            'bulkActions' => $this->bulkActions,
            'textNoResult' => $this->textNoResult,
            'textSearch' => $this->textSearch,
        ];
    }

    //--------------------------------------------
    // SETTERS
    //--------------------------------------------
    public function setHeaders(array $headers)
    {
        $this->headers = $headers;
        return $this;
    }

    public function setHidden(array $hidden)
    {
        $this->hidden = $hidden;
        return $this;
    }

    public function setRows(array $rows)
    {
        $this->rows = $rows;
        return $this;
    }

    public function setRic(array $ric)
    {
        $this->ric = $ric;
        return $this;
    }

    public function setPage($page)
    {
        $this->page = $page;
        return $this;
    }

    public function setNbTotalItems($nbTotalItems)
    {
        $this->nbTotalItems = $nbTotalItems;
        return $this;
    }

    public function setNipp($nipp)
    {
        $this->nipp = $nipp;
        return $this;
    }

    public function setCheckboxes($checkboxes)
    {
        $this->checkboxes = $checkboxes;
        return $this;
    }

    public function setIsSearchable($isSearchable)
    {
        $this->isSearchable = $isSearchable;
        return $this;
    }

    public function setUnsearchable(array $unsearchable)
    {
        $this->unsearchable = $unsearchable;
        return $this;
    }

    public function setSearchValues(array $searchValues)
    {
        $this->searchValues = $searchValues;
        return $this;
    }

    public function setIsSortable($isSortable)
    {
        $this->isSortable = $isSortable;
        return $this;
    }

    public function setUnsortable(array $unsortable)
    {
        $this->unsortable = $unsortable;
        return $this;
    }

    public function setSortValues(array $sortValues)
    {
        $this->sortValues = $sortValues;
        return $this;
    }

    public function setShowCountInfo($showCountInfo)
    {
        $this->showCountInfo = $showCountInfo;
        return $this;
    }

    public function setShowNipp($showNipp)
    {
        $this->showNipp = $showNipp;
        return $this;
    }

    public function setNippItems(array $nippItems)
    {
        $this->nippItems = $nippItems;
        return $this;
    }

    public function setShowQuickPage($showQuickPage)
    {
        $this->showQuickPage = $showQuickPage;
        return $this;
    }

    public function setShowPagination($showPagination)
    {
        $this->showPagination = $showPagination;
        return $this;
    }

    public function setBulkActions(array $bulkActions)
    {
        $this->bulkActions = $bulkActions;
        return $this;
    }

    public function setTextNoResult($textNoResult)
    {
        $this->textNoResult = $textNoResult;
        return $this;
    }

    public function setTextSearch($textSearch)
    {
        $this->textSearch = $textSearch;
        return $this;
    }

}