/*==============================================================*/
/* Nom de SGBD :  Sybase SQL Anywhere 11                        */
/* Date de création :  13/06/2022 16:47:51                      */
/*==============================================================*/


if exists(select 1 from sys.sysforeignkey where role='FK_MESURE_ASSOCIATI_CLIENT') then
    alter table Mesure
       delete foreign key FK_MESURE_ASSOCIATI_CLIENT
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_PAIEMENT_ASSOCIATI_MODELE') then
    alter table Paiement
       delete foreign key FK_PAIEMENT_ASSOCIATI_MODELE
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_PAIEMENT_ASSOCIATI_CLIENT') then
    alter table Paiement
       delete foreign key FK_PAIEMENT_ASSOCIATI_CLIENT
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='CLIENT_PK'
     and t.table_name='Client'
) then
   drop index Client.CLIENT_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='Client'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table Client
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='ASSOCIATION_5_FK'
     and t.table_name='Mesure'
) then
   drop index Mesure.ASSOCIATION_5_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='MESURE_PK'
     and t.table_name='Mesure'
) then
   drop index Mesure.MESURE_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='Mesure'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table Mesure
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='MODELE_PK'
     and t.table_name='Modele'
) then
   drop index Modele.MODELE_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='Modele'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table Modele
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='ASSOCIATION_6_FK'
     and t.table_name='Paiement'
) then
   drop index Paiement.ASSOCIATION_6_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='ASSOCIATION_3_FK'
     and t.table_name='Paiement'
) then
   drop index Paiement.ASSOCIATION_3_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='PAIEMENT_PK'
     and t.table_name='Paiement'
) then
   drop index Paiement.PAIEMENT_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='Paiement'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table Paiement
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='UTILISATEUR_PK'
     and t.table_name='Utilisateur'
) then
   drop index Utilisateur.UTILISATEUR_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='Utilisateur'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table Utilisateur
end if;

/*==============================================================*/
/* Table : Client                                               */
/*==============================================================*/
create table Client 
(
   id                   integer                        not null,
   Nom                  varchar(254)                   null,
   Prenom               varchar(254)                   null,
   Telephone            integer                        null,
   Adresse              varchar(254)                   null,
   Email                varchar(254)                   null,
   constraint PK_CLIENT primary key (id)
);

/*==============================================================*/
/* Index : CLIENT_PK                                            */
/*==============================================================*/
create unique index CLIENT_PK on Client (
id ASC
);

/*==============================================================*/
/* Table : Mesure                                               */
/*==============================================================*/
create table Mesure 
(
   id                   integer                        not null,
   Cli_id               integer                        not null,
   Epaule               float                          null,
   Manche               float                          null,
   Taille               float                          null,
   Cuisse               float                          null,
   poitrine             float                          null,
   hanche               float                          null,
   bras                 float                          null,
   dos                  float                          null,
   jambe                float                          null,
   bassin               float                          null,
   ceinture             float                          null,
   constraint PK_MESURE primary key (id)
);

/*==============================================================*/
/* Index : MESURE_PK                                            */
/*==============================================================*/
create unique index MESURE_PK on Mesure (
id ASC
);

/*==============================================================*/
/* Index : ASSOCIATION_5_FK                                     */
/*==============================================================*/
create index ASSOCIATION_5_FK on Mesure (
Cli_id ASC
);

/*==============================================================*/
/* Table : Modele                                               */
/*==============================================================*/
create table Modele 
(
   id                   integer                        not null,
   Nom                  varchar(254)                   null,
   Prix                 float                          null,
   Photo                varchar(254)                   null,
   constraint PK_MODELE primary key (id)
);

/*==============================================================*/
/* Index : MODELE_PK                                            */
/*==============================================================*/
create unique index MODELE_PK on Modele (
id ASC
);

/*==============================================================*/
/* Table : Paiement                                             */
/*==============================================================*/
create table Paiement 
(
   id                   integer                        not null,
   Cli_id               integer                        not null,
   Mod_id               integer                        not null,
   Total                float                          null,
   Avance               float                          null,
   Reste                float                          null,
   constraint PK_PAIEMENT primary key (id)
);

/*==============================================================*/
/* Index : PAIEMENT_PK                                          */
/*==============================================================*/
create unique index PAIEMENT_PK on Paiement (
id ASC
);

/*==============================================================*/
/* Index : ASSOCIATION_3_FK                                     */
/*==============================================================*/
create index ASSOCIATION_3_FK on Paiement (
Mod_id ASC
);

/*==============================================================*/
/* Index : ASSOCIATION_6_FK                                     */
/*==============================================================*/
create index ASSOCIATION_6_FK on Paiement (
Cli_id ASC
);

/*==============================================================*/
/* Table : Utilisateur                                          */
/*==============================================================*/
create table Utilisateur 
(
   id                   integer                        not null,
   Nom                  varchar(254)                   null,
   Email                varchar(254)                   null,
   Password             varchar(254)                   null,
   constraint PK_UTILISATEUR primary key (id)
);

/*==============================================================*/
/* Index : UTILISATEUR_PK                                       */
/*==============================================================*/
create unique index UTILISATEUR_PK on Utilisateur (
id ASC
);

alter table Mesure
   add constraint FK_MESURE_ASSOCIATI_CLIENT foreign key (Cli_id)
      references Client (id)
      on update restrict
      on delete restrict;

alter table Paiement
   add constraint FK_PAIEMENT_ASSOCIATI_MODELE foreign key (Mod_id)
      references Modele (id)
      on update restrict
      on delete restrict;

alter table Paiement
   add constraint FK_PAIEMENT_ASSOCIATI_CLIENT foreign key (Cli_id)
      references Client (id)
      on update restrict
      on delete restrict;

