-- Table Agence
CREATE TABLE agence (
    ida INT PRIMARY KEY AUTO_INCREMENT,
    numero VARCHAR(50) NOT NULL,
    adresse VARCHAR(255) NOT NULL
);

-- Table Profil
CREATE TABLE profil (
    idp INT PRIMARY KEY AUTO_INCREMENT,
    libp VARCHAR(100) NOT NULL
);

-- Table Type de Compte
CREATE TABLE typecpt (
    idtc INT PRIMARY KEY AUTO_INCREMENT,
    libtc VARCHAR(100) NOT NULL
);

-- Table Reçu
CREATE TABLE recu (
    idr INT PRIMARY KEY AUTO_INCREMENT,
    reference VARCHAR(100) NOT NULL,
    type VARCHAR(50) NOT NULL,
    dater DATE NOT NULL,
    montant DECIMAL(10, 2) NOT NULL
);

-- Table Utilisateur (users)
CREATE TABLE users (
    idu INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    telephone VARCHAR(15) NOT NULL,
    email VARCHAR(100) NOT NULL,
    pwd VARCHAR(100) NOT NULL,
    justificatif VARCHAR(255),
    idp INT,
    FOREIGN KEY (idp) REFERENCES profil(idp)
);

-- Table Demande
CREATE TABLE demande (
    idd INT PRIMARY KEY AUTO_INCREMENT,
    dated DATE NOT NULL,
    idtc INT,
    idu INT,
    FOREIGN KEY (idtc) REFERENCES typecpt(idtc),
    FOREIGN KEY (idu) REFERENCES users(idu)
);

-- Table Compte
CREATE TABLE compte (
    idc INT PRIMARY KEY AUTO_INCREMENT,
    numero VARCHAR(50) NOT NULL,
    solde DECIMAL(10, 2) NOT NULL,
    dateCrea DATE NOT NULL,
    taux DECIMAL(5, 2),
    frais DECIMAL(10, 2),
    etat VARCHAR(50) NOT NULL,
    ida INT,
    idu INT,
    idtc INT,
    idd INT,
    FOREIGN KEY (ida) REFERENCES agence(ida),
    FOREIGN KEY (idu) REFERENCES users(idu),
    FOREIGN KEY (idtc) REFERENCES typecpt(idtc),
    FOREIGN KEY (idd) REFERENCES demande(idd)
);

-- Table Transaction
CREATE TABLE transaction (
    idtr INT PRIMARY KEY AUTO_INCREMENT,
    datetr DATE NOT NULL,
    montant DECIMAL(10, 2) NOT NULL,
    type VARCHAR(50) NOT NULL,
    idu INT,
    idc INT,
    FOREIGN KEY (idu) REFERENCES users(idu),
    FOREIGN KEY (idc) REFERENCES compte(idc)
);

-- Table transrecu
CREATE TABLE transrecu (
    idr INT,
    idtr INT,
    PRIMARY KEY (idr, idtr),
    FOREIGN KEY (idr) REFERENCES recu(idr),
    FOREIGN KEY (idtr) REFERENCES transaction(idtr)
);

-- Table comptrecu
CREATE TABLE comptrecu (
    idr INT,
    idc INT,
    PRIMARY KEY (idr, idc),
    FOREIGN KEY (idr) REFERENCES recu(idr),
    FOREIGN KEY (idc) REFERENCES compte(idc)
);


-- Insérer des données dans la table agence
INSERT INTO agence (numero, adresse) VALUES
('A001', '123 Rue Principale, Paris'),
('A002', '456 Avenue de la Liberté, Lyon'),
('A003', '789 Boulevard de la République, Marseille');

-- Insérer des données dans la table profil
INSERT INTO profil (libp) VALUES
('Client'),
('RG'),
('CC');

-- Insérer des données dans la table typecpt
INSERT INTO typecpt (libtc) VALUES
('Compte Courant'),
('Compte Épargne'),
('Compte Entreprise');

-- Insérer des données dans la table recu
INSERT INTO recu (reference, type, dater, montant) VALUES
('REF001', 'Dépôt', '2024-01-15', 1000.00),
('REF002', 'Retrait', '2024-02-20', 200.00),
('REF003', 'Transfert', '2024-03-10', 500.00);

-- Insérer des données dans la table users
INSERT INTO users (nom, prenom, telephone, email, pwd, justificatif, idp) VALUES
('Dupont', 'Jean', '0601020304', 'jean.dupont@example.com', 'passer', 'Justif1', 1),
('Martin', 'Marie', '0612345678', 'marie.martin@example.com', 'passer', 'Justif2', 2),
('Durand', 'Paul', '0623456789', 'paul.durand@example.com', 'passer', 'Justif3', 3);

-- Insérer des données dans la table demande
INSERT INTO demande (dated, idtc, idu) VALUES
('2024-01-01', 1, 1),
('2024-01-15', 2, 2),
('2024-02-01', 3, 3);

-- Insérer des données dans la table compte
INSERT INTO compte (numero, solde, dateCrea, taux, frais, etat, ida, idu, idtc, idd) VALUES
('CPT001', 1000.00, '2024-01-01', 0.5, 5.00, 'Actif', 1, 1, 1, 1),
('CPT002', 2000.00, '2024-01-15', 1.0, 3.00, 'Actif', 2, 2, 2, 2),
('CPT003', 5000.00, '2024-02-01', 1.5, 10.00, 'Inactif', 3, 3, 3, 3);

-- Insérer des données dans la table transaction
INSERT INTO transaction (datetr, montant, type, idu, idc) VALUES
('2024-01-15', 1000.00, 'Dépôt', 1, 1),
('2024-02-20', 200.00, 'Retrait', 2, 2),
('2024-03-10', 500.00, 'Transfert', 3, 3);

-- Insérer des données dans la table transrecu
INSERT INTO transrecu (idr, idtr) VALUES
(1, 1),
(2, 2),
(3, 3);

-- Insérer des données dans la table comptrecu
INSERT INTO comptrecu (idr, idc) VALUES
(1, 1),
(2, 2),
(3, 3);

