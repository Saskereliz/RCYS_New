
<?php echo $this->escaper->escapeHtml('<h1>Hello<h1>'); ?>
<?php echo $this->escaper->escapeHtml('<h1>Hello<h1>'); ?>


<?php echo trim('   hello   '); ?>


<?php echo strip_tags('<h1>Hello<h1>'); ?>


<?php echo addslashes('\'this is a string\''); ?>


<?php echo stripslashes('\\'this is a string\\''); ?>


<?php echo ucwords('hello'); ?>


<?php echo Phalcon\Text::lower('HELLO'); ?>


<?php echo Phalcon\Text::upper('hello'); ?>


<?php echo $this->length('robots'); ?>
<?php echo $this->length(array(1, 2, 3)); ?>


<?php echo nl2br('some\ntext'); ?>


<?php $sorted = $this->sort(array(3, 1, 2)); ?>


<?php $keys = array_keys(array('first' => 1, 'second' => 2, 'third' => 3)); ?>


<?php $joined = range('a', join('z', ',')); ?>


<?php echo sprintf('My real name is %s', $name); ?>


<?php $encoded = json_encode($robots); ?>


<?php $decoded = json_decode('{"one":1,"two":2,"three":3}'); ?>


<?php echo urlencode($post->permanent_link); ?>

