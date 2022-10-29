CREATE DATABASE appHotel;

CREATE TABLE people(
	idpeople INT PRIMARY KEY NOT NULL,
    namepeople VARCHAR (25),
    lastnamepeople VARCHAR (30),
    birthdaypeople DATE,
    addresspeople VARCHAR(50),
    phonepeople VARCHAR(10),
    emailpeople VARCHAR(50),
    peoplenamepeople VARCHAR(20),
    passwordpeople VARCHAR(30),
    created_at timestamp NULL DEFAULT NULL,
    updated_at timestamp NULL DEFAULT NULL
);

CREATE TABLE category(
    idCategory INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nameCategory VARCHAR (35),
    descriptionCategory VARCHAR(100),
    created_at timestamp NULL DEFAULT NULL,
    updated_at timestamp NULL DEFAULT NULL

);

CREATE TABLE typeRoom(
    idTyperoom INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nameTyperoom VARCHAR (35),
    descriptionTyperoom VARCHAR(100),
    created_at timestamp NULL DEFAULT NULL,
    updated_at timestamp NULL DEFAULT NULL
);

CREATE TABLE hotel(
    idHotel INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nameHotel VARCHAR(50),
    addressHotel VARCHAR(100),
    phoneHotel VARCHAR (10),
    emailHotel VARCHAR(50),
    descriptionHotel VARCHAR(100),
    idpeople INT NOT NULL,
    FOREIGN KEY (idpeople) REFERENCES people (idpeople) ON DELETE CASCADE,
    created_at timestamp NULL DEFAULT NULL,
    updated_at timestamp NULL DEFAULT NULL
);

CREATE TABLE IIDTEC(
    idIDDTEC INT PRIMARY KEY NOT NULL,
    nameIIDTEC VARCHAR(50),
    addressIIDTEC VARCHAR(100),
    phoneIIDTEC VARCHAR (10),
    emailIIDTEC VARCHAR(50),
    descriptionIIDTEC VARCHAR(100),
    idpeople INT NOT NULL,
    idHotel INT NOT NULL,
    FOREIGN KEY (idpeople) REFERENCES people (idpeople) ON DELETE CASCADE,
    FOREIGN KEY (idHotel) REFERENCES hotel (idHotel) ON DELETE CASCADE,
    created_at timestamp NULL DEFAULT NULL,
    updated_at timestamp NULL DEFAULT NULL
);

CREATE TABLE userReservation(
    idUser INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    descriptionUser VARCHAR(100),
    idpeople INT,
    FOREIGN KEY (idpeople) REFERENCES people (idpeople) ON DELETE CASCADE,
    created_at timestamp NULL DEFAULT NULL,
    updated_at timestamp NULL DEFAULT NULL
);

CREATE TABLE room(
    idRoom INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nameRoom VARCHAR (10),
    idCategory INT NOT NULL,
    IdTypeRoom INT NOT NULL,
    available BOOLEAN,
    descriptionRoom VARCHAR (100),
    idHotel INT NOT NULL,
    FOREIGN KEY (idCategory) REFERENCES category (idCategory) ON DELETE CASCADE,
    FOREIGN KEY (idTyperoom) REFERENCES typeRoom (idTyperoom) ON DELETE CASCADE,
    FOREIGN KEY (idHotel) REFERENCES hotel (idHotel) ON DELETE CASCADE,
    created_at timestamp NULL DEFAULT NULL,
    updated_at timestamp NULL DEFAULT NULL
);
    
CREATE TABLE reservation (
    idReservation INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    IdUser int,
    idRoom int,
    dateIn DATE,
    timeIn TIME,
    descriptionReservation VARCHAR (100),
    FOREIGN KEY (idUser) REFERENCES userReservation (idUser) ON DELETE CASCADE,
    FOREIGN KEY (idRoom) REFERENCES room (idRoom) ON DELETE CASCADE,
    created_at timestamp NULL DEFAULT NULL,
    updated_at timestamp NULL DEFAULT NULL
);

CREATE TABLE poll(
    idPoll INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    satisfaction INT,
    comments VARCHAR (100),
    created_at timestamp NULL DEFAULT NULL,
    updated_at timestamp NULL DEFAULT NULL
);

CREATE TABLE checkIn(
    idCheckin INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    idReservation INT,
    dateChechIn DATE,
    timeCheckIn TIME,
    FOREIGN KEY (idReservation) REFERENCES reservation (idReservation) ON DELETE CASCADE,
    created_at timestamp NULL DEFAULT NULL,
    updated_at timestamp NULL DEFAULT NULL
);

CREATE TABLE checkOut(
    idCheckout INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    idReservation INT,
    idPoll INT,
    dateCheckout DATE,
    timeCheckOut TIME,
    FOREIGN KEY (idReservation) REFERENCES reservation (idReservation) ON DELETE CASCADE,
    FOREIGN KEY (idPoll) REFERENCES poll (idPoll) ON DELETE CASCADE,
    created_at timestamp NULL DEFAULT NULL,
    updated_at timestamp NULL DEFAULT NULL
);