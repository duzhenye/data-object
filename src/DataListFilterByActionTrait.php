<?php

/*
 * Data Object
 * https://github.com/duzhenye/data-object
 * Copyright (c) duzhenye
 * Free to use under the MIT license.
 */

namespace Duzhenye;

/**
 *
 */
trait DataListFilterByActionTrait
{

    /**
     * The property name used for the filter.
     * 
     * @var string
     */
    public $property = null;

    /**
     * The value to filter on.
     * 
     * @var string
     */
    public $value = null;

    /**
     * The operator used for the filter. Available values: equal, notEqual, regExp, notRegExp, startWith, notStartWith, endWith, notEndWith, inArray, notInArray.
     * 
     * @var string
     */
    public $operator = null;
}
