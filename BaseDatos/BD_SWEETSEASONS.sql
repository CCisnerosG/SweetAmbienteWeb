drop schema if exists SweetSeasons;
drop user if exists UserProyecto;
create schema SweetSeasons;

create user 'UserProyecto'@'%' identified by 'Pass123';
grant all privileges on SweetSeasons.* to 'UserProyecto'@'%';
flush privileges;

CREATE TABLE SweetSeasons.categoria(
	id_categoria  INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    Nombre VARCHAR(50),
    Descripcion VARCHAR(100),
    ruta_imagen varchar(1024)
)
ENGINE = InnoDB;

CREATE TABLE SweetSeasons.productos(
	id_producto INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    Nombre VARCHAR(50),
    id_categoria INT NOT NULL,
    Cantidad INT,
    Descripcion VARCHAR(100),
    Tamano VARCHAR(1),
    Precio INT,    
    ruta_imagen varchar(1024),
    FOREIGN KEY (id_categoria) REFERENCES categoria(id_categoria)
)
ENGINE = InnoDB;

CREATE TABLE SweetSeasons.clientes(
	id_cliente INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    Nombre VARCHAR(50),
    Primer_apellido VARCHAR(50),
    Segundo_apellido VARCHAR(50),
    Correo VARCHAR(50),
    Numero_telefonico VARCHAR(10),
    Direccion varchar(50),
    ruta_imagen varchar(1024)
)
ENGINE = InnoDB;

CREATE TABLE SweetSeasons.ventas(
	id_venta INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    Fecha_venta DATE,
    id_cliente INT NOT NULL,
    id_producto INT NOT NULL,
    Cantidad INT,
    Precio INT,
    Total INT,
	ruta_imagen varchar(1024),
    FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente),
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto)
)
ENGINE = InnoDB;

CREATE TABLE SweetSeasons.ingredientes(
	id_ingrediente INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    Nombre VARCHAR(50),
    Unidad_medida VARCHAR(50),
    Precio INT,
    id_proveedor INT,
    ruta_imagen varchar(1024),
    FOREIGN KEY (id_proveedor) REFERENCES proveedores(id_proveedor)
)
ENGINE = InnoDB;

CREATE TABLE SweetSeasons.proveedores(
	id_proveedor INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    Nombre VARCHAR(50),
    Primer_apellido VARCHAR(50),
    Segundo_apellido VARCHAR(50),
    Numero_telefonico VARCHAR(10),
    Correo VARCHAR(50),
    id_ingrediente INT,
    Estado VARCHAR(10),
    ruta_imagen varchar(1024)
)
ENGINE = InnoDB;

CREATE TABLE SweetSeasons.compras(
	id_compra INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    Fecha_compra DATE,
    id_proveedor INT NOT NULL,
    id_producto INT NOT NULL,
    Cantidad INT,
    Precio INT,
    Total INT,
     ruta_imagen varchar(1024),
    FOREIGN KEY (id_proveedor) REFERENCES proveedores(id_proveedor),
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto)
)
ENGINE = InnoDB;

/*Inserts de las categorias*/
INSERT INTO SweetSeasons.categoria (id_categoria, Nombre, Descripcion, ruta_imagen) VALUES
(1, 'Postres', 'Comida dulce que se consume al final de una comida.', 'image/categoria/pasteleria.jpg'),
(2, 'Repostería', 'Productos dulces como galletas y alfajores.', 'image/categoria/reposteria.jpg'),
(3, 'Pastelería', 'Pasteles y tortas decoradas de manera artística.', 'image/categoria/postres.jpg');

/*Inserts de los productos por categoria*/
/*Categoria 1*/
INSERT INTO SweetSeasons.productos (id_producto, Nombre, id_categoria, Cantidad, Descripcion, Tamano, Precio, ruta_imagen)
VALUES
    (1, 'Pastel de Chocolate', 1, 50, 'Delicioso pastel de chocolate', 'M', 20, 'image/productos/pastel_chocolate.jfif'),
    (2, 'Pastel de Fresas', 1, 30, 'Pastel con fresas frescas', 'L', 25, 'image/productos/pastel_fresas.jfif'),
    (3, 'Cupcakes de Vainilla', 1, 80, 'Cupcakes suaves de vainilla', 'S', 15, 'image/productos/cupcake_vainilla.jfif');

