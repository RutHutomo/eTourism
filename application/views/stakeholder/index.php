
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?=$title?> | E-Tourism</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

   <!-- Bootstrap Core Css -->
    <link href="<?=base_url('templates/stakeholder/plugins/bootstrap/css/bootstrap.css')?>" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?=base_url('templates/stakeholder/plugins/node-waves/waves.css')?>" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?=base_url('templates/stakeholder/plugins/animate-css/animate.css')?>" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="<?=base_url('templates/stakeholder/plugins/morrisjs/morris.css')?>" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?=base_url('templates/stakeholder/css/style.css')?>" rel="stylesheet">


    <!-- Bootstrap Select Css -->
    <link href="<?=base_url('templates/stakeholder/plugins/bootstrap-select/css/bootstrap-select.css')?>" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="<?=base_url('templates/stakeholder/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')?>" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?=base_url('templates/stakeholder/css/themes/all-themes.css')?>" rel="stylesheet" />



    <!-- Sweetalert Css -->
    <link href="<?=base_url('templates/stakeholder/plugins/sweetalert/sweetalert.css')?>" rel="stylesheet" />
</head>

<body class="theme-deep-purple">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">E-TOURISM - STAKEHOLDER</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?=base_url('templates/public/images/logo.png')?>" width="48" height="48" alt="Logo" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$user?></div>
                    <div class="email"><?=$stakeholder?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?=base_url('logout')?>"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="<?=base_url('stakeholder/'.$this->uri->segment(2).'')?>">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="header">DATA MASTER</li>
                    <?php if($stakeholder == "Government"){?>
                    <li>
                        <a href="<?=base_url('stakeholder/'.$this->uri->segment(2).'/DataPariwisata')?>">
                            <i class="material-icons">dns</i>
                            <span>Data Pariwisata</span>
                        </a>
                    </li>
                <?php } ?>
                    <li>
                        <a href="<?=base_url('stakeholder/'.$this->uri->segment(2).'/Complaint')?>">
                            <i class="material-icons">report_problem</i>
                            <span>Complaint</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; <?=date("Y");?> <a href="javascript:void(0);">E-Tourism</a>.
                </div>
                <div class="version">
                    <b>Version</b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2><?=$bread?></h2>
            </div>

            <!-- Widgets -->
            <?php $this->load->view($content)?>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="<?=base_url('templates/stakeholder/plugins/jquery/jquery.min.js')?>"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?=base_url('templates/stakeholder/plugins/bootstrap/js/bootstrap.js')?>"></script>

    <!-- Select Plugin Js -->
    <script src="<?=base_url('templates/stakeholder/plugins/bootstrap-select/js/bootstrap-select.js')?>"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?=base_url('templates/stakeholder/plugins/jquery-slimscroll/jquery.slimscroll.js')?>"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?=base_url('templates/stakeholder/plugins/node-waves/waves.js')?>"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="<?=base_url('templates/stakeholder/plugins/jquery-countto/jquery.countTo.js')?>"></script>

    <!-- Morris Plugin Js -->
    <script src="<?=base_url('templates/stakeholder/plugins/raphael/raphael.min.js')?>"></script>
    <script src="<?=base_url('templates/stakeholder/plugins/morrisjs/morris.js')?>"></script>

    <!-- ChartJs -->
    <script src="<?=base_url('templates/stakeholder/plugins/chartjs/Chart.bundle.js')?>"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="<?=base_url('templates/stakeholder/plugins/flot-charts/jquery.flot.js')?>"></script>
    <script src="<?=base_url('templates/stakeholder/plugins/flot-charts/jquery.flot.resize.js')?>"></script>
    <script src="<?=base_url('templates/stakeholder/plugins/flot-charts/jquery.flot.pie.js')?>"></script>
    <script src="<?=base_url('templates/stakeholder/plugins/flot-charts/jquery.flot.categories.js')?>"></script>
    <script src="<?=base_url('templates/stakeholder/plugins/flot-charts/jquery.flot.time.js')?>"></script>

    <!-- Custom Js -->
    <script src="<?=base_url('templates/stakeholder/js/admin.js')?>"></script>

    <script src="<?=base_url('templates/stakeholder/js/pages/tables/jquery-datatable.js')?>"></script>


    <!-- Select Plugin Js -->
    <script src="<?=base_url('templates/stakeholder/plugins/bootstrap-select/js/bootstrap-select.js')?>"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="<?=base_url('templates/stakeholder/plugins/jquery-datatable/jquery.dataTables.js')?>"></script>
    <script src="<?=base_url('templates/stakeholder/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')?>"></script>
    <script src="<?=base_url('templates/stakeholder/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')?>"></script>
    <script src="<?=base_url('templates/stakeholder/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')?>"></script>
    <script src="<?=base_url('templates/stakeholder/plugins/jquery-datatable/extensions/export/jszip.min.js')?>"></script>
    <script src="<?=base_url('templates/stakeholder/plugins/jquery-datatable/extensions/export/pdfmake.min.js')?>"></script>
    <script src="<?=base_url('templates/stakeholder/plugins/jquery-datatable/extensions/export/vfs_fonts.js')?>"></script>
    <script src="<?=base_url('templates/stakeholder/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')?>"></script>
    <script src="<?=base_url('templates/stakeholder/plugins/jquery-datatable/extensions/export/buttons.print.min.js')?>"></script>


    <!-- Demo Js -->
    <script src="<?=base_url('templates/stakeholder/js/demo.js')?>"></script>


    <!-- SweetAlert Plugin Js -->
    <script src="<?=base_url('templates/stakeholder/plugins/sweetalert/sweetalert.min.js')?>"></script>
    <script type="text/javascript">

         var host = window.location.protocol+"//"+location.host;
        $(document).on('click', '.detail-complaint',function()
        {
            var data = {id: $(this).attr('data')};

            $.ajax({
                url: host+"/e-tourism/detailcomplaint",
                data: data,
                type: 'post',
                success: function(response)
                {

                    $('#modal-complaint').modal('show');
                    $('.isi-complaint').html(response);
                }
            })
        })

        $(document).on('click', '.add',function()
        {
            $('#modal-tambah-pariwisata').modal('show');
        })

        $(document).on('click','.simpan-pariwisata', function()
        {
            var data = $('#form-pariwisata').serialize();

            $.ajax({
                url: host+"/e-tourism/simpan",
                data: data,
                type: 'post',
                success: function(res)
                {
                    if (res == "Sukses") 
                    {
                        location.reload();
                    }
                }
            })
        })

        $(document).on('click', '.btn-delete',function()
        {
            var data = {id: $(this).attr('data')};
            swal({
                title: "Apakah anda yakin?",
                text: "Anda akan menghapus data berikut!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            }, function () {
                $.ajax({
                    url: host+"/e-tourism/delete",
                    data: data,
                    type: 'post',
                    success: function(response)
                    {
                        if (response == "Berhasil") 
                        {
                            setTimeout(function () { swal("Deleted!", "Your imaginary file has been deleted.", "success")},2000);
                            location.reload();
                        }
                    }
                })
            });
        })

        
    </script>
</body>

</html>
