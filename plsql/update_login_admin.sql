DROP PROCEDURE IF EXISTS edit_login_admin;   
                                        
DELIMITER //                            
                                        
CREATE PROCEDURE edit_login_admin (
IN idpgw  INT(11),  IN  user VARCHAR(50),  IN pass VARCHAR(50))
                                        
BEGIN                                   
	START TRANSACTION;                     
		UPDATE login_admin SET username = user, password = pass WHERE id_pegawai = idpgw; 
	COMMIT;                                
END //                                  
                                        
DELIMITER ;                             
                                        