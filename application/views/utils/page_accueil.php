<html lang="en" class=" "><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CAMPLAN | Accueil </title>

    <!-- Bootstrap core CSS -->

    <link href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>asset/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="<?php echo base_url(); ?>asset/css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/icheck/flat/green.css" rel="stylesheet">
    <!-- editor -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/editor/external/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/editor/index.css" rel="stylesheet">
    <!-- select2 -->
    <link href="<?php echo base_url(); ?>asset/css/select/select2.min.css" rel="stylesheet">
    <!-- switchery -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/switchery/switchery.min.css" />

    <script src="<?php echo base_url(); ?>asset/js/jquery.min.js"></script>

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            
            <!-- page content -->
            <div class="right_col" role="main">
			<div class="">
                    
                            <div class="clearfix"></div>
                            <!-- Home Section -->
                            <section id="home" class="tt-fullHeight" data-stellar-vertical-offset="50" data-stellar-background-ratio="0.2" style="height: 500px; background-position: 50% 0px;">
                                    <div class="intro">
                                    <div class="intro-sub">BIENVENU SUR</div>
                                    <h1><small>CAMTELPLAN<span> Planification des permanences et des astreintes</small> </span></h1>
                                    <?php if($error!=null) echo'<div class="alert alert-dismissable alert-danger">Veuillez renseigner un mot clé et une ville SVP! Ces champs sont obligatoires pour une bonne recherche</div>'; ?>
                                    <form class="form-horizontal form-label-left input_mask" method="POST" action="<?php echo base_url(); ?>utilisateur/filtre1">

                                        <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control" name="mc" id="autocomplete-custom-append" placeholder="Mot clé (Ex: Fibre Optique, réseau, internet)" style="float: left; height:60px;"/>
                                            <div id="autocomplete-container" style="position: relative; float: left; width: 400px; margin: 10px;"></div>
                                        </div>

                                        <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control" name="ville" id="autocomplete-custom-append2" placeholder="Où? (Ex: Yaoundé)" style="height:60px;">
                                            <!--<span class="fa fa-user fa-5x form-control-feedback right" aria-hidden="true"></span>-->
                                            <div id="autocomplete-container2" style="position: relative; float: left; width: 400px; margin: 10px;"></div>
                                        </div>

                                        <div class="col-md-1 col-sm-6 col-xs-6 form-group has-feedback" >
                                        <button type="submit" class="btn btn-success fa fa-search fa-3x" style="height:60px; width:80px"></button>
                                        
                                        </div>
                                        
                                        <div class="col-md-1 col-sm-6 col-xs-6 form-group has-feedback" >
                                       
                                        <a href="<?php echo base_url(); ?>utilisateur/recherche_a" style="color:white;">Recherche avancée</a>
                                        </div>
                                        
                                     </form>

                                    </div>
                            </section><!-- End Home Section -->
                        </div>
                
                
                <!--row-->
                <div class="row">
                    <div class="clo-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-xs-2 col-md-2">
                                    <img src="<?php echo base_url(); ?>asset/images/calendrier.jpg" class="img-circle img-responsive" alt="" /></div>
                                <div class="col-xs-10 col-md-10">
                                    <div>
                                        <a >
                                            Consultez le planning de permanence du personnel de CAMTEL</a>
                                        <div class="mic-info">
                                            Où que vous soyez, qui que vous soyez, consultez les calendriers de permanence
                                        </div>
                                    </div>
                                    
                                    <div class="action">
                                        <button type="button" class="btn btn-primary " title="en savoir plus">
                                            <span class="fa fa-eye"></span> En savoir plus
                                        </button>
                                        
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-xs-2 col-md-2">
                                    <img src="<?php echo base_url(); ?>asset/images/calendrier.jpg" class="img-circle img-responsive" alt="" /></div>
                                <div class="col-xs-10 col-md-10">
                                    <div>
                                        <a >
                                            Consultez le planning de permanence du personnel de CAMTEL</a>
                                        <div class="mic-info">
                                            Où que vous soyez, qui que vous soyez, consultez les calendriers de permanence
                                        </div>
                                    </div>
                                    
                                    <div class="action">
                                        <button type="button" class="btn btn-primary " title="en savoir plus">
                                            <span class="fa fa-eye"></span> En savoir plus
                                        </button>
                                        
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    </div>
                    
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <span class="glyphicon glyphicon-phone-alt"></span> Numéros urgents</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        
                                        <div class="col-xs-12 col-md-6">
                                          <a href="#" class="btn btn-success btn-lg" role="button"><span class="fa fa-phone"></span> <br/>+237243568958</a>
                                          <a href="#" class="btn btn-info btn-lg" role="button"><span class="fa fa-phone"></span> <br/>+237222254589</a>
                                          <a href="#" class="btn btn-primary btn-lg" role="button"><span class="fa fa-phone"></span> <br/>+237243568596</a>
                                          
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <img src="<?php echo base_url(); ?>asset/images/urgence.jpg"/>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                <!--end row-->
                
                <!-- footer content -->
			<div class="row">
                            <footer>
                                <div class="">
                                    <p class="pull-right">Gestion des planning et des astreintes. By <a>Cameroon telecommunications Sept 2016</a>. |
                                        <span class="lead"> <i class="fa fa-phone"></i> CAMTEL</span>
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </footer>
                            <!-- /footer content -->
                        </div>
			
			<div class="modal fade info_perso" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">

						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
							</button>
							<h4 class="modal-title" id="myModalLabel2">Informations du personnel</h4>
						</div>
						<div class="modal-body">
							<h4>Aucune pour le moment</h4>
							<p></p>
							<p></p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
							<!--<button type="button" class="btn btn-primary">Save changes</button>-->
						</div>

					</div>
				</div>
			</div>
                
                <div id="NewPerm" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel"><span style="color:rgb(0,132,232);"> Ajout d'une permanence</span></h4>
                            </div>

                            <div class="modal-body">
                                <?php 
                                    include('form/ajout_perm.php'); 
                                    /*switch($context['indicatif']){
                                        case "departement": include('form/ajout_perm_cd.php'); 
                                            break; 
                                        case "service": include('form/ajout_perm_cs.php'); 
                                            break; 
                                        case "direction": include('form/ajout_perm_dir.php'); 
                                            break; 
                                        default:echo 'error';
                                    }*/
                                ?>
                                <div class="modal-footer">
                                   <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Fermer</button>

                               </div>
                            </div>

                        </div>
                    </div>
                </div>
                
                <div id="UpdatePerm" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel"><span style="color:rgb(0,132,232);"> Modification d'une permanence</span></h4>
                            </div>

                            <div class="modal-body">
                                <?php 
                                    include('form/update_perm.php');   
                                ?>
                                <div class="modal-footer">
                                   <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Fermer</button>

                               </div>
                            </div>

                        </div>
                    </div>
                </div>
                
                <div id="SupprPerm" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel"><span style="color:rgb(0,132,232);"> Voulez-vous vraiment supprimer?</span></h4>
                            </div>

                            <div class="modal-body">
                                <?php 
                                    include('form/suppr_perm.php');   
                                ?>
                                <div class="modal-footer">
                                   <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Fermer</button>

                               </div>
                            </div>

                        </div>
                    </div>
                </div>
            <!-- /page content -->

    <!--<div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>-->

    <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>

        <!-- chart js -->
        <script src="<?php echo base_url(); ?>asset/js/chartjs/chart.min.js"></script>
        <!-- bootstrap progress js -->
        <script src="<?php echo base_url(); ?>asset/js/progressbar/bootstrap-progressbar.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/js/nicescroll/jquery.nicescroll.min.js"></script>
        <!-- icheck -->
        <script src="<?php echo base_url(); ?>asset/js/icheck/icheck.min.js"></script>
        <!-- tags -->
        <script src="<?php echo base_url(); ?>asset/js/tags/jquery.tagsinput.min.js"></script>
        <!-- switchery -->
        <script src="<?php echo base_url(); ?>asset/js/switchery/switchery.min.js"></script>
        <!-- daterangepicker -->
        <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/moment.min2.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/datepicker/daterangepicker.js"></script>
        <!-- richtext editor -->
        <script src="<?php echo base_url(); ?>asset/js/editor/bootstrap-wysiwyg.js"></script>
        <script src="<?php echo base_url(); ?>asset/js/editor/external/jquery.hotkeys.js"></script>
        <script src="<?php echo base_url(); ?>asset/js/editor/external/google-code-prettify/prettify.js"></script>
        <!-- select2 -->
        <script src="<?php echo base_url(); ?>asset/js/select/select2.full.js"></script>
        <!-- form validation -->
        <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/parsley/parsley.min.js"></script>
        <!-- textarea resize -->
        <script src="<?php echo base_url(); ?>asset/js/textarea/autosize.min.js"></script>
        <script>
            autosize($('.resizable_textarea'));
        </script>
        <!-- Autocomplete -->
        <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/autocomplete/villes.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/autocomplete/keyword.js"></script>
        <!--<script type="text/javascript" src="<?php //echo base_url(); ?>asset/js/autocomplete/countries.js"></script>-->
        <script src="<?php echo base_url(); ?>asset/js/autocomplete/jquery.autocomplete.js"></script>
        <script type="text/javascript">
            $(function () {
                'use strict';
                var keywordArray = $.map(keywords, function (value, key) {
                    return {
                        value: value,
                        data: key
                    };
                });
                // Initialize autocomplete with custom appendTo:
                $('#autocomplete-custom-append').autocomplete({
                    lookup: keywordArray,
                    appendTo: '#autocomplete-container'
                });
            });
        </script>
        
        <script type="text/javascript">
            $(function () {
                'use strict';
                var villesArray = $.map(villes, function (value, key) {
                    return {
                        value: value,
                        data: key
                    };
                });
                // Initialize autocomplete with custom appendTo:
                $('#autocomplete-custom-append2').autocomplete({
                    lookup: villesArray,
                    appendTo: '#autocomplete-container2'
                });
            });
        </script>
        <script src="<?php echo base_url(); ?>asset/js/custom.js"></script>


        <!-- select2 -->
        <script>
            $(document).ready(function () {
                $(".select2_single").select2({
                    placeholder: "Select a state",
                    allowClear: true
                });
                $(".select2_group").select2({});
                $(".select2_multiple").select2({
                    maximumSelectionLength: 4,
                    placeholder: "With Max Selection limit 4",
                    allowClear: true
                });
            });
        </script>
        <!-- /select2 -->
        <!-- input tags -->
        <script>
            function onAddTag(tag) {
                alert("Added a tag: " + tag);
            }

            function onRemoveTag(tag) {
                alert("Removed a tag: " + tag);
            }

            function onChangeTag(input, tag) {
                alert("Changed a tag: " + tag);
            }

            $(function () {
                $('#tags_1').tagsInput({
                    width: 'auto'
                });
            });
        </script>
        <!-- /input tags -->
        <!-- form validation -->
        <script type="text/javascript">
            $(document).ready(function () {
                $.listen('parsley:field:validate', function () {
                    validateFront();
                });
                $('#demo-form .btn').on('click', function () {
                    $('#demo-form').parsley().validate();
                    validateFront();
                });
                var validateFront = function () {
                    if (true === $('#demo-form').parsley().isValid()) {
                        $('.bs-callout-info').removeClass('hidden');
                        $('.bs-callout-warning').addClass('hidden');
                    } else {
                        $('.bs-callout-info').addClass('hidden');
                        $('.bs-callout-warning').removeClass('hidden');
                    }
                };
            });

            $(document).ready(function () {
                $.listen('parsley:field:validate', function () {
                    validateFront();
                });
                $('#demo-form2 .btn').on('click', function () {
                    $('#demo-form2').parsley().validate();
                    validateFront();
                });
                var validateFront = function () {
                    if (true === $('#demo-form2').parsley().isValid()) {
                        $('.bs-callout-info').removeClass('hidden');
                        $('.bs-callout-warning').addClass('hidden');
                    } else {
                        $('.bs-callout-info').addClass('hidden');
                        $('.bs-callout-warning').removeClass('hidden');
                    }
                };
            });
            try {
                hljs.initHighlightingOnLoad();
            } catch (err) {}
        </script>
        <!-- /form validation -->
        <!-- editor -->
        <script>
            $(document).ready(function () {
                $('.xcxc').click(function () {
                    $('#descr').val($('#editor').html());
                });
            });

            $(function () {
                function initToolbarBootstrapBindings() {
                    var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
                'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
                'Times New Roman', 'Verdana'],
                        fontTarget = $('[title=Font]').siblings('.dropdown-menu');
                    $.each(fonts, function (idx, fontName) {
                        fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
                    });
                    $('a[title]').tooltip({
                        container: 'body'
                    });
                    $('.dropdown-menu input').click(function () {
                            return false;
                        })
                        .change(function () {
                            $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
                        })
                        .keydown('esc', function () {
                            this.value = '';
                            $(this).change();
                        });

                    $('[data-role=magic-overlay]').each(function () {
                        var overlay = $(this),
                            target = $(overlay.data('target'));
                        overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
                    });
                    if ("onwebkitspeechchange" in document.createElement("input")) {
                        var editorOffset = $('#editor').offset();
                        $('#voiceBtn').css('position', 'absolute').offset({
                            top: editorOffset.top,
                            left: editorOffset.left + $('#editor').innerWidth() - 35
                        });
                    } else {
                        $('#voiceBtn').hide();
                    }
                };

                function showErrorAlert(reason, detail) {
                    var msg = '';
                    if (reason === 'unsupported-file-type') {
                        msg = "Unsupported format " + detail;
                    } else {
                        console.log("error uploading file", reason, detail);
                    }
                    $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
                };
                initToolbarBootstrapBindings();
                $('#editor').wysiwyg({
                    fileUploadError: showErrorAlert
                });
                window.prettyPrint && prettyPrint();
            });
        </script>
        <!-- /editor -->
		
		<!-- Datatables -->
        <script src="<?php echo base_url(); ?>asset/js/datatables/js/jquery.dataTables.js"></script>
        <script src="<?php echo base_url(); ?>asset/js/datatables/tools/js/dataTables.tableTools.js"></script>
        <script>
            $(document).ready(function () {
                $('input.tableflat').iCheck({
                    checkboxClass: 'icheckbox_flat-green',
                    radioClass: 'iradio_flat-green'
                });
            });

            var asInitVals = new Array();
            $(document).ready(function () {
                var oTable = $('#example').dataTable({
                    "oLanguage": {
                        "sSearch": "Rechercher un nom:"
                    },
                    "aoColumnDefs": [
                        {
                            'bSortable': false,
                            'aTargets': [0]
                        } //disables sorting for column one
            ],
                    'iDisplayLength': 12,
                    "sPaginationType": "full_numbers",
                    "dom": 'T<"clear">lfrtip'
                    
                });
                $("tfoot input").keyup(function () {
                    /* Filter on the column based on the index of this element's parent <th> */
                    oTable.fnFilter(this.value, $("tfoot th").index($(this).parent()));
                });
                $("tfoot input").each(function (i) {
                    asInitVals[i] = this.value;
                });
                $("tfoot input").focus(function () {
                    if (this.className == "search_init") {
                        this.className = "";
                        this.value = "";
                    }
                });
                $("tfoot input").blur(function (i) {
                    if (this.value == "") {
                        this.className = "search_init";
                        this.value = asInitVals[$("tfoot input").index(this)];
                    }
                });
            });
        </script>
        
        <!--script ajax de changement des valeurs dans un formulaire en fonction du choix des autres select-->
        <script>
            /*$("#select1").change(function() {
                if ($(this).data('options') == undefined) {
                  //Taking an array of all options-2 and kind of embedding it on the select1
                  $(this).data('options', $('#select2 option').clone());
                }
                var id = $(this).val();
                var options = $(this).data('options').filter('[value=' + id + ']');
                $('#select2').html(options);
              });*/
        </script>
        
        <!--------------------------------------COMMENT AVOIR LA VALEUR D'UNE LIGNE DE TABLE SELECTIONNEE---------------------->
        <script>
            $('.voir').click(function(){
            var row = $(this).closest('tr');
                cells = row.find('td');
                id = cells.eq(1).html();
                
                //j'appel la page en lui passant en parametre l'id de la permanence------------------------
                window.location = <?php echo base_url(); ?>'responsable/permanences/' + id;
            });
        </script>
        
        <script>
            $('.edition').click(function(){
            var row = $(this).closest('tr');
                cells = row.find('td');
                id = cells.eq(1).html();
                libelle = cells.eq(2).html();
                
                //$(e.currentTarget).find('input[name="bookId"]').val(bookId);
                $(".identifiant").val(id);
                $(".lib").val(libelle);
                
                $('#UpdatePerm').modal('show'); 
            });
        </script>
        
        <script>
            $('.suppr').click(function(){
            var row = $(this).closest('tr');
                cells = row.find('td');
                id = cells.eq(1).html();
                libelle = cells.eq(2).html();
                
                //$(e.currentTarget).find('input[name="bookId"]').val(bookId);
                $(".identifiant").val(id);
                $(".lib").val(libelle);
                
                $('#SupprPerm').modal('show'); 
            });
        </script>
        
    </body>
</html>