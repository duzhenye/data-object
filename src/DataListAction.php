<?php

/*
 * Data Object
 * https://github.com/duzhenye/data-object
 * Copyright (c) duzhenye
 * Free to use under the MIT license.
 */

namespace Duzhenye;

/**
 * Information about an action applied on a data list.
 */
class DataListAction
{

    use \Duzhenye\DataListActionTrait;
    use \Duzhenye\DataObjectToArrayTrait;
    use \Duzhenye\DataObjectToJSONTrait;
}
