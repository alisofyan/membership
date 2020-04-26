DROP PROCEDURE IF EXISTS view_login_admin;   
                                        
DELIMITER $$                            
                                        
CREATE PROCEDURE view_login_admin (vCari VARCHAR(100))
                                        
BEGIN                                   
	START TRANSACTION;                     
 SELECT * FROM login_admin WHERE  (id_pegawai LIKE CONCAT('%', vCari, '%'))  or (username LIKE CONCAT('%', vCari, '%')); 
	COMMIT;                                
END $$                                  
                                        
DELIMITER ;                             
                                        
