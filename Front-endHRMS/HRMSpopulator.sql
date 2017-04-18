


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
INSERT INTO hrms.employee(EID,f_name,m_initial,l_name,E_ssn,E_phone,E_city,E_street,E_state,E_email,Date_of_hire,l_of_employment,D_ID,S_ID,dbirth,gender,dep_contact) VALUES (1,'Cloud','S','Strife',523669584,7708546969,'Atlanta','45 Midgard Way','GA','cstrife2@publix.com','2014/5/23',26,1,2740,'1985/4/5','male',7704515555);
INSERT INTO hrms.employee(EID,f_name,m_initial,l_name,E_ssn,E_phone,E_city,E_street,E_state,E_email,Date_of_hire,l_of_employment,D_ID,S_ID,dbirth,gender,dep_contact) VALUES (2,'Lightning','C','Farron',454125555,9548783326,'Jersey City','251 Spruce Street','NJ','lfarron1@publix.com','2014/5/4',21,1,2740,'1990/6/23','female',405923705);
INSERT INTO hrms.employee(EID,f_name,m_initial,l_name,E_ssn,E_phone,E_city,E_street,E_state,E_email,Date_of_hire,l_of_employment,D_ID,S_ID,dbirth,gender,dep_contact) VALUES (3,'Sazh',NULL,'Katzroy',184009031,9937226984,'Seattle','2 Sunset Avenue','WA','skatzroy8@publix.com','2014/5/25',6,1,2740,'1976/10/28','male',9216316447);

