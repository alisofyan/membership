DROP PROCEDURE IF EXISTS view_transaksi;   
                                        
DELIMITER $$                            
                                        
CREATE PROCEDURE view_transaksi (vCari VARCHAR(100))
                                        
BEGIN                                   
	START TRANSACTION;                     
 SELECT * FROM transaksi WHERE  (no_transaksi LIKE CONCAT('%', vCari, '%'))  or (tgl_transaksi LIKE CONCAT('%', vCari, '%')); 
	COMMIT;                                
END $$                                  
                                        
DELIMITER ;                             
                                        
