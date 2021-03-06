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
<?php
  $panel_data['panel_data'] = $view_data;
  switch ($this->session->userdata('login_type')) {
    case 'student':
      $this->load->view('panel/marks_table_view',$panel_data);
    break;
          
    case 'professor':
    $this->load->view('panel/professor_select_view',$panel_data);
    break;
  }
?>
      </section>
    </main>
  </body>
</html>
