

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8">
		<!-- Para evitar que el iPad interprete CUITs y CUILs como números telefónicos: -->
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no">
		<!-- Para no desperdiciar espacio en los costados en iPad/iPhone/Android: -->
		<meta name="viewport" content="width=800">
		<title>Pedidos</title>
		<!-- <link type="text/css" href="css/jquery-ui-1.11.4/jquery-ui.css" rel="stylesheet" /> -->
		<link type="text/css" href="css/jquery-ui-1.11.4.custom/jquery-ui.css" rel="stylesheet" />
		<!-- <link type="text/css" href="css/blitzer_jig/jquery-ui-1.8.15.custom.css" rel="stylesheet" /> -->
		<link type="text/css" href="css/jquery.notice.css" rel="stylesheet" />
		<link type="text/css" href="css/jquery.jBreadCrumb.css" rel="stylesheet" />
		<link type="text/css" href="css/validationEngine.jquery.css" rel="stylesheet" />
		<link type="text/css" href="css/jquery.notice.css" rel="stylesheet" />
		<link type="text/css" href="css/jquery.jBreadCrumb.css" rel="stylesheet" />
		<link type="text/css" href="css/validationEngine.jquery.css" rel="stylesheet" />
	<!--[if !IE]><!-->
		<link type="text/css" href="jig_old.css" rel="stylesheet" />
		<link type="text/css" href="jig.css" rel="stylesheet" />
	<!--<![endif]-->
	<!--[if gte IE 9]>
		<link type="text/css" href="css/jig_old_ie_9.css?v=20151216" rel="stylesheet" />
		<link type="text/css" href="css/jig_ie_9.css?v=20151216" rel="stylesheet" />
	<![endif]-->
	<!--[if lt IE 9]>
		<link type="text/css" href="css/jig_old_ie_6_8.css?v=20151216" rel="stylesheet" />
		<link type="text/css" href="css/jig_ie_6_8.css?v=20151216" rel="stylesheet" />
	<![endif]-->
		<style type="text/css">@import url(scripts/calendar/calendar-blue2.css);</style>
		<script type="text/javascript" src="scripts/calendar/calendar.js"></script>
		<script type="text/javascript" src="scripts/calendar/calendar-es.js"></script>
		<script type="text/javascript" src="scripts/calendar/calendar-setup.js"></script>

		<script type="text/javascript" src="js/logout.js"></script>
		<script type="text/javascript" src="js/jquery-1.12.2.min.js"></script>
		<script type="text/javascript" src="js/jquery-migrate-1.3.0.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.11.4.min.js"></script>
		<script type="text/javascript" src="js/jquery.ui.datepicker-es.js"></script>
		<script type="text/javascript" src="js/jquery.tablesorter.js"></script>
		<script type="text/javascript" src="js/jquery.notice.js"></script>
		<script type="text/javascript" src="js/jquery.cookie.js"></script>
		<script type="text/javascript" src="js/jquery.validationEngine.js" charset="utf-8"></script>
		<script type="text/javascript" src="js/jquery.validationEngine-es-jig.js" charset="utf-8"></script>
		<script type="text/javascript" src="js/jquery.form.js"></script>


		<link rel="stylesheet" href="botones.css">
		
<!-- Head específico (inicio) -->

