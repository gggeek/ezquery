<?php
/**
 * @author    G. Giunta
 * @copyright (C) G. Giunta 2012
 * @license   code licensed under the GNU GPL 2.0: see README file
 */
class eZQueryTemplateOperators
{

    public static $operators = array(
        'q' => array(
            'selector' => array(
                'type'     => 'string',
                'required' => true )
        ),
        'qc' => array(
            'selector' => array(
                'type'     => 'string',
                'required' => true )
        )
    );

    public function operatorList()
    {
        return array_keys( self::$operators );
    }

    public function namedParameterPerOperator()
    {
        return true;
    }

    public function namedParameterList()
    {
        return self::$operators;
    }

    public function modify( $tpl, $operatorName, $operatorParameters, $rootNamespace, $currentNamespace, &$operatorValue, $namedParameters )
    {

        switch ( $operatorName )
        {
            case 'q':
                $operatorValue = eZQuery::q( $namedParameters['selector'] );
                break;
            case 'qc':
                $operatorValue = eZQuery::qc( $namedParameters['selector'] );
                break;
        }
    }

}

?>
