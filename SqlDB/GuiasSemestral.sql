select dia,MesNombre, x.id_guia_estado, estado, ifnull(cantidad,0) cantidad from ( 
select * from (
      select distinct Month(tr.fecha) as dia, MonthName(tr.Fecha) MesNombre, Month(tr.fecha) fecha
      from tracking tr 
      where DATE_SUB(CURDATE(),INTERVAL 30 DAY) <= tr.fecha
      order by tr.fecha DESC
) as a
inner join (
      select distinct tr.id_guia_estado, ge.estado
      from tracking tr 
      inner join guias_estado ge on tr.id_guia_estado = ge.id_guia_estado
      where DATE_SUB(CURDATE(),INTERVAL 30 DAY) <= tr.fecha
      order by id_guia_estado ASC
) as b
) as x
left join      
(      
      select month(tr.fecha) fecha, ge.id_guia_estado, count(*) cantidad
      from tracking tr 
      inner join guias_estado ge on tr.id_guia_estado = ge.id_guia_estado 
      
      group by month(tr.fecha),ge.id_guia_estado
) as c on x.fecha = c.fecha and x.id_guia_estado = c.id_guia_estado
order by x.fecha desc, x.id_guia_estado
