DROP PROCEDURE IF EXISTS edit_login_user;   
                                        
DELIMITER //                            
                                        
CREATE PROCEDURE edit_login_user (
IN iduser  INT(11),  IN  user VARCHAR(50),  IN pass VARCHAR(30))
                                        
BEGIN                                   
	START TRANSACTION;                     
		UPDATE login_user SET username = user, password = pass WHERE id_user = iduser; 
	COMMIT;                                
END //                                  
                                        
DELIMITER ;                             
                                        