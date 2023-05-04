#
# Table structure for table 'tx_viewstatistics_domain_model_track'
#
CREATE TABLE tx_viewstatistics_domain_model_track
(
    action text NOT NULL,
    object_type text NOT NULL,
    request_uri text NOT NULL,
    referrer text NOT NULL,
    user_agent text NOT NULL
);

#
# Table structure for table 'fe_users_locked'
#
CREATE TABLE fe_users_locked
(
    uid int(10) unsigned,
    tx_extbase_type varchar(255)
);

#
# Table structure for table 'be_users_locked'
#
CREATE TABLE be_users_locked
(
    uid int(10) unsigned,
    disable smallint(5) unsigned
);