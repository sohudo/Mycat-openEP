<?php
// **********************************************************************
//
// Copyright (c) 2003-2013 ZeroC, Inc. All rights reserved.
//
// This copy of Ice is licensed to you under the terms described in the
// ICE_LICENSE file included in this distribution.
//
// **********************************************************************
//
// Ice version 3.5.1
//
// <auto-generated>
//
// Generated from file `Locator.ice'
//
// Warning: do not edit this file.
//
// </auto-generated>
//


namespace
{
    require_once 'Ice/Identity.php';
    require_once 'Ice/ProcessF.php';
}

namespace Ice
{
    if(!class_exists('\\Ice\\AdapterNotFoundException'))
    {
        class AdapterNotFoundException extends \Ice\UserException
        {
            public function __construct()
            {
            }

            public function ice_name()
            {
                return 'Ice::AdapterNotFoundException';
            }

            public function __toString()
            {
                global $Ice__t_AdapterNotFoundException;
                return IcePHP_stringifyException($this, $Ice__t_AdapterNotFoundException);
            }
        }

        $Ice__t_AdapterNotFoundException = IcePHP_defineException('::Ice::AdapterNotFoundException', '\\Ice\\AdapterNotFoundException', false, null, null);
    }
}

namespace Ice
{
    if(!class_exists('\\Ice\\InvalidReplicaGroupIdException'))
    {
        class InvalidReplicaGroupIdException extends \Ice\UserException
        {
            public function __construct()
            {
            }

            public function ice_name()
            {
                return 'Ice::InvalidReplicaGroupIdException';
            }

            public function __toString()
            {
                global $Ice__t_InvalidReplicaGroupIdException;
                return IcePHP_stringifyException($this, $Ice__t_InvalidReplicaGroupIdException);
            }
        }

        $Ice__t_InvalidReplicaGroupIdException = IcePHP_defineException('::Ice::InvalidReplicaGroupIdException', '\\Ice\\InvalidReplicaGroupIdException', false, null, null);
    }
}

namespace Ice
{
    if(!class_exists('\\Ice\\AdapterAlreadyActiveException'))
    {
        class AdapterAlreadyActiveException extends \Ice\UserException
        {
            public function __construct()
            {
            }

            public function ice_name()
            {
                return 'Ice::AdapterAlreadyActiveException';
            }

            public function __toString()
            {
                global $Ice__t_AdapterAlreadyActiveException;
                return IcePHP_stringifyException($this, $Ice__t_AdapterAlreadyActiveException);
            }
        }

        $Ice__t_AdapterAlreadyActiveException = IcePHP_defineException('::Ice::AdapterAlreadyActiveException', '\\Ice\\AdapterAlreadyActiveException', false, null, null);
    }
}

namespace Ice
{
    if(!class_exists('\\Ice\\ObjectNotFoundException'))
    {
        class ObjectNotFoundException extends \Ice\UserException
        {
            public function __construct()
            {
            }

            public function ice_name()
            {
                return 'Ice::ObjectNotFoundException';
            }

            public function __toString()
            {
                global $Ice__t_ObjectNotFoundException;
                return IcePHP_stringifyException($this, $Ice__t_ObjectNotFoundException);
            }
        }

        $Ice__t_ObjectNotFoundException = IcePHP_defineException('::Ice::ObjectNotFoundException', '\\Ice\\ObjectNotFoundException', false, null, null);
    }
}

namespace Ice
{
    if(!class_exists('\\Ice\\ServerNotFoundException'))
    {
        class ServerNotFoundException extends \Ice\UserException
        {
            public function __construct()
            {
            }

            public function ice_name()
            {
                return 'Ice::ServerNotFoundException';
            }

            public function __toString()
            {
                global $Ice__t_ServerNotFoundException;
                return IcePHP_stringifyException($this, $Ice__t_ServerNotFoundException);
            }
        }

        $Ice__t_ServerNotFoundException = IcePHP_defineException('::Ice::ServerNotFoundException', '\\Ice\\ServerNotFoundException', false, null, null);
    }
}

