CREATE SCHEMA `hotel`;

CREATE TABLE `hotel_statusEntity` (
  `id_statusEntity` INT PRIMARY KEY,
  `name` VARCHAR(255),
  `description` VARCHAR(255),
  `created_at` timestamp,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `hotel_room_category` (
  `id_category` INT PRIMARY KEY,
  `name` VARCHAR(255),
  `description` VARCHAR(255),
  `id_statusEntity` INT,
  FOREIGN KEY (`id_statusEntity`) REFERENCES `hotel_statusEntity` (`id_statusEntity`) ON DELETE CASCADE
                                                    ON UPDATE CASCADE,
  `created_at` timestamp,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `hotel_type_room` (
  `id_type` INT PRIMARY KEY,
  `name` VARCHAR(255),
  `description` VARCHAR(255),
  `id_statusEntity` INT,
  FOREIGN KEY (`id_statusEntity`) REFERENCES `hotel_statusEntity` (`id_statusEntity`) ON DELETE CASCADE
                                                    ON UPDATE CASCADE,
  `created_at` timestamp,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `hotel_poll` (
  `id_poll` INT PRIMARY KEY,
  `comments` VARCHAR(255),
  `satisfaction` VARCHAR(255),
  `id_statusEntity` INT,
  FOREIGN KEY (`id_statusEntity`) REFERENCES `hotel_statusEntity` (`id_statusEntity`) ON DELETE CASCADE
                                                    ON UPDATE CASCADE,
  `created_at` timestamp,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `hotel_check_out` (
  `id_checkOut` INT PRIMARY KEY,
  `date_chech_out` date,
  `time_check_out` time,
  `id_poll` INT,
  `id_statusEntity` INT,
  FOREIGN KEY (`id_poll`) REFERENCES `hotel_poll` (`id_poll`) ON DELETE CASCADE
                                                    ON UPDATE CASCADE,
  FOREIGN KEY (`id_statusEntity`) REFERENCES `hotel_statusEntity` (`id_statusEntity`) ON DELETE CASCADE
                                                    ON UPDATE CASCADE,                                               
  `created_at` timestamp,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `hotel_check_in` (
  `id_checkIn` INT PRIMARY KEY,
  `date_chech_in` date,
  `time_check_in` time,
  `id_statusEntity` INT,
  FOREIGN KEY (`id_statusEntity`) REFERENCES `hotel_statusEntity` (`id_statusEntity`) ON DELETE CASCADE
                                                    ON UPDATE CASCADE,
  `created_at` timestamp,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `hotel_reservation_status` (
  `id_status` INT PRIMARY KEY,
  `name` VARCHAR(255),
  `description` VARCHAR(255),
  `id_statusEntity` INT,
  FOREIGN KEY (`id_statusEntity`) REFERENCES `hotel_statusEntity` (`id_statusEntity`) ON DELETE CASCADE
                                                    ON UPDATE CASCADE,
  `created_at` timestamp,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `hotel_role` (
  `id_role` INT PRIMARY KEY,
  `name` VARCHAR(255),
  `description` VARCHAR(255),
  `id_statusEntity` INT,
  FOREIGN KEY (`id_statusEntity`) REFERENCES `hotel_statusEntity` (`id_statusEntity`) ON DELETE CASCADE
                                                    ON UPDATE CASCADE,
  `created_at` timestamp,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `hotel_cost` (
  `id_cost` INT PRIMARY KEY,
  `price` double,
  `iva` double,
  `discount` double,
  `id_statusEntity` INT,
  FOREIGN KEY (`id_statusEntity`) REFERENCES `hotel_statusEntity` (`id_statusEntity`) ON DELETE CASCADE
                                                    ON UPDATE CASCADE,
  `created_at` timestamp,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `hotel_pay` (
  `id_pay` INT PRIMARY KEY,
  `name` double,
  `description` VARCHAR(255),
  `id_statusEntity` INT,
  FOREIGN KEY (`id_statusEntity`) REFERENCES `hotel_statusEntity` (`id_statusEntity`) ON DELETE CASCADE
                                                    ON UPDATE CASCADE,
  `created_at` timestamp,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `hotel_people` (
  `id_people` INT PRIMARY KEY,
  `name` VARCHAR(255),
  `first_name` VARCHAR(255),
  `last_name` VARCHAR(255),
  `birthday` date,
  `address` VARCHAR(255),
  `phone` VARCHAR(255),
  `email` VARCHAR(255),
  `id_role` INT,
  `id_statusEntity` INT,
  FOREIGN KEY (`id_role`) REFERENCES `hotel_role` (`id_role`) ON DELETE CASCADE
                                                    ON UPDATE CASCADE,
  FOREIGN KEY (`id_statusEntity`) REFERENCES `hotel_statusEntity` (`id_statusEntity`) ON DELETE CASCADE
                                                    ON UPDATE CASCADE,                                                  
  `created_at` timestamp,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `hotel_employee` (
  `id_employee` INT PRIMARY KEY,
  `rfc` VARCHAR(255),
  `password` VARCHAR(255),
  `id_people` INT,
  `id_statusEntity` INT,
  FOREIGN KEY (`id_people`) REFERENCES `hotel_people` (`id_people`) ON DELETE CASCADE
                                                    ON UPDATE CASCADE,
  FOREIGN KEY (`id_statusEntity`) REFERENCES `hotel_statusEntity` (`id_statusEntity`) ON DELETE CASCADE
                                                    ON UPDATE CASCADE,
  `created_at` timestamp,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `iddtec_employee` (
  `id_employee` INT PRIMARY KEY,
  `rfc` VARCHAR(255),
  `password` VARCHAR(255),
  `id_people` INT,
  `id_statusEntity` INT,
  FOREIGN KEY (`id_people`) REFERENCES `hotel_people` (`id_people`) ON DELETE CASCADE
                                                    ON UPDATE CASCADE,
  FOREIGN KEY (`id_statusEntity`) REFERENCES `hotel_statusEntity` (`id_statusEntity`) ON DELETE CASCADE
                                                    ON UPDATE CASCADE,
  `created_at` timestamp,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `hotel_iddtec` (
  `id_iddtec` INT PRIMARY KEY,
  `name` VARCHAR(255),
  `description` VARCHAR(255),
  `address` VARCHAR(255),
  `phone` VARCHAR(255),
  `email` VARCHAR(255),
  `id_employee` INT,
  `id_statusEntity` INT,
  FOREIGN KEY (`id_employee`) REFERENCES `iddtec_employee` (`id_employee`) ON DELETE CASCADE
                                                    ON UPDATE CASCADE,
  FOREIGN KEY (`id_statusEntity`) REFERENCES `hotel_statusEntity` (`id_statusEntity`) ON DELETE CASCADE
                                                    ON UPDATE CASCADE,
  `created_at` timestamp,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `hotel_room` (
  `id_room` INT PRIMARY KEY,
  `name` VARCHAR(255),
  `description` VARCHAR(255),
  `available` tinyINT(1),
  `id_cost` INT,
  `id_type` INT,
  `id_category` INT,
  `id_statusEntity` INT,
  FOREIGN KEY (`id_cost`) REFERENCES `hotel_cost` (`id_cost`) ON DELETE CASCADE
                                                    ON UPDATE CASCADE,
  FOREIGN KEY (`id_type`) REFERENCES `hotel_type_room` (`id_type`) ON DELETE CASCADE
                                                    ON UPDATE CASCADE,
  FOREIGN KEY (`id_category`) REFERENCES `hotel_room_category` (`id_category`) ON DELETE CASCADE
                                                    ON UPDATE CASCADE,
  FOREIGN KEY (`id_statusEntity`) REFERENCES `hotel_statusEntity` (`id_statusEntity`) ON DELETE CASCADE
                                                    ON UPDATE CASCADE,                                                 
  `created_at` timestamp,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `hotel_hotel` (
  `id_hotel` INT PRIMARY KEY,
  `name` VARCHAR(255),
  `description` VARCHAR(255),
  `address` VARCHAR(255),
  `phone` VARCHAR(255),
  `email` VARCHAR(255),
  `id_iddtec` INT,
  `id_employee` INT,
  `id_room` INT,
  `id_statusEntity` INT,
  FOREIGN KEY (`id_iddtec`) REFERENCES `hotel_iddtec` (`id_iddtec`) ON DELETE CASCADE
                                                    ON UPDATE CASCADE,
  FOREIGN KEY (`id_employee`) REFERENCES `hotel_employee` (`id_employee`) ON DELETE CASCADE
                                                    ON UPDATE CASCADE,
  FOREIGN KEY (`id_room`) REFERENCES `hotel_room` (`id_room`) ON DELETE CASCADE
                                                    ON UPDATE CASCADE,
  FOREIGN KEY (`id_statusEntity`) REFERENCES `hotel_statusEntity` (`id_statusEntity`) ON DELETE CASCADE
                                                    ON UPDATE CASCADE,
  `created_at` timestamp,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `hotel_reservation` (
  `id_reservation` INT PRIMARY KEY,
  `description` VARCHAR(255),
  `arrival_date` date,
  `departure_date` date,
  `amount_of_people` INT,
  `id_room` INT,
  `id_checkIn` INT,
  `id_checkOut` INT,
  `id_status` INT,
  `id_pay` INT,
  `id_statusEntity` INT,
  FOREIGN KEY (`id_room`) REFERENCES `hotel_room` (`id_room`) ON DELETE CASCADE
                                                    ON UPDATE CASCADE,
  FOREIGN KEY (`id_checkIn`) REFERENCES `hotel_check_in` (`id_checkIn`) ON DELETE CASCADE
                                                    ON UPDATE CASCADE,
  FOREIGN KEY (`id_checkOut`) REFERENCES `hotel_check_out` (`id_checkOut`) ON DELETE CASCADE
                                                    ON UPDATE CASCADE,
  FOREIGN KEY (`id_status`) REFERENCES `hotel_reservation_status` (`id_status`) ON DELETE CASCADE
                                                    ON UPDATE CASCADE,
  FOREIGN KEY (`id_pay`) REFERENCES `hotel_pay` (`id_pay`) ON DELETE CASCADE
                                                    ON UPDATE CASCADE,                                                
  FOREIGN KEY (`id_statusEntity`) REFERENCES `hotel_statusEntity` (`id_statusEntity`) ON DELETE CASCADE
                                                    ON UPDATE CASCADE,                                                  
  `created_at` timestamp,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `hotel_customer` (
  `id_customer` INT PRIMARY KEY,
  `id_people` INT,
  `id_reservation` INT,
  `id_statusEntity` INT,
  FOREIGN KEY (`id_people`) REFERENCES `hotel_people` (`id_people`) ON DELETE CASCADE
                                                    ON UPDATE CASCADE,  
  FOREIGN KEY (`id_reservation`) REFERENCES `hotel_reservation` (`id_reservation`) ON DELETE CASCADE
                                                    ON UPDATE CASCADE,  
  FOREIGN KEY (`id_statusEntity`) REFERENCES `hotel_statusEntity` (`id_statusEntity`) ON DELETE CASCADE
                                                    ON UPDATE CASCADE,  
  `created_at` timestamp,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `hotel_cancellation` (
  `id_cancellation` INT PRIMARY KEY,
  `reason` VARCHAR(255),
  `refund` double,
  `id_reservation` INT,
  `id_statusEntity` INT,
  FOREIGN KEY (`id_reservation`) REFERENCES `hotel_reservation` (`id_reservation`) ON DELETE CASCADE
                                                    ON UPDATE CASCADE,  
  FOREIGN KEY (`id_statusEntity`) REFERENCES `hotel_statusEntity` (`id_statusEntity`) ON DELETE CASCADE
                                                    ON UPDATE CASCADE, 
  `created_at` timestamp,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

