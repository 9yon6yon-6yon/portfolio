DROP DATABASE IF EXISTS my_portfolio_db;
CREATE DATABASE my_portfolio_db;
USE my_portfolio_db;
CREATE TABLE users (
    u_id INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(50),
    password VARCHAR(255),
    email VARCHAR(50),
    PRIMARY KEY (u_id)
);
CREATE TABLE personalinfo(
    pinfo_id INT NOT NULL AUTO_INCREMENT,
    user_id INT,
    fathersName VARCHAR(50),
    mothersName VARCHAR(50),
    image_path VARCHAR(255),
    dob DATE,
    nationalId VARCHAR(100),
    address TEXT,
    PRIMARY KEY (pinfo_id),
    CONSTRAINT personal_user_id_fk FOREIGN KEY (user_id) REFERENCES users (u_id)
);
CREATE TABLE experience (
    e_id INT NOT NULL AUTO_INCREMENT,
    user_id INT,
    company VARCHAR(255),
    position VARCHAR(255),
    start_date DATE,
    end_date DATE,
    description TEXT,
    PRIMARY KEY (e_id),
    CONSTRAINT experience_user_id_fk FOREIGN KEY (user_id) REFERENCES users (u_id)
);
CREATE TABLE education (
    ed_id INT NOT NULL AUTO_INCREMENT,
    user_id INT,
    institution VARCHAR(255),
    degree VARCHAR(255),
    field_of_study VARCHAR(255),
    graduation_date DATE,
    description TEXT,
    PRIMARY KEY (ed_id),
    CONSTRAINT education_user_id_fk FOREIGN KEY (user_id) REFERENCES users (u_id)
);
CREATE TABLE skills (
    sk_id INT NOT NULL AUTO_INCREMENT,
    user_id INT,
    skill_name VARCHAR(255),
    proficiency INT,
    PRIMARY KEY (sk_id),
    CONSTRAINT skills_user_id_fk FOREIGN KEY (user_id) REFERENCES users (u_id)
);
CREATE TABLE projects (
    p_id INT NOT NULL AUTO_INCREMENT,
    user_id INT,
    project_name VARCHAR(255),
    description TEXT,
    start_date DATE,
    end_date DATE,
    PRIMARY KEY (p_id),
    CONSTRAINT projects_user_id_fk FOREIGN KEY (user_id) REFERENCES users (u_id)
);
CREATE TABLE contact (
    c_id INT NOT NULL AUTO_INCREMENT,
    user_id INT,
    name VARCHAR(50),
    email VARCHAR(50),
    phone VARCHAR(25),
    message TEXT,
    PRIMARY KEY (c_id),
    CONSTRAINT contact_user_id_fk FOREIGN KEY (user_id) REFERENCES users (u_id)
);
CREATE TABLE certifications (
    cert_id INT NOT NULL AUTO_INCREMENT,
    user_id INT,
    certification_name VARCHAR(255),
    issuing_organization VARCHAR(255),
    credential VARCHAR(255),
    expiration_date DATE,
    PRIMARY KEY (cert_id),
    CONSTRAINT certifications_user_id_fk FOREIGN KEY (user_id) REFERENCES users (u_id)
);
CREATE TABLE awards (
    awd_id INT NOT NULL AUTO_INCREMENT,
    user_id INT,
    award_name VARCHAR(255),
    date_received DATE,
    description TEXT,
    PRIMARY KEY (awd_id),
    CONSTRAINT awards_user_id_fk FOREIGN KEY (user_id) REFERENCES users (u_id)
);
CREATE TABLE publications (
    pub_id INT NOT NULL AUTO_INCREMENT,
    user_id INT,
    title VARCHAR(255),
    publisher VARCHAR(255),
    publication_date DATE,
    link VARCHAR(255),
    citation TEXT,
    PRIMARY KEY (pub_id),
    CONSTRAINT publications_user_id_fk FOREIGN KEY (user_id) REFERENCES users (u_id)
);
CREATE TABLE volunteer_work (
    vol_id INT NOT NULL AUTO_INCREMENT,
    user_id INT,
    organization VARCHAR(255),
    role VARCHAR(255),
    start_date DATE,
    end_date DATE,
    description TEXT,
    PRIMARY KEY (vol_id),
    CONSTRAINT volunteer_work_user_id_fk FOREIGN KEY (user_id) REFERENCES users (u_id)
);
CREATE TABLE interests (
    i_id INT NOT NULL AUTO_INCREMENT,
    user_id INT,
    interest_name VARCHAR(255),
    PRIMARY KEY (i_id),
    CONSTRAINT interests_user_id_fk FOREIGN KEY (user_id) REFERENCES users (u_id)
);
CREATE TABLE testimonials (
    te_id INT NOT NULL AUTO_INCREMENT,
    user_id INT,
    source VARCHAR(255),
    date_received DATE,
    quote TEXT,
    PRIMARY KEY (te_id),
    CONSTRAINT testimonials_user_id_fk FOREIGN KEY (user_id) REFERENCES users(u_id)
);