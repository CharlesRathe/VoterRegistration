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
VALUES (1, 'John Doe', 'johndoe@gmail.com', 'asdf123', '1234567890', '123 Long Road, IA City, IA', 52240, 1, '1990-07-04', 'IA', 'M', 'DEM', 123456789, 123456789),
(2, 'Jane Doe', 'janedoe@gmail.com', 'asdf123', '3141592653', '123 Long Road, IA City, IA', 52240, 1, '1989-08-14', 'IA', 'F', 'DEM', 222457601, 887949931),
(3, 'Max Test', 'maxtest@gmail.com', 'asdf123', '8675309123', '456 Short Boulevard, Coralville, IA', 52241, 3, '1970-03-22', 'IA', 'M', 'GRE', 948631374, 996414321),
(4, 'Sarah Example', 'sarahexample@gmail.com', 'asdf123', '9876543210', '23 Nice Drive, Cedar Rapids, IA', 52402, 2, '1992-10-13', 'IA', 'F', 'LIB', 758493028, 990786543),
(5, 'This Isreal', 'thisisreal@gmail.com', 'asdf123', '1231231231', '12345 Main Street, Cedar Falls, IA', 50614, 1, '1988-06-09', 'IA', 'M', 'GOP', 857416952, 234518765),
(6, 'Eric Wells', 'ewells0@devhub.com', '16rfxNny', '9465636156', '58249 Center Center', 76178, 1, '1995-12-03', 'TX', 'M', 'GRE', 634636340, 630363045),
(7, 'Judith Stevens', 'jstevens1@bloglines.com', 'MP6wiO1ZnhuO', '5119860430', '89831 Loeprich Center', 68583, 1, '1974-09-25', 'NE', 'F', 'LIB', 984864591, 246176552),
(8, 'Robin Grant', 'rgrant2@spiegel.de', 'gSjiclsp6', '1092464063', '9 Banding Crossing', 77045, 1, '1981-12-02', 'TX', 'F', 'DEM', 438501953, 179677433),
(9, 'Teresa Stephens', 'tstephens3@slashdot.org', 'dsiwisv2', '4138373696', '3758 Talmadge Place', 88530, 1, '1972-11-13', 'TX', 'F', 'LIB', 866172918, 319661466),
(10, 'Lois Turner', 'lturner4@usgs.gov', 'BNg7ARVM9', '7018246193', '69 Homewood Street', 77305, 1, '1988-07-13', 'TX', 'F', 'GRE', 106614228, 930044339),
(11, 'Ashley Bell', 'abell5@wikimedia.org', 'PTBSEi', '3556507126', '86785 Gerald Street', 31136, 1, '1994-09-06', 'GA', 'F', 'GOP', 157716948, 420399658),
(12, 'Rebecca Freeman', 'rfreeman6@vinaora.com', 'cPW83pBovVO7', '1310337078', '91 Glendale Center', 53277, 1, '1976-06-29', 'WI', 'F', 'GRE', 201376670, 904315308),
(13, 'Joyce Elliott', 'jelliott7@seattletimes.com', '8KXOOUITrF8', '3807149777', '7 Basil Point', 80249, 1, '1983-02-14', 'CO', 'F', 'GOP', 807796841, 612657687),
(14, 'Nicole Hunter', 'nhunter8@vk.com', 'eehJ20g', '3165815942', '3329 Mayfield Parkway', 66215, 1, '1994-10-23', 'KS', 'F', 'GOP', 152285367, 161308793),
(15, 'Joyce Garrett', 'jgarrett9@hostgator.com', 'XDbQepYR', '1237119280', '506 Sunfield Trail', 72222, 1, '1987-05-26', 'AR', 'F', 'LIB', 464676252, 275761135),
(16, 'Anna Armstrong', 'aarmstronga@amazon.de', 'S9eimcEb', '1803872878', '429 Farmco Street', 06183, 1, '1966-01-23', 'CT', 'F', 'DEM', 731465735, 113196636),
(17, 'Nicole Jenkins', 'njenkinsb@whitehouse.gov', 'yUd5LNfpLdF9', '4761363405', '97 Knutson Place', 50305, 1, '1971-02-17', 'IA', 'F', 'LIB', 726082381, 176039442),
(18, 'Roy Jenkins', 'rjenkinsc@apple.com', 'ETlpyZJC3GK', '8327752716', '1116 Russell Avenue', 55172, 1, '1967-06-22', 'MN', 'M', 'GOP', 721282828, 629054653),
(19, 'Walter Bradley', 'wbradleyd@tmall.com', 'mT4a2E23uYK1', '4737406931', '4 Pennsylvania Point', 27621, 1, '1965-08-26', 'NC', 'M', 'LIB', 700319265, 442280223),
(20, 'Peter Martin', 'pmartine@jigsy.com', 'U81v1WDZBR', '4309441807', '815 Tennyson Circle', 25326, 1, '1991-04-12', 'WV', 'M', 'DEM', 926496442, 546721087),
(21, 'Frank Sanchez', 'fsanchezf@topsy.com', 'BZDQCJ', '2994670419', '7488 Sherman Junction', 01605, 1, '1988-05-08', 'MA', 'M', 'GRE', 371514653, 982135692),
(22, 'Anna Torres', 'atorresg@deliciousdays.com', 'qmHYefvz7Cc3', '4335962265', '7 Becker Road', 80935, 1, '1987-10-23', 'CO', 'F', 'GOP', 896818896, 196060918),
(23, 'Fred Mcdonald', 'fmcdonaldh@dailymotion.com', '89ur1bblfQ', '9727170639', '9358 Dottie Junction', 85754, 1, '1982-03-14', 'AZ', 'M', 'GOP', 769444695, 610263739),
(24, 'Jessica Simpson', 'jsimpsoni@noaa.gov', 'ZawTvtTAn', '9820357535', '37 Knutson Hill', 94616, 1, '1968-06-10', 'CA', 'F', 'LIB', 673468369, 139526520),
(25, 'Shirley Ray', 'srayj@earthlink.net', 'QnJ7LTxJ3iU', '1368813108', '0514 Bartillon Pass', 33633, 1, '1981-02-11', 'FL', 'F', 'LIB', 397358814, 217994622),
(26, 'Karen Bishop', 'kbishopk@spotify.com', 'y1xGkm', '3066265527', '508 Talmadge Trail', 34276, 1, '1982-06-20', 'FL', 'F', 'GOP', 529723585, 907522689),
(27, 'Judy Armstrong', 'jarmstrongl@dot.gov', 'tKEGaDluX', '4259671936', '4 Westridge Trail', 01605, 1, '1979-02-08', 'MA', 'F', 'GOP', 499619570, 830600731),
(28, 'Carolyn Garza', 'cgarzam@pinterest.com', 'YveiDtGw', '2463462905', '223 Dexter Alley', 93106, 1, '1981-08-11', 'CA', 'F', 'GRE', 696300959, 373597110),
(29, 'Denise Barnes', 'dbarnesn@themeforest.net', 'j9acixL6is', '4145999565', '79 Oriole Circle', 33153, 1, '1985-01-27', 'FL', 'F', 'GOP', 542771177, 398539338),
(30, 'John Gutierrez', 'jgutierrezo@hp.com', 'jiyqBs', '5606467230', '19 Prairie Rose Place', 80209, 1, '1972-05-08', 'CO', 'M', 'DEM', 261633783, 567363025),
(31, 'Julia Day', 'jdayp@youtube.com', 'm5c5o7kZhYN', '2292365882', '40 Cherokee Point', 79410, 1, '1971-07-26', 'TX', 'F', 'GRE', 317956531, 698777749),
(32, 'Fred Watkins', 'fwatkinsq@opensource.org', 'GXJCsXwr3', '8678129670', '9 Mendota Terrace', 60609, 1, '1969-04-08', 'IL', 'M', 'DEM', 400386977, 180686585),
(33, 'Deborah Johnston', 'djohnstonr@mozilla.com', 'k6rOPyW9Kgha', '9876683285', '3 Nevada Trail', 08695, 1, '1987-08-24', 'NJ', 'F', 'GRE', 873144694, 336609536),
(34, 'Lillian Gutierrez', 'lgutierrezs@mit.edu', '07oQSzEtcS', '9305026281', '35 Oak Road', 64144, 1, '1966-06-23', 'MO', 'F', 'GOP', 145229685, 411344727),
(35, 'Jane Fowler', 'jfowlert@archive.org', '9gBmEKU', '3918039126', '2228 Oxford Parkway', 79955, 1, '1966-12-30', 'TX', 'F', 'LIB', 647081553, 214869927),
(36, 'Rachel Rogers', 'rrogersu@google.ru', 'gOteOVG42', '5795046680', '168 Beilfuss Point', 70154, 1, '1975-05-13', 'LA', 'F', 'GOP', 199409211, 153336392),
(37, 'Michael Wallace', 'mwallacev@who.int', 'ihXR2ZovD2Gd', '5434314027', '46 Grover Terrace', 85099, 1, '1977-09-19', 'AZ', 'M', 'GRE', 275460816, 999873878),
(38, 'Scott Duncan', 'sduncanw@diigo.com', '4qftFDo', '3237816789', '707 Washington Drive', 19172, 1, '1983-04-18', 'PA', 'M', 'GOP', 288479968, 683455693),
(39, 'Linda Tucker', 'ltuckerx@imageshack.us', 'ajJHJ0kdo2ap', '3620912948', '77374 Loeprich Circle', 33705, 1, '1968-11-16', 'FL', 'F', 'GRE', 536401117, 197494972),
(40, 'Judith Kim', 'jkimy@nhs.uk', 'oQ6uLnDET', '2669637062', '1 Elka Road', 80255, 1, '1966-05-31', 'CO', 'F', 'LIB', 984713848, 495255443),
(41, 'Melissa Knight', 'mknightz@twitpic.com', 'xpnsordhG', '4379007317', '772 Anthes Crossing', 80905, 1, '1989-07-25', 'CO', 'F', 'LIB', 677031753, 808625344),
(42, 'Billy Henry', 'bhenry10@sakura.ne.jp', 'bw1rusM', '3173787492', '89 Lunder Center', 24029, 1, '1980-10-04', 'VA', 'M', 'LIB', 375455052, 337776253),
(43, 'Jason Austin', 'jaustin11@google.com.br', 'IrHEYOn', '1231005333', '8251 Jay Park', 74116, 1, '1990-08-06', 'OK', 'M', 'LIB', 593514693, 508838760),
(44, 'Alice Cox', 'acox12@adobe.com', 'FOMF2D', '5794984493', '8 6th Street', 48912, 1, '1986-01-16', 'MI', 'F', 'GRE', 765265862, 164175322),
(45, 'George Mason', 'gmason13@alexa.com', 'R8Bfo0C0K3I', '8906932003', '6 IA Crossing', 24009, 1, '1992-06-05', 'VA', 'M', 'GOP', 272773408, 925041433),
(46, 'Bruce Fuller', 'bfuller14@dailymotion.com', '1m8L0d', '2268076048', '5073 Sullivan Avenue', 45505, 1, '1966-07-28', 'OH', 'M', 'GRE', 441057726, 316171142),
(47, 'Peter Oliver', 'poliver15@ucla.edu', 'StjYUGAvYcq4', '1027008703', '16510 Victoria Alley', 79950, 1, '1977-09-17', 'TX', 'M', 'GOP', 933495396, 155933507),
(48, 'Joe Adams', 'jadams16@ca.gov', 'lKNk3ajc0', '3670111221', '3 Springview Circle', 95298, 1, '1973-11-26', 'CA', 'M', 'GOP', 568903162, 269414929),
(49, 'Susan Willis', 'swillis17@tinypic.com', '9zfbZv9m', '4977265469', '023 Loomis Court', 61825, 1, '1965-11-04', 'IL', 'F', 'GOP', 948869844, 491847466),
(50, 'Richard Fields', 'rfields18@dedecms.com', 'sJetVJ58ZiM', '7658710012', '46 Sage Plaza', 47134, 1, '1987-05-21', 'IN', 'M', 'DEM', 724205469, 465612154),
(51, 'Ashley Evans', 'aevans19@wired.com', 'qnq3co', '9921042769', '18 Emmet Circle', 99790, 1, '1973-02-01', 'AK', 'F', 'DEM', 486834822, 740346546),
(52, 'Rebecca Reyes', 'rreyes1a@feedburner.com', 'JDf3ZfJs', '2635994850', '36 Rockefeller Plaza', 31190, 1, '1994-03-11', 'GA', 'F', 'GOP', 350037823, 683720920),
(53, 'Amanda Gutierrez', 'agutierrez1b@tinyurl.com', 'vEj6wINL', '4512146466', '9 Delaware Lane', 84093, 1, '1992-03-28', 'UT', 'F', 'GOP', 439146754, 708660070),
(54, 'Deborah Hicks', 'dhicks1c@mail.ru', 'sgvdq6nDTd', '1758512573', '34 Morningstar Court', 83705, 1, '1976-07-28', 'ID', 'F', 'GRE', 853855358, 976260248),
(55, 'Karen Hayes', 'khayes1d@cnn.com', 'KY9Y9Pt1sm5a', '2238897973', '68 Continental Drive', 89706, 1, '1965-04-17', 'NV', 'F', 'LIB', 458611741, 644988272),
(56, 'Harry Stephens', 'hstephens1e@marketwatch.com', 'VmN8GmDUw3', '4238515565', '124 Harper Avenue', 60619, 1, '1989-02-13', 'IL', 'M', 'GOP', 120017576, 479241970),
(57, 'Willie Powell', 'wpowell1f@xing.com', 'XyYDyeNuqIwO', '3054257291', '39 Moose Terrace', 38197, 1, '1992-08-19', 'TN', 'M', 'GOP', 578954834, 751913696),
(58, 'Roger Wilson', 'rwilson1g@foxnews.com', 'IvZSqkjax', '8829416855', '2300 Monument Pass', 29225, 1, '1983-06-10', 'SC', 'M', 'DEM', 152225439, 859974991),
(59, 'Sandra Miller', 'smiller1h@a8.net', '1EHqkznTId', '4005044776', '0622 Green Ridge Avenue', 33028, 1, '1973-10-09', 'FL', 'F', 'GOP', 369696410, 420199834),
(60, 'Kevin Mills', 'kmills1i@simplemachines.org', 'W61LYXmF6sdQ', '2279565271', '68786 Kropf Drive', 39404, 1, '1977-05-18', 'MS', 'M', 'GRE', 807648378, 114191705),
(61, 'Janice Butler', 'jbutler1j@marriott.com', 'BGWtRsQtcCf', '9321252192', '5 American Ash Hill', 78783, 1, '1978-03-20', 'TX', 'F', 'DEM', 655111615, 254450411),
(62, 'Roy Reed', 'rreed1k@dion.ne.jp', 'oAxIxeLR92g', '3281612636', '09 Doe Crossing Court', 80235, 1, '1994-03-23', 'CO', 'M', 'GOP', 273065314, 144768743),
(63, 'Rachel Carpenter', 'rcarpenter1l@auda.org.au', 'lwyeSu2szq', '4463262898', '9 Old Gate Point', 35487, 1, '1987-12-31', 'AL', 'F', 'DEM', 433123792, 256174114),
(64, 'Andrew Ross', 'aross1m@google.es', 'wbtYCBemY', '5228294516', '27 Lighthouse Bay Drive', 27658, 1, '1982-01-08', 'NC', 'M', 'GRE', 175148260, 211799712),
(65, 'Janet Gilbert', 'jgilbert1n@dot.gov', 'WsRs3lbMyI', '4487790526', '6642 Sycamore Avenue', 85383, 1, '1986-03-17', 'AZ', 'F', 'GOP', 319704303, 240074933),
(66, 'Brenda Reynolds', 'breynolds1o@geocities.jp', 'QIOexosSM', '8273341205', '6 Sullivan Hill', 73071, 1, '1971-07-09', 'OK', 'F', 'LIB', 556993030, 365778961),
(67, 'Tammy Harvey', 'tharvey1p@marketwatch.com', 'W4j9pR', '9470867880', '42651 Scofield Trail', 71208, 1, '1983-10-14', 'LA', 'F', 'LIB', 640328170, 115560741),
(68, 'Sarah Garcia', 'sgarcia1q@tumblr.com', 'W0ytfdE20aw', '5508359163', '139 Namekagon Plaza', 95852, 1, '1969-04-29', 'CA', 'F', 'LIB', 837696847, 780716757),
(69, 'Sarah Owens', 'sowens1r@npr.org', 'YmUtHfvj', '4794400980', '6693 Thompson Point', 23220, 1, '1971-01-15', 'VA', 'F', 'LIB', 916307176, 512904570),
(70, 'Jeremy Fowler', 'jfowler1s@wunderground.com', 'MRtTtFQ9bPmb', '2001295379', '570 Bashford Road', 88546, 1, '1989-06-09', 'TX', 'M', 'LIB', 493197690, 130925079),
(71, 'Mark Morgan', 'mmorgan1t@indiatimes.com', 'WRwWBgaj1l3', '2947687649', '68 Namekagon Terrace', 90045, 1, '1986-05-21', 'CA', 'M', 'GOP', 779788410, 777790060),
(72, 'Diana Patterson', 'dpatterson1u@sakura.ne.jp', '9X23JZ6Z', '1771245574', '25116 Farwell Park', 66215, 1, '1965-07-21', 'KS', 'F', 'GRE', 558600185, 778805046),
(73, 'Sara Hicks', 'shicks1v@joomla.org', 'CrYRWxqxX', '6901137332', '8623 Logan Park', 70820, 1, '1986-12-29', 'LA', 'F', 'LIB', 826461663, 254105526),
(74, 'Scott Ward', 'sward1w@storify.com', 'GS5QTZf', '5661116894', '83662 Westerfield Pass', 60624, 1, '1983-05-06', 'IL', 'M', 'GRE', 911780273, 985557053),
(75, 'Judith Burke', 'jburke1x@usda.gov', 'byewECo', '5842825795', '8757 Havey Point', 97286, 1, '1990-10-10', 'OR', 'F', 'GOP', 190922980, 407384244),
(76, 'Judith Porter', 'jporter1y@ucoz.ru', 's6LSacK4nd', '6603977214', '23 Holmberg Pass', 76115, 1, '1983-09-30', 'TX', 'F', 'LIB', 542790817, 458454264),
(77, 'Kathy Coleman', 'kcoleman1z@jigsy.com', 'VQ7b7rZR8pj', '6575473627', '90 Tennyson Drive', 40510, 1, '1970-08-07', 'KY', 'F', 'LIB', 559508863, 420414495),
(78, 'Martin Anderson', 'manderson20@youtu.be', 'lr464btsnwJk', '4170258173', '17 Pennsylvania Point', 53710, 1, '1981-09-29', 'WI', 'M', 'LIB', 148820950, 681337698),
(79, 'Wayne Murray', 'wmurray21@ihg.com', 'xJPLKJ', '8716455400', '22396 Bartelt Trail', 72905, 1, '1966-09-09', 'AR', 'M', 'GOP', 651646380, 688058354),
(80, 'Shirley Berry', 'sberry22@samsung.com', 'qtJzGpqfmNF', '8423533433', '903 Mccormick Junction', 19109, 1, '1971-08-31', 'PA', 'F', 'DEM', 183821867, 567121496),
(81, 'Thomas Burns', 'tburns23@a8.net', 'UcxVRcsU1', '3195498837', '941 Northridge Court', 65211, 1, '1975-11-21', 'MO', 'M', 'GRE', 451934841, 654152467),
(82, 'Carl Mccoy', 'cmccoy24@goodreads.com', 'VtNOMxtXXuC', '8100026489', '1 Vahlen Hill', 72199, 1, '1981-01-22', 'AR', 'M', 'GOP', 517895065, 793455160),
(83, 'Thomas Taylor', 'ttaylor25@cornell.edu', 'QaxcG9PSlURQ', '6346790057', '640 UT Circle', 33075, 1, '1980-03-27', 'FL', 'M', 'DEM', 323062290, 772715658),
(84, 'Carlos Torres', 'ctorres26@sina.com.cn', 'imnIhW3D9HN3', '5147671982', '87512 Fallview Hill', 48670, 1, '1977-07-05', 'MI', 'M', 'LIB', 291318427, 641189129),
(85, 'Lillian Cole', 'lcole27@ucoz.com', 'kslvcvBJq', '4296791485', '3870 Thompson Junction', 92619, 1, '1966-12-14', 'CA', 'F', 'DEM', 376452497, 651988028),
(86, 'Carol Carpenter', 'ccarpenter28@arstechnica.com', 'qGMp4wCvjH4', '9190476945', '2 Myrtle Court', 66112, 1, '1972-06-04', 'KS', 'F', 'LIB', 671059570, 877903111),
(87, 'Jane Duncan', 'jduncan29@addtoany.com', '9h1q64q', '4689867668', '0327 Sherman Pass', 90810, 1, '1988-09-18', 'CA', 'F', 'LIB', 118318084, 797477112),
(88, 'Irene Schmidt', 'ischmidt2a@walmart.com', 'y3HW2Y6k0eJr', '2796252228', '8747 Bashford Place', 46216, 1, '1988-05-06', 'IN', 'F', 'GOP', 789291198, 290345282),
(89, 'Brian Hart', 'bhart2b@github.io', 'vL9j82w2', '4287559833', '4 Bashford Lane', 65211, 1, '1990-07-02', 'MO', 'M', 'LIB', 186921449, 212074257),
(90, 'Louis Willis', 'lwillis2c@sina.com.cn', 'U8zFcB', '6078939247', '16 Dawn Junction', 06152, 1, '1966-11-20', 'CT', 'M', 'GRE', 269876140, 542284827),
(91, 'Amanda Cook', 'acook2d@shareasale.com', 'U6Q14vJ', '4662821756', '73661 Mallard Street', 78749, 1, '1994-06-27', 'TX', 'F', 'GRE', 416314518, 610109089),
(92, 'Judith Thompson', 'jthompson2e@amazon.com', 'fSfNLJy', '7367247129', '439 Briar Crest Hill', 92640, 1, '1991-04-17', 'CA', 'F', 'GOP', 311001084, 680676021),
(93, 'Debra Peters', 'dpeters2f@squarespace.com', 'nrgMzpnrT5', '6160870741', '9708 Laurel Lane', 11225, 1, '1979-11-14', 'NY', 'F', 'GRE', 370752485, 683300027),
(94, 'Nancy Hansen', 'nhansen2g@youku.com', 'HHF0ExvzBj', '5145389436', '9 Express Road', 99512, 1, '1967-08-28', 'AK', 'F', 'GRE', 917640001, 450798944),
(95, 'Melissa Perkins', 'mperkins2h@yahoo.co.jp', 'qDTlU1e5', '6625700183', '2 Nobel Pass', 80161, 1, '1968-04-07', 'CO', 'F', 'LIB', 423813413, 182664537),
(96, 'Amy Chapman', 'achapman2i@meetup.com', 'pgtHH8AO82Il', '1221897218', '0 Sutteridge Crossing', 27150, 1, '1981-08-13', 'NC', 'F', 'LIB', 338206268, 500176877),
(97, 'Wayne Nguyen', 'wnguyen2j@xrea.com', 'eNc2v2z', '1468744824', '388 Brown Hill', 76016, 1, '1966-04-16', 'TX', 'M', 'LIB', 359794530, 998462039),
(98, 'William Carroll', 'wcarroll2k@abc.net.au', 'Pcp1lNC5e2rx', '3575943376', '71953 Stang Road', 55572, 1, '1981-06-13', 'MN', 'M', 'GRE', 485973473, 102942369),
(99, 'Scott Nguyen', 'snguyen2l@wikimedia.org', 'RJTqgOstQep', '9116237676', '3 Bluejay Junction', 76096, 1, '1969-10-07', 'TX', 'M', 'GOP', 106137458, 158500039),
(100, 'Ruby Bishop', 'rbishop2m@woothemes.com', 'dcqkjK6rsMAa', '9404769750', '38725 Sullivan Center', 40215, 1, '1972-08-03', 'KY', 'F', 'GRE', 321251345, 890821345);





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
(5, 'Jill Stein', 'MA', 'Jill is a Green Party Member running for President of the United States.', 2),
(6, 'Monica Vernon', 'IA', 'Monica is a Democrat running for US Representative.', 3),
(7, 'Rod Blum', 'IA', 'Rod is a Republican running for US Representative.', 3),
(8, 'David Loebsack', 'IA', 'David is a Democrat running for US Representative.', 4),
(9, 'Christopher Peters', 'IA', 'Christopher is a Republican running for US Representative.', 4),
(10, 'Bruce Braley', 'IA', 'Bruce is a Democrat running for US Senator.', 5),
(11, 'Joni Ernst', 'IA', 'Joni is a Republican running for US Senator.', 5),
(12, 'Patty Judge', 'IA', 'Patty is a Democrat running for US Senator.', 6),
(13, 'Charles Grassley', 'IA', 'Charles is a Republican running for US Senator.', 6),
(14, 'Barack Obama', 'IA', 'Barack is a Democrat running for President of the United States.', 2),
(15, 'John McCain', 'AZ', 'John is a Republican running for President of the United States.', 2),
(16, 'Mitt Romney', 'MA', 'Mitt is a Republican running for President of the United States.', 2),
(17, 'Chet Culver', 'IA', 'Chet is a Democrat running for Iowa Governor.', 1);







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
(6, '2022-11-08', TRUE, FALSE), -- Iowa US Senator 2
(7,'2008-11-04', FALSE, TRUE), -- Past Presidential Election
(8,'2012-11-06', FALSE, TRUE), -- Past Presidential Election
(9,'2014-11-04', FALSE, TRUE), -- Past Governor Election
(10,'2024-11-05', FALSE, FALSE), -- Future Presidential Election
(11,'2026-11-03', FALSE, FALSE), -- Future Senator 1 Election
(12,'2028-11-07', FALSE, FALSE), -- Future Senator 2 Election
(13,'2024-11-05', FALSE, FALSE); -- Future Governor Election





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
(5, 'Cedar Falls - 1', 'IA', 50614),
(6, 'Fort Worth - 1', 'TX', 76178),
(7, 'Lincoln - 1', 'NE', 68583),
(8, 'Houston - 1', 'TX', 77045),
(9, 'El Paso - 1', 'TX', 88530),
(10, 'Conroe - 1', 'TX', 77305),
(11, 'Atlanta - 1', 'GA', 31136),
(12, 'Milwaukee - 1', 'WI', 53277),
(13, 'Denver - 1', 'CO', 80249),
(14, 'Little Rock - 1', 'AR', 72222),
(15, 'Hartford - 1', 'CT', 6183), 
(16, 'Des Moines', 'IA', 50305),
(17, 'Raleigh - 1', 'NC', 27621),
(18, 'Charleston - 1', 'WV', 25326),
(19, 'Worcester - 1', 'MA', 1605), 
(20, 'Colorado Springs - 1', 'CO', 80935),
(21, 'Tucson - 1', 'AZ', 85754),
(22, 'Oakland - 1', 'CA', 94616),
(23, 'Tampa - 1', 'FL', 33633),
(24, 'Sarasota - 1', 'FL', 34276),
(25, 'Santa Barbara - 1', 'CA', 93106),
(26, 'Miami - 1', 'FL', 33153),
(27, 'Denver - 2', 'CO', 80209),
(28, 'Lubbock - 1', 'TX', 79410),
(29, 'Chicago - 1', 'IL', 60609),
(30, 'Trenton - 1', 'NJ', 8695), 
(31, 'Kansas City (MO) - 1', 'MO', 64144),
(32, 'El Paso - 2', 'TX', 79955),
(33, 'New Orleans - 1', 'LA', 70154),
(34, 'Phoenix - 1', 'AZ', 85099),
(35, 'Philadelphia - 1', 'PA', 19172),
(36, 'St. Petersburg - 1', 'FL', 33705),
(37, 'Denver - 3', 'CO', 80255),
(38, 'Colorado Springs - 2', 'CO', 80905),
(39, 'Roanoke - 1', 'VA', 24029),
(40, 'Tulsa - 1', 'OK', 74116),
(41, 'Lansing - 1', 'MI', 48912),
(42, 'Roanoke - 2', 'VA', 24009),
(43, 'Springfield (OH) - 1', 'OH', 45505),
(44, 'El Paso - 3', 'TX', 79950),
(45, 'Stockton - 1', 'CA', 95298),
(46, 'Champaign - 1', 'IL', 61825),
(47, 'Jeffersonville - 1', 'IN', 47134),
(48, 'Fairbanks - 1', 'AK', 99790),
(49, 'Atlanta - 2', 'GA', 31190),
(50, 'Sandy - 1', 'UT', 84093),
(51, 'Boise - 1', 'ID', 83705),
(52, 'Carson City - 1', 'NV', 89706),
(53, 'Chicago - 2', 'IL', 60619),
(54, 'Memphis - 1', 'TN', 38197),
(55, 'Columbia (SC) - 1', 'SC', 29225),
(56, 'Pembroke Pines - 1', 'FL', 33028),
(57, 'Hattiesburg - 1', 'MS', 39404),
(58, 'Austin - 1', 'TX', 78783),
(59, 'Denver - 4', 'CO', 80235),
(60, 'Tuscaloosa - 1', 'AL', 35487),
(61, 'Raleigh - 2', 'NC', 27658),
(62, 'Peoria (AZ) - 1', 'AZ', 85383),
(63, 'Norman - 1', 'OK', 73071),
(64, 'Monroe - 1', 'LA', 71208),
(65, 'Sacramento - 1', 'CA', 95852),
(66, 'Richmond - 1', 'VA', 23220),
(67, 'El Paso - 4', 'TX', 88546),
(68, 'Los Angeles - 1', 'CA', 90045),
(69, 'Lenexa - 1', 'KS', 66215),
(70, 'Baton Rouge - 1', 'LA', 70820),
(71, 'Chicago - 3', 'IL', 60624),
(72, 'Portland - 1', 'OR', 97286),
(73, 'Fort Worth - 2', 'TX', 76115),
(74, 'Lexington - 1', 'KY', 40510),
(75, 'Madison - 1', 'WI', 53710),
(76, 'Fort Smith - 1', 'AR', 72905),
(77, 'Philadelphia - 2', 'PA', 19109),
(78, 'Columbia (MO) - 1', 'MO', 65211),
(79, 'North Little Rock - 1', 'AR', 72199),
(80, 'Coral Springs - 1', 'FL', 33075),
(81, 'Midland - 1', 'MI', 48670),
(82, 'Irvine - 1', 'CA', 92619),
(83, 'Kansas City (KS) - 1', 'KS', 66112),
(84, 'Long Beach - 1', 'CA', 90810),
(85, 'Lawrence - 1', 'IN', 46216),
(86, 'Hartford - 2', 'CT', 6152), 
(87, 'Austin - 2', 'TX', 78749),
(88, 'Fullerton - 1', 'CA', 92640),
(89, 'Brooklyn - 1', 'NY', 11225),
(90, 'Anchorage - 1', 'AK', 99512),
(91, 'Littleton - 1', 'CO', 80161),
(92, 'Winston Salem - 1', 'NC', 27150),
(93, 'Arlington (TX) - 1', 'TX', 76016),
(94, 'Rockford (MN) - 1', 'MN', 55572),
(95, 'Arlington (TX) - 2', 'TX', 76096),
(96, 'Louisville - 1', 'KY', 40215);





