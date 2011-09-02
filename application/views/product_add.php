<h1><?php echo $title?></h1>
<?php
echo  Form::open('kohana31/index.php/article/add'.$id).
'<fieldset>'.
    '<legend>'.__('Uzupełnij pola',NULL,'pl-pl').'</legend>'.
            $msg.
            Form::label('name', __('nazwa produktu').':').
            Form::input('name', $data['name']).'<br />'.

            Form::label('category_id', __('kategoria').':').
            Form::select('category_id', $categorys, $data['category_id']).'<br />'.

            Form::label('unit', __('jednostki').':',array('style'=>'vertical-align: top')).
            Form::textarea('unit', $data['unit'], array('cols'=>'60','rows'=>'5')).'<br />'.

        '</fieldset>'.
        Form::submit('submit', __('Submit')).
        Form::close();
?>