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
  ctin varchar ( 255 ) NOT NULL,
  cname varchar ( 255 ),
  cdob DATE NOT NULL,
  cuser varchar ( 255 ),
  cemail varchar ( 255 ),
  cphone varchar ( 255 ),
  cpassword varchar ( 255 ),
  caddress varchar ( 255 ),
  cadmin BOOLEAN NOT NULL DEFAULT FALSE
);

CREATE TABLE card (
  cnumber varchar ( 255 ) NOT NULL,
  cid varchar ( 255 ) NOT NULL,
  cvv varchar ( 255 ) NOT NULL,
  cexp_date DATE NOT Null,
  cissue_date DATE NOT NULL DEFAULT CURRENT_DATE,
  climit int NOT NULL DEFAULT 5000,
  cbalance int DEFAULT 0,
  PRIMARY KEY (cnumber),
  CONSTRAINT fk_cid
    FOREIGN KEY (cid)
      REFERENCES costumer (cid)
      ON DELETE CASCADE
);

CREATE TABLE transactions (
  tid SERIAL PRIMARY KEY,
  cnumber varchar ( 255 ) NOT NULL,
  ttype varchar ( 255 ) NOT  NULL,
  tdate DATE NOT NULL DEFAULT CURRENT_DATE,
  tcat int DEFAULT 0,
  description varchar ( 255 ) DEFAULT 'brief description for this transaction',
  CONSTRAINT fk_cnumber
    FOREIGN KEY (cnumber)
      REFERENCES card (cnumber)
      ON DELETE CASCADE
);

INSERT INTO card (cnumber, cid, cvv, cexp_date, cissue_date, climit, cbalance) VALUES(
  '432112345678',
  '9865329865329',
  '123',
  '2024-08-09',
  DEFAULT,
  DEFAULT,
  DEFAULT

);

INSERT INTO costumer (cid, ctin, cname, cdob, cuser, cemail, cphone, cpassword, caddress, cadmin)
VALUES(
  '1234567891234',
  '12345678',
  'Jonathan Amado',
  '1995-08-05',
  'midwayjona',
  'midwayjona@gmail.com',
  '12345678',
  'pwd123',
  'Seattle, WA 96478',
  TRUE
);

INSERT INTO costumer (cid, ctin, cname, cdob, cuser, cemail, cphone, cpassword, caddress, cadmin)
VALUES(
  '1234567891234',
  '12345678',
  'Jonathan Amado',
  '1991-04-18',
  'admin',
  'admin@statehard.com',
  '12345678',
  'admin123',
  'Seattle, WA 96478',
  TRUE
);

INSERT INTO costumer (cid, ctin, cname, cdob, cuser, cemail, cphone, cpassword, caddress, cadmin)
VALUES(
  '7894561237894',
  '98765412',
  'Julio Castillo',
  '1978-01-01',
  NULL,
  NULL,
  '89562374',
  NULL,
  'Santa Monica, CA 90401',
  DEFAULT
);

INSERT INTO costumer (cid, ctin, cname, cdob, cuser, cemail, cphone, cpassword, caddress, cadmin)
VALUES(
  '7418529639638',
  '74125896',
  'John Smith',
  '1981-01-01',
  NULL,
  NULL,
  '98653245',
  NULL,
  'Los Angeles, CA 90581',
  DEFAULT
);

INSERT INTO costumer (cid, ctin, cname, cdob, cuser, cemail, cphone, cpassword, caddress, cadmin)
VALUES(
  '9865329865329',
  '78451296',
  'Joseph Joestar',
  '1920-01-01',
  NULL,
  NULL,
  '98653245',
  NULL,
  'New York, NY 10003',
  DEFAULT
);



DROP TABLE costumer;
SELECT * FROM costumer;
