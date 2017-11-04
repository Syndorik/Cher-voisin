drop table if exists Users;
drop table if exists Friends;
drop table if exists Loans;
drop table if exists Objects;
drop table if exists Reviews;
drop table if exists Godfathers;


create table Users(
    user_ID serial,
    username VARCHAR(50) not null unique,
    last_name VARCHAR(50) not null,
    first_name VARCHAR(50) not null,
    email VARCHAR(50) not null unique,
    password VARCHAR(30) not null,
    address VARCHAR(50) null,
    tokens int not null,
    mark int not null check (mark <= 5),
    primary key (user_ID)
);

create table Friends(
    user_ID1 int not null,
    user_ID2 int not null,
    primary key (user_ID1, user_ID2)
);

create table Godfathers(
    godfather_ID int not null,
    godchild_ID int not null,
    primary key (godfather_ID, godchild_ID)
);

create table Titles(
    user_ID int not null,
    borrower_title VARCHAR(50),
    lender_title VARCHAR(50),
    godfather_title VARCHAR(50),
    primary key (user_ID)
);

create table Reviews(
    review_ID serial,
    loan_ID int not null,
    user_receiving int not null,
    user_giving int not null,
    mark int not null check (mark < 5),
    comment VARCHAR(200) not null,
    primary key (review_ID)
);

create table Loans(
    loan_ID serial,
    object_ID int not null,
    borrower_ID int not null,
    loan_date date not null,
    primary key (loan_ID)
);

create table Objects(
    object_ID serial,
    object_name VARCHAR(50) not null,
    owner_ID int not null,
    state boolean not null,
    primary key (object_ID)
);
