//Reinis I dont thik we need this field or table -> (-)

Countries table: 
    country_id serial primary key not null
    name varchar(100) not null
    description text not null (-) we wont use this field
    image varchar(255) not null (-) we wont use this field

Cities table: (-) because its an uncenecessary extra table to have
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
    ?season strat date? (-)
    ?season end date? (-)

Activities table:
    activity_id serial primary key not null
    name varchar(100) not null
    description text not null (-) we wont use this field
    image varchar(255) not null (-) we wont use this field
    duration (in minutes) varchar(100) not null (-) we wont use this field

Tours table:
    tour_id serial primary key not null
    name varchar(100) not null
    description text not null
    country_id foreign key not null
    season_id foreign key not null
    hotel varchar(255) not null
    image
    start_date
    end_date
    duration
    price
    spots_left
    ?departure (-)
    ?return (-)
    ?flight_id (-)
    ??in_cart (-)


Flight table: ??????????????????????????????? (-)
    flight_id
    departure
    return


Tour_activities table:
    tour_activity_id
    tour_id
    activity_id

Orders table:
    order_id
    tour_id
    customer_name
    customer_email
    customer_phone
    payment_type
    person_count
    total_cost

???????????????????????????????????? (-)
Bookings table

Customer table

Payments table



