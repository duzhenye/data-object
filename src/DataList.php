<?php

/*
 * Data Object
 * https://github.com/duzhenye/data-object
 * Copyright (c) duzhenye
 * Free to use under the MIT license.
 */

namespace Duzhenye;

/**
 * A list of data objects that can be easily filtered, sorted, etc. The objects can be lazy loaded using a callback in the constructor.
 */
class DataList implements \ArrayAccess, \Iterator, \Countable
{

    use \Duzhenye\DataListTrait;
    use \Duzhenye\DataListArrayAccessTrait;
    use \Duzhenye\DataListIteratorTrait;
    use \Duzhenye\DataListToArrayTrait;
    use \Duzhenye\DataListToJSONTrait;

    /**
     * Constructs a new data objects list.
     * 
     * @param array|iterable|callback $dataSource An array or an iterable containing objects or arrays that will be converted into data objects or a callback that returns such. The callback option enables lazy data loading.
     * @throws \InvalidArgumentException
     */
    public function __construct($dataSource = null)
    {
        if ($dataSource !== null) {
            $this->setDataSource($dataSource);
        }
    }
}
