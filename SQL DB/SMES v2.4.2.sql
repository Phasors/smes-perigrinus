CREATE DATABASE SMES;
USE SMES;

/* person info table */
CREATE TABLE person
(

	person_id		int AUTO_INCREMENT PRIMARY KEY,
	fname 			varchar(255),	/* first name */		
	mname			varchar(255),	/* middle name */
	lname			varchar(255),	/* last name */
	birthdate		date,		/* birth day */
	birthplace		varchar(255),/*place of birth, duh!*/
	contact_no		varchar(255),	/* contact # */
	civil_status	int, /*0-SINGLE,1-TAKEN, etc*/
	religion		varchar(255),/*your f*cking religion m*therf*cker*/
	email			varchar(225), /*user email address*/
	nationality		varchar(255),
	sex				int, /*0-MALE, 1-FEMALE */ 
	res_house_no 	varchar(50), /*residential house/building number*/
	res_strt_name 	varchar(255), /*residential street name*/
	res_barangay	varchar(255), /*residential barangay*/
	res_prov_id 	int, /*residential province, foreign key from province table*/
	res_town_id		int, /*residential city/municipality, foreign key from town table*/
	res_reg_id		int, /*residential region, foreign key from region table*/
	perm_house_no 	varchar(50), /*permanent house/building number*/
	perm_strt_name 	varchar(255), /*permanent street name*/
	perm_barangay	varchar(255), /*permanent barangay*/
	perm_prov_id 	int, /*permanent province, foreign key from province table*/
	perm_town_id	int, /*permanent city/municipalitym foreign key from town table*/
	perm_reg_id		int /*permanent region, foreign key from region table*/

);

/* Parent/Guardian info table */
CREATE TABLE prnt_grdn_info
(

	prnt_grdn_info_id		int  PRIMARY KEY auto_increment,
	person_id				int, /*foreign key from person table*/
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
	person_id 				int, /*foreign key from person table*/
	prmry_school 			varchar(225), /*primary/elementary school*/
	prmry_school_add 		varchar(225), /*primary/elementary school address*/
	ps_sy_start 			date,	/*primary/elementary school year started*/
	ps_sy_end	 			date,	/*primary/elementary school year ended*/
	scndry_school 			varchar(225), /*secondary/highschool or JHS */
	scndry_school_add 		varchar(225), /*secondary/highschool or JHS  Address*/
	ss_sy_start 			date,	/*secondary/highschool or JHS year started*/
	ss_sy_end 				date,	/*secondary/highschool or JHS year ended*/
	scndry_school_2 		varchar(225),	 /*if K-12, SHS else Null **/
	scndry_school_2_add		varchar(225),/*if K-12, SHS address else Null **/
	ss2_sy_start			date,		 /*if K-12, SHS year started else Null **/
	ss2_sy_end				date,		 /*if K-12, SHS year ended else Null **/
	trtry_school 			varchar(255),		/*if shiftee, previous college */
	trtry_school_add  		varchar(225), /*if shiftee, previous college address*/
	ts_sy_start		 		date,	/*if shiftee, previous college last school year*/
	ts_sy_end		 		date	/*if shiftee, previous college last school year*/

);

/*user table*/
CREATE TABLE users
(

	user_id				int PRIMARY KEY auto_increment,
	person_id 			int, /*foreign key from person table*/
	username			varchar(225), /*user name */ 
	pswrd				varchar(70),	/*password*/
	/* permissions		varchar(255),  eg. 1|0|1|1 have permission from all except the 2nd one*/
	category				int, /*0-student, 1-professor, 2-dean, 3-chairperson, 4-guidance, 5-library, 6-registrar, 7-admission, 8-cashier, 9-accounting, 10-super admin*/
	type 					int, /*0-regular, 1-admin, 2-assistant*/
	esign 			       varchar(255), /*location of picture from folder, pic/esign/xxx.jpg*/
	esign_pin		       int(8), /*pin of esign*/
	secondary_security_pin int(10),
	active 				   int /*0-active, 1-inactive/expired*/	

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
	status					int /*0-closed 1-pre-open, 2-closed*/

);


/*table that contains academic years*/
CREATE TABLE academic_year
(

	ay_id 		int PRIMARY KEY auto_increment,
	ay_desc		varchar(20), /*eg. 2018-2019*/
	ay_start 	int, /*eg. 2018*/
	ay_end 		int, /*eg. 2019*/
	status 	    int /*0-finished 1-current*/

);

CREATE TABLE rooms
(
	room_id	int PRIMARY KEY auto_increment,
	room_code varchar(50), /*CEA314*/
	room_name	varchar(100), /*CpE Laboratory Room*/
	building  varchar(100) /*CEA*/
);

