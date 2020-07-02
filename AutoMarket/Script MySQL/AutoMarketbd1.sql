CREATE DATABASE automarketbd1;
USE automarketbd1;
CREATE TABLE Cliente(

	codCliente INT AUTO_INCREMENT,
	nomeCliente VARCHAR(80) NOT NULL,
    emailCliente VARCHAR(50) NOT NULL,
    senhaCliente VARCHAR(32) NOT NULL,
    cpfCliente VARCHAR(11) NOT NULL,
    enderecoCliente VARCHAR(30) NOT NULL,
    telefoneCliente INT NOT NULL,
    fotoCliente VARCHAR(150),
    PRIMARY KEY (codCliente)
);

CREATE TABLE Produto(
	codProduto INT AUTO_INCREMENT,
    nomeProduto VARCHAR(50) NOT NULL,
    memoriaProduto VARCHAR(100) NOT NULL,
    precoProduto DECIMAL(4,2) NOT NULL,
    categoriaProduto VARCHAR(20) NOT NULL,
    PRIMARY KEY (codProduto)
);

CREATE TABLE Carrinho(
	codCarrinho INT AUTO_INCREMENT,
    codCliente INT,
    codProduto INT,
    PRIMARY KEY (codCarrinho),
    FOREIGN KEY (codCliente) REFERENCES Cliente(codCliente),
    FOREIGN KEY (codProduto) REFERENCES Produto(codProduto)
    );
INSERT INTO Produto(nomeProduto,
					memoriaProduto,
                    precoProduto)
values ('tomate','image/produtos/tomate.png',00.99);
INSERT INTO Produto(nomeProduto,
					memoriaProduto,
                    precoProduto)
values ('couve','image/produtos/couve.png',02.49);

INSERT INTO Cliente(nomeCliente,
					emailCliente,			
                    senhaCliente,
                    cpfCliente,
					enderecoCliente,
					telefoneCliente)
values ('Eduardo','eduardo@gmail.com','12345','11122233344','rua tal 999',987654321);
INSERT INTO Cliente(nomeCliente,
					emailCliente,			
                    senhaCliente,
                    cpfCliente,
					enderecoCliente,
					telefoneCliente)
values ('Eduardo2','eduardo2@gmail.com','54321','11122233344','rua tal 999',987654321);
select * from Cliente;
select * from Produto ;where categoriaProduto = "carne";
select * from Carrinho;
drop table carrinho;
UPDATE Produto SET memoriaProduto = 'image/produtos/veja.jpg' where codProduto = 13;

delete  from Carrinho 