<div class="panel_content">
  <section class="teacher_classes">
    <header class="marks_panel_header">
      <h1 class="marks_panel_heading">Gestion Des Notes</h1>
    </header>

    <div class="form-group">
<?php
$form_attributes = array(
  'class'=>'form-group',
  'id' => 'class_select'
);
$submit_attributes = array(
  'class'=>'classes_select_btn',
  'type'=>'submit',
  'value'=>'Liste des matieres'
);
echo form_open('dashboard/listes',$form_attributes);
?>
      <select class="form-control" name="class_id">
<?php
foreach ($panel_data as $one_data) {
echo '<option value='.$one_data->class_id.'>'.$one_data->class_name.'</option>';
}
echo form_input($submit_attributes);
?>
      </select>
<?php

echo form_close();
?>
    </div>
  </section>

</div>