/*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~COLLEGE TABLES~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
/* student info/record table*/
CREATE TABLE col_stdnt_info
(

	col_stdnt_info_id		int  PRIMARY KEY AUTO_INCREMENT,
	curriculum_id			int, /*foreign key from curriculum table*/
	person_id				int, /* foreign key from person table */
	/*student_level			int, /*0-jhs 1-shs 2-college*/
	/*prnt_grdn_info_id		int, 	 foreign key from prnt_grdn_info table */
	/*academics_docu_id		int,	 foreign key from academics_docu table*/	
	acad_back_info_id		int, /* foreign key from acad_back_info table */
	program_id				int, /* foreign key from program table */
	profile_pic				varchar(255),  /* picture location in folder , pic/student/xxx.jpg*/
	stdnt_no 				varchar(255), /* year admitted – student number – status [0-normal 1-transferee], academic term (based on enrollment date)  */
	year_level				int, /* current year level of student */
	/*block 				int,  assigned block/section */
	status					int, /* inactive=0, active=1 */
	/*allowed_units			int, units allowed for this student during this time */	
	graduation              int, /*0-no, 1- ready for graduation, 2- graduated*/
	indeficiency			int,	 /* 0-can enroll 1-cannot enroll */
	stdnt_standing			int, /*0-regular, 1-irregular*/
	stdnt_type				int /*0-regular, 1-shiftee, 2-transferee, 3-cross enrollee*/

);


/*table for list of loads given per student college level*/
CREATE TABLE student_load
(

	stdnt_load_id 		int PRIMARY KEY AUTO_INCREMENT,
	col_stdnt_info_id 	int, /*foreign key from student_info table*/
	ay_id				int, /*foreign key from academic_year table*/
	semester_id			int, /*foreign key from semesters table*/
	total_units			int, /*total load alloted*/
	overload_units		int, /*overload units given, 0 if none*/
	avail_units			int, /*available units left*/
	used_units			int /*units used*/

);




/*grades table of students college*/
CREATE TABLE grades
(

	grades_id 			int  PRIMARY KEY auto_increment,
	course_id	 		int, /*foreign key from course table*/
	course_schedule_id 	int, /*foreign key from course_schedule table*/
	faculty_id			int,  /*foreign key from faculty table*/
	col_stdnt_info_id	int, /*foreign key from student info table */
	schedule_id			int, /*foreign key from schedule table*/
	ay_id				int, /*foreign key from academic_year table */ 
	semester_id			int, /*foreign key from semesters table*/
	prlm_grade			decimal(10,2), /*prelim grade*/
	mdtrm_grade			decimal(10,2), /*midterm grade*/
	fnl_grade			decimal(10,2), /*final grade*/
	status 				varchar(3) /* eg. P,F,W,INC,D*/

);


/*Subject/Course list table*/
CREATE TABLE courses
(

	course_id 				int  PRIMARY KEY auto_increment,
/*	program_id 				int, /*foreign key from course table*/
/*	curriculum_id			int, /*foreign key from curriculum table*/
/*	semester_id				int, /*foreign key from semesters table*/
	course_code 			varchar(255), /*subject/coourse code*/
	course_desc				varchar(255), /*name of subject/course*/
	course_details			varchar(255), /*details of the course*/
	equivalent_course_codes	varchar(255), /*equivalent course code,can be many, separated by comma for crediting eg. "BSCOE2,IT3" etc*/
	type					int, /*0-minor 1-major*/
	lab_unit 				int(5), /* unit of laboratory*/ 
	lec_unit 				int(5), /*unit of lecture */
	total_unit				int(5), /*total units of subject*/
	hours_week				int(5), /*total hours per week*/
/*	year 					int(5), /*year of subject availability eg. 1st year 1 2nd year 2 */
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
	day 				int, /*eg. M=1,T=2 etc*/
	time_start  		time, /*time start*/
	time_end 			time, /*time end*/
	room_id 			int, /*foreign key, from rooms table*/
	category			varchar(3) /*eg. LAB LEC*/

);


/*table for student schedules for college*/
CREATE TABLE schedules
(

	schedule_id			int  PRIMARY KEY auto_increment,
	course_schedule_id	int, /*foreign key from course table*/
	faculty_id 			int, /*foreign key from faculty table*/
	/*block_id			int, /*foreign key from block table*/
	col_stdnt_info_id		int,  /*foreign key from student_info table*/
	ay_id				int, /*foreign key from academic year table*/
	semester_id			int, /*foreign key from semesters table*/
	paid				int /* paid status, 0-unpaid, 1- paid*/

);


