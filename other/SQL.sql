/*create users table*/
CREATE TABLE users(
    userId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    usersFirstName varchar(128) NOT NULL,
    usersLastName varchar(128) NOT NULL,
    usersEmail varchar(128) NOT NULL,
    usersPassword varchar(128) NOT NULL
);

/*select usersEmail*/
"SELECT * FROM user WHERE user_email = ?;"


/*create user table*/
CREATE TABLE user(
    user_id int(10) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    user_first_name varchar(128),
    user_last_name varchar(128),
    user_email varchar(128),
    user_password varchar(128) NOT NULL
);

/*create schedule table*/
CREATE TABLE schedule(
    schedule_id int(10) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    schedule_name varchar(128)
);

/*create user_schedule table
intermediary table*/
CREATE TABLE user_schedule(
    user_schedule_id int(10) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    user_id int(10),
    schedule_id int(10),
    FOREIGN KEY (user_id) REFERENCES user (user_id)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
    FOREIGN KEY (schedule_id) REFERENCES schedule (schedule_id)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);

/*create semester table*/
CREATE TABLE semester(
    semester_id int(10) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    semester_name varchar(128)
);

/*create schedule_semester table
intermediary table*/
CREATE TABLE schedule_semester(
    schedule_semester_id int(10) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    schedule_id int(10),
    semester_id int(10),
    FOREIGN KEY (schedule_id) REFERENCES schedule (schedule_id)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
    FOREIGN KEY (semester_id) REFERENCES semester (semester_id)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);

/*create general_education_category table*/
CREATE TABLE general_education_category(
    general_education_category_id int(2) PRIMARY KEY AUTO_INCREMENT NOT NULL, 
    general_education_category_name varchar(128)
);

/*create class table*/
CREATE TABLE class(
    class_id int(10) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    general_education_category_id int(2),
    class_code varchar(16),
    class_name varchar(128),
    FOREIGN KEY (general_education_category_id) 
    REFERENCES general_education_category (general_education_category_id)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);

/*create semester_class table
intermediary table*/
CREATE TABLE semester_class(
    semester_class_id int(10) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    semester_id int(10),
    class_id int(10),
    FOREIGN KEY (semester_id) REFERENCES semester (semester_id)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
    FOREIGN KEY (class_id) REFERENCES class (class_id)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);

/*create schedule_semester table
intermediary table*/
INSERT INTO `general_education_category` (`general_education_category_id`, `general_education_category_name`) 
VALUES 
('1', 'Not a General Education Category'), 
('2', 'Mathematical and Computational Thinking'), 
('3', 'Written Communication'), 
('4', 'Oral Communication'), 
('5', 'Philosophy, Literature, and Aesthetic'), 
('6', 'Natural Science Inquiry'), 
('7', 'Historical, Behavioral, and Social Science'), 
('8', 'Global Awareness and Citizenship'), 
('9', 'Wellness');