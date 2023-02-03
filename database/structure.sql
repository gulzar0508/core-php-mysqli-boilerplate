/*

// manual to write sql create statements
// ensure the table to be referenced for foreign key is created before it is referenced
// an example is provided below

# data types
-- int
-- varchar (size) // varchar (255)
-- text
-- char (size) // char (1)
-- date
-- datetime

-- NOT NULL // if null values are allowed
-- default 'd' // if default value to be stored

# keys
-- PRIMARY KEY (<field_name>)
-- FOREIGN KEY (<field_name>) REFERENCES <other_tablename>(<other_fieldname>)

*/

CREATE TABLE user_role (
    id int NOT NULL,
    title varchar (255),
    status char (3) default 'I',
    PRIMARY KEY (id)
);

CREATE TABLE user (
    id int NOT NULL,
    name varchar (255),
    username varchar (255),
    password varchar (255),
    role_id int NOT NULL,
    lastLogin datetime,
    status char (3) default 'I',
    PRIMARY KEY (id),
    FOREIGN KEY (role_id) REFERENCES user_role(id)
);