drop view vw_guia_mensual_Dias;
drop view vw_guia_mensual_Estados;
drop view vw_guia_mensual_Medidas;
drop view vw_guia_mensual_cantidades;
drop view vw_guia_mensual;

CREATE VIEW `vw_guia_mensual_Dias` AS 

      select distinct week(tr.fecha) as dia
      from tracking tr 
      where DATE_SUB(CURDATE(),INTERVAL 30 DAY) <= tr.fecha
      order by tr.fecha DESC;

CREATE VIEW `vw_guia_mensual_Estados` AS       
      select distinct tr.id_guia_estado, ge.estado, color
      from tracking tr 
      inner join guias_estado ge on tr.id_guia_estado = ge.id_guia_estado
      where DATE_SUB(CURDATE(),INTERVAL 30 DAY) <= tr.fecha
      order by id_guia_estado ASC;


CREATE VIEW `vw_guia_Mensual_Medidas` AS 
select * from vw_guia_mensual_Dias
inner join vw_guia_mensual_Estados;

CREATE VIEW `vw_guia_mensual_cantidades` AS 
select week(tr.fecha) fecha, ge.id_guia_estado, count(*) cantidad
from tracking tr 
inner join guias_estado ge on tr.id_guia_estado = ge.id_guia_estado 
where DATE_SUB(CURDATE(),INTERVAL 30 DAY) <= tr.fecha
group by week(tr.fecha),ge.id_guia_estado;


CREATE VIEW `vw_guia_mensual` AS 
select dia, x.id_guia_estado, estado, color, ifnull(cantidad,0) cantidad 
from  vw_guia_mensual_Medidas x
left join  vw_guia_mensual_cantidades  c on x.dia = c.fecha and x.id_guia_estado = c.id_guia_estado
order by x.id_guia_estado, x.dia desc;


select * from vw_guia_mensual;
select * from vw_guia_mensual_Estados;
select * from vw_guia_mensual_Dias;

