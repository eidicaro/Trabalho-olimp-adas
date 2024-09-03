CREATE DATABASE IF NOT EXISTS runnin;

USE runnin;

CREATE TABLE IF NOT EXISTS feedback (
    id_avaliacao INT AUTO_INCREMENT PRIMARY KEY,
    nome_avaliador VARCHAR(255) NOT NULL,
    nota TINYINT NOT NULL CHECK (nota >= 0 AND nota <= 5),
    descricao TEXT,
    data DATE NOT NULL,
    horario TIME NOT NULL
);
