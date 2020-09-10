<?php echo validation_errors(); ?>

<?php echo form_open('tasks/submit');

echo "Title  :";
echo form_input('title',$title);
echo "<br>";

echo "Priority  :";
echo form_input('priority',$priority);
echo "<br>";

echo form_submit('submit','submit');

echo form_close();

?>