/*student blocks*/
CREATE TABLE block
(

	block_id   		int  PRIMARY KEY auto_increment, 
	program_id 		int, /*foreign key from program table*/
	/*block_info_id	int, foreign key from block info table*/
	section 		int, /*section of class*/
	year 			int /*year of class*/

);


/*student blocks info table for college*/
CREATE TABLE block_info
(

	block_info_id     int  PRIMARY KEY auto_increment, 
	col_stdnt_info_id int, /*foreign key from student_info table*/
	block_id		  int, /*foreign key from block table*/
	ay_id			  int /*foreign key from academic table*/

);


/*colleges table*/
CREATE TABLE colleges
(

	college_id int PRIMARY KEY auto_increment,
	college_name varchar(255), /*college of lol*/
	college_code varchar(255), /*CL*/
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
	curriculum_title varchar(255), /*Curriculum Name*/
	year_added		date, /*year added*/
	status          int, /*0-disapproved, 1-pending, 2-approved*/
/*	creator			varchar(255), /*name of adder*/
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


/*table for student penalties*/
CREATE TABLE stdnt_penalties
(

	penalty_id			int PRIMARY KEY auto_increment,
	col_stdnt_info_id	int, /*foreign key from student_info table*/
	penalty_title		varchar(255), /*penalty title*/
	penalty_info		varchar(255), /*elaboration of penalty*/
	issuer				varchar(225), /*who issued the penalty*/
	date_issued			datetime, /*when it was issued*/
	date_cleared		datetime, /*date when finished*/
	status				int, /*0-pending,1-cleared*/ 
	type				int /*0-library,1-guidance,2-laboratory*/

);


/*Graduation applications for students table*/
CREATE TABLE grad_application
(

	application_id		int auto_increment PRIMARY KEY, 
	col_stdnt_info_id		int, /*foreign key from student_info table*/
	date				datetime, /*date issued*/
	status				int, /*0-disapproved, 1-approved*/ 
	form				varchar(255), /*location from pic/gradappli/xxxx.jpg/*/
	approved_by			varchar(255) /*name of approver, NULL of disapprover*/

);


/*student academic documents table*/
CREATE TABLE acad_docu
(

	acad_docu_id		int PRIMARY KEY auto_increment,
	col_stdnt_info_id		int, /*foreign key from student_info table*/
	acad_docu_required_id int, /*foreign key from acad_docu_required*/
	receiver 			int, /*foreign key from person table*/
	date_receive		datetime, /*when did it send*/
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

/*table for the program and their current curriculum*/
CREATE TABLE program_curriculum
(

	program_id int, /*foreign key from program table*/
	curriculum_id int, /*foreign key from curriculum table*/
	total_years int, /*number of years of a program*/
	status int /*status 0-inactive, 1- active*/

);


/*table that contains all courses for a certain program*/
CREATE TABLE program_courses
(

	curriculum_id int, /*foreign key from curriculum table*/
	program_id int, /*foreign key from program table*/
	course_id int, /*foreign key from courses table*/
	semester_id	 int, /*foreign key from semesters table*/
	year_level int /*eg 1,2,3,4,5*/
);


/*END OF COLLEGE TABLES*/



/*~~~~~~~~~~~~~~~~~~~~~~~~~~~~K-12 TABLES~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/

CREATE TABLE shs_track_offered
(
	shs_track_id		int PRIMARY KEY auto_increment,
	track_name			varchar(255), /*track name*/
	track_desc			varchar(255) /*track description*/
);

CREATE TABLE shs_track_strands
(
	track_strand_id	int PRIMARY KEY auto_increment,
	shs_track_id		int, /*foreign key from shs_track_offered*/
	strand_name			varchar(255),
	strand_desc			varchar(255)
);

CREATE TABLE grade_levels
(
	grade_level_id 							int PRIMARY KEY auto_increment,
	grade_level 							int,/*1-12*/
	grade_desc 								varchar(225)/*ex elementary 1-6, 7-10 jhs, 11-12*/
);

CREATE TABLE k12_sections
(
	k12_section_id 							int PRIMARY KEY auto_increment,
	grade_level_id 							int,/*FK*/
	faculty_adviser 						int,/*FK, person ID*/
	ay_id									int,/*FK*/
	section_no 								int,/*1,2,3 etc*/
	section_name 							varchar(255),/*if meron, Aristotle, Pythagoras, etc*/
	room_id									int /*foreign key, from rooms table // room they are staying in*/
);	

CREATE TABLE k12_student_info
(
	k12_stdnt_info_id 						int PRIMARY KEY auto_increment,
	person_id 								int, /*foreign key*/
	grade_level_id							int, /*foreign key*/
	k12_section_id 							int,/*foreign key*/
	shs_track_id 							int,/*fk, if SHS only, else NULL*/
	track_strand_id 						int,/*fk, if SHS only, else NULL*/
	profile_pic 							varchar(225), /*address of profile picture, eg. students/k12/xxx.jpg*/
	student_no 								varchar(255),
	stdnt_status 							int,/*0-inactive, 1-active*/			
	indeficiency							int,/*0-none, 1-blocked*/
	stdnt_type 								int/*0-regular, 1-shiftee, 2-transferee, 3-cross enrollee*/
);

CREATE TABLE k12_section_info
(
	k12_section_info_id 					int PRIMARY KEY auto_increment,
	k12_stdnt_info_id 						int,/*FK*/
	k12_section_id 							int,/*FK*/
	ay_id									int /*FK*/
);

CREATE TABLE k12_subjects
(
	k12_subject_id 							int PRIMARY KEY auto_increment,
	grade_level_id 							int,/*fk*/
	shs_track_id							int,/*fk, if SHS only, else NULL*/
	subject_code							varchar(20),/*Null if grade level is 9 and below*/
	subject_title							varchar(50),
	subject_desc							varchar(255)
);		

CREATE TABLE k12_subjects_schedules
(
	k12_subject_schedule_id 				int PRIMARY KEY auto_increment,
	k12_subject_id 							int,/*fk*/
	k12_section_id 							int,/*fk*/
	faculty 								int,/*fk, person_id*/
	day 									int,/*M,T,W,TH,F,S*/
	time_start 								time,/*9:00AM*/
	time_end  								time,/*10:00PM*/
	room_id									int /*foreign key, from rooms table*/
);

CREATE TABLE k12_grades
(
	k12_grades_id 							int PRIMARY KEY auto_increment,
	k12_subject_id 							int,/*fk*/
	faculty 								int,/*fk, person_id*/
	k12_stdnt_info_id 						int,/*fk*/
	ay_id 									int,/*fk*/
	quarter_1 								int,/*0-100, pre*/
	quarter_2 								int,/*0-100*/
	quarter_3 								int,/*0-100*/
	quarter_4 								int,/*0-100*/
	final_grade 							decimal(10,2),/*0-100*/
	remarks									varchar(225),
	descriptor 								varchar(225)/*90-100 Outstanding,85-89 Very satisfactory, 80-84 satisfactory, 75-79 Fairly Satisfactory, Below 75 Did not meet expectations*/
);

CREATE TABLE k12_student_attendance
(
	k12_stdnt_attendance_id 				int PRIMARY KEY auto_increment,
	k12_subject_schedule_id					int,/*FK*/
	k12_stdnt_info_id						int,/*FK*/
	date 									date,/*eg. September 11,2001*/
	day 									int,/*day '1' or '2' of the whole period*/
	status 									int,/*0-absent, 1-present, 2 -excused*/
	reason									varchar(225)/*if excused*/
);

CREATE TABLE k12_faculty_attendance
(
	k12_faculty_attendance_id 				int PRIMARY KEY auto_increment,
	faculty 								int,/*person_id*/
	date									date,
	time_in									time,
	time_out								time,
	status 									varchar(225),
	reason									varchar(225)
);


/*END OF K-12 TABLES*/

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
	sex				varchar(1), /*M or F*/
	add_house_no 	varchar(50), /*address house/building number*/
	add_strt_name 	varchar(255), /*address street name*/
	add_barangay	varchar(255), /*address barangay*/
	add_prov_id 	int, /*address province, foreign key from province table*/
	add_town_id		int, /*address city/municipality, foreign key from town table*/
	add_reg_id		int, /*address region, foreign key from region table*/
	contact_no 		varchar(20), /*contact number*/
	id_pic			varchar(255), /*link of profile picture in folder*/
/*	last_school 	varchar(255), /*last school*/
/*	last_school_add varchar(255), /*last school address*/
	status 			int /* 0- unaccepted, 1- accepted by admission etc, 2- pending*/

);


