


//creamos variableas array para cada departamento
var departamentos_Asesoria_Juridica=["Privada Asesoría Jurídica","Asesoría Jurídica","Mesa De Entradas"];
var departamentos_COET=["COET","Departamento Técnico","Departamento Administrativo","Coordinación del Proyecto USB"];
var departamentos_Coordinacion_Area_De_Informatica=["Infraestructura y Comunicación","Desarrollo de Nuevas Tecnologías","Seguridad y Gobierno De La Información","Archivo y Digitalización"];
var departamentos_Coordinacion_UFE=["Departamento De Gestión De Programas","Departamento Operativo Y De Administración De Programas","Departamento De Gestión De Obras"];
var departamentos_Comunicacion_Y_Diseno=["Comunicación Y Diseño"];
var departamentos_Delegaciones=["Litoral","Centro","Buenos Aires","Norte Grande Cuyo"];
var departamentos_Gerencia_Administrativa_Financiera =["Privada GAF","Departamento Financiero Y De Rendición De Cuentas","Planeamiento Y Control Presupuestario","Contabilidad","Compras Y Licitaciones","Departamento Tesorería","Departamento De Mantenimiento Y Servicios Generales","Seguridad e Higiene","Área de Flota Vehicular"];
var departamentos_Gerencia_General=["Privada Gerencia General"];
var departamentos_Gerencia_Tecnica=["Gerencia Técnica","Privada Gerencia Técnica","Sub Gerencia Estudios y Proyectos","Sub Gerencia Ejecutiva","Coordinación de Proyectos Especiales"];
var departamentos_Observatorio_de_Genero=["Observatorio de Género"];
var departamentos_PROFESA=["Área Técnica","Área De Control De Gestión Y Certificación","Área Administrativa Y De Seguimiento De Gestión"];
var departamentos_Recursos_Humanos=["Privada RRHH"];
var departamentos_Unidad_Administrador=["Unidad Administrador","Coordinación General De Asuntos Institucionales","Coordinación General De Proyectos","Comisión Permanente De Evaluación De Ofertas","Coordinación General De La Secretaría Privada"];
var departamentos_Unidad_de_Auditoria_Interna=["Privada UAI"];
var departamentos_Unidad_de_Sumario=["Unidad de Sumario"];
var departamentos_Unidad_Sub_Administrador=["Unidad Sub Administrador ","Coordinación General De Asuntos Administrativos","Coordinación General De Abordaje Territorial","Privada Sub Administrador"];

function cambia_departamento(){
 //tomamos el valor del select departamento elegido
 var dpt
 dpt = document.getElementById('departamentos').value	
     mis_dptos = acentos(dpt)
     // verificamos si el Departamento está definido

if (mis_dptos!=0) { 
      	 //si estaba definido, entonces coloco las opciones del Departamento correspondiente. 
      	 //selecciono el array del departamento adecuado 
      	 mis_municipios=eval("departamentos_"+mis_dptos) 
      	  //calculo el numero de municipios 
      	 num_municipios = mis_municipios.length 
      	 //marco el número de municipios en el select 
      	 document.f1.minucipios.length = num_municipios 
      	 //para cada municipio del array, lo introduzco en el select 
      	 for(i=0;i<num_municipios;i++){ 
         	 document.f1.minucipios.options[i].value=mis_municipios[i] 
         	 document.f1.minucipios.options[i].text=mis_municipios[i] 
      	 }	
   	    }else{ 
      	 //si no había municipio seleccionado, elimino los municipios del select 
      	 document.f1.minucipios.length = 1 
      	 //coloco un guión en la única opción que he dejado 
      	 document.f1.minucipios.options[0].value = " " 
      	 document.f1.minucipios.options[0].text = "SIN ASIGNAR" 
   	   } 
   	}// FIN DE FUNCIONcambia_departamento

   function acentos(dpt){
   var acentuada
   if(dpt=="Asesoría Jurídica"){ acentuada="Asesoria_Juridica"; }
   else{
	if(dpt=="Coordinación Área De Informática"){ acentuada="Coordinacion_Area_De_Informatica"; }
	else{
		if(dpt=="Coordinación UFE"){ acentuada="Coordinacion_UFE"; }
		else{
			if(dpt=="Comunicación Y Diseño"){ acentuada="Comunicacion_Y_Diseno"; }
			else{
				if(dpt=="Gerencia Administrativa Financiera"){ acentuada="Gerencia_Administrativa_Financiera"; }
				else{
					if(dpt=="Gerencia General"){ acentuada="Gerencia_General"; }
					else{
						if(dpt=="Gerencia Técnica"){ acentuada="Gerencia_Tecnica"; }
						else{
							if(dpt=="Observatorio de Género"){ acentuada="Observatorio_de_Genero";}
							else{
								if(dpt=="Recursos Humanos"){ acentuada="Recursos_Humanos"; }
								else{
  									 if(dpt=="Unidad Administrador"){ acentuada="Unidad_Administrador"; }
  										 else{
											if(dpt=="Unidad de Auditoría Interna"){ acentuada="Unidad_de_Auditoria_Interna"; }
											else{
												if(dpt=="Unidad de Sumario"){ acentuada="Unidad_de_Sumario"; }
												else{
   													if(dpt=="Unidad Sub Administrador"){ acentuada="Unidad_Sub_Administrador"; }
   														else{
														 acentuada=dpt;
                                               }
   											}
   										}
   									}	
   									}
   								}
   							}
   						}
   					}
   				}
   			}
   		}
   	}
   
   	
   		
return  acentuada

   }// fin funcion acentos

   