-- Table: Races
--CREATE TABLE Races (
--    race_id int NOT NULL,
--    num_candidates int NOT NULL,
--    election_id int NOT NULL,
--    office_id int NOT NULL,
--    CONSTRAINT Races_pk PRIMARY KEY (race_id)
--);
INSERT INTO Races (race_id, num_candidates, election_id, office_id)
VALUES (1, 2, 7, 2), -- Past US President 1
(2, 2, 8, 2), -- Past US President 2
(3, 2, 9, 1), -- Past Iowa Governor
(4, 2, 1, 1), -- Current Iowa Governor
(5, 3, 2, 2), -- Current US President
(6, 2, 3, 3), -- Current Iowa US Representative 1
(7, 2, 4, 4), -- Current Iowa US Representative 2
(8, 2, 5, 5), -- Current Iowa US Senator 1
(9, 2, 6, 6), -- Current Iowa US Senator 2
(10, 2, 10, 2), -- Future US President
(11, 2, 11, 5), -- Future Iowa US Senator 1
(12, 2, 12, 6), -- Future Iowa US Senator 2
(13, 2, 13, 1); -- Future Iowa Governor





-- Table: RaceCandidate
--CREATE TABLE RaceCandidate (
--    candidate_id int NOT NULL,
--    race_id int NOT NULL,
--    race_cand_id int NOT NULL,
--    CONSTRAINT RaceCandidate_pk PRIMARY KEY (race_cand_id)
--);
INSERT INTO RaceCandidate (candidate_id, race_id, race_cand_id)
VALUES (14, 1, 1), -- Past President 1
(15, 1, 2),
(14, 2, 3), -- Past President 2
(16, 2, 4),
(2, 3, 5), -- Past Iowa Governor
(17, 3, 6),
(2, 4, 7), -- Current Iowa Governor
(17, 4, 8),
(3, 5, 9), -- Current US President
(4, 5, 10),
(5, 5, 11),
(6, 6, 12), -- Current Iowa US Representative 1
(7, 6, 13),
(8, 7, 14), -- Current Iowa US Representative 2
(9, 7, 15),
(10, 8, 16), -- Current Iowa US Senator 1
(11, 8, 17),
(12, 9, 18), -- Current Iowa US Senator 2
(13, 9, 19),
(3, 10, 20), -- Future US President
(4, 10, 21),
(10, 11, 22), -- Future Iowa US Senator 1
(11, 11, 23),
(12, 12, 24), -- Future Iowa US Senator 2
(13, 12, 25),
(2, 13, 26), -- Future Iowa Governor
(17, 13, 27);





