<?php include 'header.php'; ?>

<!--
<div class="jumbotron">
	<h1 class="text-center">Monitor</h1>
</div>

-->

<!-- <h2 class="text-center">Filtrar Por Estados</h2> -->

<!-- <div class="text-center">
  <button class="btn"> Mostrar Todos</button>
  <button class="btn"> Normal</button>
  <button class="btn"> Alarmados</button>
  <button class="btn"> Desconectados</button>
</div> -->


<p> </p>
        <div class="">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                    
                    <?php 
                    $tab1 = "SN03";
                    ?>
						<div id="prueba<?php echo $tab1; ?>" class="col-md-3">
                            <div class="card">
                                <div class="card-header" id="<?php echo $tab1; ?>_alert" data-background-color=" ">
                                    <h4 class="text-center title" id="<?php echo $tab1; ?>_nombre"><?php echo $tab1; ?></h4>
                                    <p class="text-center category" id="<?php echo $tab1; ?>_tiempo">Estado del Servidor</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead  class="text-primary">
                                            <th>Server</th>
                                            <th>Estatus</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Uso CPU</td>
                                                <td  id="<?php echo $tab1; ?>_cpu_load" class="text-primary">0</td>
                                            </tr>
                                            <!-- <tr>
                                                <td>Mem Usada</td>
                                                <td id="<?php echo $tab1; ?>_used" class="text-primary">0</td>
                                            </tr> -->
                                            <tr>
                                                <td>Mem Total %</td>
                                                <td id="<?php echo $tab1; ?>_total" class="text-primary">0</td>
                                            </tr>
                                            <tr>
                                                <td>Mem Usada %</td>
                                                <td id="<?php echo $tab1; ?>_percent" class="text-primary">0</td>
                                            </tr>
											<tr>
                                                <td>Carga Cores</td>
                                                <td id="<?php echo $tab1; ?>_load_total" class="text-primary">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
						
						
					<?php 
                    $tab2 = "SP14";
                    ?>
						<div id="prueba<?php echo $tab2; ?>" class="col-md-3">
                            <div class="card">
                                <div class="card-header" id="<?php echo $tab2; ?>_alert" data-background-color=" ">
                                    <h4 class="text-center title" id="<?php echo $tab2; ?>_nombre"><?php echo $tab2; ?></h4>
                                    <p class="text-center category" id="<?php echo $tab2; ?>_tiempo">Estado del Servidor</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead  class="text-primary">
                                            <th>Server</th>
                                            <th>Estatus</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Uso CPU</td>
                                                <td  id="<?php echo $tab2; ?>_cpu_load" class="text-primary">0</td>
                                            </tr>
                                            <!-- <tr>
                                                <td>Mem Usada</td>
                                                <td id="<?php echo $tab2; ?>_used" class="text-primary">0</td>
                                            </tr> -->
                                            <tr>
                                                <td>Mem Total %</td>
                                                <td id="<?php echo $tab2; ?>_total" class="text-primary">0</td>
                                            </tr>
                                            <tr>
                                                <td>Mem Usada %</td>
                                                <td id="<?php echo $tab2; ?>_percent" class="text-primary">0</td>
                                            </tr>
											<tr>
                                                <td>Carga Cores</td>
                                                <td id="<?php echo $tab2; ?>_load_total" class="text-primary">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    <?php 
                    $tab3 = "SD01";
                    ?>
						<div id="prueba<?php echo $tab3; ?>" class="col-md-3">
                            <div class="card">
                                <div class="card-header" id="<?php echo $tab3; ?>_alert" data-background-color=" ">
                                    <h4 class="text-center title" id="<?php echo $tab3; ?>_nombre"><?php echo $tab3; ?></h4>
                                    <p class="text-center category" id="<?php echo $tab3; ?>_tiempo">Estado del Servidor</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead  class="text-primary">
                                            <th>Server</th>
                                            <th>Estatus</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Uso CPU</td>
                                                <td  id="<?php echo $tab3; ?>_cpu_load" class="text-primary">0</td>
                                            </tr>
                                            <!-- <tr>
                                                <td>Mem Usada</td>
                                                <td id="<?php echo $tab3; ?>_used" class="text-primary">0</td>
                                            </tr> -->
                                            <tr>
                                                <td>Mem Total %</td>
                                                <td id="<?php echo $tab3; ?>_total" class="text-primary">0</td>
                                            </tr>
                                            <tr>
                                                <td>Mem Usada %</td>
                                                <td id="<?php echo $tab3; ?>_percent" class="text-primary">0</td>
                                            </tr>
											<tr>
                                                <td>Carga Cores</td>
                                                <td id="<?php echo $tab3; ?>_load_total" class="text-primary">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    <?php 
                    $tab4 = "SP06";
                    ?>
						<div id="prueba<?php echo $tab4; ?>" class="col-md-3">
                            <div class="card">
                                <div class="card-header" id="<?php echo $tab4; ?>_alert" data-background-color=" ">
                                    <h4 class="text-center title" id="<?php echo $tab4; ?>_nombre"><?php echo $tab4; ?></h4>
                                    <p class="text-center category" id="<?php echo $tab4; ?>_tiempo">Estado del Servidor</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead  class="text-primary">
                                            <th>Server</th>
                                            <th>Estatus</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Uso CPU</td>
                                                <td  id="<?php echo $tab4; ?>_cpu_load" class="text-primary">0</td>
                                            </tr>
                                            <!-- <tr>
                                                <td>Mem Usada</td>
                                                <td id="<?php echo $tab4; ?>_used" class="text-primary">0</td>
                                            </tr> -->
                                            <tr>
                                                <td>Mem Total %</td>
                                                <td id="<?php echo $tab4; ?>_total" class="text-primary">0</td>
                                            </tr>
                                            <tr>
                                                <td>Mem Usada %</td>
                                                <td id="<?php echo $tab4; ?>_percent" class="text-primary">0</td>
                                            </tr>
											<tr>
                                                <td>Carga Cores</td>
                                                <td id="<?php echo $tab4; ?>_load_total" class="text-primary">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    <?php 
                    $tab5 = "TK2";
                    ?>
						<div id="prueba<?php echo $tab5; ?>" class="col-md-3">
                            <div class="card">
                                <div class="card-header" id="<?php echo $tab5; ?>_alert" data-background-color=" ">
                                    <h4 class="text-center title" id="<?php echo $tab5; ?>_nombre"><?php echo $tab5; ?></h4>
                                    <p class="text-center category" id="<?php echo $tab5; ?>_tiempo">Estado del Servidor</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead  class="text-primary">
                                            <th>Server</th>
                                            <th>Estatus</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Uso CPU</td>
                                                <td  id="<?php echo $tab5; ?>_cpu_load" class="text-primary">0</td>
                                            </tr>
                                            <!-- <tr>
                                                <td>Mem Usada</td>
                                                <td id="<?php echo $tab5; ?>_used" class="text-primary">0</td>
                                            </tr> -->
                                            <tr>
                                                <td>Mem Total %</td>
                                                <td id="<?php echo $tab5; ?>_total" class="text-primary">0</td>
                                            </tr>
                                            <tr>
                                                <td>Mem Usada %</td>
                                                <td id="<?php echo $tab5; ?>_percent" class="text-primary">0</td>
                                            </tr>
											<tr>
                                                <td>Carga Cores</td>
                                                <td id="<?php echo $tab5; ?>_load_total" class="text-primary">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    <?php 
                    $tab6 = "TK3";
                    ?>
						<div id="prueba<?php echo $tab6; ?>" class="col-md-3">
                            <div class="card">
                                <div class="card-header" id="<?php echo $tab6; ?>_alert" data-background-color=" ">
                                    <h4 class="text-center title" id="<?php echo $tab6; ?>_nombre"><?php echo $tab6; ?></h4>
                                    <p class="text-center category" id="<?php echo $tab6; ?>_tiempo">Estado del Servidor</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead  class="text-primary">
                                            <th>Server</th>
                                            <th>Estatus</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Uso CPU</td>
                                                <td  id="<?php echo $tab6; ?>_cpu_load" class="text-primary">0</td>
                                            </tr>
                                            <!-- <tr>
                                                <td>Mem Usada</td>
                                                <td id="<?php echo $tab6; ?>_used" class="text-primary">0</td>
                                            </tr> -->
                                            <tr>
                                                <td>Mem Total %</td>
                                                <td id="<?php echo $tab6; ?>_total" class="text-primary">0</td>
                                            </tr>
                                            <tr>
                                                <td>Mem Usada %</td>
                                                <td id="<?php echo $tab6; ?>_percent" class="text-primary">0</td>
                                            </tr>
											<tr>
                                                <td>Carga Cores</td>
                                                <td id="<?php echo $tab6; ?>_load_total" class="text-primary">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    <?php 
                    $tab7 = "TK4";
                    ?>
						<div id="prueba<?php echo $tab7; ?>" class="col-md-3">
                            <div class="card">
                                <div class="card-header" id="<?php echo $tab7; ?>_alert" data-background-color=" ">
                                    <h4 class="text-center title" id="<?php echo $tab7; ?>_nombre"><?php echo $tab7; ?></h4>
                                    <p class="text-center category" id="<?php echo $tab7; ?>_tiempo">Estado del Servidor</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead  class="text-primary">
                                            <th>Server</th>
                                            <th>Estatus</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Uso CPU</td>
                                                <td  id="<?php echo $tab7; ?>_cpu_load" class="text-primary">0</td>
                                            </tr>
                                            <!-- <tr>
                                                <td>Mem Usada</td>
                                                <td id="<?php echo $tab7; ?>_used" class="text-primary">0</td>
                                            </tr> -->
                                            <tr>
                                                <td>Mem Total %</td>
                                                <td id="<?php echo $tab7; ?>_total" class="text-primary">0</td>
                                            </tr>
                                            <tr>
                                                <td>Mem Usada %</td>
                                                <td id="<?php echo $tab7; ?>_percent" class="text-primary">0</td>
                                            </tr>
											<tr>
                                                <td>Carga Cores</td>
                                                <td id="<?php echo $tab7; ?>_load_total" class="text-primary">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    <?php 
                    $tab8 = "TKI";
                    ?>
						<div id="prueba<?php echo $tab8; ?>" class="col-md-3">
                            <div class="card">
                                <div class="card-header" id="<?php echo $tab8; ?>_alert" data-background-color=" ">
                                    <h4 class="text-center title" id="<?php echo $tab8; ?>_nombre"><?php echo $tab8; ?></h4>
                                    <p class="text-center category" id="<?php echo $tab8; ?>_tiempo">Estado del Servidor</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead  class="text-primary">
                                            <th>Server</th>
                                            <th>Estatus</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Uso CPU</td>
                                                <td  id="<?php echo $tab8; ?>_cpu_load" class="text-primary">0</td>
                                            </tr>
                                            <!-- <tr>
                                                <td>Mem Usada</td>
                                                <td id="<?php echo $tab8; ?>_used" class="text-primary">0</td>
                                            </tr> -->
                                            <tr>
                                                <td>Mem Total %</td>
                                                <td id="<?php echo $tab8; ?>_total" class="text-primary">0</td>
                                            </tr>
                                            <tr>
                                                <td>Mem Usada %</td>
                                                <td id="<?php echo $tab8; ?>_percent" class="text-primary">0</td>
                                            </tr>
											<tr>
                                                <td>Carga Cores</td>
                                                <td id="<?php echo $tab8; ?>_load_total" class="text-primary">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        
						

                    </div>
                </div>
            </div>
            
<?php include 'footer.php'; ?>
