-- Table: Users
-- CREATE TABLE Users (
--    id int NOT NULL,
--    full_name varchar(255) NOT NULL,
--    email varchar(255) NOT NULL,
--    password varchar(20) NOT NULL,
--    license_nmbr varchar(25),
--    address varchar(255) NOT NULL,
--    zipcode int NOT NULL,
--    permissions int NOT NULL,
--    dob date NOT NULL,
--    state char(2) NOT NULL,
--    gender char(1),
--    party_aff char(3),
--    ssn int,
--    passport_nmbr int,
--    CONSTRAINT Users_pk PRIMARY KEY (id)
--);
INSERT INTO Users (id, full_name, email, password, license_nmbr, address, zipcode, permissions, dob, state, gender, party_aff, ssn, passport_nmbr)
VALUES (1, 'John Doe', 'johndoe@gmail.com', 'asdf123', '1234567890', '123 Long Road, Iowa City, Iowa', 52240, 1, '1990-07-04', 'IA', 'M', 'DEM', 123456789, 123456789),
(2, 'Jane Doe', 'janedoe@gmail.com', 'asdf123', '3141592653', '123 Long Road, Iowa City, Iowa', 52240, 1, '1989-08-14', 'IA', 'F', 'DEM', 222457601, 887949931),
(3, 'Max Test', 'maxtest@gmail.com', 'asdf123', '8675309123', '456 Short Boulevard, Coralville, Iowa', 52241, 3, '1970-03-22', 'IA', 'M', 'GRE', 948631374, 996414321),
(4, 'Sarah Example', 'sarahexample@gmail.com', 'asdf123', '9876543210', '23 Nice Drive, Cedar Rapids, Iowa', 52402, 2, '1992-10-13', 'IA', 'F', 'LIB', 758493028, 990786543),
(5, 'This Isreal', 'thisisreal@gmail.com', 'asdf123', '1231231231', '12345 Main Street, Cedar Falls, Iowa', 50614, 1, '1988-06-09', 'IA', 'M', 'GOP', 857416952, 234518765);





-- Table: Candidates
--CREATE TABLE Candidates (
--    candidate_id int NOT NULL,
--    candidate_name varchar(255) NOT NULL,
--    candidate_state char(2) NOT NULL,
--    candidate_bio varchar(1000) NOT NULL,
--    office_id int NOT NULL,
--    CONSTRAINT Candidates_pk PRIMARY KEY (candidate_id)
--);
INSERT INTO Candidates (candidate_id, candidate_name, candidate_state, candidate_bio, office_id)
VALUES (1, 'Barack Obama', 'IA', 'Barack is a Democrat running for Iowa Governor.', 1),
(2, 'Terry Branstad', 'IA', 'Terry is a Republican running for Iowa Governor.', 1),
(3, 'Hillary Clinton', 'NY', 'Hillary is a Democrat running for President of the United States.', 2),
(4, 'Donald Trump', 'NY', 'Donald is a Republican running for President of the United States.', 2),
(5, 'Jill Stein', 'MA', 'Jill is a Green Party Member running for President of the United States.', 2);





-- Table: Election
--CREATE TABLE Election (
--    election_id int NOT NULL,
--    date date NOT NULL,
--    active boolean NOT NULL,
--    completed boolean NOT NULL,
--    CONSTRAINT Election_pk PRIMARY KEY (election_id)
--);
INSERT INTO Election (election_id, date, active, completed)
VALUES (1, '2018-11-06', TRUE, FALSE), -- Iowa Governor Election
(2, '2020-11-03', TRUE, FALSE), -- 2020 Presidential Election
(3, '2018-11-06', TRUE, FALSE), -- Iowa US Representative 1
(4, '2018-11-06', TRUE, FALSE), -- Iowa US Representative 2
(5, '2020-11-03', TRUE, FALSE), -- Iowa US Senator 1
(6, '2022-11-08', TRUE, FALSE); -- Iowa US Senator 2





-- Table: Offices
--CREATE TABLE Offices (
--    office_id int NOT NULL,
--    title varchar(255) NOT NULL,
--    term_length int NOT NULL,
--    max_terms int NOT NULL,
--    CONSTRAINT Offices_pk PRIMARY KEY (office_id)
--);
INSERT INTO Offices (office_id, title, term_length, max_terms)
VALUES (1, 'Iowa Governor', 4, 10), -- Assuming term_length is in years. Not sure what to put for max terms because governor has no limit.
(2, 'US President', 4, 2), -- Assuming term_length is in years
(3, 'Iowa US Representative 1', 2, 10), -- Assuming term_length is in years. Not sure what to put for max terms because representative has no limit.
(4, 'Iowa US Representative 2', 2, 10), -- Assuming term_length is in years. Not sure what to put for max terms because representative has no limit.
(5, 'Iowa US Senator 1', 6, 10), -- Assuming term_length is in years. Not sure what to put for max terms because senator has no limit.
(6, 'Iowa US Senator 2', 6, 10); -- Assuming term_length is in years. Not sure what to put for max terms because senator has no limit.





-- Table: Precincts
--CREATE TABLE Precincts (
--    precinct_id varchar(20) NOT NULL,
--    precinct_name varchar(25) NOT NULL,
--    state char(2) NOT NULL,
--    zip_code int NOT NULL,
--    CONSTRAINT Precincts_pk PRIMARY KEY (precinct_id)
--);
INSERT INTO Precincts (precinct_id, precinct_name, state, zip_code)
VALUES (1, 'Iowa City - 1', 'IA', 52240),
(2, 'Iowa City - 2', 'IA', 52242),
(3, 'Coralville - 1', 'IA', 52241),
(4, 'Cedar Rapids - 1', 'IA', 52402),
(5, 'Cedar Falls - 1', 'IA', 50614);





-- Table: Races
--CREATE TABLE Races (
--    race_id int NOT NULL,
--    num_candidates int NOT NULL,
--    election_id int NOT NULL,
--    office_id int NOT NULL,
--    CONSTRAINT Races_pk PRIMARY KEY (race_id)
--);
INSERT INTO Races (race_id, num_candidates, election_id, office_id)
VALUES (1, 2, 1, 1), -- Iowa Governor
(2, 3, 2, 2); -- US President