CREATE OR REPLACE VIEW `allDepartments` AS
    SELECT 
        a.D_name, b.S_name, b.SID
    FROM
        hrms.department AS a
        INNER JOIN hrms.store AS b
			ON b.SID = a.SID ;