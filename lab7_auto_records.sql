-- DROP'ping tables clear out any existing data
DROP TABLE IF EXISTS automobile;

-- CREATE the table, note that id has to be unique, and you must have a name
CREATE TABLE automobile(
   id VARCHAR(20),
   make VARCHAR(15) NOT NULL,
   model VARCHAR(20) NOT NULL,
	year INTEGER NOT NULL,
	owner_Name VARCHAR(15) NOT NULL,
	price INTEGER NOT NULL,
	purchaseDate VARCHAR(10) NOT NULL,


PRIMARY KEY(id)
);
GRANT ALL ON automobile TO faculty;  
ALTER TABLE automobile OWNER TO modil;

INSERT INTO automobile(id, make, model, year, owner_Name, price, purchaseDate) 
VALUES('1','Tesla', 'Model S Plaid', 2021,'John Smith',114000,'06/03/2021');

INSERT INTO automobile(id, make, model, year, owner_Name, price, purchaseDate) 
VALUES('2','Dodge','Charger SRT',2021,'Jaren Smith',69990,'04/02/2022');

INSERT INTO automobile(id, make, model, year, owner_Name, price, purchaseDate)  
VALUES('3','Chevy','Corvette ZL1',2021,'Larry Smith',129000,'05/02/2022');

INSERT INTO automobile(id, make, model, year, owner_Name, price, purchaseDate) 
VALUES('4','Lamborghini','Aventador',2020,'Taylor Smith',421800,'04/02/2020');

INSERT INTO automobile(id, Make, Model, year, owner_Name, price, purchaseDate) 
VALUES('5','Ferrari','458 Italia',2015,'King Smith',114000, '04/12/2018');


SELECT * FROM automobile;
