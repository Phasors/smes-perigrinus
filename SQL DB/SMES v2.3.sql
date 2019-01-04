CREATE DATABASE SMES;


/* person info table */
CREATE TABLE person
(

	person_id		int AUTO_INCREMENT PRIMARY KEY,
	fname 			varchar(255),	/* first name */		
	mname			varchar(255),	/* middle name */
	lname			varchar(255),	/* last name */
	birthdate		date,		/* birth day */
	contact_no		varchar(255),	/* contact # */
	civil_status	varchar(15), /*SINGLE,TAKEN*/
	email			varchar(225), /*user email address*/
	sex				varchar(20), /*eg. MALE FEMALE */ 
	res_house_no 	int, /*residential house/building number*/
	res_strt_name 	varchar(255), /*residential street name*/
	res_barangay	varchar(255), /*residential barangay*/
	res_prov_id 	int, /*residential province, foreign key from province table*/
	res_town_id		int, /*residential city/municipality, foreign key from town table*/
	res_reg_id	int, /*residential region, foreign key from region table*/
	perm_house_no 	int, /*permanent house/building number*/
	perm_strt_name 	varchar(255), /*permanent street name*/
	perm_barangay	varchar(255), /*permanent barangay*/
	perm_prov_id 	int, /*permanent province, foreign key from province table*/
	perm_town_id	int, /*permanent city/municipalitym foreign key from town table*/
	perm_reg_id		int /*permanent region, foreign key from region table*/

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


/*table for list of loads given per student*/
CREATE TABLE student_load
(

	stdnt_load_id 		int PRIMARY KEY AUTO_INCREMENT,
	stdnt_info_id 		int, /*foreign key from student_info table*/
	ay_id				int, /*foreign key from academic_year table*/
	semester_id			int, /*foreign key from semesters table*/
	total_units			int, /*total load alloted*/
	overload_units		int, /*overload units given, 0 if none*/
	avail_units			int, /*available units left*/
	used_units			int /*units used*/

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
	ay_id			int, /*foreign key from academic_year table */ 
	semester_id		int, /*foreign key from semesters table*/
	prlm_grade		decimal(10,2), /*prelim grade*/
	mdtrm_grade		decimal(10,2), /*midterm grade*/
	fnl_grade		decimal(10,2), /*final grade*/
	status 			varchar(3) /* eg. P,F,W,INC,D*/

);


/*Subject/Course list table*/
CREATE TABLE courses
(

	course_id 				int  PRIMARY KEY auto_increment,
	program_id 				int, /*foreign key from course table*/
	curriculum_id			int, /*foreign key from curriculum table*/
	semester_id				int, /*foreign key from semesters table*/
	course_code 			varchar(255), /*subject/coourse code*/
	course_desc				varchar(255), /*name of subject/course*/
	equivalent_course_codes	varchar(255), /*equivalent course code,can be many, separated by comma for crediting eg. "BSCOE2,IT3" etc*/
	type					int, /*0-minor 1-major*/
	lab_unit 				int(5), /* unit of laboratory*/ 
	lec_unit 				int(5), /*unit of lecture */
	total_unit				int(5), /*total units of subject*/
	hours_week				int(5), /*total hours per week*/
	year 					int(5), /*year of subject availability eg. 1st year 1 2nd year 2 */
	prerequisite_courses 	varchar(225), /*course code of pre-requisite, can be many, seperated by comma*/
	corequisite_courses 	varchar(225) /*course code of co-requisite, can be many, sepearated by comma*/

);


/*table that contains schedules for the courses*/
CREATE TABLE course_schedules 
(

	course_schedule_id 	int primary key auto_increment,
	curriculum_id 		int, /*foreign key, from curriculum table*/
	course_id 			int, /*foreign keym from courses table*/
	block_id			int, /*foreign key from block table*/
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
	ay_id				int, /*foreign key from academic year table*/
	semester_id			int, /*foreign key from semesters table*/
	paid				int /* paid status, 0-unpaid, 1- paid*/

);


/*student blocks*/
CREATE TABLE block
(

	block_id   		int  PRIMARY KEY auto_increment, 
	program_id 		int, /*foreign key from program table*/
	block_info_id	int, /*foreign key from block info table*/
	section 		int, /*section of class*/
	year 			int /*year of class*/

);


/*student blocks info table*/
CREATE TABLE block_info
(

	block_info_id   int  PRIMARY KEY auto_increment, 
	stdnt_info_id 	int, /*foreign key from student_info table*/
	block_id		int, /*foreign key from block table*/
	ay_id			int /*foreign key from academic table*/

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
	ay_id			int, /*foreign key from academic_year table*/
	semester_id		int, /*foreign key from semesters table*/
	total_unit_load int, /*unit load given for this time*/
	unit_load_taken int, /*taken units from total load for this time*/
	unit_load_avail int, /*available units from total load for this time*/
	year			int, /*eg. 2018,2019,2020*/
	load_encoder 	varchar(255), /*name of the person who gave this load*/
	approved		int /*0-unapporived, 1-approved dean*/

);


/*table that enlists faculty registered courses */
CREATE TABLE faculty_courses
(

	faculty_course 		int primary key auto_increment,
	faculty_id     		int, /*foreign key from faculty table*/
	faculty_load_id 	int,/*foreign key from faculty_load table*/
	course_schedule_id 	int, /*foreign key from course_schedules table*/
	ay_id				int, /*foreign key from academic_year table*/
	semester_id			int, /*foreign key from semesters table*/
	total_units			int /*total unit of the course*/

);


/*faculty info table*/
CREATE TABLE faculty
(

	faculty_id 		int  PRIMARY KEY auto_increment, 
	person_id 		int, /*foreign key from person table*/
	dept_id	 		int, /*foreign key from department table*/
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
	/* permissions		varchar(255),  eg. 1|0|1|1 have permission from all except the 2nd one*/
	category		int, /*0-student, 1-professor, 2-dean, 3-chairperson, 4-guidance, 5-library, 6-registrar, 7-admission, 8-cashier, 9-accounting*/
	type 			int, /*0-regular, 1-admin, 2-assistant 3-super admin (all)*/
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
	date_issued		datetime, /*when it was issued*/
	date_cleared	datetime, /*date when finished*/
	status			int, /*0-pending,1-cleared*/ 
	type			int /*0-library,1-guidance,2-laboratory*/

);


/*Graduation applications for students table*/
CREATE TABLE grad_application
(

	application_id		int auto_increment PRIMARY KEY, 
	stdnt_info_id		int, /*foreign key from student_info table*/
	date				datetime, /*date issued*/
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
	type				int, /*0-ACE, 1-Overload, 2-completion, 3-misc, etc.*/
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

	stdnt_appli_id 	int PRIMARY KEY auto_increment,
	fname 			varchar(255), /*first name*/
	mname 			varchar(255), /*middle name*/
	lname 			varchar(255), /*last name*/
	email 			varchar(255), /*email*/
	birthdate 		date, /*date of birth*/
	add_house_no 	int, /*address house/building number*/
	add_strt_name 	varchar(255), /*address street name*/
	add_barangay	varchar(255), /*address barangay*/
	add_prov_id 	int, /*address province, foreign key from province table*/
	add_town_id		int, /*address city/municipality, foreign key from town table*/
	add_reg_id		int, /*address region, foreign key from region table*/
	contact_no 		varchar(20), /*contact number*/
	last_school 	varchar(255), /*last school*/
	last_school_add varchar(255), /*last school address*/
	status 			int /* 0- unaccepted, 1- accepted by admission etc, 2- pending*/

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



CREATE TABLE announcements
(

	announcemment_id int primary key auto_increment,
	ay_id 				  int, /*foreign key from academic_year table*/
	semester_id			  int, /*foreign key from semesters table*/
	recipient_category	  int, /*0-course, 1-program, 2-college, 3-Department, 4-all*/
	recipient_id		  int, /*Primary Key ID of target recipient*/
	title 				  varchar(255), /*title of announcement*/
	content 			  varchar(255), /*content of announcement*/
	date_start			  datetime, /*start of announcement validity*/
	date_end			  datetime, /*end of announcement validity*/
	time				  datetime, /*Date announced*/
	announcer 			  varchar(255), /*name who announced*/
	announcer_position	  varchar(255) /*announcer position*/	
);


CREATE TABLE student_attendance
(

	stdnt_attendance_id int PRIMARY KEY auto_increment,
	schedule_id int, /*foreign key from schedule table*/
	stdnt_info_id int, /*foreign key from student info table*/
	ay_id 				  int, /*foreign key from academic_year table*/
	semester_id			  int, /*foreign key from semesters table*/
	date datetime, /*date of attendance*/
	day int, /*day '1' or '2' of the course etc*/
	status int, /*0-absent , 1-present , 2- excused*/
	reason varchar(255) /*reason of excused or absence*/

);


CREATE TABLE faculty_attendance
(

	faculty_attendance_id int PRIMARY KEY auto_increment,
	schedule_id int, /*foreign key from schedule table*/
	faculty_id int, /*foreign key from faculty table*/
	ay_id 				  int, /*foreign key from academic_year table*/
	semester_id			  int, /*foreign key from semesters table*/
	date datetime, /*date of attendance*/
	day int, /*day '1' or '2' of course etc*/
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
	availability 		int, /*0-hidden, 1- available*/
	access_pin			varchar(16) /*acess pin for module function*/

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


/*table that contains academic years*/
CREATE TABLE academic_year
(

	ay_id 		int PRIMARY KEY auto_increment,
	ay_desc		varchar(20), /*eg. 2018-2019*/
	ay_start 	int, /*eg. 2018*/
	ay_end 		int, /*eg. 2019*/
	right_now 	int /*0-no 1-yes*/

);

/*table that contains all courses for a certain program*/
CREATE TABLE program_courses
(

	curriculum_id int, /*foreign key from curriculum table*/
	program_id int, /*foreign key from program table*/
	course_id int, /*foreign key from courses table*/
	semester_id	 int, /*foreign key from semesters table*/
	year_level int, /*eg 1,2,3,4,5*/
	semester varchar(10), /*eg 1,2,SUMMER*/
	pre_req  varchar(255), /*course codes of pre-requisites, separated by comma*/
	co_req	varchar(255) /*course coudes of co-requisites, separated by comma*/

);


/*-----------------------tables for address--------------------------*/

/*table that lists all region in PH*/
CREATE TABLE `region` (

  `reg_id` 		int(11) primary key NOT NULL auto_increment, 
  `reg_code` 	varchar(20) NOT NULL, /*region code*/
  `reg_name` 	text NOT NULL /*region name*/

);


/*table that lists all provinces in PH*/
CREATE TABLE `province` (

  `prov_id` int(11) NOT NULL primary key auto_increment,
  `reg_id` int(11) NOT NULL, /*foreign key from region table*/
  `prov_name` text NOT NULL /*province name*/

);

/*table that lists all towns in PH*/
CREATE TABLE `town` (

  `town_id` int(11) NOT NULL primary key auto_increment, 
  `prov_id` int(11) NOT NULL, /*foreign key from province table*/
  `town_name` text NOT NULL /*town name*/

);



/*Foreign Key Initialization*/
ALTER TABLE `province`
  ADD CONSTRAINT `province_cns_1` FOREIGN KEY (`reg_id`) REFERENCES `region` (`reg_id`);

ALTER TABLE `town`
  ADD CONSTRAINT `town_ibfk_1` FOREIGN KEY (`prov_id`) REFERENCES `province` (`prov_id`);

ALTER TABLE `courses`
ADD CONSTRAINT `courses_cns_1` FOREIGN KEY (`program_id`) REFERENCES `program` (`program_id`),
ADD CONSTRAINT `courses_cns_2` FOREIGN KEY (`curriculum_id`) REFERENCES `curriculum` (`curriculum_id`),
ADD CONSTRAINT `courses_cns_3` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`semester_id`);

ALTER TABLE `student_load`
ADD CONSTRAINT `student_load_cns_1` FOREIGN KEY (`ay_id`) REFERENCES `academic_year` (`ay_id`),
ADD CONSTRAINT `student_load_cns_2` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`semester_id`);

ALTER TABLE `faculty_load`
ADD CONSTRAINT `faculty_load_cns_1` FOREIGN KEY (`ay_id`) REFERENCES `academic_year` (`ay_id`),
ADD CONSTRAINT `faculty_load_cns_2` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`semester_id`);

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
ADD CONSTRAINT `faculty_courses_cns_3` FOREIGN KEY (`course_schedule_id`) REFERENCES `course_schedules` (`course_schedule_id`),
ADD CONSTRAINT `faculty_courses_cns_4` FOREIGN KEY (`ay_id`) REFERENCES `academic_year` (`ay_id`),
ADD CONSTRAINT `faculty_courses_cns_5` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`semester_id`);