/*table for applicants evaluations*/
CREATE TABLE school_evaluation
(

	school_eval_id int primary key auto_increment,
	stdnt_appli_id int, /*foreign key from student_applicants table*/
	evaluator int, /*foreign key from person table*/
	exam_result int, /*score*/
	exam_date date, /*date of exam*/
	evaluation varchar(255) /*evaluation comment*/

);


/*table for college applicants*/
CREATE TABLE college_applicants
(

	stdnt_appli_id int, /*foreign key from student_applicants table*/
	shs_school varchar(255), /*senior high school*/
	shs_school_add varchar(255), /*shs address*/
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
	jhs_school_add varchar(255), /*jhs address*/
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
	col_stdnt_info_id int, /*foreign key from student info table*/
	form varchar(255), /*location of form pic/requests/xxx.jpg*/
	approved int, /*0-no,1-yes*/
	approved_by varchar(255) /*name of approver*/

);

/*table for student messages */
CREATE TABLE student_messages
(

	stdnt_message_id int PRIMARY KEY auto_increment,
	col_stdnt_info_id int, /*foreign key from student info table*/
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

	announcement_id int primary key auto_increment,
	ay_id 				  int, /*foreign key from academic_year table*/
	semester_id			  int, /*foreign key from semesters table*/
	recipient_category	  int, /*0-course, 1-program, 2-college, 3-Department, 4-all*/
	recipient_id		  int, /*Primary Key ID of target recipient*/
	recipient_type        int, /*0-student, 1- faculty, 2-all*/
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
	col_stdnt_info_id int, /*foreign key from student info table*/
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
	course_id				int	/* subject/course in the current sem paid */

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



/*CREATE TABLE course_fees
/*(
/*
/*	course_fee_id		int PRIMARY KEY auto_increment,
/*	course_id 			int, /*foreign key from courses table*/
/*	lec_fee				decimal(10,2), /*lect fee per unit*/
/*	lab_fee				decimal(10,2), /*lab fee per unit*/
/*	misc_fees			varchar(255) /*misc_fee_id, if more than one separate by | eg. 1|2|3*/

/*);


/*CREATE TABLE misc_fees
/*(
/*
/*	misc_fee_id			int PRIMARY KEY auto_increment,
/*	misc_name			varchar(255), /*misc fee name*/
/*	misc_cost			decimal(10,2),	/*misc fee cost*/
/*	misc_desc			varchar(225)	/*misc fee description*/

/*);
*/


CREATE TABLE fees
(
	fee_id 				int PRIMARY KEY auto_increment,
	fee_type			varchar(255),
	price 				decimal(10,2)
);

CREATE TABLE enrollment_transactions
(
	transact_no				int PRIMARY KEY auto_increment,
	person_id           	int, /*foreign key from persons table*/
	curriculum_id			int, /*foreign key from curriculum table*/
	program_id				int, /*foreighn key from program table*/
	course_id 				int, /*foreign key from course table*/
	semester            	varchar(255),
	official_receipt_no 	int, /**/
	official_receipt_date	date,/**/
	official_receipt_time	time,/**/
	amount_paid				decimal(10,2)/**/

);


CREATE TABLE notifications
(

	notification_id	    int PRIMARY KEY auto_increment,
	sender				int, /*foreign key from person table*/
	receiver            int, /*foreign key from person table*/
	header              varchar(255), /*title/header of notification*/
	body                varchar(255), /*body message*/
	attachment          varchar(255), /*attachment file link from folder eg. /attachments/xx.jpg*/
	link                varchar(255), /*any url link the sender wants to send receiver*/
	status              int /*0-unread,1-read*/

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

/*
ALTER TABLE `courses`
ADD CONSTRAINT `courses_cns_1` FOREIGN KEY (`program_id`) REFERENCES `program` (`program_id`),
ADD CONSTRAINT `courses_cns_2` FOREIGN KEY (`curriculum_id`) REFERENCES `curriculum` (`curriculum_id`),
ADD CONSTRAINT `courses_cns_3` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`semester_id`);
*/

ALTER TABLE `enrollment_transactions`
ADD CONSTRAINT `enrollment_transactions_cns_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`person_id`),
ADD CONSTRAINT `enrollment_transactions_cns_2` FOREIGN KEY (`curriculum_id`) REFERENCES `curriculum` (`curriculum_id`),
ADD CONSTRAINT `enrollment_transactions_cns_3` FOREIGN KEY (`program_id`) REFERENCES `program` (`program_id`),
ADD CONSTRAINT `enrollment_transactions_cns_4` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`);


ALTER TABLE `student_load`
ADD CONSTRAINT `student_load_cns_1` FOREIGN KEY (`ay_id`) REFERENCES `academic_year` (`ay_id`),
ADD CONSTRAINT `student_load_cns_2` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`semester_id`),
ADD CONSTRAINT `student_load_cns_3` FOREIGN KEY (`col_stdnt_info_id`) REFERENCES `col_stdnt_info` (`col_stdnt_info_id`);
;

