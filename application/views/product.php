<h1><?php echo $title?></h1>
<p><a href="/kohana31/index.php/product/add">Dodaj produkt</a></p>
<?php foreach ($products as $product){
    echo '<h2><a href="/kohana31/index.php/product/add/'.$product->id.'">'.$product->name.'</a></h2>'.
            '<p><strong>Dodał: </strong>'.$product->category->name.' <strong>dnia</strong> '.$product->date.'</p>'.
            '<p>'.$product->content.'</p>';
}?>
