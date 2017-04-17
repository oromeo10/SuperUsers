CREATE OR REPLACE VIEW `allDepartments` AS
    SELECT 
        D_name, D_manager, SID
    FROM
        department;