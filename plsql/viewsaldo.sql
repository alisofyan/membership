DROP PROCEDURE IF EXISTS view_saldo;   
                                        
DELIMITER $$                            
                                        
CREATE PROCEDURE view_saldo (vCari VARCHAR(100))
                                        
BEGIN                                   
	START TRANSACTION;                     
 SELECT * FROM saldo WHERE  (id_saldo LIKE CONCAT('%', vCari, '%'))  or (id_saldo LIKE CONCAT('%', vCari, '%')); 
	COMMIT;                                
END $$                                  
                                        
DELIMITER ;                             
                                        
