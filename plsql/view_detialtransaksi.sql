DROP PROCEDURE IF EXISTS view_detail_transaksi;   
                                        
DELIMITER $$                            
                                        
CREATE PROCEDURE view_detail_transaksi (vCari VARCHAR(100))
                                        
BEGIN                                   
	START TRANSACTION;                     
 SELECT * FROM vdetailtransaksi WHERE  (no_transaksi LIKE CONCAT('%', vCari, '%'))  or (nama LIKE CONCAT('%', vCari, '%')); 
	COMMIT;                                
END $$                                  
                                        
DELIMITER ;                             
                                        
