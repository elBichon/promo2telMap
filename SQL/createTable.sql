drop table if exists provenance;
create table provenance (
                    id integer not null primary key auto_increment,
                    region varchar(40),
                    nombre integer not null,
                    femme integer not null,
                    homme integer not null,
                    boursier integer not null,
                    ece integer not null,
                    ecs integer not null,
                    passerelles integer not null,
                    iut integer not null,
                    dut integer not null,
                    bts integer not null,
                    PrepaS integer not null,
                    litteraire integer not null,
                    autre integer not null
                       ) engine=innodb character set utf8 collate utf8_unicode_ci;








