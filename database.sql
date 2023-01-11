/* tablas para reporte final del proyecto  */
create table proyecto (
	id serial primary key,
	nombre_proyecto varchar(50),
	nombre_cfe varchar(50),
	rpu varchar (15),
	domicilio varchar (150),
	cantidad_paneles integer,
	capacidad_panel varchar(100),
	capacidad_instalada varchar(50),
	fecha_inicio date,
	fecha_fin date,
	activo bool,
	telefono varchar (50),
	email varchar (50),
	fecha_anticipo date,
	sub_estructura int
)

create table ingeniero (
	id_proyecto serial primary key,
	nombre_ingeniero varchar(100),
	contraseña varchar(50),
	CONSTRAINT fk_proyecto
      FOREIGN KEY(id_proyecto) 
	  REFERENCES proyecto(id)
)

create table ingeniero_proyect(
	id_proyecto int,
	id_ingeniero int,
      FOREIGN KEY(id_proyecto) REFERENCES proyecto(id),
      FOREIGN KEY(id_ingeniero) REFERENCES ingeniero(id)
)

create table ingreso (
	id_proyecto int,
	fachada1 varchar(200) null,
	fachada2 varchar(200) null,
	fachada3 varchar(200) null,
	observaciones text null,
	CONSTRAINT fk_proyecto
      FOREIGN KEY(id_proyecto)
	  REFERENCES proyecto(id)
)

create table inversor (
	id_proyecto int,
	inversor varchar(200) null,
	etiqueta varchar(200) null,
	cableado varchar(200) null,
	generando varchar(200) null,
	cableado_gusano varchar (200) null,
	observaciones text null,
	CONSTRAINT fk_proyecto
      FOREIGN KEY(id_proyecto)
	  REFERENCES proyecto(id)
)

create table centro_carga (
	id_proyecto int,
	centro_carga varchar(200) null,
	itm varchar(200) null,
	cableado varchar(200) null,
	observaciones text null,
	CONSTRAINT fk_proyecto
      FOREIGN KEY(id_proyecto) 
	  REFERENCES proyecto(id)
)

create table obra_civil_plantabaja(
	id_proyecto int,
	planta_baja1 varchar(200) null,
	planta_baja2 varchar(200) null,
	planta_baja3 varchar(200) null,
	observaciones text null,
	CONSTRAINT fk_proyecto
      FOREIGN KEY(id_proyecto) 
	  REFERENCES proyecto(id)
)

create table tuberia(
	id_proyecto int,
	fijacion_tuberia varchar(200) null,
	abrazadera varchar(200) null,
	unicanal varchar(200) null,
	condulet varchar(200) null,
	glandulas varchar(200) null,
	cruce_muro varchar(200) null,
	cruce_bobeda varchar(200) null,
	observaciones text null,
	CONSTRAINT fk_proyecto
	FOREIGN KEY(id_proyecto) 
	REFERENCES proyecto(id)
)

create table caja_gabinete (
	id_proyecto int,
	caja_gabinete varchar(200) null,
	fusibles varchar(200) null,
	peinado_cables varchar(200) null,
	observaciones text null,
	CONSTRAINT fk_proyecto
      FOREIGN KEY(id_proyecto) 
	  REFERENCES proyecto(id)
)

create table estructura (
	id_proyecto int,
	fijacion_modulos varchar(200) null,
	entrepaneles varchar(200) null,
	orillas varchar(200) null,
	sub_estructura varchar(200) null,
	fijacion_estructura varchar(200) null,
	observaciones text null,
	CONSTRAINT fk_proyecto
      FOREIGN KEY(id_proyecto) 
	  REFERENCES proyecto(id)
)

create table paneles(
	id_proyecto int,
	capacidad varchar(200) null,
	cantidad varchar(200) null,
	paneles1 varchar(200) null,
	paneles2 varchar(200)null,
	paneles3 varchar(200)null,
	paneles4 varchar(200)null,
	observaciones text null,
	CONSTRAINT fk_proyecto
	FOREIGN KEY(id_proyecto) 
	REFERENCES proyecto(id)
)

