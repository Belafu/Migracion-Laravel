-- Rellena los tags predeterminados
SELECT * FROM darkcode.tags;
insert into tags values (default,"mouse",default,default,null);
insert into tags values (default,"teclado",default,default,null);
insert into tags values (default,"antivirus",default,default,null);
insert into tags values (default,"laptos",default,default,null);

-- Asignacion de Administradores a traves del rol = 1
update users
set rol = 1 
where id = 1 ;
-- asigno al primero que se registres