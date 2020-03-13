<?php

/*
 * Data Object
 * https://github.com/duzhenye/data-object
 * Copyright (c) duzhenye
 * Free to use under the MIT license.
 */

namespace Duzhenye;

/**
 * Information about a sortBy action applied on a data list.
 */
trait DataListSortByActionTrait
{

    /**
     * The property name used for the sort.
     * 
     * @var string
     */
    public $property = null;

    /**
     * The sort order. Available values: asc and desc.
     * 
     * @var string
     */
    public $order = null;
}