-- Table: RacePrecincts
--CREATE TABLE RacePrecincts (
--    race_prec_id int NOT NULL,
--    race_id int NOT NULL,
--    precinct_id varchar(20) NOT NULL,
--    CONSTRAINT RacePrecincts_pk PRIMARY KEY (race_prec_id)
--);
INSERT INTO RacePrecincts (race_prec_id, race_id, precinct_id)
VALUES (1, 1, 1), -- Past US President 1
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 1, 9),
(10, 1, 10),
(11, 1, 11),
(12, 1, 12),
(13, 1, 13),
(14, 1, 14),
(15, 1, 15),
(16, 1, 16),
(17, 1, 17),
(18, 1, 18),
(19, 1, 19),
(20, 1, 20),
(21, 1, 21),
(22, 1, 22),
(23, 1, 23),
(24, 1, 24),
(25, 1, 25),
(26, 1, 26),
(27, 1, 27),
(28, 1, 28),
(29, 1, 29),
(30, 1, 30),
(31, 1, 31),
(32, 1, 32),
(33, 1, 33),
(34, 1, 34),
(35, 1, 35),
(36, 1, 36),
(37, 1, 37),
(38, 1, 38),
(39, 1, 39),
(40, 1, 40),
(41, 1, 41),
(42, 1, 42),
(43, 1, 43),
(44, 1, 44),
(45, 1, 45),
(46, 1, 46),
(47, 1, 47),
(48, 1, 48),
(49, 1, 49),
(50, 1, 50),
(51, 1, 51),
(52, 1, 52),
(53, 1, 53),
(54, 1, 54),
(55, 1, 55),
(56, 1, 56),
(57, 1, 57),
(58, 1, 58),
(59, 1, 59),
(60, 1, 60),
(61, 1, 61),
(62, 1, 62),
(63, 1, 63),
(64, 1, 64),
(65, 1, 65),
(66, 1, 66),
(67, 1, 67),
(68, 1, 68),
(69, 1, 69),
(70, 1, 70),
(71, 1, 71),
(72, 1, 72),
(73, 1, 73),
(74, 1, 74),
(75, 1, 75),
(76, 1, 76),
(77, 1, 77),
(78, 1, 78),
(79, 1, 79),
(80, 1, 80),
(81, 1, 81),
(82, 1, 82),
(83, 1, 83),
(84, 1, 84),
(85, 1, 85),
(86, 1, 86),
(87, 1, 87),
(88, 1, 88),
(89, 1, 89),
(90, 1, 90),
(91, 1, 91),
(92, 1, 92),
(93, 1, 93),
(94, 1, 94),
(95, 1, 95),
(96, 1, 96),