ALTER TABLE `faculty_load`
ADD CONSTRAINT `faculty_load_cns_1` FOREIGN KEY (`ay_id`) REFERENCES `academic_year` (`ay_id`),
ADD CONSTRAINT `faculty_load_cns_2` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`semester_id`);

ALTER TABLE `school_evaluation`
ADD CONSTRAINT `school_evaluation_cns_1` FOREIGN KEY (`stdnt_appli_id`) REFERENCES `student_applicants` (`stdnt_appli_id`),
ADD CONSTRAINT `school_evaluation_cns_2` FOREIGN KEY (`evaluator`) REFERENCES `person` (`person_id`);

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
ADD CONSTRAINT `course_schedules_cns_3` FOREIGN KEY (`block_id`) REFERENCES `block` (`block_id`),
ADD CONSTRAINT `course_schedules_cns_4` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`room_id`);

ALTER TABLE `program_courses`
ADD CONSTRAINT `program_courses_cns_1` FOREIGN KEY (`curriculum_id`) REFERENCES `curriculum` (`curriculum_id`),
ADD CONSTRAINT `program_courses_cns_2` FOREIGN KEY (`program_id`) REFERENCES `program` (`program_id`),
ADD CONSTRAINT `program_course_cns_3` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`),
ADD CONSTRAINT `program_course_cns_4` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`semester_id`);

ALTER TABLE `notifications`
ADD CONSTRAINT `notifications_cns_1` FOREIGN KEY (`sender`) REFERENCES `person` (`person_id`),
ADD CONSTRAINT `notifications_cns_2` FOREIGN KEY (`receiver`) REFERENCES `person` (`person_id`);

ALTER TABLE `col_stdnt_info`
ADD CONSTRAINT `col_stdnt_info_cns_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`person_id`),
/*ADD CONSTRAINT `col_stdnt_info_cns_2` FOREIGN KEY (`prnt_grdn_info_id`) REFERENCES `prnt_grdn_info` (`prnt_grdn_info_id`),*/
/*ADD CONSTRAINT `col_stdnt_info_cns_3` FOREIGN KEY (`academics_docu_id`) REFERENCES `acad_docu` (`acad_docu_id`),*/
ADD CONSTRAINT `col_stdnt_info_cns_2` FOREIGN KEY (`acad_back_info_id`) REFERENCES `acad_back_info` (`acad_back_info_id`),
ADD CONSTRAINT `col_stdnt_info_cns_3` FOREIGN KEY (`program_id`) REFERENCES `program` (`program_id`),
ADD CONSTRAINT `col_stdnt_info_cns_4` FOREIGN KEY (`curriculum_id`) REFERENCES `curriculum` (`curriculum_id`);