create table mc4(
	id_proyecto int,
	mc41 varchar(200) null,
	mc42 varchar(200) null,
	mc43 varchar(200) null,
	observaciones text null,
	CONSTRAINT fk_proyecto
      FOREIGN KEY(id_proyecto) 
	  REFERENCES proyecto(id)
)

create table cinchado_cableado (
	id_proyecto int,
	cinchado1 varchar(200)null,
	cinchado2 varchar(200) null,
	cinchado3 varchar(200) null,
	observaciones text null,
	CONSTRAINT fk_proyecto
      FOREIGN KEY(id_proyecto) 
	  REFERENCES proyecto(id)
)

create table obra_civil_plantalta(
	id_proyecto int,
	planta_alta1 varchar(200) null,
	planta_alta2 varchar(200) null,
	planta_alta3 varchar(200) null,
	observaciones text null,
	CONSTRAINT fk_proyecto
      FOREIGN KEY(id_proyecto) 
	  REFERENCES proyecto(id)
)

create table extras(
	id_proyecto int,
	medidor_antiguo varchar(200) null,
	extra1 varchar(200) null,
	extra2 varchar(200) null,
	extra3 varchar(200) null,
	extra4 varchar(200) null,
	extra5 varchar(200) null,
	CONSTRAINT fk_proyecto
      FOREIGN KEY(id_proyecto) 
	  REFERENCES proyecto(id)
)



select * from proyecto;
select * from ingeniero;
select * from ingeniero_proyect;
select * from ingreso;
select * from inversor;
select * from centro_carga;
select * from obra_civil_plantabaja;
select * from tuberia;
select * from caja_gabinete;
select * from estructura;
select * from paneles;
select * from mc4;
select * from cinchado_cableado;
select * from obra_civil_plantalta;
select * from extras;

TRUNCATE TABLE ingeniero_proyect, ingreso, inversor, centro_carga,obra_civil_plantabaja, tuberia, caja_gabinete, estructura, paneles, mc4, cinchado_cableado, obra_civil_plantalta, extras;


/* tablas para levantamiento  */

create table ingeniero_levantamiento(
	id_proyecto int,
	id_ingeniero int,
      FOREIGN KEY(id_proyecto) REFERENCES proyecto(id),
      FOREIGN KEY(id_ingeniero) REFERENCES ingeniero(id)
)

create table ingreso_lev (
	id_proyecto int,
	fachada1 varchar(200) null,
	fachada2 varchar(200) null,
	fachada3 varchar(200) null,	
	observaciones text null,
	CONSTRAINT fk_proyecto
      FOREIGN KEY(id_proyecto)
	  REFERENCES proyecto(id)
)

create table area_paneles (
	id_proyecto int,
	area_paneles1 varchar(200) null,
	area_paneles2 varchar(200) null,
	area_paneles3 varchar(200) null,
	panoramica varchar(200) null,
	observaciones text null,
	CONSTRAINT fk_proyecto
      FOREIGN KEY(id_proyecto)
	  REFERENCES proyecto(id)
)

create table superficie_paneles (
	id_proyecto int,
	tipo_superficie varchar(20) null,
	superficie_paneles1 varchar(200) null,
	superficie_paneles2 varchar(200) null,
	superficie_paneles3 varchar(200) null,
	observaciones text null,
	CONSTRAINT fk_proyecto
      FOREIGN KEY(id_proyecto)
	  REFERENCES proyecto(id)
)

create table puntos_cardinales (
	id_proyecto int,
	norte varchar(200) null,
	sur varchar(200) null,
	este varchar(200) null,
	oeste varchar(200) null,
	observaciones text null,
	CONSTRAINT fk_proyecto
      FOREIGN KEY(id_proyecto)
	  REFERENCES proyecto(id)
)

create table pretil (
	id_proyecto int,
	pretil1 varchar(200) null,
	pretil2 varchar(200) null,
	pretil3 varchar(200) null,
	maxima varchar(100) null,
	minima varchar(100) null,
	observaciones text null,
	CONSTRAINT fk_proyecto
      FOREIGN KEY(id_proyecto)
	  REFERENCES proyecto(id)
)

