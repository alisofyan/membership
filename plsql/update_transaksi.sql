DROP PROCEDURE IF EXISTS edit_transaksi;   
                                        
DELIMITER //                            
                                        
CREATE PROCEDURE edit_transaksi (
IN idTRX  INT(11),  IN noTRX  INT(11),  IN iduser  INT(11), IN idpgw INT(11), IN nilai INT(200), IN tglTRX DATE)
                                        
BEGIN                                   
	START TRANSACTION;                     
		UPDATE transaksi SET  no_transaksi = noTRX, id_user = iduser, id_pegawai = idpgw, nilai_pembelian = nilai, tgl_transaksi = tglTRX WHERE id_transaksi = idTRX; 
	COMMIT;                                
END //                                  
                                        
DELIMITER ;                             
                                        