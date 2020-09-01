-- Database: cc6-pj1

-- DROP DATABASE "cc6-pj1";

CREATE DATABASE "cc6-pj1"
    WITH
    OWNER = midwayjona
    ENCODING = 'UTF8'
    LC_COLLATE = 'English_United States.1252'
    LC_CTYPE = 'English_United States.1252'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1;


CREATE TABLE costumer (
	cid varchar ( 255 ) PRIMARY KEY NOT NULL,
	ctin varchar ( 255 ) NOT NULL UNIQUE,
	cname varchar ( 255 ),
	cuser varchar ( 255 ) UNIQUE,
	cemail varchar ( 255 ) UNIQUE,
	cphone varchar ( 255 ) UNIQUE,
	cpassword varchar ( 255 ),
	caddress varchar ( 255 ),
	cadmin BOOLEAN NOT NULL
);

INSERT INTO costumer (cid, ctin, cname, cuser, cemail, cphone, cpassword, caddress, cadmin)
VALUES(
  '1234567891234',
  '12345678',
  'Jonathan Amado',
  'midwayjona',
  'midwayjona@gmail.com',
  '12345678',
  'pwd123',
  'Seattle, WA 96478',
  TRUE
);



DROP TABLE costumer;
SELECT * FROM costumer;
