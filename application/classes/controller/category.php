<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Category extends Controller_Default {
     public function action_index() {
        $this->template->title = __('Category');
        $this->template->content='category';
        $categories=ORM::factory('category')->find_all();
        $this->template->categories=$categories;
    }

    public function action_add($id=NULL) {
        $this->template->title = __('Add category');
        $this->template->content='category_add';
        $this->template->msg='';
        $this->template->categories=ORM::factory('category')->find_all()->as_array('id','name');
        $this->template->id=isset($id) ? '/'.$id : '';
                
        if(isset($_POST['submit'])){
            $data=$_POST;
            $category=ORM::factory('category', isset($id) ? $id : NULL);
            $category->name=$data['name'];
/*            $category->category_id=$data['category_id'];
            $category->unit=$data['unit'];
						$category->price=$data['price'];
            $category->date=date('Y-m-d H:i:s');		*/
            $category->save();
            $this->template->msg='<p class="green">'.(!isset($id) ? __('Dodawanie zakończone powodzeniem',NULL,'pl-pl') : __('Edycja zakończona powodzeniem',NULL,'pl-pl')).'</p>' ;
            unset($_POST);
        }
        
        $input=array('id', 'name');
        if(!isset($data)&&(isset($id))){
            $this->template->title=__('Edit category');
             $device=ORM::factory('category',$id);
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
