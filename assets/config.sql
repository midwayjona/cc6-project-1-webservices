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
  climit NUMERIC(8,2) DEFAULT 15000 NOT NULL,
  cbalance NUMERIC(8,2) DEFAULT 0 NOT NULL,
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
  tdate TIMESTAMP WITH TIME ZONE DEFAULT CURRENT_TIMESTAMP,
  tcat int DEFAULT 0,
  tamount NUMERIC(8,2) DEFAULT 0.00 NOT NULL,
  cbalance NUMERIC(8,2) DEFAULT 0.00 NOT NULL,
  description varchar ( 255 ) DEFAULT 'brief description for this transaction',
  CONSTRAINT fk_cnumber
    FOREIGN KEY (cnumber)
      REFERENCES card (cnumber)
      ON DELETE CASCADE
);

CREATE TABLE checking (
  caccount SERIAL PRIMARY KEY,
  cid varchar ( 255 )  NOT NULL,
  caperture_date DATE NOT NULL DEFAULT CURRENT_DATE,
  cfund NUMERIC(8,2) DEFAULT 15000 NOT NULL,
  CONSTRAINT fk_cid
    FOREIGN KEY (cid)
      REFERENCES costumer (cid)
      ON DELETE CASCADE
);

CREATE TABLE cmpyID (
    cmpyID varchar ( 255 ) PRIMARY KEY NOT NULL,
    cmpyname varchar ( 255 )
);

SET TIMEZONE='America/Guatemala';

INSERT INTO costumer (cid, ctin, cname, cdob, cuser, cemail, cphone, cpassword, caddress, cadmin)
VALUES(
  '1234567891234',
  '12345678',
  'Joseph Joestar',
  '1995-08-05',
  NULL,
  NULL,
  '12345678',
  NULL,
  'Seattle, WA 96478',
  TRUE
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

INSERT INTO transactions ( tid, cnumber, ttype, tdate, tcat, description )
VALUES ( DEFAULT, '5138703018414458', 'debit', DEFAULT, DEFAULT, 'test transaction');

SELECT LASTVAL();