<!-- Head específico (fin) -->
	</head>

	<body style="font-family: helvetica; font-size: 20px;">
		<div id="encabezado" style="background-position:560px -5px;background-repeat:no-repeat; height: 320px;">
			<div id="encabezado_logo_afip" style="padding-top: 100px;" align="center">
				<img src="img/Lola_Morena.jpg" width="300" /></div>
				<div id="encabezado_salir" style="font-size: 20px;">
					<a href="index.php" onclick="salirAplicacion('/rcel');">Salir</a>
				</div>
			
			<table id="encabezado_usuario_container" style="width:800px; font-size: 20px;">
				<tr>
					<td style="padding-right: 400px;">
						<table id="encabezado_usuario" style="font-size: 20px;">
							<tr><th>Usuario<span>:</span></th><td> EDILU SRL</td></tr>
							<br>
							<tr><th>C.U.I.T.<span>:</span></th><td> 30-70866219-0 </td></tr>
							
						</table>
					</td>
					
				</tr>
			</table>
			
		</div>
		<div id="encabezado"  style="background-color: #6AB7EF; font-family: arial; font-size: 20px;  border-radius: 15px;">
		<form action="factBlanca.php" method="post">
			<td>
				<table id="encabezado_usuario">
				<div style="width: 200px;">
					<tr><th>Fecha<span>:</span></th><td style="font-size: 18px;"> <b><input type="text" name="fecha" value="<?php echo date('d-m-y'); ?>"></b> </td></tr>
					<br>
					<br>
					<tr><th>Factura <span>:</span></th><td style="font-size: 18px;"> <input type="number" name="numFact" autocomplete="on"></td></tr>
					<br>
					<br>
					<br>
					<br>
		
				</div>
				<div style="width: 200px;">
					<tr><th>Cliente <span>:</span></th><td style="font-size: 18px;"> <input type="text" name="cliente" autocomplete="on"></td></tr>
					<br>
		
					<tr><th>Direccion <span>:</span></th><td style="font-size: 18px;"> <input type="text" name="direccion" autocomplete="on"></td></tr>
					<br>
		
					<tr><th>Iva <span>:</span></th><td style="font-size: 18px;"> <input type="text" name="resp" autocomplete="on"></td></tr>
					<br>
		
					<tr><th>Localidad <span>:</span></th><td style="font-size: 18px;"> <input type="text" name="localidad" autocomplete="on"></td></tr>
					<br>
		
					<tr><th>Provincia <span>:</span></th><td style="font-size: 18px;"> <input type="text" name="provincia" autocomplete="on"></td></tr>
					<br>
		
		
					<tr><th>cuit <span>:</span></th><td style="font-size: 18px;"> <input type="text" name="cuit" autocomplete="on"></td></tr>
					<br>
				</div>	
					
				</table>
			</td>
			<br>
			<br>
		</form>
		<br>
		</div>
		<div id="contenido">
<!-- Contenido (inicio) -->



<style type="text/css" media="all">
#advertencia_impresion {
	display:none;
}
</style>
<style type="text/css" media="print">
#advertencia_impresion {
	display:block;
}
#descripcion_moneda {
	display:none;
}
#detalles_datos {
	display:none;
}
#resumen_datos {
	display:none;
}
#otros_datos {
	display:none;
}
</style>
<script type="text/javascript">
var htmlUnidadesMedida = "<option value='1' style='padding-left:10px;'> kilogramos</option><option value='2' style='padding-left:10px;'> metros</option><option value='3' style='padding-left:10px;'> metros cuadrados</option><option value='4' style='padding-left:10px;'> metros cúbicos</option><option value='5' style='padding-left:10px;'> litros</option><option value='6' style='padding-left:10px;'> 1000 kWh</option><option value='7' style='padding-left:10px;'> unidades</option><option value='8' style='padding-left:10px;'> pares</option><option value='9' style='padding-left:10px;'> docenas</option><option value='10' style='padding-left:10px;'> quilates</option><option value='11' style='padding-left:10px;'> millares</option><option value='14' style='padding-left:10px;'> gramos</option><option value='15' style='padding-left:10px;'> milimetros</option><option value='16' style='padding-left:10px;'> mm cúbicos</option><option value='17' style='padding-left:10px;'> kilómetros</option><option value='18' style='padding-left:10px;'> hectolitros</option><option value='20' style='padding-left:10px;'> centímetros</option><option value='25' style='padding-left:10px;'> jgo. pqt. mazo naipes</option><option value='27' style='padding-left:10px;'> cm cúbicos</option><option value='29' style='padding-left:10px;'> toneladas</option><option value='30' style='padding-left:10px;'> dam cúbicos</option><option value='31' style='padding-left:10px;'> hm cúbicos</option><option value='32' style='padding-left:10px;'> km cúbicos</option><option value='33' style='padding-left:10px;'> microgramos</option><option value='34' style='padding-left:10px;'> nanogramos</option><option value='35' style='padding-left:10px;'> picogramos</option><option value='41' style='padding-left:10px;'> miligramos</option><option value='47' style='padding-left:10px;'> mililitros</option><option value='48' style='padding-left:10px;'> curie</option><option value='49' style='padding-left:10px;'> milicurie</option><option value='50' style='padding-left:10px;'> microcurie</option><option value='51' style='padding-left:10px;'> uiacthor</option><option value='52' style='padding-left:10px;'> muiacthor</option><option value='53' style='padding-left:10px;'> kg base</option><option value='54' style='padding-left:10px;'> gruesa</option><option value='61' style='padding-left:10px;'> kg bruto</option><option value='62' style='padding-left:10px;'> uiactant</option><option value='63' style='padding-left:10px;'> muiactant</option><option value='64' style='padding-left:10px;'> uiactig</option><option value='65' style='padding-left:10px;'> muiactig</option><option value='66' style='padding-left:10px;'> kg activo</option><option value='67' style='padding-left:10px;'> gramo activo</option><option value='68' style='padding-left:10px;'> gramo base</option><option value='96' style='padding-left:10px;'> packs</option><option value='98' style='padding-left:10px;'> otras unidades</option>";
var codBonosA = "";
</script>