(97, 2, 1), -- Past US President 2
(98, 2, 2),
(99, 2, 3),
(100, 2, 4),
(101, 2, 5),
(102, 2, 6),
(103, 2, 7),
(104, 2, 8),
(105, 2, 9),
(106, 2, 10),
(107, 2, 11),
(108, 2, 12),
(109, 2, 13),
(110, 2, 14),
(111, 2, 15),
(112, 2, 16),
(113, 2, 17),
(114, 2, 18),
(115, 2, 19),
(116, 2, 20),
(117, 2, 21),
(118, 2, 22),
(119, 2, 23),
(120, 2, 24),
(121, 2, 25),
(122, 2, 26),
(123, 2, 27),
(124, 2, 28),
(125, 2, 29),
(126, 2, 30),
(127, 2, 31),
(128, 2, 32),
(129, 2, 33),
(130, 2, 34),
(131, 2, 35),
(132, 2, 36),
(133, 2, 37),
(134, 2, 38),
(135, 2, 39),
(136, 2, 40),
(137, 2, 41),
(138, 2, 42),
(139, 2, 43),
(140, 2, 44),
(141, 2, 45),
(142, 2, 46),
(143, 2, 47),
(144, 2, 48),
(145, 2, 49),
(146, 2, 50),
(147, 2, 51),
(148, 2, 52),
(149, 2, 53),
(150, 2, 54),
(151, 2, 55),
(152, 2, 56),
(153, 2, 57),
(154, 2, 58),
(155, 2, 59),
(156, 2, 60),
(157, 2, 61),
(158, 2, 62),
(159, 2, 63),
(160, 2, 64),
(161, 2, 65),
(162, 2, 66),
(163, 2, 67),
(164, 2, 68),
(165, 2, 69),
(166, 2, 70),
(167, 2, 71),
(168, 2, 72),
(169, 2, 73),
(170, 2, 74),
(171, 2, 75),
(172, 2, 76),
(173, 2, 77),
(174, 2, 78),
(175, 2, 79),
(176, 2, 80),
(177, 2, 81),
(178, 2, 82),
(179, 2, 83),
(180, 2, 84),
(181, 2, 85),
(182, 2, 86),
(183, 2, 87),
(184, 2, 88),
(185, 2, 89),
(186, 2, 90),
(187, 2, 91),
(188, 2, 92),
(189, 2, 93),
(190, 2, 94),
(191, 2, 95),
(192, 2, 96),

