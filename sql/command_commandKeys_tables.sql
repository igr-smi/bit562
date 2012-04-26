create table commands(
object_ID char(23) primary key,
commandName varchar(25),
name varchar(50),
description varchar(1000),
entryDate timestamp
);

create table commandKeys(
object_ID char(23) Primary Key,
FK_command char(23),
commandKey varchar(25),
value varchar(1000),
entryDate timestamp,
constraint CT_commandKeys_command 
foreign key (FK_command)
references commands (object_id)
);

INSERT INTO `commands`(`object_id`, `commandName`, `name`, `description`) 
VALUES ('bi561-comms-requi-00001','REQUIREMENT','...', '2x...');

INSERT INTO `commands`(`object_id`, `commandName`, `name`, `description`) 
VALUES ('bi561-comms-requi-00002','TABLE','....', '2x....');

INSERT INTO `commands`(`object_id`, `commandName`, `name`, `description`) 
VALUES ('bi561-comms-requi-00003','LINK','.....', '2x.....');


INSERT INTO `commandkeys`(`object_id`,`FK_command`, `commandKey`, `value`) 
VALUES ('bi561-comke-requi-name_','bi561-comms-requi-00001', 'name', 
'A label for the requirement');

INSERT INTO `commandkeys`(`object_id`,`FK_command`, `commandKey`, `value`) 
VALUES ('bi561-comke-requi-requi','bi561-comms-requi-00001', 'requirement', 
'A description of requirement');

INSERT INTO `commandkeys`(`object_id`,`FK_command`, `commandKey`, `value`) 
VALUES ('bi561-comke-requi-stkhd','bi561-comms-requi-00001', 'stakeholders', 
'Include the names of all the stakeholders of the referenced section');

--INSERTS into tablemaps

INSERT INTO `tablemaps`(`map_ID`, `tableName`, `browserFormName`, `dbColumnName`, `queryType`, `dataType`, `seqNum`) 
VALUES ( 1, 'commandall', 'command', 'commands.commandName', 'select', 'alpha', 1)

INSERT INTO `tablemaps`(`tableName`, `browserFormName`, `dbColumnName`, `queryType`, `dataType`, `seqNum`) 
VALUES ('commandall', 'description', 'commands.description', 'select', 'alpha', 1)

INSERT INTO `tablemaps`(`tableName`, `browserFormName`, `dbColumnName`, `queryType`, `dataType`, `seqNum`) 
VALUES ('commandall', 'commandKey', 'commandkeys.commandKey', 'select', 'alpha', 1)

INSERT INTO `tablemaps`(`tableName`, `browserFormName`, `dbColumnName`, `queryType`, `dataType`, `seqNum`) 
VALUES ('commandall', 'value', 'commandkeys.value', 'select', 'alpha', 1)