<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Product extends Controller_Default {
     public function action_index() {
        $this->template->title = __('Product');
        $this->template->content='product';
        $products=ORM::factory('product')->find_all();
        $this->template->products=$products;
    }

    public function action_add($id=NULL) {
        $this->template->title = __('Add product');
        $this->template->content='product_add';
        $this->template->msg='';
        $this->template->categorys=ORM::factory('category')->find_all()->as_array('id','name');
        $this->template->id=isset($id) ? '/'.$id : '';
                
        if(isset($_POST['submit'])){
            $data=$_POST;
            $product=ORM::factory('product', isset($id) ? $id : NULL);
            $product->name=$data['name'];
            $product->category_id=$data['category_id'];
            $product->unit=$data['unit'];
//						$product->price=$data['price'];
            $product->date=date('Y-m-d H:i:s');
            $product->save();
            $this->template->msg='<p class="green">'.(!isset($id) ? __('Dodawanie zakończone powodzeniem',NULL,'pl-pl') : __('Edycja zakończona powodzeniem',NULL,'pl-pl')).'</p>' ;
            unset($_POST);
        }
        
        $input=array('name', 'category_id', 'unit', 'date');
        if(!isset($data)&&(isset($id))){
            $this->template->title=__('Edit product');
             $device=ORM::factory('product',$id);
             foreach($input as $in){
                $data[$in]=$device->$in;
                }
             $this->template->data=$data;
         }elseif(!isset($_POST['submit'])){
            foreach($input as $in){
                $data[$in]='';
                }
            $this->template->data=$data;
        }
    }
}
?>
