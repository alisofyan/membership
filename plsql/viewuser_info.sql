DROP PROCEDURE IF EXISTS user_info_view;   
                                        
DELIMITER $$                            
                                        
CREATE PROCEDURE user_info_view (vKet VARCHAR(100))
                                        
BEGIN                                   
	START TRANSACTION;                     
 SELECT * FROM user_info WHERE  (id_user LIKE CONCAT('%', vKet, '%'))  or (nama LIKE CONCAT('%', vKet, '%')); 
	COMMIT;                                
END $$                                  
                                        
DELIMITER ;                             
                                        
