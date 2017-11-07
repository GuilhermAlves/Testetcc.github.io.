create database bancoDados;

use bancodados;

CREATE TABLE IF NOT EXISTS coordenadas (
  id int(11) NOT NULL AUTO_INCREMENT,
  latitude varchar(20) NOT NULL,
  longitude varchar(20) NOT NULL,
  nome varchar(10) not null,
  PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

select * from coordenadas;





drop database bancodados;
drop table coordenadas;