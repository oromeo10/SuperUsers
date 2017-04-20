


-- -----------------------------------------------------
-- Populating 'hrms'.'store'
-- -----------------------------------------------------
INSERT INTO hrms.store(SID,S_name,S_phone,S_mgrID,S_city,S_state,S_zip) VALUES (2740,'Publix',4731533464,NULL,'Columbus','OH',90028);


-- -----------------------------------------------------
-- Populating 'hrms'.'department'
-- -----------------------------------------------------
INSERT INTO hrms.department(DID,D_name,D_mgrID,SID) VALUES (1,'Security',NULL,2740);


-- -----------------------------------------------------
-- Populating 'hrms'.'employee'
-- -----------------------------------------------------
INSERT INTO hrms.employee(EID,f_name,m_initial,l_name,E_ssn,E_phone,E_city,E_street,E_state,E_email,Date_of_hire,D_ID,S_ID,dbirth,gender,dep_contact,disability,ethnicity) VALUES (1,'Cloud','S','Strife',523669584,7708546969,'Atlanta','45 Midgard Way','GA','cstrife2@publix.com','2014/05/2',1,2740,'1985/04/05','m',5286669587,'N','djffasd');
