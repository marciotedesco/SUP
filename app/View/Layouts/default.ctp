<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv=”content-type” content=”text/html; charset=UTF-8″ />
	<?php echo $this->Html->charset(); ?>
	<title><?php echo $title_for_layout; ?></title>
	<?php
		//echo $this->Html->css('cake.generic');
	?>

<!--[if IE 6]>
<script src="js/DD_belatedPNG_0.0.8a-min.js"></script>
<script>
  
  DD_belatedPNG.fix('#header');
  DD_belatedPNG.fix('.notification');
  DD_belatedPNG.fix('.submit');
  DD_belatedPNG.fix('#info');
  DD_belatedPNG.fix('.pngfix');
  
</script>
<![endif]--> 

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="/sup/js/scripts.js"></script>
<script type="text/javascript" src="/sup/js/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="/sup/js/facebox.js"></script>

<link href="/sup/css/facebox.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/sup/js/iepngfix_tilebg.js"></script>

<!-- MASTER STYLESHEET --> 
<link href="/sup/css/styles.css" rel="stylesheet" type="text/css" />

<!-- START THE MENU --> 
<script type="text/javascript">
	// initialise plugins
	jQuery(function(){	jQuery('ul.sf-menu').superfish();});
</script>

</head>

<body>
	<!--START HEADER  -->
    <div id="header">
    
      <div id="head_wrap" class="container_12">
            
        <!--START LOGO  --> 
        <div id="logo" class="grid_8">

			<h1><strong>SUP</strong> Sistema Unificado de Prontu&aacute;rios</h1>
        
        </div>
        <!-- END LOGO -->
        
        <!-- START USERPANEL --> 
        <div id="user_panel" class="grid_4">
          
            <ul>
            
                <li><a href="#"></a><font color="red"><?php echo $this->Session->read('Auth.User.username'); ?></font></li>
                <li><a href="/sup/users/logout">Sair</a></li>
                
            </ul>
            
			
		</div>
        <!-- END USERPANEL --> 
        
        <!--START NAVIGATION  -->
        <div id="nav" class="grid_9">
        
            <ul class="sf-menu">
            
                <!-- class "current" defines this as current page -->
                <li><a href="/sup/users/index"  class="current">Início</a></li>

				<li><a href="/sup/pacientes">Pacientes</a>
					<ul><li><a href="/sup/pacientes">Listar</a></li>
					<li><a href="/sup/pacientes/add">Adicionar</a></li>
					<li><a href="/sup/pacientes/viewpaciente">Meu Prontuário</a></li>
					</ul>
				</li>

				<li><a href="/sup/pacientes">Prontuários</a>
					<ul>
						<li><a href="/sup/consultas">Consultas</a>
							<ul><li><a href="/sup/consultas/add">Adicionar</a></li></ul>
						</li>

						<li><a href="/sup/exames">Exames</a>
							<ul><li><a href="/sup/exames/add">Adicionar</a></li></ul>
						</li>
						
						<li><a href="/sup/diagnosticos">Diagnósticos</a>
							<ul><li><a href="/sup/diagnosticos/add">Adicionar</a></li></ul>
						</li>
					</ul>
				</li>

				<li><a href="/sup/medicos">M&eacute;dicos</a>
					<ul>
						<li><a href="/sup/medicos">Listar</a></li>
						<li><a href="/sup/medicos/add">Adicionar</a></li>
					</ul>
				</li>
                
                <li><a href="/sup/instituicoes">Instituições</a>
					<ul>
						<li><a href="/sup/instituicoes">Listar</a></li>
						<li><a href="/sup/instituicoes/add">Adicionar</a></li>
					</ul>
				</li>
            
				<li><a href="#">Administrativo</a>
					<ul>
						<li><a href="#">Administradores</a>
							<ul>
								<li><a href="/sup/administradores">Listar</a></li>
								<li><a href="/sup/administradores/add">Adicionar</a></li>
							</ul>
						</li>
						<li><a href="#">Usuários</a>
							<ul>
								<li><a href="/sup/users/listar">Listar</a></li>
								<li><a href="/sup/users/add">Adicionar</a></li>
							</ul>
						</li>
						
						<li><a href="/sup/cartoes/index">Segunda Via</a>
							<ul>
								<li><a href="/sup/cartoes/add">Solicitar</a></li>
								<li><a href="/sup/cartoes/index">Vizualizar solicitações</a></li>
							</ul>
						</li>
					</ul>
				</li>
				
            </ul> 
            
      </div>
      <!-- END NAV -->
       
    </div>
    <!-- END HEAD_WRAP (CONTAINER FOR LOGO AND NAVIGATION -->
    
    </div>
    <!--END HEADER (FULLL WIDTH WRAPPER WITH BG) -->

    <!--START CONTENT  -->
    <div id="content" class="container_12">

		<?php echo $this->Session->flash(); ?>
		<?php echo $this->Session->flash('auth'); ?>

		<?php echo $this->fetch('content'); ?>
  
		<!-- START FOOTER -->
		<div id="footer" class="grid_12">
			<p>&copy; Copyright 2012 SUP | <a href="#">Topo</a></p>
		</div>
		<!-- END FOOTER -->  

		<div id="debug" class="grid_12">
			<hr><?php echo $this->element('sql_dump'); ?>
		</div>

	</div>
	<!-- END CONTENT -->

</body>
</html>
