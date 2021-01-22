CREATE TABLE `clientes` (
 `DNI` VARCHAR(9) NOT NULL ,
 `nombre` VARCHAR(100) NOT NULL ,
 `apellidos` VARCHAR(100) NOT NULL ,
 `email` VARCHAR(100) NOT NULL , 
 `fecha_nacimiento` DATE NOT NULL); 
ALTER TABLE `clientes` ADD PRIMARY KEY( `DNI`); 
ALTER TABLE `clientes` ADD UNIQUE(`DNI`); 
ALTER TABLE `clientes` ADD UNIQUE( `email`); 

drop table if exists productos;
CREATE TABLE `productos` (
  `cod` int NOT NULL,
  `descripcion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `stock` int NOT NULL);

ALTER TABLE `productos` ADD PRIMARY KEY (`cod`);
ALTER TABLE `productos` MODIFY `cod` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
