CREATE DATABASE SMES;


/* person info table */
CREATE TABLE person
(

person_id		int AUTO_INCREMENT PRIMARY KEY,
fname 			varchar(255),	/* first name */		
mname			varchar(255),	/* middle name */
lname			varchar(255),	/* last name */
age				int,			/* age */
birthdate		date,		/* birth day */
contact_no		varchar(255),	/* contact # */
civil_status	varchar(15), /*SINGLE,TAKEN*/
email			varchar(225), /*user email address*/
sex				varchar(20), /*eg. MALE FEMALE */ 
res_house_no 	int, /*residential house/building number*/
res_strt_name 	varchar(255), /*residential street name*/
res_province 	varchar(255), /*residential province*/
res_city		varchar(255), /*residential city/municipality*/
res_barangay	varchar(255), /*residential barangay*/
res_region		varchar(10), /*residential region*/
perm_house_no 	int, /*permanent house/building number*/
perm_strt_name 	varchar(255), /*permanent street name*/
perm_province 	varchar(255), /*permanent province*/
perm_city		varchar(255), /*permanent city/municipality*/
perm_barangay	varchar(255), /*permanent barangay*/
perm_region		varchar(10) /*permanent region*/
);


/* student info/record table*/
CREATE TABLE stdnt_info
(

stdnt_info_id			int  PRIMARY KEY AUTO_INCREMENT,
curriculum_id			int, /*foreign key from curriculum table*/
person_id				int, /* foreign key from person table */
student_level			int, /*0-jhs 1-shs 2-college*/
prnt_grdn_info_id		int, /* foreign key from prnt_grdn_info table */
academics_docu_id		int,	/* foreign key from academics_docu table*/	
acad_back_info_id		int, /* foreign key from acad_back_info table */
program_id				int, /* foreign key from program table */
profile_pic				varchar(255),  /* picture location in folder , pic/student/xxx.jpg*/
stdnt_no 				varchar(255), /* year admitted – student number – status [0-normal 1-transferee], academic term (based on enrollment date)  */
year_level				int, /* current year level of student */
block 					int, /* assigned block/section */
stdnt_status			int, /* inactive=0, active=1 */
allowed_units			int, /* units allowed for this student during this time */	
indeficiency			int,	 /* 0-can enroll 1-cannot enroll */
stdnt_standing			int, /*0-regular, 1-irregular*/
stdnt_type				int /*0-regular, 1-shiftee, 2-transferee, 3-cross enrollee*/
);


/* Parent/Guardian info table */
CREATE TABLE prnt_grdn_info
(

prnt_grdn_info_id		int  PRIMARY KEY auto_increment,
name 					varchar(225), /*name of guardian/parent */
relation				varchar(100),	/* FATHER, MOTHER, GUARDIAN */

occupation				varchar(255), /*occupation of relative*/

contact_no 				varchar(255), /* contact no of guardian/parent*/
address					varchar(225), /*full address of guardian/parent */
status					int  /* 0- active 1-inactive */

);


/* Student Academic Background Record Table */
CREATE TABLE acad_back_info
(

acad_back_info_id 		int  PRIMARY KEY auto_increment,
prmry_school 			varchar(225), /*primary/elementary school*/
prmry_school_add 		varchar(225), /*primary/elementary school address*/
prmry_school_sy			date,	/*primary/elementary school year graduated*/
scndry_school 			varchar(225), /*secondary/highschool or JHS */
scndry_school_add 		varchar(225), /*secondary/highschool or JHS  Address*/
scndry_school_sy 		date,	/*secondary/highschool or JHS year graduated*/
scndry_school_2 		char(225),	 /*if K-12, SHS else Null **/
scndry_school_2_add		varchar(225),/*if K-12, SHS address else Null **/
scndry_school_2_sy		date,		 /*if K-12, SHS year graduated else Null **/
trtry_school 			char,		/*if shiftee, previous college */
trtry_school_add  		varchar(225), /*if shiftee, previous college address*/
trtry_school_sy 		date	/*if shiftee, previous college last school year*/

);


