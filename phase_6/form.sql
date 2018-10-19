CREATE DATABASE dynamic_form_algorithm2;

CREATE TABLE basicInfo (
  id         int       not null AUTO_INCREMENT PRIMARY KEY,
  birthName  char(255) not null,
  familyName char(255) not null,
  email      char(255) not null,
  phone      char(255) not null
);

CREATE TABLE homeAddress (
  id         int       not null,
  addressNum char(255) not null,
  street     char(255) not null,
  city       char(255) not null,
  prov       char(255) not null,
  country    char(255) not null,
  postCode   char(255) not null
);

CREATE TABLE personalInfo (
  id        int       not null,
  birthDate char(255) not null,
  race      char(255) not null,
  ethnic    char(255) not null,
  dlNum     char(255) not null
);
