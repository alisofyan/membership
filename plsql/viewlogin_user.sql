DROP PROCEDURE IF EXISTS view_login_user;   
                                        
DELIMITER $$                            
                                        
CREATE PROCEDURE view_login_user (vCari VARCHAR(100))
                                        
BEGIN                                   
	START TRANSACTION;                     
 SELECT * FROM login_user WHERE  (id_user LIKE CONCAT('%', vCari, '%'))  or (username LIKE CONCAT('%', vCari, '%')); 
	COMMIT;                                
END $$                                  
                                        
DELIMITER ;                             
                                        
