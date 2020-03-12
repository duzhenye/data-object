<?php

/*
 * Data Object
 * https://github.com/duzhenye/data-object
 * Copyright (c) Duzhenye
 * Free to use under the MIT license.
 */

$classes = array(
    'Duzhenye\DataList' => 'src/DataList.php',
    'Duzhenye\DataListAction' => 'src/DataListAction.php',
    'Duzhenye\DataListActionTrait' => 'src/DataListActionTrait.php',
    'Duzhenye\DataListArrayAccessTrait' => 'src/DataListArrayAccessTrait.php',
    'Duzhenye\DataListContext' => 'src/DataListContext.php',
    'Duzhenye\DataListContextTrait' => 'src/DataListContextTrait.php',
    'Duzhenye\DataListFilterByAction' => 'src/DataListFilterByAction.php',
    'Duzhenye\DataListFilterByActionTrait' => 'src/DataListFilterByActionTrait.php',
    'Duzhenye\DataListIteratorTrait' => 'src/DataListIteratorTrait.php',
    'Duzhenye\DataListObject' => 'src/DataListObject.php',
    'Duzhenye\DataListSliceAction' => 'src/DataListSliceAction.php',
    'Duzhenye\DataListSliceActionTrait' => 'src/DataListSliceActionTrait.php',
    'Duzhenye\DataListSlicePropertiesAction' => 'src/DataListSlicePropertiesAction.php',
    'Duzhenye\DataListSlicePropertiesActionTrait' => 'src/DataListSlicePropertiesActionTrait.php',
    'Duzhenye\DataListSortByAction' => 'src/DataListSortByAction.php',
    'Duzhenye\DataListSortByActionTrait' => 'src/DataListSortByActionTrait.php',
    'Duzhenye\DataListToArrayTrait' => 'src/DataListToArrayTrait.php',
    'Duzhenye\DataListToJSONTrait' => 'src/DataListToJSONTrait.php',
    'Duzhenye\DataListTrait' => 'src/DataListTrait.php',
    'Duzhenye\DataObject' => 'src/DataObject.php',
    'Duzhenye\DataObjectArrayAccessTrait' => 'src/DataObjectArrayAccessTrait.php',
    'Duzhenye\DataObjectFromArrayTrait' => 'src/DataObjectFromArrayTrait.php',
    'Duzhenye\DataObjectFromJSONTrait' => 'src/DataObjectFromJSONTrait.php',
    'Duzhenye\DataObjectToArrayTrait' => 'src/DataObjectToArrayTrait.php',
    'Duzhenye\DataObjectToJSONTrait' => 'src/DataObjectToJSONTrait.php',
    'Duzhenye\DataObjectTrait' => 'src/DataObjectTrait.php'
);

spl_autoload_register(function ($class) use ($classes) {
    if (isset($classes[$class])) {
        require __DIR__ . '/' . $classes[$class];
    }
}, true);
