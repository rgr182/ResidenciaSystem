CREATE DEFINER=`root`@`localhost` PROCEDURE `pa_agregarlinea`(linea varchar(8))
begin
insert into tablalinea(linea)
values(linea);
end