<script type="text/javascript">
var simboloMoneda = "$";
var tipoCambio = 1;

var cuitRepresentada = "null";
</script>
<script type="text/javascript" src="scripts/gen_com_datos_operacion.js"></script>

<script type="text/javascript" src="scripts/gen_com_datos_operacion_am.js"></script>
<script type="text/javascript" src="scripts/keep_alive.js"></script>
<div class='jig_titulo_con_subtitulo'>RCEL - GENERACI&Oacute;N DE Facturas - </div>
<div class='jig_subtitulo'>DATOS DE LA OPERACI&Oacute;N </div>
<div id="advertencia_impresion"><p><b>Por favor confirme los datos para generar una impresi&Oacute;n, no imprima esta pagina.</b></p></div>
<br>
<br>
<br>



			<table class="jig_formvertical" id="idoperacion"> <!-- idoperacion -->
					<style>
						form input textarea select  {
							font-size: 18px;
						}
					</style>
				<tbody>
				<tr>
					
					<th>Codigo</th>
					<th>Descripcion</th>
					<th>Cant.</th>
					<th style="padding:0px;">U. Medida</th>
					<th>Prec. Unitario</th>
					<th>% Bon.</th>
					<th>Importe Bon.</th>
					<th>Subtotal</th>
					<th>Alicuota IVA</th>
					<th>Importe IVA</th>
					<th>Subtotal c/IVA</th>
					<th>Eliminar</th> 
				</tr>
				


				</tbody>
			</table>
			<input type="button" value="Agregar linea descripci&oacute;n" style="width:190px;" onclick="insertarFilaDetalle();" />
			
			<br />
			
			<br />
			
		</div>
	</div>
	<div class='jig_fin_de_pagina' style="width: 100%;"><!-- IE falla sin este comentario --></div>
	<div class="jig_borde" style="width: 80%;">
		<div class="jig_contenido" id="resumen_datos" style="width: 80%;">
			<table style="width:80%;">
				<tr style="width:80%;">
					<!-- <td>
						<table class="jig_formsmall" id="impuestos" style="padding:0;margin:0;text-align:left;">
							<tr>
								<th style='padding:0px;'></th>
								<td style='padding:0px;'>Detalle</td>
								<td style='padding:0px;'>Base<br />Imponible</td>
								<td style='padding:0px;text-align:center;'>Alícuota<br />%</td>
								<td style='padding-left:12px;'>Importe</td>
								<td style='padding:0px;'></td>
							</tr>
							<tr>
								<th style='padding-right:3px;height:23px;'><input type='hidden' name='impuestoCodigo' value="1" /><input type='hidden' name='impuestoDescripcion' value="Per./Ret. de Impuesto a las Ganancias" />Per./Ret. de Imp. a las Ganancias: </th>
								<td style='padding:0px;'><input type="text" name="impuestoDetalle" id="impganancia" onkeyup='calcularTotalImpuestos();' style='width:100px;' maxLength='25' /></td>
								<td style='padding:0px;'><input type="text" name="impuestoBaseImponible" id='impuesto_baseimponible1' onkeyup='calcularImporteFilaImpuestos(1);' onchange='calcularImporteFilaImpuestos(1);' style='width:70px;' maxLength='16' /></td>
								<td style='padding:0px;'><input type="text" name="impuestoAlicuota" id='impuesto_alicuota1' onkeyup='calcularImporteFilaImpuestos(1);' onchange='calcularImporteFilaImpuestos(1);' style='width:45px;' maxLength='7' /></td>
								<td style='padding:0px;' nowrap="nowrap"><span>$</span> <input type="text" name="impuestoMonto" id='impuesto_monto1' onchange='limpiarBIyAFilaImpuestos(1);' onkeyup='calcularTotalImpuestos();' style="width:70px;" /></td>
								<td></td>
							</tr>
							<tr>
								<th style='padding-right:3px;height:23px;'><input type='hidden' name='impuestoCodigo' value="2" /><input type='hidden' name='impuestoDescripcion' value="Per./Ret. de IVA" />Per./Ret. de IVA: </th>
								<td style='padding:0px;'><input type="text" name="impuestoDetalle" id="periva" onkeyup='calcularTotalImpuestos();' style='width:100px;' maxLength='25' /></td>
								<td style='padding:0px;'><input type="text" name="impuestoBaseImponible" id='impuesto_baseimponible2' onkeyup='calcularImporteFilaImpuestos(2);' onchange='calcularImporteFilaImpuestos(2);' style='width:70px;' maxLength='16' /></td>
								<td style='padding:0px;'><input type="text" name="impuestoAlicuota" id='impuesto_alicuota2' onkeyup='calcularImporteFilaImpuestos(2);' onchange='calcularImporteFilaImpuestos(2);' style='width:45px;' maxLength='7' /></td>
								<td style='padding:0px;'><span>$</span> <input type="text" name="impuestoMonto" id='impuesto_monto2' onchange='limpiarBIyAFilaImpuestos(2);' onkeyup='calcularTotalImpuestos();' style="width:70px;" /></td>
								<td></td>
							</tr>
							<tr>
								<th style='padding-right:3px;height:23px;' nowrap="nowrap"><input type='hidden' name='impuestoCodigo' value="3" /><input type='hidden' name='impuestoDescripcion' value="Per./Ret. Ingresos Brutos" />Per./Ret. Ingresos Brutos: </th>
								<td style='padding:0px;'><input type="text" name="impuestoDetalle" id="ingbrutos" onkeyup='calcularTotalImpuestos();' style='width:100px;' maxLength='25' /></td>
								<td style='padding:0px;'><input type="text" name="impuestoBaseImponible" id='impuesto_baseimponible3' onkeyup='calcularImporteFilaImpuestos(3);' onchange='calcularImporteFilaImpuestos(3);' style='width:70px;' maxLength='16' /></td>
								<td style='padding:0px;'><input type="text" name="impuestoAlicuota" id='impuesto_alicuota3' onkeyup='calcularImporteFilaImpuestos(3);' onchange='calcularImporteFilaImpuestos(3);' style='width:45px;' maxLength='7' /></td>
								<td style='padding:0px;'><span>$</span> <input type="text" name="impuestoMonto" id='impuesto_monto3' onchange='limpiarBIyAFilaImpuestos(3);' onkeyup='calcularTotalImpuestos();' style="width:70px;" /></td>
								<td></td>
							</tr>
							<tr>
								<th style='padding-right:3px;height:23px;'><input type='hidden' name='impuestoCodigo' value="4" /><input type='hidden' name='impuestoDescripcion' value="Impuestos Internos" />Impuestos Internos: </th>
								<td style='padding:0px;'><input type="text" name="impuestoDetalle" id="impinternos" onkeyup='calcularTotalImpuestos();' style='width:100px;' maxLength='25' /></td>
								<td style='padding:0px;'><input type="text" name="impuestoBaseImponible" id='impuesto_baseimponible4' onkeyup='calcularImporteFilaImpuestos(4);' onchange='calcularImporteFilaImpuestos(4);' style='width:70px;' maxLength='16' /></td>
								<td style='padding:0px;'><input type="text" name="impuestoAlicuota" id='impuesto_alicuota4' onkeyup='calcularImporteFilaImpuestos(4);' onchange='calcularImporteFilaImpuestos(4);' style='width:45px;' maxLength='7' /></td>
								<td style='padding:0px;'><span>$</span> <input type="text" name="impuestoMonto" id='impuesto_monto4' onchange='limpiarBIyAFilaImpuestos(4);' onkeyup='calcularTotalImpuestos();' style="width:70px;" /></td>
								<td></td>
							</tr>
							<tr>
								<th style='padding-right:3px;height:23px;'><input type='hidden' name='impuestoCodigo' value="5" /><input type='hidden' name='impuestoDescripcion' value="Impuestos Municipales" />Impuestos Municipales: </th>
								<td style='padding:0px;'><input type="text" name="impuestoDetalle" id="impmunicipales" onkeyup='calcularTotalImpuestos();' style='width:100px;' maxLength='25' /></td>
								<td style='padding:0px;'><input type="text" name="impuestoBaseImponible" id='impuesto_baseimponible5' onkeyup='calcularImporteFilaImpuestos(5);' onchange='calcularImporteFilaImpuestos(5);' style='width:70px;' maxLength='16' /></td>
								<td style='padding:0px;'><input type="text" name="impuestoAlicuota" id='impuesto_alicuota5' onkeyup='calcularImporteFilaImpuestos(5);' onchange='calcularImporteFilaImpuestos(5);' style='width:45px;' maxLength='7' /></td>
								<td style='padding:0px;'><span>$</span> <input type="text" name="impuestoMonto" id='impuesto_monto5' onchange='limpiarBIyAFilaImpuestos(5);' onkeyup='calcularTotalImpuestos();' style="width:70px;" /></td>
								<td></td>
							</tr>
							<tr>
								<td colspan="6"><span style="font-size:10px;font-weight:bold;display:none;padding:0px;" id="labelotrosimpuestos">Otros:</span></td>
							</tr>
							<tr>
								<th colspan="4" style='padding:0px;'><b>Importe Otros Tributos:</b></th>
								<td nowrap="nowrap" style='padding:0px;'><span>$</span> <input type="text" name="impTotalImpuestos1" id="imptotalimpuestos1" class='jig_readonly' readonly='readonly' style="width:70px;font-weight:bold;text-align:right;" />
							</tr>
							<tr>
								<td colspan="2"></td>
								<td colspan="3" align="center"><br /><input type="button" value="Agregar otro Tributo" name="agregarImp" onclick="document.getElementById('labelotrosimpuestos').style.display = 'inline';insertarFilaImpuesto();" style='text-align:center;width:190px;' /></td>
								<td></td>
							</tr>
							
						</table>
					</td> -->
					<td style="vertical-align:top;height:100%; width: 80%; ">
						<table class="jig_formsmall" style="height:100%;margin-left:auto;">
							<tr>
								<td style="vertical-align:top;">
									<table class="jig_formsmall" id="importes">
									
										<tr>
											<th colspan="2" style="padding:0;margin:0;">Importe Neto no Gravado: </th><td nowrap="nowrap"><span>$</span> <input type="text" name="impNetoNoGravado" id="impnetonogravado" class='jig_readonly' readonly='readonly' style="width:80px;text-align:right;" /></td>
										</tr>
										<tr>
											<th colspan="2">Importe Exento: </th><td><span>$</span> <input type="text" name="impExento" id="impexento" class='jig_readonly' readonly='readonly' style="width:80px;text-align:right;" /></td>
										</tr>
										<tr>
											<th colspan="2">Importe Neto Gravado: </th><td><span>$</span> <input type="text" name="impNetoGravado" id="impnetogravado" class='jig_readonly' readonly='readonly' style="width:80px;text-align:right;" /></td>
										</tr>
										<tr>
											<th colspan="2">IVA 27%: </th><td><span>$</span> <input type="text" name="impIVA27" id="impiva27" class='jig_readonly' readonly='readonly' style="width:80px;text-align:right;" /></td>
										</tr>
										<tr>
											<th colspan="2">IVA 21%: </th><td><span>$</span> <input type="text" name="impIVA21" id="impiva21" class='jig_readonly' readonly='readonly' style="width:80px;text-align:right;" /></td>
										</tr>
										<tr>
											<th colspan="2">IVA 10,5%: </th><td><span>$</span> <input type="text" name="impIVA105" id="impiva105" class='jig_readonly' readonly='readonly' style="width:80px;text-align:right;" /></td>
										</tr>
										
										<tr>
											<th colspan="2">IVA 5%: </th><td><span>$</span> <input type="text" name="impIVA5" id="impiva5" class='jig_readonly' readonly='readonly' style="width:80px;text-align:right;" /></td>
										</tr>
										
										<tr>
											<th colspan="2">IVA 2,5%: </th><td><span>$</span> <input type="text" name="impIVA2" id="impiva2" class='jig_readonly' readonly='readonly' style="width:80px;text-align:right;" /></td>
										</tr>
										
										<tr>
											<th colspan="2">IVA 0%: </th><td><span>$</span> <input type="text" name="impIVA0" id="impiva0" class='jig_readonly' readonly='readonly' style="width:80px;text-align:right;" value="0.00" /></td>
										</tr>
										<!--<tr>
											<th colspan="2">Crédito IVA por bonificaciones: </th><td><span>$</span> <input type="text" name="creditoIVA" id="creditoiva" class='jig_readonly' readonly='readonly' style="width:80px;text-align:right;" /></td>
										</tr>-->
									</table>
								</td>
							</tr>
							<tr>
								<td>
									<table class="jig_formsmall" style="float:right;">
										<tr>
											<th><b>Importe Otros Tributos: </b></th><td nowrap="nowrap"><span>$</span> <input type="text" name="impTotalImpuestos2" id="imptotalimpuestos2" class='jig_readonly' readonly='readonly' style="width:80px;font-weight:bold;text-align:right;" /></td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>
									<table class="jig_formsmall" style="float:right;">
										<tr>
											<th><b>Importe Total: </b></th><td nowrap="nowrap"><span>$</span> <input type="text" name="impTotal" id="imptotal" class='jig_readonly' readonly='readonly' style="width:80px;font-weight:bold;text-align:right;" /></td>
										</tr>
										
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</div>
	</div>

	<div class="jig_borde" style="width: 80%;">
		<div class="jig_contenido" id="otros_datos" style="width: 80%;">
			<table class="jig_formsmall" style="margin-left:auto; margin-right:auto;">
				<tr>
					<td style="text-align:right;">Precision Campo Cantidad</td><td>
						<select style="width:90px;" name="numDecimalesCantidad" id="numdecimalescantidad">
							<option value='2'>&nbsp;2 decimales</option>
							<option value='4'>&nbsp;4 decimales</option>
							<option value='6'>&nbsp;6 decimales</option>
						</select>
					</td>
					<td style="text-align:right;">Campo Precio Unitario</td><td>
						<select style="width:90px;" name="numDecimalesPrecioUnit" id="numdecimalespreciounit">
							<option value='2'>&nbsp;2 decimales</option>
							<option value='4'>&nbsp;4 decimales</option>
							<option value='6'>&nbsp;6 decimales</option>
						</select>
					</td>
					<td style="width:100px;">&nbsp;</td>
				</tr>
			</table>
		</div>
	</div>
	<div class='jig_fin_de_pagina' style="width: 80%;"><!-- IE falla sin este comentario --></div>
	
	<br />
	<br>
	<div align="center">
		<input type="button" class="button blue" value="Volver" /> <a style="color: white;" href="inicio.php"><span class="icon-house"></span></a>

			&nbsp;<input type="submit" class="button blue" value="Continuar" />
			<span class="icon-house"></span>
	</div>
	 <!-- //onclick="validarCampos();" -->
	<br>
	<br>
	<br>

</form>



<table style="margin-left:auto;margin-right:auto;">
	<tr>
		<td><div class="jig_separador_botones"><!-- IE falla sin este comentario --></div></td>
	</tr>
	<tr>

		<td>
			<input type="button" class="button blue"  value="Menu Principal"  /> <a style="color: white;" href="inicio.php"><span class="icon-house"></span></a>
		</td>
</tr>
</table>
<br />

<script type="text/javascript">
insertarFilaDetalle();

</script>

<!-- Contenido (fin) -->
		</div>
		<br />

		<div id="pie" style="text-align:center; font-size: 15px; height: 100px; color: black;">
			<table style="padding-top: 45px;">
				<tr><td><b><?php echo date("d-m-y"); ?></b></td><td>Autenticado por: 
				<b>R&B Design Web</b> <br> 
				<a href="www.rbcreacionesweb.com">www.rbcreacionesweb.com</a></td></tr>
			</table>
		</div>
	</body>
</html>
