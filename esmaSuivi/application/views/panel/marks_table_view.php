<div class="panel_content">
  <header class="marks_panel_header">
    <h1 class="marks_panel_heading">Gestion Des Notes</h1>
  </header>
  <section class="marks_table">
    <table>
      <thead>
        <tr>
          <th rowspan="2">Matiéres</th>
          <th colspan="3">Semestre 1</th>
          <!--<th colspan="3">Semestre 2</th>-->
        </tr>
        <tr>
          <th>Controle</th>
          <th>Examen</th>
          <th>Rattrapage</th>
        <!--  <th>Controle</th>
          <th>Examen</th>
          <th>Rattrapage</th>-->
        <tr>
      </thead>
      <tbody>
        <?php
            foreach ($panel_data as $data_column) {
              echo '
              <tr class="data_row">
                <td class="course_name">'.$data_column->course_name.'</td>
                <td class="test_mark">'.$data_column->test_mark.'</td>
                <td class="exam_mark">'.$data_column->exam_mark.'</td>
                <td class="rat_mark">'.$data_column->ratt_mark.'</td>
              </tr>
              ';
            }
         ?>
      </tbody>
    </table>
  </section>


</div>
