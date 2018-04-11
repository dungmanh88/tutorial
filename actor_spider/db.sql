create database actor_spider;
use actor_spider;
drop table actor;
create table actor(
  id int NOT NULL AUTO_INCREMENT,
  name varchar(255),
  description varchar(1000),
  tag varchar(100),
  avatar varchar(500),
  PRIMARY key (id)
);

alter table actor modify column tag varchar(100) NOT NULL UNIQUE;
alter table actor modify column name varchar(255) NOT NULL;
alter table actor modify column avatar varchar(500) NOT NULL;