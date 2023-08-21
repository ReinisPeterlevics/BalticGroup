<!-- Travel Agency databse selling tours(locations) -->


Countries table: 
    country_id serial primary key not null
    name varchar(100) not null
        image varchar(255) not null

Seasons table:
    season_id serial primary key not null
    name varchar(100) not null

Activities table:
    activity_id serial primary key not null
    name varchar(100) not null
        description text not null
        image varchar(255) not null
        duration (in minutes) varchar(100) not null

Locations table:
    location_id serial primary key not null
    name varchar(100) not null
    description text not null
    country_id foreign key not null
    season_id foreign key not null
    hotel varchar(255) not null
    image varchar(255) not null
    start_date date not null        //or datetime
    end_date date not null          //or datetime
    duration varchar(100) not null  //in minutes
    price decimal(10,2) not null
    spots_left int not null         //if 0 do not display location

Locations_activities table:
    location_activity_id serial primary key not null
    location_id foreign key not null
    activity_id foreign key not null

Order_locations table:
    order_location_id serial primary key not null
    order_id foreign key not null
    location_id foreign key not null
    person_count int not null
    starp_cost decimal(10,2) not null

Orders table:
    order_id serial primary key not null
    customer_first_name
    customer_last_name
    customer_phone_number              
    customer_email
    payment_type_id foreign key not null
    total_cost decimal(10,2) not null
        //Kate order_statuss? paid/pending/canceled
        //Kate order_date?
        
User table:
    

Payment_type table:
    payment_type_id serial primary key not null
    name varchar(100) not null
