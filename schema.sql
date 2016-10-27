CREATE TABLE uploads (
	id           VARCHAR(13)       PRIMARY KEY,
	data		 DATE			   NOT NULL,
	autor     	 VARCHAR(40) 	   NOT NULL,
	titulo       VARCHAR(120) 	   NOT NULL,
	comentario   VARCHAR(120)      NULL,
	area		 VARCHAR(8)		   NOT NULL
);