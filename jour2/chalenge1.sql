//chalenge 1 
create table Produits(
    id int primary key auto_increment , 
    nom varchar(50) ,
    prix float default 0.00, 
    stock int default 0 
);
//chalenge 2 
Insert into Produits values ('phone' , 200.00 , 100) , ('phone' , 200.00 , 100) ,('phone' , 200.00 , 100) 
//chalenge 3 

update Produits set prix = prix * 1.10 where nom = 'phone'


