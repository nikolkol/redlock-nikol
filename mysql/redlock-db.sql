CREATE TABLE `Users` (
    `ID` int(100) NOT NULL,
    `Nama` varchar(200) NOT NULL,
    `Alamat` varchar(100) NOT NULL,
    `Jabatan` varchar(100) NOT NULL,
    PRIMARY KEY (`ID`)
);

INSERT INTO `Users` (ID, Nama, Alamat, Jabatan)
VALUES ('1', 'Mia', 'Jakarta', 'Admin'),
('2', 'Ria', 'Bogor', 'Manager'),
('3', 'Lia', 'Depok', 'Sekretaris'),
('4', 'Tia', 'Tangerang', 'Admin');