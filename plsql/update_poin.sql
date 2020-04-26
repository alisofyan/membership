DROP PROCEDURE IF EXISTS edit_poin;   
                                        
DELIMITER //                            
                                        
CREATE PROCEDURE edit_poin (
IN idpoin  INT(11),  IN noTRX  INT(11),  IN jumlah  INT(250))
                                        
BEGIN                                   
	START TRANSACTION;                     
		UPDATE poin SET  no_transaksi = noTRX, jml_poin = jumlah WHERE id_poin = idpoin; 
	COMMIT;                                
END //                                  
                                        
DELIMITER ;                             
                                        