ALTER TABLE `grades`
ADD CONSTRAINT `grades_cns_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`),
ADD CONSTRAINT `grades_cns_2` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`),
ADD CONSTRAINT `grades_cns_3` FOREIGN KEY (`col_stdnt_info_id`) REFERENCES `col_stdnt_info` (`col_stdnt_info_id`),
ADD CONSTRAINT `grades_cns_4` FOREIGN KEY (`schedule_id`) REFERENCES `schedules` (`schedule_id`),
ADD CONSTRAINT `grades_cns_5` FOREIGN KEY (`course_schedule_id`) REFERENCES `course_schedules` (`course_schedule_id`),
ADD CONSTRAINT `grades_cns_6` FOREIGN KEY (`ay_id`) REFERENCES `academic_year` (`ay_id`),
ADD CONSTRAINT `grades_cns_7` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`semester_id`);

ALTER TABLE `schedules`
ADD CONSTRAINT `schedule_cns_1` FOREIGN KEY (`course_schedule_id`) REFERENCES `course_schedules` (`course_schedule_id`),
ADD CONSTRAINT `schedule_cns_2` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`),
/*ADD CONSTRAINT `schedule_cns_3` FOREIGN KEY (`block_id`) REFERENCES `block` (`block_id`),*/
ADD CONSTRAINT `schedule_cns_3` FOREIGN KEY (`col_stdnt_info_id`) REFERENCES `col_stdnt_info` (`col_stdnt_info_id`),
ADD CONSTRAINT `schedule_cns_4` FOREIGN KEY (`ay_id`) REFERENCES `academic_year` (`ay_id`),
ADD CONSTRAINT `schedule_cns_5` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`semester_id`);