ALTER TABLE `course_schedules`
ADD CONSTRAINT `course_schedules_cns_1` FOREIGN KEY (`curriculum_id`) REFERENCES `curriculum` (`curriculum_id`),
ADD CONSTRAINT `course_schedules_cns_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`),
ADD CONSTRAINT `course_schedules_cns_3` FOREIGN KEY (`block_id`) REFERENCES `block` (`block_id`);;

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
ADD CONSTRAINT `grades_cns_5` FOREIGN KEY (`course_schedule_id`) REFERENCES `course_schedules` (`course_schedule_id`),
ADD CONSTRAINT `grades_cns_6` FOREIGN KEY (`ay_id`) REFERENCES `academic_year` (`ay_id`),
ADD CONSTRAINT `grades_cns_7` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`semester_id`);

ALTER TABLE `schedules`
ADD CONSTRAINT `schedule_cns_1` FOREIGN KEY (`course_schedule_id`) REFERENCES `course_schedules` (`course_schedule_id`),
ADD CONSTRAINT `schedule_cns_2` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`),
/*ADD CONSTRAINT `schedule_cns_3` FOREIGN KEY (`block_id`) REFERENCES `block` (`block_id`),*/
ADD CONSTRAINT `schedule_cns_3` FOREIGN KEY (`stdnt_info_id`) REFERENCES `stdnt_info` (`stdnt_info_id`),
ADD CONSTRAINT `schedule_cns_4` FOREIGN KEY (`ay_id`) REFERENCES `academic_year` (`ay_id`),
ADD CONSTRAINT `schedule_cns_5` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`semester_id`);

ALTER TABLE `block`
ADD CONSTRAINT `block_cns_1` FOREIGN KEY (`program_id`) REFERENCES `program` (`program_id`),
ADD CONSTRAINT `block_cns_2` FOREIGN KEY (`block_info_id`) REFERENCES `block_info` (`block_info_id`);

ALTER TABLE `block_info`
ADD CONSTRAINT `block_info_cns_1` FOREIGN KEY (`stdnt_info_id`) REFERENCES `stdnt_info` (`stdnt_info_id`),
ADD CONSTRAINT `block_info_cns_2` FOREIGN KEY (`block_id`) REFERENCES `block` (`block_id`),
ADD CONSTRAINT `block_info_cns_3` FOREIGN KEY (`ay_id`) REFERENCES `academic_year` (`ay_id`);	

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
ADD CONSTRAINT `student_attendance_cns_2` FOREIGN KEY (`stdnt_info_id`) REFERENCES `stdnt_info` (`stdnt_info_id`),
ADD CONSTRAINT `student_attendance_cns_3` FOREIGN KEY (`ay_id`) REFERENCES `academic_year` (`ay_id`),
ADD CONSTRAINT `student_attendance_cns_4` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`semester_id`);

ALTER TABLE `announcements`
ADD CONSTRAINT `announcements_cns_1` FOREIGN KEY (`ay_id`) REFERENCES `academic_year` (`ay_id`),
ADD CONSTRAINT `announcements_cns_2` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`semester_id`);

ALTER TABLE `faculty_attendance`
ADD CONSTRAINT `faculty_attendance_cns_1` FOREIGN KEY (`schedule_id`) REFERENCES `schedules` (`schedule_id`),
ADD CONSTRAINT `faculty_attendance_cns_2` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`),
ADD CONSTRAINT `faculty_attendance_cns_3` FOREIGN KEY (`ay_id`) REFERENCES `academic_year` (`ay_id`),
ADD CONSTRAINT `faculty_attendance_cns_4` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`semester_id`);

ALTER TABLE `guidance_personnel`
ADD CONSTRAINT `guidance_personnel_cns_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`person_id`),
ADD CONSTRAINT `guidance_personnel_cns_2` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`college_id`),
ADD CONSTRAINT `guidance_personnel_cns_3` FOREIGN KEY (`program_id`) REFERENCES `program` (`program_id`);

ALTER TABLE `librarian`
ADD CONSTRAINT `librarian_cns_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`person_id`),
ADD CONSTRAINT `librarian_cns_2` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`college_id`);

ALTER TABLE `person`
ADD CONSTRAINT `person_cns_1` FOREIGN KEY (`res_prov_id`) REFERENCES `province` (`prov_id`),
ADD CONSTRAINT `person_cns_2` FOREIGN KEY (`res_town_id`) REFERENCES `town` (`town_id`),
ADD CONSTRAINT `person_cns_3` FOREIGN KEY (`res_reg_id`) REFERENCES `region` (`reg_id`),
ADD CONSTRAINT `person_cns_4` FOREIGN KEY (`perm_prov_id`) REFERENCES `province` (`prov_id`),
ADD CONSTRAINT `person_cns_5` FOREIGN KEY (`perm_town_id`) REFERENCES `town` (`town_id`),
ADD CONSTRAINT `person_cns_6` FOREIGN KEY (`perm_reg_id`) REFERENCES `region` (`reg_id`);

ALTER TABLE `student_applicants`
ADD CONSTRAINT `student_applicants_cns_1` FOREIGN KEY (`add_prov_id`) REFERENCES `province` (`prov_id`),
ADD CONSTRAINT `student_applicants_cns_2` FOREIGN KEY (`add_town_id`) REFERENCES `town` (`town_id`),
ADD CONSTRAINT `student_applicants_cns_3` FOREIGN KEY (`add_reg_id`) REFERENCES `region` (`reg_id`);


/*-----------------------------------------DUMMY DATA----------------------------------------*/
/*REGION TABLE*/

INSERT INTO `region` (`reg_id`, `reg_code`, `reg_name`) VALUES
(1, 'NCR', 'National Capital Region'),
(2, 'CAR', 'Cordillera Administrative Region'),
(3, 'Region I', 'Ilocos Region'),
(4, 'Region II', 'Cagayan Valley'),
(5, 'Region III', 'Central Luzon'),
(6, 'Region IV-A', 'CALABARZON'),
(7, 'Region IV-B', 'MIMAROPA'),
(8, 'Region V', 'Bicol Region'),
(9, 'Region VI', 'Western Visayas'),
(10, 'Region VII', 'Central Visayas'),
(11, 'Region VIII', 'Eastern Visayas'),
(12, 'Region IX', 'Zamboanga Peninsula'),
(13, 'Region X', 'Northern Mindanao'),
(14, 'Region XI', 'Davao Region'),
(15, 'Region XII', 'SOCCSKSARGEN'),
(16, 'CARAGA', 'Caraga Region'),
(17, 'ARMM', 'Autonomous Region in Muslim Mindanao');


/*PROVINCE TABLE*/
INSERT INTO `province` (`prov_id`, `reg_id`, `prov_name`) VALUES
(1, 1, 'NCR - Capital District'),
(2, 1, 'NCR - Eastern Manila District'),
(3, 1, 'NCR - Northern Manila District (CAMANAVA)'),
(4, 1, 'NCR - Southern Manila District'),
(5, 2, 'Abra'),
(6, 2, 'Apayao'),
(7, 2, 'Benguet'),
(8, 2, 'Ifugao'),
(9, 2, 'Kalinga'),
(10, 2, 'Mountain Province'),
(11, 3, 'Ilocos Norte'),
(12, 3, 'Ilocos Sur'),
(13, 3, 'La Union'),
(14, 3, 'Pangasinan'),
(15, 4, 'Batanes'),
(16, 4, 'Cagayan'),
(17, 4, 'Isabela'),
(18, 4, 'Nueva Vizcaya'),
(19, 4, 'Quirino'),
(20, 5, 'Aurora'),
(21, 5, 'Bataan'),
(22, 5, 'Bulacan'),
(23, 5, 'Nueva Ecija'),
(24, 5, 'Pampanga'),
(25, 5, 'Tarlac'),
(26, 5, 'Zambales'),
(27, 6, 'Batangas'),
(28, 6, 'Cavite'),
(29, 6, 'Laguna'),
(30, 6, 'Quezon'),
(31, 6, 'Rizal'),
(32, 7, 'Marinduque'),
(33, 7, 'Occidental Mindoro'),
(34, 7, 'Oriental Mindoro'),
(35, 7, 'Palawan'),
(36, 7, 'Romblon'),
(37, 8, 'Albay'),
(38, 8, 'Camarines Norte'),
(39, 8, 'Camarines Sur'),
(40, 8, 'Catanduanes'),
(41, 8, 'Masbate'),
(42, 8, 'Sorsogon'),
(43, 9, 'Aklan'),
(44, 9, 'Antique'),
(45, 9, 'Capiz'),
(46, 9, 'Guimaras'),
(47, 9, 'Iloilo'),
(48, 9, 'Negros Occidental'),
(49, 10, 'Bohol'),
(50, 10, 'Cebu'),
(51, 10, 'Negros Oriental'),
(52, 10, 'Siquijor'),
(53, 11, 'Biliran'),
(54, 11, 'Eastern Samar'),
(55, 11, 'Leyte'),
(56, 11, 'Northern Samar'),
(57, 11, 'Samar'),
(58, 11, 'Southern Leyte'),
(59, 12, 'Zamboanga del Norte'),
(60, 12, 'Zamboanga del Sur'),
(61, 12, 'Zamboanga Sibugay'),
(62, 13, 'Bukidnon'),
(63, 13, 'Camiguin'),
(64, 13, 'Lanao del Norte'),
(65, 13, 'Misamis Occidental'),
(66, 13, 'Misamis Oriental'),
(67, 14, 'Compostela Valley'),
(68, 14, 'Davao del Norte'),
(69, 14, 'Davao del Sur'),
(70, 14, 'Davao Oriental'),
(71, 14, 'Davao Occidental'),
(72, 15, 'Cotabato'),
(73, 15, 'Sarangani'),
(74, 15, 'South Cotabato'),
(75, 15, 'Sultan Kudarat'),
(76, 16, 'Agusan del Norte'),
(77, 16, 'Agusan del Sur'),
(78, 16, 'Dinagat Islands'),
(79, 16, 'Surigao del Norte'),
(80, 16, 'Surigao del Sur'),
(81, 17, 'Lanao del Sur'),
(82, 17, 'Maguindanao'),
(83, 17, 'Sulu'),
(84, 17, 'Tawi-Tawi'),
(85, 17, 'Basilan');


