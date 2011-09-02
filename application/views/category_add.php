<h1><?php echo $title?></h1>
<?php
echo  Form::open('kohana31/index.php/category/add'.$id).
'<fieldset>'.
    '<legend>'.__('Uzupełnij pola',NULL,'pl-pl').'</legend>'.
            $msg.
            Form::label('name', __('nazwa kategorii').':').
            Form::input('name', $data['name']).'<br />'.

        '</fieldset>'.
        Form::submit('submit', __('Submit')).
        Form::close();
?>