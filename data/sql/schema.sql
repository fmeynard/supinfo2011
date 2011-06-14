CREATE TABLE agency (id BIGINT AUTO_INCREMENT, name VARCHAR(64) NOT NULL, address VARCHAR(255) NOT NULL, address_bis VARCHAR(255), phone VARCHAR(15), mail VARCHAR(100), fax VARCHAR(15), slug VARCHAR(255), UNIQUE INDEX agency_sluggable_idx (slug), PRIMARY KEY(id)) ENGINE = MySIAM;
CREATE TABLE agency_room (id BIGINT AUTO_INCREMENT, name VARCHAR(64) NOT NULL, agency_id BIGINT, capacity BIGINT, slug VARCHAR(255), UNIQUE INDEX agency_room_sluggable_idx (slug), PRIMARY KEY(id)) ENGINE = MySIAM;
CREATE TABLE category (id BIGINT AUTO_INCREMENT, name VARCHAR(64) NOT NULL, short_description VARCHAR(255), description LONGTEXT, image VARCHAR(255), category_id BIGINT, is_active TINYINT(1), slug VARCHAR(255), UNIQUE INDEX category_sluggable_idx (slug), INDEX category_id_idx (category_id), PRIMARY KEY(id)) ENGINE = MySIAM;
CREATE TABLE community_category (id BIGINT AUTO_INCREMENT, name VARCHAR(64) NOT NULL, description VARCHAR(255), is_active TINYINT(1), slug VARCHAR(255), UNIQUE INDEX community_category_sluggable_idx (slug), PRIMARY KEY(id)) ENGINE = MySIAM;
CREATE TABLE community_post (id BIGINT AUTO_INCREMENT, title VARCHAR(64) NOT NULL, content LONGTEXT NOT NULL, date DATETIME, category_id BIGINT, is_active TINYINT(1), slug VARCHAR(255), UNIQUE INDEX community_post_sluggable_idx (slug), INDEX category_id_idx (category_id), PRIMARY KEY(id)) ENGINE = MySIAM;
CREATE TABLE formation_center (id BIGINT AUTO_INCREMENT, name VARCHAR(64) NOT NULL, image VARCHAR(255), address VARCHAR(255), address_bis VARCHAR(255), capacity BIGINT, slug VARCHAR(255), UNIQUE INDEX formation_center_sluggable_idx (slug), PRIMARY KEY(id)) ENGINE = MySIAM;
CREATE TABLE formation_session (id BIGINT AUTO_INCREMENT, name VARCHAR(64), formation_type_id BIGINT, capacity BIGINT, date_start DATETIME, date_end DATETIME, INDEX formation_type_id_idx (formation_type_id), PRIMARY KEY(id)) ENGINE = MySIAM;
CREATE TABLE formation_type (id BIGINT AUTO_INCREMENT, name VARCHAR(64) NOT NULL, PRIMARY KEY(id)) ENGINE = MySIAM;
CREATE TABLE frm__abuse_log (user_id BIGINT, topic_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(user_id, topic_id)) ENGINE = MySIAM;
CREATE TABLE frm__category (id BIGINT AUTO_INCREMENT, name VARCHAR(255), description LONGTEXT, rank BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, slug VARCHAR(255), UNIQUE INDEX frm__category_sluggable_idx (slug), PRIMARY KEY(id)) ENGINE = MySIAM;
CREATE TABLE frm__forum (id BIGINT AUTO_INCREMENT, name VARCHAR(255), description LONGTEXT, rank BIGINT, category_id BIGINT, latest_post_id BIGINT, nb_posts BIGINT, nb_topics BIGINT, phpbb_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, slug VARCHAR(255), UNIQUE INDEX frm__forum_sluggable_idx (slug), INDEX category_id_idx (category_id), INDEX latest_post_id_idx (latest_post_id), PRIMARY KEY(id)) ENGINE = MySIAM;
CREATE TABLE frm__post (id BIGINT AUTO_INCREMENT, title VARCHAR(255), content LONGTEXT, topic_id BIGINT, user_id BIGINT, forum_id BIGINT, author_name VARCHAR(255), phpbb_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX forum_id_idx (forum_id), INDEX topic_id_idx (topic_id), INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = MySIAM;
CREATE TABLE frm__rank (id BIGINT AUTO_INCREMENT, nb_posts BIGINT NOT NULL, image VARCHAR(255), title VARCHAR(30) NOT NULL, slug VARCHAR(255), UNIQUE INDEX frm__rank_sluggable_idx (slug), PRIMARY KEY(id)) ENGINE = MySIAM;
CREATE TABLE frm__recommandation_log (user_id BIGINT, topic_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(user_id, topic_id)) ENGINE = MySIAM;
CREATE TABLE frm__topic (id BIGINT AUTO_INCREMENT, title VARCHAR(255), is_sticked TINYINT(1) DEFAULT '0', is_locked TINYINT(1) DEFAULT '0', forum_id BIGINT, latest_post_id BIGINT, user_id BIGINT, nb_posts BIGINT DEFAULT 0, nb_views BIGINT DEFAULT 0, nb_recommandations BIGINT DEFAULT 0, phpbb_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, slug VARCHAR(255), UNIQUE INDEX frm__topic_sluggable_idx (slug), INDEX forum_id_idx (forum_id), INDEX latest_post_id_idx (latest_post_id), INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = MySIAM;
CREATE TABLE frm__topic_view (user_id BIGINT, topic_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(user_id, topic_id)) ENGINE = MySIAM;
CREATE TABLE package (id BIGINT AUTO_INCREMENT, name VARCHAR(64) NOT NULL, short_description VARCHAR(255), description LONGTEXT, price FLOAT(7, 2) NOT NULL, is_active TINYINT(1) DEFAULT '0', image VARCHAR(255), category_id BIGINT NOT NULL, slug VARCHAR(255), UNIQUE INDEX package_sluggable_idx (slug), INDEX category_id_idx (category_id), PRIMARY KEY(id)) ENGINE = MySIAM;
CREATE TABLE package_line (id BIGINT AUTO_INCREMENT, name VARCHAR(64) NOT NULL, image VARCHAR(255), package_id BIGINT, INDEX package_id_idx (package_id), PRIMARY KEY(id)) ENGINE = MySIAM;
CREATE TABLE single_offer (id BIGINT AUTO_INCREMENT, name VARCHAR(64) NOT NULL, short_description VARCHAR(255), description LONGTEXT, price FLOAT(7, 2), category_id BIGINT NOT NULL, is_active TINYINT(1), slug VARCHAR(255), UNIQUE INDEX single_offer_sluggable_idx (slug), INDEX category_id_idx (category_id), PRIMARY KEY(id)) ENGINE = MySIAM;
CREATE TABLE vehicle (id BIGINT AUTO_INCREMENT, name VARCHAR(64) NOT NULL, brand VARCHAR(64), model VARCHAR(64), year DATETIME, purchase_date DATETIME, next_verif_start DATETIME, next_verif_end DATETIME, agency_id BIGINT NOT NULL, vehicle_type_id BIGINT NOT NULL, slug VARCHAR(255), UNIQUE INDEX vehicle_sluggable_idx (slug), INDEX agency_id_idx (agency_id), INDEX vehicle_type_id_idx (vehicle_type_id), PRIMARY KEY(id)) ENGINE = MySIAM;
CREATE TABLE vehicle_type (id BIGINT AUTO_INCREMENT, name VARCHAR(64) NOT NULL, PRIMARY KEY(id)) ENGINE = MySIAM;
CREATE TABLE vehicle_verification (id BIGINT AUTO_INCREMENT, vehicle_id BIGINT, date_start DATETIME, date_end DATETIME, INDEX vehicle_id_idx (vehicle_id), PRIMARY KEY(id)) ENGINE = MySIAM;
CREATE TABLE sf_guard_group (id INT AUTO_INCREMENT, name VARCHAR(255) UNIQUE, description TEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_group_permission (group_id INT, permission_id INT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(group_id, permission_id)) ENGINE = INNODB;
CREATE TABLE sf_guard_permission (id INT AUTO_INCREMENT, name VARCHAR(255) UNIQUE, description TEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_remember_key (id INT AUTO_INCREMENT, user_id INT, remember_key VARCHAR(32), ip_address VARCHAR(50), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX user_id_idx (user_id), PRIMARY KEY(id, ip_address)) ENGINE = INNODB;
CREATE TABLE sf_guard_user (id INT AUTO_INCREMENT, username VARCHAR(128) NOT NULL UNIQUE, algorithm VARCHAR(128) DEFAULT 'sha1' NOT NULL, salt VARCHAR(128), password VARCHAR(128), is_active TINYINT(1) DEFAULT '1', is_super_admin TINYINT(1) DEFAULT '0', last_login DATETIME, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX is_active_idx_idx (is_active), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user_group (user_id INT, group_id INT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(user_id, group_id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user_permission (user_id INT, permission_id INT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(user_id, permission_id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user_profile (id BIGINT AUTO_INCREMENT, sf_guard_user_id BIGINT NOT NULL, agency_id BIGINT, first_name VARCHAR(64), last_name VARCHAR(64), birthday DATETIME, type BIGINT, mail VARCHAR(64), phone VARCHAR(15), mobile VARCHAR(15), slug VARCHAR(255), UNIQUE INDEX sf_guard_user_profile_sluggable_idx (slug), INDEX sf_guard_user_id_idx (sf_guard_user_id), INDEX agency_id_idx (agency_id), PRIMARY KEY(id)) ENGINE = MySIAM;
ALTER TABLE category ADD CONSTRAINT category_category_id_category_id FOREIGN KEY (category_id) REFERENCES category(id);
ALTER TABLE community_post ADD CONSTRAINT community_post_category_id_community_category_id FOREIGN KEY (category_id) REFERENCES community_category(id);
ALTER TABLE formation_session ADD CONSTRAINT formation_session_formation_type_id_formation_type_id FOREIGN KEY (formation_type_id) REFERENCES formation_type(id) ON DELETE SET NULL;
ALTER TABLE frm__abuse_log ADD CONSTRAINT frm__abuse_log_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE frm__abuse_log ADD CONSTRAINT frm__abuse_log_topic_id_frm__topic_id FOREIGN KEY (topic_id) REFERENCES frm__topic(id) ON DELETE CASCADE;
ALTER TABLE frm__forum ADD CONSTRAINT frm__forum_latest_post_id_frm__post_id FOREIGN KEY (latest_post_id) REFERENCES frm__post(id) ON DELETE SET NULL;
ALTER TABLE frm__forum ADD CONSTRAINT frm__forum_category_id_frm__category_id FOREIGN KEY (category_id) REFERENCES frm__category(id) ON DELETE CASCADE;
ALTER TABLE frm__post ADD CONSTRAINT frm__post_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE frm__post ADD CONSTRAINT frm__post_topic_id_frm__topic_id FOREIGN KEY (topic_id) REFERENCES frm__topic(id) ON DELETE CASCADE;
ALTER TABLE frm__post ADD CONSTRAINT frm__post_forum_id_frm__forum_id FOREIGN KEY (forum_id) REFERENCES frm__forum(id) ON DELETE CASCADE;
ALTER TABLE frm__recommandation_log ADD CONSTRAINT frm__recommandation_log_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE frm__recommandation_log ADD CONSTRAINT frm__recommandation_log_topic_id_frm__topic_id FOREIGN KEY (topic_id) REFERENCES frm__topic(id) ON DELETE CASCADE;
ALTER TABLE frm__topic ADD CONSTRAINT frm__topic_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE SET NULL;
ALTER TABLE frm__topic ADD CONSTRAINT frm__topic_latest_post_id_frm__post_id FOREIGN KEY (latest_post_id) REFERENCES frm__post(id) ON DELETE SET NULL;
ALTER TABLE frm__topic ADD CONSTRAINT frm__topic_forum_id_frm__forum_id FOREIGN KEY (forum_id) REFERENCES frm__forum(id) ON DELETE CASCADE;
ALTER TABLE frm__topic_view ADD CONSTRAINT frm__topic_view_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE frm__topic_view ADD CONSTRAINT frm__topic_view_topic_id_frm__topic_id FOREIGN KEY (topic_id) REFERENCES frm__topic(id) ON DELETE CASCADE;
ALTER TABLE package ADD CONSTRAINT package_category_id_category_id FOREIGN KEY (category_id) REFERENCES category(id) ON DELETE SET NULL;
ALTER TABLE package_line ADD CONSTRAINT package_line_package_id_package_id FOREIGN KEY (package_id) REFERENCES package(id) ON DELETE SET NULL;
ALTER TABLE single_offer ADD CONSTRAINT single_offer_category_id_category_id FOREIGN KEY (category_id) REFERENCES category(id) ON DELETE SET NULL;
ALTER TABLE vehicle ADD CONSTRAINT vehicle_vehicle_type_id_vehicle_type_id FOREIGN KEY (vehicle_type_id) REFERENCES vehicle_type(id);
ALTER TABLE vehicle ADD CONSTRAINT vehicle_agency_id_agency_id FOREIGN KEY (agency_id) REFERENCES agency(id);
ALTER TABLE vehicle_verification ADD CONSTRAINT vehicle_verification_vehicle_id_vehicle_id FOREIGN KEY (vehicle_id) REFERENCES vehicle(id);
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_remember_key ADD CONSTRAINT sf_guard_remember_key_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_profile ADD CONSTRAINT sf_guard_user_profile_sf_guard_user_id_sf_guard_user_id FOREIGN KEY (sf_guard_user_id) REFERENCES sf_guard_user(id);
ALTER TABLE sf_guard_user_profile ADD CONSTRAINT sf_guard_user_profile_agency_id_agency_id FOREIGN KEY (agency_id) REFERENCES agency(id);
