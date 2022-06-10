-- DROP'ping tables clear out any existing data
DROP TABLE IF EXISTS users;

-- CREATE the table, note that id has to be unique, and you must have a name
CREATE TABLE users(
   id VARCHAR(20),
   password VARCHAR(15) NOT NULL,
   first_name VARCHAR(20) NOT NULL,
   last_name VARCHAR(30) NOT NULL,
   email_address VARCHAR(255) NOT NULL,
   enrol_date date NOT NULL,
   last_access date NOT NULL,
PRIMARY KEY(id)
);

GRANT ALL ON users TO faculty;
ALTER TABLE users OWNER TO modil;

INSERT INTO users(id, password, first_name, last_name, email_address, enrol_date, last_access)
VALUES('modil', 'testpass', 'Luv', 'Modi', 'jdoe@durhamcollege.ca', '2020-1-1', '2020-1-1');

INSERT INTO users(id, password, first_name, last_name, email_address, enrol_date, last_access)
VALUES('jdoe', 'testpass', 'John', 'Modi', 'modil@durhamcollege.ca', '2020-04-09', '2020-04-09');

INSERT INTO users(id, password, first_name, last_name, email_address, enrol_date, last_access)
VALUES('aileend', 'testpass', 'Aileen', 'Dover', 'aileen.d@UToronto.ca', '2020-04-09', '2020-04-09');


SELECT * FROM users;