/*Town Table*/
INSERT INTO `town` (`town_id`, `prov_id`, `town_name`) VALUES
(1, 1, 'Manila'),
(2, 2, 'Mandaluyong'),
(3, 2, 'Marikina'),
(4, 2, 'Pasig'),
(5, 2, 'Quezon City'),
(6, 2, 'San Juan'),
(7, 3, 'Caloocan'),
(8, 3, 'Malabon'),
(9, 3, 'Navotas'),
(10, 3, 'Valenzuela'),
(11, 4, 'Las Piñas'),
(12, 4, 'Makati'),
(13, 4, 'Muntinlupa'),
(14, 4, 'Parañaque'),
(15, 4, 'Pasay'),
(16, 4, 'Pateros'),
(17, 4, 'Taguig'),
(18, 5, 'Bangued'),
(19, 5, 'Boliney'),
(20, 5, 'Bucay'),
(21, 5, 'Bucloc'),
(22, 5, 'Daguioman'),
(23, 5, 'Danglas'),
(24, 5, 'Dolores'),
(25, 5, 'La Paz'),
(26, 5, 'Lacub'),
(27, 5, 'Lagangilang'),
(28, 5, 'Lagayan'),
(29, 5, 'Langiden'),
(30, 5, 'Licuan-Baay (Licuan)'),
(31, 5, 'Luba'),
(32, 5, 'Malibcong'),
(33, 5, 'Manabo'),
(34, 5, 'Peñarrubia'),
(35, 5, 'Pidigan'),
(36, 5, 'Pilar'),
(37, 5, 'Sallapadan'),
(38, 5, 'San Isidro'),
(39, 5, 'San Juan'),
(40, 5, 'San Quintin'),
(41, 5, 'Tayum'),
(42, 5, 'Tineg'),
(43, 5, 'Tubo'),
(44, 5, 'Villaviciosa'),
(45, 6, 'Calanasan (Bayag)'),
(46, 6, 'Conner'),
(47, 6, 'Flora'),
(48, 6, 'Kabugao'),
(49, 6, 'Luna (Macatel[3])'),
(50, 6, 'Pudtol'),
(51, 6, 'Santa Marcela'),
(52, 7, 'Baguio City'),
(53, 7, 'Atok'),
(54, 7, 'Bakun'),
(55, 7, 'Bokod'),
(56, 7, 'Buguias'),
(57, 7, 'Itogon'),
(58, 7, 'Kabayan'),
(59, 7, 'Kapangan'),
(60, 7, 'Kibungan'),
(61, 7, 'La Trinidad'),
(62, 7, 'Mankayan'),
(63, 7, 'Sablan'),
(64, 7, 'Tuba'),
(65, 7, 'Tublay'),
(66, 8, 'Aguinaldo'),
(67, 8, 'Alfonso Lista (Potia)'),
(68, 8, 'Asipulo'),
(69, 8, 'Banaue'),
(70, 8, 'Hingyon'),
(71, 8, 'Hungduan'),
(72, 8, 'Kiangan'),
(73, 8, 'Lagawe'),
(74, 8, 'Lamut'),
(75, 8, 'Mayoyao'),
(76, 8, 'Tinoc'),
(77, 9, 'Tabuk'),
(78, 9, 'Balbalan'),
(79, 9, 'Lubuagan'),
(80, 9, 'Pasil'),
(81, 9, 'Pinukpuk'),
(82, 9, 'Rizal (Liwan)'),
(83, 9, 'Tanudan'),
(84, 9, 'Tinglayan'),
(85, 10, 'Barlig'),
(86, 10, 'Bauko'),
(87, 10, 'Besao'),
(88, 10, 'Bontoc'),
(89, 10, 'Natonin'),
(90, 10, 'Paracelis'),
(91, 10, 'Sabangan'),
(92, 10, 'Sadanga'),
(93, 10, 'Sagada'),
(94, 10, 'Tadian'),
(95, 11, 'Adams'),
(96, 11, 'Bacarra'),
(97, 11, 'Badoc'),
(98, 11, 'Bangui'),
(99, 11, 'Banna (Espiritu)'),
(100, 11, 'Batac City'),
(101, 11, 'Burgos'),
(102, 11, 'Carasi'),
(103, 11, 'Currimao'),
(104, 11, 'Dingras'),
(105, 11, 'Dumalneg'),
(106, 11, 'Laoag City'),
(107, 11, 'Marcos'),
(108, 11, 'Nueva Era'),
(109, 11, 'Pagudpud'),
(110, 11, 'Paoay'),
(111, 11, 'Pasuquin'),
(112, 11, 'Piddig'),
(113, 11, 'Pinili'),
(114, 11, 'San Nicolas'),
(115, 11, 'Sarrat'),
(116, 11, 'Solsona'),
(117, 11, 'Vintar'),
(118, 12, 'Vigan City'),
(119, 12, 'Candon City'),
(120, 12, 'Alilem'),
(121, 12, 'Banayoyo'),
(122, 12, 'Bantay'),
(123, 12, 'Burgos'),
(124, 12, 'Cabugao'),
(125, 12, 'Caoayan'),
(126, 12, 'Cervantes'),
(127, 12, 'Galimuyod'),
(128, 12, 'Gregorio del Pilar (Concepcion)'),
(129, 12, 'Lidlidda'),
(130, 12, 'Magsingal'),
(131, 12, 'Nagbukel'),
(132, 12, 'Narvacan'),
(133, 12, 'Quirino (Angaki)'),
(134, 12, 'Salcedo (Baugen)'),
(135, 12, 'San Emilio'),
(136, 12, 'San Esteban'),
(137, 12, 'San Ildefonso'),
(138, 12, 'San Juan (Lapog)'),
(139, 12, 'San Vicente'),
(140, 12, 'Santa'),
(141, 12, 'Santa Catalina'),
(142, 12, 'Santa Cruz'),
(143, 12, 'Santa Lucia'),
(144, 12, 'Santa Maria'),
(145, 12, 'Santiago'),
(146, 12, 'Santo Domingo'),
(147, 12, 'Sigay'),
(148, 12, 'Sinait'),
(149, 12, 'Sugpon'),
(150, 12, 'Suyo'),
(151, 12, 'Tagudin'),
(152, 13, 'San Fernando City, La Union'),
(153, 13, 'Agoo'),
(154, 13, 'Aringay'),
(155, 13, 'Bacnotan'),
(156, 13, 'Bagulin'),
(157, 13, 'Balaoan'),
(158, 13, 'Bangar'),
(159, 13, 'Bauang'),
(160, 13, 'Burgos'),
(161, 13, 'Caba'),
(162, 13, 'Luna'),
(163, 13, 'Naguilian'),
(164, 13, 'Pugo'),
(165, 13, 'Rosario'),
(166, 13, 'San Gabriel'),
(167, 13, 'San Juan'),
(168, 13, 'Sto. Tomas'),
(169, 13, 'Santol'),
(170, 13, 'Sudipen'),
(171, 13, 'Tubao'),
(172, 14, 'Alaminos'),
(173, 14, 'Dagupan'),
(174, 14, 'San Carlos'),
(175, 14, 'Urdaneta City'),
(176, 14, 'Agno'),
(177, 14, 'Aguilar'),
(178, 14, 'Alcala'),
(179, 14, 'Anda'),
(180, 14, 'Asingan'),
(181, 14, 'Balungao'),
(182, 14, 'Bani'),
(183, 14, 'Basista'),
(184, 14, 'Bautista'),
(185, 14, 'Bayambang'),
(186, 14, 'Binalonan'),
(187, 14, 'Binmaley'),
(188, 14, 'Bolinao'),
(189, 14, 'Bugallon'),
(190, 14, 'Burgos'),
(191, 14, 'Calasiao'),
(192, 14, 'Dasol'),
(193, 14, 'Infanta'),
(194, 14, 'Labrador'),
(195, 14, 'Laoac'),
(196, 14, 'Lingayen'),
(197, 14, 'Mabini'),
(198, 14, 'Malasiqui'),
(199, 14, 'Manaoag'),
(200, 14, 'Mangaldan'),
(201, 14, 'Mangatarem'),
(202, 14, 'Mapandan'),
(203, 14, 'Natividad'),
(204, 14, 'Pozorrubio'),
(205, 14, 'Rosales'),
(206, 14, 'San Fabian'),
(207, 14, 'San Jacinto'),
(208, 14, 'San Manuel'),
(209, 14, 'San Nicolas'),
(210, 14, 'San Quintin'),
(211, 14, 'Santa Barbara'),
(212, 14, 'Santa Maria'),
(213, 14, 'Santo Tomas'),
(214, 14, 'Sison'),
(215, 14, 'Sual'),
(216, 14, 'Tayug'),
(217, 14, 'Umingan'),
(218, 14, 'Urbiztondo'),
(219, 14, 'Villasis'),
(220, 15, 'Basco'),
(221, 15, 'Itbayat'),
(222, 15, 'Ivana'),
(223, 15, 'Mahatao'),
(224, 15, 'Sabtang'),
(225, 15, 'Uyugan'),
(226, 16, 'Tuguegarao City'),
(227, 16, 'Abulug'),
(228, 16, 'Alcala'),
(229, 16, 'Allacapan'),
(230, 16, 'Amulung'),
(231, 16, 'Aparri'),
(232, 16, 'Baggao'),
(233, 16, 'Ballesteros'),
(234, 16, 'Buguey'),
(235, 16, 'Calayan'),
(236, 16, 'Camalaniugan'),
(237, 16, 'Claveria'),
(238, 16, 'Enrile'),
(239, 16, 'Gattaran'),
(240, 16, 'Gonzaga'),
(241, 16, 'Iguig'),
(242, 16, 'Lal-Lo'),
(243, 16, 'Lasam'),
(244, 16, 'Pamplona'),
(245, 16, 'Peñablanca'),
(246, 16, 'Piat'),
(247, 16, 'Rizal'),
(248, 16, 'Sanchez-Mira'),
(249, 16, 'Santa Ana'),
(250, 16, 'Santa Praxedes'),
(251, 16, 'Santa Teresita'),
(252, 16, 'Santo Niño (Faire)'),
(253, 16, 'Solana'),
(254, 16, 'Tuao'),
(255, 17, 'Cauayan City'),
(256, 17, 'Ilagan City'),
(257, 17, 'Santiago City'),
(258, 17, 'Alicia'),
(259, 17, 'Angadanan'),
(260, 17, 'Aurora'),
(261, 17, 'Benito Soliven'),
(262, 17, 'Burgos'),
(263, 17, 'Cabagan'),
(264, 17, 'Cabatuan'),
(265, 17, 'Cordon'),
(266, 17, 'Delfin Albano'),
(267, 17, 'Dinapigue'),
(268, 17, 'Divilican'),
(269, 17, 'Echague'),
(270, 17, 'Gamu'),
(271, 17, 'Jones'),
(272, 17, 'Luna'),
(273, 17, 'Maconacon'),
(274, 17, 'Mallig'),
(275, 17, 'Naguilian'),
(276, 17, 'Palanan'),
(277, 17, 'Quezon'),
(278, 17, 'Quirino'),
(279, 17, 'Ramon'),
(280, 17, 'Reina Mercedes'),
(281, 17, 'Roxas'),
(282, 17, 'San Agustin'),
(283, 17, 'San Guillermo'),
(284, 17, 'San Isidro'),
(285, 17, 'San Manuel'),
(286, 17, 'San Mariano'),
(287, 17, 'San Mateo'),
(288, 17, 'San Pablo'),
(289, 17, 'Santa Maria'),
(290, 17, 'Santo Tomas'),
(291, 17, 'Tumauini'),
(292, 18, 'Alfonso Castañeda'),
(293, 18, 'Ambaguio'),
(294, 18, 'Aritao'),
(295, 18, 'Bagabag'),
(296, 18, 'Bambang'),
(297, 18, 'Bayombong'),
(298, 18, 'Diadi'),
(299, 18, 'Dupax del Norte'),
(300, 18, 'Dupax del Sur'),
(301, 18, 'Kasibu'),
(302, 18, 'Kayapa'),
(303, 18, 'Quezon'),
(304, 18, 'Santa Fe'),
(305, 18, 'Solano'),
(306, 18, 'Villaverde'),
(307, 19, 'Aglipay'),
(308, 19, 'Cabarroguis (capital)'),
(309, 19, 'Diffun'),
(310, 19, 'Maddela'),
(311, 19, 'Nagtipunan'),
(312, 19, 'Saguday'),
(313, 20, 'Baler'),
(314, 20, 'Casiguran'),
(315, 20, 'Dilasag'),
(316, 20, 'Dinalungan'),
(317, 20, 'Dingalan'),
(318, 20, 'Dipaculao'),
(319, 20, 'Maria Aurora'),
(320, 20, 'San Luis'),
(321, 21, 'Balanga City'),
(322, 21, 'Abucay'),
(323, 21, 'Bagac'),
(324, 21, 'Dinalupihan'),
(325, 21, 'Hermosa'),
(326, 21, 'Limay'),
(327, 21, 'Mariveles'),
(328, 21, 'Morong'),
(329, 21, 'Orani'),
(330, 21, 'Orion'),
(331, 21, 'Pilar'),
(332, 21, 'Samal'),
(333, 22, 'Angat'),
(334, 22, 'Balagtas (Bigaa)'),
(335, 22, 'Baliuag'),
(336, 22, 'Bocaue'),
(337, 22, 'Bulakan'),
(338, 22, 'Bustos'),
(339, 22, 'Calumpit'),
(340, 22, 'Doña Remedios Trinidad'),
(341, 22, 'Guiguinto'),
(342, 22, 'Hagonoy'),
(343, 22, 'Malolos City'),
(344, 22, 'Marilao'),
(345, 22, 'Meycauayan City'),
(346, 22, 'Norzagaray'),
(347, 22, 'Obando'),
(348, 22, 'Pandi'),
(349, 22, 'Paombong'),
(350, 22, 'Plaridel'),
(351, 22, 'Pulilan'),
(352, 22, 'San Ildefonso'),
(353, 22, 'San Jose del Monte'),
(354, 22, 'San Miguel'),
(355, 22, 'San Rafael'),
(356, 22, 'Santa Maria'),
(357, 23, 'Cabanatuan City'),
(358, 23, 'Gapan City'),
(359, 23, 'Palayan City'),
(360, 23, 'San Jose City'),
(361, 23, 'Muñoz City'),
(362, 23, 'Aliaga'),
(363, 23, 'Bongabon'),
(364, 23, 'Cabiao'),
(365, 23, 'Carranglan'),
(366, 23, 'Cuyapo'),
(367, 23, 'Gabaldon'),
(368, 23, 'Gen. Mamerto Natividad'),
(369, 23, 'Guimba'),
(370, 23, 'General Tinio'),
(371, 23, 'Jaén'),
(372, 23, 'Laur'),
(373, 23, 'Licab'),
(374, 23, 'Llanera'),
(375, 23, 'Lupao'),
(376, 23, 'Nampicuan'),
(377, 23, 'Pantabangan'),
(378, 23, 'Peñaranda'),
(379, 23, 'Quezon'),
(380, 23, 'Rizal'),
(381, 23, 'San Antonio'),
(382, 23, 'San Isidro'),
(383, 23, 'San Leonardo'),
(384, 23, 'Santa Rosa'),
(385, 23, 'Santo Domingo'),
(386, 23, 'Talavera'),
(387, 23, 'Talugtug'),
(388, 23, 'Zaragoza'),
(389, 24, 'Angeles City'),
(390, 24, 'San Fernando City'),
(391, 24, 'Mabalacat City'),
(392, 24, 'Apalit'),
(393, 24, 'Arayat'),
(394, 24, 'Bacolor'),
(395, 24, 'Candaba'),
(396, 24, 'Floridablanca'),
(397, 24, 'Guagua'),
(398, 24, 'Lubao'),
(399, 24, 'Macabebe'),
(400, 24, 'Magalang'),
(401, 24, 'Masantol'),
(402, 24, 'Mexico'),
(403, 24, 'Minalin'),
(404, 24, 'Porac'),
(405, 24, 'San Luis'),
(406, 24, 'San Simon'),
(407, 24, 'Santa Ana'),
(408, 24, 'Santa Rita'),
(409, 24, 'Santo Tomas'),
(410, 24, 'Sasmuan'),
(411, 25, 'Tarlac City'),
(412, 25, 'Concepcion'),
(413, 25, 'Capas'),
(414, 25, 'Paniqui'),
(415, 25, 'Gerona'),
(416, 25, 'Camiling'),
(417, 25, 'Bamban'),
(418, 25, 'La Paz'),
(419, 25, 'Victoria'),
(420, 25, 'Moncada'),
(421, 25, 'Santa Ignacia'),
(422, 25, 'San Jose'),
(423, 25, 'Mayantoc'),
(424, 25, 'San Manuel'),
(425, 25, 'Pura'),
(426, 25, 'Ramos'),
(427, 25, 'San Clemente'),
(428, 25, 'Anao'),
(429, 26, 'Olongapo City'),
(430, 26, 'Subic'),
(431, 26, 'Castillejos'),
(432, 26, 'San Marcelino'),
(433, 26, 'San Antonio'),
(434, 26, 'San Narciso'),
(435, 26, 'San Felipe'),
(436, 26, 'Cabangan'),
(437, 26, 'Botolan'),
(438, 26, 'Iba'),
(439, 26, 'Palauig'),
(440, 26, 'Masinloc'),
(441, 26, 'Candelaria'),
(442, 26, 'Santa Cruz'),
(443, 27, 'Batangas City'),
(444, 27, 'Lipa City'),
(445, 27, 'Tanauan City'),
(446, 27, 'Agoncillo'),
(447, 27, 'Alitagtag'),
(448, 27, 'Balayan'),
(449, 27, 'Balete'),
(450, 27, 'Bauan'),
(451, 27, 'Calaca'),
(452, 27, 'Calatagan'),
(453, 27, 'Cuenca'),
(454, 27, 'Ibaan'),
(455, 27, 'Laurel'),
(456, 27, 'Lemery'),
(457, 27, 'Lian'),
(458, 27, 'Lobo'),
(459, 27, 'Mabini'),
(460, 27, 'Malvar'),
(461, 27, 'Mataasnakahoy'),
(462, 27, 'Nasugbu'),
(463, 27, 'Padre Garcia'),
(464, 27, 'Rosario'),
(465, 27, 'San Jose'),
(466, 27, 'San Juan'),
(467, 27, 'San Luis'),
(468, 27, 'San Nicolas'),
(469, 27, 'San Pascual'),
(470, 27, 'Santa Teresita'),
(471, 27, 'Santo Tomas'),
(472, 27, 'Taal'),
(473, 27, 'Talisay'),
(474, 27, 'Taysan'),
(475, 27, 'Tingloy'),
(476, 27, 'Tuy'),
(477, 28, 'Bacoor'),
(478, 28, 'Cavite City'),
(479, 28, 'Dasmariñas'),
(480, 28, 'Imus'),
(481, 28, 'Tagaytay'),
(482, 28, 'Trece Martires'),
(483, 28, 'Alfonso'),
(484, 28, 'Amadeo'),
(485, 28, 'Carmona'),
(486, 28, 'General Emilio Aguinaldo'),
(487, 28, 'General Mariano Alvarez'),
(488, 28, 'General Trias'),
(489, 28, 'Indang'),
(490, 28, 'Kawit'),
(491, 28, 'Magallanes'),
(492, 28, 'Maragondon'),
(493, 28, 'Mendez'),
(494, 28, 'Naic'),
(495, 28, 'Noveleta'),
(496, 28, 'Rosario'),
(497, 28, 'Silang'),
(498, 28, 'Tanza'),
(499, 28, 'Ternate'),
(500, 29, 'Biñan'),
(501, 29, 'Cabuyao'),
(502, 29, 'Calamba'),
(503, 29, 'San Pablo'),
(504, 29, 'San Pedro'),
(505, 29, 'Santa Rosa'),
(506, 29, 'Alaminos'),
(507, 29, 'Bay'),
(508, 29, 'Calauan'),
(509, 29, 'Cavinti'),
(510, 29, 'Famy'),
(511, 29, 'Kalayaan'),
(512, 29, 'Liliw'),
(513, 29, 'Los Baños 1'),
(514, 29, 'Luisiana'),
(515, 29, 'Lumban'),
(516, 29, 'Mabitac'),
(517, 29, 'Magdalena'),
(518, 29, 'Majayjay'),
(519, 29, 'Nagcarlan'),
(520, 29, 'Paete'),
(521, 29, 'Pagsanjan'),
(522, 29, 'Pakil'),
(523, 29, 'Pangil'),
(524, 29, 'Pila'),
(525, 29, 'Rizal'),
(526, 29, 'Santa Cruz'),
(527, 29, 'Santa Maria'),
(528, 29, 'Siniloan'),
(529, 29, 'Victoria'),
(530, 30, 'Burdeos'),
(531, 30, 'General Nakar'),
(532, 30, 'Infanta'),
(533, 30, 'Jomalig'),
(534, 30, 'Lucban'),
(535, 30, 'Mauban'),
(536, 30, 'Pagbilao'),
(537, 30, 'Panukulan'),
(538, 30, 'Patnanungan'),
(539, 30, 'Polillo'),
(540, 30, 'Real'),
(541, 30, 'Sampaloc'),
(542, 30, 'Tayabas City'),
(543, 30, 'Candelaria'),
(544, 30, 'Dolores'),
(545, 30, 'Lucena City'),
(546, 30, 'San Antonio'),
(547, 30, 'Sariaya'),
(548, 30, 'Tiaong'),
(549, 30, 'Agdangan'),
(550, 30, 'Buenavista'),
(551, 30, 'Catanauan'),
(552, 30, 'General Luna'),
(553, 30, 'Macalelon'),
(554, 30, 'Mulanay'),
(555, 30, 'Padre Burgos'),
(556, 30, 'Pitogo'),
(557, 30, 'San Andres'),
(558, 30, 'San Francisco'),
(559, 30, 'San Narciso'),
(560, 30, 'Unisan'),
(561, 30, 'Alabat'),
(562, 30, 'Atimonan'),
(563, 30, 'Calauag'),
(564, 30, 'Guinayangan'),
(565, 30, 'Gumaca'),
(566, 30, 'Lopez'),
(567, 30, 'Perez'),
(568, 30, 'Plaridel'),
(569, 30, 'Quezon'),
(570, 30, 'Tagkawayan'),
(571, 31, 'Angono'),
(572, 31, 'Antipolo City'),
(573, 31, 'Baras'),
(574, 31, 'Binangonan'),
(575, 31, 'Cainta'),
(576, 31, 'Cardona'),
(577, 31, 'Jalajala'),
(578, 31, 'Morong'),
(579, 31, 'Pililla'),
(580, 31, 'Rodriguez (Montalban)'),
(581, 31, 'San Mateo'),
(582, 31, 'Tanay'),
(583, 31, 'Taytay'),
(584, 31, 'Teresa'),
(585, 32, 'Boac'),
(586, 32, 'Buenavista'),
(587, 32, 'Gasan'),
(588, 32, 'Mogpog'),
(589, 32, 'Santa Cruz'),
(590, 32, 'Torrijos'),
(591, 33, 'Abra de Ilog'),
(592, 33, 'Calintaan'),
(593, 33, 'Looc'),
(594, 33, 'Lubang'),
(595, 33, 'Magsaysay'),
(596, 33, 'Mamburao'),
(597, 33, 'Paluan'),
(598, 33, 'Rizal'),
(599, 33, 'Sablayan'),
(600, 33, 'San Jose'),
(601, 33, 'Santa Cruz'),
(602, 34, 'Calapan City'),
(603, 34, 'Baco'),
(604, 34, 'Bansud'),
(605, 34, 'Bongabong'),
(606, 34, 'Bulalacao'),
(607, 34, 'Gloria'),
(608, 34, 'Mansalay'),
(609, 34, 'Naujan'),
(610, 34, 'Pinamalayan'),
(611, 34, 'Pola'),
(612, 34, 'Puerto Galera'),
(613, 34, 'Roxas'),
(614, 34, 'San Teodoro'),
(615, 34, 'Socorro'),
(616, 34, 'Victoria'),
(617, 35, 'Aborlan'),
(618, 35, 'Agutaya'),
(619, 35, 'Araceli'),
(620, 35, 'Balabac'),
(621, 35, 'Bataraza'),
(622, 35, 'Brooke''s Point'),
(623, 35, 'Busuanga'),
(624, 35, 'Cagayancillo'),
(625, 35, 'Coron'),
(626, 35, 'Culion'),
(627, 35, 'Cuyo'),
(628, 35, 'Dumaran'),
(629, 35, 'El Nido'),
(630, 35, 'Kalayaan'),
(631, 35, 'Linapacan'),
(632, 35, 'Magsaysay'),
(633, 35, 'Narra'),
(634, 35, 'Puerto Princesa'),
(635, 35, 'Quezon'),
(636, 35, 'Rizal'),
(637, 35, 'Roxas'),
(638, 35, 'San Vicente'),
(639, 35, 'Sofronio Española'),
(640, 35, 'Taytay'),
(641, 36, 'Alcantara'),
(642, 36, 'Banton'),
(643, 36, 'Cajidiocan'),
(644, 36, 'Calatrava'),
(645, 36, 'Concepcion'),
(646, 36, 'Corcuera'),
(647, 36, 'Ferrol'),
(648, 36, 'Looc'),
(649, 36, 'Magdiwang'),
(650, 36, 'Odiongan'),
(651, 36, 'Romblon'),
(652, 36, 'San Agustin'),
(653, 36, 'San Andres'),
(654, 36, 'San Fernando'),
(655, 36, 'San Jose'),
(656, 36, 'Santa Fe'),
(657, 36, 'Santa Maria'),
(658, 37, 'Bacacay'),
(659, 37, 'Camalig'),
(660, 37, 'Daraga'),
(661, 37, 'Guinobatan'),
(662, 37, 'Jovellar'),
(663, 37, 'Legazpi City'),
(664, 37, 'Libon'),
(665, 37, 'Ligao City'),
(666, 37, 'Malilipot'),
(667, 37, 'Malinao'),
(668, 37, 'Manito'),
(669, 37, 'Oas'),
(670, 37, 'Pio Duran'),
(671, 37, 'Polangui'),
(672, 37, 'Rapu-Rapu'),
(673, 37, 'Santo Domingo'),
(674, 37, 'Tabaco City'),
(675, 37, 'Tiwi'),
(676, 38, 'Basud'),
(677, 38, 'Capalonga'),
(678, 38, 'Daet'),
(679, 38, 'Jose Panganiban'),
(680, 38, 'Labo'),
(681, 38, 'Mercedes'),
(682, 38, 'Paracale'),
(683, 38, 'San Lorenzo Ruiz'),
(684, 38, 'San Vicente'),
(685, 38, 'Santa Elena'),
(686, 38, 'Talisay'),
(687, 38, 'Vinzons'),
(688, 39, 'Baao'),
(689, 39, 'Balatan'),
(690, 39, 'Bato'),
(691, 39, 'Bombon'),
(692, 39, 'Buhi'),
(693, 39, 'Bula'),
(694, 39, 'Cabusao'),
(695, 39, 'Calabanga'),
(696, 39, 'Camaligan'),
(697, 39, 'Canaman'),
(698, 39, 'Caramoan'),
(699, 39, 'Del Gallego'),
(700, 39, 'Gainza'),
(701, 39, 'Garchitorena'),
(702, 39, 'Goa'),
(703, 39, 'Iriga City'),
(704, 39, 'Lagonoy'),
(705, 39, 'Libmanan'),
(706, 39, 'Lupi'),
(707, 39, 'Magarao'),
(708, 39, 'Milaor'),
(709, 39, 'Minalabac'),
(710, 39, 'Nabua'),
(711, 39, 'Naga City'),
(712, 39, 'Ocampo'),
(713, 39, 'Pamplona'),
(714, 39, 'Pasacao'),
(715, 39, 'Pili'),
(716, 39, 'Presentacion'),
(717, 39, 'Ragay'),
(718, 39, 'Sagñay'),
(719, 39, 'San Fernando'),
(720, 39, 'San Jose'),
(721, 39, 'Sipocot'),
(722, 39, 'Siruma'),
(723, 39, 'Tigaon'),
(724, 39, 'Tinambac'),
(725, 40, 'Bagamanoc'),
(726, 40, 'Baras'),
(727, 40, 'Bato'),
(728, 40, 'Caramoran'),
(729, 40, 'Gigmoto'),
(730, 40, 'Pandan'),
(731, 40, 'Panganiban '),
(732, 40, 'San Andres '),
(733, 40, 'San Miguel'),
(734, 40, 'Viga'),
(735, 40, 'Virac'),
(736, 41, 'Aroroy'),
(737, 41, 'Baleno'),
(738, 41, 'Balud'),
(739, 41, 'Batuan'),
(740, 41, 'Cataingan'),
(741, 41, 'Cawayan'),
(742, 41, 'Claveria'),
(743, 41, 'Dimasalang'),
(744, 41, 'Esperanza'),
(745, 41, 'Mandaon'),
(746, 41, 'Masbate City'),
(747, 41, 'Milagros'),
(748, 41, 'Mobo'),
(749, 41, 'Monreal'),
(750, 41, 'Palanas'),
(751, 41, 'Pio V. Corpuz'),
(752, 41, 'Placer'),
(753, 41, 'San Fernando'),
(754, 41, 'San Jacinto'),
(755, 41, 'San Pascual'),
(756, 41, 'Uson'),
(757, 42, 'Barcelona'),
(758, 42, 'Bulan'),
(759, 42, 'Bulusan'),
(760, 42, 'Casiguran'),
(761, 42, 'Castilla'),
(762, 42, 'Donsol'),
(763, 42, 'Gubat'),
(764, 42, 'Irosin'),
(765, 42, 'Juban'),
(766, 42, 'Magallanes'),
(767, 42, 'Matnog'),
(768, 42, 'Pilar'),
(769, 42, 'Prieto Diaz'),
(770, 42, 'Santa Magdalena'),
(771, 42, 'Sorsogon City'),
(772, 43, 'Altavas'),
(773, 43, 'Balete'),
(774, 43, 'Banga'),
(775, 43, 'Batan'),
(776, 43, 'Buruanga'),
(777, 43, 'Ibajay'),
(778, 43, 'Kalibo'),
(779, 43, 'Lezo'),
(780, 43, 'Libacao'),
(781, 43, 'Madalag'),
(782, 43, 'Makato'),
(783, 43, 'Malay'),
(784, 43, 'Malinao'),
(785, 43, 'Nabas'),
(786, 43, 'New Washington'),
(787, 43, 'Numancia'),
(788, 43, 'Tangalan'),
(789, 44, 'Anini-y'),
(790, 44, 'Barbaza'),
(791, 44, 'Belison'),
(792, 44, 'Bugasong'),
(793, 44, 'Caluya'),
(794, 44, 'Culasi'),
(795, 44, 'Hamtic'),
(796, 44, 'Laua-an'),
(797, 44, 'Libertad'),
(798, 44, 'Pandan'),
(799, 44, 'Patnongon'),
(800, 44, 'San Jose de Buenavista'),
(801, 44, 'San Remigio'),
(802, 44, 'Sebaste'),
(803, 44, 'Sibalom'),
(804, 44, 'Tibiao'),
(805, 44, 'Tobias Fornier'),
(806, 44, 'Valderrama'),
(807, 45, 'Roxas City'),
(808, 45, 'Cuartero'),
(809, 45, 'Dao'),
(810, 45, 'Dumalag'),
(811, 45, 'Dumarao'),
(812, 45, 'Ivisan'),
(813, 45, 'Jamindan'),
(814, 45, 'Maayon'),
(815, 45, 'Mambusao'),
(816, 45, 'Panay'),
(817, 45, 'Panitan'),
(818, 45, 'Pilar'),
(819, 45, 'Pontevedra'),
(820, 45, 'President Roxas'),
(821, 45, 'Sapian'),
(822, 45, 'Sigma'),
(823, 45, 'Tapaz'),
(824, 46, 'Buenavista'),
(825, 46, 'Jordan'),
(826, 46, 'Nueva Valencia'),
(827, 46, 'San Lorenzo'),
(828, 46, 'Sibunag'),
(829, 47, 'Iloilo City'),
(830, 47, 'Passi City'),
(831, 47, 'Ajuy'),
(832, 47, 'Alimodian'),
(833, 47, 'Anilao'),
(834, 47, 'Badiangan'),
(835, 47, 'Balasan'),
(836, 47, 'Banate'),
(837, 47, 'Barotac Nuevo'),
(838, 47, 'Barotac Viejo'),
(839, 47, 'Batad'),
(840, 47, 'Bingawan'),
(841, 47, 'Cabatuan'),
(842, 47, 'Calinog'),
(843, 47, 'Carles'),
(844, 47, 'Concepcion'),
(845, 47, 'Dingle'),
(846, 47, 'Dueñas'),
(847, 47, 'Dumangas'),
(848, 47, 'Estancia'),
(849, 47, 'Guimbal'),
(850, 47, 'Igbaras'),
(851, 47, 'Janiuay'),
(852, 47, 'Lambunao'),
(853, 47, 'Leganes'),
(854, 47, 'Lemery'),
(855, 47, 'Leon'),
(856, 47, 'Maasin'),
(857, 47, 'Miagao'),
(858, 47, 'Mina'),
(859, 47, 'New Lucena'),
(860, 47, 'Oton'),
(861, 47, 'Pavia'),
(862, 47, 'Pototan'),
(863, 47, 'San Dionisio'),
(864, 47, 'San Enrique'),
(865, 47, 'San Joaquin'),
(866, 47, 'San Miguel'),
(867, 47, 'San Rafael'),
(868, 47, 'Santa Barbara'),
(869, 47, 'Sara'),
(870, 47, 'Tigbauan'),
(871, 47, 'Tubungan'),
(872, 47, 'Zarraga'),
(873, 48, 'Bacolod'),
(874, 48, 'Bago'),
(875, 48, 'Cadiz'),
(876, 48, 'Escalante'),
(877, 48, 'Himamaylan'),
(878, 48, 'Kabankalan'),
(879, 48, 'La Carlota'),
(880, 48, 'Sagay'),
(881, 48, 'San Carlos'),
(882, 48, 'Silay'),
(883, 48, 'Sipalay'),
(884, 48, 'Talisay'),
(885, 48, 'Victorias'),
(886, 48, 'Binalbagan'),
(887, 48, 'Calatrava'),
(888, 48, 'Candoni'),
(889, 48, 'Cauayan'),
(890, 48, 'Enrique B. Magalona'),
(891, 48, 'Hinigaran'),
(892, 48, 'Hinoba-an'),
(893, 48, 'Ilog'),
(894, 48, 'Isabela'),
(895, 48, 'La Castellana'),
(896, 48, 'Manapla'),
(897, 48, 'Moises Padilla'),
(898, 48, 'Murcia'),
(899, 48, 'Pontevedra'),
(900, 48, 'Pulupandan'),
(901, 48, 'Salvador Benedicto'),
(902, 48, 'San Enrique'),
(903, 48, 'Toboso'),
(904, 48, 'Valladolid'),
(905, 49, 'Tagbilaran City'),
(906, 49, 'Alburquerque'),
(907, 49, 'Antequera'),
(908, 49, ' Baclayon'),
(909, 49, ' Balilihan'),
(910, 49, 'Calape'),
(911, 49, ' Catigbian'),
(912, 49, ' Corella'),
(913, 49, 'Cortes'),
(914, 49, 'Dauis'),
(915, 49, ' Loon'),
(916, 49, 'Maribojoc'),
(917, 49, 'Panglao'),
(918, 49, 'Sikatuna'),
(919, 49, 'Tubigon'),
(920, 49, 'Bien Unido'),
(921, 49, ' Buenavista'),
(922, 49, ' Clarin'),
(923, 49, ' Dagohoy'),
(924, 49, 'Danao'),
(925, 49, ' Getafe'),
(926, 49, 'Inabanga'),
(927, 49, ' Pres. Carlos P. Garcia'),
(928, 49, ' Sagbayan'),
(929, 49, ' San Isidro'),
(930, 49, 'San Miguel'),
(931, 49, ' Talibon'),
(932, 49, ' Trinidad'),
(933, 49, 'Ubay'),
(934, 49, 'Alicia'),
(935, 49, ' Anda'),
(936, 49, 'Batuan'),
(937, 49, 'Bilar'),
(938, 49, 'Candijay'),
(939, 49, ' Carmen'),
(940, 49, 'Dimiao'),
(941, 49, ' Duero'),
(942, 49, ' Garcia Hernandez'),
(943, 49, ' Guindulman'),
(944, 49, ' Jagna'),
(945, 49, 'Lila'),
(946, 49, ' Loay'),
(947, 49, 'Loboc'),
(948, 49, 'Mabini, Pilar'),
(949, 49, 'Sevilla'),
(950, 49, ' Sierra Bullones'),
(951, 49, 'Valencia'),
(952, 50, 'Danao City'),
(953, 50, 'Talisay City'),
(954, 50, 'Toledo City'),
(955, 50, 'Bogo City'),
(956, 50, 'Carcar City'),
(957, 50, 'Naga City'),
(958, 50, 'Alcantara'),
(959, 50, 'Alcoy'),
(960, 50, 'Alegria'),
(961, 50, 'Aloguinsan'),
(962, 50, 'Argao'),
(963, 50, 'Asturias'),
(964, 50, 'Badian'),
(965, 50, 'Balamban'),
(966, 50, 'Bantayan'),
(967, 50, 'Barili'),
(968, 50, 'Boljoon'),
(969, 50, 'Borbon'),
(970, 50, 'Carmen'),
(971, 50, 'Catmon'),
(972, 50, 'Compostela'),
(973, 50, 'Consolacion'),
(974, 50, 'Cordova'),
(975, 50, 'Daanbantayan'),
(976, 50, 'Dalaguete'),
(977, 50, 'Dumanjug'),
(978, 50, 'Ginatilan'),
(979, 50, 'Liloan'),
(980, 50, 'Madridejos'),
(981, 50, 'Malabuyoc'),
(982, 50, 'Medellin'),
(983, 50, 'Minglanilla'),
(984, 50, 'Moalboal'),
(985, 50, 'Oslob'),
(986, 50, 'Pilar'),
(987, 50, 'Pinamungajan'),
(988, 50, 'Poro'),
(989, 50, 'Ronda'),
(990, 50, 'Samboan'),
(991, 50, 'San Fernando'),
(992, 50, 'San Francisco'),
(993, 50, 'San Remigio'),
(994, 50, 'Santa Fe'),
(995, 50, 'Santander'),
(996, 50, 'Sibonga'),
(997, 50, 'Sogod'),
(998, 50, 'Tabogon'),
(999, 50, 'Tabuelan'),
(1000, 50, 'Tuburan'),
(1001, 50, 'Tudela'),
(1002, 50, 'Lapu-Lapu City'),
(1003, 50, 'Mandaue City'),
(1004, 51, 'Bais City'),
(1005, 51, 'Bayawan City'),
(1006, 51, 'Canlaon City'),
(1007, 51, 'Dumaguete City'),
(1008, 51, 'Guihulngan City'),
(1009, 51, 'Tanjay City'),
(1010, 51, 'Amlan'),
(1011, 51, 'Ayungon'),
(1012, 51, 'Bacong'),
(1013, 51, 'Basay'),
(1014, 51, 'Bindoy'),
(1015, 51, 'Dauin'),
(1016, 51, 'Jimalalud'),
(1017, 51, 'La Libertad'),
(1018, 51, 'Mabinay'),
(1019, 51, 'Manjuyod'),
(1020, 51, 'Pamplona'),
(1021, 51, 'San Jose'),
(1022, 51, 'Santa Catalina'),
(1023, 51, 'Siaton'),
(1024, 51, 'Sibulan'),
(1025, 51, 'Tayasan'),
(1026, 51, 'Valencia'),
(1027, 51, 'Vallehermoso'),
(1028, 51, 'Zamboanguita'),
(1029, 52, 'Enrique Villanueva'),
(1030, 52, 'Larena'),
(1031, 52, 'Lazi'),
(1032, 52, 'Maria'),
(1033, 52, 'San Juan'),
(1034, 52, 'Siquijor'),
(1035, 53, 'Almeria'),
(1036, 53, 'Biliran'),
(1037, 53, 'Cabucgayan'),
(1038, 53, 'Caibiran'),
(1039, 53, 'Culaba'),
(1040, 53, 'Kawayan'),
(1041, 53, 'Maripipi'),
(1042, 53, 'Naval'),
(1043, 54, 'Borongan City'),
(1044, 54, 'Arteche'),
(1045, 54, 'Balangiga'),
(1046, 54, 'Balangkayan'),
(1047, 54, 'Can-avid'),
(1048, 54, 'Dolores'),
(1049, 54, 'General MacArthur'),
(1050, 54, 'Giporlos'),
(1051, 54, 'Guiuan'),
(1052, 54, 'Hernani'),
(1053, 54, 'Jipapad'),
(1054, 54, 'Lawaan'),
(1055, 54, 'Llorente'),
(1056, 54, 'Maslog'),
(1057, 54, 'Maydolong'),
(1058, 54, 'Mercedes'),
(1059, 54, 'Oras'),
(1060, 54, 'Quinapondan'),
(1061, 54, 'Salcedo'),
(1062, 54, 'San Julian'),
(1063, 54, 'San Policarpo'),
(1064, 54, 'Sulat'),
(1065, 54, 'Taft'),
(1066, 55, 'Tacloban'),
(1067, 55, 'Baybay'),
(1068, 55, 'Ormoc'),
(1069, 55, 'Abuyog'),
(1070, 55, 'Alangalang'),
(1071, 55, 'Albuera'),
(1072, 55, 'Babatngon'),
(1073, 55, 'Barugo'),
(1074, 55, 'Bato'),
(1075, 55, 'Burauen'),
(1076, 55, 'Calubian'),
(1077, 55, 'Capoocan'),
(1078, 55, 'Carigara'),
(1079, 55, 'Dagami'),
(1080, 55, 'Dulag'),
(1081, 55, 'Hilongos'),
(1082, 55, 'Hindang'),
(1083, 55, 'Inopacan'),
(1084, 55, 'Isabel'),
(1085, 55, 'Jaro'),
(1086, 55, 'Javier'),
(1087, 55, 'Julita'),
(1088, 55, 'Kananga'),
(1089, 55, 'La Paz'),
(1090, 55, 'Leyte'),
(1091, 55, 'MacArthur'),
(1092, 55, 'Mahaplag'),
(1093, 55, 'Matag-ob'),
(1094, 55, 'Matalom'),
(1095, 55, 'Mayorga'),
(1096, 55, 'Merida'),
(1097, 55, 'Palo'),
(1098, 55, 'Palompon'),
(1099, 55, 'Pastrana'),
(1100, 55, 'San Isidro'),
(1101, 55, 'San Miguel'),
(1102, 55, 'Santa Fe'),
(1103, 55, 'Tabango'),
(1104, 55, 'Tabontabon'),
(1105, 55, 'Tanauan'),
(1106, 55, 'Tolosa'),
(1107, 55, 'Tunga'),
(1108, 55, 'Villaba'),
(1109, 56, 'Allen'),
(1110, 56, 'Biri'),
(1111, 56, 'Bobon'),
(1112, 56, 'Capul'),
(1113, 56, 'Catarman'),
(1114, 56, 'Catubig'),
(1115, 56, 'Gamay'),
(1116, 56, 'Laoang'),
(1117, 56, 'Lapinig'),
(1118, 56, 'Las Navas'),
(1119, 56, 'Lavezares'),
(1120, 56, 'Lope de Vega'),
(1121, 56, 'Mapanas'),
(1122, 56, 'Mondragon'),
(1123, 56, 'Palapag'),
(1124, 56, 'Pambujan'),
(1125, 56, 'Rosario'),
(1126, 56, 'San Antonio'),
(1127, 56, 'San Isidro'),
(1128, 56, 'San Jose'),
(1129, 56, 'San Roque'),
(1130, 56, 'San Vicente'),
(1131, 56, 'Silvino Lobos'),
(1132, 56, 'Victoria'),
(1133, 57, 'Calbayog'),
(1134, 57, 'Catbalogan'),
(1135, 57, 'Almagro'),
(1136, 57, 'Basey'),
(1137, 57, 'Calbiga'),
(1138, 57, 'Daram'),
(1139, 57, 'Gandara'),
(1140, 57, 'Hinabangan'),
(1141, 57, 'Jiabong'),
(1142, 57, 'Marabut'),
(1143, 57, 'Matuguinao'),
(1144, 57, 'Motiong'),
(1145, 57, 'Pagsanghan'),
(1146, 57, 'Paranas'),
(1147, 57, 'Pinabacdao'),
(1148, 57, 'San Jorge'),
(1149, 57, 'San Jose de Buan'),
(1150, 57, 'San Sebastian'),
(1151, 57, 'Santa Margarita'),
(1152, 57, 'Santa Rita'),
(1153, 57, 'Santo Niño'),
(1154, 57, 'Tagapul-an'),
(1155, 57, 'Talalora'),
(1156, 57, 'Tarangnan'),
(1157, 57, 'Villareal'),
(1158, 57, 'Zumarraga'),
(1159, 58, 'Anahawan'),
(1160, 58, 'Bontoc'),
(1161, 58, 'Hinunangan'),
(1162, 58, 'Hinundayan'),
(1163, 58, 'Libagon'),
(1164, 58, 'Liloan'),
(1165, 58, 'Limasawa'),
(1166, 58, 'Maasin City'),
(1167, 58, 'Macrohon'),
(1168, 58, 'Malitbog'),
(1169, 58, 'Padre Burgos'),
(1170, 58, 'Pintuyan'),
(1171, 58, 'Saint Bernard'),
(1172, 58, 'San Francisco'),
(1173, 58, 'San Juan'),
(1174, 58, 'San Ricardo'),
(1175, 58, 'Silago'),
(1176, 58, 'Sogod'),
(1177, 58, 'Tomas Oppus'),
(1178, 59, 'Dapitan City'),
(1179, 59, 'Dipolog City'),
(1180, 59, 'Baliguian'),
(1181, 59, 'Godod'),
(1182, 59, 'Gutalac'),
(1183, 59, 'Jose Dalman (Ponot)'),
(1184, 59, 'Kalawit'),
(1185, 59, 'Katipunan'),
(1186, 59, 'La Libertad'),
(1187, 59, 'Labason'),
(1188, 59, 'Leon B. Postigo (Bacungan)'),
(1189, 59, 'Liloy'),
(1190, 59, 'Manukan'),
(1191, 59, 'Mutia'),
(1192, 59, 'Piñan'),
(1193, 59, 'Polanco'),
(1194, 59, 'Pres. Manuel A. Roxas'),
(1195, 59, 'Rizal'),
(1196, 59, 'Salug'),
(1197, 59, 'Sergio Osmeña Sr.'),
(1198, 59, 'Siayan'),
(1199, 59, 'Sibuco'),
(1200, 59, 'Sibutad'),
(1201, 59, 'Sindangan'),
(1202, 59, 'Siocon'),
(1203, 59, 'Sirawai'),
(1204, 59, 'Tampilisan'),
(1205, 60, 'Zamboanga City'),
(1206, 60, 'Pagadian City'),
(1207, 60, 'Aurora'),
(1208, 60, 'Bayog'),
(1209, 60, 'Dimataling'),
(1210, 60, 'Dinas'),
(1211, 60, 'Dumalinao'),
(1212, 60, 'Dumingag'),
(1213, 60, 'Guipos'),
(1214, 60, 'Josefina'),
(1215, 60, 'Kumalarang'),
(1216, 60, 'Labangan'),
(1217, 60, 'Lakewood'),
(1218, 60, 'Lapuyan'),
(1219, 60, 'Mahayag'),
(1220, 60, 'Margosatubig'),
(1221, 60, 'Midsalip'),
(1222, 60, 'Molave'),
(1223, 60, 'Pitogo'),
(1224, 60, 'Ramon Magsaysay (Liargo)'),
(1225, 60, 'San Miguel'),
(1226, 60, 'San Pablo'),
(1227, 60, 'Sominot (Don Mariano Marcos)'),
(1228, 60, 'Tabina'),
(1229, 60, 'Tambulig'),
(1230, 60, 'Tigbao'),
(1231, 60, 'Tukuran'),
(1232, 60, 'Vincenzo A. Sagun'),
(1233, 61, 'Alicia'),
(1234, 61, 'Buug'),
(1235, 61, 'Diplahan'),
(1236, 61, 'Imelda'),
(1237, 61, 'Ipil'),
(1238, 61, 'Kabasalan'),
(1239, 61, 'Mabuhay'),
(1240, 61, 'Malangas'),
(1241, 61, 'Naga'),
(1242, 61, 'Olutanga'),
(1243, 61, 'Payao'),
(1244, 61, 'Roseller T. Lim'),
(1245, 61, 'Siay'),
(1246, 61, 'Talusan'),
(1247, 61, 'Titay'),
(1248, 61, 'Tungawan'),
(1249, 62, 'Baungon'),
(1250, 62, 'Cabanglasan'),
(1251, 62, 'Damulog'),
(1252, 62, 'Dangcagan'),
(1253, 62, 'Don Carlos'),
(1254, 62, 'Impasugong'),
(1255, 62, 'Kadingilan'),
(1256, 62, 'Kalilangan'),
(1257, 62, 'Kibawe'),
(1258, 62, 'Kitaotao'),
(1259, 62, 'Lantapan'),
(1260, 62, 'Libona'),
(1261, 62, 'Malaybalay City'),
(1262, 62, 'Malitbog'),
(1263, 62, 'Manolo Fortich'),
(1264, 62, 'Maramag'),
(1265, 62, 'Pangantucan'),
(1266, 62, 'Quezon'),
(1267, 62, 'San Fernando'),
(1268, 62, 'Sumilao'),
(1269, 62, 'Talakag'),
(1270, 62, 'Valencia City'),
(1271, 63, 'Catarman'),
(1272, 63, 'Guinsiliban'),
(1273, 63, 'Mahinog'),
(1274, 63, 'Mambajao'),
(1275, 63, 'Sagay'),
(1276, 64, 'Bacolod'),
(1277, 64, 'Baloi'),
(1278, 64, 'Baroy'),
(1279, 64, 'Kapatagan'),
(1280, 64, 'Kauswagan'),
(1281, 64, 'Kolambugan'),
(1282, 64, 'Lala'),
(1283, 64, 'Linamon'),
(1284, 64, 'Magsaysay'),
(1285, 64, 'Maigo'),
(1286, 64, 'Matungao'),
(1287, 64, 'Munai'),
(1288, 64, 'Nunungan'),
(1289, 64, 'Pantao Ragat'),
(1290, 64, 'Pantar'),
(1291, 64, 'Poona Piagapo'),
(1292, 64, 'Salvador'),
(1293, 64, 'Sapad'),
(1294, 64, 'Sultan Naga Dimaporo '),
(1295, 64, 'Tagoloan'),
(1296, 64, 'Tangcal'),
(1297, 64, 'Tubod '),
(1298, 65, 'Oroquieta City'),
(1299, 65, 'Ozamiz City'),
(1300, 65, 'Tangub City'),
(1301, 65, 'Aloran'),
(1302, 65, 'Baliangao'),
(1303, 65, 'Bonifacio'),
(1304, 65, 'Calamba'),
(1305, 65, 'Clarin'),
(1306, 65, 'Concepcion'),
(1307, 65, 'Don Victoriano Chiongbian'),
(1308, 65, 'Jimenez'),
(1309, 65, 'Lopez Jaena'),
(1310, 65, 'Panaon'),
(1311, 65, 'Plaridel'),
(1312, 65, 'Sapang Dalaga'),
(1313, 65, 'Sinacaban'),
(1314, 65, 'Tudela'),
(1315, 66, 'El Salvador City'),
(1316, 66, 'Gingoog City'),
(1317, 66, 'Alubijid'),
(1318, 66, 'Balingasag'),
(1319, 66, 'Balingoan'),
(1320, 66, 'Binuangan'),
(1321, 66, 'Claveria'),
(1322, 66, 'Gitagum'),
(1323, 66, 'Initao'),
(1324, 66, 'Jasaan'),
(1325, 66, 'Kinoguitan'),
(1326, 66, 'Lagonglong'),
(1327, 66, 'Laguindingan'),
(1328, 66, 'Libertad'),
(1329, 66, 'Lugait'),
(1330, 66, 'Magsaysay'),
(1331, 66, 'Manticao'),
(1332, 66, 'Medina'),
(1333, 66, 'Naawan'),
(1334, 66, 'Opol'),
(1335, 66, 'Salay'),
(1336, 66, 'Sugbongcogon'),
(1337, 66, 'Tagoloan'),
(1338, 66, 'Talisayan'),
(1339, 66, 'Villanueva'),
(1340, 67, 'Compostela'),
(1341, 67, 'Laak'),
(1342, 67, 'Mabini'),
(1343, 67, 'Maco'),
(1344, 67, 'Maragusan'),
(1345, 67, 'Mawab'),
(1346, 67, 'Monkayo'),
(1347, 67, 'Montevista'),
(1348, 67, 'Nabunturan'),
(1349, 67, 'New Bataan'),
(1350, 67, 'Pantukan'),
(1351, 68, 'Asuncion'),
(1352, 68, 'Braulio E. Dujali'),
(1353, 68, 'Carmen'),
(1354, 68, 'Kapalong'),
(1355, 68, 'New Corella'),
(1356, 68, 'Panabo City'),
(1357, 68, 'Samal City'),
(1358, 68, 'San Isidro'),
(1359, 68, 'Santo Tomas'),
(1360, 68, 'Tagum City'),
(1361, 68, 'Talaingod'),
(1362, 69, 'Davao City'),
(1363, 69, 'Digos City'),
(1364, 69, 'Bansalan'),
(1365, 69, 'Hagonoy'),
(1366, 69, 'Kiblawan'),
(1367, 69, 'Magsaysay'),
(1368, 69, 'Malalag'),
(1369, 69, 'Matanao'),
(1370, 69, 'Padada'),
(1371, 69, 'Santa Cruz'),
(1372, 69, 'Sulop'),
(1373, 70, 'Mati City'),
(1374, 70, 'Baganga'),
(1375, 70, 'Banaybanay'),
(1376, 70, 'Boston'),
(1377, 70, 'Caraga'),
(1378, 70, 'Cateel'),
(1379, 70, 'Governor Generoso'),
(1380, 70, 'Lupon'),
(1381, 70, 'Manay'),
(1382, 70, 'San Isidro'),
(1383, 70, 'Tarragona'),
(1384, 71, 'Don Marcelino'),
(1385, 71, 'Jose Abad Santos'),
(1386, 71, 'Malita'),
(1387, 71, 'Santa Maria'),
(1388, 71, 'Sarangani'),
(1389, 72, 'Alamada'),
(1390, 72, 'Aleosan'),
(1391, 72, 'Antipas'),
(1392, 72, 'Arakan'),
(1393, 72, 'Banisilan'),
(1394, 72, 'Carmen'),
(1395, 72, 'Kabacan'),
(1396, 72, 'Kidapawan City'),
(1397, 72, 'Libungan'),
(1398, 72, 'Magpet'),
(1399, 72, 'Makilala'),
(1400, 72, 'Matalam'),
(1401, 72, 'Midsayap'),
(1402, 72, 'M''lang'),
(1403, 72, 'Pigcawayan'),
(1404, 72, 'Pikit'),
(1405, 72, 'President Roxas'),
(1406, 72, 'Tulunan'),
(1407, 73, 'Alabel'),
(1408, 73, 'Glan'),
(1409, 73, 'Kiamba'),
(1410, 73, 'Maasim'),
(1411, 73, 'Maitum'),
(1412, 73, 'Malapatan'),
(1413, 73, 'Malungon'),
(1414, 74, 'General Santos'),
(1415, 74, 'Banga'),
(1416, 74, 'Koronadal'),
(1417, 74, 'Lake Sebu'),
(1418, 74, 'Norala'),
(1419, 74, 'Polomolok'),
(1420, 74, 'Sto. Niño'),
(1421, 74, 'Surallah'),
(1422, 74, 'Tampakan'),
(1423, 74, 'Tantangan'),
(1424, 74, 'T''Boli'),
(1425, 74, 'Tupi'),
(1426, 75, 'Tacurong'),
(1427, 75, 'Bagumbayan'),
(1428, 75, 'Columbio'),
(1429, 75, 'Esperanza'),
(1430, 75, 'Isulan'),
(1431, 75, 'Kalamansig'),
(1432, 75, 'Lambayong '),
(1433, 75, 'Lebak'),
(1434, 75, 'Lutayan'),
(1435, 75, 'Palimbang'),
(1436, 75, 'President Quirino'),
(1437, 75, 'Sen. Ninoy Aquino'),
(1438, 76, 'Butuan City'),
(1439, 76, 'Cabadbaran City'),
(1440, 76, 'Buenavista'),
(1441, 76, 'Carmen'),
(1442, 76, 'Jabonga'),
(1443, 76, 'Kitcharao'),
(1444, 76, 'Las Nieves'),
(1445, 76, 'Magallanes'),
(1446, 76, 'Nasipit'),
(1447, 76, 'Remedios T. Romualdez'),
(1448, 76, 'Santiago'),
(1449, 76, 'Tubay'),
(1450, 77, 'Bayugan City'),
(1451, 77, 'Bunawan'),
(1452, 77, 'Esperanza'),
(1453, 77, 'La Paz'),
(1454, 77, 'Loreto'),
(1455, 77, 'Prosperidad'),
(1456, 77, 'Rosario'),
(1457, 77, 'San Francisco'),
(1458, 77, 'San Luis'),
(1459, 77, 'Santa Josefa'),
(1460, 77, 'Sibagat'),
(1461, 77, 'Talacogon'),
(1462, 77, 'Trento'),
(1463, 77, 'Veruela'),
(1464, 78, 'Basilisa'),
(1465, 78, 'Cagdianao'),
(1466, 78, 'Dinagat'),
(1467, 78, 'Libjo '),
(1468, 78, 'Loreto'),
(1469, 78, 'Tubajon'),
(1470, 78, 'San Jose'),
(1471, 79, 'Surigao City'),
(1472, 79, 'Alegria'),
(1473, 79, 'Bacuag'),
(1474, 79, 'Burgos'),
(1475, 79, 'Claver'),
(1476, 79, 'Dapa'),
(1477, 79, 'Del Carmen'),
(1478, 79, 'General Luna'),
(1479, 79, 'Gigaquit'),
(1480, 79, 'Mainit'),
(1481, 79, 'Malimono'),
(1482, 79, 'Pilar'),
(1483, 79, 'Placer'),
(1484, 79, 'San Benito'),
(1485, 79, 'San Francisco '),
(1486, 79, 'San Isidro'),
(1487, 79, 'Santa Monica '),
(1488, 79, 'Sison'),
(1489, 79, 'Socorro'),
(1490, 79, 'Tagana-an'),
(1491, 79, 'Tubod'),
(1492, 80, 'Tandag City'),
(1493, 80, 'Bislig City'),
(1494, 80, 'Barobo'),
(1495, 80, 'Bayabas'),
(1496, 80, 'Cagwait'),
(1497, 80, 'Cantilan'),
(1498, 80, 'Carmen'),
(1499, 80, 'Carrascal'),
(1500, 80, 'Cortes'),
(1501, 80, 'Hinatuan'),
(1502, 80, 'Lanuza'),
(1503, 80, 'Lianga'),
(1504, 80, 'Lingig'),
(1505, 80, 'Madrid'),
(1506, 80, 'Marihatag'),
(1507, 80, 'San Agustin'),
(1508, 80, 'San Miguel'),
(1509, 80, 'Tagbina'),
(1510, 80, 'Tago'),
(1511, 81, 'Marawi City'),
(1512, 81, 'Bacolod-Kalawi '),
(1513, 81, 'Balabagan'),
(1514, 81, 'Balindong '),
(1515, 81, 'Bayang'),
(1516, 81, 'Binidayan'),
(1517, 81, 'Buadiposo-Buntong'),
(1518, 81, 'Bubong'),
(1519, 81, 'Bumbaran'),
(1520, 81, 'Butig'),
(1521, 81, 'Calanogas'),
(1522, 81, 'Ditsaan-Ramain'),
(1523, 81, 'Ganassi'),
(1524, 81, 'Kapai'),
(1525, 81, 'Kapatagan'),
(1526, 81, 'Lumba-Bayabao'),
(1527, 81, 'Lumbaca-Unayan'),
(1528, 81, 'Lumbatan'),
(1529, 81, 'Lumbayanague '),
(1530, 81, 'Madalum'),
(1531, 81, 'Madamba '),
(1532, 81, 'Maguing'),
(1533, 81, 'Malabang'),
(1534, 81, 'Marantao '),
(1535, 81, 'Marogong'),
(1536, 81, 'Masiu'),
(1537, 81, 'Mulondo'),
(1538, 81, 'Pagayawan'),
(1539, 81, 'Piagapo'),
(1540, 81, 'Picong'),
(1541, 81, 'Poona Bayabao'),
(1542, 81, 'Pualas'),
(1543, 81, 'Saguiaran'),
(1544, 81, 'Sultan Dumalondong'),
(1545, 81, 'Tagoloan II'),
(1546, 81, 'Tamparan'),
(1547, 81, 'Taraka'),
(1548, 81, 'Tubaran'),
(1549, 81, 'Tugaya'),
(1550, 81, 'Wao'),
(1551, 82, 'Ampatuan'),
(1552, 82, 'Barira'),
(1553, 82, 'Buldon'),
(1554, 82, 'Buluan'),
(1555, 82, 'Datu Abdullah Sangki'),
(1556, 82, 'Datu Anggal Midtimbang'),
(1557, 82, 'Datu Blah T. Sinsuat'),
(1558, 82, 'Datu Hoffer Ampatuan'),
(1559, 82, 'Datu Odin Sinsuat'),
(1560, 82, 'Datu Paglas'),
(1561, 82, 'Datu Piang'),
(1562, 82, 'Datu Salibo'),
(1563, 82, 'Datu Saudi-Ampatuan'),
(1564, 82, 'Datu Unsay'),
(1565, 82, 'Gen. S. K. Pendatun'),
(1566, 82, 'Guindulungan'),
(1567, 82, 'Kabuntalan'),
(1568, 82, 'Mamasapano'),
(1569, 82, 'Mangudadatu'),
(1570, 82, 'Matanog'),
(1571, 82, 'Northern Kabuntalan'),
(1572, 82, 'Pagagawan'),
(1573, 82, 'Pagalungan'),
(1574, 82, 'Paglat'),
(1575, 82, 'Pandag'),
(1576, 82, 'Parang'),
(1577, 82, 'Rajah Buayan'),
(1578, 82, 'Shariff Aguak (Maganoy)'),
(1579, 82, 'Shariff Saydona Mustapha'),
(1580, 82, 'South Upi'),
(1581, 82, 'Sultan Kudarat '),
(1582, 82, 'Sultan Mastura'),
(1583, 82, 'Sultan sa Barongis (Lambayong)'),
(1584, 82, 'Sultan Sumagka (Talitay)'),
(1585, 82, 'Talayan'),
(1586, 82, 'Upi'),
(1587, 83, 'Banguingui'),
(1588, 83, 'Hadji Panglima Tahil (Marunggas)'),
(1589, 83, 'Indanan'),
(1590, 83, 'Jolo'),
(1591, 83, 'Kalingalan Caluang'),
(1592, 83, 'Lugus'),
(1593, 83, 'Luuk'),
(1594, 83, 'Maimbung'),
(1595, 83, 'Old Panamao'),
(1596, 83, 'Omar'),
(1597, 83, 'Pandami'),
(1598, 83, 'Panglima Estino (New Panamao)'),
(1599, 83, 'Pangutaran'),
(1600, 83, 'Parang'),
(1601, 83, 'Pata'),
(1602, 83, 'Patikul'),
(1603, 83, 'Siasi'),
(1604, 83, 'Talipao'),
(1605, 83, 'Tapul'),
(1606, 84, 'Bongao'),
(1607, 84, 'Languyan'),
(1608, 84, 'Mapun '),
(1609, 84, 'Panglima Sugala'),
(1610, 84, 'Sapa-Sapa'),
(1611, 84, 'Sibutu'),
(1612, 84, 'Simunul '),
(1613, 84, 'Sitangkai'),
(1614, 84, 'South Ubian'),
(1615, 84, 'Tandubas'),
(1616, 84, 'Turtle Islands'),
(1617, 85, 'Akbar'),
(1618, 85, 'Al-Barka'),
(1619, 85, 'Hadji Mohammad Ajul'),
(1620, 85, 'Hadji Muhtamad'),
(1621, 85, 'Isabela City'),
(1622, 85, 'Lamitan City'),
(1623, 85, 'Lantawan'),
(1624, 85, 'Maluso'),
(1625, 85, 'Sumisip'),
(1626, 85, 'Tabuan-Lasa'),
(1627, 85, 'Tipo-Tipo'),
(1628, 85, 'Tuburan'),
(1629, 85, 'Ungkaya Pukan'),
(1630, 50, 'Cebu City'),
(1631, 66, 'Cagayan de Oro');
