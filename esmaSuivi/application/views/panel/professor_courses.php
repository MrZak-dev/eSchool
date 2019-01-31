<!DOCTYPE html>
<html>
  <head>
    <title>Accueil</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/css_libraries/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/css_libraries/font-awesome.min.css">
    <link rel="stylesheet"  type="text/css" href="<?php echo base_url() ?>assets/css/master.css"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.js"></script>
    <meta name="viewport" contant="width=device-width,initial-scale=1"/>
  </head>
  <body>
    <main class="dashboard_container">
      <header class="panel_header">
        <div class="panel_logo">

        </div>
        <div class="panel_ntg">

        </div>
        <div class="panel_personal_info">
          <span class="user_name"><?php  echo $this->session->userdata('user_name'); ?></span>
          <span class="log_out_icon"><a href="../"><i class="fa fa-1x fa-power-off "></i></a></span>
        </div>
      </header>
      <aside class="panel_menu_container">
          <div class="panel_menu">
            <ul class="menu_list">
              <li>
                <a href="#">
                  <i class="fa fa-4x fa-home"></i>
                  <label>ACCUEIL</label>
                </a>
              </li>
              <li class="active">
                <a href="#">
                  <i class="fa fa-4x fa-table"></i>
                  <label>GESTION DU NOTES</label>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-4x fa-user-circle"></i>
                  <label>DONNEES PERSONEL</label>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-4x fa-cog"></i>
                  <label>PARAMETRES</label>
                </a>
              </li>
            </ul>
          </div>
      </aside>
      <section class="panel_content_container">
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
  'value'=>'Valider'
);
$test_mark_att = array(
  'class'=>'mark',
  'type'=>'text',
  'name'=>'test_mark'
);
$exam_mark_att = array(
  'class'=>'mark',
  'type'=>'text',
  'name'=>'exam_mark'
);
$rat_mark_att = array(
  'class'=>'mark',
  'type'=>'text',
  'name'=>'ratt_mark'
);
echo form_open('dashboard/insert',$form_attributes);
?>
      <select class="form-control" name="course_id">
<?php
foreach ($courses as $course) {
echo '<option value='.$course->course_id.'>'.$course->course_name.'</option>';
}
?>
      </select>
<!--Students list-->

      <select class="form-control" name="student_id">
<?php
foreach ($students as $student) {
echo '<option value='.$student->student_id.'>'.$student->student_name.'</option>';
}
?>
      </select>

<?php
echo form_label("Control : ");
echo form_input($test_mark_att);

echo form_label("Examen : ");
echo form_input($exam_mark_att);

echo form_label("Rattrapage : ");
echo form_input($rat_mark_att);

echo form_input($submit_attributes);
echo form_close();

?>
    </div>
  </section>
</div>
      </section>
    </main>
  </body>
</html>
