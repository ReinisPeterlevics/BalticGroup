//Reinis I dont thik we need this field or table -> (-)

Countries table: 
    country_id serial primary key not null
    name varchar(100) not null
    description text not null (-) we wont use this field //Kate agree
    image varchar(255) not null (-) we wont use this field //Kate thought we could add an image carousel to detail page and include it there as snapshot of what customer need to be ready for

Cities table: (-) because its an uncenecessary extra table to have //Kate so people will travel to country without knowing where?
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
    ?season strat date? (-) //Kate agree
    ?season end date? (-) //Kate agree

Activities table:
    activity_id serial primary key not null
    name varchar(100) not null
    description text not null (-) we wont use this field //Kate why not to utilise it in detail page to give understanding for activities
    image varchar(255) not null (-) we wont use this field //Kate same reason as with image in countries
    duration (in minutes) varchar(100) not null (-) we wont use this field //Kate so that tour looks planned? okay, maybe we dont need it

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
    ?return (-) //Kate do not really agree because its the information that customer needs to plan their holiday. Or you think about making tours to happen one time in start_date end_date/departure return??? then okay
    ?flight_id (-)
    ??in_cart (-)


Flight table: ??????????????????????????????? (-) //Kate okay
    flight_id
    departure
    return


Tour_activities table:
    tour_activity_id
    tour_id
    activity_id

Orders table:
    order_id
    tour_id //Kate BIG Question! if customer buys two tours in one go, what do we do? different order id? then total cost will ned to be split
    customer_name
    customer_email //Kate it may be easier if we put customer related info into seperate table for easier access/select and insert/update, but does not really matter (i hope it wont) 
    customer_phone
    payment_type
    person_count
    total_cost
    //Kate order_statuss? paid/pending/canceled
    //Kate order_date?

???????????????????????????????????? (-) //Kate okay
Bookings table

Customer table

Payments table

