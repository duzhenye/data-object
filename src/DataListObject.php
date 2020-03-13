<?php

/*
 * Data Object
 * https://github.com/duzhenye/data-object
 * Copyright (c) duzhenye
 * Free to use under the MIT license.
 */

namespace Duzhenye;

/**
 * Information about an object in the data list.
 */
class DataListObject implements \ArrayAccess
{

    use DataObjectTrait;
    use DataObjectArrayAccessTrait;
    use DataObjectToArrayTrait;
    use DataObjectFromArrayTrait;
    use DataObjectToJSONTrait;
    use DataObjectFromJSONTrait;
}
