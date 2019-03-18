
CREATE VIEW `vw_permisos_por_rol` AS 
select c.controladorID, c.nombre nombreControlador, m.MenuID, m.nombre nombreMenu, r.RolID, r.descripcion
from  roles_permisos rp
inner join controladores c on rp.controladorid = c.controladorid 
inner join menus m on c.menuid = m.menuid
inner join roles r on rp.rolid = r.rolid;
;

CREATE VIEW `vw_permisos` AS 
select c.controladorID, c.nombre nombreControlador, m.MenuID, m.nombre nombreMenu from 
 controladores c 
inner join menus m on c.menuid = m.menuid;


CREATE TABLE `roles_permisos` (
  `idroles_permisos` int(11) NOT NULL AUTO_INCREMENT,
  `rolID` int(11) DEFAULT NULL,
  `controladorID` int(11) DEFAULT NULL,
  PRIMARY KEY (`idroles_permisos`)
) ENGINE=InnoDB AUTO_INCREMENT=194 DEFAULT CHARSET=latin1 COMMENT='Permisos por rol';

insert into roles_permisos (rolID, controladorID) values (1,1);
insert into roles_permisos (rolID, controladorID) values (1,9);



/*
left join roles r on rp.rolid = r.rolid

select * from roles_permisos
where rolid = 1
*/


