----
-- phpLiteAdmin database dump (http://www.phpliteadmin.org/)
-- phpLiteAdmin version: 1.9.7-dev
-- Exported: 12:11pm on February 21, 2017 (UTC)
-- database file: /home/ubuntu/workspace/pset7/finance/finance.db
----
BEGIN TRANSACTION;

----
-- Table structure for users
----
CREATE TABLE 'users' ('id' INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, 'username' TEXT NOT NULL, 'hash' TEXT NOT NULL, 'cash' NUMERIC NOT NULL DEFAULT 10000.00 );

----
-- Data dump for users, a total of 0 rows
----

----
-- structure for index username on table users
----
CREATE UNIQUE INDEX 'username' ON "users" ("username");
COMMIT;
