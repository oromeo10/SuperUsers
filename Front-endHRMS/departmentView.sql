CREATE OR REPLACE VIEW `departmentView` AS
    SELECT a.D_name,b.SID
FROM hrms.department AS a
	INNER JOIN hrms.store AS b
	ON a.SID=b.SID;