ALTER TABLE `block`
ADD CONSTRAINT `block_cns_1` FOREIGN KEY (`program_id`) REFERENCES `program` (`program_id`)/*,
ADD CONSTRAINT `block_cns_2` FOREIGN KEY (`block_info_id`) REFERENCES `block_info` (`block_info_id`)*/;

ALTER TABLE `block_info`
ADD CONSTRAINT `block_info_cns_1` FOREIGN KEY (`col_stdnt_info_id`) REFERENCES `col_stdnt_info` (`col_stdnt_info_id`),
ADD CONSTRAINT `block_info_cns_2` FOREIGN KEY (`block_id`) REFERENCES `block` (`block_id`),
ADD CONSTRAINT `block_info_cns_3` FOREIGN KEY (`ay_id`) REFERENCES `academic_year` (`ay_id`);	

ALTER TABLE `faculty`
ADD CONSTRAINT `faculty_cns_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`person_id`),
ADD CONSTRAINT `faculty_cns_2` FOREIGN KEY (`dept_id`) REFERENCES `dept` (`dept_id`),
ADD CONSTRAINT `faculty_cns_3` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`college_id`),
ADD CONSTRAINT `faculty_cns_4` FOREIGN KEY (`faculty_load_id`) REFERENCES `faculty_load` (`faculty_load_id`);	

ALTER TABLE `users`
ADD CONSTRAINT `users_cns_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`person_id`);

ALTER TABLE `dept`
ADD CONSTRAINT `dept_cns_1` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`college_id`);

ALTER TABLE `curriculum`
ADD CONSTRAINT `curriculum_cns_1` FOREIGN KEY (`program_id`) REFERENCES `program` (`program_id`);

ALTER TABLE `program`
ADD CONSTRAINT `program_cns_1` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`college_id`);

ALTER TABLE `acad_back_info`
ADD CONSTRAINT `acad_back_info_cns_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`person_id`);

ALTER TABLE `stdnt_penalties`
ADD CONSTRAINT `stdnt_penalties_cns_1` FOREIGN KEY (`col_stdnt_info_id`) REFERENCES `col_stdnt_info` (`col_stdnt_info_id`);

ALTER TABLE `grad_application`
ADD CONSTRAINT `grad_application_cns_1` FOREIGN KEY (`col_stdnt_info_id`) REFERENCES `col_stdnt_info` (`col_stdnt_info_id`);

ALTER TABLE `acad_docu`
ADD CONSTRAINT `acad_docu_cns_1` FOREIGN KEY (`col_stdnt_info_id`) REFERENCES `col_stdnt_info` (`col_stdnt_info_id`),
ADD CONSTRAINT `acad_docu_cns_2` FOREIGN KEY (`acad_docu_required_id`) REFERENCES `acad_docu_required` (`acad_docu_required_id`),
ADD CONSTRAINT `acad_docu_cns_3` FOREIGN KEY (`receiver`) REFERENCES `person` (`person_id`);

ALTER TABLE `student_applicants_docu`
ADD CONSTRAINT `student_applicants_docu_cns_1` FOREIGN KEY (`stdnt_appli_id`) REFERENCES `student_applicants` (`stdnt_appli_id`);

ALTER TABLE `cashiering_module`
ADD CONSTRAINT `cashiering_module_cns_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`person_id`),
ADD CONSTRAINT `cashiering_module_cns_2` FOREIGN KEY (`curriculum_id`) REFERENCES `curriculum` (`curriculum_id`),	
ADD CONSTRAINT `cashiering_module_cns_3` FOREIGN KEY (`program_id`) REFERENCES `program` (`program_id`),	
ADD CONSTRAINT `cashiering_module_cns_4` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`);	


ALTER TABLE `accounting_journal`
ADD CONSTRAINT `accounting_journal_cns_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`person_id`);

ALTER TABLE `payments`
ADD CONSTRAINT `payments_cns_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`person_id`);


ALTER TABLE `student_messages`
ADD CONSTRAINT `student_messages_cns_1` FOREIGN KEY (`col_stdnt_info_id`) REFERENCES `col_stdnt_info` (`col_stdnt_info_id`);

ALTER TABLE `prnt_grdn_info`
ADD CONSTRAINT `prnt_grdn_info_cns_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`person_id`);

ALTER TABLE `faculty_messages`
ADD CONSTRAINT `faculty_messages_cns_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`);

ALTER TABLE `student_attendance`
ADD CONSTRAINT `student_attendance_cns_1` FOREIGN KEY (`schedule_id`) REFERENCES `schedules` (`schedule_id`),
ADD CONSTRAINT `student_attendance_cns_2` FOREIGN KEY (`col_stdnt_info_id`) REFERENCES `col_stdnt_info` (`col_stdnt_info_id`),
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

