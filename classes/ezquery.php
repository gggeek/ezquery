<?php
/**
 * @author    G. Giunta
 * @copyright (C) G. Giunta 2012
 * @license   code licensed under the GNU GPL 2.0: see README file
 *
 * This class is where the magic happenz
 * @see ggSimpleTemplateXML in ggwebservices
 */

class eZQuery
{
    // *** This part of the code deals with functions exposed as tpl operators ***

    public static function q( $selector, $config=array() )
    {
        /// @todo:
        /// 1- parse selector to a query struct
        /// 2- select backend based on ini (can be overridden via config)
        /// 3- send query struct to backend to really carry out query
        /// 4- wrap results in an object of type eZQuery
        return null;
    }

    public static function qc( $selector, $config=array() )
    {
        /// @todo:
        /// 1- parse selector to a query struct
        /// 2- select backend based on ini (can be overridden via config)
        return null;
    }

    // *** This part of the code deals with being a "magical result set" ***

    /// @todo
    function hasAttribute( $name )
    {
        return false;
    }

    /// @todo
    function attributes()
    {
        return array();
    }

    /// @todo
    function attribute( $name )
    {
        return null;
    }

    // *** this is where the businez logic is ***

}

?>