create table obstaculos (
	id_proyecto int,
	obstaculo1 varchar(200) null,
	obstaculo2 varchar(200) null,
	obstaculo3 varchar(200) null,
	observaciones text null,
	CONSTRAINT fk_proyecto
      FOREIGN KEY(id_proyecto)
	  REFERENCES proyecto(id)
)

create table trayecto_panel_caja (
	id_proyecto int,
	trayecto1 varchar(200) null,
	trayecto2 varchar(200) null,
	trayecto3 varchar(200) null,
	trayecto4 varchar(200) null,
	trayecto5 varchar(200) null,
	observaciones text null,
	CONSTRAINT fk_proyecto
      FOREIGN KEY(id_proyecto)
	  REFERENCES proyecto(id)
)

create table trayecto_caja_inversor (
	id_proyecto int,
	trayecto1 varchar(200) null,
	trayecto2 varchar(200) null,
	trayecto3 varchar(200) null,
	trayecto4 varchar(200) null,
	trayecto5 varchar(200) null,
	observaciones text null,
	CONSTRAINT fk_proyecto
      FOREIGN KEY(id_proyecto)
	  REFERENCES proyecto(id)
)


create table lugar_inversor (
	id_proyecto int,
	lugar1 varchar(200) null,
	lugar2 varchar(200) null,
	lugar3 varchar(200) null,
	observaciones text null,
	CONSTRAINT fk_proyecto
      FOREIGN KEY(id_proyecto)
	  REFERENCES proyecto(id)
)

create table trayecto_inversor_centro (
	id_proyecto int,
	trayecto1 varchar(200) null,
	trayecto2 varchar(200) null,
	trayecto3 varchar(200) null,
	trayecto4 varchar(200) null,
	trayecto5 varchar(200) null,
	observaciones text null,
	CONSTRAINT fk_proyecto
      FOREIGN KEY(id_proyecto)
	  REFERENCES proyecto(id)
)

create table centroc_existente (
	id_proyecto int,
	trayecto1 varchar(200) null,
	trayecto2 varchar(200) null,
	trayecto3 varchar(200) null,
	observaciones text null,
	fases varchar(100) null,
	CONSTRAINT fk_proyecto
      FOREIGN KEY(id_proyecto)
	  REFERENCES proyecto(id)
)

create table medidor (
	id_proyecto int,
	medidor varchar(200) null,
	tipo varchar(200) null,
	observaciones text null,
	CONSTRAINT fk_proyecto
      FOREIGN KEY(id_proyecto)
	  REFERENCES proyecto(id)
)

create table tipo (
	id_proyecto int,
	calibre varchar(200) null,
	longitud varchar(200) null,
	observaciones text null,
	CONSTRAINT fk_proyecto
      FOREIGN KEY(id_proyecto)
	  REFERENCES proyecto(id)
)

select * from proyecto;
select * from ingeniero_levantamiento;
select * from ingreso_lev;
select * from area_paneles;
select * from superficie_paneles;
select * from puntos_cardinales;
select * from pretil;
select * from obstaculos;
select * from trayecto_panel_caja;
select * from trayecto_caja_inversor;
select * from lugar_inversor;
select * from trayecto_inversor_centro;
select * from centroc_existente;
select * from medidor;
select * from tipo;

truncate table ingeniero_levantamiento,ingreso_lev,area_paneles,superficie_paneles,
puntos_cardinales,pretil,obstaculos,trayecto_panel_caja,trayecto_caja_inversor,lugar_inversor,
trayecto_inversor_centro,centroc_existente,medidor,tipo;


create table avance(
	id_proyecto int,
	nombre_ingeniero varchar(100),
	imagen varchar(200),
	hora varchar(10),
	dia date,
	CONSTRAINT fk_proyecto
      FOREIGN KEY(id_proyecto) 
	  REFERENCES proyecto(id)
)