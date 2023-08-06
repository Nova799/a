<!-- plugins:css -->
<link rel="stylesheet" href="../assets/css/bootstrap1.min.css">
<link rel="stylesheet" href="vendors/feather/feather.css">
<link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
<link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
<link rel="stylesheet" href="vendors/typicons/typicons.css">
<link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
<link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
<!-- endinject -->
<!-- Plugin css for this page -->
<link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
<link rel="stylesheet" href="js/select.dataTables.min.css">
<!-- End plugin css for this page -->
<!-- inject:css -->
<link rel="stylesheet" href="css/vertical-layout-light/style.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css">
<!-- endinject -->
<link rel="shortcut icon" href="images/logo_cinef.png">
<style type="text/css">
  .sidebar-dark .sidebar .nav:not(.sub-menu)>.nav-item .nav-link[aria-expanded="true"] {
    background: #008959;
    color: #ffffff;
  }

  .sidebar-dark .sidebar .nav.sub-menu {
    background: #008959;
  }

  /* Chart.js */
  @keyframes chartjs-render-animation {
    from {
      opacity: .99
    }

    to {
      opacity: 1
    }
  }

  .chartjs-render-monitor {
    animation: chartjs-render-animation 1ms
  }

  .chartjs-size-monitor,
  .chartjs-size-monitor-expand,
  .chartjs-size-monitor-shrink {
    position: absolute;
    direction: ltr;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    overflow: hidden;
    pointer-events: none;
    visibility: hidden;
    z-index: -1
  }

  .chartjs-size-monitor-expand>div {
    position: absolute;
    width: 1000000px;
    height: 1000000px;
    left: 0;
    top: 0
  }

  .chartjs-size-monitor-shrink>div {
    position: absolute;
    width: 200%;
    height: 200%;
    left: 0;
    top: 0
  }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css">
<style>
  #overview > div:nth-child(2) > div > div > div > form > div > div:nth-child(3) > div > div.note-toolbar.card-header > div.note-btn-group.btn-group.note-color > div > button.note-btn.btn.btn-light.btn-sm.note-current-color-button, 
  #overview > div:nth-child(2) > div > div > div > form > div > div:nth-child(3) > div > div.note-toolbar.card-header > div.note-btn-group.btn-group.note-font > button.note-btn.btn.btn-light.btn-sm.note-btn-bold, 
  #overview > div:nth-child(2) > div > div > div > form > div > div:nth-child(3) > div > div.note-toolbar.card-header > div.note-btn-group.btn-group.note-font > button.note-btn.btn.btn-light.btn-sm.note-btn-italic, 
  #overview > div:nth-child(2) > div > div > div > form > div > div:nth-child(3) > div > div.note-toolbar.card-header > div.note-btn-group.btn-group.note-font > button.note-btn.btn.btn-light.btn-sm.note-btn-underline, 
  #overview > div:nth-child(2) > div > div > div > form > div > div:nth-child(3) > div > div.note-toolbar.card-header > div.note-btn-group.btn-group.note-para > button:nth-child(1), 
  #overview > div:nth-child(2) > div > div > div > form > div > div:nth-child(3) > div > div.note-toolbar.card-header > div.note-btn-group.btn-group.note-para > button:nth-child(2){
  margin-right: 0px !important;
}

.note-btn:active, .note-btn.active {
            border: 1px solid !important;
            background: #050505 !important;
            color: #f5f5f5 !important;
        }
</style>