/*Categoria 2*/
INSERT INTO SweetSeasons.productos (id_producto, Nombre, id_categoria, Cantidad, Descripcion, Tamano, Precio, ruta_imagen)
VALUES
    (4,'Galletas de Chocolate', 2, 120, 'Galletas con chispas de chocolate', 'S', 8, 'image/productos/galleta_chocolate.jfif'),
    (5, 'Alfajores de Dulce de Leche', 2, 90, 'Dulces alfajores rellenos', 'M', 10, 'image/productos/alfajores.jfif'),
    (6, 'Galletas de Mantequilla', 2, 60, 'Galletas de mantequilla para decorar', 'L', 12, 'image/productos/galleta_mantequilla.jfif');

/*Categoria 3*/
INSERT INTO SweetSeasons.productos (id_producto, Nombre, id_categoria, Cantidad, Descripcion, Tamano, Precio, ruta_imagen)
VALUES
    (7,'Tiramisú', 3, 40, 'Postre italiano con café', 'M', 18, 'image/productos/tiramisu.jfif'),
    (8,'Mousse de Chocolate', 3, 70, 'Mousse de chocolate cremoso', 'L', 22, 'image/productos/mouse.jfif'),
    (9,'Flan de Caramelo', 3, 55, 'Clásico flan con caramelo', 'S', 12, 'image/productos/flan.jfif');

#AGREGAR A LA BD PARA PROBAR PROVEEDORES
INSERT INTO SweetSeasons.proveedores (id_proveedor, Nombre, Primer_apellido, Segundo_apellido, Numero_telefonico, Correo, id_ingrediente, Estado, ruta_imagen)
VALUES
   (1, 'Proveedor1', 'Apellido1', 'Apellido2', '1234567890', 'proveedor1@example.com', 101, 'Activo', 'https://th.bing.com/th/id/OIP.72i7IHxkn9SPh59aSgecuAHaE8?pid=ImgDet&rs=1');

#AGREGAR A LA BD PARA PROBAR CLIENTES
INSERT INTO SweetSeasons.clientes (id_cliente,Nombre, Primer_apellido, Segundo_apellido, Correo, Numero_telefonico, Direccion, ruta_imagen)
VALUES
   (1, 'Cliente1', 'Apellido1', 'Apellido2', 'cliente1@example.com', '1234567890', 'Dirección1', 'https://thumbs.dreamstime.com/b/una-cocinera-pastelera-muy-alegre-ofrece-pasteles-de-escaparate-pasteler%C3%ADa-femenina-en-el-bar-reposter%C3%ADa-199989121.jpg');


/*Inserts de los Ingredientes*/
INSERT INTO SweetSeasons.ingredientes (id_ingrediente, Nombre, Unidad_medida, Precio, id_proveedor, ruta_imagen) VALUES 
(1, 'Harina', '5 Kilogramos', 10000, 1, 'image/ingredientes/harina.jfif'),
(2, 'Azúcar', '2 Kilogramos', 10000, 1, 'image/ingredientes/azucar.jfif'),
(3, 'Mantequilla', '500 Gramos', 10000, 1, 'image/ingredientes/mantequilla.jfif'),
(4, 'Chocolate', '500 Gramos', 10000, 1, 'image/ingredientes/chocolate.jfif'),
(5, 'Huevos', 'Docena', 10000, 1, 'image/ingredientes/huevos.jfif'),
(6, 'Levadura', '50 Gramos', 10000, 1, 'image/ingredientes/levadura.jfif'),
(7, 'Fresas', '250 Gramos', 10000, 1, 'image/ingredientes/fresas.jfif'),
(8, 'Crema', '200 Mililitros', 10000, 1, 'image/ingredientes/crema.jfif'),
 (9, 'Nueces', '100 Gramos', 10000, 1, 'image/ingredientes/nueces.jfif'),
(10, 'Vainilla', '30 Mililitros', 10000, 1, 'image/ingredientes/vainilla.jfif');