(193, 5, 1), -- Current US President
(194, 5, 2),
(195, 5, 3),
(196, 5, 4),
(197, 5, 5),
(198, 5, 6),
(199, 5, 7),
(200, 5, 8),
(201, 5, 9),
(202, 5, 10),
(203, 5, 11),
(204, 5, 12),
(205, 5, 13),
(206, 5, 14),
(207, 5, 15),
(208, 5, 16),
(209, 5, 17),
(210, 5, 18),
(211, 5, 19),
(212, 5, 20),
(213, 5, 21),
(214, 5, 22),
(215, 5, 23),
(216, 5, 24),
(217, 5, 25),
(218, 5, 26),
(219, 5, 27),
(220, 5, 28),
(221, 5, 29),
(222, 5, 30),
(223, 5, 31),
(224, 5, 32),
(225, 5, 33),
(226, 5, 34),
(227, 5, 35),
(228, 5, 36),
(229, 5, 37),
(230, 5, 38),
(231, 5, 39),
(232, 5, 40),
(233, 5, 41),
(234, 5, 42),
(235, 5, 43),
(236, 5, 44),
(237, 5, 45),
(238, 5, 46),
(239, 5, 47),
(240, 5, 48),
(241, 5, 49),
(242, 5, 50),
(243, 5, 51),
(244, 5, 52),
(245, 5, 53),
(246, 5, 54),
(247, 5, 55),
(248, 5, 56),
(249, 5, 57),
(250, 5, 58),
(251, 5, 59),
(252, 5, 60),
(253, 5, 61),
(254, 5, 62),
(255, 5, 63),
(256, 5, 64),
(257, 5, 65),
(258, 5, 66),
(259, 5, 67),
(260, 5, 68),
(261, 5, 69),
(262, 5, 70),
(263, 5, 71),
(264, 5, 72),
(265, 5, 73),
(266, 5, 74),
(267, 5, 75),
(268, 5, 76),
(269, 5, 77),
(270, 5, 78),
(271, 5, 79),
(272, 5, 80),
(273, 5, 81),
(274, 5, 82),
(275, 5, 83),
(276, 5, 84),
(277, 5, 85),
(278, 5, 86),
(279, 5, 87),
(280, 5, 88),
(281, 5, 89),
(282, 5, 90),
(283, 5, 91),
(284, 5, 92),
(285, 5, 93),
(286, 5, 94),
(287, 5, 95),
(288, 5, 96),

