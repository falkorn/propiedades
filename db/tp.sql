/*==============================================================*/
/* Creacion de Base de Datos                                    */
/*==============================================================*/
drop table if exists CLIENT_DB;

drop table if exists IMG_DB;

drop table if exists INVOICE_DB;

drop table if exists PROP_DB;

drop table if exists USER_DB;

/*==============================================================*/
/* Table: CLIENT_DB                                             */
/*==============================================================*/
create table CLIENT_DB
(
   CLIENT_RUT           varchar(20) not null,
   INVOICE_ID           int,
   CLIENT_DATE          date,
   CLIENT_PROPIETARIO   bool,
   CLIENT_CLIENTE       bool,
   CLIENT_NAME          varchar(255),
   CLIENT_PAIS          varchar(50),
   CLIENT_ECIVIL        varchar(50),
   CLIENT_PROFESION     varchar(120),
   CLIENT_DIRECCION     text,
   CLIENT_EMAIL         varchar(255),
   CLIENT_TELEFONO      varchar(255),
   CLIENT_DESC          text,
   primary key (CLIENT_RUT)
);

/*==============================================================*/
/* Table: IMG_DB                                                */
/*==============================================================*/
create table IMG_DB
(
   IMG_ID               int not null AUTO_INCREMENT,
   PROP_ID              int,
   IMG_NOMBRE           varchar(255),
   primary key (IMG_ID)
);

/*==============================================================*/
/* Table: INVOICE_DB                                            */
/*==============================================================*/
create table INVOICE_DB
(
   INVOICE_ID           int not null AUTO_INCREMENT,
   INVOICE_FECHA        date,
   INVOICE_OPERACION    varchar(50),
   INVOICE_CIFRA        int,
   INVOICE_DESCIPCION   text,
   primary key (INVOICE_ID)
);

/*==============================================================*/
/* Table: PROP_DB                                               */
/*==============================================================*/
create table PROP_DB
(
   PROP_ID              int not null,
   INVOICE_ID           int,
   CLIENT_RUT           varchar(20),
   PROP_DESTACADO       bool,
   PROP_CATEGORIA       varchar(50),
   PROP_ESTADO          varchar(50),
   PROP_TITULO          varchar(100),
   PROP_VALOR           int,
   PROP_COMUNA          varchar(255),
   PROP_DORM            int,
   PROP_BANOS           int,
   PROP_CAR             int,
   PROP_M2              int,
   PROP_TERRENO         int,
   PROP_DESC            text,
   PROP_DIRECCION       varchar(255),
   PROP_COMISION        varchar(255),
   PROP_FECHA           date,
   primary key (PROP_ID)
);

/*==============================================================*/
/* Table: USER_DB                                               */
/*==============================================================*/
create table USER_DB
(
   USER_ID              int(11) not null AUTO_INCREMENT,
   USER_NAME            varchar(35),
   USER_PASS            varchar(50),
   USER_LEVEL           tinyint(1),
   primary key (USER_ID)
);

alter table CLIENT_DB add constraint FK_CLIENT_INVOICE foreign key (INVOICE_ID)
      references INVOICE_DB (INVOICE_ID) on delete restrict on update restrict;

alter table IMG_DB add constraint FK_IMG_PROP foreign key (PROP_ID)
      references PROP_DB (PROP_ID) on delete restrict on update restrict;

alter table PROP_DB add constraint FK_PROP_CLIENT foreign key (CLIENT_RUT)
      references CLIENT_DB (CLIENT_RUT) on delete restrict on update restrict;

alter table PROP_DB add constraint FK_PROP_INVOICE foreign key (INVOICE_ID)
      references INVOICE_DB (INVOICE_ID) on delete restrict on update restrict;