/*grades table of students*/
CREATE TABLE grades
(

grades_id 		int  PRIMARY KEY auto_increment,
course_id	 	int, /*foreign key from course table*/
course_schedule_id int, /*foreign key from course_schedule table*/
faculty_id		int,  /*foreign key from faculty table*/
stdnt_info_id	int, /*foreign key from student info table */
schedule_id		int, /*foreign key from schedule table*/
prlm_grade		decimal(10,2), /*prelim grade*/
mdtrm_grade		decimal(10,2), /*midterm grade*/
fnl_grade		decimal(10,2), /*final grade*/
ay				varchar(255), /*academic year, eg. 18-19 */ 
semester		varchar(255), /*academic semeter, eg. 1st 2nd Summer*/
status 			char(3) /* eg. P,F,W,INC,D*/

);


/*Subject/Course list table*/
CREATE TABLE courses
(

course_id 				int  PRIMARY KEY auto_increment,
program_id 				int, /*foreign key from course table*/
curriculum_id			int, /*foreign key from curriculum table*/
course_code 			varchar(255), /*subject/coourse code*/
equivalent_course_codes	varchar(255), /*equivalent course code,can be many, separated by comma for crediting eg. "BSCOE2,IT3" etc*/
type					int, /*0-minor 1-major*/
lab_unit 				int(5), /* unit of laboratory*/ 
lec_unit 				int(5), /*unit of lecture */
total_unit				int(5), /*total units of subject*/
hours_week				int(5), /*total hours per week*/
year 					int(5), /*year of subject availability eg. 1st year 1 2nd year 2 */ 
semester 				varchar(255), /*semester of subject availability eg. 1st , 2nd , Summer */
prerequisite_courses 	varchar(225), /*course code of pre-requisite, can be many, seperated by comma*/
corequisite_courses 	varchar(225) /*course code of co-requisite, can be many, sepearated by comma*/

);


/*table that contains schedules for the courses*/
CREATE TABLE course_schedules 
(

course_schedule_id 	int primary key auto_increment,
curriculum_id 		int, /*foreign key, from curriculum table*/
course_id 			int, /*foreign keym from courses table*/
day 				varchar(2), /*eg. M,T,W,TH,F,S*/
time_start  		time, /*time start*/
time_end 			time, /*time end*/
room 				varchar(10), /*room eg. CEA312*/
category			varchar(3) /*eg. LAB LEC*/

);


/*table for student schedules*/
CREATE TABLE schedules
(

schedule_id			int  PRIMARY KEY auto_increment,
course_schedule_id	int, /*foreign key from course table*/
faculty_id 			int, /*foreign key from faculty table*/
/*block_id			int, /*foreign key from block table*/
stdnt_info_id		int,  /*foreign key from student_info table*/
ay					varchar(9), /*academic year eg. 2018-2019*/
semester 			varchar(10), /*semester enrolled, 1st 2nd or Summer*/
paid				int /* paid status, 0-unpaid, 1- paid*/

);


/*student blocks*/
CREATE TABLE block
(

block_id   		int  PRIMARY KEY auto_increment, 
program_id 		int, /*foreign key from program table*/
block_info_id	int, /*foreign key from block info table*/
section 		int, /*section of class*/
year 			int, /*year of class*/
ay 				varchar(9) /*academic year of class*/

);


/*student blocks info table*/
CREATE TABLE block_info
(

block_info_id   int  PRIMARY KEY auto_increment, 
stdnt_info_id 	int, /*foreign key from student_info table*/
block_id		int /*foreign key from block table*/

);


/*colleges table*/
CREATE TABLE colleges
(

college_id int PRIMARY KEY auto_increment,
college_name varchar(255), /*college of lol*/
date_added date /*date added*/

);


/*departments table*/
CREATE TABLE dept
(

dept_id int PRIMARY KEY auto_increment,
college_id int, /*foreign key from college table*/ 
dept_name varchar(255) /*Computer Engineering Department*/

);


