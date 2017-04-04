DROP SCHEMA IF EXISTS HumanResources;
CREATE SCHEMA HumanResources; 
use  HumanResources; 

CREATE TABLE IF NOT EXISTS HumanResources.POSITIONS(
	POSID	int NOT NULL, 
    POS_name	varchar(15) NOT NULL,
    POS_type	varchar(15) NOT NULL, 
    Hourly	int, 
    Salary	int, 
    Manager	varchar(15) NOT NULL, 
    Requirements	varchar(15) NOT NULL,
    PRIMARY KEY(POSID)
);


CREATE TABLE HumanResources.TRAINING(
	L_train	int		NOT NULL, 
    T_start	date	NOT NULL, 
    T_end	date	NOT NULL, 
    Trainer	varchar(15) NOT NULL,
    Date_of_hire	date	NOT NULL,
    POSID	int		NOT NULL,
    PRIMARY KEY(POSID),
    FOREIGN KEY(POSID) REFERENCES POSITIONS(POSID)
);


CREATE TABLE HumanResources.STORE(
	SID int NOT NULL, 
    S_name varchar(15) NOT NULL, 
    S_phone int NOT NULL, 
    S_manager	varchar(15) NOT NULL, 
    S_address varchar(15) NOT NULL,
    PRIMARY KEY(SID)
);

CREATE TABLE HumanResources.DEPARTMENT(
	DID	int NOT NULL, 
    D_name	varchar(15) NOT NULL, 
    D_phone	int NOT NULL, 
    D_manager	varchar(15) NOT NULL, 
    SID	int NOT NULL,
    PRIMARY KEY(DID),
    FOREIGN KEY(SID) REFERENCES STORE(SID)
);

CREATE TABLE HumanResources.EMPLOYEE(
	EID	int	NOT NULL,
    -- E_name	varchar(31) NOT NULL, Needed?
    f_name	varchar(15)	NOT NULL,
	m_initial	char(1),
	l_name	varchar(15)	NOT NULL,
    E_ssn	char(9)	NOT NULL,
    E_phone	int	NOT NULL,
    
    -- E_address varchar(43) NOT NULL, Needed?
    E_add_street	varchar(20) NOT NULL,
	E_add_city	varchar(15) NOT NULL,
	E_add_state	char(3) NOT NULL,
    E_add_zipcode	char(5) NOT NULL,
    
    E_email	varchar(20)	NOT NULL,
    
    Date_of_hire	date	NOT NULL,
    L_of_employment	int	NOT NULL,
    DID	int NOT NULL,
    SID	int NOT NULL,
    PRIMARY KEY (EID, E_ssn),
    FOREIGN KEY(DID) REFERENCES DEPARTMENT(DID),
    FOREIGN KEY(SID) REFERENCES STORE(SID)
    );
    
    -- INDEX? 
    
CREATE TABLE HumanResources.POSITIONS(
	POSID	int NOT NULL, 
    POS_name	varchar(15) NOT NULL,
    POS_type	varchar(15) NOT NULL, 
    Hourly	int, 
    Salary	int, 
    Manager	varchar(15) NOT NULL, 
    EID	int NOT NULL, 
    Requirements	varchar(15) NOT NULL,
    PRIMARY KEY(POSID),
    FOREIGN KEY(EID) REFERENCES EMPLOYEE(EID)
);

CREATE TABLE HumanResources.BENEFITS(
	401K	boolean, 
    Vision	boolean, 
    Health	boolean, 
    Dental	boolean, 
    Temp_dis	boolean, 
    EID	int NOT NULL,
    PRIMARY KEY(EID), 
    FOREIGN KEY(EID) REFERENCES EMPLOYEE(EID)
);

CREATE TABLE HumanResources.DEMOGRAPHICS(
	Gender	char NOT NULL,
    Ethnicity	varchar(15) NOT NULL, 
    Disabiactorlity	boolean, 
    EID	int NOT NULL,
    PRIMARY KEY(EID)
);

CREATE TABLE HumanResources.CREDENTIALS(
	Languages	varchar(15) NOT NULL, 
    Year_exper	int	NOT NULL, 
    Educ_level	varchar(15) NOT NULL, 
    Certifications varchar(30) NOT NULL, 
    Reference	varchar(15) NOT NULL 
);

CREATE TABLE HumanResources.TRAINING(
	L_train	int		NOT NULL, 
	T_start	date	NOT NULL, 
	T_end	date	NOT NULL, 
	Trainer	varchar(15) NOT NULL,
	Date_of_hire	date	NOT NULL,
	POSID	int	NOT NULL,
	PRIMARY KEY(POSID),
	FOREIGN KEY(POSID) REFERENCES POSITIONS(POSID)
    -- FOREIGN KEY(Date_of_hire) REFERENCES EMPLOYEE(Date_of_hire)
);


