DROP PROCEDURE IF EXISTS view_admin_info;   
                                        
DELIMITER $$                            
                                        
CREATE PROCEDURE view_admin_info (vCari VARCHAR(100))
                                        
BEGIN                                   
	START TRANSACTION;                     
 SELECT * FROM admin_info WHERE  (nama_pegawai LIKE CONCAT('%', vCari, '%'))  or (jabatan_pegawai LIKE CONCAT('%', vCari, '%')); 
	COMMIT;                                
END $$                                  
                                        
DELIMITER ;                             
                                        