(289, 10, 1), -- Future US President
(290, 10, 2),
(291, 10, 3),
(292, 10, 4),
(293, 10, 5),
(294, 10, 6),
(295, 10, 7),
(296, 10, 8),
(297, 10, 9),
(298, 10, 10),
(299, 10, 11),
(300, 10, 12),
(301, 10, 13),
(302, 10, 14),
(303, 10, 15),
(304, 10, 16),
(305, 10, 17),
(306, 10, 18),
(307, 10, 19),
(308, 10, 20),
(309, 10, 21),
(310, 10, 22),
(311, 10, 23),
(312, 10, 24),
(313, 10, 25),
(314, 10, 26),
(315, 10, 27),
(316, 10, 28),
(317, 10, 29),
(318, 10, 30),
(319, 10, 31),
(320, 10, 32),
(321, 10, 33),
(322, 10, 34),
(323, 10, 35),
(324, 10, 36),
(325, 10, 37),
(326, 10, 38),
(327, 10, 39),
(328, 10, 40),
(329, 10, 41),
(330, 10, 42),
(331, 10, 43),
(332, 10, 44),
(333, 10, 45),
(334, 10, 46),
(335, 10, 47),
(336, 10, 48),
(337, 10, 49),
(338, 10, 50),
(339, 10, 51),
(340, 10, 52),
(341, 10, 53),
(342, 10, 54),
(343, 10, 55),
(344, 10, 56),
(345, 10, 57),
(346, 10, 58),
(347, 10, 59),
(348, 10, 60),
(349, 10, 61),
(350, 10, 62),
(351, 10, 63),
(352, 10, 64),
(353, 10, 65),
(354, 10, 66),
(355, 10, 67),
(356, 10, 68),
(357, 10, 69),
(358, 10, 70),
(359, 10, 71),
(360, 10, 72),
(361, 10, 73),
(362, 10, 74),
(363, 10, 75),
(364, 10, 76),
(365, 10, 77),
(366, 10, 78),
(367, 10, 79),
(368, 10, 80),
(369, 10, 81),
(370, 10, 82),
(371, 10, 83),
(372, 10, 84),
(373, 10, 85),
(374, 10, 86),
(375, 10, 87),
(376, 10, 88),
(377, 10, 89),
(378, 10, 90),
(379, 10, 91),
(380, 10, 92),
(381, 10, 93),
(382, 10, 94),
(383, 10, 95),
(384, 10, 96),

