INSERT INTO hotelStatusEntitys (name,description) VALUES ('INACTIVO','La entidad se encuentra INACTIVO y NO disponible en la aplicación y en la base de datos')
INSERT INTO hotelStatusEntitys (name,description) VALUES ('ELIMINADO','La entidad se encuentra ELIMINADO y NO disponible en la la aplicación y en la base de datos, es una eliminación lógica');

INSERT INTO hotelReservationStatus (name,description,hotelStatusEntity_id) VALUES ('NUEVA','Se a creado una solicitud de reservación y no se a terminado de rellenar los requisitos y no se a realizado el pago',1);
INSERT INTO hotelReservationStatus (name,description,hotelStatusEntity_id) VALUES ('PROCESO','Se a enviado los requitos correspondientes y en espera que el sistema verifique la reservación',1);
INSERT INTO hotelReservationStatus (name,description,hotelStatusEntity_id) VALUES ('PRE-APROBADA', 'El sistema a aprovado la reservación y el huesped puede procesar el pago para confirmar la reserva. Tiene un lapso de 24 hrs para realizar el pago',1);
INSERT INTO hotelReservationStatus (name,description,hotelStatusEntity_id) VALUES ('APROVADA','Se a completado el pago y el proceso de reservación y LISTO para arrivar al hotel el dia de la reservación',1);
INSERT INTO hotelReservationStatus (name,description,hotelStatusEntity_id) VALUES ('RECHAZADA','Se a rechazado la reservación, No se cumplio con un requisito y/o la verificación de alguna identificación es incorrecta. No se completó el pago y a expirado el dia del pago',1);
INSERT INTO hotelReservationStatus (name,description,hotelStatusEntity_id) VALUES ('CHECK-IN','Se realizó el check in y está el huesped está en el hotel',1);
INSERT INTO hotelReservationStatus (name,description,hotelStatusEntity_id) VALUES ('CHECK-OUT','Se realizó el check-out y se a terminado su estadia en el hotel',1);
INSERT INTO hotelReservationStatus (name,description,hotelStatusEntity_id) VALUES ('COMPLETADO','Se completo TODO el proceso de reservación con éxito',1);
INSERT INTO hotelReservationStatus (name,description,hotelStatusEntity_id) VALUES ('CANCELADA','El huesped a solicitado la cancelación de la reservación, incluso aunque ya esté APROVADA',1);
INSERT INTO hotelReservationStatus (name,description,hotelStatusEntity_id) VALUES ('CONTACTADO','El huesped y el hotel se han puesto en contacdo personalmente y en proceso de realizar el trámite para la cancelación',1);
INSERT INTO hotelReservationStatus (name,description,hotelStatusEntity_id) VALUES ('ELIMINADO','Es una eliminación lógica en donde no le aparece la reservación al huesped',1);

INSERT INTO hotelRoomCategorys (name,description,hotelStatusEntity_id) VALUES ('Swing','Cuenta con todo incluido',1);
INSERT INTO hotelRoomCategorys (name,description,hotelStatusEntity_id) VALUES ('Jr','Cuenta con la mitad de cosas',1);
INSERT INTO hotelRoomCategorys (name,description,hotelStatusEntity_id) VALUES ('Estandar','Cuenta con lo escencial de una habitación',1);

INSERT INTO hotelTypeRooms (name,description,hotelStatusEntity_id) VALUES ('Individual','Es una habitación con una cama individual, ideal para una persona.',1);
INSERT INTO hotelTypeRooms (name,description,hotelStatusEntity_id) VALUES ('Doble','Es una habitación con dos camas ideal para amigos y parejas.',1);
INSERT INTO hotelTypeRooms (name,description,hotelStatusEntity_id) VALUES ('Familiar','Es una habitación cn una cama matrimonial y una cama individual ideal para ir en familia.',1);
INSERT INTO hotelTypeRooms (name,description,hotelStatusEntity_id) VALUES ('Suite','Es una habitación con una cama matrimonial, ofrece más espacio y más mobiliario. Incluyen una pequeña sala, área de comedor y una zona equipada como oficina.',1);