ALTER TABLE `shs_track_strands`
ADD CONSTRAINT `shs_track_strands_cns_1` FOREIGN KEY (`shs_track_id`) REFERENCES `shs_track_offered` (`shs_track_id`);


/*
ALTER TABLE `course_fees`
ADD CONSTRAINT `course_fees_cns_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`);
*/


ALTER TABLE `k12_sections`
ADD CONSTRAINT `k12_sections_cns_1` FOREIGN KEY (`faculty_adviser`) REFERENCES `person` (`person_id`),
ADD CONSTRAINT `k12_sections_cns_2` FOREIGN KEY (`grade_level_id`) REFERENCES `grade_levels` (`grade_level_id`),
ADD CONSTRAINT `k12_sections_cns_3` FOREIGN KEY (`ay_id`) REFERENCES `academic_year` (`ay_id`),
ADD CONSTRAINT `k12_sections_cns_4` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`room_id`)
;

ALTER TABLE `k12_student_info`
ADD CONSTRAINT `k12_student_info_cns_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`person_id`),
ADD CONSTRAINT `k12_student_info_cns_2` FOREIGN KEY (`grade_level_id`) REFERENCES `grade_levels` (`grade_level_id`),
ADD CONSTRAINT `k12_student_info_cns_3` FOREIGN KEY (`K12_section_id`) REFERENCES `K12_sections` (`K12_section_id`),
ADD CONSTRAINT `k12_student_info_cns_4` FOREIGN KEY (`shs_track_id`) REFERENCES `shs_track_offered` (`shs_track_id`),
ADD CONSTRAINT `k12_student_info_cns_5` FOREIGN KEY (`track_strand_id`) REFERENCES `shs_track_strands` (`track_strand_id`)
;

ALTER TABLE `k12_section_info`
ADD CONSTRAINT `k12_section_info_cns_1` FOREIGN KEY (`k12_stdnt_info_id`) REFERENCES `k12_student_info` (`k12_stdnt_info_id`),
ADD CONSTRAINT `k12_section_info_cns_2` FOREIGN KEY (`k12_section_id`) REFERENCES `k12_sections` (`k12_section_id`),
ADD CONSTRAINT `k12_section_info_cns_3` FOREIGN KEY (`ay_id`) REFERENCES `academic_year` (`ay_id`)
;

ALTER TABLE `k12_subjects`
ADD CONSTRAINT `k12_subjects_cns_1` FOREIGN KEY (`grade_level_id`) REFERENCES `grade_levels` (`grade_level_id`)
;

ALTER TABLE `k12_subjects_schedules`
ADD CONSTRAINT `k12_subjects_schedules_cns_1` FOREIGN KEY (`k12_subject_id`) REFERENCES `k12_subjects` (`k12_subject_id`),
ADD CONSTRAINT `k12_subjects_schedules_cns_2` FOREIGN KEY (`k12_section_id`) REFERENCES `k12_sections` (`k12_section_id`),
ADD CONSTRAINT `k12_subjects_schedules_cns_3` FOREIGN KEY (`faculty`) REFERENCES `person` (`person_id`),
ADD CONSTRAINT `k12_subjects_schedules_cns_4` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`room_id`)
;

ALTER TABLE `k12_grades`
ADD CONSTRAINT `k12_grades_cns_1` FOREIGN KEY (`k12_subject_id`) REFERENCES `k12_subjects` (`k12_subject_id`),
ADD CONSTRAINT `k12_grades_cns_4` FOREIGN KEY (`faculty`) REFERENCES `person` (`person_id`),
ADD CONSTRAINT `k12_grades_cns_2` FOREIGN KEY (`k12_stdnt_info_id`) REFERENCES `k12_student_info` (`k12_section_id`),
ADD CONSTRAINT `k12_grades_cns_3` FOREIGN KEY (`ay_id`) REFERENCES `academic_year` (`ay_id`)
;

ALTER TABLE `k12_student_attendance`
ADD CONSTRAINT `k12_student_attendance_cns_1` FOREIGN KEY (`k12_subject_schedule_id`) REFERENCES `k12_subjects_schedules` (`k12_subject_schedule_id`),
ADD CONSTRAINT `k12_student_attendance_cns_2` FOREIGN KEY (`k12_stdnt_info_id`) REFERENCES `k12_student_info` (`k12_stdnt_info_id`)
;

ALTER TABLE `k12_faculty_attendance`
ADD CONSTRAINT `k12_faculty_attendance_cns_1` FOREIGN KEY (`faculty`) REFERENCES `person` (`person_id`);
