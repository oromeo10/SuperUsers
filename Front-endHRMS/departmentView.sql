CREATE VIEW `new_view` AS
Select a.D_name,b.SID
from hrms.department as a
inner join hrms.store as b
on a.SID=b.SID;