drop view vw_guia_semanal_Dias;
drop view vw_guia_semanal_Estados;
drop view vw_guia_semanal_Medidas;
drop view vw_guia_semanal_cantidades;
drop view vw_guia_semanal;



CREATE VIEW `vw_guia_semanal_Dias` AS 
      select distinct day(tr.fecha) as dia, DAYNAME(tr.Fecha) diaNombre, date(tr.fecha) fecha
      from tracking tr 
      where DATE_SUB(CURDATE(),INTERVAL 30 DAY) <= tr.fecha
      order by tr.fecha DESC;

CREATE VIEW `vw_guia_semanal_Estados` AS 
      select distinct tr.id_guia_estado, ge.estado
      from tracking tr 
      inner join guias_estado ge on tr.id_guia_estado = ge.id_guia_estado
      where DATE_SUB(CURDATE(),INTERVAL 30 DAY) <= tr.fecha
      order by id_guia_estado ASC;

CREATE VIEW `vw_guia_semanal_Medidas` AS 
select * from vw_guia_semanal_Dias
inner join vw_guia_semanal_Estados;

CREATE VIEW `vw_guia_semanal_cantidades` AS 
select date(tr.fecha) fecha, ge.id_guia_estado, count(*) cantidad
from tracking tr 
inner join guias_estado ge on tr.id_guia_estado = ge.id_guia_estado 
group by date(tr.fecha),ge.id_guia_estado;

CREATE VIEW `vw_guia_semanal` AS 
select dia,diaNombre, x.id_guia_estado, estado, ifnull(cantidad,0) cantidad 
from  vw_guia_semanal_Medidas x
left join  vw_guia_semanal_cantidades  c on x.fecha = c.fecha and x.id_guia_estado = c.id_guia_estado
order by x.id_guia_estado, x.fecha desc;

select * from vw_guia_semanal;
select * from vw_guia_semanal_Estados
select * from vw_guia_semanal_Dias
     
      