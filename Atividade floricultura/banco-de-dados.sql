/criação banco de dados/

/Tabela usuario
CREATE TABLE usuarios (
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
   
);

/tabela produto
CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL,
    quantidade INT NOT NULL
);

INSERT INTO produtos (nome, preco, quantidade)
VALUES
('Rosa Vermelha', 3.50, 50), 
('Margarida', 2.00, 30),     
('Orquídea Phalaenopsis', 45.00, 10), 
('Lírio Branco', 5.00, 20),   
('Crisântemo', 4.00, 15);     