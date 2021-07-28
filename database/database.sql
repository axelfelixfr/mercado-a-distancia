CREATE DATABASE mercado_a_distancia;
USE mercado_a_distancia;

CREATE TABLE usuario(
id        int(255) auto_increment not null,
nombre    varchar(100) not null,
apellidos varchar (255),
email     varchar(255) not null,
password  varchar(255) not null,
rol       varchar(20),
foto      varchar (255),
CONSTRAINT pk_usuario PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;

INSERT INTO usuario VALUES(NULL, 'Axel Félix', 'Flores Ramírez', 'axelfelix123@hotmail.com', 'osito13', 'admin', NULL);


CREATE TABLE categoria(
id        int(255) auto_increment not null,
nombre    varchar(100) not null,
CONSTRAINT pk_categoria PRIMARY KEY(id),
CONSTRAINT uq_nombre UNIQUE(nombre)
)ENGINE=InnoDb;

INSERT INTO categoria VALUES (NULL,'Alimentos en general');
INSERT INTO categoria VALUES (NULL,'Productos Domésticos');
INSERT INTO categoria VALUES (NULL,'Higiene Personal');
INSERT INTO categoria VALUES (NULL,'Mascotas');
INSERT INTO categoria VALUES (NULL,'Jardinería / Herramientas básicas');
INSERT INTO categoria VALUES (NULL,'Farmacia / Herboristería');

CREATE TABLE producto(
id           int(255) auto_increment not null,
categoria_id int (255) not null,
nombre       varchar(100) not null,
descripcion  text,
precio       float(100,3) not null,
stock        int(255) not null,
oferta       varchar(15),
fecha        date not null,
presentacion varchar(255),
CONSTRAINT pk_producto PRIMARY KEY(id),
CONSTRAINT fk_producto_categoria FOREIGN KEY(categoria_id) REFERENCES categoria(id)
)ENGINE=InnoDb;

CREATE TABLE pedido(
id           int(255) auto_increment not null,
usuario_id   int (255) not null,
colonia      varchar(100) not null,
mercado      varchar(100) not null,
direccion_cl varchar(255) not null,
costo_total  float(200,3) not null,
status       varchar(20) not null,
fecha        date not null,
hora         time not null,
CONSTRAINT pk_pedido PRIMARY KEY(id),
CONSTRAINT fk_pedido_usuario FOREIGN KEY(usuario_id) REFERENCES usuario(id)
)ENGINE=InnoDb;

CREATE TABLE linea_pedido(
id          int(255) auto_increment not null,
pedido_id   int(255) not null,
producto_id int(255) not null,
unidades    int(255) not null,
CONSTRAINT pk_linea_pedido PRIMARY KEY(id),
CONSTRAINT fk_linea_pedidos FOREIGN KEY(pedido_id) REFERENCES pedido(id),
CONSTRAINT fk_linea_productos FOREIGN KEY(producto_id) REFERENCES producto(id)
)ENGINE=InnoDb;