namespace Ice
{
    if(!isset($Ice__t_LocatorRegistry))
    {
        $Ice__t_LocatorRegistry = IcePHP_declareClass('::Ice::LocatorRegistry');
        $Ice__t_LocatorRegistryPrx = IcePHP_declareProxy('::Ice::LocatorRegistry');
    }
}

namespace Ice
{
    if(!interface_exists('\\Ice\\Locator'))
    {
        interface Locator
        {
            public function findObjectById($id);
            public function findAdapterById($id);
            public function getRegistry();
        }

        class LocatorPrxHelper
        {
            public static function checkedCast($proxy, $facetOrCtx=null, $ctx=null)
            {
                return $proxy->ice_checkedCast('::Ice::Locator', $facetOrCtx, $ctx);
            }

            public static function uncheckedCast($proxy, $facet=null)
            {
                return $proxy->ice_uncheckedCast('::Ice::Locator', $facet);
            }
        }

        $Ice__t_Locator = IcePHP_defineClass('::Ice::Locator', '\\Ice\\Locator', -1, true, false, $Ice__t_Object, null, null);

        $Ice__t_LocatorPrx = IcePHP_defineProxy($Ice__t_Locator);

        IcePHP_defineOperation($Ice__t_Locator, 'findObjectById', 2, 1, 0, array(array($Ice__t_Identity, false, 0)), null, array($Ice__t_ObjectPrx, false, 0), array($Ice__t_ObjectNotFoundException));
        IcePHP_defineOperation($Ice__t_Locator, 'findAdapterById', 2, 1, 0, array(array($IcePHP__t_string, false, 0)), null, array($Ice__t_ObjectPrx, false, 0), array($Ice__t_AdapterNotFoundException));
        IcePHP_defineOperation($Ice__t_Locator, 'getRegistry', 2, 1, 0, null, null, array($Ice__t_LocatorRegistryPrx, false, 0), null);
    }
}

namespace Ice
{
    if(!interface_exists('\\Ice\\LocatorRegistry'))
    {
        interface LocatorRegistry
        {
            public function setAdapterDirectProxy($id, $proxy);
            public function setReplicatedAdapterDirectProxy($adapterId, $replicaGroupId, $p);
            public function setServerProcessProxy($id, $proxy);
        }

        class LocatorRegistryPrxHelper
        {
            public static function checkedCast($proxy, $facetOrCtx=null, $ctx=null)
            {
                return $proxy->ice_checkedCast('::Ice::LocatorRegistry', $facetOrCtx, $ctx);
            }

            public static function uncheckedCast($proxy, $facet=null)
            {
                return $proxy->ice_uncheckedCast('::Ice::LocatorRegistry', $facet);
            }
        }

        $Ice__t_LocatorRegistry = IcePHP_defineClass('::Ice::LocatorRegistry', '\\Ice\\LocatorRegistry', -1, true, false, $Ice__t_Object, null, null);

        $Ice__t_LocatorRegistryPrx = IcePHP_defineProxy($Ice__t_LocatorRegistry);

        IcePHP_defineOperation($Ice__t_LocatorRegistry, 'setAdapterDirectProxy', 2, 2, 0, array(array($IcePHP__t_string, false, 0), array($Ice__t_ObjectPrx, false, 0)), null, null, array($Ice__t_AdapterNotFoundException, $Ice__t_AdapterAlreadyActiveException));
        IcePHP_defineOperation($Ice__t_LocatorRegistry, 'setReplicatedAdapterDirectProxy', 2, 2, 0, array(array($IcePHP__t_string, false, 0), array($IcePHP__t_string, false, 0), array($Ice__t_ObjectPrx, false, 0)), null, null, array($Ice__t_AdapterNotFoundException, $Ice__t_AdapterAlreadyActiveException, $Ice__t_InvalidReplicaGroupIdException));
        IcePHP_defineOperation($Ice__t_LocatorRegistry, 'setServerProcessProxy', 2, 2, 0, array(array($IcePHP__t_string, false, 0), array($Ice__t_ProcessPrx, false, 0)), null, null, array($Ice__t_ServerNotFoundException));
    }
}
?>
