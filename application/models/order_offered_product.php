/* -*- php -*- */

/* many to many */ 

class Order_offered_product extends CI_Model {
  var $offered_product;
  var $order;

  var $quantity;

  function __construct()
  {
    parent::__construct();
  }

};
