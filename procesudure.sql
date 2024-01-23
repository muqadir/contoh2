
-- membuat prosedur DaftarObat()
DELIMITER $$
CREATE PROCEDURE DaftarObat()
BEGIN
    SELECT * FROM obat;
END$$
DELIMITER $$


-- memanggil DaftarObat()
CALL `DaftarObat`();


-- membuat prosedur DaftarHarga()
DELIMITER $$
CREATE PROCEDURE DaftarHarga()
BEGIN
    SELECT kode_obat,nama_obat,kemasan,harga_obat
    FROM obat;
END$$
DELIMITER  $$
-- memanggil DaftarHarga()
CALL `DaftarHarga`();


-- membuat prosedur DaftarHargaDenganKondisi()


DELIMITER $$
CREATE PROCEDURE DaftarHargaDenganKondisi()
BEGIN
    SELECT kode_obat,nama_obat,jenis,harga_obat
    FROM obat
    WHERE harga_obat<50000;
END $$
DELIMITER $$ 

CALL `DaftarHargaDenganKondisi`();