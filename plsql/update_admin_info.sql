DROP PROCEDURE IF EXISTS edit_admin_info;   
                                        
DELIMITER //                            
                                        
CREATE PROCEDURE edit_admin_info (
IN idpgw  INT(11),  IN  namapgw VARCHAR(100),  IN jabatanpgw VARCHAR(10))
                                        
BEGIN                                   
	START TRANSACTION;                     
		UPDATE admin_info SET nama_pegawai = namapgw, jabatan_pegawai = jabatanpgw WHERE id_pegawai = idpgw; 
	COMMIT;                                
END //                                  
                                        
DELIMITER ;                             
                                        