/*faculty load table*/
CREATE TABLE faculty_load
(

faculty_load_id int PRIMARY KEY auto_increment, 
faculty_id 		int, /*foreign key from faculty table*/
total_unit_load int, /*unit load given for this time*/
unit_load_taken int, /*taken units from total load for this time*/
unit_load_avail int, /*available units from total load for this time*/
year			int, /*eg. 2018,2019,2020*/
semester 		varchar(10), /*1st, 2nd, Summer*/ 
load_encoder 	varchar(255), /*name of the person who gave this load*/
approved		int /*0-unapporived, 1-approved dean*/

);


/*table that enlists faculty registered courses */
CREATE TABLE faculty_courses
(

faculty_course int primary key auto_increment,
faculty_id     int, /*foreign key from faculty table*/
faculty_load_id int,/*foreign key from faculty_load table*/
course_schedule_id int, /*foreign key from course_schedules table*/
ay				varchar(20), /*eg. '2018-2019'*/
sem				varchar(10), /*eg '1st''2nd''SUMMER'*/
total_units		int /*total unit of the course*/

);


/*faculty info table*/
CREATE TABLE faculty
(

faculty_id 		int  PRIMARY KEY auto_increment, 
person_id 		int, /*foreign key from person table*/
dept_id	 		int, /*foreign key from dept table*/
faculty_load_id int, /*foreign key from faculty_load table*/
college_id 		int, /*foreign key from college table*/
profile_pic		varchar(255), /*location of picture from folder, pic/faculty/xxxx.jpg*/
age 			int, /*age of faculty*/
position		varchar(50), /*chairperson,labhead,professor,dean*/
type			int, /*0-regular 1-part time*/
status 			int		/* if 0-ACTIVE, 1-IN-ACTIVE, 2-RETIRED, 3-Fired, 4-Leave*/

);


/*curriculum table*/
CREATE TABLE curriculum
(

curriculum_id	int  PRIMARY KEY auto_increment,
program_id  	int, /*foreign key from program table*/
year_added		int, /*year added*/
active			int  /*0 inactive, 1 active*/

);


/*programs table*/
CREATE TABLE program
(

program_id 		int  PRIMARY KEY auto_increment,
college_id		int, /*foreign key from college table*/
program_name	varchar(225), /*name of course/program*/
year_added		int, /*year added*/
total_years		int, /*total year of program*/
creator			varchar(225) /*name of adder*/ 

);


/*user table*/
CREATE TABLE users
(

user_id			int PRIMARY KEY auto_increment,
person_id 		int, /*foreign key from person table*/
username		varchar(225), /*user name */ 
pswrd			varchar(20),	/*password*/
category		int, /*0-student, 1-professor, 2-dean, 3-chairperson, 4-guidance, 5-library, 6-registrar, 7-admission, 8-cashier, 9-accounting*/
permissions		varchar(255), /* eg. 1|0|1|1 have permission from all except the 2nd one*/
type 			int, /*0-regular, 1-admin*/
esign 			varchar(255), /*location of picture from folder, pic/esign/xxx.jpg*/
esign_pin		int(8), /*pin of esign*/
active 			int /*0-active, 1-inactive/expired*/	

);


/*table for student penalties*/
CREATE TABLE stdnt_penalties
(

penalty_id		int PRIMARY KEY auto_increment,
stdnt_info_id	int, /*foreign key from student_info table*/
penalty_title	varchar(255), /*penalty title*/
penalty_info	varchar(255), /*elaboration of penalty*/
issuer			varchar(225), /*who issued the penalty*/
status			int, /*0-pending,1-cleared*/ 
type			int /*0-library,1-guidance,2-laboratory*/

);


/*Graduation applications for students table*/
CREATE TABLE grad_application
(

application_id		int auto_increment PRIMARY KEY, 
stdnt_info_id		int, /*foreign key from student_info table*/
status				int, /*0-disapproved, 1-approved*/ 
form				varchar(255), /*location from pic/gradappli/xxxx.jpg/*/
approved_by			varchar(255) /*name of approver, NULL of disapprover*/

);


/*student academic documents table*/
CREATE TABLE acad_docu
(

acad_docu_id		int PRIMARY KEY auto_increment,
stdnt_info_id		int, /*foreign key from student_info table*/
acad_docu_required_id int, /*foreign key from acad_docu_required*/
reciever 			int, /*who received the form*/
date_recieve		datetime, /*when did it send*/
form				varchar(255), /*location of picture pic/acad_docu/xxxx.jpg*/
status				int /*0-incomplete, 1-complete*/

);


