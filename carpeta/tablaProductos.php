
		<table class="jig_formvertical" id="">
			<tbody>
			
				<tr>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleCodigoArticulo" maxlength="19" size="12">
					<input type="hidden" name="detalleNroLinea"></td>
				<td style="padding:0px 4px;">
					<textarea name="detalleDescripcion" id="detalle_descripcion1" style="width: 180px; overflow: auto; height: 19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);"></textarea></td>

				<td style="padding:0px 4px;">
					<input type="text" name="detalleCantidad" maxlength="9" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="1" size="10"></td>
				<td style="padding:0px 4px;">
					<select type="text" name="detalleMedida" id="detalle_medida1" style="width:95px;">
						<option value="7" style="color:#888;">Unidades</option>
						<option value="1" style="padding-left:10px;"> kilogramos</option>
						<option value="2" style="padding-left:10px;"> metros</option>
						<option value="3" style="padding-left:10px;"> metros cuadrados</option>
						<option value="4" style="padding-left:10px;"> metros cÃºbicos</option>
						<option value="5" style="padding-left:10px;"> litros</option>
						<option value="6" style="padding-left:10px;"> 1000 kWh</option>
						<option value="7" style="padding-left:10px;"> unidades</option>
						<option value="8" style="padding-left:10px;"> pares</option>
						<option value="9" style="padding-left:10px;"> docenas</option>
						<option value="10" style="padding-left:10px;"> quilates</option>
						<option value="11" style="padding-left:10px;"> millares</option>
						<option value="14" style="padding-left:10px;"> gramos</option>
						<option value="15" style="padding-left:10px;"> milimetros</option>
						<option value="16" style="padding-left:10px;"> mm cÃºbicos</option>
						<option value="17" style="padding-left:10px;"> kilÃ³metros</option>
						<option value="18" style="padding-left:10px;"> hectolitros</option>
						<option value="20" style="padding-left:10px;"> centÃ­metros</option>
						<option value="25" style="padding-left:10px;"> jgo. pqt. mazo naipes</option>
						<option value="27" style="padding-left:10px;"> cm cÃºbicos</option>
						<option value="29" style="padding-left:10px;"> toneladas</option>
						<option value="30" style="padding-left:10px;"> dam cÃºbicos</option>
						<option value="31" style="padding-left:10px;"> hm cÃºbicos</option>
						<option value="32" style="padding-left:10px;"> km cÃºbicos</option>
						<option value="33" style="padding-left:10px;"> microgramos</option>
						<option value="34" style="padding-left:10px;"> nanogramos</option>
						<option value="35" style="padding-left:10px;"> picogramos</option>
						<option value="41" style="padding-left:10px;"> miligramos</option>
						<option value="47" style="padding-left:10px;"> mililitros</option>
						<option value="48" style="padding-left:10px;"> curie</option>
						<option value="49" style="padding-left:10px;"> milicurie</option>
						<option value="50" style="padding-left:10px;"> microcurie</option>
						<option value="51" style="padding-left:10px;"> uiacthor</option>
						<option value="52" style="padding-left:10px;"> muiacthor</option>
						<option value="53" style="padding-left:10px;"> kg base</option>
						<option value="54" style="padding-left:10px;"> gruesa</option>
						<option value="61" style="padding-left:10px;"> kg bruto</option>
						<option value="62" style="padding-left:10px;"> uiactant</option>
						<option value="63" style="padding-left:10px;"> muiactant</option>
						<option value="64" style="padding-left:10px;"> uiactig</option>
						<option value="65" style="padding-left:10px;"> muiactig</option>
						<option value="66" style="padding-left:10px;"> kg activo</option>
						<option value="67" style="padding-left:10px;"> gramo activo</option>
						<option value="68" style="padding-left:10px;"> gramo base</option>
						<option value="96" style="padding-left:10px;"> packs</option>
						<option value="98" style="padding-left:10px;"> otras unidades</option>
						</select></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detallePrecio" maxlength="19" id="detalle_precio1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detallePorcentajeBonificacion" maxlength="6" id="detalle_porcentaje1" value="0" onchange="calcularImporteBonificacionDetalle(1);" size="3"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleImporteBonificacion" maxlength="14" id="detalle_importe_bonificacion1" onchange="calcularPorcentajeBonificacionDetalle(1);">
					<input type="hidden" name="detalleTipoBonificacion" id="detalle_tipo_bonificacion1" value="porcentaje"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleSubtotal1" id="detalle_subtotal11" readonly="readonly"></td>
				<td style="padding:0px 4px;">
					<select name="detalleTipoIVA" id="detalle_tipo_iva1" onchange="calcularSubtotalDetalle(1);" style="width:70px;">
					 <option value="0" style="color:#888;">seleccionar...</option>
					 <option value="1">&nbsp;No gravado</option>
					 <option value="2" selected="selected">&nbsp;Exento</option>
					 <option value="3">&nbsp;0%</option>
					 <option value="9">&nbsp;2,5%</option>
					 <option value="8">&nbsp;5%</option>
					 <option value="4">&nbsp;10,5%</option>
					 <option value="5" >&nbsp;21%</option>
					 <option value="6">&nbsp;27%</option></select>
				</td>

				 <td style="padding:0px 4px;">
				 	<input type="text" name="detalleImporteIVA" id="detalle_importe_iva1" readonly="readonly"></td>
				 <td style="padding:0px 4px;">
				 	<input type="text" name="detalleSubtotal2" id="detalle_subtotal21" readonly="readonly"></td>
				 <!-- <td style="padding:0px 4px;">
				 <span style="width:100%;text-align:center;">
				 <input type="button" name="Eliminar" value="X" style="width:31px;text-align:center;color:#FF0000;font-size:10px;" onclick="borrarFilaDetalle(1);"></span></td> -->
				 </tr>


				 <tr>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleCodigoArticulo" maxlength="19" size="12">
					<input type="hidden" name="detalleNroLinea"></td>
				<td style="padding:0px 4px;">
					<textarea name="detalleDescripcion" id="detalle_descripcion1" style="width: 180px; overflow: auto; height: 19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);"></textarea></td>

				<td style="padding:0px 4px;">
					<input type="text" name="detalleCantidad" maxlength="9" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="1" size="10"></td>
				<td style="padding:0px 4px;">
					<select type="text" name="detalleMedida" id="detalle_medida1" style="width:95px;">
						<option value="7" style="color:#888;">Unidades</option>
						<option value="1" style="padding-left:10px;"> kilogramos</option>
						<option value="2" style="padding-left:10px;"> metros</option>
						<option value="3" style="padding-left:10px;"> metros cuadrados</option>
						<option value="4" style="padding-left:10px;"> metros cÃºbicos</option>
						<option value="5" style="padding-left:10px;"> litros</option>
						<option value="6" style="padding-left:10px;"> 1000 kWh</option>
						<option value="7" style="padding-left:10px;"> unidades</option>
						<option value="8" style="padding-left:10px;"> pares</option>
						<option value="9" style="padding-left:10px;"> docenas</option>
						<option value="10" style="padding-left:10px;"> quilates</option>
						<option value="11" style="padding-left:10px;"> millares</option>
						<option value="14" style="padding-left:10px;"> gramos</option>
						<option value="15" style="padding-left:10px;"> milimetros</option>
						<option value="16" style="padding-left:10px;"> mm cÃºbicos</option>
						<option value="17" style="padding-left:10px;"> kilÃ³metros</option>
						<option value="18" style="padding-left:10px;"> hectolitros</option>
						<option value="20" style="padding-left:10px;"> centÃ­metros</option>
						<option value="25" style="padding-left:10px;"> jgo. pqt. mazo naipes</option>
						<option value="27" style="padding-left:10px;"> cm cÃºbicos</option>
						<option value="29" style="padding-left:10px;"> toneladas</option>
						<option value="30" style="padding-left:10px;"> dam cÃºbicos</option>
						<option value="31" style="padding-left:10px;"> hm cÃºbicos</option>
						<option value="32" style="padding-left:10px;"> km cÃºbicos</option>
						<option value="33" style="padding-left:10px;"> microgramos</option>
						<option value="34" style="padding-left:10px;"> nanogramos</option>
						<option value="35" style="padding-left:10px;"> picogramos</option>
						<option value="41" style="padding-left:10px;"> miligramos</option>
						<option value="47" style="padding-left:10px;"> mililitros</option>
						<option value="48" style="padding-left:10px;"> curie</option>
						<option value="49" style="padding-left:10px;"> milicurie</option>
						<option value="50" style="padding-left:10px;"> microcurie</option>
						<option value="51" style="padding-left:10px;"> uiacthor</option>
						<option value="52" style="padding-left:10px;"> muiacthor</option>
						<option value="53" style="padding-left:10px;"> kg base</option>
						<option value="54" style="padding-left:10px;"> gruesa</option>
						<option value="61" style="padding-left:10px;"> kg bruto</option>
						<option value="62" style="padding-left:10px;"> uiactant</option>
						<option value="63" style="padding-left:10px;"> muiactant</option>
						<option value="64" style="padding-left:10px;"> uiactig</option>
						<option value="65" style="padding-left:10px;"> muiactig</option>
						<option value="66" style="padding-left:10px;"> kg activo</option>
						<option value="67" style="padding-left:10px;"> gramo activo</option>
						<option value="68" style="padding-left:10px;"> gramo base</option>
						<option value="96" style="padding-left:10px;"> packs</option>
						<option value="98" style="padding-left:10px;"> otras unidades</option>
						</select></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detallePrecio" maxlength="19" id="detalle_precio1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detallePorcentajeBonificacion" maxlength="6" id="detalle_porcentaje1" value="0" onchange="calcularImporteBonificacionDetalle(1);" size="3"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleImporteBonificacion" maxlength="14" id="detalle_importe_bonificacion1" onchange="calcularPorcentajeBonificacionDetalle(1);">
					<input type="hidden" name="detalleTipoBonificacion" id="detalle_tipo_bonificacion1" value="porcentaje"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleSubtotal1" id="detalle_subtotal11" readonly="readonly"></td>
				<td style="padding:0px 4px;">
					<select name="detalleTipoIVA" id="detalle_tipo_iva1" onchange="calcularSubtotalDetalle(1);" style="width:70px;">
					 <option value="0" style="color:#888;">seleccionar...</option>
					 <option value="1">&nbsp;No gravado</option>
					 <option value="2" selected="selected">&nbsp;Exento</option>
					 <option value="3">&nbsp;0%</option>
					 <option value="9">&nbsp;2,5%</option>
					 <option value="8">&nbsp;5%</option>
					 <option value="4">&nbsp;10,5%</option>
					 <option value="5" >&nbsp;21%</option>
					 <option value="6">&nbsp;27%</option></select>
				</td>

				 <td style="padding:0px 4px;">
				 	<input type="text" name="detalleImporteIVA" id="detalle_importe_iva1" readonly="readonly"></td>
				 <td style="padding:0px 4px;">
				 	<input type="text" name="detalleSubtotal2" id="detalle_subtotal21" readonly="readonly"></td>
				 <!-- <td style="padding:0px 4px;">
				 <span style="width:100%;text-align:center;">
				 <input type="button" name="Eliminar" value="X" style="width:31px;text-align:center;color:#FF0000;font-size:10px;" onclick="borrarFilaDetalle(1);"></span></td> -->
				 </tr>


				 <tr>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleCodigoArticulo" maxlength="19" size="12">
					<input type="hidden" name="detalleNroLinea"></td>
				<td style="padding:0px 4px;">
					<textarea name="detalleDescripcion" id="detalle_descripcion1" style="width: 180px; overflow: auto; height: 19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);"></textarea></td>

				<td style="padding:0px 4px;">
					<input type="text" name="detalleCantidad" maxlength="9" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="1" size="10"></td>
				<td style="padding:0px 4px;">
					<select type="text" name="detalleMedida" id="detalle_medida1" style="width:95px;">
						<option value="7" style="color:#888;">Unidades</option>
						<option value="1" style="padding-left:10px;"> kilogramos</option>
						<option value="2" style="padding-left:10px;"> metros</option>
						<option value="3" style="padding-left:10px;"> metros cuadrados</option>
						<option value="4" style="padding-left:10px;"> metros cÃºbicos</option>
						<option value="5" style="padding-left:10px;"> litros</option>
						<option value="6" style="padding-left:10px;"> 1000 kWh</option>
						<option value="7" style="padding-left:10px;"> unidades</option>
						<option value="8" style="padding-left:10px;"> pares</option>
						<option value="9" style="padding-left:10px;"> docenas</option>
						<option value="10" style="padding-left:10px;"> quilates</option>
						<option value="11" style="padding-left:10px;"> millares</option>
						<option value="14" style="padding-left:10px;"> gramos</option>
						<option value="15" style="padding-left:10px;"> milimetros</option>
						<option value="16" style="padding-left:10px;"> mm cÃºbicos</option>
						<option value="17" style="padding-left:10px;"> kilÃ³metros</option>
						<option value="18" style="padding-left:10px;"> hectolitros</option>
						<option value="20" style="padding-left:10px;"> centÃ­metros</option>
						<option value="25" style="padding-left:10px;"> jgo. pqt. mazo naipes</option>
						<option value="27" style="padding-left:10px;"> cm cÃºbicos</option>
						<option value="29" style="padding-left:10px;"> toneladas</option>
						<option value="30" style="padding-left:10px;"> dam cÃºbicos</option>
						<option value="31" style="padding-left:10px;"> hm cÃºbicos</option>
						<option value="32" style="padding-left:10px;"> km cÃºbicos</option>
						<option value="33" style="padding-left:10px;"> microgramos</option>
						<option value="34" style="padding-left:10px;"> nanogramos</option>
						<option value="35" style="padding-left:10px;"> picogramos</option>
						<option value="41" style="padding-left:10px;"> miligramos</option>
						<option value="47" style="padding-left:10px;"> mililitros</option>
						<option value="48" style="padding-left:10px;"> curie</option>
						<option value="49" style="padding-left:10px;"> milicurie</option>
						<option value="50" style="padding-left:10px;"> microcurie</option>
						<option value="51" style="padding-left:10px;"> uiacthor</option>
						<option value="52" style="padding-left:10px;"> muiacthor</option>
						<option value="53" style="padding-left:10px;"> kg base</option>
						<option value="54" style="padding-left:10px;"> gruesa</option>
						<option value="61" style="padding-left:10px;"> kg bruto</option>
						<option value="62" style="padding-left:10px;"> uiactant</option>
						<option value="63" style="padding-left:10px;"> muiactant</option>
						<option value="64" style="padding-left:10px;"> uiactig</option>
						<option value="65" style="padding-left:10px;"> muiactig</option>
						<option value="66" style="padding-left:10px;"> kg activo</option>
						<option value="67" style="padding-left:10px;"> gramo activo</option>
						<option value="68" style="padding-left:10px;"> gramo base</option>
						<option value="96" style="padding-left:10px;"> packs</option>
						<option value="98" style="padding-left:10px;"> otras unidades</option>
						</select></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detallePrecio" maxlength="19" id="detalle_precio1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detallePorcentajeBonificacion" maxlength="6" id="detalle_porcentaje1" value="0" onchange="calcularImporteBonificacionDetalle(1);" size="3"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleImporteBonificacion" maxlength="14" id="detalle_importe_bonificacion1" onchange="calcularPorcentajeBonificacionDetalle(1);">
					<input type="hidden" name="detalleTipoBonificacion" id="detalle_tipo_bonificacion1" value="porcentaje"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleSubtotal1" id="detalle_subtotal11" readonly="readonly"></td>
				<td style="padding:0px 4px;">
					<select name="detalleTipoIVA" id="detalle_tipo_iva1" onchange="calcularSubtotalDetalle(1);" style="width:70px;">
					 <option value="0" style="color:#888;">seleccionar...</option>
					 <option value="1">&nbsp;No gravado</option>
					 <option value="2" selected="selected">&nbsp;Exento</option>
					 <option value="3">&nbsp;0%</option>
					 <option value="9">&nbsp;2,5%</option>
					 <option value="8">&nbsp;5%</option>
					 <option value="4">&nbsp;10,5%</option>
					 <option value="5" >&nbsp;21%</option>
					 <option value="6">&nbsp;27%</option></select>
				</td>

				 <td style="padding:0px 4px;">
				 	<input type="text" name="detalleImporteIVA" id="detalle_importe_iva1" readonly="readonly"></td>
				 <td style="padding:0px 4px;">
				 	<input type="text" name="detalleSubtotal2" id="detalle_subtotal21" readonly="readonly"></td>
				 <!-- <td style="padding:0px 4px;">
				 <span style="width:100%;text-align:center;">
				 <input type="button" name="Eliminar" value="X" style="width:31px;text-align:center;color:#FF0000;font-size:10px;" onclick="borrarFilaDetalle(1);"></span></td> -->
				 </tr>


				 <tr>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleCodigoArticulo" maxlength="19" size="12">
					<input type="hidden" name="detalleNroLinea"></td>
				<td style="padding:0px 4px;">
					<textarea name="detalleDescripcion" id="detalle_descripcion1" style="width: 180px; overflow: auto; height: 19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);"></textarea></td>

				<td style="padding:0px 4px;">
					<input type="text" name="detalleCantidad" maxlength="9" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="1" size="10"></td>
				<td style="padding:0px 4px;">
					<select type="text" name="detalleMedida" id="detalle_medida1" style="width:95px;">
						<option value="7" style="color:#888;">Unidades</option>
						<option value="1" style="padding-left:10px;"> kilogramos</option>
						<option value="2" style="padding-left:10px;"> metros</option>
						<option value="3" style="padding-left:10px;"> metros cuadrados</option>
						<option value="4" style="padding-left:10px;"> metros cÃºbicos</option>
						<option value="5" style="padding-left:10px;"> litros</option>
						<option value="6" style="padding-left:10px;"> 1000 kWh</option>
						<option value="7" style="padding-left:10px;"> unidades</option>
						<option value="8" style="padding-left:10px;"> pares</option>
						<option value="9" style="padding-left:10px;"> docenas</option>
						<option value="10" style="padding-left:10px;"> quilates</option>
						<option value="11" style="padding-left:10px;"> millares</option>
						<option value="14" style="padding-left:10px;"> gramos</option>
						<option value="15" style="padding-left:10px;"> milimetros</option>
						<option value="16" style="padding-left:10px;"> mm cÃºbicos</option>
						<option value="17" style="padding-left:10px;"> kilÃ³metros</option>
						<option value="18" style="padding-left:10px;"> hectolitros</option>
						<option value="20" style="padding-left:10px;"> centÃ­metros</option>
						<option value="25" style="padding-left:10px;"> jgo. pqt. mazo naipes</option>
						<option value="27" style="padding-left:10px;"> cm cÃºbicos</option>
						<option value="29" style="padding-left:10px;"> toneladas</option>
						<option value="30" style="padding-left:10px;"> dam cÃºbicos</option>
						<option value="31" style="padding-left:10px;"> hm cÃºbicos</option>
						<option value="32" style="padding-left:10px;"> km cÃºbicos</option>
						<option value="33" style="padding-left:10px;"> microgramos</option>
						<option value="34" style="padding-left:10px;"> nanogramos</option>
						<option value="35" style="padding-left:10px;"> picogramos</option>
						<option value="41" style="padding-left:10px;"> miligramos</option>
						<option value="47" style="padding-left:10px;"> mililitros</option>
						<option value="48" style="padding-left:10px;"> curie</option>
						<option value="49" style="padding-left:10px;"> milicurie</option>
						<option value="50" style="padding-left:10px;"> microcurie</option>
						<option value="51" style="padding-left:10px;"> uiacthor</option>
						<option value="52" style="padding-left:10px;"> muiacthor</option>
						<option value="53" style="padding-left:10px;"> kg base</option>
						<option value="54" style="padding-left:10px;"> gruesa</option>
						<option value="61" style="padding-left:10px;"> kg bruto</option>
						<option value="62" style="padding-left:10px;"> uiactant</option>
						<option value="63" style="padding-left:10px;"> muiactant</option>
						<option value="64" style="padding-left:10px;"> uiactig</option>
						<option value="65" style="padding-left:10px;"> muiactig</option>
						<option value="66" style="padding-left:10px;"> kg activo</option>
						<option value="67" style="padding-left:10px;"> gramo activo</option>
						<option value="68" style="padding-left:10px;"> gramo base</option>
						<option value="96" style="padding-left:10px;"> packs</option>
						<option value="98" style="padding-left:10px;"> otras unidades</option>
						</select></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detallePrecio" maxlength="19" id="detalle_precio1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detallePorcentajeBonificacion" maxlength="6" id="detalle_porcentaje1" value="0" onchange="calcularImporteBonificacionDetalle(1);" size="3"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleImporteBonificacion" maxlength="14" id="detalle_importe_bonificacion1" onchange="calcularPorcentajeBonificacionDetalle(1);">
					<input type="hidden" name="detalleTipoBonificacion" id="detalle_tipo_bonificacion1" value="porcentaje"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleSubtotal1" id="detalle_subtotal11" readonly="readonly"></td>
				<td style="padding:0px 4px;">
					<select name="detalleTipoIVA" id="detalle_tipo_iva1" onchange="calcularSubtotalDetalle(1);" style="width:70px;">
					 <option value="0" style="color:#888;">seleccionar...</option>
					 <option value="1">&nbsp;No gravado</option>
					 <option value="2" selected="selected">&nbsp;Exento</option>
					 <option value="3">&nbsp;0%</option>
					 <option value="9">&nbsp;2,5%</option>
					 <option value="8">&nbsp;5%</option>
					 <option value="4">&nbsp;10,5%</option>
					 <option value="5" >&nbsp;21%</option>
					 <option value="6">&nbsp;27%</option></select>
				</td>

				 <td style="padding:0px 4px;">
				 	<input type="text" name="detalleImporteIVA" id="detalle_importe_iva1" readonly="readonly"></td>
				 <td style="padding:0px 4px;">
				 	<input type="text" name="detalleSubtotal2" id="detalle_subtotal21" readonly="readonly"></td>
				 <!-- <td style="padding:0px 4px;">
				 <span style="width:100%;text-align:center;">
				 <input type="button" name="Eliminar" value="X" style="width:31px;text-align:center;color:#FF0000;font-size:10px;" onclick="borrarFilaDetalle(1);"></span></td> -->
				 </tr>


				 <tr>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleCodigoArticulo" maxlength="19" size="12">
					<input type="hidden" name="detalleNroLinea"></td>
				<td style="padding:0px 4px;">
					<textarea name="detalleDescripcion" id="detalle_descripcion1" style="width: 180px; overflow: auto; height: 19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);"></textarea></td>

				<td style="padding:0px 4px;">
					<input type="text" name="detalleCantidad" maxlength="9" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="1" size="10"></td>
				<td style="padding:0px 4px;">
					<select type="text" name="detalleMedida" id="detalle_medida1" style="width:95px;">
						<option value="7" style="color:#888;">Unidades</option>
						<option value="1" style="padding-left:10px;"> kilogramos</option>
						<option value="2" style="padding-left:10px;"> metros</option>
						<option value="3" style="padding-left:10px;"> metros cuadrados</option>
						<option value="4" style="padding-left:10px;"> metros cÃºbicos</option>
						<option value="5" style="padding-left:10px;"> litros</option>
						<option value="6" style="padding-left:10px;"> 1000 kWh</option>
						<option value="7" style="padding-left:10px;"> unidades</option>
						<option value="8" style="padding-left:10px;"> pares</option>
						<option value="9" style="padding-left:10px;"> docenas</option>
						<option value="10" style="padding-left:10px;"> quilates</option>
						<option value="11" style="padding-left:10px;"> millares</option>
						<option value="14" style="padding-left:10px;"> gramos</option>
						<option value="15" style="padding-left:10px;"> milimetros</option>
						<option value="16" style="padding-left:10px;"> mm cÃºbicos</option>
						<option value="17" style="padding-left:10px;"> kilÃ³metros</option>
						<option value="18" style="padding-left:10px;"> hectolitros</option>
						<option value="20" style="padding-left:10px;"> centÃ­metros</option>
						<option value="25" style="padding-left:10px;"> jgo. pqt. mazo naipes</option>
						<option value="27" style="padding-left:10px;"> cm cÃºbicos</option>
						<option value="29" style="padding-left:10px;"> toneladas</option>
						<option value="30" style="padding-left:10px;"> dam cÃºbicos</option>
						<option value="31" style="padding-left:10px;"> hm cÃºbicos</option>
						<option value="32" style="padding-left:10px;"> km cÃºbicos</option>
						<option value="33" style="padding-left:10px;"> microgramos</option>
						<option value="34" style="padding-left:10px;"> nanogramos</option>
						<option value="35" style="padding-left:10px;"> picogramos</option>
						<option value="41" style="padding-left:10px;"> miligramos</option>
						<option value="47" style="padding-left:10px;"> mililitros</option>
						<option value="48" style="padding-left:10px;"> curie</option>
						<option value="49" style="padding-left:10px;"> milicurie</option>
						<option value="50" style="padding-left:10px;"> microcurie</option>
						<option value="51" style="padding-left:10px;"> uiacthor</option>
						<option value="52" style="padding-left:10px;"> muiacthor</option>
						<option value="53" style="padding-left:10px;"> kg base</option>
						<option value="54" style="padding-left:10px;"> gruesa</option>
						<option value="61" style="padding-left:10px;"> kg bruto</option>
						<option value="62" style="padding-left:10px;"> uiactant</option>
						<option value="63" style="padding-left:10px;"> muiactant</option>
						<option value="64" style="padding-left:10px;"> uiactig</option>
						<option value="65" style="padding-left:10px;"> muiactig</option>
						<option value="66" style="padding-left:10px;"> kg activo</option>
						<option value="67" style="padding-left:10px;"> gramo activo</option>
						<option value="68" style="padding-left:10px;"> gramo base</option>
						<option value="96" style="padding-left:10px;"> packs</option>
						<option value="98" style="padding-left:10px;"> otras unidades</option>
						</select></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detallePrecio" maxlength="19" id="detalle_precio1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detallePorcentajeBonificacion" maxlength="6" id="detalle_porcentaje1" value="0" onchange="calcularImporteBonificacionDetalle(1);" size="3"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleImporteBonificacion" maxlength="14" id="detalle_importe_bonificacion1" onchange="calcularPorcentajeBonificacionDetalle(1);">
					<input type="hidden" name="detalleTipoBonificacion" id="detalle_tipo_bonificacion1" value="porcentaje"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleSubtotal1" id="detalle_subtotal11" readonly="readonly"></td>
				<td style="padding:0px 4px;">
					<select name="detalleTipoIVA" id="detalle_tipo_iva1" onchange="calcularSubtotalDetalle(1);" style="width:70px;">
					 <option value="0" style="color:#888;">seleccionar...</option>
					 <option value="1">&nbsp;No gravado</option>
					 <option value="2" selected="selected">&nbsp;Exento</option>
					 <option value="3">&nbsp;0%</option>
					 <option value="9">&nbsp;2,5%</option>
					 <option value="8">&nbsp;5%</option>
					 <option value="4">&nbsp;10,5%</option>
					 <option value="5" >&nbsp;21%</option>
					 <option value="6">&nbsp;27%</option></select>
				</td>

				 <td style="padding:0px 4px;">
				 	<input type="text" name="detalleImporteIVA" id="detalle_importe_iva1" readonly="readonly"></td>
				 <td style="padding:0px 4px;">
				 	<input type="text" name="detalleSubtotal2" id="detalle_subtotal21" readonly="readonly"></td>
				 <!-- <td style="padding:0px 4px;">
				 <span style="width:100%;text-align:center;">
				 <input type="button" name="Eliminar" value="X" style="width:31px;text-align:center;color:#FF0000;font-size:10px;" onclick="borrarFilaDetalle(1);"></span></td> -->
				 </tr>


				 <tr>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleCodigoArticulo" maxlength="19" size="12">
					<input type="hidden" name="detalleNroLinea"></td>
				<td style="padding:0px 4px;">
					<textarea name="detalleDescripcion" id="detalle_descripcion1" style="width: 180px; overflow: auto; height: 19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);"></textarea></td>

				<td style="padding:0px 4px;">
					<input type="text" name="detalleCantidad" maxlength="9" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="1" size="10"></td>
				<td style="padding:0px 4px;">
					<select type="text" name="detalleMedida" id="detalle_medida1" style="width:95px;">
						<option value="7" style="color:#888;">Unidades</option>
						<option value="1" style="padding-left:10px;"> kilogramos</option>
						<option value="2" style="padding-left:10px;"> metros</option>
						<option value="3" style="padding-left:10px;"> metros cuadrados</option>
						<option value="4" style="padding-left:10px;"> metros cÃºbicos</option>
						<option value="5" style="padding-left:10px;"> litros</option>
						<option value="6" style="padding-left:10px;"> 1000 kWh</option>
						<option value="7" style="padding-left:10px;"> unidades</option>
						<option value="8" style="padding-left:10px;"> pares</option>
						<option value="9" style="padding-left:10px;"> docenas</option>
						<option value="10" style="padding-left:10px;"> quilates</option>
						<option value="11" style="padding-left:10px;"> millares</option>
						<option value="14" style="padding-left:10px;"> gramos</option>
						<option value="15" style="padding-left:10px;"> milimetros</option>
						<option value="16" style="padding-left:10px;"> mm cÃºbicos</option>
						<option value="17" style="padding-left:10px;"> kilÃ³metros</option>
						<option value="18" style="padding-left:10px;"> hectolitros</option>
						<option value="20" style="padding-left:10px;"> centÃ­metros</option>
						<option value="25" style="padding-left:10px;"> jgo. pqt. mazo naipes</option>
						<option value="27" style="padding-left:10px;"> cm cÃºbicos</option>
						<option value="29" style="padding-left:10px;"> toneladas</option>
						<option value="30" style="padding-left:10px;"> dam cÃºbicos</option>
						<option value="31" style="padding-left:10px;"> hm cÃºbicos</option>
						<option value="32" style="padding-left:10px;"> km cÃºbicos</option>
						<option value="33" style="padding-left:10px;"> microgramos</option>
						<option value="34" style="padding-left:10px;"> nanogramos</option>
						<option value="35" style="padding-left:10px;"> picogramos</option>
						<option value="41" style="padding-left:10px;"> miligramos</option>
						<option value="47" style="padding-left:10px;"> mililitros</option>
						<option value="48" style="padding-left:10px;"> curie</option>
						<option value="49" style="padding-left:10px;"> milicurie</option>
						<option value="50" style="padding-left:10px;"> microcurie</option>
						<option value="51" style="padding-left:10px;"> uiacthor</option>
						<option value="52" style="padding-left:10px;"> muiacthor</option>
						<option value="53" style="padding-left:10px;"> kg base</option>
						<option value="54" style="padding-left:10px;"> gruesa</option>
						<option value="61" style="padding-left:10px;"> kg bruto</option>
						<option value="62" style="padding-left:10px;"> uiactant</option>
						<option value="63" style="padding-left:10px;"> muiactant</option>
						<option value="64" style="padding-left:10px;"> uiactig</option>
						<option value="65" style="padding-left:10px;"> muiactig</option>
						<option value="66" style="padding-left:10px;"> kg activo</option>
						<option value="67" style="padding-left:10px;"> gramo activo</option>
						<option value="68" style="padding-left:10px;"> gramo base</option>
						<option value="96" style="padding-left:10px;"> packs</option>
						<option value="98" style="padding-left:10px;"> otras unidades</option>
						</select></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detallePrecio" maxlength="19" id="detalle_precio1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detallePorcentajeBonificacion" maxlength="6" id="detalle_porcentaje1" value="0" onchange="calcularImporteBonificacionDetalle(1);" size="3"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleImporteBonificacion" maxlength="14" id="detalle_importe_bonificacion1" onchange="calcularPorcentajeBonificacionDetalle(1);">
					<input type="hidden" name="detalleTipoBonificacion" id="detalle_tipo_bonificacion1" value="porcentaje"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleSubtotal1" id="detalle_subtotal11" readonly="readonly"></td>
				<td style="padding:0px 4px;">
					<select name="detalleTipoIVA" id="detalle_tipo_iva1" onchange="calcularSubtotalDetalle(1);" style="width:70px;">
					 <option value="0" style="color:#888;">seleccionar...</option>
					 <option value="1">&nbsp;No gravado</option>
					 <option value="2" selected="selected">&nbsp;Exento</option>
					 <option value="3">&nbsp;0%</option>
					 <option value="9">&nbsp;2,5%</option>
					 <option value="8">&nbsp;5%</option>
					 <option value="4">&nbsp;10,5%</option>
					 <option value="5" >&nbsp;21%</option>
					 <option value="6">&nbsp;27%</option></select>
				</td>

				 <td style="padding:0px 4px;">
				 	<input type="text" name="detalleImporteIVA" id="detalle_importe_iva1" readonly="readonly"></td>
				 <td style="padding:0px 4px;">
				 	<input type="text" name="detalleSubtotal2" id="detalle_subtotal21" readonly="readonly"></td>
				 <!-- <td style="padding:0px 4px;">
				 <span style="width:100%;text-align:center;">
				 <input type="button" name="Eliminar" value="X" style="width:31px;text-align:center;color:#FF0000;font-size:10px;" onclick="borrarFilaDetalle(1);"></span></td> -->
				 </tr>


				 <tr>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleCodigoArticulo" maxlength="19" size="12">
					<input type="hidden" name="detalleNroLinea"></td>
				<td style="padding:0px 4px;">
					<textarea name="detalleDescripcion" id="detalle_descripcion1" style="width: 180px; overflow: auto; height: 19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);"></textarea></td>

				<td style="padding:0px 4px;">
					<input type="text" name="detalleCantidad" maxlength="9" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="1" size="10"></td>
				<td style="padding:0px 4px;">
					<select type="text" name="detalleMedida" id="detalle_medida1" style="width:95px;">
						<option value="7" style="color:#888;">Unidades</option>
						<option value="1" style="padding-left:10px;"> kilogramos</option>
						<option value="2" style="padding-left:10px;"> metros</option>
						<option value="3" style="padding-left:10px;"> metros cuadrados</option>
						<option value="4" style="padding-left:10px;"> metros cÃºbicos</option>
						<option value="5" style="padding-left:10px;"> litros</option>
						<option value="6" style="padding-left:10px;"> 1000 kWh</option>
						<option value="7" style="padding-left:10px;"> unidades</option>
						<option value="8" style="padding-left:10px;"> pares</option>
						<option value="9" style="padding-left:10px;"> docenas</option>
						<option value="10" style="padding-left:10px;"> quilates</option>
						<option value="11" style="padding-left:10px;"> millares</option>
						<option value="14" style="padding-left:10px;"> gramos</option>
						<option value="15" style="padding-left:10px;"> milimetros</option>
						<option value="16" style="padding-left:10px;"> mm cÃºbicos</option>
						<option value="17" style="padding-left:10px;"> kilÃ³metros</option>
						<option value="18" style="padding-left:10px;"> hectolitros</option>
						<option value="20" style="padding-left:10px;"> centÃ­metros</option>
						<option value="25" style="padding-left:10px;"> jgo. pqt. mazo naipes</option>
						<option value="27" style="padding-left:10px;"> cm cÃºbicos</option>
						<option value="29" style="padding-left:10px;"> toneladas</option>
						<option value="30" style="padding-left:10px;"> dam cÃºbicos</option>
						<option value="31" style="padding-left:10px;"> hm cÃºbicos</option>
						<option value="32" style="padding-left:10px;"> km cÃºbicos</option>
						<option value="33" style="padding-left:10px;"> microgramos</option>
						<option value="34" style="padding-left:10px;"> nanogramos</option>
						<option value="35" style="padding-left:10px;"> picogramos</option>
						<option value="41" style="padding-left:10px;"> miligramos</option>
						<option value="47" style="padding-left:10px;"> mililitros</option>
						<option value="48" style="padding-left:10px;"> curie</option>
						<option value="49" style="padding-left:10px;"> milicurie</option>
						<option value="50" style="padding-left:10px;"> microcurie</option>
						<option value="51" style="padding-left:10px;"> uiacthor</option>
						<option value="52" style="padding-left:10px;"> muiacthor</option>
						<option value="53" style="padding-left:10px;"> kg base</option>
						<option value="54" style="padding-left:10px;"> gruesa</option>
						<option value="61" style="padding-left:10px;"> kg bruto</option>
						<option value="62" style="padding-left:10px;"> uiactant</option>
						<option value="63" style="padding-left:10px;"> muiactant</option>
						<option value="64" style="padding-left:10px;"> uiactig</option>
						<option value="65" style="padding-left:10px;"> muiactig</option>
						<option value="66" style="padding-left:10px;"> kg activo</option>
						<option value="67" style="padding-left:10px;"> gramo activo</option>
						<option value="68" style="padding-left:10px;"> gramo base</option>
						<option value="96" style="padding-left:10px;"> packs</option>
						<option value="98" style="padding-left:10px;"> otras unidades</option>
						</select></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detallePrecio" maxlength="19" id="detalle_precio1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detallePorcentajeBonificacion" maxlength="6" id="detalle_porcentaje1" value="0" onchange="calcularImporteBonificacionDetalle(1);" size="3"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleImporteBonificacion" maxlength="14" id="detalle_importe_bonificacion1" onchange="calcularPorcentajeBonificacionDetalle(1);">
					<input type="hidden" name="detalleTipoBonificacion" id="detalle_tipo_bonificacion1" value="porcentaje"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleSubtotal1" id="detalle_subtotal11" readonly="readonly"></td>
				<td style="padding:0px 4px;">
					<select name="detalleTipoIVA" id="detalle_tipo_iva1" onchange="calcularSubtotalDetalle(1);" style="width:70px;">
					 <option value="0" style="color:#888;">seleccionar...</option>
					 <option value="1">&nbsp;No gravado</option>
					 <option value="2" selected="selected">&nbsp;Exento</option>
					 <option value="3">&nbsp;0%</option>
					 <option value="9">&nbsp;2,5%</option>
					 <option value="8">&nbsp;5%</option>
					 <option value="4">&nbsp;10,5%</option>
					 <option value="5" >&nbsp;21%</option>
					 <option value="6">&nbsp;27%</option></select>
				</td>

				 <td style="padding:0px 4px;">
				 	<input type="text" name="detalleImporteIVA" id="detalle_importe_iva1" readonly="readonly"></td>
				 <td style="padding:0px 4px;">
				 	<input type="text" name="detalleSubtotal2" id="detalle_subtotal21" readonly="readonly"></td>
				 <!-- <td style="padding:0px 4px;">
				 <span style="width:100%;text-align:center;">
				 <input type="button" name="Eliminar" value="X" style="width:31px;text-align:center;color:#FF0000;font-size:10px;" onclick="borrarFilaDetalle(1);"></span></td> -->
				 </tr>


				 <tr>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleCodigoArticulo" maxlength="19" size="12">
					<input type="hidden" name="detalleNroLinea"></td>
				<td style="padding:0px 4px;">
					<textarea name="detalleDescripcion" id="detalle_descripcion1" style="width: 180px; overflow: auto; height: 19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);"></textarea></td>

				<td style="padding:0px 4px;">
					<input type="text" name="detalleCantidad" maxlength="9" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="1" size="10"></td>
				<td style="padding:0px 4px;">
					<select type="text" name="detalleMedida" id="detalle_medida1" style="width:95px;">
						<option value="7" style="color:#888;">Unidades</option>
						<option value="1" style="padding-left:10px;"> kilogramos</option>
						<option value="2" style="padding-left:10px;"> metros</option>
						<option value="3" style="padding-left:10px;"> metros cuadrados</option>
						<option value="4" style="padding-left:10px;"> metros cÃºbicos</option>
						<option value="5" style="padding-left:10px;"> litros</option>
						<option value="6" style="padding-left:10px;"> 1000 kWh</option>
						<option value="7" style="padding-left:10px;"> unidades</option>
						<option value="8" style="padding-left:10px;"> pares</option>
						<option value="9" style="padding-left:10px;"> docenas</option>
						<option value="10" style="padding-left:10px;"> quilates</option>
						<option value="11" style="padding-left:10px;"> millares</option>
						<option value="14" style="padding-left:10px;"> gramos</option>
						<option value="15" style="padding-left:10px;"> milimetros</option>
						<option value="16" style="padding-left:10px;"> mm cÃºbicos</option>
						<option value="17" style="padding-left:10px;"> kilÃ³metros</option>
						<option value="18" style="padding-left:10px;"> hectolitros</option>
						<option value="20" style="padding-left:10px;"> centÃ­metros</option>
						<option value="25" style="padding-left:10px;"> jgo. pqt. mazo naipes</option>
						<option value="27" style="padding-left:10px;"> cm cÃºbicos</option>
						<option value="29" style="padding-left:10px;"> toneladas</option>
						<option value="30" style="padding-left:10px;"> dam cÃºbicos</option>
						<option value="31" style="padding-left:10px;"> hm cÃºbicos</option>
						<option value="32" style="padding-left:10px;"> km cÃºbicos</option>
						<option value="33" style="padding-left:10px;"> microgramos</option>
						<option value="34" style="padding-left:10px;"> nanogramos</option>
						<option value="35" style="padding-left:10px;"> picogramos</option>
						<option value="41" style="padding-left:10px;"> miligramos</option>
						<option value="47" style="padding-left:10px;"> mililitros</option>
						<option value="48" style="padding-left:10px;"> curie</option>
						<option value="49" style="padding-left:10px;"> milicurie</option>
						<option value="50" style="padding-left:10px;"> microcurie</option>
						<option value="51" style="padding-left:10px;"> uiacthor</option>
						<option value="52" style="padding-left:10px;"> muiacthor</option>
						<option value="53" style="padding-left:10px;"> kg base</option>
						<option value="54" style="padding-left:10px;"> gruesa</option>
						<option value="61" style="padding-left:10px;"> kg bruto</option>
						<option value="62" style="padding-left:10px;"> uiactant</option>
						<option value="63" style="padding-left:10px;"> muiactant</option>
						<option value="64" style="padding-left:10px;"> uiactig</option>
						<option value="65" style="padding-left:10px;"> muiactig</option>
						<option value="66" style="padding-left:10px;"> kg activo</option>
						<option value="67" style="padding-left:10px;"> gramo activo</option>
						<option value="68" style="padding-left:10px;"> gramo base</option>
						<option value="96" style="padding-left:10px;"> packs</option>
						<option value="98" style="padding-left:10px;"> otras unidades</option>
						</select></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detallePrecio" maxlength="19" id="detalle_precio1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detallePorcentajeBonificacion" maxlength="6" id="detalle_porcentaje1" value="0" onchange="calcularImporteBonificacionDetalle(1);" size="3"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleImporteBonificacion" maxlength="14" id="detalle_importe_bonificacion1" onchange="calcularPorcentajeBonificacionDetalle(1);">
					<input type="hidden" name="detalleTipoBonificacion" id="detalle_tipo_bonificacion1" value="porcentaje"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleSubtotal1" id="detalle_subtotal11" readonly="readonly"></td>
				<td style="padding:0px 4px;">
					<select name="detalleTipoIVA" id="detalle_tipo_iva1" onchange="calcularSubtotalDetalle(1);" style="width:70px;">
					 <option value="0" style="color:#888;">seleccionar...</option>
					 <option value="1">&nbsp;No gravado</option>
					 <option value="2" selected="selected">&nbsp;Exento</option>
					 <option value="3">&nbsp;0%</option>
					 <option value="9">&nbsp;2,5%</option>
					 <option value="8">&nbsp;5%</option>
					 <option value="4">&nbsp;10,5%</option>
					 <option value="5" >&nbsp;21%</option>
					 <option value="6">&nbsp;27%</option></select>
				</td>

				 <td style="padding:0px 4px;">
				 	<input type="text" name="detalleImporteIVA" id="detalle_importe_iva1" readonly="readonly"></td>
				 <td style="padding:0px 4px;">
				 	<input type="text" name="detalleSubtotal2" id="detalle_subtotal21" readonly="readonly"></td>
				 <!-- <td style="padding:0px 4px;">
				 <span style="width:100%;text-align:center;">
				 <input type="button" name="Eliminar" value="X" style="width:31px;text-align:center;color:#FF0000;font-size:10px;" onclick="borrarFilaDetalle(1);"></span></td> -->
				 </tr>



				 <tr>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleCodigoArticulo" maxlength="19" size="12">
					<input type="hidden" name="detalleNroLinea"></td>
				<td style="padding:0px 4px;">
					<textarea name="detalleDescripcion" id="detalle_descripcion1" style="width: 180px; overflow: auto; height: 19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);"></textarea></td>

				<td style="padding:0px 4px;">
					<input type="text" name="detalleCantidad" maxlength="9" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="1" size="10"></td>
				<td style="padding:0px 4px;">
					<select type="text" name="detalleMedida" id="detalle_medida1" style="width:95px;">
						<option value="7" style="color:#888;">Unidades</option>
						<option value="1" style="padding-left:10px;"> kilogramos</option>
						<option value="2" style="padding-left:10px;"> metros</option>
						<option value="3" style="padding-left:10px;"> metros cuadrados</option>
						<option value="4" style="padding-left:10px;"> metros cÃºbicos</option>
						<option value="5" style="padding-left:10px;"> litros</option>
						<option value="6" style="padding-left:10px;"> 1000 kWh</option>
						<option value="7" style="padding-left:10px;"> unidades</option>
						<option value="8" style="padding-left:10px;"> pares</option>
						<option value="9" style="padding-left:10px;"> docenas</option>
						<option value="10" style="padding-left:10px;"> quilates</option>
						<option value="11" style="padding-left:10px;"> millares</option>
						<option value="14" style="padding-left:10px;"> gramos</option>
						<option value="15" style="padding-left:10px;"> milimetros</option>
						<option value="16" style="padding-left:10px;"> mm cÃºbicos</option>
						<option value="17" style="padding-left:10px;"> kilÃ³metros</option>
						<option value="18" style="padding-left:10px;"> hectolitros</option>
						<option value="20" style="padding-left:10px;"> centÃ­metros</option>
						<option value="25" style="padding-left:10px;"> jgo. pqt. mazo naipes</option>
						<option value="27" style="padding-left:10px;"> cm cÃºbicos</option>
						<option value="29" style="padding-left:10px;"> toneladas</option>
						<option value="30" style="padding-left:10px;"> dam cÃºbicos</option>
						<option value="31" style="padding-left:10px;"> hm cÃºbicos</option>
						<option value="32" style="padding-left:10px;"> km cÃºbicos</option>
						<option value="33" style="padding-left:10px;"> microgramos</option>
						<option value="34" style="padding-left:10px;"> nanogramos</option>
						<option value="35" style="padding-left:10px;"> picogramos</option>
						<option value="41" style="padding-left:10px;"> miligramos</option>
						<option value="47" style="padding-left:10px;"> mililitros</option>
						<option value="48" style="padding-left:10px;"> curie</option>
						<option value="49" style="padding-left:10px;"> milicurie</option>
						<option value="50" style="padding-left:10px;"> microcurie</option>
						<option value="51" style="padding-left:10px;"> uiacthor</option>
						<option value="52" style="padding-left:10px;"> muiacthor</option>
						<option value="53" style="padding-left:10px;"> kg base</option>
						<option value="54" style="padding-left:10px;"> gruesa</option>
						<option value="61" style="padding-left:10px;"> kg bruto</option>
						<option value="62" style="padding-left:10px;"> uiactant</option>
						<option value="63" style="padding-left:10px;"> muiactant</option>
						<option value="64" style="padding-left:10px;"> uiactig</option>
						<option value="65" style="padding-left:10px;"> muiactig</option>
						<option value="66" style="padding-left:10px;"> kg activo</option>
						<option value="67" style="padding-left:10px;"> gramo activo</option>
						<option value="68" style="padding-left:10px;"> gramo base</option>
						<option value="96" style="padding-left:10px;"> packs</option>
						<option value="98" style="padding-left:10px;"> otras unidades</option>
						</select></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detallePrecio" maxlength="19" id="detalle_precio1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detallePorcentajeBonificacion" maxlength="6" id="detalle_porcentaje1" value="0" onchange="calcularImporteBonificacionDetalle(1);" size="3"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleImporteBonificacion" maxlength="14" id="detalle_importe_bonificacion1" onchange="calcularPorcentajeBonificacionDetalle(1);">
					<input type="hidden" name="detalleTipoBonificacion" id="detalle_tipo_bonificacion1" value="porcentaje"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleSubtotal1" id="detalle_subtotal11" readonly="readonly"></td>
				<td style="padding:0px 4px;">
					<select name="detalleTipoIVA" id="detalle_tipo_iva1" onchange="calcularSubtotalDetalle(1);" style="width:70px;">
					 <option value="0" style="color:#888;">seleccionar...</option>
					 <option value="1">&nbsp;No gravado</option>
					 <option value="2" selected="selected">&nbsp;Exento</option>
					 <option value="3">&nbsp;0%</option>
					 <option value="9">&nbsp;2,5%</option>
					 <option value="8">&nbsp;5%</option>
					 <option value="4">&nbsp;10,5%</option>
					 <option value="5" >&nbsp;21%</option>
					 <option value="6">&nbsp;27%</option></select>
				</td>

				 <td style="padding:0px 4px;">
				 	<input type="text" name="detalleImporteIVA" id="detalle_importe_iva1" readonly="readonly"></td>
				 <td style="padding:0px 4px;">
				 	<input type="text" name="detalleSubtotal2" id="detalle_subtotal21" readonly="readonly"></td>
				 <!-- <td style="padding:0px 4px;">
				 <span style="width:100%;text-align:center;">
				 <input type="button" name="Eliminar" value="X" style="width:31px;text-align:center;color:#FF0000;font-size:10px;" onclick="borrarFilaDetalle(1);"></span></td> -->
				 </tr>




				 <tr>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleCodigoArticulo" maxlength="19" size="12">
					<input type="hidden" name="detalleNroLinea"></td>
				<td style="padding:0px 4px;">
					<textarea name="detalleDescripcion" id="detalle_descripcion1" style="width: 180px; overflow: auto; height: 19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);"></textarea></td>

				<td style="padding:0px 4px;">
					<input type="text" name="detalleCantidad" maxlength="9" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="1" size="10"></td>
				<td style="padding:0px 4px;">
					<select type="text" name="detalleMedida" id="detalle_medida1" style="width:95px;">
						<option value="7" style="color:#888;">Unidades</option>
						<option value="1" style="padding-left:10px;"> kilogramos</option>
						<option value="2" style="padding-left:10px;"> metros</option>
						<option value="3" style="padding-left:10px;"> metros cuadrados</option>
						<option value="4" style="padding-left:10px;"> metros cÃºbicos</option>
						<option value="5" style="padding-left:10px;"> litros</option>
						<option value="6" style="padding-left:10px;"> 1000 kWh</option>
						<option value="7" style="padding-left:10px;"> unidades</option>
						<option value="8" style="padding-left:10px;"> pares</option>
						<option value="9" style="padding-left:10px;"> docenas</option>
						<option value="10" style="padding-left:10px;"> quilates</option>
						<option value="11" style="padding-left:10px;"> millares</option>
						<option value="14" style="padding-left:10px;"> gramos</option>
						<option value="15" style="padding-left:10px;"> milimetros</option>
						<option value="16" style="padding-left:10px;"> mm cÃºbicos</option>
						<option value="17" style="padding-left:10px;"> kilÃ³metros</option>
						<option value="18" style="padding-left:10px;"> hectolitros</option>
						<option value="20" style="padding-left:10px;"> centÃ­metros</option>
						<option value="25" style="padding-left:10px;"> jgo. pqt. mazo naipes</option>
						<option value="27" style="padding-left:10px;"> cm cÃºbicos</option>
						<option value="29" style="padding-left:10px;"> toneladas</option>
						<option value="30" style="padding-left:10px;"> dam cÃºbicos</option>
						<option value="31" style="padding-left:10px;"> hm cÃºbicos</option>
						<option value="32" style="padding-left:10px;"> km cÃºbicos</option>
						<option value="33" style="padding-left:10px;"> microgramos</option>
						<option value="34" style="padding-left:10px;"> nanogramos</option>
						<option value="35" style="padding-left:10px;"> picogramos</option>
						<option value="41" style="padding-left:10px;"> miligramos</option>
						<option value="47" style="padding-left:10px;"> mililitros</option>
						<option value="48" style="padding-left:10px;"> curie</option>
						<option value="49" style="padding-left:10px;"> milicurie</option>
						<option value="50" style="padding-left:10px;"> microcurie</option>
						<option value="51" style="padding-left:10px;"> uiacthor</option>
						<option value="52" style="padding-left:10px;"> muiacthor</option>
						<option value="53" style="padding-left:10px;"> kg base</option>
						<option value="54" style="padding-left:10px;"> gruesa</option>
						<option value="61" style="padding-left:10px;"> kg bruto</option>
						<option value="62" style="padding-left:10px;"> uiactant</option>
						<option value="63" style="padding-left:10px;"> muiactant</option>
						<option value="64" style="padding-left:10px;"> uiactig</option>
						<option value="65" style="padding-left:10px;"> muiactig</option>
						<option value="66" style="padding-left:10px;"> kg activo</option>
						<option value="67" style="padding-left:10px;"> gramo activo</option>
						<option value="68" style="padding-left:10px;"> gramo base</option>
						<option value="96" style="padding-left:10px;"> packs</option>
						<option value="98" style="padding-left:10px;"> otras unidades</option>
						</select></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detallePrecio" maxlength="19" id="detalle_precio1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detallePorcentajeBonificacion" maxlength="6" id="detalle_porcentaje1" value="0" onchange="calcularImporteBonificacionDetalle(1);" size="3"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleImporteBonificacion" maxlength="14" id="detalle_importe_bonificacion1" onchange="calcularPorcentajeBonificacionDetalle(1);">
					<input type="hidden" name="detalleTipoBonificacion" id="detalle_tipo_bonificacion1" value="porcentaje"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleSubtotal1" id="detalle_subtotal11" readonly="readonly"></td>
				<td style="padding:0px 4px;">
					<select name="detalleTipoIVA" id="detalle_tipo_iva1" onchange="calcularSubtotalDetalle(1);" style="width:70px;">
					 <option value="0" style="color:#888;">seleccionar...</option>
					 <option value="1">&nbsp;No gravado</option>
					 <option value="2" selected="selected">&nbsp;Exento</option>
					 <option value="3">&nbsp;0%</option>
					 <option value="9">&nbsp;2,5%</option>
					 <option value="8">&nbsp;5%</option>
					 <option value="4">&nbsp;10,5%</option>
					 <option value="5" >&nbsp;21%</option>
					 <option value="6">&nbsp;27%</option></select>
				</td>

				 <td style="padding:0px 4px;">
				 	<input type="text" name="detalleImporteIVA" id="detalle_importe_iva1" readonly="readonly"></td>
				 <td style="padding:0px 4px;">
				 	<input type="text" name="detalleSubtotal2" id="detalle_subtotal21" readonly="readonly"></td>
				 <!-- <td style="padding:0px 4px;">
				 <span style="width:100%;text-align:center;">
				 <input type="button" name="Eliminar" value="X" style="width:31px;text-align:center;color:#FF0000;font-size:10px;" onclick="borrarFilaDetalle(1);"></span></td> -->
				 </tr>



				 <tr>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleCodigoArticulo" maxlength="19" size="12">
					<input type="hidden" name="detalleNroLinea"></td>
				<td style="padding:0px 4px;">
					<textarea name="detalleDescripcion" id="detalle_descripcion1" style="width: 180px; overflow: auto; height: 19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);"></textarea></td>

				<td style="padding:0px 4px;">
					<input type="text" name="detalleCantidad" maxlength="9" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="1" size="10"></td>
				<td style="padding:0px 4px;">
					<select type="text" name="detalleMedida" id="detalle_medida1" style="width:95px;">
						<option value="7" style="color:#888;">Unidades</option>
						<option value="1" style="padding-left:10px;"> kilogramos</option>
						<option value="2" style="padding-left:10px;"> metros</option>
						<option value="3" style="padding-left:10px;"> metros cuadrados</option>
						<option value="4" style="padding-left:10px;"> metros cÃºbicos</option>
						<option value="5" style="padding-left:10px;"> litros</option>
						<option value="6" style="padding-left:10px;"> 1000 kWh</option>
						<option value="7" style="padding-left:10px;"> unidades</option>
						<option value="8" style="padding-left:10px;"> pares</option>
						<option value="9" style="padding-left:10px;"> docenas</option>
						<option value="10" style="padding-left:10px;"> quilates</option>
						<option value="11" style="padding-left:10px;"> millares</option>
						<option value="14" style="padding-left:10px;"> gramos</option>
						<option value="15" style="padding-left:10px;"> milimetros</option>
						<option value="16" style="padding-left:10px;"> mm cÃºbicos</option>
						<option value="17" style="padding-left:10px;"> kilÃ³metros</option>
						<option value="18" style="padding-left:10px;"> hectolitros</option>
						<option value="20" style="padding-left:10px;"> centÃ­metros</option>
						<option value="25" style="padding-left:10px;"> jgo. pqt. mazo naipes</option>
						<option value="27" style="padding-left:10px;"> cm cÃºbicos</option>
						<option value="29" style="padding-left:10px;"> toneladas</option>
						<option value="30" style="padding-left:10px;"> dam cÃºbicos</option>
						<option value="31" style="padding-left:10px;"> hm cÃºbicos</option>
						<option value="32" style="padding-left:10px;"> km cÃºbicos</option>
						<option value="33" style="padding-left:10px;"> microgramos</option>
						<option value="34" style="padding-left:10px;"> nanogramos</option>
						<option value="35" style="padding-left:10px;"> picogramos</option>
						<option value="41" style="padding-left:10px;"> miligramos</option>
						<option value="47" style="padding-left:10px;"> mililitros</option>
						<option value="48" style="padding-left:10px;"> curie</option>
						<option value="49" style="padding-left:10px;"> milicurie</option>
						<option value="50" style="padding-left:10px;"> microcurie</option>
						<option value="51" style="padding-left:10px;"> uiacthor</option>
						<option value="52" style="padding-left:10px;"> muiacthor</option>
						<option value="53" style="padding-left:10px;"> kg base</option>
						<option value="54" style="padding-left:10px;"> gruesa</option>
						<option value="61" style="padding-left:10px;"> kg bruto</option>
						<option value="62" style="padding-left:10px;"> uiactant</option>
						<option value="63" style="padding-left:10px;"> muiactant</option>
						<option value="64" style="padding-left:10px;"> uiactig</option>
						<option value="65" style="padding-left:10px;"> muiactig</option>
						<option value="66" style="padding-left:10px;"> kg activo</option>
						<option value="67" style="padding-left:10px;"> gramo activo</option>
						<option value="68" style="padding-left:10px;"> gramo base</option>
						<option value="96" style="padding-left:10px;"> packs</option>
						<option value="98" style="padding-left:10px;"> otras unidades</option>
						</select></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detallePrecio" maxlength="19" id="detalle_precio1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detallePorcentajeBonificacion" maxlength="6" id="detalle_porcentaje1" value="0" onchange="calcularImporteBonificacionDetalle(1);" size="3"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleImporteBonificacion" maxlength="14" id="detalle_importe_bonificacion1" onchange="calcularPorcentajeBonificacionDetalle(1);">
					<input type="hidden" name="detalleTipoBonificacion" id="detalle_tipo_bonificacion1" value="porcentaje"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleSubtotal1" id="detalle_subtotal11" readonly="readonly"></td>
				<td style="padding:0px 4px;">
					<select name="detalleTipoIVA" id="detalle_tipo_iva1" onchange="calcularSubtotalDetalle(1);" style="width:70px;">
					 <option value="0" style="color:#888;">seleccionar...</option>
					 <option value="1">&nbsp;No gravado</option>
					 <option value="2" selected="selected">&nbsp;Exento</option>
					 <option value="3">&nbsp;0%</option>
					 <option value="9">&nbsp;2,5%</option>
					 <option value="8">&nbsp;5%</option>
					 <option value="4">&nbsp;10,5%</option>
					 <option value="5" >&nbsp;21%</option>
					 <option value="6">&nbsp;27%</option></select>
				</td>

				 <td style="padding:0px 4px;">
				 	<input type="text" name="detalleImporteIVA" id="detalle_importe_iva1" readonly="readonly"></td>
				 <td style="padding:0px 4px;">
				 	<input type="text" name="detalleSubtotal2" id="detalle_subtotal21" readonly="readonly"></td>
				 <!-- <td style="padding:0px 4px;">
				 <span style="width:100%;text-align:center;">
				 <input type="button" name="Eliminar" value="X" style="width:31px;text-align:center;color:#FF0000;font-size:10px;" onclick="borrarFilaDetalle(1);"></span></td> -->
				 </tr>


				 <tr>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleCodigoArticulo" maxlength="19" size="12">
					<input type="hidden" name="detalleNroLinea"></td>
				<td style="padding:0px 4px;">
					<textarea name="detalleDescripcion" id="detalle_descripcion1" style="width: 180px; overflow: auto; height: 19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);"></textarea></td>

				<td style="padding:0px 4px;">
					<input type="text" name="detalleCantidad" maxlength="9" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="1" size="10"></td>
				<td style="padding:0px 4px;">
					<select type="text" name="detalleMedida" id="detalle_medida1" style="width:95px;">
						<option value="7" style="color:#888;">Unidades</option>
						<option value="1" style="padding-left:10px;"> kilogramos</option>
						<option value="2" style="padding-left:10px;"> metros</option>
						<option value="3" style="padding-left:10px;"> metros cuadrados</option>
						<option value="4" style="padding-left:10px;"> metros cÃºbicos</option>
						<option value="5" style="padding-left:10px;"> litros</option>
						<option value="6" style="padding-left:10px;"> 1000 kWh</option>
						<option value="7" style="padding-left:10px;"> unidades</option>
						<option value="8" style="padding-left:10px;"> pares</option>
						<option value="9" style="padding-left:10px;"> docenas</option>
						<option value="10" style="padding-left:10px;"> quilates</option>
						<option value="11" style="padding-left:10px;"> millares</option>
						<option value="14" style="padding-left:10px;"> gramos</option>
						<option value="15" style="padding-left:10px;"> milimetros</option>
						<option value="16" style="padding-left:10px;"> mm cÃºbicos</option>
						<option value="17" style="padding-left:10px;"> kilÃ³metros</option>
						<option value="18" style="padding-left:10px;"> hectolitros</option>
						<option value="20" style="padding-left:10px;"> centÃ­metros</option>
						<option value="25" style="padding-left:10px;"> jgo. pqt. mazo naipes</option>
						<option value="27" style="padding-left:10px;"> cm cÃºbicos</option>
						<option value="29" style="padding-left:10px;"> toneladas</option>
						<option value="30" style="padding-left:10px;"> dam cÃºbicos</option>
						<option value="31" style="padding-left:10px;"> hm cÃºbicos</option>
						<option value="32" style="padding-left:10px;"> km cÃºbicos</option>
						<option value="33" style="padding-left:10px;"> microgramos</option>
						<option value="34" style="padding-left:10px;"> nanogramos</option>
						<option value="35" style="padding-left:10px;"> picogramos</option>
						<option value="41" style="padding-left:10px;"> miligramos</option>
						<option value="47" style="padding-left:10px;"> mililitros</option>
						<option value="48" style="padding-left:10px;"> curie</option>
						<option value="49" style="padding-left:10px;"> milicurie</option>
						<option value="50" style="padding-left:10px;"> microcurie</option>
						<option value="51" style="padding-left:10px;"> uiacthor</option>
						<option value="52" style="padding-left:10px;"> muiacthor</option>
						<option value="53" style="padding-left:10px;"> kg base</option>
						<option value="54" style="padding-left:10px;"> gruesa</option>
						<option value="61" style="padding-left:10px;"> kg bruto</option>
						<option value="62" style="padding-left:10px;"> uiactant</option>
						<option value="63" style="padding-left:10px;"> muiactant</option>
						<option value="64" style="padding-left:10px;"> uiactig</option>
						<option value="65" style="padding-left:10px;"> muiactig</option>
						<option value="66" style="padding-left:10px;"> kg activo</option>
						<option value="67" style="padding-left:10px;"> gramo activo</option>
						<option value="68" style="padding-left:10px;"> gramo base</option>
						<option value="96" style="padding-left:10px;"> packs</option>
						<option value="98" style="padding-left:10px;"> otras unidades</option>
						</select></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detallePrecio" maxlength="19" id="detalle_precio1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detallePorcentajeBonificacion" maxlength="6" id="detalle_porcentaje1" value="0" onchange="calcularImporteBonificacionDetalle(1);" size="3"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleImporteBonificacion" maxlength="14" id="detalle_importe_bonificacion1" onchange="calcularPorcentajeBonificacionDetalle(1);">
					<input type="hidden" name="detalleTipoBonificacion" id="detalle_tipo_bonificacion1" value="porcentaje"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleSubtotal1" id="detalle_subtotal11" readonly="readonly"></td>
				<td style="padding:0px 4px;">
					<select name="detalleTipoIVA" id="detalle_tipo_iva1" onchange="calcularSubtotalDetalle(1);" style="width:70px;">
					 <option value="0" style="color:#888;">seleccionar...</option>
					 <option value="1">&nbsp;No gravado</option>
					 <option value="2" selected="selected">&nbsp;Exento</option>
					 <option value="3">&nbsp;0%</option>
					 <option value="9">&nbsp;2,5%</option>
					 <option value="8">&nbsp;5%</option>
					 <option value="4">&nbsp;10,5%</option>
					 <option value="5" >&nbsp;21%</option>
					 <option value="6">&nbsp;27%</option></select>
				</td>

				 <td style="padding:0px 4px;">
				 	<input type="text" name="detalleImporteIVA" id="detalle_importe_iva1" readonly="readonly"></td>
				 <td style="padding:0px 4px;">
				 	<input type="text" name="detalleSubtotal2" id="detalle_subtotal21" readonly="readonly"></td>
				 <!-- <td style="padding:0px 4px;">
				 <span style="width:100%;text-align:center;">
				 <input type="button" name="Eliminar" value="X" style="width:31px;text-align:center;color:#FF0000;font-size:10px;" onclick="borrarFilaDetalle(1);"></span></td> -->
				 </tr>



				 <tr>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleCodigoArticulo" maxlength="19" size="12">
					<input type="hidden" name="detalleNroLinea"></td>
				<td style="padding:0px 4px;">
					<textarea name="detalleDescripcion" id="detalle_descripcion1" style="width: 180px; overflow: auto; height: 19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);"></textarea></td>

				<td style="padding:0px 4px;">
					<input type="text" name="detalleCantidad" maxlength="9" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="1" size="10"></td>
				<td style="padding:0px 4px;">
					<select type="text" name="detalleMedida" id="detalle_medida1" style="width:95px;">
						<option value="7" style="color:#888;">Unidades</option>
						<option value="1" style="padding-left:10px;"> kilogramos</option>
						<option value="2" style="padding-left:10px;"> metros</option>
						<option value="3" style="padding-left:10px;"> metros cuadrados</option>
						<option value="4" style="padding-left:10px;"> metros cÃºbicos</option>
						<option value="5" style="padding-left:10px;"> litros</option>
						<option value="6" style="padding-left:10px;"> 1000 kWh</option>
						<option value="7" style="padding-left:10px;"> unidades</option>
						<option value="8" style="padding-left:10px;"> pares</option>
						<option value="9" style="padding-left:10px;"> docenas</option>
						<option value="10" style="padding-left:10px;"> quilates</option>
						<option value="11" style="padding-left:10px;"> millares</option>
						<option value="14" style="padding-left:10px;"> gramos</option>
						<option value="15" style="padding-left:10px;"> milimetros</option>
						<option value="16" style="padding-left:10px;"> mm cÃºbicos</option>
						<option value="17" style="padding-left:10px;"> kilÃ³metros</option>
						<option value="18" style="padding-left:10px;"> hectolitros</option>
						<option value="20" style="padding-left:10px;"> centÃ­metros</option>
						<option value="25" style="padding-left:10px;"> jgo. pqt. mazo naipes</option>
						<option value="27" style="padding-left:10px;"> cm cÃºbicos</option>
						<option value="29" style="padding-left:10px;"> toneladas</option>
						<option value="30" style="padding-left:10px;"> dam cÃºbicos</option>
						<option value="31" style="padding-left:10px;"> hm cÃºbicos</option>
						<option value="32" style="padding-left:10px;"> km cÃºbicos</option>
						<option value="33" style="padding-left:10px;"> microgramos</option>
						<option value="34" style="padding-left:10px;"> nanogramos</option>
						<option value="35" style="padding-left:10px;"> picogramos</option>
						<option value="41" style="padding-left:10px;"> miligramos</option>
						<option value="47" style="padding-left:10px;"> mililitros</option>
						<option value="48" style="padding-left:10px;"> curie</option>
						<option value="49" style="padding-left:10px;"> milicurie</option>
						<option value="50" style="padding-left:10px;"> microcurie</option>
						<option value="51" style="padding-left:10px;"> uiacthor</option>
						<option value="52" style="padding-left:10px;"> muiacthor</option>
						<option value="53" style="padding-left:10px;"> kg base</option>
						<option value="54" style="padding-left:10px;"> gruesa</option>
						<option value="61" style="padding-left:10px;"> kg bruto</option>
						<option value="62" style="padding-left:10px;"> uiactant</option>
						<option value="63" style="padding-left:10px;"> muiactant</option>
						<option value="64" style="padding-left:10px;"> uiactig</option>
						<option value="65" style="padding-left:10px;"> muiactig</option>
						<option value="66" style="padding-left:10px;"> kg activo</option>
						<option value="67" style="padding-left:10px;"> gramo activo</option>
						<option value="68" style="padding-left:10px;"> gramo base</option>
						<option value="96" style="padding-left:10px;"> packs</option>
						<option value="98" style="padding-left:10px;"> otras unidades</option>
						</select></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detallePrecio" maxlength="19" id="detalle_precio1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detallePorcentajeBonificacion" maxlength="6" id="detalle_porcentaje1" value="0" onchange="calcularImporteBonificacionDetalle(1);" size="3"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleImporteBonificacion" maxlength="14" id="detalle_importe_bonificacion1" onchange="calcularPorcentajeBonificacionDetalle(1);">
					<input type="hidden" name="detalleTipoBonificacion" id="detalle_tipo_bonificacion1" value="porcentaje"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleSubtotal1" id="detalle_subtotal11" readonly="readonly"></td>
				<td style="padding:0px 4px;">
					<select name="detalleTipoIVA" id="detalle_tipo_iva1" onchange="calcularSubtotalDetalle(1);" style="width:70px;">
					 <option value="0" style="color:#888;">seleccionar...</option>
					 <option value="1">&nbsp;No gravado</option>
					 <option value="2" selected="selected">&nbsp;Exento</option>
					 <option value="3">&nbsp;0%</option>
					 <option value="9">&nbsp;2,5%</option>
					 <option value="8">&nbsp;5%</option>
					 <option value="4">&nbsp;10,5%</option>
					 <option value="5" >&nbsp;21%</option>
					 <option value="6">&nbsp;27%</option></select>
				</td>

				 <td style="padding:0px 4px;">
				 	<input type="text" name="detalleImporteIVA" id="detalle_importe_iva1" readonly="readonly"></td>
				 <td style="padding:0px 4px;">
				 	<input type="text" name="detalleSubtotal2" id="detalle_subtotal21" readonly="readonly"></td>
				 <!-- <td style="padding:0px 4px;">
				 <span style="width:100%;text-align:center;">
				 <input type="button" name="Eliminar" value="X" style="width:31px;text-align:center;color:#FF0000;font-size:10px;" onclick="borrarFilaDetalle(1);"></span></td> -->
				 </tr>



				 <tr>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleCodigoArticulo" maxlength="19" size="12">
					<input type="hidden" name="detalleNroLinea"></td>
				<td style="padding:0px 4px;">
					<textarea name="detalleDescripcion" id="detalle_descripcion1" style="width: 180px; overflow: auto; height: 19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);"></textarea></td>

				<td style="padding:0px 4px;">
					<input type="text" name="detalleCantidad" maxlength="9" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="1" size="10"></td>
				<td style="padding:0px 4px;">
					<select type="text" name="detalleMedida" id="detalle_medida1" style="width:95px;">
						<option value="7" style="color:#888;">Unidades</option>
						<option value="1" style="padding-left:10px;"> kilogramos</option>
						<option value="2" style="padding-left:10px;"> metros</option>
						<option value="3" style="padding-left:10px;"> metros cuadrados</option>
						<option value="4" style="padding-left:10px;"> metros cÃºbicos</option>
						<option value="5" style="padding-left:10px;"> litros</option>
						<option value="6" style="padding-left:10px;"> 1000 kWh</option>
						<option value="7" style="padding-left:10px;"> unidades</option>
						<option value="8" style="padding-left:10px;"> pares</option>
						<option value="9" style="padding-left:10px;"> docenas</option>
						<option value="10" style="padding-left:10px;"> quilates</option>
						<option value="11" style="padding-left:10px;"> millares</option>
						<option value="14" style="padding-left:10px;"> gramos</option>
						<option value="15" style="padding-left:10px;"> milimetros</option>
						<option value="16" style="padding-left:10px;"> mm cÃºbicos</option>
						<option value="17" style="padding-left:10px;"> kilÃ³metros</option>
						<option value="18" style="padding-left:10px;"> hectolitros</option>
						<option value="20" style="padding-left:10px;"> centÃ­metros</option>
						<option value="25" style="padding-left:10px;"> jgo. pqt. mazo naipes</option>
						<option value="27" style="padding-left:10px;"> cm cÃºbicos</option>
						<option value="29" style="padding-left:10px;"> toneladas</option>
						<option value="30" style="padding-left:10px;"> dam cÃºbicos</option>
						<option value="31" style="padding-left:10px;"> hm cÃºbicos</option>
						<option value="32" style="padding-left:10px;"> km cÃºbicos</option>
						<option value="33" style="padding-left:10px;"> microgramos</option>
						<option value="34" style="padding-left:10px;"> nanogramos</option>
						<option value="35" style="padding-left:10px;"> picogramos</option>
						<option value="41" style="padding-left:10px;"> miligramos</option>
						<option value="47" style="padding-left:10px;"> mililitros</option>
						<option value="48" style="padding-left:10px;"> curie</option>
						<option value="49" style="padding-left:10px;"> milicurie</option>
						<option value="50" style="padding-left:10px;"> microcurie</option>
						<option value="51" style="padding-left:10px;"> uiacthor</option>
						<option value="52" style="padding-left:10px;"> muiacthor</option>
						<option value="53" style="padding-left:10px;"> kg base</option>
						<option value="54" style="padding-left:10px;"> gruesa</option>
						<option value="61" style="padding-left:10px;"> kg bruto</option>
						<option value="62" style="padding-left:10px;"> uiactant</option>
						<option value="63" style="padding-left:10px;"> muiactant</option>
						<option value="64" style="padding-left:10px;"> uiactig</option>
						<option value="65" style="padding-left:10px;"> muiactig</option>
						<option value="66" style="padding-left:10px;"> kg activo</option>
						<option value="67" style="padding-left:10px;"> gramo activo</option>
						<option value="68" style="padding-left:10px;"> gramo base</option>
						<option value="96" style="padding-left:10px;"> packs</option>
						<option value="98" style="padding-left:10px;"> otras unidades</option>
						</select></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detallePrecio" maxlength="19" id="detalle_precio1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detallePorcentajeBonificacion" maxlength="6" id="detalle_porcentaje1" value="0" onchange="calcularImporteBonificacionDetalle(1);" size="3"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleImporteBonificacion" maxlength="14" id="detalle_importe_bonificacion1" onchange="calcularPorcentajeBonificacionDetalle(1);">
					<input type="hidden" name="detalleTipoBonificacion" id="detalle_tipo_bonificacion1" value="porcentaje"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleSubtotal1" id="detalle_subtotal11" readonly="readonly"></td>
				<td style="padding:0px 4px;">
					<select name="detalleTipoIVA" id="detalle_tipo_iva1" onchange="calcularSubtotalDetalle(1);" style="width:70px;">
					 <option value="0" style="color:#888;">seleccionar...</option>
					 <option value="1">&nbsp;No gravado</option>
					 <option value="2" selected="selected">&nbsp;Exento</option>
					 <option value="3">&nbsp;0%</option>
					 <option value="9">&nbsp;2,5%</option>
					 <option value="8">&nbsp;5%</option>
					 <option value="4">&nbsp;10,5%</option>
					 <option value="5" >&nbsp;21%</option>
					 <option value="6">&nbsp;27%</option></select>
				</td>

				 <td style="padding:0px 4px;">
				 	<input type="text" name="detalleImporteIVA" id="detalle_importe_iva1" readonly="readonly"></td>
				 <td style="padding:0px 4px;">
				 	<input type="text" name="detalleSubtotal2" id="detalle_subtotal21" readonly="readonly"></td>
				 <!-- <td style="padding:0px 4px;">
				 <span style="width:100%;text-align:center;">
				 <input type="button" name="Eliminar" value="X" style="width:31px;text-align:center;color:#FF0000;font-size:10px;" onclick="borrarFilaDetalle(1);"></span></td> -->
				 </tr>



				 <tr>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleCodigoArticulo" maxlength="19" size="12">
					<input type="hidden" name="detalleNroLinea"></td>
				<td style="padding:0px 4px;">
					<textarea name="detalleDescripcion" id="detalle_descripcion1" style="width: 180px; overflow: auto; height: 19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);"></textarea></td>

				<td style="padding:0px 4px;">
					<input type="text" name="detalleCantidad" maxlength="9" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="1" size="10"></td>
				<td style="padding:0px 4px;">
					<select type="text" name="detalleMedida" id="detalle_medida1" style="width:95px;">
						<option value="7" style="color:#888;">Unidades</option>
						<option value="1" style="padding-left:10px;"> kilogramos</option>
						<option value="2" style="padding-left:10px;"> metros</option>
						<option value="3" style="padding-left:10px;"> metros cuadrados</option>
						<option value="4" style="padding-left:10px;"> metros cÃºbicos</option>
						<option value="5" style="padding-left:10px;"> litros</option>
						<option value="6" style="padding-left:10px;"> 1000 kWh</option>
						<option value="7" style="padding-left:10px;"> unidades</option>
						<option value="8" style="padding-left:10px;"> pares</option>
						<option value="9" style="padding-left:10px;"> docenas</option>
						<option value="10" style="padding-left:10px;"> quilates</option>
						<option value="11" style="padding-left:10px;"> millares</option>
						<option value="14" style="padding-left:10px;"> gramos</option>
						<option value="15" style="padding-left:10px;"> milimetros</option>
						<option value="16" style="padding-left:10px;"> mm cÃºbicos</option>
						<option value="17" style="padding-left:10px;"> kilÃ³metros</option>
						<option value="18" style="padding-left:10px;"> hectolitros</option>
						<option value="20" style="padding-left:10px;"> centÃ­metros</option>
						<option value="25" style="padding-left:10px;"> jgo. pqt. mazo naipes</option>
						<option value="27" style="padding-left:10px;"> cm cÃºbicos</option>
						<option value="29" style="padding-left:10px;"> toneladas</option>
						<option value="30" style="padding-left:10px;"> dam cÃºbicos</option>
						<option value="31" style="padding-left:10px;"> hm cÃºbicos</option>
						<option value="32" style="padding-left:10px;"> km cÃºbicos</option>
						<option value="33" style="padding-left:10px;"> microgramos</option>
						<option value="34" style="padding-left:10px;"> nanogramos</option>
						<option value="35" style="padding-left:10px;"> picogramos</option>
						<option value="41" style="padding-left:10px;"> miligramos</option>
						<option value="47" style="padding-left:10px;"> mililitros</option>
						<option value="48" style="padding-left:10px;"> curie</option>
						<option value="49" style="padding-left:10px;"> milicurie</option>
						<option value="50" style="padding-left:10px;"> microcurie</option>
						<option value="51" style="padding-left:10px;"> uiacthor</option>
						<option value="52" style="padding-left:10px;"> muiacthor</option>
						<option value="53" style="padding-left:10px;"> kg base</option>
						<option value="54" style="padding-left:10px;"> gruesa</option>
						<option value="61" style="padding-left:10px;"> kg bruto</option>
						<option value="62" style="padding-left:10px;"> uiactant</option>
						<option value="63" style="padding-left:10px;"> muiactant</option>
						<option value="64" style="padding-left:10px;"> uiactig</option>
						<option value="65" style="padding-left:10px;"> muiactig</option>
						<option value="66" style="padding-left:10px;"> kg activo</option>
						<option value="67" style="padding-left:10px;"> gramo activo</option>
						<option value="68" style="padding-left:10px;"> gramo base</option>
						<option value="96" style="padding-left:10px;"> packs</option>
						<option value="98" style="padding-left:10px;"> otras unidades</option>
						</select></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detallePrecio" maxlength="19" id="detalle_precio1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detallePorcentajeBonificacion" maxlength="6" id="detalle_porcentaje1" value="0" onchange="calcularImporteBonificacionDetalle(1);" size="3"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleImporteBonificacion" maxlength="14" id="detalle_importe_bonificacion1" onchange="calcularPorcentajeBonificacionDetalle(1);">
					<input type="hidden" name="detalleTipoBonificacion" id="detalle_tipo_bonificacion1" value="porcentaje"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleSubtotal1" id="detalle_subtotal11" readonly="readonly"></td>
				<td style="padding:0px 4px;">
					<select name="detalleTipoIVA" id="detalle_tipo_iva1" onchange="calcularSubtotalDetalle(1);" style="width:70px;">
					 <option value="0" style="color:#888;">seleccionar...</option>
					 <option value="1">&nbsp;No gravado</option>
					 <option value="2" selected="selected">&nbsp;Exento</option>
					 <option value="3">&nbsp;0%</option>
					 <option value="9">&nbsp;2,5%</option>
					 <option value="8">&nbsp;5%</option>
					 <option value="4">&nbsp;10,5%</option>
					 <option value="5" >&nbsp;21%</option>
					 <option value="6">&nbsp;27%</option></select>
				</td>

				 <td style="padding:0px 4px;">
				 	<input type="text" name="detalleImporteIVA" id="detalle_importe_iva1" readonly="readonly"></td>
				 <td style="padding:0px 4px;">
				 	<input type="text" name="detalleSubtotal2" id="detalle_subtotal21" readonly="readonly"></td>
				 <!-- <td style="padding:0px 4px;">
				 <span style="width:100%;text-align:center;">
				 <input type="button" name="Eliminar" value="X" style="width:31px;text-align:center;color:#FF0000;font-size:10px;" onclick="borrarFilaDetalle(1);"></span></td> -->
				 </tr>




				 <tr>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleCodigoArticulo" maxlength="19" size="12">
					<input type="hidden" name="detalleNroLinea"></td>
				<td style="padding:0px 4px;">
					<textarea name="detalleDescripcion" id="detalle_descripcion1" style="width: 180px; overflow: auto; height: 19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);"></textarea></td>

				<td style="padding:0px 4px;">
					<input type="text" name="detalleCantidad" maxlength="9" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="1" size="10"></td>
				<td style="padding:0px 4px;">
					<select type="text" name="detalleMedida" id="detalle_medida1" style="width:95px;">
						<option value="7" style="color:#888;">Unidades</option>
						<option value="1" style="padding-left:10px;"> kilogramos</option>
						<option value="2" style="padding-left:10px;"> metros</option>
						<option value="3" style="padding-left:10px;"> metros cuadrados</option>
						<option value="4" style="padding-left:10px;"> metros cÃºbicos</option>
						<option value="5" style="padding-left:10px;"> litros</option>
						<option value="6" style="padding-left:10px;"> 1000 kWh</option>
						<option value="7" style="padding-left:10px;"> unidades</option>
						<option value="8" style="padding-left:10px;"> pares</option>
						<option value="9" style="padding-left:10px;"> docenas</option>
						<option value="10" style="padding-left:10px;"> quilates</option>
						<option value="11" style="padding-left:10px;"> millares</option>
						<option value="14" style="padding-left:10px;"> gramos</option>
						<option value="15" style="padding-left:10px;"> milimetros</option>
						<option value="16" style="padding-left:10px;"> mm cÃºbicos</option>
						<option value="17" style="padding-left:10px;"> kilÃ³metros</option>
						<option value="18" style="padding-left:10px;"> hectolitros</option>
						<option value="20" style="padding-left:10px;"> centÃ­metros</option>
						<option value="25" style="padding-left:10px;"> jgo. pqt. mazo naipes</option>
						<option value="27" style="padding-left:10px;"> cm cÃºbicos</option>
						<option value="29" style="padding-left:10px;"> toneladas</option>
						<option value="30" style="padding-left:10px;"> dam cÃºbicos</option>
						<option value="31" style="padding-left:10px;"> hm cÃºbicos</option>
						<option value="32" style="padding-left:10px;"> km cÃºbicos</option>
						<option value="33" style="padding-left:10px;"> microgramos</option>
						<option value="34" style="padding-left:10px;"> nanogramos</option>
						<option value="35" style="padding-left:10px;"> picogramos</option>
						<option value="41" style="padding-left:10px;"> miligramos</option>
						<option value="47" style="padding-left:10px;"> mililitros</option>
						<option value="48" style="padding-left:10px;"> curie</option>
						<option value="49" style="padding-left:10px;"> milicurie</option>
						<option value="50" style="padding-left:10px;"> microcurie</option>
						<option value="51" style="padding-left:10px;"> uiacthor</option>
						<option value="52" style="padding-left:10px;"> muiacthor</option>
						<option value="53" style="padding-left:10px;"> kg base</option>
						<option value="54" style="padding-left:10px;"> gruesa</option>
						<option value="61" style="padding-left:10px;"> kg bruto</option>
						<option value="62" style="padding-left:10px;"> uiactant</option>
						<option value="63" style="padding-left:10px;"> muiactant</option>
						<option value="64" style="padding-left:10px;"> uiactig</option>
						<option value="65" style="padding-left:10px;"> muiactig</option>
						<option value="66" style="padding-left:10px;"> kg activo</option>
						<option value="67" style="padding-left:10px;"> gramo activo</option>
						<option value="68" style="padding-left:10px;"> gramo base</option>
						<option value="96" style="padding-left:10px;"> packs</option>
						<option value="98" style="padding-left:10px;"> otras unidades</option>
						</select></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detallePrecio" maxlength="19" id="detalle_precio1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detallePorcentajeBonificacion" maxlength="6" id="detalle_porcentaje1" value="0" onchange="calcularImporteBonificacionDetalle(1);" size="3"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleImporteBonificacion" maxlength="14" id="detalle_importe_bonificacion1" onchange="calcularPorcentajeBonificacionDetalle(1);">
					<input type="hidden" name="detalleTipoBonificacion" id="detalle_tipo_bonificacion1" value="porcentaje"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleSubtotal1" id="detalle_subtotal11" readonly="readonly"></td>
				<td style="padding:0px 4px;">
					<select name="detalleTipoIVA" id="detalle_tipo_iva1" onchange="calcularSubtotalDetalle(1);" style="width:70px;">
					 <option value="0" style="color:#888;">seleccionar...</option>
					 <option value="1">&nbsp;No gravado</option>
					 <option value="2" selected="selected">&nbsp;Exento</option>
					 <option value="3">&nbsp;0%</option>
					 <option value="9">&nbsp;2,5%</option>
					 <option value="8">&nbsp;5%</option>
					 <option value="4">&nbsp;10,5%</option>
					 <option value="5" >&nbsp;21%</option>
					 <option value="6">&nbsp;27%</option></select>
				</td>

				 <td style="padding:0px 4px;">
				 	<input type="text" name="detalleImporteIVA" id="detalle_importe_iva1" readonly="readonly"></td>
				 <td style="padding:0px 4px;">
				 	<input type="text" name="detalleSubtotal2" id="detalle_subtotal21" readonly="readonly"></td>
				 <!-- <td style="padding:0px 4px;">
				 <span style="width:100%;text-align:center;">
				 <input type="button" name="Eliminar" value="X" style="width:31px;text-align:center;color:#FF0000;font-size:10px;" onclick="borrarFilaDetalle(1);"></span></td> -->
				 </tr>

					<!--  -->

				 <tr>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleCodigoArticulo" maxlength="19" size="12">
					<input type="hidden" name="detalleNroLinea"></td>
					
				<td style="padding:0px 4px;">
					<textarea name="detalleDescripcion" id="detalle_descripcion1" style="width: 180px; overflow: auto; height: 19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);"></textarea></td>

				<td style="padding:0px 4px;">
					<input type="text" name="detalleCantidad" maxlength="9" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="1" size="10"></td>
				<td style="padding:0px 4px;">
					<select type="text" name="detalleMedida" id="detalle_medida1" style="width:95px;">
						<option value="7" style="color:#888;">Unidades</option>
						<option value="1" style="padding-left:10px;"> kilogramos</option>
						<option value="2" style="padding-left:10px;"> metros</option>
						<option value="3" style="padding-left:10px;"> metros cuadrados</option>
						<option value="4" style="padding-left:10px;"> metros cÃºbicos</option>
						<option value="5" style="padding-left:10px;"> litros</option>
						<option value="6" style="padding-left:10px;"> 1000 kWh</option>
						<option value="7" style="padding-left:10px;"> unidades</option>
						<option value="8" style="padding-left:10px;"> pares</option>
						<option value="9" style="padding-left:10px;"> docenas</option>
						<option value="10" style="padding-left:10px;"> quilates</option>
						<option value="11" style="padding-left:10px;"> millares</option>
						<option value="14" style="padding-left:10px;"> gramos</option>
						<option value="15" style="padding-left:10px;"> milimetros</option>
						<option value="16" style="padding-left:10px;"> mm cÃºbicos</option>
						<option value="17" style="padding-left:10px;"> kilÃ³metros</option>
						<option value="18" style="padding-left:10px;"> hectolitros</option>
						<option value="20" style="padding-left:10px;"> centÃ­metros</option>
						<option value="25" style="padding-left:10px;"> jgo. pqt. mazo naipes</option>
						<option value="27" style="padding-left:10px;"> cm cÃºbicos</option>
						<option value="29" style="padding-left:10px;"> toneladas</option>
						<option value="30" style="padding-left:10px;"> dam cÃºbicos</option>
						<option value="31" style="padding-left:10px;"> hm cÃºbicos</option>
						<option value="32" style="padding-left:10px;"> km cÃºbicos</option>
						<option value="33" style="padding-left:10px;"> microgramos</option>
						<option value="34" style="padding-left:10px;"> nanogramos</option>
						<option value="35" style="padding-left:10px;"> picogramos</option>
						<option value="41" style="padding-left:10px;"> miligramos</option>
						<option value="47" style="padding-left:10px;"> mililitros</option>
						<option value="48" style="padding-left:10px;"> curie</option>
						<option value="49" style="padding-left:10px;"> milicurie</option>
						<option value="50" style="padding-left:10px;"> microcurie</option>
						<option value="51" style="padding-left:10px;"> uiacthor</option>
						<option value="52" style="padding-left:10px;"> muiacthor</option>
						<option value="53" style="padding-left:10px;"> kg base</option>
						<option value="54" style="padding-left:10px;"> gruesa</option>
						<option value="61" style="padding-left:10px;"> kg bruto</option>
						<option value="62" style="padding-left:10px;"> uiactant</option>
						<option value="63" style="padding-left:10px;"> muiactant</option>
						<option value="64" style="padding-left:10px;"> uiactig</option>
						<option value="65" style="padding-left:10px;"> muiactig</option>
						<option value="66" style="padding-left:10px;"> kg activo</option>
						<option value="67" style="padding-left:10px;"> gramo activo</option>
						<option value="68" style="padding-left:10px;"> gramo base</option>
						<option value="96" style="padding-left:10px;"> packs</option>
						<option value="98" style="padding-left:10px;"> otras unidades</option>
						</select></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detallePrecio" maxlength="19" id="detalle_precio1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detallePorcentajeBonificacion" maxlength="6" id="detalle_porcentaje1" value="0" onchange="calcularImporteBonificacionDetalle(1);" size="3"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleImporteBonificacion" maxlength="14" id="detalle_importe_bonificacion1" onchange="calcularPorcentajeBonificacionDetalle(1);">
					<input type="hidden" name="detalleTipoBonificacion" id="detalle_tipo_bonificacion1" value="porcentaje"></td>
				<td style="padding:0px 4px;">
					<input type="text" name="detalleSubtotal1" id="detalle_subtotal11" readonly="readonly"></td>
				<td style="padding:0px 4px;">
					<select name="detalleTipoIVA" id="detalle_tipo_iva1" onchange="calcularSubtotalDetalle(1);" style="width:70px;">
					 <option value="0" style="color:#888;">seleccionar...</option>
					 <option value="1">&nbsp;No gravado</option>
					 <option value="2" selected="selected">&nbsp;Exento</option>
					 <option value="3">&nbsp;0%</option>
					 <option value="9">&nbsp;2,5%</option>
					 <option value="8">&nbsp;5%</option>
					 <option value="4">&nbsp;10,5%</option>
					 <option value="5" >&nbsp;21%</option>
					 <option value="6">&nbsp;27%</option></select>
				</td>

				 <td style="padding:0px 4px;">
				 	<input type="text" name="detalleImporteIVA" id="detalle_importe_iva1" readonly="readonly"></td>
				 <td style="padding:0px 4px;">
				 	<input type="text" name="detalleSubtotal2" id="detalle_subtotal21" readonly="readonly"></td>
				 
				 </tr>
			 </tbody>
	 	</table>

	 	<script>
	 		function calcularSubtotalDetalle(fila)
				{
					if (cambioManualDetalle)
					{
						cambioManualDetalle = false;
						var cantidad = document.getElementById('detalle_cantidad'+fila).value*1;
						var precio = document.getElementById('detalle_precio'+fila).value*1;
						var subTotalNeto = precio * cantidad;
						
						var importeBon = document.getElementById('detalle_importe_bonificacion'+fila).value*1;
						var subtotal1 = subTotalNeto - importeBon;

						var tipoIVA = document.getElementById('detalle_tipo_iva'+fila).value;
						if (isNaN(tipoIVA)) tipoIVA = 0;

						var importeIVA = 0;
						if (tipoIVA == 4)
							importeIVA = subtotal1 * 0.105;
						else if (tipoIVA == 5)
							importeIVA = subtotal1 * 0.21;
						else if (tipoIVA == 6)
							importeIVA = subtotal1 * 0.27;
						else if (tipoIVA == 8)
							importeIVA = subtotal1 * 0.05;
						else if (tipoIVA == 9)
							importeIVA = subtotal1 * 0.025;
						
						if (subtotal1.toFixed) {
							document.getElementById('detalle_subtotal1'+fila).value = subtotal1.toFixed(2);
							document.getElementById('detalle_importe_iva'+fila).value = importeIVA.toFixed(2);
							document.getElementById('detalle_subtotal2'+fila).value = (subTotalNeto - importeBon + importeIVA).toFixed(2);
						} else {
							document.getElementById('detalle_subtotal1'+fila).value = subtotal1;
							document.getElementById('detalle_importe_iva'+fila).value = importeIVA;
							document.getElementById('detalle_subtotal2'+fila).value = subTotalNeto - importeBon + importeIVA;
						}

						calcularTotal();
						cambioManualDetalle = true;
					}
				}

				function calcularTotal()
				{
					var tbl = document.getElementById('idoperacion');
					var numFilas = tbl.rows.length;
					var fila;
					var totalNetoNoGravado = 0;
					var totalExento = 0;
					var totalNetoGravado = 0;
					var totalIVA27 = 0;
					var totalIVA21 = 0;
					var totalIVA105 = 0;
					var totalIVA5 = 0;
					var totalIVA2 = 0;
					var totalImpuestos = document.getElementById('imptotalimpuestos2').value*1;
					var total = 0;
					var totalPesos = 0;
					for (var i = 1; i < numFilasDetalles+1; i++)
					{
						fila = tbl.rows[i];
						if (fila.cells[8].firstChild.value == "1")
							totalNetoNoGravado += fila.cells[7].firstChild.value*1;
						else if (fila.cells[8].firstChild.value == "2")
							totalExento += fila.cells[7].firstChild.value*1;
						else if (fila.cells[8].firstChild.value == "3")
							totalNetoGravado += fila.cells[7].firstChild.value*1;
						else if (fila.cells[8].firstChild.value == "4") {
							totalIVA105 += fila.cells[9].firstChild.value*1;
							totalNetoGravado += fila.cells[7].firstChild.value*1;
						}
						else if (fila.cells[8].firstChild.value == "5") {
							totalIVA21 += fila.cells[9].firstChild.value*1;
							totalNetoGravado += fila.cells[7].firstChild.value*1;
						}
						else if (fila.cells[8].firstChild.value == "6") {
							totalIVA27 += fila.cells[9].firstChild.value*1;
							totalNetoGravado += fila.cells[7].firstChild.value*1;
						}
						else if (fila.cells[8].firstChild.value == "8") {
							totalIVA5 += fila.cells[9].firstChild.value*1;
							totalNetoGravado += fila.cells[7].firstChild.value*1;
						}
						else if (fila.cells[8].firstChild.value == "9") {
							totalIVA2 += fila.cells[9].firstChild.value*1;
							totalNetoGravado += fila.cells[7].firstChild.value*1;
						}
						total += fila.cells[10].firstChild.value*1;
					}
					if (totalNetoNoGravado.toFixed) {
						document.getElementById("impnetonogravado").value = totalNetoNoGravado.toFixed(2);
						document.getElementById("impexento").value = totalExento.toFixed(2);
						document.getElementById("impnetogravado").value = totalNetoGravado.toFixed(2);
						//recalcularBonificacionForzado();
						document.getElementById("impiva27").value = totalIVA27.toFixed(2);
						document.getElementById("impiva21").value = totalIVA21.toFixed(2);
						document.getElementById("impiva105").value = totalIVA105.toFixed(2);
						document.getElementById("impiva5").value = totalIVA5.toFixed(2);
						document.getElementById("impiva2").value = totalIVA2.toFixed(2);
						//document.getElementById("creditoiva").value = ((totalIVA27+totalIVA21+totalIVA105)*document.getElementById('porcbonifglobal').value/100.0).toFixed(2);
						document.getElementById("imptotal").value = (total/*-valorImporteBonifGlobal*/+totalImpuestos).toFixed(2);
						if (simboloMoneda != "$")
						{
							totalPesos = (document.getElementById("imptotal").value*1)*tipoCambio;
							document.getElementById("imptotalpesos").value = totalPesos.toFixed(2);
						}
					}
					else {
						document.getElementById("impnetonogravado").value = totalNetoNoGravado;
						document.getElementById("impexento").value = totalExento;
						document.getElementById("impnetogravado").value = totalNetoGravado;
						document.getElementById("impiva27").value = totalIVA27;
						document.getElementById("impiva21").value = totalIVA21;
						document.getElementById("impiva105").value = totalIVA105;
						document.getElementById("impiva5").value = totalIVA5;
						document.getElementById("impiva2").value = totalIVA2;

						document.getElementById("imptotal").value = total/*-valorImporteBonifGlobal*/+totalImpuestos;
						if (simboloMoneda != "$")
						{
							totalPesos = (document.getElementById("imptotal").value*1)*tipoCambio;
							document.getElementById("imptotalpesos").value = totalPesos.toFixed(2);
						}
					}
				}

	 	</script>