DROP PROCEDURE IF EXISTS edit_saldo;   
                                        
DELIMITER //                            
                                        
CREATE PROCEDURE edit_saldo (
IN idsaldo  INT(11),  IN iduser  INT(11),  IN jumlah  INT(250))
                                        
BEGIN                                   
	START TRANSACTION;                     
		UPDATE saldo SET  id_user = iduser, jml_saldo = jumlah WHERE id_saldo = idsaldo; 
	COMMIT;                                
END //                                  
                                        
DELIMITER ;                             
                                        