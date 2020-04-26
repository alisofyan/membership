DROP PROCEDURE IF EXISTS view_poin;   
                                        
DELIMITER $$                            
                                        
CREATE PROCEDURE view_poin (vCari VARCHAR(100))
                                        
BEGIN                                   
	START TRANSACTION;                     
 SELECT * FROM poin WHERE  (id_poin LIKE CONCAT('%', vCari, '%'))  or (no_transaksi LIKE CONCAT('%', vCari, '%')); 
	COMMIT;                                
END $$                                  
                                        
DELIMITER ;                             
                                        
