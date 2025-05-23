-- Gunakan database
CREATE DATABASE tomorrowland;
USE tomorrowland;

-- Tabel show (event per negara)
CREATE TABLE event_show (
    id INT AUTO_INCREMENT PRIMARY KEY,
    country VARCHAR(100) NOT NULL,
    location VARCHAR(100) NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL
);

-- Tabel artist (dengan bio)
CREATE TABLE artist (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    bio TEXT
);

-- Tabel stage
CREATE TABLE stage (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);

-- Tabel schedule
CREATE TABLE schedule (
    id INT AUTO_INCREMENT PRIMARY KEY,
    show_id INT NOT NULL,
    artist_id INT NOT NULL,
    stage_id INT NOT NULL,
    performance_time DATETIME NOT NULL,
    FOREIGN KEY (show_id) REFERENCES event_show(id),
    FOREIGN KEY (artist_id) REFERENCES artist(id),
    FOREIGN KEY (stage_id) REFERENCES stage(id)
);

-- Data isi: show (negara & lokasi)
INSERT INTO event_show (country, location, start_date, end_date) VALUES
('Belgium', 'Boom', '2024-07-19', '2024-07-28'),
('France', 'Alpe d’Huez', '2024-03-16', '2024-03-23'),
('USA', 'Miami', '2024-03-22', '2024-03-24'),
('Brazil', 'Sao Paulo', '2024-10-04', '2024-10-06');

-- Data isi: artist
INSERT INTO artist (name, bio) VALUES
('Martin Garrix', 'Young Dutch DJ known for energetic progressive house. Founder of STMPD RCRDS.'),
('Charlotte de Witte', 'Belgian techno queen known for her intense and hypnotic sets. Founder of KNTXT.'),
('Madeon', 'French producer with colorful audiovisual performances blending live vocals and MIDI.'),
('Alok', 'Brazilian DJ who blends bass music with Brazilian rhythms.'),
('Hardwell', 'Dutch big room house icon, known for high-energy festival anthems.');

-- Data isi: stage
INSERT INTO stage (name) VALUES
('Mainstage'),
('Freedom Stage'),
('Atmosphere'),
('Rose Garden');

-- Data isi: schedule
INSERT INTO schedule (show_id, artist_id, stage_id, performance_time) VALUES
(1, 1, 1, '2024-07-20 22:00:00'),  -- Martin Garrix at Belgium Mainstage
(1, 2, 2, '2024-07-21 01:00:00'),  -- Charlotte at Belgium Freedom
(2, 3, 3, '2024-03-17 20:00:00'),  -- Madeon at France Atmosphere
(4, 4, 4, '2024-10-05 23:00:00'),  -- Alok at Brazil Rose Garden
(3, 5, 1, '2024-03-23 22:00:00');  -- Hardwell at USA Mainstage