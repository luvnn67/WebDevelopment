-- DROP'ping tables clear out any existing data
DROP TABLE IF EXISTS courses;

-- CREATE the table, note that id has to be unique, and you must have a name
CREATE TABLE courses(
   id VARCHAR(20),
   Title VARCHAR(64) NOT NULL,
   Code VARCHAR(8) NOT NULL,
   Weighting INT,
   
PRIMARY KEY(id)
);

GRANT ALL ON users TO faculty;

ALTER TABLE courses OWNER TO modil;

INSERT INTO courses(id, Title, Code, Weighting)
VALUES('1', 'Communication Foundations', 'COMM1801', 3.00);

INSERT INTO courses(id, Title, Code, Weighting)
VALUES('2', 'Computer Systems-Hardware', 'CYCS1122', 4.00);

INSERT INTO courses(id, Title, Code, Weighting)
VALUES('3', 'Intro to Programming', 'PROG1205', 4.00);

INSERT INTO courses(id, Title, Code, Weighting)
VALUES('4', 'Data Communication', 'DCOM11OO', 4.00);

INSERT INTO courses(id, Title, Code, Weighting)
VALUES('5', 'Intro to Database', 'DBAS1201', 4.00);

INSERT INTO courses(id, Title, Code, Weighting)
VALUES('6', 'Math for IT', 'MATH1110', 3.00);



SELECT * FROM courses;