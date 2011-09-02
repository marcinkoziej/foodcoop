<h1><?php echo $title?></h1>

<p><a href="/kohana31/index.php/category/add">Dodaj produkt</a></p>

<?php foreach ($categories as $category){

    echo '<h2><a href="/kohana31/index.php/category/add/'.$category->id.'">'.$category->name.'</a></h2>'.
		
            '<p><strong>Dodał: </strong>'.$category->category->name.' <strong>dnia</strong> '.$category->id.'</p>'.
						
            '<p>'.$category->content.'</p>';
}?>