/*table that lists required docu's needed for those students*/
CREATE TABLE acad_docu_required
(

acad_docu_required_id int PRIMARY KEY auto_increment,
docu_name varchar(255), /*required document name*/
docu_info varchar(255),  /*required document description*/
required_for int /*the document is for, eg. 0-regular , 1-shiftee, 2-tranferee, 3-cross enrollee*/

);


/*--------------------------------------------------------------------*/
/*REGISTRAR*/


/*table for student applicants to be observed*/
CREATE TABLE student_applicants 
(

stdnt_appli_id int PRIMARY KEY auto_increment,
fname varchar(255), /*first name*/
mname varchar(255), /*middle name*/
lname varchar(255), /*last name*/
email varchar(255), /*email*/
add_house_no 	int, /*address house/building number*/
add_strt_name 	varchar(255), /*address street name*/
add_province 	varchar(255), /*address province*/
add_city		varchar(255), /*address city/municipality*/
add_barangay	varchar(255), /*address barangay*/
add_region		varchar(10), /*address region*/
contact_no varchar(20), /*contact number*/
last_school varchar(255), /*last school*/
last_school_add varchar(255), /*last school address*/
status int /* 0- unaccepted, 1- accepted by admission etc, 2- pending*/

);


/*table for applicants evaluations*/
CREATE TABLE school_evaluation
(

school_eval_id int primary key auto_increment,
stdnt_appli_id int, /*foreign key from student_applicants table*/
exam_result int, /*score*/
evaluation varchar(255), /*evaluation comment*/
evaluator varchar(255) /*evaluator*/

);


/*table for college applicants*/
CREATE TABLE college_applicants
(

stdnt_appli_id int, /*foreign key from student_applicants table*/
shs_school varchar(255), /*senior high school*/
shs_track varchar(255), /*??*/
jhs varchar(255), /*junior high school*/
pref_course1 varchar(255), /*1st course preferred*/
pref_course2 varchar(255), /*2nd course prefereed*/
pref_course3 varchar(255) /*3rd course preferred*/

);


/*table for SHS applicants*/
CREATE TABLE shs_applicants
(

stdnt_appli_id int,  /*foreign key from student_applicants table*/
jhs_school varchar(255), /*junior high school*/
pref_track1 varchar(255), /*preferred track 1*/
pref_track2 varchar(255) /*preferred track 2*/

);


/*table for student applicant documents*/
CREATE TABLE student_applicants_docu
(

stdnt_appli_docu_id int PRIMARY KEY auto_increment,
stdnt_appli_id int, /*foreign key from student_applicants table*/
form varchar(255), /*location of form pic/studentapplidocu/xxx.jpg*/
status int, /*0-inc 1-completed*/
receiver varchar(255) /*receiver*/

);


/*table for student requests*/
CREATE TABLE student_requests
(

stdnt_req_id int PRIMARY KEY auto_increment,
stdnt_info_id int, /*foreign key from student info table*/
form varchar(255), /*location of form pic/requests/xxx.jpg*/
approved int, /*0-no,1-yes*/
approved_by varchar(255) /*name of approver*/

);

/*table for student messages */
CREATE TABLE student_messages
(

stdnt_message_id int PRIMARY KEY auto_increment,
stdnt_info_id int, /*foreign key from student info table*/
sender varchar(255), /*name of sender*/
receiver varchar(255), /*name of receiver*/
content varchar(255), /*message content*/
time datetime, /*time of sending*/
attachment varchar(255), /*if add file, put location messages/attachments/xxxx.xx else null*/
deleted int /*default 0,if receiver deletes message, value is 1 */

);


CREATE TABLE faculty_messages
(

faculty_message_id int PRIMARY KEY auto_increment,
faculty_id int, /*foreign key from faculty table*/
sender varchar(255), /*name of sender*/
receiver varchar(255), /*name of receiver*/
content varchar(255), /*message content*/
time datetime, /*time of sending*/
attachment varchar(255), /*if add file, put location messages/attachments/xxxx.xx else null*/
deleted int /*default 0,if receiver deletes message, value is 1 */

);


