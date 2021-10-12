create table USERS (
    id int PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(70) NOT NULL,
    email VARCHAR (100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role CHAR(1) NOT NULL DEFAULT "u"
);

create table HACKATHON (
    id int PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR (100) not null,
    description TEXT not null,
    maxProposals int not null,
    maxGroups int not null,
    maxInGroups int not null,
    renderingLink varchar(255) not null
);

create table HACKEVENT (
    id int PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR (100) not null,
    description TEXT not null,
    color CHAR (7) not null,
    specialType CHAR (1) not null,
    isOptional CHAR (1) not null,
    dateStart timestamp not null,
    dateEnd timestamp not null,
    concern int not null,
    FOREIGN KEY (concern) REFERENCES HACKATHON (id)
);

create table SUBJECT (
     id int PRIMARY KEY AUTO_INCREMENT,
     title VARCHAR (100) not null,
     description TEXT not null,
     selectable CHAR(1) DEFAULT "0" not null,
     isFor int not null,
     proposedBy int not null,
     FOREIGN KEY (proposedBy) REFERENCES USERS (id),
     FOREIGN KEY (isFor) REFERENCES HACKATHON (id)
);

create table USERGROUP (
   id int PRIMARY KEY AUTO_INCREMENT,
   numbers int not null,
   result int,
   concern int not null,
   selectedSubject int,
   FOREIGN KEY (concern) REFERENCES HACKATHON (id),
   FOREIGN KEY (selectedSubject) REFERENCES SUBJECT (id)
);

create table groupMember (
    USERS_id int,
    group_id int,
    PRIMARY KEY(USERS_id, group_id),
    FOREIGN KEY (USERS_id) REFERENCES USERS (id),
    FOREIGN KEY (group_id) REFERENCES USERGROUP (id)
);

create table participation (
    USERS_id int,
    hackathon_id int,
    roleInHackathon CHAR(1) not null DEFAULT "p",
    PRIMARY KEY(USERS_id, hackathon_id),
    FOREIGN KEY (USERS_id) REFERENCES USERS (id),
    FOREIGN KEY (hackathon_id) REFERENCES HACKATHON (id)
);