(385, 3, 1), -- Past Iowa Governor
(386, 3, 2),
(387, 3, 3),
(388, 3, 4),
(389, 3, 5),
(390, 3, 16),

(391, 4, 1), -- Current Iowa Governor
(392, 4, 2),
(393, 4, 3),
(394, 4, 4),
(395, 4, 5),
(396, 4, 16),

(397, 6, 4), -- Current Iowa US Representative 1
(398, 6, 5),

(399, 7, 1), -- Current Iowa US Representative 2
(400, 7, 2),
(401, 7, 3),

(402, 8, 1), -- Current Iowa US Senator 1
(403, 8, 2),
(404, 8, 3),
(405, 8, 4),
(406, 8, 5),
(407, 8, 16),

(408, 9, 1), -- Current Iowa US Senator 2
(409, 9, 2),
(410, 9, 3),
(411, 9, 4),
(412, 9, 5),
(413, 9, 16),

(414, 11, 1), -- Future Iowa US Senator 1
(415, 11, 2),
(416, 11, 3),
(417, 11, 4),
(418, 11, 5),
(419, 11, 16),

(420, 12, 1), -- Future Iowa US Senator 2
(421, 12, 2),
(422, 12, 3),
(423, 12, 4),
(424, 12, 5),
(425, 12, 16),

