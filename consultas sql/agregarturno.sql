CREATE DEFINER=`root`@`localhost` PROCEDURE `pa_agregarturno`(turno char(5))
begin
insert into tablaturno(turno)
values(turno);
end