CREATE TABLE student_announcements
(

stdnt_announcement_id int primary key auto_increment,
title varchar(255), /*title of announcement*/
content varchar(255), /*content of announcement*/
time datetime, /*Date announced*/
announcer varchar(255), /*name & position who announced*/
ay varchar(9), /*academic year, eg "2018-2019"*/
sem varchar(10) /*semester eg. '1st','2nd','summer'*/

);


CREATE TABLE faculty_announcements
(

faculty_announcement_id int primary key auto_increment,
title varchar(255), /*title of announcement*/
content varchar(255), /*content of announcement*/
time datetime, /*Date announced*/
announcer varchar(255), /*name & position who announced*/
ay varchar(9), /*academic year, eg "2018-2019"*/
sem varchar(10) /*semester eg. '1st','2nd','summer'*/

);


CREATE TABLE student_attendance
(

stdnt_attendance_id int PRIMARY KEY auto_increment,
schedule_id int, /*foreign key from schedule table*/
stdnt_info_id int, /*foreign key from student info table*/
date datetime, /*date of attendance*/
ay varchar(9), /*academic year, eg. "2018-2019"*/
sem varchar(10), /*semester eg '1st' '2nd' */
day int, /*day '1' or '2' etc*/
status int, /*0-absent , 1-present , 2- excused*/
reason varchar(255) /*reason of excused or absence*/

);


CREATE TABLE faculty_attendance
(

faculty_attendance_id int PRIMARY KEY auto_increment,
schedule_id int, /*foreign key from schedule table*/
faculty_id int, /*foreign key from faculty table*/
date datetime, /*date of attendance*/
ay varchar(9), /*academic year, eg. "2018-2019"*/
sem varchar(10), /*semester eg '1st' '2nd' */
day int, /*day '1' or '2' etc*/
status int, /*0-absent , 1-present , 2- excused*/
reason varchar(255) /*reason of excused or absence*/

);


CREATE TABLE guidance_personnel
(

guidance_personnel_id int PRIMARY KEY auto_increment,
person_id int, /*foreign key from person table*/
college_id int, /*foreign key from colleges table*/
program_id int, /*foreign key from program table*/
status int /*0-inactive, 1-active*/

);


CREATE TABLE librarian
(

librarian_id int PRIMARY KEY auto_increment,
person_id int, /*foreign key from person table*/
college_id int, /*foreign key from colleges table*/
status int /*0-inactive 1-active*/

);

/*table for the program and their current curriculum*/
CREATE TABLE program_curriculum
(

program_id int, /*foreign key from program table*/
curriculum_id int, /*foreign key from curriculum table*/
total_years int, /*number of years of a program*/
year_started datetime /*originating year*/

);


/*--------------------------------------------------------------------*/
/*ACCOUNTING*/
/* the following are tables for accounting*/


/* table for the cashiering module*/
CREATE TABLE cashiering_module
(

transact_no 			int auto_increment PRIMARY KEY,
person_id				int, /*foreign key from person table*/
curriculum_id			int, /*foreign key from curriculum table*/
program_id 				int, /*foreign key from program table*/
semester				int, /* the semester paid*/
official_receipt_no		int, /*transaction tracking number*/
official_receipt_date	date, /*transaction timestamp */
amount_paid				int,	/* total amount paid */
courses_paid_for		varchar(255)	/* subjects/courses in the current sem paid */

);


/* table for the accounting journal*/
/* contains the balance sheet for the users account such as debit, credit, name or type of transaction*/
/* a record of transactions*/
CREATE TABLE accounting_journal
(

account_journal_id		int primary key auto_increment,
person_id				int, 			/*foreign key from person table*/
date 					datetime, 		/*date of transaction */
account_title			varchar(255),	/*nature or name of transaction made*/
refference_no			int,			/*transaction refference number*/
debit					decimal(10,2),	/*debit, a decrease in the account balance or expenses */
credit					decimal(10,2),	/*credit, an increase in the account balance or income */
status					int,			/*status of account balance, 1-paid or 0-pending/unpaid */
payment_recieved_by		varchar(255),	/*the cashier processing the transaction, reciever of payment*/
paid_by					varchar(225)	/*the person paying*/

);


