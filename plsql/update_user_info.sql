DROP PROCEDURE IF EXISTS edit_user_info;   
                                        
DELIMITER //                            
                                        
CREATE PROCEDURE edit_user_info (
IN iduser  INT(11),  IN  nama_user VARCHAR(100),  IN jk_user VARCHAR(10), IN tgl_user DATE, IN email_user VARCHAR(30), IN hp_user VARCHAR(15),IN alamat_user VARCHAR(100))
                                        
BEGIN                                   
	START TRANSACTION;                     
		UPDATE user_info SET nama = nama_user, jk = jk_user, tgl_lahir = tgl_user, email = email_user, hp = hp_user, alamat = alamat_user WHERE id_user = iduser; 
	COMMIT;                                
END //                                  
                                        
DELIMITER ;                             
                                        