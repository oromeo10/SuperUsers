CREATE OR REPLACE VIEW `EmpList` AS

SELECT a.*,b.POS_name,b.Job_Type
FROM hrms.employee AS a
	INNER JOIN hrms.position AS b
ON a.EID=b.EID;