/*table for incoming and outgoing payments*/
CREATE TABLE payments
(

payment_id 				int auto_increment PRIMARY KEY,
person_id				int,			/*foreign key from person table*/
payment_amount			decimal(10,2),	/*amount paid balance*/
installments			varchar(255),	/*full or partial*/
status					varchar(15), 	/*status of balance: paid, unpaid, partial paid*/
date					datetime,		/*date of payment/transaction*/
total					decimal(10,2),	/*total amount paid*/
account_balance			decimal(10,2),	/*remaining account balance if partial paid, unpaid */
discount				int,			/*0 = no discount; 1 = discount*/
discounted_amount		decimal(10,2)	/*amount discounted from the total amount of payment*/

);


/*-------------------------CMS TABLES----------------*/


/*for module function maintenance*/
CREATE TABLE modules_functions
(

module_function_id 	int PRIMARY KEY auto_increment,
module 				varchar(255), /*REGISTRAR,ADMISSION,STUDENT,ETC*/
function 			varchar(255), /*function/tab of said module*/
availability 		int /*0-hidden, 1- available*/

);


/*table for portal features*/
CREATE TABLE portal_features
(

portal_feature_id int PRIMARY KEY auto_increment,
about  			  varchar(255),/*about us text in portal*/
event_pic1        varchar(255),/*location of event picture 1 in portal, eg. portal/events/xxxx.jpg*/
event_pic2		  varchar(255),/*location of event picture 2 in portal, eg. portal/events/xxxx.jpg*/
event_pic3		  varchar(255)/*location of event picture 3 in portal, eg. portal/events/xxxx.jpg*/

);


/*table of calendar events*/
CREATE TABLE calendar_events
(

calendar_event_id int PRIMARY KEY auto_increment,
title varchar(255), /*title of event*/
content varchar(255), /*info of event*/
date_start datetime, /*date start of event*/
date_end datetime, /*date end of event*/
creator varchar(255) /*name of creator*/

);


/*table that contains semesters and defines current semester */
CREATE TABLE semesters
(

semester_id				int PRIMARY KEY auto_increment,
semester_name			varchar(255), /*name*/
date_start				datetime, /*date start*/
date_end				datetime, /*date end*/
enrollment_start		datetime, /*enrollment date start*/
enrollment_end			datetime, /*enrollment date end*/
right_now				int /*0-no 1-yes, 1 if in date_start and date_end*/

);

CREATE TABLE program_courses
(

curriculum_id int, /*foreign key from curriculum table*/
program_id int, /*foreign key from program table*/
course_id int, /*foreign key from courses table*/
year_level int, /*eg 1,2,3,4,5*/
semester varchar(10), /*eg 1,2,SUMMER*/
pre_req  varchar(255), /*course codes of pre-requisites, separated by comma*/
co_req	varchar(255) /*course coudes of co-requisites, separated by comma*/

);


/*Foreign Key Initialization*/
ALTER TABLE `school_evaluation`
	ADD CONSTRAINT `school_evaluation_cns_1` FOREIGN KEY (`stdnt_appli_id`) REFERENCES `student_applicants` (`stdnt_appli_id`);

ALTER TABLE `college_applicants`
	ADD CONSTRAINT `college_applicants_cns_1` FOREIGN KEY (`stdnt_appli_id`) REFERENCES `student_applicants` (`stdnt_appli_id`);

ALTER TABLE `shs_applicants`
	ADD CONSTRAINT `shs_applicants_cns_1` FOREIGN KEY (`stdnt_appli_id`) REFERENCES `student_applicants` (`stdnt_appli_id`);

ALTER TABLE `program_curriculum`
	ADD CONSTRAINT `program_curriculum_cns_1` FOREIGN KEY (`program_id`) REFERENCES `program` (`program_id`),
	ADD CONSTRAINT `program_curriculum_cns_2` FOREIGN KEY (`curriculum_id`) REFERENCES `curriculum` (`curriculum_id`);