(426, 13, 1), -- Future Iowa Governor
(427, 13, 2),
(428, 13, 3),
(429, 13, 4),
(430, 13, 5),
(431, 13, 16);





-- Table: Ballot
--CREATE TABLE Ballot (
--    ballot_id int NOT NULL,
--    precinct_id varchar(20) NOT NULL,
--    CONSTRAINT Ballot_pk PRIMARY KEY (ballot_id)
--);
INSERT INTO Ballot (ballot_id, precinct_id)
VALUES (1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 2),
(8, 2),
(9, 2);





-- Table: UserVote
--CREATE TABLE UserVote (
--    vote_id int NOT NULL,
--    users_id int NOT NULL,
--    ballot_id int NOT NULL,
--    CONSTRAINT UserVote_pk PRIMARY KEY (vote_id)
--);
INSERT INTO UserVote (vote_id, users_id, ballot_id)
VALUES (1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 4),
(5, 2, 5),
(6, 2, 6),
(7, 3, 7),
(8, 3, 8),
(9, 3, 9);





-- Table: BallotCandidate
--CREATE TABLE BallotCandidate (
--    ballot_candidate_id int NOT NULL,
--    candidate_id int NOT NULL,
--    ballot_id int NOT NULL,
--    CONSTRAINT BallotCandidate_pk PRIMARY KEY (ballot_candidate_id)
--);
INSERT INTO BallotCandidate (ballot_candidate_id, candidate_id, ballot_id)
VALUES (1, 14, 1),
(2, 14, 2),
(3, 17, 3),
(4, 14, 4),
(5, 14, 5),
(6, 2, 6),
(7, 15, 7),
(8, 16, 8),
(9, 2, 9);





-- Table: RaceBallot
--CREATE TABLE RaceBallot (
--    race_ballot_id int NOT NULL,
--    ballot_id int NOT NULL,
--    race_id int NOT NULL,
--    CONSTRAINT RaceBallot_pk PRIMARY KEY (race_ballot_id)
--);
INSERT INTO RaceBallot (race_ballot_id, ballot_id, race_id)
VALUES (1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 1),
(5, 5, 2),
(6, 6, 3),
(7, 7, 1),
(8, 8, 2),
(9, 9, 3);


