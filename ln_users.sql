create table users
(
    id             int auto_increment,
    name           varchar(150) null,
    date_birth     datetime     null,
    email          varchar(100) null,
    favorite_color varchar(15)  null,
    constraint users_id_uindex
        unique (id)
);