ALTER TABLE `faculty_courses`
	ADD CONSTRAINT `faculty_courses_cns_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`),
	ADD CONSTRAINT `faculty_courses_cns_2` FOREIGN KEY (`faculty_load_id`) REFERENCES `faculty_load` (`faculty_load_id`),
	ADD CONSTRAINT `faculty_courses_cns_3` FOREIGN KEY (`course_schedule_id`) REFERENCES `course_schedules` (`course_schedule_id`);

ALTER TABLE `course_schedules`
	ADD CONSTRAINT `course_schedules_cns_1` FOREIGN KEY (`curriculum_id`) REFERENCES `curriculum` (`curriculum_id`),
	ADD CONSTRAINT `course_schedules_cns_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`);

ALTER TABLE `program_courses`
	ADD CONSTRAINT `program_courses_cns_1` FOREIGN KEY (`curriculum_id`) REFERENCES `curriculum` (`curriculum_id`),
	ADD CONSTRAINT `program_courses_cns_2` FOREIGN KEY (`program_id`) REFERENCES `program` (`program_id`),
	ADD CONSTRAINT `program_course_cns_3` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`);
	
ALTER TABLE `stdnt_info`
	ADD CONSTRAINT `stdnt_info_cns_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`person_id`),
	ADD CONSTRAINT `stdnt_info_cns_2` FOREIGN KEY (`prnt_grdn_info_id`) REFERENCES `prnt_grdn_info` (`prnt_grdn_info_id`),
	ADD CONSTRAINT `stdnt_info_cns_3` FOREIGN KEY (`academics_docu_id`) REFERENCES `acad_docu` (`acad_docu_id`),
	ADD CONSTRAINT `stdnt_info_cns_4` FOREIGN KEY (`acad_back_info_id`) REFERENCES `acad_back_info` (`acad_back_info_id`),
	ADD CONSTRAINT `stdnt_info_cns_5` FOREIGN KEY (`program_id`) REFERENCES `program` (`program_id`),
	ADD CONSTRAINT `stdnt_info_cns_6` FOREIGN KEY (`curriculum_id`) REFERENCES `curriculum` (`curriculum_id`);

ALTER TABLE `grades`
	ADD CONSTRAINT `grades_cns_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`),
	ADD CONSTRAINT `grades_cns_2` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`),
	ADD CONSTRAINT `grades_cns_3` FOREIGN KEY (`stdnt_info_id`) REFERENCES `stdnt_info` (`stdnt_info_id`),
	ADD CONSTRAINT `grades_cns_4` FOREIGN KEY (`schedule_id`) REFERENCES `schedules` (`schedule_id`),
	ADD CONSTRAINT `grades_cns_5` FOREIGN KEY (`course_schedule_id`) REFERENCES `course_schedules` (`course_schedule_id`);

ALTER TABLE `schedules`
	ADD CONSTRAINT `schedule_cns_1` FOREIGN KEY (`course_schedule_id`) REFERENCES `course_schedules` (`course_schedule_id`),
	ADD CONSTRAINT `schedule_cns_2` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`),
	/*ADD CONSTRAINT `schedule_cns_3` FOREIGN KEY (`block_id`) REFERENCES `block` (`block_id`),*/
	ADD CONSTRAINT `schedule_cns_4` FOREIGN KEY (`stdnt_info_id`) REFERENCES `stdnt_info` (`stdnt_info_id`);

ALTER TABLE `block`
	ADD CONSTRAINT `block_cns_1` FOREIGN KEY (`program_id`) REFERENCES `program` (`program_id`),
	ADD CONSTRAINT `block_cns_2` FOREIGN KEY (`block_info_id`) REFERENCES `block_info` (`block_info_id`);

ALTER TABLE `block_info`
	ADD CONSTRAINT `block_info_cns_1` FOREIGN KEY (`stdnt_info_id`) REFERENCES `stdnt_info` (`stdnt_info_id`),
	ADD CONSTRAINT `block_info_cns_2` FOREIGN KEY (`block_id`) REFERENCES `block` (`block_id`);	
	
