drop view vw_guia_semestral_Dias;
drop view vw_guia_semestral_Estados;
drop view vw_guia_semestral_Medidas;
drop view vw_guia_semestral_cantidades;
drop view vw_guia_semestral;



CREATE VIEW `vw_guia_semestral_Dias` AS 

      select distinct month(tr.fecha) as dia, DATE_FORMAT(tr.Fecha, '%b') diaNombre, month(tr.fecha) fecha
      from tracking tr 
      where DATE_SUB(CURDATE(),INTERVAL 180 DAY) <= tr.fecha
      order by tr.fecha DESC;

CREATE VIEW `vw_guia_semestral_Estados` AS 
      select distinct tr.id_guia_estado, ge.estado, ge.color
      from tracking tr 
      inner join guias_estado ge on tr.id_guia_estado = ge.id_guia_estado
      where DATE_SUB(CURDATE(),INTERVAL 180 DAY) <= tr.fecha
      order by id_guia_estado ASC;

CREATE VIEW `vw_guia_semestral_Medidas` AS 
select * from vw_guia_semestral_Dias
inner join vw_guia_semestral_Estados;

CREATE VIEW `vw_guia_semestral_cantidades` AS 
select month(tr.fecha) fecha, ge.id_guia_estado, count(*) cantidad
from tracking tr 
inner join guias_estado ge on tr.id_guia_estado = ge.id_guia_estado
where DATE_SUB(CURDATE(),INTERVAL 180 DAY) <= tr.fecha
group by month(tr.fecha),ge.id_guia_estado;

CREATE VIEW `vw_guia_semestral` AS 
select dia,diaNombre, x.id_guia_estado, estado, color, ifnull(cantidad,0) cantidad 
from  vw_guia_semestral_Medidas x
left join  vw_guia_semestral_cantidades  c on x.fecha = c.fecha and x.id_guia_estado = c.id_guia_estado
order by x.id_guia_estado, x.fecha desc;

select * from vw_guia_semestral;
select * from vw_guia_semestral_Estados;
select * from vw_guia_semestral_Dias;
     
