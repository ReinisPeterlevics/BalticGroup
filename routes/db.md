Countries table: 
    country_id serial primary key not null
    name varchar(100) not null
    description text not null
    image varchar(255) not null

Cities table:
    city_id serial primary key not null
    name varchar(100) not null
    description text not null
    image varchar(255) not null
        country_id int foreign key not null       OR     Distanations table: with 
                                            distanation_id serial primary key not null
                                            country_id int foreign key not null
                                            city_id int foreign key not null

Seasons table:
    season_id serial primary key not null
    name varchar(100) not null
    ?season strat date?
    ?season end date?

Activities table:
    activity_id serial primary key not null
    name varchar(100) not null
    description text not null
    image varchar(255) not null
    duration (in minutes) varchar(100) not null

Tours table:
    tour_id serial primary key not null
    name varchar(100) not null
    description text not null
    country_id foreign key not null
    season_id foreign key not null
    hotel varchar(255) not null
    image
    start date
    end date
    duration
    price
    place_left
    ?departure 
    ?return
    ?flight_id
    ??in_cart


Flight table: ???????????????????????????????
    flight_id
    departure
    return


Tour_activity table:
    tour_activity_id
    tour_id
    activity_id

????????????????????????????????????
Bookings table

Customer table

Payments table



