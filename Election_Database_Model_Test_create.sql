-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2016-11-16 19:52:07.048

-- tables
-- Table: Ballot
CREATE TABLE Ballot (
    ballot_id int NOT NULL,
    precinct_id varchar(20) NOT NULL,
    CONSTRAINT Ballot_pk PRIMARY KEY (ballot_id)
);

-- Table: BallotCandidate
CREATE TABLE BallotCandidate (
    ballot_candidate_id int NOT NULL,
    candidate_id int NOT NULL,
    ballot_id int NOT NULL,
    CONSTRAINT BallotCandidate_pk PRIMARY KEY (ballot_candidate_id)
);

-- Table: Candidates
CREATE TABLE Candidates (
    candidate_id int NOT NULL,
    candidate_name varchar(255) NOT NULL,
    candidate_state char(2) NOT NULL,
    candidate_bio varchar(1000) NOT NULL,
    office_id int NOT NULL,
    CONSTRAINT Candidates_pk PRIMARY KEY (candidate_id)
);

-- Table: Election
CREATE TABLE Election (
    election_id int NOT NULL,
    date date NOT NULL,
    active boolean NOT NULL,
    completed boolean NOT NULL,
    CONSTRAINT Election_pk PRIMARY KEY (election_id)
);

-- Table: Offices
CREATE TABLE Offices (
    office_id int NOT NULL,
    title varchar(255) NOT NULL,
    term_length int NOT NULL,
    max_terms int NOT NULL,
    CONSTRAINT Offices_pk PRIMARY KEY (office_id)
);

-- Table: Precincts
CREATE TABLE Precincts (
    precinct_id varchar(20) NOT NULL,
    precinct_name varchar(25) NOT NULL,
    state char(2) NOT NULL,
    zip_code int NOT NULL,
    CONSTRAINT Precincts_pk PRIMARY KEY (precinct_id)
);

-- Table: RaceBallot
CREATE TABLE RaceBallot (
    race_ballot_id int NOT NULL,
    ballot_id int NOT NULL,
    race_id int NOT NULL,
    CONSTRAINT RaceBallot_pk PRIMARY KEY (race_ballot_id)
);

-- Table: RaceCandidate
CREATE TABLE RaceCandidate (
    candidate_id int NOT NULL,
    race_id int NOT NULL,
    race_cand_id int NOT NULL,
    CONSTRAINT RaceCandidate_pk PRIMARY KEY (race_cand_id)
);

-- Table: RacePrecincts
CREATE TABLE RacePrecincts (
    race_prec_id int NOT NULL,
    race_id int NOT NULL,
    precinct_id varchar(20) NOT NULL,
    CONSTRAINT RacePrecincts_pk PRIMARY KEY (race_prec_id)
);

-- Table: Races
CREATE TABLE Races (
    race_id int NOT NULL,
    num_candidates int NOT NULL,
    election_id int NOT NULL,
    office_id int NOT NULL,
    CONSTRAINT Races_pk PRIMARY KEY (race_id)
);

-- Table: UserVote
CREATE TABLE UserVote (
    vote_id int NOT NULL,
    users_id int NOT NULL,
    ballot_id int NOT NULL,
    CONSTRAINT UserVote_pk PRIMARY KEY (vote_id)
);

-- Table: Users
CREATE TABLE Users (
    id int NOT NULL,
    full_name varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    password varchar(20) NOT NULL,
    license_nmbr varchar(25),
    address varchar(255) NOT NULL,
    zipcode int NOT NULL,
    permissions int NOT NULL,
    dob date NOT NULL,
    state char(2) NOT NULL,
    gender char(1),
    party_aff char(3),
    ssn int,
    passport_nmbr int,
    CONSTRAINT Users_pk PRIMARY KEY (id)
);

-- foreign keys
-- Reference: BallotCandidate_Ballot (table: BallotCandidate)
ALTER TABLE BallotCandidate ADD CONSTRAINT BallotCandidate_Ballot FOREIGN KEY BallotCandidate_Ballot (ballot_id)
    REFERENCES Ballot (ballot_id);

-- Reference: BallotCandidate_Candidates (table: BallotCandidate)
ALTER TABLE BallotCandidate ADD CONSTRAINT BallotCandidate_Candidates FOREIGN KEY BallotCandidate_Candidates (candidate_id)
    REFERENCES Candidates (candidate_id);

-- Reference: Ballot_Precincts (table: Ballot)
ALTER TABLE Ballot ADD CONSTRAINT Ballot_Precincts FOREIGN KEY Ballot_Precincts (precinct_id)
    REFERENCES Precincts (precinct_id);

-- Reference: Candidates_Offices (table: Candidates)
ALTER TABLE Candidates ADD CONSTRAINT Candidates_Offices FOREIGN KEY Candidates_Offices (office_id)
    REFERENCES Offices (office_id);

-- Reference: ElectionCandidate_Candidates (table: RaceCandidate)
ALTER TABLE RaceCandidate ADD CONSTRAINT ElectionCandidate_Candidates FOREIGN KEY ElectionCandidate_Candidates (candidate_id)
    REFERENCES Candidates (candidate_id);

-- Reference: ElectionCandidate_Election (table: RaceCandidate)
ALTER TABLE RaceCandidate ADD CONSTRAINT ElectionCandidate_Election FOREIGN KEY ElectionCandidate_Election (race_id)
    REFERENCES Races (race_id);

-- Reference: ElectionPrecincts_Election (table: RacePrecincts)
ALTER TABLE RacePrecincts ADD CONSTRAINT ElectionPrecincts_Election FOREIGN KEY ElectionPrecincts_Election (race_id)
    REFERENCES Races (race_id);

-- Reference: ElectionPrecincts_Precincts (table: RacePrecincts)
ALTER TABLE RacePrecincts ADD CONSTRAINT ElectionPrecincts_Precincts FOREIGN KEY ElectionPrecincts_Precincts (precinct_id)
    REFERENCES Precincts (precinct_id);

-- Reference: RaceBallot_Ballot (table: RaceBallot)
ALTER TABLE RaceBallot ADD CONSTRAINT RaceBallot_Ballot FOREIGN KEY RaceBallot_Ballot (ballot_id)
    REFERENCES Ballot (ballot_id);

-- Reference: RaceBallot_Races (table: RaceBallot)
ALTER TABLE RaceBallot ADD CONSTRAINT RaceBallot_Races FOREIGN KEY RaceBallot_Races (race_id)
    REFERENCES Races (race_id);

-- Reference: Races_Election (table: Races)
ALTER TABLE Races ADD CONSTRAINT Races_Election FOREIGN KEY Races_Election (election_id)
    REFERENCES Election (election_id);

-- Reference: Races_Offices (table: Races)
ALTER TABLE Races ADD CONSTRAINT Races_Offices FOREIGN KEY Races_Offices (office_id)
    REFERENCES Offices (office_id);

-- Reference: UserVote_Ballot (table: UserVote)
ALTER TABLE UserVote ADD CONSTRAINT UserVote_Ballot FOREIGN KEY UserVote_Ballot (ballot_id)
    REFERENCES Ballot (ballot_id);

-- Reference: UserVote_Users (table: UserVote)
ALTER TABLE UserVote ADD CONSTRAINT UserVote_Users FOREIGN KEY UserVote_Users (users_id)
    REFERENCES Users (id);

-- End of file.