ALTER TABLE `faculty`
	ADD CONSTRAINT `faculty_cns_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`person_id`),
	ADD CONSTRAINT `faculty_cns_2` FOREIGN KEY (`dept_id`) REFERENCES `dept` (`dept_id`),
	ADD CONSTRAINT `faculty_cns_3` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`college_id`),
	ADD CONSTRAINT `faculty_cns_4` FOREIGN KEY (`faculty_load_id`) REFERENCES `faculty_load` (`faculty_load_id`);	
	
ALTER TABLE `curriculum`
	ADD CONSTRAINT `curriculum_cns_1` FOREIGN KEY (`program_id`) REFERENCES `program` (`program_id`);
	
ALTER TABLE `program`
	ADD CONSTRAINT `program_cns_1` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`college_id`);
	
ALTER TABLE `stdnt_penalties`
	ADD CONSTRAINT `stdnt_penalties_cns_1` FOREIGN KEY (`stdnt_info_id`) REFERENCES `stdnt_info` (`stdnt_info_id`);
	
ALTER TABLE `grad_application`
	ADD CONSTRAINT `grad_application_cns_1` FOREIGN KEY (`stdnt_info_id`) REFERENCES `stdnt_info` (`stdnt_info_id`);
		
ALTER TABLE `acad_docu`
	ADD CONSTRAINT `acad_docu_cns_1` FOREIGN KEY (`stdnt_info_id`) REFERENCES `stdnt_info` (`stdnt_info_id`),
	ADD CONSTRAINT `acad_docu_cns_2` FOREIGN KEY (`acad_docu_required_id`) REFERENCES `acad_docu_required` (`acad_docu_required_id`);
	
ALTER TABLE `student_applicants_docu`
	ADD CONSTRAINT `student_applicants_docu_cns_1` FOREIGN KEY (`stdnt_appli_id`) REFERENCES `student_applicants` (`stdnt_appli_id`);

ALTER TABLE `cashiering_module`
	ADD CONSTRAINT `cashiering_module_cns_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`person_id`),
	ADD CONSTRAINT `cashiering_module_cns_2` FOREIGN KEY (`curriculum_id`) REFERENCES `curriculum` (`curriculum_id`),	
	ADD CONSTRAINT `cashiering_module_cns_3` FOREIGN KEY (`program_id`) REFERENCES `program` (`program_id`);	
	
ALTER TABLE `accounting_journal`
	ADD CONSTRAINT `accounting_journal_cns_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`person_id`);
	
ALTER TABLE `payments`
	ADD CONSTRAINT `payments_cns_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`person_id`);
	
ALTER TABLE `student_messages`
	ADD CONSTRAINT `student_messages_cns_1` FOREIGN KEY (`stdnt_info_id`) REFERENCES `stdnt_info` (`stdnt_info_id`);
	
ALTER TABLE `faculty_messages`
	ADD CONSTRAINT `faculty_messages_cns_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`);
			
ALTER TABLE `student_attendance`
	ADD CONSTRAINT `student_attendance_cns_1` FOREIGN KEY (`schedule_id`) REFERENCES `schedules` (`schedule_id`),
	ADD CONSTRAINT `student_attendance_cns_2` FOREIGN KEY (`stdnt_info_id`) REFERENCES `stdnt_info` (`stdnt_info_id`);
							
ALTER TABLE `faculty_attendance`
	ADD CONSTRAINT `faculty_attendance_cns_1` FOREIGN KEY (`schedule_id`) REFERENCES `schedules` (`schedule_id`),
	ADD CONSTRAINT `faculty_attendance_cns_2` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`);
			
ALTER TABLE `guidance_personnel`
	ADD CONSTRAINT `guidance_personnel_cns_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`person_id`),
	ADD CONSTRAINT `guidance_personnel_cns_2` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`college_id`),
	ADD CONSTRAINT `guidance_personnel_cns_3` FOREIGN KEY (`program_id`) REFERENCES `program` (`program_id`);

ALTER TABLE `librarian`
	ADD CONSTRAINT `librarian_cns_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`person_id`),
	ADD CONSTRAINT `librarian_cns_2` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`college_id`);
