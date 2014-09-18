<?
/**
 * DAO zum Zugriff auf ClosedPosition-Instanzen.
 */
class ClosedPositionDAO extends CommonDAO {


   // Datenbankmapping
   public $mapping = array('link'   => 'myfx',
                           'table'  => 't_closedposition',
                           'fields' => array('id'          => array('id'         , self ::T_INT   , self ::T_NOT_NULL),      // int
                                             'version'     => array('version'    , self ::T_STRING, self ::T_NOT_NULL),      // datetime
                                             'created'     => array('created'    , self ::T_STRING, self ::T_NOT_NULL),      // datetime

                                             'ticket'      => array('ticket'     , self ::T_INT   , self ::T_NOT_NULL),      // int
                                             'type'        => array('type'       , self ::T_STRING, self ::T_NOT_NULL),      // string
                                             'lots'        => array('lots'       , self ::T_FLOAT , self ::T_NOT_NULL),      // decimal
                                             'symbol'      => array('symbol'     , self ::T_STRING, self ::T_NOT_NULL),      // string
                                             'openTime'    => array('opentime'   , self ::T_STRING, self ::T_NOT_NULL),      // datetime
                                             'openPrice'   => array('openprice'  , self ::T_FLOAT , self ::T_NOT_NULL),      // decimal
                                             'closeTime'   => array('closetime'  , self ::T_STRING, self ::T_NOT_NULL),      // datetime
                                             'closePrice'  => array('closeprice' , self ::T_FLOAT , self ::T_NOT_NULL),      // decimal
                                             'stopLoss'    => array('stoploss'   , self ::T_FLOAT , self ::T_NULL    ),      // decimal
                                             'takeProfit'  => array('takeprofit' , self ::T_FLOAT , self ::T_NULL    ),      // decimal
                                             'commission'  => array('commission' , self ::T_FLOAT , self ::T_NOT_NULL),      // decimal
                                             'swap'        => array('swap'       , self ::T_FLOAT , self ::T_NOT_NULL),      // decimal
                                             'profit'      => array('profit'     , self ::T_FLOAT , self ::T_NOT_NULL),      // decimal
                                             'magicNumber' => array('magicnumber', self ::T_INT   , self ::T_NULL    ),      // int
                                             'comment'     => array('comment'    , self ::T_STRING, self ::T_NULL    ),      // string
                                             'signal_id'   => array('signal_id'  , self ::T_INT   , self ::T_NOT_NULL),      // int
                                            ));
}
?>
