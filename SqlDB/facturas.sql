drop view vw_factura_semestral;
drop view vw_factura_mensual;
drop view vw_factura_semanal;



CREATE VIEW `vw_factura_semestral` AS 
select count(*) cantidad, 'creadas' estado  from documentos doc
where DATE_SUB(CURDATE(),INTERVAL 180 DAY) <= doc.fecha_creacion
union
select count(*), 'canceladas' estado  from documentos doc
where DATE_SUB(CURDATE(),INTERVAL 180 DAY) <= doc.fecha_cancelada
union
select count(*), 'pagadas' estado  from documentos doc
where DATE_SUB(CURDATE(),INTERVAL 180 DAY) <= doc.fecha_pagada;



CREATE VIEW `vw_factura_mensual` AS 
select count(*) cantidad, 'creadas' estado  from documentos doc
where DATE_SUB(CURDATE(),INTERVAL 180 DAY) <= doc.fecha_creacion
union
select count(*), 'canceladas' estado  from documentos doc
where DATE_SUB(CURDATE(),INTERVAL 180 DAY) <= doc.fecha_cancelada
union
select count(*), 'pagadas' estado  from documentos doc
where DATE_SUB(CURDATE(),INTERVAL 180 DAY) <= doc.fecha_pagada;



CREATE VIEW `vw_factura_semanal` AS 
select count(*) cantidad, 'creadas' estado  from documentos doc
where DATE_SUB(CURDATE(),INTERVAL 180 DAY) <= doc.fecha_creacion
union
select count(*), 'canceladas' estado  from documentos doc
where DATE_SUB(CURDATE(),INTERVAL 180 DAY) <= doc.fecha_cancelada
union
select count(*), 'pagadas' estado  from documentos doc
where DATE_SUB(CURDATE(),INTERVAL 180 DAY) <= doc.fecha_pagada;
