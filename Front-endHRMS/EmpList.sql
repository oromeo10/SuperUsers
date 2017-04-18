CREATE VIEW `new_view` AS

Select a.*,b.POS_name,b.Job_Type
from hrms.employee as a
inner join hrms.position as b
on a.EID=b.EID;